<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;

class Student extends Model
{

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['FullName', 'address', 'mobile', 'gender', 'class'];
    use HasFactory;
}
