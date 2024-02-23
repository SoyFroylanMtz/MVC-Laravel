<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 p-8 text-gray-200">
    <h1 class=" text-center text-3xl font-bold mb-4">Lista de Usuarios</h1>
    <div class="mx-24 mt-5 overflow-x-auto">
        <table class="min-w-full bg-gray-700 rounded-lg overflow-hidden">
            <thead class="bg-gray-600 text-xs font-semibold uppercase text-gray-200">
                <tr>
                    <th class="px-6 py-3 rounded-tl-lg">id</th>
                    <th class="px-6 py-3">Nombre</th>
                    <th class="px-6 py-3">Correo</th>
                    <th class="px-6 py-3 rounded-tr-lg">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-600">
                <!-- Suponiendo que tienes una variable $users que es una colección de usuarios -->
                @foreach($users as $user)
                <tr>
                    <td class="px-6 py-4">{{ $user->id }}</td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.users.edit', $user)}}" class="text-blue-400 hover:text-blue-500">Editar</a>
                        <a href="{{ route('admin.users.show', $user)}}" class="text-blue-400 hover:text-blue-500 ml-4">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
