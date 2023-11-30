<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'price'];

    function records() {
		return $this->hasMany(Record::class);
	}
}
