<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestimonialTitle;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Yajra\DataTables\DataTables;

class TestimonialController extends Controller
{
    //___ testimonial.create ___
    public function create()
    {
        $testi_title = TestimonialTitle::first();
        return view('admin.resume.testimonial.create',compact('testi_title'));
    }
    //___ testimonial.ex_update ___
    public function ex_update(Request $request,$id)
    {
        $request->validate([
            'testi_title' => 'required|max:100|string',
            'testi_description'=> 'required|min:3|max:255|string',
            'testi_description_2'=> 'nullable|min:3|max:255|string',
        ]);
        $edu = TestimonialTitle::findOrFail($id);
        $edu->update($request->all());
        return response()->json([
            'status' => 200,
            'success' => 'Testimonial content uploaded successfully',
        ]);
    }
     //____ testimonial.index _____
     public function index(Request $request)
     {
         if ($request->ajax()) {
             $ex = Testimonial::all();
             return DataTables::of($ex)
                 ->addColumn('action', function ($row) {
                     $actionbtn = '<a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-primary edit" data-bs-target="#editModal" data-bs-toggle="modal" >
                 <i class="fas fa-edit"></i>
               </a>
               <a href="'.route('testimonial.destroy',$row->id).'" id="delete_data" class="btn btn-danger">
               <i class="fas fa-trash"></i>
             </a>';
                     return $actionbtn;
                 })
                 ->editColumn('description',function($row){
                     return substr($row->description,0,50);
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
         return view('admin.resume.testimonial.index');
     }
      //____ testimonial.store _____
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:100',
            'designation' => 'required|min:3|max:150',
            'description' => 'required|max:255|string',
        ]);

        $data = $request->all();
        Testimonial::create($data);
        return response()->json([
            'status' => 200,
            'success' => 'Testimonial added successfully',
        ]);
    }
    //____ testimonial.edit _____
    public function edit(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        return view('admin.resume.testimonial.edit',compact('testimonial'));
    }
    //____ testimonial.update _____
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:100',
            'designation' => 'required|min:3|max:150',
            'description' => 'required|max:255|string',
        ]);
        $data = $request->all();
        Testimonial::findOrFail($id)->update($data);
        return response()->json([
            'status' => 200,
            'success' => 'Testimonial updated successfully',
        ]);
    }
    //____ testimonial.destroy _____
    public function destroy($id)
    {
        $ex = Testimonial::findOrFail($id);
        $ex->delete();
        return response()->json([
            'status' => 204,
            'success' => 'Testimonial deleted successfully'
        ]);
    }
    //____ testimonial.status _____
    public function status(Request $request)
    {
        $ex = Testimonial::findOrFail($request->id);
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
            'success' => 'Testimonial status changed successfully'
        ]);
    }
}
