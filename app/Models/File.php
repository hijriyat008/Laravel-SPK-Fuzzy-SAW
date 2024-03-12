<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dataset()
    {
        return $this->belongsTo(Dataset::class);
    }
}
