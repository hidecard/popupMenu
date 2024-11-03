<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Student extends Model
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('class');
            $table->string('phone');
            $table->string('email');
            $table->string('parent_name');
            $table->string('nrc_no');
            $table->timestamps();
        });
}
}
