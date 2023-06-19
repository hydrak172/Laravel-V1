<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::check()){
        //     $dateOfBirth = Auth::user()->dob;
        //     $today = date("Y-m-d");
        //     $diff = date_diff(date_create($dateOfBirth), date_create($today));
        //     echo 'Age is '.$diff->format('%y');
        //     if($diff->y>=18){
        //         return $next($request);
        //     }


        // }
        // return redirect()->route('Cocacola'); 


        if(!Auth::check()){
            return redirect()->route('login'); 
        }
        $now=Carbon::now();
        $dateOfBirth= Carbon::createFromFormat('Y-m-d H:i:s',Auth::user()->dob);
        $age=$now->diffInYears($dateOfBirth);
        if($age <= 18){
            return redirect()->route('home');
        }
        return $next($request);
        // $dateOfBirth->addDay();
        // $dateOfBirth->subDay();

    }
}
