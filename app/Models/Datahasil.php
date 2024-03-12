<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datahasil extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dataset()
    {
        return $this->belongsTo(Dataset::class, 'dataset_id');
    }
    public function datahitung()
    {
        return $this->belongsTo(Datahitung::class, 'datahitung_id');
    }
}
