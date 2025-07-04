<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        // eager load category to avoid N+1 problem
        $courses = Course::with('category')->get();
        return view('courses.index', compact('courses'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::all();
        return view('courses.create', compact('categories'));
    }

    // Store new course
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'feature_image' => 'nullable|string|max:255', // or handle file upload
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'how_section' => 'nullable|string',
            'guidance' => 'nullable|string',
            'reference' => 'nullable|string',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created!');
    }

    // Show single course
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Show edit form
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('courses.edit', compact('course', 'categories'));
    }

    // Update course
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'feature_image' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'how_section' => 'nullable|string',
            'guidance' => 'nullable|string',
            'reference' => 'nullable|string',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated!');
    }

    // Delete course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted!');
    }
}
