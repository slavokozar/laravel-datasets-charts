<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{

    protected $fillable = [
        'label',
        'value'
    ];


    public function dataset(){
        return $this->belongsTo(Dataset::class);
    }
}
