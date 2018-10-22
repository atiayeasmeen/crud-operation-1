<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>

       <br>
       <div class="container">


          <div class="panel panel-default">
              <div class="panel-heading">

                  <h3 class="panel-title">All Students </h3>
              </div>

              <div class="panel-body">

                  <ul class="list-group">
                      @foreach($students as $student)
                          <li class="list-group-item">Item 1</li>
                          endforeach
                  </ul>

              </div>
          </div>

       </div>

</body>
</html>