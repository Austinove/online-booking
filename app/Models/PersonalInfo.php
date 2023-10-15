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
        return $this->hasOne(BirthPlace::class, 'id', 'person_id');
    }
    public function father() {
        return $this->hasOne(Father::class, 'id', 'person_id');
    }
}
