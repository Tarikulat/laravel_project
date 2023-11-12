@extends('admin.layouts.app')
<!-- (tan this is called chailled layouts pages) -->

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid my-2">
    <form action="" method="post" id="categoryform" name="categoryform">

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            <p></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">
                            <p></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select type="text" name="status" id="status" class="form-control">
                                <option value="1">Action</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button type="submin" class="btn btn-primary">Create</button>
            <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </form>

    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customJs')
<script>
$("#categoryform").submit(function(event){
    event.preventDefault();
    var element = $(this);
    $.ajax({
        url: '{{ route("categories.store") }}',
        type: 'post',
        data: element.serializeArray(),
        dataType: 'json',

        success: function(response){

         if (response["status"]== true) {

            $("#name").removeClass('is-invalid')
              .siblings('p')
              .removeClass('invalid-feedback').html("");

              $("#slug").addClass('is-invalid')
              .siblings('p')
              .addClass('invalid-feedback').html("");

            else {
                var errors = response['errors'];
                if(errors['name']){
              $("#name").addClass('is-invalid')
              .siblings('p')
              .addClass('invalid-feedback').html(errors['name']);

            } else {
                $("#name").removeClass('is-invalid')
              .siblings('p')
              .removeClass('invalid-feedback').html("");
            }



            if(errors['slug']){
              $("#slug").addClass('is-invalid')
              .siblings('p')
              .addClass('invalid-feedback').html(errors['slug']);
            } else {
                $("#slug").removeClass('is-invalid')
              .siblings('p')
              .removeClass('invalid-feedback').html("");
            }

            }
         }

//last part cheking..............................
            var errors = response['errors'];

            if(errors['name']){
              $("#name").addClass('is-invalid')
              .siblings('p')
              .addClass('invalid-feedback').html(errors['name']);
            } else {
                $("#name").removeClass('is-invalid')
              .siblings('p')
              .removeClass('invalid-feedback').html("");
            }

            if(errors['slug']){
              $("#slug").addClass('is-invalid')
              .siblings('p')
              .addClass('invalid-feedback').html(errors['slug']);
            } else {
                $("#slug").removeClass('is-invalid')
              .siblings('p')
              .removeClass('invalid-feedback').html("");
            }

        }, error: function(jqXHR, exception){
            console.log("Something went wrong");
        }
    })
});

$('#name').change(function(){
    $.ajax({
        url: '{{ route("categories.store") }}',
        type: 'post',
        data: element.serializeArray(),
        dataType: 'json',

        success: function(response){

        }


});

        });
</script>
@endsection
