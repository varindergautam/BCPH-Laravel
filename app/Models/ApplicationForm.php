<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    public function university() {
        return $this->belongsTo('App\Models\University', 'university_name');
    }
    
    public function college() {
        return $this->belongsTo('App\Models\College', 'law_college_name');
    }
}
