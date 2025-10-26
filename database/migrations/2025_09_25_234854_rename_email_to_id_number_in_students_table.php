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
            Schema::table('students', function (Blueprint $table) {
                $table->renameColumn('email', 'id_number');
            });
        }

    public function down()
        {
            Schema::table('students', function (Blueprint $table) {
                $table->renameColumn('id_number', 'email');
            });
        }
};
