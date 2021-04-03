@extends('layouts.app')

@section('content')

<div class="card card-defualt">
    <div class="card-header">
        {{isset($category)?'Edit Category':'Add New Category'}}
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{isset($category)? route('categories.update', $category->id):route('categories.store')}}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Category Name" class="form-control" value="{{isset($category)?$category->name:''}}">
            </div>
            <div class="form-group">
                <input type="submit" value="{{isset($category)?'Update':'Create'}}" name="submit" class="btn btn-success">
            </div> 
        </form>
    </div>
</div>

@endsection