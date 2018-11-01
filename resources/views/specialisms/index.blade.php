@extends('layouts.master')

@section('title' ,'All Specialisms')

@section('content')
    <br>
    <div class="container">

        <ul class="list-unstyled">

            <li><a href="{{ route('specialisms.create') }}" class="btn btn-sm btn-success" >Create a new student</a></li>
        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">Specialisms</h3>
            </div>

            <div class="panel-body">

                <ul class="list-group">
                    @foreach($specialisms as $specialism )
                        <li class="list-group-item">
                            <a href="{{ route('specialisms.show',[ 'id' => $specialism->id ]) }}">{{ $specialism->name }} ({{ $specialism->Slug }}) ({{ $specialism->image }})</a>
                            |
                            <a href="{{ route('specialisms.edit',$specialism->id) }}">Edit</a>
                            |
                            <form action="{{ route('specialisms.destroy', $specialism->id) }}" method="POST" onsubmit="return confirm('Want to delete?');">
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