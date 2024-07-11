<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\EduTitle;
use Yajra\DataTables\DataTables;

class EducationController extends Controller
{
    //___ education.create ___
    public function create()
    {
        $data['edu'] = EduTitle::first();
        return view('admin.resume.education.create',$data);
    }
    //___ education.ex_update ___
    public function ex_update(Request $request,$id)
    {
        $request->validate([
            'edu_title' => 'required|max:255|string',
            'edu_description'=> 'required|min:3|string',
        ]);
        $edu = EduTitle::findOrFail($id);
        $edu->update([
            'edu_title' => $request->edu_title,
            'edu_description' => $request->edu_description,
        ]);
        return response()->json([
            'status' => 200,
            'success' => 'Education content uploaded successfully',
        ]);
    }
    //____ education.index _____
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ex = Education::all();
            return DataTables::of($ex)
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-primary edit" data-bs-target="#editModal" data-bs-toggle="modal" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="'.route('education.destroy',$row->id).'" id="delete_data" class="btn btn-danger">
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
                ->rawColumns(['action','status'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.resume.education.index');
    }
    //____ education.store _____
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'exam_name' => 'required|max:255|string',
            'institute' => 'required|max:255|string',
        ]);

        $data = $request->all();
        Education::create($data);
        return response()->json([
            'status' => 200,
            'success' => 'Education added successfully',
        ]);
    }
    //____ education.edit _____
    public function edit(Request $request)
    {
        $education = Education::find($request->id);
        return view('admin.resume.education.edit',compact('education'));
    }
     //____ education.update _____
     public function update(Request $request,$id)
     {
         $request->validate([
             'start_date' => 'required|date',
             'end_date' => 'nullable|date',
             'exam_name' => 'required|max:255|string',
             'institute' => 'required|max:255|string',
         ]);
         $data = $request->all();
         Education::find($id)->update($data);
         return response()->json([
             'status' => 200,
             'success' => 'Education updated successfully',
         ]);
     }
     //____ education.destroy _____
    public function destroy($id)
    {
        $ex = Education::findOrFail($id);
        $ex->delete();
        return response()->json([
            'status' => 204,
            'success' => 'Education deleted successfully'
        ]);
    }
    //____ education.status _____
    public function status(Request $request)
    {
        $ex = Education::findOrFail($request->id);
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
            'success' => 'Education status changed successfully'
        ]);
    }
}
