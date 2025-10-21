<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.course.show');
    }
}
