<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stroke extends Model
{
    use HasFactory;
    // Menentukan tabel yang terkait dengan model, jika nama tabel bukan bentuk jamak dari nama model
    protected $table = 'stroke';

    protected $fillable = [
        'gender', 'age', 'hypertension', 'heart_disease', 'ever_married',
        'work_type', 'residence_type', 'avg_glucose_level', 'bmi',
        'smoking_status', 'stroke'
    ];

}
