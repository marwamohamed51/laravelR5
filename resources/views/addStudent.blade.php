<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
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

    <div class="container" style="margin-left: 10px;">
        <h2>Add Student</h2><br>

        <form action="{{route('studentResult')}}" method="post">
            @csrf
            <label for="studentName">Student name</label><br>
            <input type="text" id="studentName" required name="studentName" class="form-control" value=""><br>
            <label for="age">Age</label><br>
            <input type="text" id="age" name="age" required class="form-control" value=""><br><br>
            <input type="submit" value="Submit"  class="btn btn-primary btn-block">
        </form>
    </div>

</body>

</html>