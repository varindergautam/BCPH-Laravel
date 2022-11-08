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
        return DocumentUpload::whereNotNull($key)->where('user_id', $this->userId)->first();
        $query = DocumentUpload::whereNull('provisional_certificate_of_llb')->where('user_id', $this->userId)->toSql();
        print_r($query);
    }

}
