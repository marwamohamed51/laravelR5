<!DOCTYPE html>
<html>

<head>
    <title>Add client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- navbar start -->
    @include('includes.navClient')
    <!-- navbar end -->

    <div class="container" style="margin-left: 10px;">

        <h2>Add Client</h2>

        <form action="{{ route('clientResult') }}" method="post">
            @csrf
            <label for="fname">name</label><br>
            <p style="color: red">
                @error('clientName')
                {{ $message }}
                @enderror
            </p>
            <input type="text" id="fname" name="clientName" class="form-control" value="{{ old('clientName') }}"><br>
            <label for="lname">phone</label><br>
            <p style="color: red">
              @error('phone')
              {{ $message }}
              @enderror
          </p>
            <input type="text" id="lname" name="phone" class="form-control" value="{{ old('phone') }}"><br>
            <label for="lname">email</label><br>
            <p style="color: red">
              @error('email')
              {{ $message }}
              @enderror
          </p>
            <input type="text" id="lname" name="email" class="form-control" value="{{ old('email') }}"><br>
            <label for="lname">website</label><br>
            <p style="color: red">
              @error('website')
              {{ $message }}
              @enderror
          </p>
            <input type="text" id="lname" name="website" class="form-control" value="{{ old('website') }}"><br><br>
            <input type="submit" value="Submit" class="btn btn-primary btn-block">
        </form>

    </div>



</body>

</html>
