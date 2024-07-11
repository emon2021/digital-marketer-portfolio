<div class="modal-body">
    <form action="{{ route('service_update.update',$service->id) }}" id="servicesUpdate" method="post" enctype="multipart/form-data">
        @csrf
        <div class="img">
            Service Image
        </div>
        <div class="input-group mb-3">
            <input type="file" name="service_img" value="{{ $service->service_img }}"
                class="form-control cat_name " >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           
            <input type="text" name="service_title" value="{{ $service->service_title }}"
                class="form-control cat_name "  placeholder="Title">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           <textarea name="service_description"  placeholder="Description" class="form-control" cols="30" rows="5">
            {{ $service->service_description }}
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