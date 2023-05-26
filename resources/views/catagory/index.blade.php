@extends('catagory.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catagory.create') }}"> Create new row</a>
            </div>
        </div>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Categorie</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach ($catagorys as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->title }}</td>
      <td>{{ $row->description }}</td>
     
      <td>
      <form action="{{ route('catagory.destroy',$row->id) }}" method="POST">
        
        <!--<a class="btn btn-info" href="{{ route('catagory.show',$row->id) }}">Show</a>-->

        <a class="btn btn-primary" href="{{ route('catagory.edit',$row->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

{{ $catagorys->links() }}

@endsection