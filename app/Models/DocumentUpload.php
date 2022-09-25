<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUpload extends Model
{
    use HasFactory;

    public function checkField($key) {
        return self::whereNull($key)->where('user_id', auth()->user()->id)->first();
    }
}
