<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function contact()
    {
        return $this->hasOne(StudentContact::class);
    }

    public function family()
    {
        return $this->hasOne(FamilyMember::class);
    }

    public function assistance()
    {
        return $this->hasOne(Assistance::class);
    }

    public function school()
    {
        return $this->hasOne(SchoolInformation::class);
    }

    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }

    public function bank()
    {
        return $this->hasOne(BankAccount::class);
    }

    public function additional()
    {
        return $this->hasOne(StudentAdditionalInfo::class);
    }
}
