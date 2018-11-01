@extends('layouts.master')

@section('title' ,'Create New Specialisms')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create New Specialism</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('specialisms.store') }}" method="POST" class="form-horizontal">


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}

                <!-- Field  name-->

                    <div class="form-group">
                        <label>Specialisms name</label>
                        <input type="text" name="name" class="form-control" placeholder="write specialisms name">
                    </div>

                    <!-- Field student mobile-->

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="mobile" class="form-control" value="asdfgh" >
                    </div>

                    <!-- Field image-->

                    <div class="form-group">
                        <label>image</label>
                        <input type="text" name="mobile" class="form-control" >
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



