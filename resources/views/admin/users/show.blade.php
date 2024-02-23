<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir Tailwind CSS vía CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white flex flex-col items-center min-h-screen p-4">
    <h1 class="text-3xl font-bold mt-12 mb-8">Post de Usuario</h1>
    <div class="w-full max-w-4xl bg-gray-700 rounded-lg p-6 mb-8">
        <div class="border-b border-gray-600 pb-4">
            <p><span class="font-bold">Nombre:</span> {{ $user->name }}</p>
            <p><span class="font-bold">Correo:</span> {{ $user->email }}</p>
        </div>
        @if ($user->posts->isNotEmpty())
        <div class="overflow-x-auto w-full mt-6">
            <table class="min-w-full text-sm text-left">
                <tbody>
                    @foreach($user->posts as $post)
                    <tr class="bg-gray-800 border-b border-gray-600">
                        <td class="px-6 py-3">
                            <span class="font-bold">Id:</span> {{$post->id}}
                        </td>
                        <td class="px-6 py-3">
                            <span class="font-bold">Título:</span> {{$post->titulo}}
                        </td>
                    </tr>
                    <tr class="bg-gray-600 border-b border-gray-500">
                        <td colspan="2" class="px-6 py-3">
                            <span class="font-bold">Post:</span>
                            <p class="pl-8">{{$post->texto}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>El usuario no tiene posts</p>
        @endif
    </div>
</body>
</html>
