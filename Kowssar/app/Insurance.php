<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'NameOfInsurance', 'InsuranceCode', 'NameOfOrganization', 'InsurancePercentage', 'KindOfInsurance',
    ];



}
