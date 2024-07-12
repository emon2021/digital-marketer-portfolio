<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\ExperienceTitle;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ExperienceController extends Controller
{
    //____ experience.index _____
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ex = Experience::all();
            return DataTables::of($ex)
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-primary edit" data-bs-target="#editModal" data-bs-toggle="modal" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="'.route('experience.destroy',$row->id).'" id="delete_data" class="btn btn-danger">
              <i class="fas fa-trash"></i>
            </a>';
                    return $actionbtn;
                })
                ->editColumn('status', function($row){
                    if($row->status == 1){
                        return '<span class="badge badge-success status" style="cursor:pointer;" data-id="'.$row->id.'">Active</span>';
                    }else{
                        return '<span class="badge badge-danger status"  style="cursor:pointer;" data-id="'.$row->id.'">Inactive</span>';
                    }
                })
                ->rawColumns(['action','service_img','status'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.resume.index');
    }

    //____ experience.store _____
    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'designation' => 'required|max:255|string',
            'company_name' => 'required|max:255|string',
        ]);

        $data = $request->all();
        Experience::create($data);
        return response()->json([
            'status' => 200,
            'success' => 'Experience added successfully',
        ]);
    }
    //____ experience.edit _____
    public function edit(Request $request)
    {
        $ex = Experience::find($request->id);
        return view('admin.resume.edit',compact('ex'));
    }
    //____ experience.update _____
    public function update(Request $request,$id)
    {
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'designation' => 'required|max:255|string',
            'company_name' => 'required|max:255|string',
        ]);
        $data = $request->all();
        Experience::find($id)->update($data);
        return response()->json([
            'status' => 200,
            'success' => 'Experience updated successfully',
        ]);
    }

    //____ experience.destroy _____
    public function destroy($id)
    {
        $ex = Experience::findOrFail($id);
        $ex->delete();
        return response()->json([
            'status' => 204,
            'success' => 'Experience deleted successfully'
        ]);
    }
    //____ experience.status _____
    public function status(Request $request)
    {
        $ex = Experience::findOrFail($request->id);
        if($ex->status == 1)
        {
            $ex->status = 0;
            $ex->update();
        }else{
            $ex->status = 1;
            $ex->update();
        }
        return response()->json([
            'status' => 200,
            'success' => 'Experience status changed successfully'
        ]);
    }
    //____ experience.create _____
    public function create()
    {
        $ex_title = ExperienceTitle::first();
        return view('admin.resume.experience_create',compact('ex_title'));
    }
    //_____ experience.ex_update _____
    public function ex_update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'required|string|min:3'
        ]);
       $experience = ExperienceTitle::find($id);
       $experience->title = $request->title;
       $experience->description = $request->description;
       $experience->update();

        return response()->json([
            'status' => 200,
            'success' => 'Experience title uploaded successfully',
        ]);
    }
}
