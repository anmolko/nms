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
            $table->string('action_heading2')->after('welcome_side_image')->nullable();
            $table->string('action_button2')->after('welcome_side_image')->nullable();
            $table->string('action_link2')->after('welcome_side_image')->nullable();
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
            $table->dropColumn('action_heading2');
            $table->dropColumn('action_button2');
            $table->dropColumn('action_link2');
        });
    }
};
