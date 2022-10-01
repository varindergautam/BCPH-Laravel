<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUpload extends Model
{
    use HasFactory;

    public $userId;

    public function __construct($userId = '')
    {
        $this->userId = $userId;
    }

    public function checkField($key) {
        return self::whereNull($key)->where('user_id', $this->userId)->first();
    }

}
