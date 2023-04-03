<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Course;
use Illuminate\Http\Request;

class PaidStudents
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  
        $course_id = $request->route()->parameter('course')->id;
        $courses = auth()->user()->courses;

        $checkPaid = $courses->where('id', $course_id)->count();

        if ($checkPaid > 0) {
            return $next($request);
        }
        
        return redirect("/course/$course_id");
    }
}
