<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwimmingSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'SiteName',
        'SiteDescription',
        'SiteLocation',
        'SiteContacts'
    ];

    protected $primaryKey = 'SiteId';
}
