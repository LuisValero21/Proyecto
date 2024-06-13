<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>


    <?php include "../../componentes/Includes/imports.php" ?>

</head>

<style>
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <header>
        <!--Navbar-->
        <?php include "../../componentes/Includes/nav.php" ?>
    </header>

    <section>
        <!--Checkbox-->
        <div class="flex justify-center items-center" style="margin-top: 50px; margin-bottom: 50px">
            <div class="p-5 bg-gray-400 w-1/2 rounded-lg">
                <!--CLIENTES-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Registar clientes</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Consultar tabla de clientes</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Modificar informacion de clientes</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Eliminar clientes</label>
                    </div>
                </div>

                <!--EMPLEADOS-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Registar Empleados</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Consultar tabla de empleados</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Modificar informacion de empleados</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Eliminar empleados</label>
                    </div>
                </div>
                <!--PROVEEDORES-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Registar proveedores</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Consultar tabla de proveedores</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Modificar informacion de proveedores</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Eliminar proveedores</label>
                    </div>
                </div>

                <!--PRODUCTOS-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Registar productos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Consultar tabla de productos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Modificar informacion de productos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Eliminar productos</label>
                    </div>
                </div>
                <!--EVENTOS-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Registar eventos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Consultar tabla de eventos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Modificar informacion de eventos</label>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Eliminar eventos</label>
                    </div>
                </div>

                <!--VENTA TIENDA FISICA-->
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" required="">
                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900">Venta en tienda fisica</label>
                    </div>
                </div>
                <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 310px; margin-top: 30px;"><a href="">Registrar</a></button>
            </div>
        </div>

    </section>

</body>

</html>