$(function(){

    $('.imagen').click(function(){
        var imagen1=$(this).attr('src');
        var descripcion=$(this).attr('alt');

        if (imagen1==""){

          $('.recibir-imagen').attr('src','http://www.51allout.co.uk/wp-content/uploads/2012/02/Image-not-found.gif');
          $('#mimodal').modal();

        }else{
	        $('.recibir-imagen').attr('src',imagen1);
	        $('.descripcion-imagen').text(descripcion);
	        $('#exampleModal').modal();
      }
    });

  });


  $(function(){

    $('.bici').click(function(){
        var imagen2=$(this).attr('src');
        

        if (imagen2==""){

          $('.obtener-imagen').attr('src','http://www.51allout.co.uk/wp-content/uploads/2012/02/Image-not-found.gif');
          $('#mimodal').modal();

        }else{
	        $('.obtener-imagen').attr('src',imagen2);
	        $('#bicicletas').modal();
      }
    });

  });