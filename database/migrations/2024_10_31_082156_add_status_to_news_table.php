<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('news', function (Blueprint $table) {
        $table->string('status')->default('draft')->after('name'); // Add the column after 'name'
    });
}

public function down()
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
