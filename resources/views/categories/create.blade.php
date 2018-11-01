@extends('layouts.master')

@section('title' ,'Create New Category')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create New Category</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('categories.store') }}" method="POST" class="form-horizontal">


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}

                <!-- Field Category name-->

                    <div class="form-group">
                        <label>Category name</label>
                        <input type="text" name="name" class="form-control" placeholder="write Category name">
                    </div>

                    <!-- Field Slug -->

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" >
                    </div>

                    <!-- Field image -->

                    <div class="form-group">
                        <label>Image </label>
                        <input type="text" name="image " class="form-control" >
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



