<div class="modal-body">
    <form action="{{ route('testimonial.update',$testimonial->id) }}" id="testimonialUpdate" method="post" >
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" value="{{ $testimonial->name }}" placeholder="Client Name"
                class="form-control cat_name " >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           
            <input type="text" name="designation" value="{{ $testimonial->designation }}"
                class="form-control cat_name "  placeholder="Designation">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <textarea name="description" placeholder="Description" class="form-control" cols="30" rows="4">
                {{ $testimonial->description }}
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