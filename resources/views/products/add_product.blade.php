@extends('layouts.master')

@section('content')
<br>
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <!-- text input -->
                    <div class="form-group row">
                      <div class="col-6">
                            <label>Product Id</label>
                            <input type="text" class="form-control" placeholder="Product Id">
                        </div>
                        <div class="col-6">
                            <label>Product Name</label>
                            <input type="text" class="form-control" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-6">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="Price">
                        </div>
                        <div class="col-6">
                            <label>Link</label>
                            <input type="text" class="form-control" placeholder="Link">
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-6">
                            <label>Upload Image</label>
                            <input type="file">
                        </div>
                        <div class="col-6">
                            <label>Upload Broucher</label>
                            <input type="file">
                        </div>
                    </div>
                    <div class="card card-info card-outline">
                        <div class="card-header">
                        <h3 class="card-title">
                            Description
                            
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm"
                                    data-widget="collapse"
                                    data-toggle="tooltip"
                                    title="Collapse">
                            <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool btn-sm"
                                    data-widget="remove"
                                    data-toggle="tooltip"
                                    title="Remove">
                            <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="mb-3">
                            <textarea id="editor1" name="editor1" style="width: 100%"></textarea>
                        </div>
                        
                        </div>
                    </div>

                </form>
              </div>
              <div class="form-group row">
                <div class="col-5" ></div>
                <div class="col-6">
                <input type="submit" name="save" class="btn btn-success" />
            </div>
            </div>
              <!-- /.card-body -->
            </div>
            

@endsection

@section('javascript')
<!-- CK Editor -->
<script src="{{asset('admin-lte/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })
  })
</script>
@endsection