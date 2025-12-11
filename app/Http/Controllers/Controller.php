<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    
    protected function isAdmin(): bool
    {
        return Auth::check() && Auth::user()->is_admin == 1;
    }

    protected function requireAdmin()
    {
        if (!$this->isAdmin()) {
            abort(403, 'Unauthorized (Admin Only)');
        }
    }
}