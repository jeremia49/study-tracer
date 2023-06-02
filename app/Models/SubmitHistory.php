<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitHistory extends Model
{
    use HasFactory;
    protected $table = 'submithistory';
    protected $guarded  = ['id'];
}
