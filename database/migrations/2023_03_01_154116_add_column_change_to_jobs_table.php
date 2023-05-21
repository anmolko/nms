<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnChangeToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('salary')->nullable()->change();
            $table->string('required_number')->nullable()->change();
            $table->string('min_qualification')->nullable()->change();
            $table->longText('description')->nullable()->change();
            $table->longText('slug')->nullable()->change();
            $table->string('category_ids')->nullable()->after('image');
            $table->string('extra_company')->nullable()->after('image');
            $table->string('client_ids')->nullable()->after('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('required_number')->nullable(false)->change();
            $table->string('salary')->nullable(false)->change();
            $table->string('min_qualification')->nullable(false)->change();
            $table->string('slug')->nullable(false)->change();
            $table->longText('description')->nullable(false)->change();
            $table->dropColumn('category_ids');
            $table->dropColumn('extra_company');
            $table->dropColumn('client_ids');

        });
    }
}
