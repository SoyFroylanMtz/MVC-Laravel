<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir Tailwind CSS vía CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Incluir FontAwesome vía CDN para los iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 flex items-center justify-center h-screen">
    <div class="bg-gray-600 bg-opacity-80 p-10 rounded-lg shadow-lg max-w-2xl mx-auto">
        <form action="#" method="post" class="space-y-6">
            <div>
                <label for="name" class="block text-lg font-medium text-gray-200">Nombre</label>
                <div class="flex items-center bg-gray-700 rounded-lg">
                    <span class="pl-4 pr-2 text-gray-400">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" id="name" name="name" value="" class="bg-transparent text-white border-transparent focus:border-gray-500 focus:ring-0 block w-full p-4 text-lg" placeholder="Nombre">
                </div>
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-200">Correo</label>
                <div class="flex items-center bg-gray-700 rounded-lg">
                    <span class="pl-4 pr-2 text-gray-400">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email" value="" class="bg-transparent text-white border-transparent focus:border-gray-500 focus:ring-0 block w-full p-4 text-lg" placeholder="Correo">
                </div>
            </div>
            <div>
                <label for="password" class="block text-lg font-medium text-gray-200">Contraseña</label>
                <div class="flex items-center bg-gray-700 rounded-lg">
                    <span class="pl-4 pr-2 text-gray-400">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" class="bg-transparent text-white border-transparent focus:border-gray-500 focus:ring-0 block w-full p-4 text-lg" placeholder="Contraseña">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-6 py-3">
                    <i class="fas fa-sync-alt pr-2"></i>Actualizar
                </button>
            </div>
        </form>
    </div>
</body>
</html>
