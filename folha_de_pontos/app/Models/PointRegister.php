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
		'use_id'
	];

    use HasFactory;

    protected $table = 'point_registers';
}
