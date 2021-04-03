@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('categories.create')}}" class="btn btn-success">Add New</a>
</div>
<div class="card card-defualt">
    <div class="card-header">
        Categories List
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$category->id}}
                    </td>
                    <td>
                        {{$category->name}}
                    </td>                
                    <td>
                        {{$category->created_at}}
                    </td>                
                    <td>
                        {{$category->updated_at}}
                    </td>
                    <td>
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">Edit</a>
                    </td>
                </tr>                
            @endforeach
            </tbody>
        </table>
        
    </div>

</div>

@endsection