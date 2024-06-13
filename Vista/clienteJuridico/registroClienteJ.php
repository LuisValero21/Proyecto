<?php
include('../../Modelo/ModeloFormulario.php');

if (isset($_POST['submit1'])) {
    $query = "select * from usuario where Usuario_Email=?";
    $stmt = $sql->prepare($query);
    $stmt->bindParam(1, $_POST['Correo_electronico'], PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetchAll();
    $total = $stmt->rowCount();

    if ($total == 0) {
        if ((strlen($_POST['Denominacion_Social']) >= 1) and (strlen($_POST['Denominacion_Social']) <= 40)) {
            if ((strlen($_POST['Razon_Social']) >= 1) and (strlen($_POST['Razon_Social']) <= 40)) {
                if ((strlen($_POST['Numero_Rif']) >= 1) and (strlen($_POST['Numero_Rif']) <= 15)) {
                    if ((strlen($_POST['Correo_Electronico']) >= 1) and (strlen($_POST['Correo_Electronico']) <= 200)) {
                        if ((strlen($_POST['Pagina_Web']) >= 1) and (strlen($_POST['Pagina_Web']) <= 40)) {
                            if ((strlen($_POST['Contraseña']) >= 4) and (strlen($_POST['Contraseña']) <= 300)) {



                                $query = "INSERT INTO `usuario` (`Usuario_ID`, `Usuario_Email`, `Usuario_Contrasena`) VALUES (NULL, ?, ?) ";
                                $stmt = $sql->prepare($query);
                                $stmt->bindParam(1, $_POST['Correo_Electronico'], PDO::PARAM_STR);
                                $stmt->bindParam(2, $_POST['Contraseña'], PDO::PARAM_STR);
                                $stmt->execute();

                                $query = "select * from usuario where Usuario_Email=?";
                                $stmt = $sql->prepare($query);
                                $stmt->bindParam(1, $_POST['Correo_electronico'], PDO::PARAM_STR);
                                $stmt->execute();
                                $usuario = $stmt->fetch();

                                $query = "INSERT INTO `clientejuridico`(`ClienteJ_ID`, `ClienteJ_Denominacion_C`, `ClienteJ_Razon_S`, `ClienteJ_RIF`, `ClienteJ_pag_Web`, `ClienteJ_direccion`, `fk_Lugar`, `fk_Usuario`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
                                $stmt = $sql->prepare($query);
                                $stmt->bindParam(1, $_POST['Denominacion_Social'], PDO::PARAM_STR);
                                $stmt->bindParam(2, $_POST['Razon_Social'], PDO::PARAM_STR);
                                $stmt->bindParam(3, $_POST['Numero_Rif'], PDO::PARAM_STR);
                                $stmt->bindParam(4, $_POST['Pagina_Web'], PDO::PARAM_STR);
                                $stmt->bindParam(5, $_POST['Direccion_Fisica'], PDO::PARAM_STR);
                                $stmt->bindParam(6, $_POST['Parroquia1'], PDO::PARAM_STR);
                                //$stmt->bindParam(7, $_POST['Direccion_Fiscal'], PDO::PARAM_STR);
                                //$stmt->bindParam(8, $_POST['Parroquia2'], PDO::PARAM_STR);
                                $stmt->bindParam(7, $usuario['Usuario_ID'], PDO::PARAM_STR);
                                $stmt->execute();

                                $query = "select * from clientejuridico order by ClienteJ_ID DESC";
                                $stmt = $sql->prepare($query);
                                $stmt->execute();
                                $cliente = $stmt->fetch();

                                echo ('<script> window.location.href = "2pasoRegClienteJ.php?id=' . $cliente['ClienteJ_ID'] . '";</script>');
                            } elseif (strlen($_POST['Contraseña']) == 0) {
                                $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
                            } else {
                                $error = "<div class='alert alert-danger'>Contraseña invalida</div>";
                            }
                        } elseif (strlen($_POST['Pagina_Web']) == 0) {
                            $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
                        } else {
                            $error = "<div class='alert alert-danger'>Pagina web invalida</div>";
                        }
                    } elseif (strlen($_POST['Correo_Electronico']) == 0) {
                        $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
                    } else {
                        $error = "<div class='alert alert-danger'>Correo Electronico invalido</div>";
                    }
                } elseif (strlen($_POST['Numero_Rif']) == 0) {
                    $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
                } else {
                    $error = "<div class='alert alert-danger'>Numero de RIF Invalido</div>";
                }
            } elseif (strlen($_POST['Razon_Social']) == 0) {
                $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
            } else {
                $error = "<div class='alert alert-danger'>Razon Social invalida</div>";
            }
        } elseif (strlen($_POST['Denominacion_Social']) == 0) {
            $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
        } else {
            $error = "<div class='alert alert-danger'>Denominacion Social invalida</div>";
        }
    } else {
        $error = "<div class='alert alert-danger'>Correo ya existe</div>";
    }



    $query = "";
    $stmt = $sql->prepare($query);
    $stmt->bindParam(1, $_POST['Marca'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['Descripcion'], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST['Costo'], PDO::PARAM_STR);
    $stmt->execute();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <?php
    require_once '../../Controlador/Control.php';
    require_once '../../Modelo/ModeloFormulario.php';
    ?>
   
    
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
                    <<p class="text-xl" style="font-family: arial, sans-serif;">Registro Cliente Juridico</p>

                        <input type="text" placeholder="Denominacion_Social" name="Denominacion_Social" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Denominacion_Social'])) echo $_POST['Denominacion_Social']  ?>" required />
                        <input type="text" placeholder="Razon social" name="Razon_Social" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Razon_Social'])) echo $_POST['Razon_Social']  ?>" required />
                        <input type="text" placeholder="Numero de RIF" name="Numero_Rif" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Numero_Rif'])) echo $_POST['Numero_Rif']  ?>" required />
                        <input type="email" placeholder="Correo electronico" name="Correo_Electronico" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Correo_Electronico'])) echo $_POST['Correo_Electronico']  ?>" required />
                        <input type="text" placeholder="Contraseña" name="Contraseña" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Contraseña'])) echo $_POST['Contraseña']  ?>" required />
                        <input type="text" placeholder="Pagina web" name="Pagina_Web" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Pagina_Web'])) echo $_POST['Pagina_Web']  ?>" required />
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
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 630px; margin-top: 30px;"><a href="#">Registrar Cliente</a></button>            
                </form>
            </div>
        </div>
    </section>

</body>

</html>