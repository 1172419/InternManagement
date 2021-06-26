<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipt extends Model
{
    use HasFactory;
    protected $timestamp = false; //kalau tknak guna timestamp dekat migration,gne protected ni
}
