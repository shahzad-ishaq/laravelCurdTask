@extends('catagory.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('catagory.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('catagory.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control"  placeholder="Enter Title" name ="title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3"placeholer ="Enter description" name="description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection