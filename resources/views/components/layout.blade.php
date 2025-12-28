<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Halaman Home</title>
</head>
<body class="font-sans h-full">

 <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> 
  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

<div class="min-h-full">
  <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     {{$slot}}
    </div>
  </main>
</div>

</body>
</html>-