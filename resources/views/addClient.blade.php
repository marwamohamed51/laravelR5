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

        <form action="{{ route('clientResult') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="fname">name</label><br>
            <p style="color: red">
                @error('clientName')
                    {{ $message }}
                @enderror
            </p>
            <input type="text" id="fname" name="clientName" class="form-control"
                value="{{ old('clientName') }}"><br>
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
            <input type="text" id="lname" name="website" class="form-control"
                value="{{ old('website') }}"><br>
            <label for="city">City</label><br>
            <p style="color: red">
                @error('city')
                    {{ $message }}
                @enderror
            </p>
            <select name="city" id="city" class="form-control">
                <option value="">Please Select City</option>
                <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
                <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
                <option value="Alex" {{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
            </select>
            <br>
            <label for="active">Active</label><br>
            <input type="checkbox" id="active" name="active" {{ old('active') ? 'checked' : '' }}><br><br>
            <label for="image">Image</label><br>
            <p style="color: red">
                @error('image')
                    {{ $message }}
                @enderror
            </p>
            <input type="file" id="image" name="image" class="form-control"><br><br>
            <input type="submit" value="Submit" class="btn btn-primary btn-block"><br><br>
        </form>

    </div>



</body>

</html>
