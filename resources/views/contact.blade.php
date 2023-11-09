{{-- <h1>{{ $name }}</h1>
<h1>{{ $email }}</h1>
<a href="{{ route('about') }}">About page</a> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
    <form  action="{{ route('contact') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
     <p class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
     </p>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="" aria-describedby="emailHelp">
       <p class="text-danger">
          @error('email')
              {{ $message }}
          @enderror
       </p>
          </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="">
        </div>
        <p class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
         </p>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="">
          </div>
        <p class="text-danger">
            @error('address')
                {{ $message }}
            @enderror
         </p>
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>