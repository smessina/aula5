<?php
	$tematica = $_POST["t"];

	$tematicas = array(
		"html5-css3" => array(
			'nombre' => 'HTML5+CSS3',
			'descripcion' => 'Estudio y aplicación de las tecnologías web fundamentales del desarrollo profesional, explorando las posibilidades que HTML5 y CSS3 ofrecen para la creación de sitios y aplicaciones más accesibles y visualmente más atractivas.',
			'objetivos' => array (
				'Comprender las metodologías estándares para el desarrollo de sitios web',
				'Elaborar arquitecturas de información y contenido semántico',
				'Maquetar páginas escalables separando estructura, diseño y contenido',
				'Estilización enfocada en la experiencia del usuario',
				'Aprender nociones de SEO y posicionamiento orgánico en buscadores'
			),
			'detalles' => array(
				'mentoria' => array(
					'duracion' => '5 sesiones',
					'frecuencia' => 'a convenir',
					'adicional' => '20%',
					'importe' => '1200'
				),
				'curso' => array(
					'duracion' => '15 clases',
					'frecuencia' => '2 veces por semana',
					'adicional' => '10%',
					'importe' => '1500'
				)
			)
		),
		"js" => array(
			'nombre' => 'JavaScript',
			'descripcion' => 'Introducción a la programación a través de JavaScript, añadiendo dinamismo a las interfaces para enriquecer la experiencia del usuario en la navegación e interacción web.',
			'objetivos' => array (
				'Aprender las bases fundamentales de la programación',
				'Expandir las propiedades de documentos web',
				'Dominar las estructuras de control, funciones y eventos',
				'Introducir al funcionamiento del DOM y sus posibilidades',
				'Desarrollar soluciones interactivas problemas comunes'
			),
			'detalles' => array(
				'mentoria' => array(
					'duracion' => '5 sesiones',
					'frecuencia' => 'a convenir',
					'adicional' => '20%',
					'importe' => '1200'
				),
				'curso' => array(
					'duracion' => '10 clases',
					'frecuencia' => '2 veces por semana',
					'adicional' => '10%',
					'importe' => '1000'
				)
			)
		),
		"php-mysql" => array(
			'nombre' => 'PHP+MySQL',
			'descripcion' => 'Programación web en PHP como lenguaje de servidor y manipulación de bases de datos en MySQL, estudiando las funcionalidades básicas y técnicas necesarias para la construcción de sitios y aplicaciones.',
			'objetivos' => array (
				'Introducir al desarrollo de paginas web dinamicas',
				'Estudio de la estructura y sintaxis del lenguaje PHP',
				'Definir estructuras modulares en proyectos web',
				'Utilidad, creacion y administracion de base de datos relacionales en MySQL',
				'Integración de PHP y MySQL para gestión de contenido dinámico'
			),
			'detalles' => array(
				'mentoria' => array(
					'duracion' => '5 sesiones',
					'frecuencia' => 'a convenir',
					'adicional' => '20%',
					'importe' => '1200'
				),
				'curso' => array(
					'duracion' => '20 clases',
					'frecuencia' => '2 veces por semana',
					'adicional' => '10%',
					'importe' => '2000'
				)
			)
		),
		"mobile" => array(
			'nombre' => 'Web Mobile',
			'descripcion' => 'Desarrollo web orientado a dispositivos mobiles, estudiando las multiples opciones disponibles, utilidades, recursos y técnicas convienientes para cada proyecto.',
			'objetivos' => array (
				'Conocer las caracteristicas de la navegación web mobile',
				'Identificar los tipos de proyectos y sus implicancias',
				'Dominar las técnicas de maquetación Responsive Design',
				'Construir layouts adaptables y optimizados',
				'Incorporar librerias y recursos interactivos que amplien la experiencia'
			),
			'detalles' => array(
				'mentoria' => array(
					'duracion' => '5 sesiones',
					'frecuencia' => 'a convenir',
					'adicional' => '20%',
					'importe' => '1200'
				),
				'curso' => array(
					'duracion' => '10 clases',
					'frecuencia' => '2 veces por semana',
					'adicional' => '10%',
					'importe' => '1000'
				)
			)
		),
		"wp" => array(
			'nombre' => 'Wordpress',
			'descripcion' => 'Uso del gestor de contenido Wordpress, enfocándose en su utilidad para el desarrollo de webs dinámicas; así como en su instalación, manejo, tareas de mantenimiento, complementos indispensables y personalización visual.',
			'objetivos' => array (
				'Conocer la estructura operativa, sus exigencias, beneficios y limitaciones',
				'Lograr una correcta instalacion priorizando la seguridad y estabilidad',
				'Dominar las herramientas de gestión de contenido y recursos',
				'Customizar funcionalidades a través de complementos y técnicas',
				'Administrar la presencia y promoción en buscadores y otros espacios web'
			),
			'detalles' => array(
				'mentoria' => array(
					'duracion' => '5 sesiones',
					'frecuencia' => 'a convenir',
					'adicional' => '20%',
					'importe' => '1200'
				),
				'curso' => array(
					'duracion' => '15 clases',
					'frecuencia' => '2 veces por semana',
					'adicional' => '10%',
					'importe' => '1500'
				)
			)
		),
	"net" => array(
		'nombre' => '.NET',
		'descripcion' => 'Desarrollo visual a través de Microsoft .NET Framework estudiando los fundamentos de la programación orientadas a objetos, sus características y contraste frente a la programación estructurada.',
		'objetivos' => array (
			'Conocer las bases de la programación visual',
			'Explorar las posibilidades que ofrece .NET',
			'Incorporar prácticas de programación orientada a objetos',
			'Diseñar arquitecturas que separen lo visual de lo funcional',
			'Gestión y almacenamiento de la información'
		),
		'detalles' => array(
			'mentoria' => array(
				'duracion' => '5 sesiones',
				'frecuencia' => 'a convenir',
				'adicional' => '20%',
				'importe' => '1200'
			),
			'curso' => array(
				'duracion' => '20 clases',
				'frecuencia' => '2 veces por semana',
				'adicional' => '10%',
				'importe' => '2000'
			)
		)
	)

	);

	header('Content-Type: application/json');
	echo json_encode( $tematicas[ $tematica ] );
?>