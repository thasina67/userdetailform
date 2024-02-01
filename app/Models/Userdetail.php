<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;
    protected $table = 'userdetails';
    protected $primaryKey = 'id';
    protected $guarded = [];
    //    protected $fillable = [
    //    'firstname','address','lastname'
    // ];
}
