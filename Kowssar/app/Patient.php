<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'FullName', 'FileNumber', 'PhoneNumber', 'NationalCode',
        'Insurance', 'Service', 'ReferralPhysician', 'ReportDoctor', 'AttachedFile',
        'Amount','PaymentStatus','PaksFile','VersionFile','FileFinal',
    ];

    public function service()
    {
        return $this->hasMany(Service::class);
    }


}
