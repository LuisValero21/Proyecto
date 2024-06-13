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
        <!--Registro de usuario-->
        <div class="display-flex">
            <div class="flex justify-center items-center" style="margin-bottom: 50px; margin-top:50px;">
                <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                    <form class="p-3 flex flex-col space-y-5" method="post" enctype="multipart/form-data">
                        <p class="text-xl" style="font-family: arial, sans-serif;">Registro</p>
                        <input type="text" placeholder="Nombre" class="p-2 w-3/4bg-gray-100" />
                        <input type="text" placeholder="Numero de RIF" class="p-2 w-3/4bg-gray-100" />
                        <input type="text" placeholder="Razon social" class="p-2 w-3/4bg-gray-100" />
                        <input type="email" placeholder="Correo electronico" class="p-2 bg-gray-100" />
                        <input type="text" placeholder="Pagina web" class="p-2 w-3/4bg-gray-100" />
                        <div class="w-full flex justify-center items-center p-7">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <select id="ESTADO" name="ESTADO" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px">

                                    <option value="Selecciona">ESTADO</option>
                                    <option value="AMAZONAS">AMAZONAS</option>
                            

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
                        <input type="text" placeholder="Direccion de fisica" class="p-2 w-3/4bg-gray-100" />
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
                        <input type="text" placeholder="Direccion de fiscal" class="p-2 w-3/4bg-gray-100" />
                    </form>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                    <form class="p-3 flex flex-col space-y-5" method="post" enctype="multipart/form-data">
                        <p class="text-xl" style="font-family: arial, sans-serif;">Personal de contacto</p>
                        <!-- component -->
                        <div class='max-w-md mx-auto'>
                            <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                                <div class="grid place-items-center h-full w-12 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search" placeholder="Search something.." />
                            </div>
                        </div>
                        <input type="text" placeholder="Nombre" class="p-2 w-3/4bg-gray-100" />
                        <input type="text" placeholder="Numero de telefono" class="p-2 w-3/4bg-gray-100" />
                        <div class="display-flex">
                            <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px;"><a href="">Registrar</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex justify-center items-center" style="margin-bottom: 50px; margin-top:50px;">
                <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left:320px"><a href="../generales/landingpage.php">Registrar</a></button>
                </div>
            </div>
        </div>
    </section>

</body>

</html>