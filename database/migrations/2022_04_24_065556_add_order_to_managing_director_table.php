<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToManagingDirectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('managing_director', function (Blueprint $table) {
            $table->integer('order')->default(0)->after('heading');
            $table->string('designation')->nullable()->after('heading');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('managing_director', function (Blueprint $table) {
            $table->dropColumn('order');
            $table->dropColumn('designation');
        });
    }
}
