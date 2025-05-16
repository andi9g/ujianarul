<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitasM extends Model
{
    use HasFactory;
    protected $table = 'identitas';
    protected $primaryKey = 'ididentitas';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'iduser','iduser');
    }
}
