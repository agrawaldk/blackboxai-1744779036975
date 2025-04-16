<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Course;

class AdminController extends Controller
{
    public function dashboard()
    {
        $classCount = ClassModel::count();
        $courseCount = Course::count();

        return view('admin.dashboard', compact('classCount', 'courseCount'));
    }
}
