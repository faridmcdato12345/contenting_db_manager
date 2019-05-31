@extends('layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">users</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th width="280px">Status</th>
                <th width="280px">Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
@section('modal')
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="modelHeading"></h4>
        </div>
        <div class="modal-body">
            <form id="productForm" name="productForm" class="form-horizontal">
               <input type="hidden" name="product_id" id="product_id">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Details</label>
                    <div class="col-sm-12">
                        <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                 </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('datatable-script')
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('users.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'role_id', name: 'role_id'},
              {data: 'created_at', name: 'created at'},
              {data: 'updated_at', name: 'updated at'},
              {data: 'status', name: 'status', orderable: false, searchable: true},
              {data: 'actions', name: 'actions', orderable: false, searchable: true},
          ]
      });
       
      $('#createNewUser').click(function () {
          $('#saveBtn').val("create-product");
          $('#product_id').val('');
          $('#productForm').trigger("reset");
          $('#modelHeading').html("Create New User");
          $('#ajaxModel').modal('show');
      });
      
      $('body').on('click', '.editUser', function () {
        var product_id = $(this).data('id');
        $.get("{{ route('users.index') }}" +'/' + product_id +'/edit', function (data) {
            $('#modelHeading').html("Edit User");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#name').val(data.name);
            $('#role').val(data.role_id);
            $('#role').val(data.role_id);
            $('#detail').val(data.detail);
        })
     });
      
      $('#saveBtn').click(function (e) {
          e.preventDefault();
          $(this).html('Sending..');
      
          $.ajax({
            data: $('#productForm').serialize(),
            url: "{{ route('users.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
       
                $('#productForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
           
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
      });
      
      $('body').on('click', '.deleteUser', function () {
       
          var product_id = $(this).data("id");
          confirm("Are You sure want to delete !");
        
          $.ajax({
              type: "DELETE",
              url: "{{ route('users.store') }}"+'/'+product_id,
              success: function (data) {
                  table.draw();
              },
              error: function (data) {
                  console.log('Error:', data);
              }
          });
      });
       
    });
  </script>
@endsection
