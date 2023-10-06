<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class UserCalendar extends Controller
{
    public function index()
    {
        $events = array();
        $bookings = Booking::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name' => $booking->name,
                'title' => $booking->title,
                'arriving_date' => $booking->arriving_date,
                'order_date' => $booking->order_date,
                'testing_date' => $booking->testing_date,
                'order_time' => $booking->order_time,
                'testing_time' => $booking->testing_time,
                'arriving_time' => $booking->arriving_time,
                'purpose' => $booking->purpose,
                'items' => $booking->items,
                'traditionaldress' => $booking->items,
                'moderndress' => $booking->moderndress,
                'bookingimg1' => $booking->bookingimg1,
                'bookingimg2' => $booking->bookingimg2,
                'bookingimg3' => $booking->bookingimg3,
                'bookingimg4' => $booking->bookingimg4,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                'color' => $color
            ];
        }

        $orderdate = array();
        $OrderDates = Booking::select(DB::raw("name,purpose,order_date"))
        ->whereBetween('order_date',
            [
                Carbon::now()->startOfMonth()->format('m/d/Y'),
                Carbon::now()->endOfMonth()->format('m/d/Y')
            ])
        ->get();
        foreach($OrderDates as $OrderDate){
            $orderdate[] = [
                'id'   => $OrderDate->id,
                'name' => $OrderDate->name,
                'title' => $OrderDate->title,
                'order_date' => $OrderDate->order_date,
                'purpose' => $OrderDate->purpose,
            ];
        }

        $testingdate = array();
        $TestingDates = Booking::select(DB::raw("name,purpose,testing_date"))
        ->whereBetween('testing_date',
            [
                Carbon::now()->startOfMonth()->format('m/d/Y'),
                Carbon::now()->endOfMonth()->format('m/d/Y')
            ])
        ->get();
        foreach($TestingDates as $TestingDate){
            $testingdate[] = [
                'id'   => $TestingDate->id,
                'name' => $TestingDate->name,
                'title' => $TestingDate->title,
                'testing_date' => $TestingDate->testing_date,
                'purpose' => $TestingDate->purpose,
            ];
        }

        $arrivingdate = array();
        $ArrivingDates = Booking::select(DB::raw("name,purpose,arriving_date"))
        ->whereBetween('arriving_date',
            [
                Carbon::now()->startOfMonth()->format('m/d/Y'),
                Carbon::now()->endOfMonth()->format('m/d/Y')
            ])
        ->get();
        foreach($ArrivingDates as $ArrivingDate){
            $arrivingdate[] = [
                'id'   => $ArrivingDate->id,
                'name' => $ArrivingDate->name,
                'title' => $ArrivingDate->title,
                'arriving_date' => $ArrivingDate->arriving_date,
                'purpose' => $ArrivingDate->purpose,
            ];
        }

        return view('user-view.calendar.index', compact('events','orderdate','arrivingdate','testingdate'));


    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $booking = Booking::create([

            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'testing_date' => $request->testing_date,
            'order_date' => $request->order_date,
            'arriving_date' => $request->arriving_date,
            'arriving_time' => $request->arriving_time,
            'testing_time' => $request->testing_time,
            'order_time' => $request->order_time,
            'items' => $request->items,
            'traditionaldress' => $request->traditionaldress,
            'moderndress' => $request->moderndress,
            'name' => $request->name,
            'purpose' => $request->purpose,
            'bookingimg1' => $request->bookingimg1,
            'bookingimg2' => $request->bookingimg2,
            'bookingimg3' => $request->bookingimg3,
            'bookingimg4' => $request->bookingimg4,

        ]);


        $color = null;

        if($booking->title == 'Test') {
            $color = '#924ACE';
        }

        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'testing_date' => $booking->testing_date,
            'arriving_date' => $booking->arriving_date,
            'order_date' => $booking->order_date,
            'order_time' => $booking->order_time,
            'arriving_time' => $booking->arriving_time,
            'testing_time' => $booking->testing_time,
            'purpose' => $booking->purpose,
            'name' => $booking->name,
            'items' => $booking->items,
            'moderndress' => $booking->moderndress,
            'traditionaldress' => $booking->traditionaldress,
            'bookingimg1' => $booking->bookingimg1,
            'bookingimg2' => $booking->bookingimg2,
            'bookingimg3' => $booking->bookingimg3,
            'bookingimg4' => $booking->bookingimg4,
            'color' => $color ? $color: '',
        ]);

    }

    // public function update(Request $request ,$id)
    // {
    //     $booking = Booking::find($id);
    //     if(! $booking) {
    //         return response()->json([
    //             'error' => 'Unable to locate the event'
    //         ], 404);
    //     }
    //     $booking->update([
    //         'start_date' => $request->start_date,
    //         'end_date' => $request->end_date,
    //     ]);
    //     return response()->json('Event updated');
    // }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->delete();
        return $id;
    }

    public function bookingdate(){
        $bkdate = Booking::latest()->get();
        return view('user-view.calendar.booking-date',compact('bkdate'));
    }



    public function delete($id){
        $booking = Booking::destroy($id);
        return redirect('User/Calendar/Booking');
    }

    function edit($id){
        $data = Booking::find($id);
        return view('user-view.calendar.edit_form_modal',compact('data'));
    }

    public function update(Request $request){
        $data = Booking::find($request->id);
        if($request->file('bookingimg1')){
            $file= $request->file('bookingimg1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['bookingimg1']= $filename;
        }
        if($request->file('bookingimg2')){
            $file= $request->file('bookingimg2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['bookingimg2']= $filename;
        }
        if($request->file('bookingimg3')){
            $file= $request->file('bookingimg3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['bookingimg3']= $filename;
        }
        if($request->file('bookingimg4')){
            $file= $request->file('bookingimg4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['bookingimg4']= $filename;
        }
        $data -> name = $request-> name;
        $data -> title = $request-> title;
        $data -> purpose = $request-> purpose;
        $data -> time = $request-> time;
        $data -> order_time = $request-> order_time;
        $data -> arriving_time = $request-> arriving_time;
        $data -> testing_time = $request-> testing_time;
        $data -> date = $request-> date;
        $data -> order_date = $request-> order_date;
        $data -> arriving_date = $request-> arriving_date;
        $data -> testing_date = $request-> testing_date;

        $data -> items = $request-> items;
        $data -> traditionaldress = $request-> traditionaldress;
        $data -> moderndress = $request-> moderndress;
        $data -> save();
        return redirect('User/Calendar/Booking');
    }

    function project_index(){
        return view('user-view.calendar.project');
    }
}
