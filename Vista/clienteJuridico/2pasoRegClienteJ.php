<?php
include('../../../Modelo/bd.php');

$idCliente = $_GET['id'];
$query = "select * from usuario where Usuario_Email=?";
$stmt = $sql->prepare($query);
$stmt->bindParam(1, $idCLiente, PDO::PARAM_STR);
$stmt->execute();
$usuario = $stmt->fetch();

if (isset($_POST['submitPersona'])) {
    if ((strlen($_POST['Nombre_Contacto']) >= 1) and (strlen($_POST['Nombre_Contacto']) <= 100)) {
        if ((strlen($_POST['Apellido_Contacto']) >= 1) and (strlen($_POST['Apellido_Contacto']) <= 100)) {
            if ((strlen($_POST['codigo_tel']) >= 1) and (strlen($_POST['codigo_tel']) <= 4)) {
                if ((strlen($_POST['numero_tel']) >= 1) and (strlen($_POST['numero_tel']) <= 11)) {
                    $query = "INSERT INTO `personacontacto`(`Persona_Contacto_ID`, `Persona_Contacto_Nombre`, `Persona_Contacto_Apellido`) VALUES (NULL, ?, ?)";
                    $stmt = $sql->prepare($query);
                    $stmt->bindParam(1, $_POST['Nombre_Contacto'], PDO::PARAM_STR);
                    $stmt->bindParam(2, $_POST['Apellido_Contacto'], PDO::PARAM_STR);
                    $stmt->execute();

                    $query = "select * from personacontacto order by Persona_Contacto_ID DESC";
                    $stmt = $sql->prepare($query);
                    $stmt->execute();
                    $persona = $stmt->fetch();

                    $query = "INSERT INTO `telefono`(`Telefono_ID`, `Telefono_numero`, `Telefono_Codigo_Area`, `fk_PersonaContacto`) VALUES (NULL, ?, ?, ?)";
                    $stmt = $sql->prepare($query);
                    $stmt->bindParam(1, $_POST['numero_tel'], PDO::PARAM_STR);
                    $stmt->bindParam(2, $_POST['codigo_tel'], PDO::PARAM_STR);
                    $stmt->bindParam(3, $persona['Persona_Contacto_ID'], PDO::PARAM_STR);
                    $stmt->execute();
                } elseif (strlen($_POST['numero_tel']) == 0) {
                    $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
                } else {
                    $errorPersona = "<div class='alert alert-danger'>Numero de telefono invalido</div>";
                }
            } elseif (strlen($_POST['codigo_tel']) == 0) {
                $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
            } else {
                $errorPersona = "<div class='alert alert-danger'>Codigo de telefono invalido</div>";
            }
        } elseif (strlen($_POST['Apellido_Contacto']) == 0) {
            $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
        } else {
            $errorPersona = "<div class='alert alert-danger'>Apellido de contacto invalido</div>";
        }
    } elseif (strlen($_POST['Nombre_Contacto']) == 0) {
        $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
    } else {
        $errorPersona = "<div class='alert alert-danger'>Nombre de contacto invalido</div>";
    }
}

