<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hardwares(){
        return $this->hasMany(Hardware::class);
    }
}
