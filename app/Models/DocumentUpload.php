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
        // print_r($this->userId);die;
    }

    public function checkField($key) {
        // print_r($this->userId);die;
        return self::whereNull($key)->where('user_id', $this->userId)->first();
    }

    public function checkValidation($value) {
        switch($value) {
            case 'provisional_certificate_of_llb':
                if($this->checkField('provisional_certificate_of_llb')){
                    $validation = 'required';
                }
                break;
            case 'matriculation_certificate':
                if($this->checkField('matriculation_certificate')){
                    $validation = 'required';
                }
                break;
            default :
            $validation = 'nullable'; 
        }

        return $validation;
    }
}
