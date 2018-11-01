@extends('layouts.master')

@section('title' ,'All locations')

@section('content')
    <br>
    <div class="container">

        <ul class="list-unstyled">

            <li><a href="{{ route('locations.create') }}" class="btn btn-sm btn-success" >Create a new location</a></li>
        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">Locations</h3>
            </div>

            <div class="panel-body">

                <ul class="list-group">
                    @foreach($locations as $location )
                        <li class="list-group-item">
                            <a href="{{ route('locations.show',[ 'id' => $location->id ]) }}">{{ $location->name }} ({{ $location->latitude}}) ({{ $location->longitude }})</a>
                            |
                            <a href="{{ route('locations.edit',$location->id) }}">Edit</a>
                            |
                            <form action="{{ route('locations.destroy', $location->id) }}" method="POST" onsubmit="return confirm('Want to delete?');">
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