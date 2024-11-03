<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function index()
    {
        $dataScienceCourse = Course::where('category_id', 1)
            ->with('writer')
            ->first();

        $networkSecurityCourse = Course::where('category_id', 2)
            ->with('writer')
            ->first();

        return view('home', compact('dataScienceCourse', 'networkSecurityCourse'));
    }
}
