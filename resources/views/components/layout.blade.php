<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viaggi veri</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-image">

<x-navbar />
    

{{$slot}}


<x-footer />

</body>
</html>