<div class="modal-body">
    <form action="{{ route('blog.update',$blog->id) }}" id="blogUpdate" method="post" >
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="blog_title" value="{{ $blog->blog_title }}" placeholder="Blog Title"
                class="form-control cat_name " >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           
            <input type="file" name="blog_img" value="{{ $blog->blog_img }}"
                class="form-control cat_name ">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <textarea name="blog_description" placeholder="Blog Description" class="form-control" cols="30" rows="4">
                {{ $blog->blog_description }}
            </textarea>
        </div>
        <div class="row" style="padding-bottom:1rem">
            <!-- /.col -->
            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-success btn-block" style="width: 8.7rem; margin-right:0.2rem">UPDATE</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>