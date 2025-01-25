<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
<!-- git config --global alias.acp '!git add . && git commit -m "$1" && git push' -->
<!-- coba nambahin komentar buat nyoba git-->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Proyek</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color:white;
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="h-full">
<div class="min-h-full">
    <x-navbar></x-navbar>

    <x-header>{{$title}}</x-header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{$slot}}
        </div>
    </main>
</div>

</body>
</html> 