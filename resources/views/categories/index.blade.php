@extends('layouts.master')

@section('title' ,'All Categories')

@section('content')
    <br>
    <div class="container">

        <ul class="list-unstyled">

            <li><a href="{{ route('categories.create') }}" class="btn btn-sm btn-success" >Create a new Category</a></li>
        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">Categories</h3>
            </div>

            <div class="panel-body">

                <ul class="list-group">
                    @foreach($categories as $category )
                        <li class="list-group-item">
                            <a href="{{ route('categories.show',[ 'id' => $category->id ]) }}">{{ $category->name }} ({{ $category->slug}}) ({{ $category->image }})</a>
                            |
                            <a href="{{ route('categories.edit',$category->id) }}">Edit</a>
                            |
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Want to delete?');">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                        </li>
                    @endforeach




                </ul>

            </div>
        </div>

    </div>

@endsection