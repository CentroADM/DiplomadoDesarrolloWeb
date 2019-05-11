// alert("Mi codigo");
function registrar(usr){
    console.log('Registrando a :'+usr.nombre);
    $.ajax({
      url     : '/Escuela/registrarpost',
      type  : 'POST',
      data    : usr,
      dataType: 'json',
      success :function(response){
        if(response.status==200){
          url = "/Escuela/index";
          console.log(response.message);
          alert(response.message);
          $(location).attr("href",url);
        }else{
          console.log(response.message);
          // alert(response.message);
        }
      },
      error : function(xhr, status) {
        console.log('Disculpe, existió un problema\n'+status+"\n"+xhr);
      }
    });


  }
$(document).ready(function(){
    console.log('listo');
    $('#formulario2').submit(function(){
      event.preventDefault();
      console.log('click');
      var alumno = {
        'nombre':$('#nombre').val(),
        'edad' : parseInt($('#edad').val()),
        'correo':$('#correo').val(),
        'genero':$('#genero').val()
      };
      console.log(alumno);
      registrar(alumno);
    });
  });
