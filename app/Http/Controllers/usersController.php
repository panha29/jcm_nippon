<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\project;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){
        $user = User::get();
        return view('admin-view.account/list',compact('user'));
    }
    public function delete($id){
        User::destroy($id);
        return redirect('Accounts/List');
    }

    public function welcome(){
        return view('user-view/dashboard');
    }

    public function usercalendarindex()
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
        return view('user-view.calendar.index', ['events' => $events]);
    }
    public function userbookingdate(){
        $bkdate = Booking::latest()->get();
        return view('user-view.calendar.booking-date1',compact('bkdate'));
    }

    public function project_index(){
        $project = project::latest()->get();
        return view('user-view.calendar.project',compact('project'));
    }

    public function project_save(Request $request){
        $data = new project();
        if($request->file('pj_image1')){
            $file= $request->file('pj_image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image1']= $filename;
        }
        if($request->file('pj_image2')){
            $file= $request->file('pj_image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image2']= $filename;
        }
        if($request->file('pj_image3')){
            $file= $request->file('pj_image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image3']= $filename;
        }
        if($request->file('pj_image4')){
            $file= $request->file('pj_image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image4']= $filename;
        }
        $data->head_tailor = $request->head_tailor;
        $data->tailor = $request->tailor;
        $data->pj_customer_name = $request->pj_customer_name;
        $data->project = $request->project;
        $data->start_date = $request->start_date;
        $data->order_date = $request->order_date;
        $data->testing_date = $request->testing_date;
        $data->pickup_date = $request->pickup_date;
        $data->process_start_date = $request->process_start_date;
        $data->order_time = $request->order_time;
        $data->testing_time = $request->testing_time;
        $data->pickup_time = $request->pickup_time;
        $data->process_start_time = $request->process_start_time;
        $data->end_date = $request->end_date;
        $data->delay_date = $request->delay_date;
        $data->quantity = $request->quantity;
        $data->problem = $request->problem;
        $data->progress = $request->progress;
        // $data->checkout = $request->checkout;
        $data -> save();
        return redirect('User/Calendar/Project');
    }

    public function destroy($id){
        project::destroy($id);
        return redirect('User/Calendar/Project');
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
        return redirect('User/Calendar/Booking1');
    }

    function edit($id){
        $data = Booking::find($id);
        return view('user-view.calendar.edit-form',compact('data'));
    }

    function delete_booking($id){
        $delete = Booking::destroy($id);
        return redirect('User/Calendar/Booking1');
    }
    public function update_project(Request $request){
        $data = project::find($request->id);
        if($request->file('pj_image1')){
            $file= $request->file('pj_image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image1']= $filename;
        }
        if($request->file('pj_image2')){
            $file= $request->file('pj_image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image2']= $filename;
        }
        if($request->file('pj_image3')){
            $file= $request->file('pj_image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image3']= $filename;
        }
        if($request->file('pj_image4')){
            $file= $request->file('pj_image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['pj_image4']= $filename;
        }
        $data->head_tailor = $request->head_tailor;
        $data->tailor = $request->tailor;
        $data->project = $request->project;
        $data->start_date = $request->start_date;
        $data->order_date = $request->order_date;
        $data->testing_date = $request->testing_date;
        $data->pickup_date = $request->pickup_date;
        $data->process_start_date = $request->process_start_date;
        $data->order_time = $request->order_time;
        $data->testing_time = $request->testing_time;
        $data->pickup_time = $request->pickup_time;
        $data->process_start_time = $request->process_start_time;
        $data->end_date = $request->end_date;
        $data->delay_date = $request->delay_date;
        $data->quantity = $request->quantity;
        $data->problem = $request->problem;
        $data->progress = $request->progress;
        // $data->checkout = $request->checkout;

        $data -> save();
        return redirect('User/Calendar/Project');

    }
    public function edit_project($id){
        $item = project::find($id);
        return view('user-view.calendar/edit-project',compact('item'));
    }
}
