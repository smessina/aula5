<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
		<meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
		<link rel="shortcut icon" href="assets/ico/favicon.png">

		<title>Aula5 - Mentorías y Capacitación IT</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/aula5.css" rel="stylesheet">
		<link href="assets/css/aula5-animate.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="assets/css/icomoon.css" rel="stylesheet">
		<link href="assets/css/animate-custom.css" rel="stylesheet">

		<!--link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'-->

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			.modal-body { font-size:16px }
			.thumb { margin-bottom:15px	}
			.details { margin-bottom:15px; line-height:200%; }
			.objective { line-height: 200%;	font-size: 14px; list-style: none; padding: 10px; margin: 0; }
			.objective li {	padding-left: 10px;	position: relative;	margin: 5px 0; }
			.objective li:before { content: "-"; display: block; position: absolute; left: 0; }
			.nav-tabs { font-family: "MuseoSans500"; text-transform: uppercase; }
			.tab-content { font-size: 14px; padding: 15px; }
			.table th:first-of-type { text-align: right; }
			.table th, .table td { text-align: center;	}
		</style>
        <?php include_once("analyticstracking.php") ?>
	</head>

	<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

	<!--a href="#" id="modalito" style="position:absolute;top:20%;left:40%;z-index:1000">
		<button>Ver</button>
	</a-->
		<!-- ==== MENU ==== -->
		<div id="navbar-main">
			<!-- Fixed navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container centrado">

					<div id="logo" class="navbar-header">
						<!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
							<img src="assets/img/aula5.png" />
						</button-->
						<a href="#intro" class="smoothScroll">
							<!--span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span-->
						</a>
					</div>

					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#inicio" class="smoothScroll">Inicio</a></li>
							<li><a href="#tematicas" class="smoothScroll">Tematicas</a></li>
							<li><a href="#mentorias" class="smoothScroll">Mentorias</a></li>
							<li><a href="#cursos" class="smoothScroll">Cursos</a></li>
							<li><a href="#proyecto" class="smoothScroll">Proyecto</a></li>							
							<li><a href="#contacto" class="smoothScroll">Contacto</a></li>
						</ul>
						<ol class="nav navbar-nav social-nav">
							<li><a href="https://twitter.com/smessina_/lists/aula5" target="_blank" class="icon icon-twitter">1</a></li>
							<li><a href="https://plus.google.com/+SilvioMessina" target="_blank" class="icon icon-googleplus">2</a></li>
							<li><a href="skype:aula5_?call" target="_blank" class="icon icon-skype">3</a></li>
						</ol>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<!-- ==== INTRO ==== -->
		<div id="intro" name="intro" data-stellar-background-ratio="0.3">
			<header class="clearfix">
				<h1>Aula5</h1>
				<p>Aprendizaje sin fronteras</p>
				<p>Mentoría y Capacitación IT</p>
			</header>
		</div><!-- /headerwrap -->

		<!-- ==== INICIO ==== -->
		<div id="inicio" name="inicio" class="container">
			<div class="row white">
				<div class="col-lg-7 centered">
					<div id="my-macbook">
						<dl id="animate" class="inline-list">
							<dt><a href="#">YO</a></dt>
							<dd id="wordpress"><a data-info="wp" class="call-me" href="#">WP</a></dd>
							<dd id="html5"><a data-info="html5-css3" class="call-me" href="#">H5</a></dd>
							<dd id="css3"><a data-info="html5-css3" class="call-me" href="#">C3</a></dd>
							<dd id="php"><a data-info="php-mysql" class="call-me" href="#">PH</a></dd>
							<dd id="mysql"><a data-info="php-mysql" class="call-me" href="#">MS</a></dd>
							<dd id="jquery"><a data-info="js" class="call-me" href="#">JQ</a></dd>
							<dd id="net"><a data-info="net" class="call-me" href="#">PN</a></dd>
						</dl>
					</div>
				</div>
				<div class="col-lg-5">
					<h2>Hola, soy Silvio Messina, formador de profesionales desde 2006</h2>
					<p>Aula5 es un proyecto educativo que concebí para afrontar la necesidad de capacitación IT acorde a las particularidades de las personas y a la realidad profesional exigida en el mercado laboral.</p>
					<!--p><a class="btn btn-success call">Sobre mí</a></p-->
					<p class="more">
						<span>Conoce más sobre mí en:</span>
						<a href="https://silviomessina.com" target="_blank" class="icon icon-globe"></a>
						<a href="https://twitter.com/smessina_" target="_blank" class="icon icon-twitter2"></a>
						<a href="https://plus.google.com/+SilvioMessina" target="_blank" class="icon icon-googleplus3"></a>
						<a href="https://www.linkedin.com/in/silviomessina" target="_blank" class="icon icon-linkedin"></a>
					</p>
				</div>
			</div><!-- row -->
		</div>

		<!-- ==== FORMACION ==== -->
		<div id="formacion" name="formacion" class="greywrap">
			<div class="row">
				<div class="col-lg-6 callout">
					<span class="icon icon-cogs"></span>
					<h2>Mentorías</h2>
					<p>Asistencia técnica para emprendedores y profesionales con proyectos en marcha</p>
				</div><!-- col-lg-6 -->

				<div class="col-lg-6 callout">
					<span class="icon icon-book"></span>
					<h2>Cursos</h2>
					<p>Capacitación teórico-práctica en las tecnologías más demandadas del sector profesional</p>
				</div><!-- col-lg-6 -->	
			</div><!-- row -->
		</div><!-- greywrap -->

		<!-- ==== TEMATICAS ==== -->
		<div id="tematicas" name="tematicas" class="container">

			<div class="container">
				<div class="row">
					<h2 class="centered">Areas de Estudio</h2>
					<!-- HTML5+CSS3 -->
					<div class="col-md-4">
						<div class="grid mask">
							<figure class="tech html5-css3">
								<img class="img-responsive" src="assets/img/tematicas/html5-css3.jpg" alt="">
								<figcaption>
									<h5>HTML5+CSS3</h5>
									<a data-info="html5-css3" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- JavaScript -->
					<div class="col-md-4">
						<div class="grid mask">
							<figure class="tech js">
								<img class="img-responsive" src="assets/img/tematicas/js.jpg" alt="">
								<figcaption>
									<h5>JavaScript</h5>
									<a data-info="js" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PHP+MySQL -->
					<div class="col-md-4">
						<div class="grid mask">
							<figure class="tech php-mysql">
								<img class="img-responsive" src="assets/img/tematicas/php-mysql.jpg" alt="">
								<figcaption>
									<h5>PHP+MySQL</h5>
									<a data-info="php-mysql" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->
				</div><!-- /row -->

				
				<div class="row">
					<!-- Mobile -->	
					<div class="col-md-4 ">
						<div class="grid mask">
							<figure class="tech mobile">
								<img class="img-responsive" src="assets/img/tematicas/mobile.jpg" alt="">
								<figcaption>
									<h5>Web Mobile</h5>
									<a data-info="mobile" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- Wordpress -->
					<div class="col-md-4">
						<div class="grid mask">
							<figure class="tech wp">
								<img class="img-responsive" src="assets/img/tematicas/wp.jpg" alt="">
								<figcaption>
									<h5>Wordpress</h5>
									<a data-info="wp" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- .NET -->
					<div class="col-md-4">
						<div class="grid mask">
							<figure class="tech net">
								<img class="img-responsive" src="assets/img/tematicas/net.jpg" alt="">
								<figcaption>
									<h5>.NET (C#, VB) </h5>
									<a data-info="net" href="#" class="call">Ver más</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
						</div><!-- /grid-mask -->
					</div><!-- /col -->
				</div><!-- /row -->

			</div><!-- /container -->
		</div>

		<!-- ==== SLOGAN 1 -->
		<section class="section-divider textdivider divider1">
			<div class="container">
				<h1>A medida es mejor</h1>
				<hr>
				<p>Una respuesta a la necesidad de formación eficaz y directa para quienes buscan expandir su desarrollo profesional</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== MENTORIAS ==== -->
		<div id="mentorias" name="mentorias" class="container">
			<div class="row white">
				<h2 class="centered">Mentorías</h2>
				<hr>
				<div class="col-lg-offset-2 col-lg-8 clear">
					<p>Son una modalidad de aprendizaje que busca desarrollar el potencial de las personas ante a sus propios proyectos cuyo crecimiento está obstruido por limitaciones de conocimiento, carencia de aplicación práctica de recursos IT y falta de experiencia profesional.</p>
					<p>Durante el proceso, el mentor se involucra en el rol del aprendiz para guiarlo y explotar lo mejor de si mismo. Mediante la experiencia se ofrecen recomendaciones, soluciones y modos de afrontar actuales y/o futuras necesidades del proyecto.</p>
				</div><!-- col-lg -->

				<div class="col-lg-offset-2 col-lg-2 features">
					<h3 class="icon icon-books">Contenido</h3>
					<p>Se estudian recursos acordes a las necesidades identificadas en el proyecto</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-bubbles2">Modalidad</h3>
					<p>Sesiones particulares 1 a 1 en directo por videoconferencia</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-clock">Duración</h3>
					<p>Son de una duración mínima de 5 sesiones de 1,5hs</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-target">Objetivo</h3>
					<p>Inculcar una conducta de investigación y autodesarrollo profesional</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->

		<!-- ==== SLOGAN 2 -->
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1>Acciones correctas = crecimiento continuo</h1>
				<hr>
				<p>La clave hacia el éxito de los proyectos no es solo adquirir conocimiento, sino tambien saber qué hacer con él</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== CURSOS ==== -->
		<div id="cursos" name="cursos" class="container">
			<div class="row white">
				<h2 class="centered">Cursos</h2>
				<hr>
				<div class="col-lg-offset-2 col-lg-8">
					<p>Son una modalidad de estudio sobre las múltiples tecnologías demandadas en el mercado laboral. Se abarcan las bases teóricas y las aplicaciones prácticas de las mismas, forjando técnicas de estudio que profundicen el conocimiento.</p>
					<p>Mediante la experiencia se aportan ideas y consejos sobre cómo afrontar futuras necesidades en proyectos, expandir sus horizontes y explotar productivamente los recursos estudiados.</p>
				</div><!-- col-lg -->

				<div class="col-lg-offset-2 col-lg-2 features">
					<h3 class="icon icon-books">Contenido</h3>
					<p>Estudios teóricos y su aplicación práctica mediante simulacro de proyectos</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-bubbles2">Modalidad</h3>
					<p>Clases particulares 1 a 1 en directo por videoconferencia</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-clock">Duración</h3>
					<p>Son de una duración determinada con clases de 1,5hs cada una</p>
				</div>

				<div class="col-lg-2 features">
					<h3 class="icon icon-target">Objetivo</h3>
					<p>Estimular la creatividad productiva a través de la investigación y experimentación</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->

		<!-- ==== SLOGAN 3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1>Saber es crecer</h1>
				<hr>
				<p>La experiencia es el mejor de los maestros, vivirla es aprender de ella, compartirla es reivindicar su enseñanza</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== PROYECTO ==== -->
		<div id="proyecto" name="proyecto" class="container">
			<div class="row white">
				<h2 class="centered">El por qué del Proyecto</h2>
				<hr>
				<div class="col-lg-6">
					<p style="margin:0">Aula5 es un proyecto de formación profesional a distancia que busca generar una relación dinámica y recíproca entre profesor y alumno; utilizando tecnicas de comunicacion, enseñanza y trabajo que se enfocan en éste último sobre sus capacidades, sus necesidades, su falta de experiencia, su realidad cambiante y sus potenciales oportunidades al alcanzar las metas propuestas en cada temática de estudio.</p>
				</div><!-- col-lg-6 -->
				
				<div class="col-lg-6">
					<p>Lo he llamado Aula5 porqué son 5 ideas en los que se basa este proyecto, cuya finalidad es constituir un modelo de enseñanza que subsane las carencias que puedan dejar en los alumnos los sistemas educativos tradicionales; y a la vez se constituyen como normas para determinar el modo en que debe desarrollarse la relación alumno-docente frente a los objetivos perseguidos.</p>
				</div><!-- col-lg-6 -->
				
				<div class="col-lg-offset-2 col-lg-8 ideal5">
					<dl class="objectives">
						<dt>Las 5 ideas esenciales para una enseñanza exitosa</dt>
						<dd>Conocer y liberar el potencial interior del alumno</dd>
						<dd>Orientar el desarrollo profesional a sus necesidades</dd>
						<dd>Guiar el aprendizaje a través de la experiencia</dd>
						<dd>Asistir frente al cambio y al autoconocimiento</dd>
						<dd>Capitalizar y explotar el saber adquirido</dd>
					</dl>
				</div>
				
				<div class="col-lg-12">
					<p style="margin:0">Esta vision que propongo se basa en logros generales que deben alcanzarse en cualquier temática de estudio; pues dotarán al alumno de una mentalidad hábil y creativa a la hora de afrontar las necesidades técnicas que puedan surgir en el desarrollo de su actividad profesional.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->

		<div id="hidden">
			<!-- ==== SECTION DIVIDER4 ==== --
				<section class="section-divider textdivider divider4">
					<div class="container">
						<h1>DESIGN CREATES EMOTIONAL CONNECTION</h1>
						<hr>
						<p>There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.</p>
					</div><!-- container --
				</section><!-- section -->

				<!-- ==== BLOG ==== --
				<div id="blog" name="blog" class="container">
					<div class="row">
						<h1 class="centered">WE ARE STORYTELLERS</h1>
						<hr>
					</div><!-- /row --

					<div class="row">
						<div class="col-lg-6 blog-bg">
							<div class="col-lg-4 centered">
								<p><img class="img img-circle" src="assets/img/team/team04.jpg" width="60px" height="60px"></p>
								<h4>Jaye Smith</h4>
								<h5>Published Aug 30.</h5>
							</div>
							<div class="col-lg-8 blog-content">
								<h2>We Define Success</h2>
								<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
								<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client’s brand.</p>
								<p><a href="#" class="icon icon-link"> Read More</a></p>
							</div>
						</div><!-- /col --

						<div class="col-lg-6 blog-bg">
							<div class="col-lg-4 centered">
								<p><img class="img img-circle" src="assets/img/team/team03.jpg" width="60px" height="60px"></p>
								<h4>Michele Lampa</h4>
								<h5>Published Aug 28.</h5>
							</div>
							<div class="col-lg-8 blog-content">
								<h2>A Beautiful Story</h2>
								<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
								<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client’s brand.</p>
								<p><a href="#" class="icon icon-link"> Read More</a></p>
							</div>
						</div><!-- /col --
					</div><!-- /row --
				</div><!-- /container -->	
		</div>

		<!-- ==== SLOGAN 4 ==== -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1>Desde Buenos Aires para el mundo</h1>
				<hr>
				<p>Una opción para invertir, una oportunidad para aprender</p>
				<!--p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p-->
			</div><!-- container -->
		</section><!-- section -->

		<div id="contacto" name="contacto" class="container">
			<div class="row">
				<h1 class="centered">Gracias por su visita</h1>
				<hr>
				<div class="col-lg-4">
					<h3>Contacto</h3>
					<form class="form-horizontal qForm" role="form" id="contactoF" action="send">
						<fieldset class="form-group">
							<div class="col-lg-6">
								<label for="nombre" class="control-label"></label>
								<input type="text" class="form-control" name="qNombre" id="nombre" placeholder="Tu nombre..." required>
							</div>

							<div class="col-lg-6">
								<label for="text1" class="control-label"></label>
								<input type="email" class="form-control" name="qMail" id="email" placeholder="Tu E-Mail..." required>
							</div>
						</fieldset>

						<fieldset class="form-group">
							<label for="inputEmail1" class="col-lg-4 control-label"></label>
							<div class="col-lg-12">
								<!--input type="email"  id="inputEmail1" placeholder="E-Mail"-->
								<select name="qAsunto" id="asunto" class="form-control" required>
									<option>Asunto...</option>
									<option value="Inscripción">Inscripción</option>
									<option value="Modalidad">Modalidad</option>
									<option value="Medios de Pago">Medios de Pago</option>
									<option value="Cursos/Mentorias">Cursos/Mentorias</option>
									<option value="Otros">Otros</option>
								</select>
							</div>
						</fieldset>

						<fieldset class="form-group">
							<label for="text1" class="col-lg-4 control-label"></label>
							<div class="col-lg-12">
								<textarea name="qMensaje" id="mensaje" rows="3" class="form-control" placeholder="Tu mensaje..." required></textarea>
								<input type="hidden" name="qForm" value="contacto">
							</div>
						</fieldset>

						<fieldset class="form-group">
							<div class="col-lg-12">
								<input type="submit" class="call btn-submit" value="Enviar" style="display:block;width:auto">
								<span class="status"></span>
							</div>
						</fieldset>
					</form><!-- form -->
				</div><!-- col -->

				<div class="col-lg-4">
					<h3>Agradecimientos</h3>
					<p>Este proyecto sale a la luz gracias a personas que con su apoyo, consejo, critica y opinion aportaron su granito de arena en esta visión que; con mucho esfuerzo y entusiasmo, llevo adelante. Sinceramente muchas gracias por su buena voluntad y predisposición a ...</p>
					<ul class="friends">
						<li class="icon icon-cogs">
							<span>Martin Mednik:</span>
							<a href="https://twitter.com/mmednik" target="_blank">@mmednik</a>
						</li>
						<li class="icon icon-console">
							<span>Eugenia Bahit:</span>
							<a href="https://twitter.com/eugeniabahit" target="_blank">@eugeniabahit</a>
						</li>
						<li class="icon icon-camera">
							<span>Carolina Siri:</span>
							<a href="https://twitter.com/CaroSiri" target="_blank">@CaroSiri</a>
						</li>
					</ul>
				</div><!-- col -->

				<div class="col-lg-4">
					<h3>Newsletter</h3>
					<p>Suscríbete para estar al día acerca de nuevos contenidos, servicios, ofertas y muchas otras novedades.</p>
					<form class="form-horizontal validate" role="form" action="//aula5.us3.list-manage.com/subscribe/post?u=b4710ff6bed0bd8d32bf82ad0&amp;id=98b68dc1e2" method="post"	id="mc-embedded-subscribe-form"	name="mc-embedded-subscribe-form" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll" class="form-group1">
							<div class="form-group">
								<div class="mc-field-group col-lg-12">
									<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Tu nombre...">
								</div>
							</div>

							<div class="form-group">
								<div class="mc-field-group col-lg-12">
									<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Tu e-mail...">
								</div>
							</div>

							<div class="form-group">
								<div class="mc-field-group col-lg-12">
									<input style="display:none" type="text" name="b_b4710ff6bed0bd8d32bf82ad0_98b68dc1e2" tabindex="-1" value="">
									<input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success call button">
									<!--span class="status"-->
										<div id="mce-responses" class="clear">
											<div class="response status error" id="mce-error-response" style="display:none;margin: -5px -15px"></div>
											<div class="response status sended" id="mce-success-response" style="display:none;margin: -5px -15px"></div>
										</div>
									<!--/span-->
								</div>
							</div>
						</div>
					</form>
				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->

		<div id="footer">
			<ul>
				<li><a data-toggle="modal" data-title="Preguntas frecuentes" class="more-modal" href="preguntas_frecuentes">Preguntas frecuentes</a></li>
				<li><a data-toggle="modal" data-title="Medios de pago" class="more-modal" href="pagos">Medios de Pago</a></li>
				<li><a data-toggle="modal" data-title="Capacitación presencial" class="more-modal" href="empresas">Servicio para empresas</a></li>
			</ul>
			<p style="color:#FFF">&copy; 2014 - Aula5 es un proyecto de Silvio Messina</p>
		</div>

		<!-- ==== MODAL BOX ==== -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center"><!-- {data.title} --></h4>
					</div>
					<div class="modal-body">
						<p class="thumb"><img class="img-responsive tech-thumb" src="" alt=""></p>
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
							<li><a href="#objetivos" data-toggle="tab">Objetivos</a></li>
							<li><a href="#precio" data-toggle="tab">Precio</a></li>
							<li><a href="#inscripcion" data-toggle="tab">Inscripción</a></li>
						</ul>
						<div class="tab-content">
							<div id="descripcion" class="tab-pane active">
								<p class="details"><!-- {data.descripcion} --></p>
							</div>
							<div id="objetivos" class="tab-pane">
								<ul class="objective"><!-- {data.objetivos} --></ul>
								<!--a class="call" style="width:100%;display:block">Ver temario</a-->
							</div>
							<div id="precio" class="tab-pane">
								<table class="table table-hover">
									<tr style="border-top: solid 2px white;">
										<th class="col-sm-2"></th>
										<th class="col-sm-5">Mentoria</th>
										<th class="col-sm-5">Curso</th>
									</tr>
									<tr>
										<th>Duración:</th>
										<td class="dM"><!-- {data.mentoria.duracion} --></td>
										<td class="dC"><!-- {data.curso.duracion} --></td>
									</tr>
									<tr>
										<th>Frecuencia:</th>
										<td class="fM"><!-- {data.mentoria.frecuencia} --></td>
										<td class="fC"><!-- {data.curso.frecuencia} --></td>
									</tr>
									<tr>
										<th>Adicional:</th>
										<td class="aM"><!-- {data.mentoria.adicional} --></td>
										<td class="aC"><!-- {data.curso.adicional} --></td>
									</tr>
									<tr style="border-top: solid 2px #999 !important;">
										<th>Importe:</th>
										<td class="iM"><!-- {data.mentoria.importe} --></td>
										<td class="iC"><!-- {data.curso.importe} --></td>
									</tr>
								</table>
							</div>
							<div id="inscripcion" class="tab-pane">
								<form role="form" class="row qForm" id="inscripcionF" action="send">
									<div class="col-md-6">
										<div class="form-group input-group">
											<div class="input-group-addon icon icon-user"></div>
											<input type="text" class="form-control" id="nombre" name="qNombre" placeholder="Nombre..." required>
										</div>
										<div class="form-group input-group">
											<div class="input-group-addon icon icon-earth"></div>
											<input type="text" class="form-control" id="nacionalidad" name="qNacionalidad" placeholder="Nacionalidad..." required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group input-group">
											<div class="input-group-addon icon icon-envelope"></div>
											<input type="email" class="form-control" id="mail" name="qMail" placeholder="E-Mail..." required>
										</div>
										<div class="form-group input-group">
											<div class="input-group-addon icon icon-skype"></div>
											<input type="text" class="form-control" id="skype" name="qSkype" placeholder="Skype..." required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group input-group">
											<div class="input-group-addon icon icon-target"></div>
											<input type="text" class="form-control" id="objetivo" name="qObjetivo" placeholder="Objetivo..." required>
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu pull-right" role="menu">
													<li><a href="#" class="subject" data-subject="Curso">Soy iniciado, necesito un Curso de <span></span></a></li>
													<li><a href="#" class="subject" data-subject="Mentoria">Tengo un proyecto, necesito una Mentoría sobre <span></span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" id="mensaje" name="qMensaje" rows="3" placeholder="Algún comentario que quieras compartir..." required></textarea>
											<input type="hidden" name="qCurso">
											<input type="hidden" name="qForm" value="inscripcion">
										</div>
										<div class="form-group qSubmit" style="margin-bottom:0">
											<!--a class="call btn-submit" style="width:100%;display:block">Enviar</a-->
											<input type="submit" class="call btn-submit" value="Enviar" style="display:block">
											<span class="status"></span>
										</div>
									</div>
								</form>
							</div>
						</div><!-- /.tab-content -->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="more-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center"><!-- {data.title} --></h4>
					</div>
					<div class="modal-body">

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/retina.js"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
		<script type="text/javascript" src="assets/js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.visible.min.js"></script>
		<script type="text/javascript" src="assets/js/prefixfree.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-func.js"></script>
		<script type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
		<script type="text/javascript">
			var my_intro;
			$(window).load(function() {
				my_intro = $("#intro").outerHeight() - 50;
			});
			$(window).scroll( function() {
				var $mac = $("#my-macbook");
				if ( $mac.visible(false) ) {
					$mac.addClass("motion");
				}
				/*** Logo ***/
				if ( $(this).scrollTop() >= my_intro ) {
					$("#logo a").addClass("show");
				} else {
					$("#navbar-main li").each($).removeClass("active");
					$("#logo a").removeClass("show");
				}
			});
			(function($) {
				window.fnames = new Array();
				window.ftypes = new Array();
				fnames[0]='EMAIL';
				ftypes[0]='email';
				fnames[1]='FNAME';
				ftypes[1]='text';
			}(jQuery));
			var $mcj = jQuery.noConflict(true);
		</script>
	</body>
</html>
