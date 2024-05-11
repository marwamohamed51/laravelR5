<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- navbar start -->
    @include('includes.navStudent')
    <!-- navbar end -->

    <div class="container">
        <h2>Student data</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Age</th>
                    <!-- <th>created At</th> -->
                </tr>
            </thead>
            <tbody>

                @foreach ($studentList as $student)
                    <tr>
                        <td>{{ $student->studentName }}</td>
                        <td>{{ $student->age }}</td>
                        <!-- <td>{{ $student->created_at }}</td> -->
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
