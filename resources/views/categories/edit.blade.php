@extends('layouts.master')

@section('title' ,'edit a Country')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit a Category</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('categories.update', [ 'id' => $category->id ]) }}" method="POST" class="form-horizontal" >


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}
                {{ method_field('PATCH') }}



                <!-- Field Category name-->

                    <div class="form-group">
                        <label>Category name</label>
                        <input type="text" name="name" class="form-control" placeholder="write Category name" value="{{ $category->sdfghj}}">
                    </div>

                    <!-- Field Slug -->

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $category->slug  }}" >
                    </div>


                    <!-- Field image -->

                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" name="image " class="form-control" value="{{ $category->image  }}" >
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