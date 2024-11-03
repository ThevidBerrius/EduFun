<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writer', compact('writers'));
    }

    public function showCourses($id)
    {
        $writer = Writer::findOrFail($id);
        $courses = $writer->courses; 
        return view('courses', compact('writer', 'courses'));
    }
}
