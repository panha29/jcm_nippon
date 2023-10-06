<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class UserProject extends Controller
{
    public function save(Request $request){
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
        $data->pj_customer_name = $request->pj_customer_name;
        $data->tailor = $request->tailor;
        $data->den_tailor = $request->den_tailor;
        $data->den_start_date = $request->den_start_date;
        $data->den_end_date = $request->den_end_date;
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

    public function update(Request $request){
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
        $data->den_tailor = $request->den_tailor;
        $data->den_start_date = $request->den_start_date;
        $data->den_end_date = $request->den_end_date;
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
        return redirect('/User/Calendar/Project');
    }

    public function index(){
        // $project = project::latest()->get();
        // $project = project::get();
        $project = project::whereBetween('progress',[0,99])->latest()->get();

        return view('user-view.calendar.project', compact('project'));
    }

    public function edit($id){
        $data = project::find($id);
        return view('user-view.calendar/edit-project',compact('data'));
    }
    public function project_id($id){
        $item = project::find($id);
        return view('user-view.calendar/edit-project',compact('item'));
    }

    public function delete($id){
        project::destroy($id);
        return redirect('User/Calendar/Project');
    }

    public function project_history(){
        // $project = DB::table('projects')->whereBetween('progress',[100,101])->get();
        $project = project::latest()->whereBetween('progress',[100,101])->get();
        return view('user-view.calendar.project_history', compact('project'));

    }
}
