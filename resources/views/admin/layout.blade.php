<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Main Content Container -->
    <div class="flex h-screen">
        @include('admin.layout.asside')
        <!-- Main Body Content -->
        <div class="flex-1 bg-gray-100 p-6 space-y-6">

        @yield('admincontent')

        </div>
    </div>

</body>
</html>
