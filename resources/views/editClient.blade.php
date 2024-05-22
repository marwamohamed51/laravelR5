<!DOCTYPE html>
<html>

<head>
    <title>Edit client</title>
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

        <h2>Edit Client</h2>

        <form action="{{ route('updateClient', $client->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="fname">Name</label><br>
            <p style="color: red">
                @error('clientName')
                    {{ $message }}
                @enderror
            </p>
            <input type="text" id="fname" name="clientName" class="form-control"
            value="{{ old('clientName', $client->clientName) }}"><br>
            <label for="lname">Phone</label><br>
            <p style="color: red">
                @error('phone')
                    {{ $message }}
                @enderror
            </p>
            <input type="text" id="lname" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}"><br>
            <label for="lname">E-mail</label><br>
            <p style="color: red">
                @error('email')
                    {{ $message }}
                @enderror
            </p>
            <input type="text" id="lname" name="email" class="form-control" value="{{ old('email', $client->email) }}"><br>
            <label for="lname">Website</label><br>
            <p style="color: red">
                @error('website')
                    {{ $message }}
                @enderror
            </p>
            <input type="text" id="lname" name="website" class="form-control" value="{{ old('website', $client->website) }}"><br>
            <label for="city">City</label><br>
            <p style="color: red">
                @error('city')
                    {{ $message }}
                @enderror
            </p>
            <select name="city" id="city" class="form-control">
                <option value="">Please Select City</option>
                <option value="Cairo" {{ old('city', $client->city) == 'Cairo' ? 'selected' : '' }}>Cairo</option>
                <option value="Giza" {{ old('city', $client->city) == 'Giza' ? 'selected' : '' }}>Giza</option>
                <option value="Alex" {{ old('city', $client->city) == 'Alex' ? 'selected' : '' }}>Alex</option>
            </select>
            <br>
            <label for="active">Active</label><br>
            <input type="checkbox" id="active" name="active"
                {{ old('active', $client->active) ? 'checked' : '' }}><br><br>
            <label for="image">Image</label><br>
            <p>
                @if ($client->image)
                    <img src="{{ asset('assets/images/' . $client->image) }}" alt="{{ old('clientName', $client->clientName) }}"
                        width="200"><br>
                @endif
            </p>
            <br>
            <input type="file" id="image" name="image" class="form-control"><br>
            <input type="submit" value="Submit" class="btn btn-primary btn-block"><br><br>
        </form>

    </div>



</body>

</html>
