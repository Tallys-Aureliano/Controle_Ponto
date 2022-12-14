<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busines extends Model
{
	protected $fillable = [
        'name',
        'active'
    ];

    protected $table = 'business';

    use HasFactory;

    public function users()
	{
	    return $this->hasMany(User::class, 'id');
	}
}
