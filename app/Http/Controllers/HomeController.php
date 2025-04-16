<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('notice_date', 'desc')->take(5)->get();
        $events = Event::orderBy('event_date', 'desc')->take(5)->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->take(5)->get();
        $courses = Course::orderBy('created_at', 'desc')->take(5)->get();

        return view('home', compact('notices', 'events', 'testimonials', 'courses'));
    }
}
