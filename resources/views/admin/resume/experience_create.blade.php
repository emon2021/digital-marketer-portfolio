@extends('layouts.admin')
@section('admin-content')
<div class="container" style="padding-top: 0 !important; padding-bottom: 7rem !important">
    <div class="row">
        <div class="login-box-wrapper d-flex align-items-center justify-content-center mt-5 pt-5" style="width: 100%">
            <div class="login-box">
                <!-- /.login-logo -->
                <div class="card card-outline card-success w-100" style="width: 40rem !important">
                  <div class="card-body">
                    <form action="{{ route('experience.ex_update',$ex_title->id) }}" id="ex_title" method="post">
                        @csrf
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ $ex_title->title }}" name="title" placeholder="Experience Title">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-copy"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <textarea name="description" placeholder="Experience Description" class="form-control" cols="30" rows="5">
                            {{ $ex_title->description }}
                        </textarea>
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
            $('body').on('submit','#ex_title',function(e){
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
