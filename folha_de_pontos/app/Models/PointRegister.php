<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointRegister extends Model
{
	protected $fillable = [
		'entry_time',
		'exit_time',
		'date',
		'users_id'
	];

    use HasFactory;

    public function users()
    {
    	return $this->belongsTo(User::class, 'users_id');
    }

    protected $table = 'point_registers';
}
