!function ($) {
	//=================================== scroll  ===================================//

  $body.scrollspy({
    target: '#navbar-main',
    offset: navHeight
  })

  $window.on('load', function () {
    $body.scrollspy('refresh')
  })

  $('#navbar-main [href=#]').click(function (e) {
    e.preventDefault()
  })

/* == Custom Scripts == */

  /*$.stellar({
    horizontalScrolling: false,
    verticalOffset: 0
  });*/
};

$.getJSON('pais.php', function (data) {
//$.getJSON('http://freegeoip.net/json/', function (data) {
  //alert(data.country);
  $pais = data.country;
});

//if (navigator.geolocation) {
//    navigator.geolocation.getCurrentPosition(function(position) {
 //       $.getJSON('http://ws.geonames.org/countryCode', {
//            lat: position.coords.latitude,
//            lng: position.coords.longitude,
//            type: 'JSON'
 //       }, function(result) {
  //          alert(result.countryName);
    //    });
 //   });
//}​

$("#logo a").click(function(){
  setTimeout(function() {
    $("#navbar-main li").each($).removeClass("active");
  }, 600);
});

$("#navbar-main a").click(function(){
  $obj = $(this);
  setTimeout(function() {
    $("#navbar-main li").each($).removeClass("active");
    $obj.parent().addClass("active");
  }, 1000);
});

/* Ver tematica */
$(".tech a.call, a.call-me").click(function(e) {
  e.preventDefault();
  $tematica = $(this).attr("data-info");

  $.ajax({
    "url" : "tematicas.php",
    "type":"POST",
    "data" : { "t" : $tematica },
    "dataType":"JSON"
  }).done(function(data) {
    //console.log(data);
    $(".modal-title").html(data.nombre);
    $("input[name='qCurso']").val(data.nombre);
    $("a.subject span").text(data.nombre);
    $(".details").html(data.descripcion);
    $(".tech-thumb").attr("src", "assets/img/tematicas/cuted/"+$tematica+".jpg");
    $(".objective").html("");
    $.each(data.objetivos, function(key, value) {
      $(".objective").append("<li>"+value+"</li>")
    });
    $(".dM").html(data.detalles.mentoria.duracion);
    $(".fM").html(data.detalles.mentoria.frecuencia);
    $(".aM").html(data.detalles.mentoria.adicional);
    $(".dC").html(data.detalles.curso.duracion);
    $(".fC").html(data.detalles.curso.frecuencia);
    $(".aC").html(data.detalles.curso.adicional);

    if($pais != "AR") {
      $(".iM").html("US$"+(data.detalles.mentoria.importe/10)+".-");
      $(".iC").html("US$"+(data.detalles.curso.importe/10)+".-");
    } else {
      $(".iM").html("$"+data.detalles.mentoria.importe+".-");
      $(".iC").html("$"+data.detalles.curso.importe+".-");
    }
    $(".form-control").prop("disabled", false).val("");
    $(".status").removeClass("sending error sended").empty();
    $(".btn-submit").css("visibility", "visible");

    $(".nav-tabs li, .tab-content .tab-pane").each(function() {
      $this = $(this);
      if ($this.is(':first-child')) {
        $this.addClass('active'); 
      } else {
        $this.removeClass('active'); 
      }
    });
    $('#myModal').modal('show');
  });
});

$('#myModal, #more-modal').on('hidden.bs.modal', function () {
    $(".tech-thumb").attr("src", "");
    $("#more-modal .modal-body").empty();
})

/* Ver footer */
$("a.more-modal").click(function(e) {
  e.preventDefault();
  $title = $(this).attr("data-title");
  $url = $(this).attr("href");

  $.ajax({
    "url" : $url+".php",
    "type": "GET"
  }).done(function(data) {
    $("#more-modal .modal-title").html( $title );
    $("#more-modal .modal-body").html( data );
  });
  $('#more-modal').modal('show');
});

/* Contact Forms */
$(".subject").click(function(e) {
  e.preventDefault();
  $("#objetivo").val( $(this).text() );
});

$( ".qForm input" ).focus(function() {
  $(".qForm .status").removeClass("sending error sended").empty();
  $(".btn-submit").css("visibility", "visible");
});

$(document).on('submit', '.qForm', function(e) {
//$('.qForm').on('submit', function(e) {

//$(".qForm").submit(function(e){
  e.preventDefault();
  $qForm = $(this);
  $submit = $qForm.find(".btn-submit");
  $status = $qForm.find(".status");
  $data = $qForm.serialize();
  $qForm.find(".form-control").prop("disabled", true);
  $submit.css("visibility", "hidden");
  $status.removeClass("error").addClass("sending").empty();

  if($qForm.attr("id") == "inscripcionF") {
    $rta = "Gracias, me contactaré pronto para continuar con la inscripción";
  } else {
    $rta = "Gracias, me contactaré a la brevedad";
  }
  
  $.ajax({
    "type" : "POST",
    "dataType" : "text",
    "url" : $qForm.attr("action")+".php",
    "data" : $data,
    success : function(rta) {
      if(rta) {
        $status.removeClass("sending").addClass("sended").html( $rta );
      } else {
        $status.removeClass("sending").addClass("error").html("Ocurrio un error, intentalo de nuevo");
        $submit.css("visibility", "visible");
        $qForm.find(".form-control").prop("disabled", false);
      }
    }
  });
});
