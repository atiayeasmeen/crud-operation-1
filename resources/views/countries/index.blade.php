@extends('layouts.master')

@section('title' ,'All countries')

@section('content')
    <br>
    <div class="container">

        <ul class="list-unstyled">

            <li><a href="{{ route('countries.create') }}" class="btn btn-sm btn-success" >Create a new country</a></li>
        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">Countries</h3>
            </div>

            <div class="panel-body">

                <ul class="list-group">
                    @foreach($countries as $country )
                        <li class="list-group-item">
                            <a href="{{ route('countries.show',[ 'id' => $country->id ]) }}">{{ $country->name }} ({{ $country->code}}) ({{ $country->currency_code }}) ({{ $country->currency_symbol }})</a>
                            |
                            <a href="{{ route('countries.edit',$country->id) }}">Edit</a>
                            |
                            <form action="{{ route('countries.destroy', $country->id) }}" method="POST" onsubmit="return confirm('Want to delete?');">
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