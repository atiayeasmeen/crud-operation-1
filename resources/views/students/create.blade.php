<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Student</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>

       <br>
       <div class="container">


          <div class="panel panel-default">
              <div class="panel-heading">

                  <h3 class="panel-title">Create New Student </h3>
              </div>

              <div class="panel-body">

                  <form action="{{ route('students.store') }}" method="POST" class="form-horizontal">


                      <!-- CSRF Token Field -->

                      {{ csrf_field() }}


                      <div class="form-group">

                          <!-- Field student name-->

                          <div class="form-group">
                              <label >Student name</label>
                              <input type="text" name="name" class="form-control" placeholder="write your student name">
                          </div>

                          <!-- Field student mobile-->

                          <div class="form-group">
                              <label >Student mobile</label>
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

</body>
</html>