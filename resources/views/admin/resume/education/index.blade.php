@extends('layouts.admin')

@section('admin-content')
@push('css')
        {{-- ---------next and previous button custom css--------- --}}
        <style>
            .paginate_button {
                background: #0069d9;
                color: white;
                padding: 10px;
                margin: 0.40rem;
                border-radius: 0.25rem;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- ---Yajra DataTable css link---- --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
            integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
            
       
    @endpush

    <div class="container float-end" style="float:right;width:82%">
        <div class="row p-3">
            <div class="col-md-6 float-start">
                <h3>Experiences</h3>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h3 class="card-title">All Experience List Here...</h3></div>
                        <div class="col-md-6 float-end d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">+  &nbsp;&nbsp; Add  </a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table id="yTable" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Company Name</th>
                                    <th>Designation</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>

                        {{-- add servic modal --}}
  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('experience.store') }}" id="exStore" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="company_name" placeholder="Company Name"
                                        class="form-control cat_name " >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                   
                                    <input type="text" name="designation"
                                        class="form-control cat_name "  placeholder="Designation">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6>Start Date</h6>
                                <div class="input-group mb-3">
                                    <input type="date" name="start_time"
                                        class="form-control cat_name "  placeholder="Start Date">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6>End Date</h6>
                                <div class="input-group mb-3">
                                    <input type="date" name="end_time"
                                        class="form-control cat_name "  placeholder="End Date">
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
                    </div>
                    </div>
                </div>
                {{-- edit service modal --}}
  
                <!-- Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div id="modal_body">

                        </div>
                    </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post" id="delete">
        @csrf
        @method('DELETE')
    </form>


@endsection

<!----------Page specific scripts ---------->
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- ------Yajra DataTable js script link------- --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Include DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


<script>
    $(document).ready(function() {
        //  start ajax syntax with a function()
        $(function() {
            //  getting the original table and replace it with yajra DataTable({json data});
            yTable = $('#yTable').DataTable({
                //  default data for all columns
                columnDefs: [{
                    'defaultContent': '-',
                    'targets': '_all'
                }],
                //  it's showing the processing message
                "processing": true,
                //  it's working on serverside
                "serverSide": true,
                "searching": true,
                //  getting the route using ajax and declare request type
                "ajax": {
                    "url": "{{ route('experience.index') }}",
                    "type": 'GET',
                },
                //  push data to all the table columns
                columns: [
                    //  this first column is defined the auto increment too column
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'company_name',
                        name: 'company_name',
                    },
                    {
                        data: 'designation',
                        name: 'designation',
                    },
                    {
                        data: 'start_time',
                        name: 'start_time',
                    },
                    {
                        data: 'end_time',
                        name: 'end_time',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    //  here added orderable and searchable property to make table orderable and searchable
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
                // dom:'Bfrtip',
                // buttons:['csv','pdf'],
            });
        });
        //  here end data pushing using yajra datatables
    });
</script>

<!---------- -/ End of Page specific scripts ---------->

<script>
    $(document).ready(function() {
        //  experience store ajax request
          $('body').on('submit', '#exStore', function(e) {
              e.preventDefault();
              let get_route = $(this).attr('action');
              let form_data = new FormData($(this)[0]);
              $.ajax({
                  url:get_route,
                  type:'post',
                  data:form_data,
                  async: false,
                  processData: false,
                  contentType: false,
                  success:function(response){
                     toastr.success(response.success);
                     $('#exStore')[0].reset();
                     // reload table using yajra datatable
                     yTable.ajax.reload();
                    $('.btn-close').trigger('click');
                  },
                  error:function(xhr,status,failed){
                      let errors = xhr.responseJSON.errors;
                      $.each(errors, function(key, value){
                         toastr.error(value[0]);
                      });
                  },
              });
          });

          //  experience edit ajax request
          $('body').on('click', '.edit', function(e) {
              e.preventDefault();
              let get_id = $(this).data('id');
              $.ajax({
                  url:"{{ route('experience.edit') }}",
                  type:'GET',
                  data:{
                      id:get_id
                  },
                  success:function(response){
                     $('#modal_body').html(response);
                  },
                  error:function(xhr,status,failed){
                      let errors = xhr.responseJSON.errors;
                      $.each(errors, function(key, value){
                         toastr.error(value[0]);
                      });
                  },
              });
          });

        //    experience update ajax request
          $('body').on('submit', '#exUpdate', function(e) {
              e.preventDefault();
              let get_route = $(this).attr('action');
              let form_data = new FormData($(this)[0]);
              $.ajax({
                  url:get_route,
                  type:'POST',
                  data:form_data,
                  processData: false,
                  contentType: false,
                  success:function(response){
                     toastr.success(response.success);
                     // reload table using yajra datatable
                     yTable.ajax.reload();
                    $('.btn-close').trigger('click');
                  },
                  error:function(xhr,status,failed){
                      let errors = xhr.responseJSON.errors;
                      $.each(errors, function(key, value){
                         toastr.error(value[0]);
                      });
                  },
              });
          });

          //    experience delete ajax request
          $('body').on('click', '#delete_data', function(e) {
              e.preventDefault();
              let get_route = $(this).attr('href');
              let set_route = $('#delete').attr('action', get_route);
              $('#delete').submit();     
          });
          // handle form for deleting
          $('#delete').submit(function(event){
              event.preventDefault();
              let get_route = $(this).attr('action');
              let form_data = new FormData($(this)[0]);
              $.ajax({
                  url:get_route,
                  type:'post',
                  data:form_data,
                  processData: false,
                  contentType: false,
                  success:function(response){
                     toastr.warning(response.success);
                     // reloading table
                     yTable.ajax.reload();
                  },
                  error:function(xhr,status,failed){
                      let errors = xhr.responseJSON.errors;
                      $.each(errors, function(key, value){
                         toastr.error(value[0]);
                      });
                  },
              });
          });

          //    change experience status
          $('body').on('click', '.status', function(e) {
              e.preventDefault();
              let get_id = $(this).data('id');
              $.ajax({
                  url:"{{ route('experience.status') }}",
                  type:'GET',
                  data:{
                      id:get_id,
                  },
                  success:function(response){
                     toastr.success(response.success);
                     // reload table using yajra datatable
                     yTable.ajax.reload();
                  },
                  error:function(xhr,status,failed){
                      let errors = xhr.responseJSON.errors;
                      $.each(errors, function(key, value){
                         toastr.error(value[0]);
                      });
                  },
              });
          });
    });
</script>
@endpush