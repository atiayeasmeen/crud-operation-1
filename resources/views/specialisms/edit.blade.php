@extends('layouts.master')

@section('title' ,'edit a specialisms')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit a specialism</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('specialisms.update', [ 'id' => $specialism->id ]) }}" method="POST" class="form-horizontal" >


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <!-- Field student name-->

                    <div class="form-group">
                        <label>specialism name</label>
                        <input type="text" name="name" class="form-control" placeholder="write specialism name" value="{{ $specialisms->name }}">
                    </div>

                    <!-- Field slug-->

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="Slug" class="form-control" value="{{ $specialisms->slug }}" >
                    </div>

                    <!-- Field image-->

                    <div class="form-group">
                        <label>image</label>
                        <input type="text" name="image" class="form-control" >
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



