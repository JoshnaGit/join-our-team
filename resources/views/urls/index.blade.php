<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<form id="url-shortener-form">
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
    </div>
    <br>
    <div>
        <label for="url">URL:</label>
        <input type="text" name="url" id="url">
    </div>
    <br>
    <button type="submit" id="submitButton" name="submitButton">Shorten URL</button>
</form>

<div id="shortened-url"></div>

<script>
    $(document).ready(function() {
        $('#submitButton').click(function(event) {
            console.log('Inside function')
            event.preventDefault();

             var formData = $('#url-shortener-form').serialize();
             console.log(formData);
             $.ajax({
                 url: '{{ url('/shorten-url') }}',
                 type: 'GET',
                 data: formData,
                 dataType: 'json',
                 success: function(response) {
                     $('#shortened-url').text(response.shortened_url);
                 }
             });
        });
    });
</script>
    
</body>
</html>