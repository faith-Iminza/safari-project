<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class Books extends Controller
{
    //
    function addDate(Request $req)
    {

        $req->validate([
           'name'=>'required',
           'email'=>'required|email',
           'phone'=>'required',
           'date'=>'required',
           'people'=>'required',
           'message'=>'required',

        ]);

        $booking = new Booking;
        $booking->name = $req->name;
        $booking->email = $req->email;
        $booking->phone = $req->phone;
        $booking->date = $req->date;
        // $booking->time = $req->time;
        $booking->people = $req->people;
        $booking->message = $req->message;
        $booking-> save();
        return redirect('/');

       
    }
}

