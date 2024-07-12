@extends('layouts.admin')
@section('admin-content')
@push('title')
<title>Admin|Settings|Content</title>
@endpush
<div class="container" style="padding-top: 0 !important; padding-bottom: 7rem !important">
    <div class="row">
        <div class="login-box-wrapper d-flex align-items-center justify-content-center mt-5 pt-5" style="width: 100%">
            <div class="login-box">
                <!-- /.login-logo -->
                <div class="card card-outline card-success w-100" style="width: 40rem !important">
                  <div class="card-body">
                    <form action="{{ route('settings.update',$settings->id) }}" id="settings" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6>Logo Frontend <font color="red">*</font></h6>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" value="{{ $settings->front_logo }}" name="front_logo">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <h6>Logo Backend <font color="red">*</font></h6>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" value="{{ $settings->back_logo }}" name="back_logo">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <h6>Favicon <font color="red">*</font></h6>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" value="{{ $settings->favicon }}" name="favicon">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <h5 style="color:#20BF6B">Social Links</h5>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->facebook }}" name="facebook" placeholder="Facebook Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->twitter }}" name="twitter" placeholder="Twitter Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->instagram }}" name="instagram" placeholder="Instagram Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->linkedin }}" name="linkedin" placeholder="LinkedIn Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->github }}" name="github" placeholder="Github Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="url"  class="form-control" value="{{ $settings->youtube }}" name="youtube" placeholder="Youtube Link">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                          <button type="submit" class="btn btn-success btn-block">Upload</button>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.login-box -->
        </div>
    </div>
</div>
@endsection

@push('scripts')

    <script>
        $(document).ready(function(){
            $('body').on('submit','#settings',function(e){
                e.preventDefault();
                let get_route = $(this).attr('action');
                let form_data = new FormData($(this)[0]);
                $.ajax({
                    url: get_route,
                    type: 'post',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        toastr.success(response.success);
                    },
                    error: function(xhr,status,failed){
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value){
                            toastr.error(value[0]);
                        });
                    }
                });
            });
        });
    </script>
  @endpush
