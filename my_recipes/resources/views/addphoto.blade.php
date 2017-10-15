@extends('layouts.app')

@section('content')

<script src="{{ ('editor/ckeditor.js') }}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Photo</div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form class="form-horizontal" action="{{ url('/addphoto') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Photo</label>
                            <div class="col-sm-10">
                              <input type="file" name="photography" class="form-control" id="inputEmail3" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Description(Only Preview)</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="description1" id="ceditor"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="description" rows="5"></textarea required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tags</label>
                            <div class="col-sm-10">
                              <input type="text" name="tags" class="form-control" id="inputEmail3" placeholder="Enter Tags" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Add</button>
                            </div>
                          </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ceditor' );
</script>
@endsection
