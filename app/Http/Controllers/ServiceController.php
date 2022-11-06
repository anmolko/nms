<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services   = Service::get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=[
            'title'             => $request->input('title'),
            'slug'              => $request->input('slug'),
            'description'       => $request->input('description'),
            'sub_description'   => $request->input('sub_description'),
            'meta_title'        => $request->input('meta_title'),
            'meta_tags'         => $request->input('meta_tags'),
            'meta_description'  => $request->input('meta_description'),
            'created_by'        => Auth::user()->id,
        ];

        if(!empty($request->file('banner_image'))){
            $image          = $request->file('banner_image');
            $name           = uniqid().'_banner_'.$image->getClientOriginalName();
            $blog_path      = public_path('/images/service');

            if (!is_dir($blog_path)) {
                mkdir($blog_path, 0777);
            }
            $path           = base_path().'/public/images/service/';
            $moved          = Image::make($image->getRealPath())->fit(770, 416)->orientate()->save($path.$name);

            if ($moved){
                $data['banner_image']=$name;
            }
        }

        $service = Service::create($data);
        if($service){
            Session::flash('success','Service was created successfully !');
        }
        else{
            Session::flash('error','Service could not be created at the moment !');
        }

        return redirect()->route('services.index');
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
        $edit       = Service::find($id);
        return view('backend.service.edit',compact('edit'));
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
        $service                      =  Service::find($id);
        $service->title               =  $request->input('title');
        $service->slug                =  $request->input('slug');
        $service->description         =  $request->input('description');
        $service->sub_description     =  $request->input('sub_description');
        $service->meta_title          =  $request->input('meta_title');
        $service->meta_tags           =  $request->input('meta_tags');
        $service->meta_description    =  $request->input('meta_description');
        $banner                       =  $service->banner_image;
        $path                         = base_path().'/public/images/service/';

        if (!empty($request->file('banner_image'))){
            $image       = $request->file('banner_image');
            $name1       = uniqid().'_banner_'.$image->getClientOriginalName();
            $moved       = Image::make($image->getRealPath())->fit(770, 416)->orientate()->save($path.$name1);

            if ($moved){
                $service->banner_image= $name1;
                if (!empty($banner) && file_exists(public_path().'/images/service/'.$banner)){
                    @unlink(public_path().'/images/service/'.$banner);
                }
            }
        }

        $status = $service->update();
        if($status){
            Session::flash('success','Service was updated successfully !');
        }
        else{
            Session::flash('error','Something Went Wrong. Service could not be updated at the moment !');
        }
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete          = Service::find($id);
        $blogid          = $delete->id;
        $banner          = $delete->banner_image;
        $count           = $delete->count();

        $serviceid        = $delete->id;
        $menuitems        = MenuItem::where('service_id',$serviceid)->get();
        $menuname         = [];

        if(count($menuitems)>0){
            foreach ($menuitems as $items){
                $menu  = Menu::find($items->menu_id);
                array_push($menuname,ucwords($menu->name));
            }
            $status = 'Warning';
            return response()->json(['status'=>$status,'message'=>'This service is attached to menu(s). Please remove menu item first to delete this page.','name'=>$menuname]);
        }

        if (!empty($banner) && file_exists(public_path().'/images/service/'.$banner)){
            @unlink(public_path().'/images/service/'.$banner);
        }

        $remove          = $delete->delete();
        if($remove){
            $status ='success';
            return response()->json(['status'=>$status,'count'=>$count,'message'=>'Service has been removed succesfully! ','id'=>$blogid]);        }
        else{
            $status ='error';
            return response()->json(['status'=>$status,'count'=>$count,'message'=>'Service could not be removed. Try Again later !']);
        }
    }
}
