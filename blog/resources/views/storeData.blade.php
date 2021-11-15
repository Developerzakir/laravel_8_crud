<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>
  

  <div class="container">
      <a href="{{url('/')}}" class="btn btn-primary my-2">Show  Data</a>

           

      <form action="{{url('/insert-data')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name">

              @error('name')
              <span class="text-danger">{{$message}}</span>

              @enderror
          </div>

          <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter Email">

              @error('email')
              <span class="text-danger">{{$message}}</span>

              @enderror
          </div>

          <input type="submit" class="btn btn-success" value="Submit">

      </form>
  

  </div>
  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>