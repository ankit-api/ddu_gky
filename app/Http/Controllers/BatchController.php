<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use App\Models\Batch;
use App\Models\BatchLessonPlanner;;
use Auth;
use Illuminate\Http\Request;
use App\Models\CenterIncharge;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batchForm()
    {
        $get_trainer = Trainer::all();
        return view('admin.create_batch.create_batch', compact("get_trainer"));
    }

   
    public function createBatch(Request $req)
    {
        // session(['incharge_id' => '1']);

        $this->validate($req, [
            // 'nature_of_training' => 'required',
            't_name' => 'required',
            'duration_per_day' => 'required',
            'b_start_date' => 'required',
            'ex_b_end_date' => 'required',
            'b_size' => 'required',
            // 'shift' => 'required',
            // 'ojt_given' => 'required',
            // // 'o_start_date' => 'required',
            // 'ojt_days' => 'required',
            // 'split' => 'required',
            'lesson_planner' => 'required',
        ]);

        // $centre_id = $req->session()->get('centre_id');
        // $incharge_id = $req->session()->get('incharge_id');
        // $centre_id = CenterIncharge::where('centre_incharge_code',Auth::user()->user_code)->first();
        // dd($centre_id->centre_incharge_code);
         //batch Code
         $total_rows = Batch::orderBy('id', 'desc')->count();
         $batch_code = "Batch/";
         if($total_rows==0){
             $batch_code .= '0001';
         }else{
             $last_id = Batch::orderBy('id', 'desc')->first()->id;
             $batch_code .= sprintf("%'04d",$last_id + 1);
         }

        $batch = new Batch();
        $get_centre_inc_id = CenterIncharge::where('centre_incharge_code',Auth::user()->user_code)->first();
        $batch->incharge_id = $get_centre_inc_id->id;
        $batch->batch_code = $batch_code;
        $batch->trainer_id = $req->t_name;
        $batch->nature_of_training = $req->nature_of_training;
     
        $batch->batch_start_date = $req->b_start_date;
        $batch->expec_batch_end_date = $req->ex_b_end_date;
        // $batch->freeze_date =
        // $batch-> = $req->b_size;
        
        $batch->duration_per_day = $req->duration_per_day;
        // $batch->trade =        
        // $batch->batch_summary_status =
        $batch->batch_in_two_shift = $req->shift;
        $req->start1 ? $batch->start_time_shift1 = $req->start1 : $batch->start_time_shift1 = 'NULL';
        $req->start2 ? $batch->start_time_shift2 = $req->start2 : $batch->start_time_shift2 = 'NULL';
        $req->end1 ? $batch->end_time_shift1 = $req->end1 : $batch->end_time_shift1 = 'NULL';
        $req->end2 ? $batch->end_time_shift2 = $req->end2 : $batch->end_time_shift2 = 'NULL';
        $batch->batch_split_for_same_training_centre = $req->split;
        $req->sec1_can_no ? $batch->no_of_stu_sec_a = $req->sec1_can_no : $batch->no_of_stu_sec_a = NULL;
        $req->sec2_can_no ? $batch->no_of_stu_sec_b = $req->sec2_can_no : $batch->no_of_stu_sec_b = NULL;
        $batch->lesson_planner = $req->lesson_planner;
        $batch->ojt_given = $req->ojt_given;
        $req->o_start_date ? $batch->ojt_start_date = $req->o_start_date : $batch->ojt_start_date = 'NULL';
        $req->ojt_days ? $batch->ojt_days = $req->ojt_days : $batch->ojt_days = NULL;
        $batch->added_by = Auth::user()->id;   
        $batch->save();
        $insertedId = $batch->id;

        //Batch or Section lesson planner
         //Add Trainer Qualification
         $i = count($req->theory_class);        
         for ($j = 0; $j < $i; $j++) {        
           $lesson_planner = new BatchLessonPlanner();
           $lesson_planner->batch_id = $insertedId;
           $lesson_planner->class_type = $req->lesson_planner;
           $lesson_planner->theory_classroom_no = $req->theory_class[$j];
           $lesson_planner->it_lab_no = $req->it_lab[$j];
           $lesson_planner->practical_lab_no = $req->practical_lab[$j];
           $lesson_planner->theory_cum_practical_lab_no = $req->it_cum_lab[$j];
           $lesson_planner->theory_cum_it_lab_no = $req->it_cum_lab[$j];
           $lesson_planner->it_cum_practical_lab_no = $req->practical_cum_lab[$j];
           $lesson_planner->added_by = Auth::user()->id;         
           $lesson_planner->save();          
         }

        return redirect()->back()->with('alert_status','Batch Created Successfully!');
    }

    public function batchList(){
        $batch_data = Batch::all();      
        return view('admin.create_batch.batch_list', compact("batch_data"));
    }
}