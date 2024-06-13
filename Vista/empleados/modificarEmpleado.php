<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <?php include "../../componentes/Includes/imports.php"?>
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
        <?php include "../../componentes/Includes/nav.php"?>
    </header>

    <section>
        <!--Registro de usuario-->
        <div class="flex justify-center items-center" style="margin-bottom: 50px; margin-top:50px;">
            <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                <form class="p-3 flex flex-col space-y-5" method="post" enctype="multipart/form-data">
                    <p class="text-xl" style="font-family: arial, sans-serif;">Registro</p>
                    <input type="text" placeholder="Primer nombre" class="p-2 w-3/4bg-gray-100" />
                    <input type="text" placeholder="Segundo nombre" class="p-2 w-3/4bg-gray-100" />
                    <input type="text" placeholder="Primer apellido" class="p-2 w-3/4bg-gray-100" />
                    <input type="text" placeholder="Segundo apellido" class="p-2 w-3/4bg-gray-100" />
                    <input type="text" placeholder="Numero de telefono" class="p-2 w-3/4bg-gray-100" />
                    <input type="email" placeholder="Correo electronico" class="p-2 bg-gray-100" />
                    <input type="password" placeholder="Contraseña" class="p-2 bg-gray-100" />
                    <div class="w-full flex justify-center items-center p-7">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="turno" name="turno" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px">

                                <option value="Selecciona">Estado</option>

                                <option value="AM 8:30">AM 8:30</option>

                                <option value="AM 9:45">AM 9:45</option>

                                <option value="AM 10:30">AM 10:30</option>

                                <option value="AM 11:15">AM 11:15</option>

                                <option value="PM 12:00">PM 12:00</option>

                                <option value="PM 12:45">PM 12:45</option>

                                <option value="PM 1:30">PM 1:30</option>

                                <option value="PM 2:15">PM 2:15</option>

                                <option value="PM 3:00">PM 3:00</option>

                                <option value="PM 3:45">PM 3:45</option>

                                <option value="PM 4:30">PM 4:30</option>

                                <option value="PM 5:15">PM 5:15</option>

                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="turno" name="turno" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px; margin-left:70px">

                                <option value="Selecciona">Municipio</option>

                                <option value="AM 8:30">AM 8:30</option>

                                <option value="AM 9:45">AM 9:45</option>

                                <option value="AM 10:30">AM 10:30</option>

                                <option value="AM 11:15">AM 11:15</option>

                                <option value="PM 12:00">PM 12:00</option>

                                <option value="PM 12:45">PM 12:45</option>

                                <option value="PM 1:30">PM 1:30</option>

                                <option value="PM 2:15">PM 2:15</option>

                                <option value="PM 3:00">PM 3:00</option>

                                <option value="PM 3:45">PM 3:45</option>

                                <option value="PM 4:30">PM 4:30</option>

                                <option value="PM 5:15">PM 5:15</option>

                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="turno" name="turno" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px; margin-left:70px">

                                <option value="Selecciona">Parroquia</option>

                                <option value="AM 8:30">AM 8:30</option>

                                <option value="AM 9:45">AM 9:45</option>

                                <option value="AM 10:30">AM 10:30</option>

                                <option value="AM 11:15">AM 11:15</option>

                                <option value="PM 12:00">PM 12:00</option>

                                <option value="PM 12:45">PM 12:45</option>

                                <option value="PM 1:30">PM 1:30</option>

                                <option value="PM 2:15">PM 2:15</option>

                                <option value="PM 3:00">PM 3:00</option>

                                <option value="PM 3:45">PM 3:45</option>

                                <option value="PM 4:30">PM 4:30</option>

                                <option value="PM 5:15">PM 5:15</option>

                            </select>
                        </div>
                    </div> 
                    <input type="text" placeholder="Direccion de habitacion" class="p-2 w-3/4bg-gray-100" />
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 630px; margin-top: 30px;"><a href="menuPrinciplaEmpleados">Modificar</a></button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>