<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    protected $table = 'pemilih';
    protected $fillable = ['username','status'];
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
