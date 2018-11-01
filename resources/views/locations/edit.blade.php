@extends('layouts.master')

@section('title' ,'edit a Country')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit a Location</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('locations.update', [ 'id' => $location->id ]) }}" method="POST" class="form-horizontal" >


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}
                {{ method_field('PATCH') }}



                <!-- Field location name-->

                    <div class="form-group">
                        <label>Location name</label>
                        <input type="text" name="name" class="form-control" placeholder="write location name" value="{{ $location->name }}">
                    </div>

                    <!-- Field latitude-->

                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="latitude" class="form-control" value="{{ $location->latitude }}" >
                    </div>


                    <!-- Field longitude-->

                    <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" name="longitude" class="form-control" value="{{ $location->longitude }}" >
                    </div>


                    <!-- submit button -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>


            </div>
            </form>

        </div>
    </div>

    </div>

@endsection