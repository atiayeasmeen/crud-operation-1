@extends('layouts.master')

@section('title' ,'Create New Student')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create New Student</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('students.store') }}" method="POST" class="form-horizontal">


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}

                <!-- Field student name-->

                    <div class="form-group">
                        <label>Student name</label>
                        <input type="text" name="name" class="form-control" placeholder="write your student name">
                    </div>

                    <!-- Field student mobile-->

                    <div class="form-group">
                        <label>Student mobile</label>
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



