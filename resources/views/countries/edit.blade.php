@extends('layouts.master')

@section('title' ,'edit a Country')

@section('content')
    <br>
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit a Country</h3>
            </div>

            <div class="panel-body">

                <form action="{{ route('countries.update', [ 'id' => $country->id ]) }}" method="POST" class="form-horizontal" >


                    <!-- CSRF Token Field -->

                {{ csrf_field() }}
                {{ method_field('PATCH') }}



                    <!-- Field country name-->

                    <div class="form-group">
                        <label>Country name</label>
                        <input type="text" name="name" class="form-control" placeholder="write your student name" value="{{ $country->name }}">
                    </div>

                    <!-- Field country code-->

                    <div class="form-group">
                        <label>code</label>
                        <input type="text" name="code" class="form-control" value="{{ $country->code }}" >
                    </div>

                    <!-- Field currency_code-->

                    <div class="form-group">
                        <label>Currency_code</label>
                        <input type="text" name="currency_code" class="form-control" value="{{ $country->currency_code }}" >
                    </div>

                    <!-- Field currency_symbol-->

                    <div class="form-group">
                        <label>Currency_symbol</label>
                        <input type="text" name="currency_symbol" class="form-control" value="{{ $country->currency_symbol }}" >
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