<?php
include '../../../Modelo/bd.php';
if (isset($_POST['submit'])) {
    if((strlen($_POST['Nombre'])>=1) and (strlen($_POST['Nombre'])<=100)){
        if((strlen($_POST['Descripcion'])>=1) and (strlen($_POST['Descripcion']))<=200){
            $query = "INSERT INTO `rol` (`Rol_ID`, `Rol_Nombre`, `Rol_Descripcion`) VALUES (NULL, ?, ?) ";
            $stmt = $sql->prepare($query);
            $stmt->bindParam(1, $_POST['Nombre'], PDO::PARAM_STR);
            $stmt->bindParam(2, $_POST['Descripcion'], PDO::PARAM_STR);
            $stmt->execute();
            echo ('<script> window.location.href = "../generales/landingpage.php";  </script>');
        }elseif (strlen($_POST['Descripcion']) == 0) {
            $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
        } else {
            $error = "<div class='alert alert-danger'>xd1</div>";
        }
    }elseif (strlen($_POST['Nombre']) == 0) {
        $error = "<div class='alert alert-danger'>Debe rellenar el campo</div>";
    } else {
        $error = "<div class='alert alert-danger'>xd</div>";
    }
}
?>
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
        <!--Regiatro de roles-->
        <div class="h-screen flex justify-center items-center">
            <div class="p-5 bg-gray-400 w-1/2 rounded-lg">
                <form class="p-3 flex flex-col space-y-10" method="post" enctype="multipart/form-data">
                <?php if (isset($error)) {
                        echo $error;
                    } ?>
                    <p class="text-xl" style="font-family: arial, sans-serif;">Registro de rol</p>
                    <input type="text" placeholder="Nombre" name="Nombre" class="p-2 bg-gray-100" />
                    <input type="text" placeholder="Descripcion" name="Descripcion" class="p-2 bg-gray-100" />
                    <button type="submit" name="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 310px; margin-top: 30px;">Registrar</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
