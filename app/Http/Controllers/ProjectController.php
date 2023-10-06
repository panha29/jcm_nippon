<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
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
        $data->note = $request->note;
        $data->progress = $request->progress;
        $data->progress_den = $request->progress_den;
        $data->progress_de = $request->progress_de;
        $data->project_den = $request->project_den;
        $data->project_de = $request->project_de;
        // $data->checkout = $request->checkout;
        $data -> save();
        return redirect('Admin/Calendar/Project');
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
        $data->note = $request->note;
        $data->progress = $request->progress;
        $data->progress_den = $request->progress_den;
        $data->progress_de = $request->progress_de;
        $data->project_den = $request->project_den;
        $data->project_de = $request->project_de;

        $data -> save();
        return redirect('/Admin/Calendar/Project');
    }

    public function index(){
        // $project = project::latest()->get();
        // $project = project::get();
        $project = project::whereBetween('progress',[0,99])->latest()->get();

        return view('admin-view.calendar.project', compact('project'));
    }

    public function edit($id){
        $data = project::find($id);
        return view('admin-view.calendar/edit-project',compact('data'));
    }
    public function project_id($id){
        $item = project::find($id);
        return view('admin-view.calendar/edit-project',compact('item'));
    }

    public function delete($id){
        project::destroy($id);
        return redirect('Admin/Calendar/Project');
    }

    public function project_history(){
        $project = project::orderBy("id", "desc")->where('progress',100)->latest()->get();
        return view('admin-view.calendar.project_history', compact('project'));
    }

    // public function project_den(){
    //     $project = project::where('project_den', '=', 'not_yet')->whereBetween('progress_den',[0,99])->latest()->get();
    //     return view('admin-view.calendar.project_den', compact('project'));
    // }

    public function project_den(){
        $project = project::where('project_den', '=', 'not_yet')->latest()->get();
        return view('admin-view.calendar.project_den', compact('project'));
    }

    function den_history(){
        $project = project::orderBy("id", "desc")->where('progress_den',100)->latest()->get();
        return view('admin-view.calendar.project_den_history', compact('project'));
    }

    // public function project_de(){
    //     $project = project::where('project_de', '=', 'not_yet')->whereBetween('progress_de',[0,99])->latest()->get();
    //     return view('admin-view.calendar.project_de', compact('project'));
    // }

    public function project_de(){
        $project = project::where('project_de', '=', 'not_yet')->latest()->get();
        return view('admin-view.calendar.project_de', compact('project'));
    }


    function de_history(){
        $project = project::orderBy("id", "desc")->where('progress_de',100)->latest()->get();
        return view('admin-view.calendar.project_de_history', compact('project'));
    }

    function delete_den($id){
        project::destroy($id);
        return redirect('Admin/Calendar/Project/Den');
    }

    function delete_de($id){
        project::destroy($id);
        return redirect('Admin/Calendar/Project/De');
    }

}
