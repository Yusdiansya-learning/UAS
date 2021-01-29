@extends('layouts.admin')
@section('content')
  <div class="container">
    <form method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
        @csrf
        <br>
        <h3>Input Image</h3>
        <div class="custom-file mb-3 mt-5">
            <input type="file" class="custom-file-input" id="image" name="image" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        <div class="form-group mt-3">
          <label for="exampleInputEmail1">Project Detail</label>
          <input type="text" class="form-control" id="detail" name="detail" aria-describedby="emailHelp">
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1">Content</label>
            <input class="form-control" id="content" name="content" rows="3">
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>
  </div>
@endsection
