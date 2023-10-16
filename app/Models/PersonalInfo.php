<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function residence() {
        return $this->hasOne(Residence::class, 'person_id', 'id');
    }
    public function birthplace() {
        return $this->hasOne(BirthPlace::class, 'person_id', 'id');
    }
    public function father() {
        return $this->hasOne(Father::class, 'person_id', 'id');
    }
    public function guardian() {
        return $this->hasOne(Guardian::class, 'person_id', 'id');
    }
    public function mother() {
        return $this->hasOne(Mother::class, 'person_id', 'id');
    }
    public function original_place() {
        return $this->hasOne(OriginPlace::class, 'person_id', 'id');
    }
    public function spouse() {
        return $this->hasOne(Spouse::class, 'person_id', 'id');
    }
}
