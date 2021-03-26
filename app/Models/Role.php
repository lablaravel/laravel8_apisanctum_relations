<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

  
    protected $fillable = [
        'name',
        'nameslug'
    ];

    public function down()
    {
        Schema::dropIfExists('roles');
    }    
}
