<!DOCTYPE html>
<html lang="en">


<?php
include('../../Modelo/bd.php');
?>
<?php
    require_once '../../Controlador/Control.php';
    require_once '../../Modelo/ModeloFormulario.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinerUcab</title>
</head>

<style>
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    
    <section>
        <!--Registro de usuario-->
        <div class="flex justify-center items-center" style="margin-bottom: 50px; margin-top:50px;">
            <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                <form class="p-3 flex flex-col space-y-5" method="post" enctype="multipart/form-data">
                    <p class="text-xl" style="font-family: arial, sans-serif;">Registro</p>
                    <input type="text" placeholder="Primer_nombre" name="Primer_nombre" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Primer_nombre'])) echo $_POST['Primer_nombre']  ?>" required />
                    <input type="text" placeholder="Segundo_nombre" name="Segundo_nombre" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Segundo_nombre'])) echo $_POST['Segundo_nombre']  ?>" required />
                    <input type="text" placeholder="Primer_apellido" name="Primer_apellido" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Primer_apellido'])) echo $_POST['Primer_apellido']  ?>" required />
                    <input type="text" placeholder="Segundo_apellido" name="Segundo_apellido" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Segundo_apellido'])) echo $_POST['Segundo_apellido']  ?>" required />
                    <input type="text" placeholder="Fecha_nacimiento" name="Fecha_nacimiento" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Fecha_nacimiento'])) echo $_POST['Fecha_nacimiento']  ?>" required />
                    <input type="text" placeholder="Cedula" name="Cedula" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Cedula'])) echo $_POST['Cedula']  ?>" required />
                    <input type="text" placeholder="Numero_de_telefono" name="Numero_de_telefono" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Numero_de_telefono'])) echo $_POST['Numero_de_telefono']  ?>" required />
                    <input type="email" placeholder="Correo_electronico" name="Correo_electronico" class="p-2 bg-gray-100" value="<?php if (isset($_POST['Correo_electronico'])) echo $_POST['Correo_electronico']  ?>" required />
                    <input type="password" placeholder="Contraseña" name="Contraseña" class="p-2 bg-gray-100" value="<?php if (isset($_POST['Contraseña'])) echo $_POST['Contraseña']  ?>" required />
                    <div class="w-full flex justify-center items-center p-7">
                            <div class="w-full flex justify-center items-center p-7">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="Estado" name="Estado" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px">
                                <option value="">Estado</option>
                                <?php
                                $tabla = 'lugar';
                                $consulta = Control::ctrRetornarLugar($tabla,'Lugar_Tipo', 'Estado');
                                var_dump($consulta);
                                if (!empty($consulta)) :
                                    foreach ($consulta as $value) :
                                ?>
                                        <option value="<?php echo $value['Lugar_ID'] ?>"><?php echo $value['Lugar_Nombre'] ?></option>

                                <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="Municipio" name="Municipio" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px; margin-left:70px">
                            <option value="">Municipio</option>
                                <?php
                                $tabla = 'lugar';
                                $consulta = Control::ctrRetornarLugar($tabla,'Lugar_Tipo', 'Municipio');
                                var_dump($consulta);
                                if (!empty($consulta)) :
                                    foreach ($consulta as $value) :
                                ?>
                                        <option value="<?php echo $value['Lugar_ID'] ?>"><?php echo $value['Lugar_Nombre'] ?></option>

                                <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <select id="Parroquia" name="Parroquia" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="width: 200px; height: 50px; margin-left:70px">
                            <option value="">Parroquia</option>
                                <?php
                                $tabla = 'lugar';
                                $consulta = Control::ctrRetornarLugar($tabla,'Lugar_Tipo', 'Parroquia');
                                var_dump($consulta);
                                if (!empty($consulta)) :
                                    foreach ($consulta as $value) :
                                ?>
                                        <option value="<?php echo $value['Lugar_ID'] ?>"><?php echo $value['Lugar_Nombre'] ?></option>

                                <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                    </div>
                    <input type="text" placeholder="Direccion de habitacion" name="Direccion_Habitacion" class="p-2 w-3/4bg-gray-100" />
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 630px; margin-top: 30px;"><a href="registroRoles.php">Asignar rol</a></button>
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 630px; margin-top: 30px;"><a href="#">Registrar Empleado</a></button>            
                </form>
            </div>
        </div>
    </section>

</body>

</html>