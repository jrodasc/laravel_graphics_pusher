<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $connection = 'prdvs';
    use HasFactory;
    protected $fillable = ['fechaini','machine','namevar','valuevar'];

}
