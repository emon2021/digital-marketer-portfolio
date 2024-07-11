<div class="modal-body">
    <form action="{{ route('education.update',$education->id) }}" id="educationUpdate" method="post" >
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="institute" value="{{ $education->institute }}" placeholder="Institute Name"
                class="form-control cat_name " >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
           
            <input type="text" name="exam_name"
                class="form-control cat_name " value="{{ $education->exam_name }}"  placeholder="Degree">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <h6>Start Date</h6>
        <div class="input-group mb-3">
            <input type="date" name="start_date"
                class="form-control cat_name " value="{{ $education->start_date }}"  placeholder="Start Date">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <h6>End Date</h6>
        <div class="input-group mb-3">
            <input type="date" name="end_date"
                class="form-control cat_name " value="{{ $education->end_date  }}"  placeholder="End Date">
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