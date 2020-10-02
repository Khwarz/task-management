<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased min-h-screen flex items-center justify-center
		bg-gray-100">
		<form action="{{ route('taches.store') }}" method="POST" class="flex items-center justify-center flex-col">
			@csrf
			<div class="flex flex-col">
				<label for="name" class="text-sm">Nom</label>
				<input type="text" name="name" id="name"  class="appearance-none
					border border-gray-500 px-3 py-1 rounded-md
					focus:border-blue-400 focus:outline-none focus:shadow-outline shadow-sm
					bg-white transition-all duration-300 ease-in-out" value="{{ old("name") }}" required
					autofocus/>
			</div>
			@error("name")
			<div class="text-left">
				<span class="text-red-600 text-xs">{{ $message }}</span>
			</div>
			@enderror
			<button type="submit" class="px-3 py-2 text-sm uppercase
				tracking-wide bg-gray-900 text-white my-3 w-full rounded-md
				hover:bg-gray-800 transition-all duration-300 ease-in-out">Ajouter</button>
		</form>
    </body>
</html>
