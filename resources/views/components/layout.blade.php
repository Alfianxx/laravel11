<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman home</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</head>
<body class="h-full">

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<div class="min-h-full">

    <x-navbar> </x-navbar>

    <x-header> {{ $title }} </x-header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      {{ $slot }}
    </div>
  </main>
</div>



</body>
</html>