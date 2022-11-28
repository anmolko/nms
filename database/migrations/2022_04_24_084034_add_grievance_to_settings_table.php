<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGrievanceToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('grievance_link')->nullable()->after('google_analytics');
            $table->string('grievance_button')->nullable()->after('google_analytics');
            $table->text('grievance_description')->nullable()->after('google_analytics');
            $table->string('grievance_heading')->nullable()->after('google_analytics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('grievance_link');
            $table->dropColumn('grievance_button');
            $table->dropColumn('grievance_description');
            $table->dropColumn('grievance_heading');

        });
    }
}
