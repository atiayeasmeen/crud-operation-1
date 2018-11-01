@extends('layouts.master')

@section('title' ,'Create New Location')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create New Location</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('locations.store') }}" method="POST" class="form-horizontal">


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}

                <!-- Field location name-->

                    <div class="form-group">
                        <label>Location name</label>
                        <input type="text" name="name" class="form-control" placeholder="write location name">
                    </div>

                    <!-- Field latitude-->

                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="latitude" class="form-control" >
                    </div>

                    <!-- Field longitude-->

                    <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" name="longitude" class="form-control" >
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



