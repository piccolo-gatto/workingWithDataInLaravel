<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoftDeleteServices extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