if (isset($_POST['submitTelefono'])) {
    if ((strlen($_POST['codigo_tel']) >= 1) and (strlen($_POST['codigo_tel']) <= 4)) {
        if ((strlen($_POST['numero_tel']) >= 1) and (strlen($_POST['numero_tel']) <= 11)) {
            $query = "INSERT INTO `telefono`(`Telefono_ID`, `Telefono_numero`, `Telefono_Codigo_Area`) VALUES (NULL, ?, ?)";
            $stmt = $sql->prepare($query);
            $stmt->bindParam(1, $_POST['numero_tel'], PDO::PARAM_STR);
            $stmt->bindParam(2, $_POST['codigo_tel'], PDO::PARAM_STR);
            $stmt->execute();
        } elseif (strlen($_POST['numero_tel']) == 0) {
            $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
        } else {
            $errorPersona = "<div class='alert alert-danger'>Numero de telefono invalido</div>";
        }
    } elseif (strlen($_POST['codigo_tel']) == 0) {
        $errorPersona = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
    } else {
        $errorPersona = "<div class='alert alert-danger'>Codigo de telefono invalido</div>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <?php
    require_once '../../../Controlador/Control.php';
    require_once '../../../Modelo/ModeloFormulario.php';
    ?>
    <script language="javascript" src="../../../jquery-3.7.1.min.js"></script>
    <?php include "../../componentes/Includes/imports.php" ?>
</head>

<body>
    <header>
        <!--Navbar-->
        <?php include "../../componentes/Includes/nav.php" ?>
    </header>
    <script src="../../../jquery-3.7.1.min.js"> </script>
    <section>

        <div class="display-flex">
            <div class="flex justify-center items-center flex space-x-8" style="margin-bottom: 50px; margin-top:50px;">
                <div class="ml-8 p-5 bg-gray-400 w-1/4 rounded-lg">
                    <form method="post" enctype="multipart/form-data">
                        <div class="p-3 flex flex-col space-y-5">
                            <p class="text-xl" style="font-family: arial, sans-serif;">Personal de contacto</p>
                            <!-- component -->
                            <?php if (isset($errorPersona)) {
                                echo $errorPersona;
                            } ?>
                            <input type="text" placeholder="Nombre" name="Nombre_Contacto" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Nombre_Contacto'])) echo $_POST['Nombre_Contacto']  ?>" />
                            <input type="text" placeholder="Apellido" name="Apellido_Contacto" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['Apellido_Contacto'])) echo $_POST['Apellido_Contacto']  ?>" />
                            <input type="text" placeholder="Codigo de Area de telefono" name="codigo_tel" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['codigo_tel'])) echo $_POST['codigo_tel']  ?>" />
                            <input type="text" placeholder="Numero de telefono" name="numero_tel" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['numero_tel'])) echo $_POST['numero_tel']  ?>" />
                            <div class="display-flex">
                                <button type="submit" name="submitPersona" class="p-2 bg-gray-100 rounded" style="width: 250px; height: 50px; margin-left:60px">Registrar Persona Contacto</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="ml-8 p-5 bg-gray-400 w-1/2 rounded-lg">
                    <div class="p-3 flex flex-col space-y-5">
                        <p class="text-xl" style="font-family: arial, sans-serif;">Personal de contacto</p>
                        <!-- component -->
                        <div class="table w-full p-2">
                            <table class="w-full border">
                                <thead>
                                    <tr class="bg-gray-50 border-b">
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                ID
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Nombre
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Apellido
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Cod de Area Telefono
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Num Telefono
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Acciones
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                        <?php
                                        $query = "select pc.*, t.* from personacontacto as pc, telefono as t where t.fk_PersonaContacto = pc.Persona_Contacto_ID";
                                        $stmt = $sql->prepare($query);
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll();
                                        foreach ($rows as $row) {
                                        ?>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Persona_Contacto_ID']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Persona_Contacto_Nombre']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Persona_Contacto_Apellido']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Telefono_Codigo_Area']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Telefono_numero']) ?>
                                        </td>
                                        <td>
                                            <form method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="Persona_Contacto_ID" value="<?php echo $row['Persona_Contacto_ID']; ?>">
                                                <a class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin" href="modificarClienteJ.php?id=<?php echo $row['Persona_Contacto_ID']; ?>">Edit</a>
                                                <button type="submit" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin" name="borrar">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-flex">
            <div class="flex justify-center items-center flex space-x-8" style="margin-bottom: 50px; margin-top:50px;">
                <div class="ml-8 p-5 bg-gray-400 w-1/4 rounded-lg">
                    <form method="post" enctype="multipart/form-data">
                        <div class="p-3 flex flex-col space-y-5">
                            <p class="text-xl" style="font-family: arial, sans-serif;">Telefono de Contacto</p>
                            <!-- component -->

                            <input type="text" placeholder="Codigo de Area" name="codigo_tel" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['codigo_tel'])) echo $_POST['codigo_tel']  ?>" />
                            <input type="text" placeholder="Numero de telefono" name="numero_tel" class="p-2 w-3/4bg-gray-100" value="<?php if (isset($_POST['numero_tel'])) echo $_POST['numero_tel']  ?>" />
                            <div class="display-flex">
                                <button type="submit" name="submitTelefono" class="p-2 bg-gray-100 rounded" style="width: 250px; height: 50px; margin-left:60px">Registrar Telefono</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="ml-8 p-5 bg-gray-400 w-1/2 rounded-lg">
                    <div class="p-3 flex flex-col space-y-5">
                        <p class="text-xl" style="font-family: arial, sans-serif;">Telefono de Contacto</p>
                        <!-- component -->
                        <div class="table w-full p-2">
                            <table class="w-full border">
                                <thead>
                                    <tr class="bg-gray-50 border-b">
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                ID
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Cod de Area
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Num Telefono
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                            <div class="flex items-center justify-center">
                                                Acciones
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                        <?php
                                        $query = "select * from telefono";
                                        $stmt = $sql->prepare($query);
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll();
                                        foreach ($rows as $row) {
                                        ?>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Telefono_ID']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Telefono_Codigo_Area']) ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?php echo ($row['Telefono_numero']) ?>
                                        </td>
                                        <td>
                                            <form method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="Telefono_ID" value="<?php echo $row['Telefono_ID']; ?>">
                                                <a class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin" href="modificarClienteJ.php?id=<?php echo $row['Telefono_ID']; ?>">Edit</a>
                                                <button type="submit" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin" name="borrar">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>