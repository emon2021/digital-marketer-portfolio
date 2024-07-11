<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
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
              <a href="'.route('services.destroy',$row->id).'" id="delete_data" class="btn btn-danger">
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
}
