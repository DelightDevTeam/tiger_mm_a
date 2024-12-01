<?php

namespace App\Helpers;

use App\Models\DepositRequest;
use App\Models\WithDrawRequest;

class Common
{
    public static function getNotiCount()
    {
        $withDrawCount = WithDrawRequest::where('status', 'pending')->count();
        $depositCount = DepositRequest::where('status', 'pending')->count();
        
        return $withDrawCount + $depositCount;
    }
}
