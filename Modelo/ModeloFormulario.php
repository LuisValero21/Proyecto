<?php   

    require_once 'Conexion.php';

    class ModeloFormulario{
        static public function mdlRetornarLugar($tabla,$atributo,$valor){
            if ($atributo == null && $valor == null) {

                $sql = "SELECT * FROM $tabla";
                $conex = new Conexion();
                $status = $conex->consultar($sql);
                return $status;
            }else{
                $sql = "SELECT * FROM $tabla WHERE $atributo = '$valor';";
                $conex = new Conexion();
                $status = $conex->consultar($sql);
                return $status;
            }
        }

        static public function mdlRetornarPersonaContacto($tabla,$atributo,$valor){
            if ($atributo == null && $valor == null) {

                $sql = "SELECT * FROM $tabla";
                $conex = new Conexion();
                $status = $conex->consultar($sql);
                return $status;
            }else{
                $sql = "SELECT * FROM $tabla WHERE $atributo = '$valor';";
                $conex = new Conexion();
                $status = $conex->consultar($sql);
                return $status;
            }
        }

        static public function mdlRegistroClienteN($tabla,$datos)
        {
            $con = new Conexion();


                $sql = "INSERT INTO $tabla (ClienteN_primer_nombre, ClienteN_segundo_nombre,ClienteN_primer_apellido, ClienteN_segundo_apellido,ClienteN_fecha_nac,ClienteN_Cedula,ClienteN_num_telefono,ClienteN_email,ClienteN_contraseña, ClienteN_direccion,FK_lugar) VALUES ('$datos[Primer_nombre]','$datos[Segundo_nombre]','$datos[Primer_apellido]','$datos[Segundo_apellido]','$datos[Fecha_nacimiento]','$datos[Cedula]',$datos[Numero_de_telefono],'$datos[Correo_electronico]',' $datos[Contraseña]',' $datos[Direccion]', $datos[FK_Lugar]);";
              
                $status = $con->ejecutar($sql);
                echo $status;
                if ($status) {
                    return 'ok';
                } else if ($status === false) {
                    return $status;
                }
            }

            static public function mdlRegistroClienteJ($tabla,$datos)
            {
                $con = new Conexion();
    
    
                    $sql = "INSERT INTO $tabla (ClienteJ_Denominacion_C, ClienteJ_Razon_S, ClienteJ_RIF, ClienteJ_num_telefono, ClienteJ_pag_Web, ClienteJ_email, ClienteJ_contraseña, FK_Direccionfisica,ClienteJ_direccionfisica, FK_Direccionfiscal, ClienteJ_direccionfiscal) VALUES ('$datos[Denominacion_Social]','$datos[Razon_Social]','$datos[Numero_Rif]','$datos[Correo_Electronico]',$datos[FK_DireccionFisica],'$datos[Direccion_Fisica]',$datos[FK_DireccionFiscal],'$datos[Direccion_fiscal];";
                  
                    $status = $con->ejecutar($sql);
                    echo $status;
                    if ($status) {
                        return 'ok';
                    } else if ($status === false) {
                        return $status;
                    }
                }
        }


