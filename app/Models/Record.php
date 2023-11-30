<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Record extends Model
{

    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'phone', 'service', 'date', 'time'];

    function service() {
	return $this->belongsTo(Service::class);
    }
   
    
}
