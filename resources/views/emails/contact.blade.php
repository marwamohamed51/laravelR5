{{-- <!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html> --}}
<x-mail::message>
<div >
   Hello!
<br><br>
</div>
 
<div >
    {{ $details['message'] }}
</div>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>