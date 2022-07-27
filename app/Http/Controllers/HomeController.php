<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\job_apply;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_student =user::where('role', '2')->get();
        $all_tutor =user::where('role', '3')->get();
        $job_apply =job_apply::all();
        return view('Backend.Dashboard.home', compact('all_student', 'all_tutor', 'job_apply'));
    }

    public function inactive($id){
      job_apply::findOrfail($id)->update([
          'status'=> 'active',
      ]);
      return back();
    }
    public function active($id){
      job_apply::findOrfail($id)->update([
          'status'=> 'inactive',
      ]);
      return back();
    }

    public function destroy($id)
    {
        job_apply::find($id)->delete();
        return back()->with('delete_message', "delete successfully");

    }




}
