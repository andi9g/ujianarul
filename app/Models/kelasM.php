<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasM extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'idkelas';
    protected $guarded = [];
    protected $connection = "mysql";

}
