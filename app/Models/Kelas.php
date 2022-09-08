<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Jenssegers\Mongodb\Helpers\EloquentBuilder;
use Jenssegers\Mongodb\Eloquent\Model;


class Kelas extends Model
{
    use HasFactory;

    protected $collection = 'kelas';
    protected $connection = 'mongodb';
    protected $guarded = ['id'];
}
