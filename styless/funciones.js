$(function(){
    var str = '#len'; // aumenta cuando tocas el boton
    $(document).ready(function(){
      var i, stop;
      i = 1;
      stop = 4; // numero de elemntos
      setInterval(function(){
        if (i > stop){
          return;
        }
        $('#len'+(i++)).toggleClass('bucle');
      }, 500)
    });
  });

/* Aún me falta agregarle mejor funcionalidad, no se hacer mucho así que pailangas att : Jhoan */

