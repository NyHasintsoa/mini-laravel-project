<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ReadController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.user.read');
    }
}
