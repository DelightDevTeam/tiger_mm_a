<?php

namespace App\Helpers;

use App\Models\DepositRequest;
use App\Models\WithDrawRequest;
use Illuminate\Support\Facades\Auth;

class Common
{
    public static function getNotiCount()
    {
        $withDrawCount = WithDrawRequest::where('status', 'pending')->where('agent_id', Auth::id())->count();
        $depositCount = DepositRequest::where('status', 'pending')->where('agent_id', Auth::id())->count();
        
        return $withDrawCount + $depositCount;
    }
}
