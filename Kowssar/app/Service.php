<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'NameService', 'ShortName', 'InternationalCode', 'CodeInTheOrganization', 'Price',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
