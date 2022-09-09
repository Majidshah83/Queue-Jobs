<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   @if (Session::has('success'))
        <li>{!! session('success') !!}</li>
   @endif
 <form action="{{route('submit-form')}}" method="Post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <textarea class="form-control" value="{{old('email')}}" name="email" placeholder="Enter Email"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
