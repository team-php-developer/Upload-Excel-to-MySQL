<?php
error_reporting( 0 );
include 'conexion.php';
include 'excel_reader2.php';

if ( isset( $_POST[ 'documento' ] ) ) {
	$data = new Spreadsheet_Excel_Reader( $_FILES[ 'documento' ][ 'tmp_name' ] );
	$baris = $data->rowcount( $sheet_index = 0 );

	for ( $i = 2; $i <= $baris; $i++ ) {
		$nombre1 = utf8_decode($data->val( $i, 1 ));
		$nombre2 = utf8_decode($data->val( $i, 2 ));
		$apellido1 = utf8_decode($data->val( $i, 3 ));
		$apellido2 = utf8_decode($data->val( $i, 4 ));
		$identificacion = $data->val( $i, 5 );

		/*
		$correo = utf8_decode($data->val( $i, 6 ));
		$telefono = $data->val( $i, 7 );

		$dia = $data->val( $i, 8 );
		$mes = $data->val( $i, 9 );
		$anio = $data->val( $i, 10 );

        $sexo = $data->val( $i, 11 );
        $rol = $data->val( $i, 12 );
        $tipodoc = $data->val( $i, 13 );
		$grupo = $data->val( $i, 14 );
		
		ini_set('date.timezone','America/Bogota');
		$nacimiento = $anio."/".$mes."/".$dia;
		@$edad = (date('Y')-$anio);
		@$fechaactual = date( 'Y-m-d H:i:s' );
        */

		if($nombre != "" || $nombre != null){
			$insertar = "INSERT INTO categoria (nombre1, nombre2, apellido1, apellido2, identificacion, departamento_votacion, municipio_votacion, fk_zona, fk_puesto, mesa, estado, fk_campaña) VALUES ('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$identificacion', '100', '1101', '6', '103', '1', '1', '8')";

			if ( $conexion->query( $insertar ) == true ) {
				unlink( $_FILES[ 'documento' ][ 'tmp_name' ] );
				echo "se inserto: ".$nombre;
				echo "<br>";
			/*
			echo '<script language="javascript">
			alert("Correcto: ..::EL ARCHIVO SE CARGO SATISFACTORIAMENTE::..");
			window.location.href="../index";
			</script>';
			*/
			}else{
				echo '<script language="javascript">
				alert("Error: ..::VERIFIQUE LOS DATOS, HAY INCONSISTENCIA::..");
				window.location.href="../index";
				</script>';
			}
	}else{
		echo "campo: ".$nombre." vacio";
	}

}
}
$conexion->close();
?>