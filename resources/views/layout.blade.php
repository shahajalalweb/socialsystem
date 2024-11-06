<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Demo</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-full bg-gray-100">
    @include('layout.header')

    <!-- Middle Content Section -->
    <main class="mt-[120px] h-full w-full bg-gray-50"> <!-- Add padding top for the navbar and bottom for the footer -->
        @yield('content')
    </main>

    @include('layout.footer')

</body>


</html>