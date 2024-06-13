<?php 

    class Control{
        static public function ctrRetornarLugar($tabla, $atributo, $valor){
            $respuesta = ModeloFormulario::mdlRetornarLugar($tabla, $atributo, $valor);
            return $respuesta;
        }
      

static public function ctrRegistroClienteN(){
if (isset($_POST['Primer_nombre'])) {
    $tabla = 'clientenatural';

    $datos = array ('Primer_nombre' => $_POST['Primer_nombre'], 'Segundo_nombre' => $_POST['Segundo_nombre'],'Primer_apellido' => $_POST['Primer_apellido'], 'Segundo_apellido' => $_POST['Segundo_apellido'],'Fecha_nacimiento' => $_POST['Fecha_nacimiento'],'Cedula' => $_POST['Cedula'],'Numero_de_telefono' => $_POST['Numero_de_telefono'],'Correo_electronico' => $_POST['Correo_electronico'],'Contraseña' => $_POST['Contraseña'], 'Direccion' => $_POST['Direccion'], 'FK_Lugar' => $_POST['Parroquia']);

    $respuesta = ModeloFormulario::mdlRegistroClienteN($tabla, $datos);

    echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        </script>';

    return $respuesta;
}

else if (isset($_POST['Numero_RIF'])){
    $tabla = 'clientejuridico';


    $datos = array ('Denominacion_Social' => $_POST['Denominacion_Social'], 'Razon_Social' => $_POST['Razon_Social'],'Numero_Rif' => $_POST['Numero_Rif'], 'Correo electronico' => $_POST['Correo electronico'],'Pagina_Web' => $_POST['Pagina web'],'FK_DireccionFisica' => $_POST['Parroquia'],'Direccion_Fisica' => $_POST['Direccion_Fisica'], 'FK_DireccionFiscal' => $_POST['Parroquia'], 'Direccion_Fiscal' => $_POST['Direccion_Fiscal']);

    $respuesta = ModeloFormulario::mdlRegistroClienteJ($tabla, $datos);

    echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        </script>';

    return $respuesta;

}
}

}