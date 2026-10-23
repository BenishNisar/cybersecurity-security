<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enquiry extends Model
{
    public const INTERESTS = ['AI Powered Cybersecurity', 'SOC Automation', 'SIEM Automation', 'Threat Detection', 'Security Analytics', 'Security Workflow Review', 'General Enquiry'];

    protected $fillable = ['full_name', 'email', 'company', 'role', 'interest', 'message', 'status', 'privacy_version', 'consented_at'];

    protected function casts(): array
    {
        return ['consented_at' => 'datetime'];
    }

    public function notes(): HasMany
    {
        return $this->hasMany(EnquiryNote::class);
    }
}
