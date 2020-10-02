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
    <body class="antialiased">
        <div class="flex justify-center items-center min-h-screen bg-gray-100">
            <div class="max-w-6xl mx-auto w-full sm:px-4">
                <a href="{{ route('taches.create') }}" 
					class="inline-block bg-gray-900 my-3 text-white focus:shadow-outline px-3 py-2 rounded-md hover:bg-gray-800 uppercase text-sm">
					Ajouter une tache
				</a>
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
									@foreach($tasks as $task)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="text-sm leading-5
														text-gray-900">{{ $task->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap
											text-right text-sm leading-5
											font-medium space-x-4">
                                            <a href="{{ route('taches.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
											<form action="{{ route('taches.destroy', $task->id) }}" method="post" class="inline-block">
												@csrf
												@method("DELETE")
												<button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
											</form>
                                        </td>
                                    </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
						<div class="my-4">
							{{ $tasks->links() }}
						</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
