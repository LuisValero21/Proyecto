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
                    <p class="text-xl" style="font-family: arial, sans-serif;">Registro de rol</p>
                    <input type="text" placeholder="Nombre" name="Nombre" class="p-2 bg-gray-100" />
                    <input type="text" placeholder="Descripcion" name="Descripcion" class="p-2 bg-gray-100" />
                    <div class="display-flex">
                        <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px"><a href="">Cambiar nombre de rol</a></button>
                        <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left:420px"><a href="modificarpermisos.php">Modificar permisos</a></button> 
                    </div>  
            </div>
        </div>
    </section>
</body>

</html>
