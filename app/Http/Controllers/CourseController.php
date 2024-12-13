<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class CourseController extends Controller
{
    //create course page direction
    public function creCoursePage()
    {
        $categories =  Category::get();
        return view('admin.course.createCourse', compact('categories'));
    }

    //create course
    public function creCourse(Request $request)
    {
        //call back the private function for validation
        $this->vali($request);
        //call back the private frunction for data arrangement
        $data = $this->dataArrange($request);
        //store the image
        if ($request->hasFile('courseImage')) {
            $imageName = uniqid() . $request->file('courseImage')->getClientOriginalName();
            //store in local storage
            $request->file('courseImage')->storeAs('course', $imageName);
            //store in db
            $data['image'] = $imageName;
        }
        Course::create($data);
        return back()->with(['success' => 'Course has been successfully created!']);
    }


    //list of the courses
    public function courseList()
    {
        $courses = Course::paginate(5);
        return view('admin.course.coursesList', compact('courses'));
    }

    //update the course page direction
    public function updateCoursePage($id)
    {
        $categories = Category::get();
        $course = Course::where('id', $id)->first();
        return view('admin.course.courseEdit', compact('categories', 'course'));
    }

    //update the course function depend on id
    public function updateCourse(Request $request, $id)
    {
        //call back the private function for validation
        $this->vali($request);
        //call back the private frunction for data arrangement
        $data = $this->dataArrange($request);
        //image store
        if ($request->hasFile('courseImage')) {
            //retrive the data image related to that id
            $dbImage = Course::where('id', $id)->value('image');
            //if dbImage is already existed
            if ($dbImage != Null) {
                //delete image from local storage
                Storage::delete('course/' . $dbImage);
            }
            $imageName = uniqid() . $request->file('courseImage')->getClientOriginalName();
            //store in local storage
            $request->file('courseImage')->storeAs('course', $imageName);
            //store in db
            $data['image'] = $imageName;
        }
        Course::where('id', $id)->update($data);
        return back()->with(['success' => 'Course has been successfully updated!']);
    }

    //course detail depend on id
    public function courseDetail($id)
    {
        $course = Course::find($id);
        //   dd($course->toArray());
        $cateName = $course->category->name;
        return view('admin.course.courseDetail', compact('course', 'cateName'));
    }

    // Delete the course based on ID
    public function deleCourse($id)
    {
        // Find the course by ID
        $course = Course::find($id);

        if (!$course) {
            return back()->with(['error' => 'Course not found!']);
        }

        // Check if the course has an associated image and delete it
        if ($course->image) {
            Storage::delete('course/' . $course->image);
        }

        // Delete the course from the database
        $course->delete();

        // Redirect back with a success message
        return back()->with(['success' => 'Course has been successfully deleted!']);
    }


    //private function for data arrangement
    private function dataArrange($request)
    {
        return [
            'name' => $request->courseName,
            'category_id' => $request->categoryId,
            'price' => $request->coursePrice,
            'duration' => $request->courseDuration,
            'description' => $request->courseDescription
        ];
    }

    //private function for data validation
    private function vali($request)
    {
        Validator::make($request->all(), [
            'courseName' => 'required|max:125',
            'categoryId' => 'required',
            'coursePrice' => 'required',
            'courseDuration' => 'required',
            'courseDescription' => 'required|max:125',
            'courseImage' => 'required|image|mimes:jpeg,png,jpg'
        ])->validate();
    }
}
