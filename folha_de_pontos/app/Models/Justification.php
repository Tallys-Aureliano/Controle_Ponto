<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
	protected $fillable = [
		'comment',
		'attachment',
		'date',
		'use_id'
	];

    use HasFactory;
}
