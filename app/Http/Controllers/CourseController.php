<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
  public function dataScience()
  {
    $courses = Course::where('category_id', 2)->get();
    return view('dataScience', compact('courses'));
  }

  public function networkSecurity()
  {
    $courses = Course::where('category_id', 1)->get();
    return view('networkSecurity', compact('courses'));
  }

  public function show($id)
  {
    $course = Course::findOrFail($id);
    return view('show', compact('course'));
  }

  public function popular()
  {
    $courses = Course::paginate(3);
    return view('popular', compact('courses'));
  }

}
