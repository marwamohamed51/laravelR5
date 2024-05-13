<!DOCTYPE html>
<html lang="en">

<head>
    <title>Client List</title>
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

    <div class="container">
        @include('includes.alert')
        <h2>Client data</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Edit</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($clientList as $client)
                    <tr>
                        <td>{{ $client->clientName }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->website }}</td>
                        <td><a href="{{ route('editClient', $client->id) }}">Edit</a></td>
                        <td><a href="{{ route('showClient', $client->id) }}">Show</a></td>
                        <td>
                            <form action="{{ route('deleteClient') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $client->id }}" name="id">
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
