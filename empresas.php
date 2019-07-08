<div class="modal-body">
	<p class="thumb"><img class="img-responsive" src="assets/img/empresas.jpg" alt=""></p>
	<ul class="nav nav-tabs nav-justified" role="tablist">
		<li class="active"><a href="#pane1" data-toggle="tab">Información</a></li>
		<li><a href="#pane2" data-toggle="tab">Solicitud</a></li>
	</ul>
	<div class="tab-content" style="padding-bottom:0">
		<div id="pane1" class="tab-pane active">
			<p class="details">Servicio personalizado para empresas y equipos de trabajo, de modo presencial in company<sup>(*)</sup>.</p>
			<p class="details">Esta modalidad se enfoca en las demandas concretas del proyecto y los roles individuales de cada miembro en el mismo; permitiendo así una capacitación concisa sobre las necesidades identificadas y el arribo de soluciones más prósperas.</p>
			<p class="details" style="margin:0"><small>(*) Disponible únicamente para la Ciudad de Buenos Aires, Argentina.</small></p>
		</div>

		<div id="pane2" class="tab-pane">
			<p class="details" style="display:none">Contáctate para obtener más información sobre el servicio...</p>
			<form role="form" class="row qForm" id="empresasF" action="send">
				<div class="col-md-12">

				<div class="form-group input-group">
					<div class="input-group-addon icon icon-user"></div>
					<input type="text" class="form-control" id="nombre" name="qNombre" placeholder="Nombre..." required>
				</div>

				</div>
				<div class="col-md-12">
					<div class="form-group input-group">
						<div class="input-group-addon icon icon-envelope"></div>
						<input type="email" class="form-control" id="mail" name="qMail" placeholder="E-Mail..." required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control" id="mensaje" name="qMensaje" rows="3" placeholder="Detalles, necesidades e intereses..." required></textarea>
						<input type="hidden" name="qForm" value="empresa">
					</div>
					<div class="form-group qSubmit" style="margin-bottom:0">
						<input type="submit" class="call btn-submit" value="Enviar" style="display:block">
						<span class="status"></span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>