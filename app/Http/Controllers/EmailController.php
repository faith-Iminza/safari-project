<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Booking;

class EmailController extends Controller
{
    public function create()
    {
        return view('#book-a-table');
    }

    public function sendEmail(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'people' => 'required',
            'message' => 'required',
        ]);

        $booking = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'date' => $req->date,
            // $booking->time = $req->time;
            'people' => $req->people,
            'message' => $req->message
        ];

        Mail::send('email-template', $booking, function($messager) use ($booking) {
          $messager->to($booking['email'])
          ->subject($booking['message']);
        });

        return back()->with(['messager' => 'Email successfully sent!']);
    }

}
