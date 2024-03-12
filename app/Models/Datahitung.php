<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datahitung extends Model
{
    use HasFactory;
    // protected $fillable = [];
    protected $guarded = ['id'];
    public function dataset()
    {
        return $this->belongsTo(Dataset::class, 'dataset_id');
    }
    public function datahasil()
    {
        return $this->hasMany(Datahasil::class);
    }
}
