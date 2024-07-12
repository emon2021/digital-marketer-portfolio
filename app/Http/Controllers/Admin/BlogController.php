<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTitle;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //___ blog.create ___
    public function create()
    {
        $blog_title = BlogTitle::first();
        return view('admin.blog.create',compact('blog_title'));
    }
    //___ blog.ex_update ___
    public function ex_update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|max:100|string',
            'subtitle'=> 'required|min:3|max:255|string',
            'subtitle_2'=> 'nullable|min:3|max:255|string',
        ]);
        $edu = BlogTitle::findOrFail($id);
        $edu->update($request->all());
        return response()->json([
            'status' => 200,
            'success' => 'Blog content uploaded successfully',
        ]);
    }
    //____ blog.index _____
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ex = Blog::all();
            return DataTables::of($ex)
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-primary edit" data-bs-target="#editModal" data-bs-toggle="modal" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="'.route('blog.destroy',$row->id).'" id="delete_data" class="btn btn-danger">
              <i class="fas fa-trash"></i>
            </a>';
                    return $actionbtn;
                })
                ->editColumn('blog_title',function($row){
                    return substr($row->blog_title,0,70);
                })
                ->editColumn('blog_description',function($row){
                    return substr($row->blog_description,0,100);
                })
                ->editColumn('blog_img',function($row){
                    return '<img src="'.asset($row->blog_img).'" width="70" >';
                })
                ->editColumn('blog_status', function($row){
                    if($row->blog_status == 1){
                        return '<span class="badge badge-success status" style="cursor:pointer;" data-id="'.$row->id.'">Active</span>';
                    }else{
                        return '<span class="badge badge-danger status"  style="cursor:pointer;" data-id="'.$row->id.'">Inactive</span>';
                    }
                })
                ->rawColumns(['action','blog_status','blog_img','blog_title','blog_description'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.blog.index');
    }

      //____ blog.store _____
      public function store(Request $request)
      {
        
          $request->validate([
              'blog_title' => 'required|string|min:3|max:255',
              'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              'blog_description' => 'required|string|min:3',
          ]);

          if($request->hasFile('blog_img'))
          {
              $file = $request->file('blog_img');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              $path = 'public/frontend/assets/images/uploads/blog/';
              $file->move($path,$filename);
          }
          $user_id = Auth::id();
          $blog = new Blog();
          
          $blog->user_id =  $user_id;
          $blog->blog_title = $request->blog_title;
          $blog->blog_description = $request->blog_description;
          $blog->blog_img = $path.$filename;
          $blog->save();
          
          return response()->json([
              'status' => 200,
              'success' => 'Blog added successfully',
          ]);
      }
      //____ blog.edit _____
    public function edit(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        return view('admin.blog.edit',compact('blog'));
    }
    //____ blog.update _____
    public function update(Request $request,$id)
    {
        $request->validate([
            'blog_title' => 'required|string|min:3|max:255',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_description' => 'required|string|min:3',
        ]);

        $blog = Blog::findOrFail($id);
        if($request->hasFile('blog_img'))
        {
            if(file_exists($blog->blog_img))
            {
                unlink($blog->blog_img);
            }
            $file = $request->file('blog_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $path = 'public/frontend/assets/images/uploads/blog/';
            $file->move($path,$filename);
        }
        $user_id = Auth::id();
        $blog = new Blog();
          
        $blog->user_id =  $user_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;
        $blog->blog_img = $path.$filename;
        $blog->update();

        return response()->json([
            'status' => 200,
            'success' => 'Testimonial updated successfully',
        ]);
    }
    //____ blog.destroy _____
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if(file_exists($blog->blog_img))
        {
            unlink($blog->blog_img);
        }
        $blog->delete();
        return response()->json([
            'status' => 204,
            'success' => 'Blog deleted successfully'
        ]);
    }
    //____ blog.status _____
    public function status(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        if($blog->blog_status == 1)
        {
            $blog->blog_status = 0;
            $blog->update();
        }else{
            $blog->blog_status = 1;
            $blog->update();
        }
        return response()->json([
            'status' => 200,
            'success' => 'Testimonial status changed successfully'
        ]);
    }
}
