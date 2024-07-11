<div class="modal-body">
    <form action="{{ route('experience.update',$ex->id) }}" id="exUpdate" method="post" >
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="company_name" value="{{ $ex->company_name }}" placeholder="Company Name"
                class="form-control cat_name " >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           
            <input type="text" name="designation"
                class="form-control cat_name " value="{{ $ex->designation }}"  placeholder="Designation">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <h6>Start Date</h6>
        <div class="input-group mb-3">
            <input type="date" name="start_time"
                class="form-control cat_name " value="{{ $ex->start_time }}"  placeholder="Start Date">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <h6>End Date</h6>
        <div class="input-group mb-3">
            <input type="date" name="end_time"
                class="form-control cat_name " value="{{ $ex->end_time  }}"  placeholder="End Date">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom:1rem">
            <!-- /.col -->
            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-success btn-block" style="width: 8.7rem; margin-right:0.2rem">ADD</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>