<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('action_heading')->after('welcome_side_image')->nullable();
            $table->string('action_button')->after('welcome_side_image')->nullable();
            $table->string('action_link')->after('welcome_side_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homepages', function (Blueprint $table) {
            $table->dropColumn('action_heading');
            $table->dropColumn('action_button');
            $table->dropColumn('action_link');
        });
    }
};
