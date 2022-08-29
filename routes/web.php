<?php

use App\Http\Livewire\BodyComponent;
use App\Models\Booking;
use App\Http\Controllers\Books;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',BodyComponent::class);
// 
Route::view('add','base');
Route::post('add',[Books::class,'addDate']);

Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');
// Route::post('/create',function(){
//     $book= new Book();
//     $body->name = request('name');
//     $body->email = request('email');
//     $body->phone = request('phone');
//     $body->date = request('date');
//     $body->people = request('people');
//     $body->message = request('message');
//     $body->save();
// });