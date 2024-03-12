<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    // protected $fillable = [];
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function datahitung()
    {
        return $this->hasOne(Datahitung::class);
    }
    public function datahasil()
    {
        return $this->hasMany(Datahasil::class);
    }
    public function file()
    {
        return $this->hasOne(File::class);
    }
}
