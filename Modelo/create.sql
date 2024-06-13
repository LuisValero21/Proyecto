CREATE TABLE lugar(
	Lugar_ID int(15) AUTO_INCREMENT UNIQUE,
	Lugar_Nombre varchar(60) not null,
    Lugar_Tipo varchar(60) not null,
	fk_lugar int(15),
	constraint pk_Lugar PRIMARY KEY (Lugar_ID),
	constraint fk_Lugar_L foreign key(fk_lugar) references lugar(Lugar_ID),
	constraint check_Lugar_Tipo check (Lugar_tipo in('Parroquia','Municipio','Estado'))
);
create table correo(
    Correo_ID int(15) AUTO_INCREMENT UNIQUE,  
    Correo_Direccion varchar(100) not null,
    Correo_Tipo varchar (60) not null,
    constraint pk_Correo primary key(Correo_ID)
);
create table sabor(
    Sabor_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Sabor_Descripcion varchar (300) not null,
    constraint pk_Sabor primary key(Sabor_ID)
);
create table sabor_ron(
    fk_Sabor int(15),
    fk_Ron int(15),
    constraint pk_Sabor_Ron primary key (fk_Sabor,fk_Ron)
);
create table tipo_ron(
    Tipo_Ron_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Tipo_Ron_Nombre varchar (100) not null,
    constraint pk_Tipo_Ron primary key(Tipo_Ron_ID)
);
create table color(
    Color_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Color_Descripcion varchar (300) not null,
    constraint pk_Color primary key(Color_ID)
);
create table color_ron(
    fk_Color int(15),
    fk_Ron int(15),
    constraint pk_Color_Ron primary key (fk_Color,fk_Ron)
);
create table aroma(
    Aroma_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Aroma_Descripcion varchar (300) not null,
    constraint pk_Aroma primary key(Aroma_ID)
);
create table aroma_ron(
    fk_Aroma int(15),
    fk_Ron int(15),
    constraint pk_Aroma_Ron primary key (fk_Aroma,fk_Ron)
);
create table embotellado(
    Embotellado_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Embotellado_Descripcion varchar(300) not null,
    constraint pk_Embotellado primary key(Embotellado_ID)
);
create table embotellado_ron(
    fk_Embotellado int (15),
    fk_Ron int(15),
    constraint pk_Embotellado_Ron primary key (fk_Embotellado,fk_Ron)
);
create table categoria(
    Categoria_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Categoria_Nombre varchar (100) not null,
    Categoria_Descripcion varchar(300),
    fk_categoria int(15),
    constraint pk_Categoria primary key(Categoria_ID),
    constraint fk_Categoria_categoria foreign key(fk_categoria) references categoria(Categoria_ID)
);
create table mezclado(
    fk_Añejamiento int(15),
    fk_Ingrediente int (15),
    constraint pk_Mezclado primary key(fk_Añejamiento,fk_Ingrediente)
);
create table ingrediente(
    Ingrediente_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Ingrediente_Descripcion varchar(200),
    constraint pk_Ingrediente primary key(Ingrediente_ID)
);
create table barrica(
    Barrica_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Barrica_Nombre varchar (100) not null,
    Barrica_Descripcion varchar(200),
    constraint pk_Barrica primary key(Barrica_ID)   
);
create table añejamiento(
    Añejamiento_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Añejamiento_Fecha_Inicio date not null,
    Añejamiento_Fecha_Fin date not null,
    Añejamiento_Descripcion varchar(300), 
    fk_Barrica int (15),
    fk_Añejamiento int(15),
    constraint pk_Añejamiento primary key (Añejamiento_ID),
    constraint fk_Añejamiento_Añejamiento foreign key(fk_Añejamiento) references añejamiento(Añejamiento_ID),
    constraint fk_Barrica_A foreign key(fk_Barrica) references barrica(Barrica_Id)
);
create table usuario(
    Usuario_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Usuario_Email varchar(200) not null UNIQUE,
    Usuario_Contrasena varchar (300) not null,
    constraint pk_Usuario PRIMARY KEY (Usuario_ID)
);
create table clienteNatural(
    ClienteN_ID int(15) not null AUTO_INCREMENT UNIQUE,
    ClienteN_primer_nombre varchar(20) not null,
    ClienteN_segundo_nombre varchar(20),
    ClienteN_primer_apellido varchar(20) not null,
    ClienteN_segundo_apellido varchar(20),
    ClienteN_fecha_nac date not null,
    ClienteN_Cedula varchar(10) not null,
    ClienteN_direccion varchar(300) not null,
    fk_Lugar int(15),
    fk_Usuario int(15),
    constraint pk_ClienteN primary key(ClienteN_ID),
    constraint fk_Lugar_CN foreign key(fk_Lugar) references Lugar(Lugar_ID),
    constraint fk_Usuario_CN foreign key(fk_Usuario) references usuario(Usuario_ID)
);
create table clienteJuridico(
    ClienteJ_ID int(15) not null AUTO_INCREMENT UNIQUE,
    ClienteJ_Denominacion_C varchar(40) not null,
    ClienteJ_Razon_S varchar(40) not null,
    ClienteJ_RIF varchar(15) not null,
    ClienteJ_pag_Web varchar(40),
    ClienteJ_direccion varchar(300) not null,
    fk_Lugar int(15),
    fk_Usuario int(15),
    constraint pk_ClienteJ primary key(ClienteJ_ID),
    constraint fk_Lugar_CJ foreign key(fk_Lugar) references lugar(Lugar_ID),
    constraint fk_Usuario_CJ foreign key(fk_Usuario) references usuario(Usuario_ID)
);
create table Proveedor(
    Pro_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Pro_Rif varchar(20) not null,
    Pro_Denominacion_C varchar(40) not null,
    Pro_Razon_S varchar(40) not null,
    Pro_Pagina_Web varchar(40),
    Pro_direccion varchar(300) not null,
    fk_Lugar int(15),
    fk_Usuario int(15),
    constraint pk_Proveedor primary key(Pro_ID),
    constraint fk_Lugar_P foreign key(fk_Lugar) references lugar(Lugar_ID),
    constraint fk_Usuario_P foreign key(fk_Usuario) references usuario(Usuario_ID)
);
create table personacontacto(
    Persona_Contacto_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Persona_Contacto_Nombre varchar(100) not null,
    Persona_Contacto_Apellido varchar(100) not null,
    constraint pk_PersonaContacto primary key(Persona_Contacto_ID)
);
create table Persona_Proveedor(
    fk_PersonaContacto int(15),
    fk_Proveedor int(15),
    constraint pk_Persona_Proveedor primary key(fk_Proveedor, fk_PersonaContacto)       /*OJO*/
);
create table Persona_Juridico(
    fk_PersonaContacto int(15),
    fk_Juridico int(15),
    constraint pk_Persona_Juridico primary key(fk_Juridico, fk_PersonaContacto)
);
create table Empleado(
    Empleado_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Empleado_primer_nombre varchar(20) not null,
    Empleado_segundo_nombre varchar(20),
    Empleado_primer_apellido varchar(20) not null,
    Empleado_segundo_apellido varchar(20),
    Empleado_fecha_nac date not null,
    Empleado_Cedula varchar(10) not null,
    Empleado_direccion varchar(300) not null,
    fk_Lugar int(15),
    fk_Usuario int(15),
    constraint pk_Empleado primary key(Empleado_ID),
    constraint fk_Lugar_E foreign key(fk_Lugar) references lugar(Lugar_ID),
    constraint fk_Usuario_E foreign key(fk_Usuario) references usuario(Usuario_ID)
);
create table telefono(
    Telefono_ID int(15) AUTO_INCREMENT UNIQUE,
    Telefono_numero int(11) not null,
    Telefono_Codigo_Area int(4) not null,
    fk_ClienteN int (15), 
    fk_ClienteJ int(15),
    fk_Proveedor int(15), 
    fk_PersonaContacto int(15), 
    fk_Empleado int(15),
    constraint pk_Telefono primary key(Telefono_ID),
    constraint fk_ClienteN_T foreign key(fk_ClienteN) references clientenatural(ClienteN_ID),
    constraint fk_ClienteJ_T foreign key(fk_ClienteJ) references clientejuridico(ClienteJ_ID),
    constraint fk_Proveedor_T foreign key(fk_Proveedor) references Proveedor(Pro_ID),
    constraint fk_PersonaContacto_T foreign key(fk_PersonaContacto) references personacontacto(Persona_Contacto_ID),
    constraint fk_Empleado_T foreign key(fk_Empleado) references empleado(Empleado_ID)
);
create table ron(
    Ron_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Ron_Marca varchar (100) not null UNIQUE,
    Ron_Descripcion varchar(300),
    Ron_Costo float(12) not null,
    fk_Lugar int(15),
    fk_Proveedor int(15),
    fk_Tipo_Ron int (15),
    fk_Añejamiento int(15),
    constraint pk_Ron primary key (Ron_ID),
    constraint fk_Lugar_R foreign key(fk_Lugar) references lugar(Lugar_ID),
    constraint fk_Proveedor_R foreign key(fk_Proveedor) references Proveedor(Pro_ID),
    constraint fk_Tipo_Ron_R foreign key(fk_Tipo_Ron) references tipo_ron(Tipo_Ron_ID),
    constraint fk_Añejamiento_R foreign key(fk_Añejamiento) references añejamiento(Añejamiento_ID)
);
create table presentacion(
    Presentacion_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Presentacion_Peso numeric(4) not null,
    Presentacion_Precio numeric(65) not null,
    fk_Ron int(15),
    constraint pk_Presentacion primary key (Presentacion_ID),
    constraint fk_Ron_Pre foreign key(fk_Ron) references ron(Ron_ID)
);
create table Horario_Empleado(
    fk_Empleado int(15),
    fk_Horario int(15),
    constraint pk_Horario_Empleado primary key(fk_Empleado, fk_Horario)
);
create table Horario(
    Horario_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Horario_Fecha date not null,
    Horario_Entrada time not null,
    Horario_Salida time not null,
    constraint pk_Horario primary key(Horario_ID)
);
create table Asistencia(
    Asistencia_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Asistencia_Entra_Hora time not null,
    Asistencia_Salida_Hora time not null,
    Asistencia_Dia date not null,
    fk_Empleado int(15),
    constraint pk_Asistencia primary KEY(Asistencia_ID),
    constraint fk_Empleado_As foreign key(fk_Empleado) references Empleado(Empleado_ID)
); 
create table Cargo_Empleado(
    fk_Empleado int(15),
    fk_Cargo int(15),
    constraint pk_Cargo_Empleado primary key(fk_Empleado,fk_Cargo)
);
create table Cargo(
    Cargo_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Cargo_Nombre varchar(300) not null,
    Cargo_Salario numeric (65) not null,
    constraint pk_Cargo primary key(Cargo_ID)
);
create table Beneficio_Empleado(
    Beneficio_Empleado_Descripcion varchar (300), 
    fk_Empleado int(15),
    fk_Beneficio int(15),
    constraint pk_Beneficio_Empleado primary key(fk_Empleado, fk_Beneficio)
);
create table Beneficio(
    Beneficio_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Beneficio_Fecha date not null,
    Beneficio_Tipo varchar(300) not null,
    constraint pk_Beneficio primary key(Beneficio_ID)
);
create table Vacacion(
    Vacacion_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Vacacion_Fecha_Inicio date not null, 
    Vacacion_Fecha_Fin date not null,
    Vacacion_Tipo varchar(50) not null,
    Vacacion_Paga varchar(50) not null,
    fk_Empleado int(15),
    constraint pk_Vacacion primary key (Vacacion_ID),
    constraint fk_Empleado_Va foreign key (fk_Empleado) references Empleado(Empleado_ID)
);
create table Empleado_Departamento(
    fk_Empleadodepa int(15),
    fk_Departamento int(15),
    CONSTRAINT pk_Empleado_Departamento PRIMARY KEY(fk_Empleadodepa,fk_Departamento)
);
create table Departamento(
    Departamento_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Departamento_Nombre varchar (300) not null,
    constraint pk_Departamento primary key(Departamento_ID)
);
create table Pedido(
    Pedido_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Pedido_Fecha date not null,
    Pedido_Total int(254),
    fk_Empleado int(15),
    constraint pk_Pedido primary key(Pedido_ID),
    constraint fk_Empleado_Ped foreign key(fk_Empleado) references Empleado(Empleado_ID)
);
create table BANCO(
    Id_Banco int(15) not null AUTO_INCREMENT UNIQUE,
    Nombre_Banco varchar(500) not null,
    CONSTRAINT pk_banco PRIMARY KEY(Id_Banco)
);
create table PAGO_MOVIL(
    MP_ID int(15) not null AUTO_INCREMENT UNIQUE,
    MP_Descripcion varchar (300),
    MP_Cedula int(9) not null, 
    PG_Telefono int(11) not null,
    fk_banco int(15),
    constraint pk_PAGO_MOVIL primary key(MP_ID), 
    constraint fk_Banco_PG foreign key(fk_banco) references BANCO(Id_Banco)
);
create table CHEQUE(
    CH_ID int(15) not null AUTO_INCREMENT UNIQUE,
    CH_Descripcion varchar (500),
    CH_Cedula int(9) not null, 
    CH_Numero_cuenta int(20) not null,
    fk_banco int(15),
    constraint pk_CHEQUE primary key(CH_ID)  
);
CREATE TABLE EFECTIVO(
	EF_ID int(15) not null AUTO_INCREMENT UNIQUE,
    EF_Descripcion varchar (300),
    EF_Cedula int(9) not null, 
	EF_denominacion varchar(300) NOT NULL,
    fk_banco int(15),
	CONSTRAINT pk_efectivo PRIMARY KEY(EF_ID),
    constraint fk_Banco_E foreign key(fk_banco) references BANCO(Id_Banco),
	CONSTRAINT check_EF_denominacion CHECK(EF_denominacion IN('Bolívares','Dólares'))   
);
CREATE TABLE TARJETA(
	Tar_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Tar_Descripcion varchar (300),
    Tar_Cedula int(9) not null, 
	Tar_Numero numeric(20) NOT NULL,
	Tar_Tipo varchar(300) NOT NULL,
	TAR_Fecha_Vence date NOT NULL,
	fk_banco int(15) NOT NULL,
	CONSTRAINT pk_tarjeta PRIMARY KEY(Tar_ID),
    constraint fk_Banco_T foreign key(fk_banco) references BANCO(Id_Banco),
	CONSTRAINT check_Tar_tipo_tarjeta CHECK(Tar_Tipo IN('Débito','Crédito')),
	CONSTRAINT check_Tar_numero_tarjeta CHECK (Tar_Numero>=0)
);
create table Orden_Pedido(
    Orden_Cantidad int(12) not null,
    Orden_Costo int(12) not null,
    fk_Pedido int(15),
    fk_Inventario_Tienda int(15),
    fk_Almacen_Virtual int (15),
    constraint pk_Orden_Pedido primary key(fk_Pedido, fk_Inventario_Tienda, fk_Almacen_Virtual) /*ojo*/
);
create table Evento(
    Evento_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Evento_Nombre varchar(20) not null,
	Evento_fecha_inicio date NOT NULL,
	Evento_fecha_fin date NOT NULL,
	Evento_hora_inicio time NOT NULL,
	Evento_hora_fin time NOT NULL,
    Evento_Descripcion varchar(300) not null,
    Evento_Direccion varchar (300) not null,
    fk_lugarEve int(15),
    CONSTRAINT pk_Evento primary key (Evento_ID),
    CONSTRAINT fk_lugarEve foreign key(fk_lugarEve) references lugar(Lugar_ID)
); 
create table Pago_Entrada (
    Pago_Entrada_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Pago_Entrada_Fecha date not null,
    Pago_Entrada_Total numeric (65),
    fk_ClienteN int (15),
    fk_ClienteJ int (15),
    fk_Tarjeta int(15),
    CONSTRAINT pk_Pago_Entrada primary key (Pago_Entrada_ID),
    CONSTRAINT fk_ClienteN_pe foreign key(fk_ClienteN) references clienteNatural(ClienteN_ID),
    CONSTRAINT fk_ClienteJ_pe foreign key(fk_ClienteJ) references clienteJuridico(ClienteJ_ID),
    CONSTRAINT fk_Tarjeta_pe foreign key(fk_Tarjeta) references TARJETA(Tar_ID)
);
create table Entrada(
    Entrada_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Entrada_Descripcion varchar(300) not null,
    Entrada_Tipo varchar(300) not null,
    Entrada_Costo numeric(65) not null,
    fk_evento int(15),
    fk_Pago_Entrada int(15),
    constraint pk_Entrada primary key (Entrada_ID),
    constraint fk_evento_e foreign key (fk_evento) references Evento(Evento_ID),
    constraint fk_Pago_Entrada_e foreign key(fk_Pago_Entrada) references Pago_Entrada(Pago_Entrada_ID)
);
create table Cata(
    Cata_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Cata_Nombre varchar (100) not null,
    Cata_Descripcion varchar(100), 
    Cata_Nota varchar(300),
    fk_eventoCata int(15),
    constraint pk_Cata primary key (Cata_ID),
    constraint fk_eventoCata_c foreign key (fk_eventoCata) references Evento(Evento_ID)
);
create table Usuario_Rol(
    fk_Usuario int(15),
    fk_Rol int(15),
    constraint pk_Usuario_Rol primary key(fk_Usuario,fk_Rol)
);
create table Rol(
    Rol_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Rol_Nombre varchar (100) not null,
    Rol_Descripcion varchar(500), 
    constraint pk_Rol primary key (Rol_ID)
);
create table Permiso_Rol(
    fk_Permiso int(15),
    fk_Rol int(15),
    constraint pk_Permiso_Rol primary key (fk_Permiso,fk_Rol)
);
create table Permiso(
    Permiso_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Permiso_Nombre varchar(100) not null,
    Permiso_Descripcion varchar(500),
    constraint pk_Permiso primary key (Permiso_ID)
);
create table HISTORIAL(
    His_ID int(15) not null AUTO_INCREMENT UNIQUE,
    His_Fecha date not null,
    His_Hora time, 
    His_Descripcion varchar(500),
    fk_Usuario int(15),
    CONSTRAINT pk_Historial PRIMARY KEY(His_ID),
    CONSTRAINT fk_Usuario_h FOREIGN KEY(fk_Usuario) references usuario(Usuario_ID)
);
create table Historial_Punto(
    Historial_P_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Historial_P_Fecha timeStamp not null, 
    Historial_P_Cantidad numeric(65) not null,
    Historial_P_Valor numeric(65) not null,
    fk_usuarioHis int(15),
    constraint pk_Historial_Punto primary key(Historial_P_ID),
    constraint fk_usuarioHis_p foreign key (fk_usuarioHis) references usuario(Usuario_ID)
);
CREATE TABLE PUNTO(
	Pt_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Pt_Descripcion varchar (300),
    Pt_Cedula int(9) not null, 
	Pt_Cantidad int(15) NOT NULL,
    fk_Historial_Punto int(15),
	CONSTRAINT pk_Punto PRIMARY KEY(Pt_ID),
    constraint fk_Historial_Punto_P foreign key(fk_Historial_Punto) references Historial_Punto(Historial_P_ID)
);
create table Venta(
    Venta_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Venta_Fecha timeStamp not null, 
    Venta_Punto numeric (65) not null, 
    Venta_Total numeric(65) not null,
    fk_clienteNVen int(15),
    fk_clienteJven int(15),
    constraint pk_Venta primary key(Venta_ID),
    CONSTRAINT fk_clienteNVen_v foreign key(fk_clienteNVen) references clienteNatural(ClienteN_ID),
    CONSTRAINT fk_clienteJVen_v foreign key(fk_clienteJVen) references clienteJuridico(ClienteJ_ID)
);
create table Detalle_Venta(
    Detalle_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Detalle_Cantidad numeric (20) not null, 
    Detalle_Costo numeric (65) not null,
    fk_Venta int(15),
    fk_Inventario_Tienda int(15),
    fk_Alma_Evento int (15),
    constraint pk_Detalle_Venta primary key (Detalle_ID,fk_Venta,fk_Inventario_Tienda,fk_Alma_Evento) 
);
create table Venta_Virtual (
    Venta_V_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Venta_V_Fecha timeStamp not null,
    Venta_V_Total numeric (65),
    fk_clienteNVir int(15),
    fk_clienteJVir int(15),
    constraint pk_Venta_Virtual primary key (Venta_V_ID),
    CONSTRAINT fk_clienteNVir foreign key(fk_clienteNVir) references clienteNatural(ClienteN_ID),
    CONSTRAINT fk_clienteJVir foreign key(fk_clienteJVir) references clienteJuridico(ClienteJ_ID)
);
create table pago(
    ID_PAGO int(15) not null AUTO_INCREMENT UNIQUE,
	Monto_Pagar numeric(65) not null,
    fk_venta int(15),
    fk_ventav int(15),
    fk_Pago_Movil int(15),
    fk_Cheque int(15),
    fk_Tarjeta_pago int(15),
    fk_Efectivo int(15),
    CONSTRAINT pk_pago PRIMARY KEY(ID_PAGO),
    CONSTRAINT fk_venta_p FOREIGN KEY(fk_venta) REFERENCES Venta(Venta_ID),
    CONSTRAINT fk_ventav_p FOREIGN key(fk_ventav) REFERENCES Venta_Virtual(Venta_V_ID),
    CONSTRAINT fk_Pago_Movil_p foreign key(fk_Pago_Movil) references PAGO_MOVIL(MP_ID),
    CONSTRAINT fk_Cheque_p foreign key (fk_Cheque) references CHEQUE(CH_ID),
    CONSTRAINT fk_Efectivo_p foreign key(fk_Efectivo) references EFECTIVO(EF_ID),
    CONSTRAINT fk_Tarjeta_pago_p foreign key(fk_Tarjeta_pago) references TARJETA(Tar_ID)
);
create table Estatus(
    Estatus_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Estatus_Descripcion varchar (300),
    constraint pk_Estatus primary key(Estatus_ID)
);
create table Compra_Estatus(
    ComEsta_ID int (15) not null AUTO_INCREMENT UNIQUE,
    ComEsta_Fecha_Inicio date not null,
    ComEsta_Fecha_Fin date not null,
    fk_Estatus int (15),
    fk_Venta_Virtual int(15),
    constraint pk_Compra_Estatus primary key(ComEsta_ID, fk_Estatus, fk_Venta_Virtual)
);
create table Organizacion(
    Organizacion_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Organizacion_Nombre varchar (300) not null,
    Organizacion_Direccion varchar(300),
    Organizacion_Descripcion varchar(300),
    constraint pk_Organizacion primary key(Organizacion_ID)
);
create table Reconocimiento(
    Reconocimiento_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Reconocimiento_Nombre varchar(300) not null,
    Reconocimiento_Fecha_Otorga date not null,
    fk_Organizacion int(15),
    fk_Ron int(15),
    constraint pk_Reconocimiento primary key(Reconocimiento_ID,fk_Organizacion,fk_Ron)
 );
 create table DiarioRonero(
    DiarioRonero_ID int(15) not null AUTO_INCREMENT UNIQUE,
    DiarioRonero_Descripcion varchar(300) not null,
    DiarioRonero_Fecha_Inicio date not null,
    DiarioRonero_Fecha_Fin date not null,
    constraint pk_DiarioRonero primary key(DiarioRonero_ID)
 );
 
 create table Descuento(
    Descuento_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Descuento_Nombre varchar(100) not null, 
    Descuento_Porcentaje numeric (65) not null,
    Descuento_Fecha_Inicio date not null,
    Descuento_Fecha_Fin date not null,
    fk_DiarioRonero int(15),
    fk_Presentacion int(15),
    constraint pk_Descuento primary key(Descuento_ID, fk_DiarioRonero, fk_Presentacion)
 );
 create table Tienda (
    Tienda_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Tienda_Descripcion varchar(300),
    CONSTRAINT pk_Tienda PRIMARY KEY(Tienda_ID)
 );
 create table Detalle_Afiliacion(
    Detalle_Afi_ID int (15) not null AUTO_INCREMENT UNIQUE,
    Detalle_Afi_Fecha date not null, 
    Detalle_Afi_Costo numeric (65),
    constraint pk_Detalle_Afiliacion primary key (Detalle_Afi_ID)
 );
 create table Pago_Afiliacion(
    Pago_Afi_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Pago_Afi_Total numeric(65) not null,
    constraint pk_Pago_Afiliacion primary key(Pago_Afi_ID)
 );
 create table ALMACEN(
    Almacen_ID int(15) not null AUTO_INCREMENT UNIQUE,
    Almacen_Descripcion varchar(500),
    CONSTRAINT pk_Almacen PRIMARY KEY(Almacen_ID)
 );
 create table ALMACEN_VIRTUAL(
    ID_Alma int(15) not null AUTO_INCREMENT UNIQUE,
    Cantidad_Alma int(65) not null,
    fk_almacen int(15),
    fk_Presentacion int(15),
    CONSTRAINT pk_Almacen_Virtual PRIMARY KEY(ID_Alma),
    CONSTRAINT fk_almacen FOREIGN KEY(fk_almacen) references ALMACEN(Almacen_ID),
    CONSTRAINT fk_Presentacion FOREIGN KEY(fk_Presentacion) references Presentacion(Presentacion_ID)
 );
  create table ALMACEN_TIENDA(
    ID_Tien int(15) not null AUTO_INCREMENT UNIQUE,
    Cantidad_Tien int(65) not null,
    fk_almacenTien int(15),
    fk_PresentacionTien int(15),
    CONSTRAINT pk_Almacen_Tienda PRIMARY KEY(ID_Tien),
    CONSTRAINT fk_almacenTien FOREIGN KEY(fk_almacenTien) references ALMACEN(Almacen_ID),
    CONSTRAINT fk_PresentacionTien FOREIGN KEY(fk_PresentacionTien) references Presentacion(Presentacion_ID)
 );
  create table ALMACEN_EVENTO(
    ID_Alven int(15) not null AUTO_INCREMENT UNIQUE,
    Cantidad_Alven int(65) not null,
    fk_Almacen_Virtual int(15),
    fk_EventoAlma int(15),
    CONSTRAINT pk_Almacen_Evento PRIMARY KEY(ID_Alven),
    CONSTRAINT fk_Almacen_Virtual FOREIGN KEY(fk_Almacen_Virtual) references ALMACEN_VIRTUAL(ID_Alma),
    CONSTRAINT fk_EventoAlma FOREIGN KEY(fk_EventoAlma) references Evento(Evento_ID)
 );
  create table CARRITO(
    Id_Carrito int(15) not null AUTO_INCREMENT UNIQUE,
    Cantidad_Carrito int(65) not null,
    Costo_Carrito numeric(65) not null,
    fk_AlmaVirtualC int(15),
    fk_Venta_Virtual int(15),
    CONSTRAINT pk_Carrito PRIMARY KEY(Id_Carrito),
    CONSTRAINT fk_AlmaVirtualC FOREIGN KEY(fk_AlmaVirtualC) references ALMACEN_VIRTUAL(ID_Alma),
    CONSTRAINT fk_Venta_Virtual FOREIGN KEY(fk_Venta_Virtual) references Venta_Virtual(Venta_V_ID)
 );
create table Ron_Carrito(
    Id_RonCarro int(15) not null AUTO_INCREMENT UNIQUE,
    fk_carrito int(15),
    fk_Ron int(15),
    CONSTRAINT pk_RonCarro PRIMARY KEY(Id_RonCarro),
    CONSTRAINT fk_carrito FOREIGN KEY(fk_carrito) references CARRITO(Id_Carrito),
    CONSTRAINT fk_Ron FOREIGN KEY(fk_Ron) references Ron(Ron_ID)
);

