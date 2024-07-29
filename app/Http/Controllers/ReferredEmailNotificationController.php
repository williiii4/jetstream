<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferredEmailNotificationController extends Controller
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
}
