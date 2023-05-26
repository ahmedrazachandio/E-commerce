@extends('categories.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ahmmedraza.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('subcategories.create') }}"> Create New category</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Category Id</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($subcategories as $subcategory)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $subcategory->title }}</td>
            <td>{{ $subcategory->slug }}</td>
            <td>{{ $subcategory->category_id }}</td>
            <td>{{ $subcategory->status == 1 ? 'ACTIVE' : 'DEACTIVE'  }}</td>
            <td>
                <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('subcategories.show',$subcategory->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('subcategories.edit',$subcategory->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $subcategories->links() !!}
      
@endsection