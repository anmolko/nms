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
            $table->string('core_main_subheading')->nullable();
            $table->string('core_heading7')->nullable();
            $table->text('core_description7')->nullable();
            $table->string('core_heading8')->nullable();
            $table->text('core_description8')->nullable();
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
            $table->dropColumn('core_main_subheading');
            $table->dropColumn('core_heading7');
            $table->dropColumn('core_description7');
            $table->dropColumn('core_heading8');
            $table->dropColumn('core_description8');
        });
    }
};
