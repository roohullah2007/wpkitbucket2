<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'country')) {
                $table->string('country')->nullable();
            }
            if (!Schema::hasColumn('users', 'profile_picture')) {
                $table->string('profile_picture')->nullable();
            }
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('profile_picture');
        });
    }
    
};
