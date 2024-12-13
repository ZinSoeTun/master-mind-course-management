<?php

namespace App\Http\Controllers;

use App\Mail\CourseJoinedMail;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //home page of our site
    public function home()
    {
        return view('user.home');
    }

    //about page of our site
    public function about()
    {
        return view('user.about');
    }

     //categories page of our site
     public function categories()
     {
         $categories = Category::paginate(3);
         return view('user.category', compact('categories'));
     }

    //courses page of our site
    public function courses()
    {
        $courses = Course::paginate(3);
        return view('user.course', compact('courses'));
    }

    //user join the course
    public function joinCourse($id)
    {
        $course = Course::findOrFail($id);
        $user = Auth::user();

        // Check if the user has already joined the course
        if ($user->courses->contains($course->id)) {
            return back()->with(['error' => 'You have already joined this course!']);
        }

        // Add the user to the course
        $user->courses()->attach($course->id);

        // Increment the students count
        $course->increment('students_count');

        // Notify all admin accounts
        $admins = User::where('role', 'admin')->pluck('email'); // Adjust the role column as per your database schema

        // Prepare email data
        $mailData = [
            'title' => 'New Course Joined Notification',
            'body' => "{$user->name} has joined the course {$course->name}!",
        ];

        // Send email to all admins
        foreach ($admins as $adminEmail) {
            Mail::to($adminEmail)->send(new CourseJoinedMail($mailData));
        }

        return back()->with(['success' => 'You have successfully joined this course!']);
    }



    //user contact
    public function contact()
    {
        return view('user.contact');
    }


}
