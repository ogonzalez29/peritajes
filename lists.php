<?php

//list of matrices names
$names= array(
	'1' => 'A - EXTERIOR',
	'2' => 'B - INTERIOR',
	'3' => 'C - INTERIOR',
	'4' => 'D - MOTOR',
	'5' => 'E - ELECTRICIDAD',
	'6' => 'F - SUSPENSION/DIRECCION',
	'7' => 'G - CAJA Y TRANSMISION',
	'8' => 'H - OTROS' 
	);

//list of options
$loptions= array(
	'1' => 'B',
	'2' => 'R',
	'3' => 'M',
	'4' => 'N/A');

//list of matrices info
$list = array(
	'1' => array(
				'1'	=> 'Latonería',
				'2' =>	'Pintura',				
				'3' =>	'Chasis',				
				'4' =>	'Antena',				
				'5' =>	'Vidrios',				
				'6' =>	'Espejos',				
				'7' =>	'Limpiabrisas',				
				'8' =>	'Persiana',				
				'9' =>	'Farolas',				
				'10' =>	'Cocuyos direccionales',				
				'11' =>	'Cocuyos bomper',				
				'12' =>	'Cocuyos guardafangos',				
				'13' =>	'Emblemas',				
				'14' =>	'Chapas puertas',				
				'15' =>	'Manijas puertas',				
				'16' =>	'Tapa gasolina',				
				'17' =>	'Bocelería',				
				'18' =>	'Rines',				
				'19' =>	'Copas',				
				'20' =>	'Llantas',				
				'21' =>	'Bomper delantero',				
				'22' =>	'Punteras bomper delantero',				
				'23' =>	'Chapa baúl',				
				'24' =>	'Bomper trasero',				
				'25' =>	'Punteras bomper trasero',				
				'26' =>	'Luz placa',				
				'27' =>	'Stops'								
			),
	'2' => array(
				'1' => 'Espejo retrovisor',				
				'2' => 'Parasoles',				
				'3' => 'Cinturones de seguridad',				
				'4' => 'Manijas elevavidrios',				
				'5' => 'Manijas puertas',				
				'6' => 'Descansabrazos',				
				'7' => 'Forros',				
				'8' => 'Tapicería',				
				'9' => 'Ceniceros',				
				'10' => 'Luz interior',				
				'11' => 'Radio',				
				'12' => 'Parlantes',				
				'13' => 'Encendedor',				
				'14' => 'Ventilador',				
				'15' => 'Aire Acondicionado',				
				'16' => 'Calefacción',
				'17' => 'Tapa guantera',				
				'18' => 'Desempañador trasero',				
				'19' => 'Luz tablero',				
				'20' => 'Indicador de gasolina',				
				'21' => 'Indicador de temperatura',				
				'22' => 'Indicador presión de aceite'
			),
	'3' => array(
				'1' => 'Indicador freno de mano',				
				'2' => 'Velocímetro',				
				'3' => 'Tacómetro',				
				'4' => 'Odómetro parcial',				
				'5' => 'Odómetro total',				
				'6' => 'Reloj',				
				'7' => 'Rejillas tablero',				
				'8' => 'Panel tablero',				
				'9' => 'Conmutador de luces',				
				'10' => 'Freno de mano',				
				'11' => 'Tapetes',				
				'12' => 'Alfombra',				
				'13' => 'Apoyacabezas'

			),
	'4' => array(
				'1' => 'Varilla apertura capot',				
				'2' => 'Amortiguadores capot',				
				'3' => 'Sistema de refrigeración',				
				'4' => 'Tapa de aceite',				
				'5' => 'Tapa frasco lavavidrios',				
				'6' => 'Tapa recipiente hidráulico',				
				'7' => 'Varilla nivel de aceite',				
				'8' => 'Sistema de alimentación',				
				'9' => 'Compresión de cilindros',				
				'10' => 'Sincronización',				
				'11' => 'Nivel de aceite',				
				'12' => 'Fugas de aceite',				
				'13' => 'Ruidos de motor',				
				'14' => 'Sistema de escape',				
				'15' => 'Tanque de combustible'

			),
	'5' => array(
				'1'	=> 'Batería',				
				'2'	=> 'Motor de arranque',				
				'3'	=> 'Alternador',				
				'4'	=> 'Luces medias',				
				'5'	=> 'Luces plenas',				
				'6'	=> 'Luces direcionales',				
				'7'	=> 'Luces de parqueo',
				'8'	=> 'Luces de reverso',				
				'9'	=> 'Luces de freno'
			),
	'6' => array(
				'1' => 'Amortiguadores delanteros',				
				'2' => 'Espirales delanteros',				
				'3' => 'Rótulas superiores',				
				'4' => 'Rótulas inferiores',				
				'5' => 'Terminales de dirección',				
				'6' => 'Brazos axiales',				
				'7' => 'Muñecos barra estabilizadora',				
				'8' => 'Tijeras superiores',				
				'9' => 'Tijeras inferiores',				
				'10' => 'Bujes de tijera',				
				'11' => 'Bujes barra estabilizadora',				
				'12' => 'Caja de dirección',				
				'13' => 'Guardapolvos caja dirección',				
				'14' => 'Discos de freno',				
				'15' => 'Pastillas de freno delanteras',				
				'16' => 'Pastillas de freno traseras',				
				'17' => 'Rodamientos delanteros',				
				'18' => 'Rodamientos traseros',				
				'19' => 'Amortiguadores traseros',				
				'20' => 'Muelles',				
				'21' => 'Bujes de muelles',				
				'22' => 'Rodamientos traseros',				
				'23' => 'Espirales traseros',				
				'24' => 'Bandas de freno'
			),
	'7' => array(
				'1' => 'Transmisión',				
				'2' => 'Cárdan',				
				'3' => 'Crucetas cárdan',				
				'4' => 'Ejes delanteros',				
				'5' => 'Control de cambios',				
				'6' => 'Caja de velocidades',				
				'7' => 'Soportes de caja',				
				'8' => 'Kit de embrague',				
				'9' => 'Guaya de embrague',				
				'10' => 'Fugas de aceite'

			),
	'8' => array(
				'1' => 'Gato',				
				'2' => 'Copa de seguridad',				
				'3' => 'Llanta de repuesto',				
				'4' => 'Alarma',				
				'5' => 'Exploradoras'
			)
	);

//list of radio button matrices names

$elNames = array(
	'1' => 'matrix_1',
	'2' => 'matrix_2',
	'3' => 'matrix_3',
	'4' => 'matrix_4',
	'5' => 'matrix_5',
	'6' => 'matrix_6',
	'7' => 'matrix_7',
	'8' => 'matrix_8'
	);

//list of matrices errors names
$errorNames = array(
	'1' => $matrix1Err,
	'2' => $matrix2Err,
	'3' => $matrix3Err,
	'4' => $matrix4Err,
	'5' => $matrix5Err,
	'6' => $matrix6Err,
	'7' => $matrix7Err,
	'8' => $matrix8Err
	);

?>