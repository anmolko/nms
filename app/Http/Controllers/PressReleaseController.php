<?php

namespace App\Http\Controllers;

use App\Http\Requests\PressReleaseUpdateRequest;
use App\Models\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $press_path;
    private $press_thumb_path;
    public function __construct()
    {
        $this->middleware('auth');
        $this->press_path           = public_path('/images/press_releases');
        $this->press_thumb_path     = public_path('/images/press_releases/thumb');
    }

    public function index()
    {
        $press_release = PressRelease::all();
        return view('backend.press_release.index',compact('press_release'));
    }

    /**
     * Show the form for creating a new resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $data = [
                'title' => $request->input('title'),
                'slug' => $request->input('slug'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'created_by' => Auth::user()->id,
            ];

            if (!empty($request->file('image'))) {
                $image          = $request->file('image');
                $originalname   = str_replace(' ', '_', $image->getClientOriginalName());
                $name           = uniqid() . '_press_release_' . $originalname;
                if (!is_dir($this->press_path)) {
                    mkdir($this->press_path, 0777);
                }
                if (!is_dir($this->press_thumb_path)) {
                    mkdir($this->press_thumb_path, 0777);
                }
                $path           = base_path() . '/public/images/press_releases/';
                $thumb_path     = base_path().'/public/images/press_releases/thumb/';
                $thumb_name     = 'thumb_'.$name;
                $moved          = Image::make($image->getRealPath())->fit(770, 445)->orientate()->save($path . $name);
                $thumb          = Image::make($image->getRealPath())->fit(62,61)->orientate()->save($thumb_path.$thumb_name);
                if ($moved) {
                    $data['image'] = $name;
                }
            }

            $blog = PressRelease::create($data);
            if($blog){
                Session::flash('success','Press release was created successfully');
            }
            else{
                Session::flash('error','Press release Creation Failed');
            }

        return redirect()->route('press-release.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit   = PressRelease::find($id);
        return response()->json($edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $press                      =  PressRelease::find($id);
        $press->title               =  $request->input('title');
        $press->slug                =  $request->input('slug');
        $press->description         =  $request->input('description');
        $press->status              =  $request->input('status');
        $press->updated_by          =  Auth::user()->id;
        $oldimage                   =  $press->image;
        $thumbimage                 =  'thumb_'.$press->image;

        if (!empty($request->file('image'))){
            $image          = $request->file('image');
            $originalname   = str_replace(' ','_',$image->getClientOriginalName());
            $name1          = uniqid().'_press_release_'.$originalname;
            $thumb_path     = base_path().'/public/images/press_releases/thumb/';
            $thumb_name     = 'thumb_'.$name1;
            $path           = base_path().'/public/images/press_releases/';
            $moved          = Image::make($image->getRealPath())->fit(770, 445)->orientate()->save($path.$name1);
            $thumb          = Image::make($image->getRealPath())->fit(62,61)->orientate()->save($thumb_path.$thumb_name);


            if ($moved){
                $press->image= $name1;
                if (!empty($oldimage) && file_exists(public_path().'/images/press_releases/'.$oldimage)){
                    @unlink(public_path().'/images/press_releases/'.$oldimage);
                }
                if (!empty($thumbimage) && file_exists(public_path().'/images/press_releases/thumb/'.$thumbimage)){
                    @unlink(public_path().'/images/press_releases/thumb/'.$thumbimage);
                }
            }
        }
        $status = $press->update();
        if($status){
            Session::flash('success','Press Release was updated successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Press Release could not be Updated');
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete          = PressRelease::find($id);
        $rid             = $delete->id;
        $thumbimage      =  'thumb_'.$delete->image;

        if (!empty($delete->image) && file_exists(public_path().'/images/press_releases/'.$delete->image)){
            @unlink(public_path().'/images/press_releases/'.$delete->image);
        }
        if (!empty($thumbimage) && file_exists(public_path().'/images/press_releases/thumb/'.$thumbimage)){
            @unlink(public_path().'/images/press_releases/thumb/'.$thumbimage);
        }
        $remove = $delete->delete();
        if($remove){
            $status ='success';
            return response()->json(['status'=>$status,'message'=>'Press Release details has been removed! ','id'=>$rid]);        }
        else{
            $status ='error';
            return response()->json(['status'=>$status,'message'=>'Press Release details could not be removed. Try Again later !']);
        }
    }

    public function updateStatus(Request $request, $id){
        $press          = PressRelease::find($id);
        $press->status  = $request->status;
        $status         = $press->update();
        $new_status     = ($press->status == 'draft') ? "Draft":"Published";
        $value          = ($press->status == 'draft') ? "publish":"draft";
        if($status){
            $status ='success';
            return response()->json(['status'=>$status,'new_status'=>$new_status,'id'=>$id,'value'=>$value]);
        }
        else{
            $status ='error';
            return response()->json(['status'=>$status,'new_status'=>$new_status,'id'=>$id,'value'=>$value]);
        }
        return response()->json($confirmed);

    }
}
