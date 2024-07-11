<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\ServiceTitle;
use Illuminate\Http\Request;
use App\Models\Service;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    //___ CREATE ___
    public function create()
    {
        $service_title = ServiceTitle::first();
        return view('admin.services.create',compact('service_title'));
    }

    //___ UPDATE ___
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required|min:3|max:255|string',
            'mid_title' => 'required|min:3|max:255|string',
            'bottom_title' => 'required|min:3|max:255|string',
        ]);
        $service = ServiceTitle::find($id);
        $service->top_title = $request->top_title;
        $service->mid_title = $request->mid_title;
        $service->bottom_title = $request->bottom_title;
        $service->update();

        return response()->json([
            'status' => 200,
            'success' => 'Service content successfully updated',
        ]);
        
    }

    //___ index ___
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $service = Service::all();
            return DataTables::of($service)
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-primary edit" data-bs-target="#editModal" data-bs-toggle="modal" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="#" id="delete_data" class="btn btn-danger">
              <i class="fas fa-trash"></i>
            </a>';
                    return $actionbtn;
                })
                ->editColumn('service_img', function ($row) {
                    return '<img src="'.$row->service_img.'" width="70" alt="Services Image">';
                })
                ->editColumn('service_description', function ($row) {
                    return substr($row->service_description,0,100);
                })
                ->rawColumns(['action','service_img'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.services.index');
    }

    //___ STORE ___
    public function store(ServiceRequest $request)
    {
        $request->validated();

        $service = new Service();
        if($request->hasFile('service_img'))
        {
            $file = $request->file('service_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $path = 'public/frontend/assets/images/uploads/services/';
            $file->move($path,$filename);
            $service->service_img = $path.$filename;
        }

        $service->service_title = $request->service_title;
        $service->service_description = $request->service_description;
        $service->save();
        return response()->json([
            'status' => 200,
            'success' => 'Service content successfully uploaded',
        ]);
    }
}
