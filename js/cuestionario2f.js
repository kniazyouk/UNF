function abremodal(){ $("body").append('<div id="modal2"> <iframe src="../Cuestionarios/Test2_post.html" style="border: 0; width: 100%; height: 100%"></iframe><a href="../tesoro3/actividad1.html" ><div id="close"> Continuar </div></a></div>')

$( "#close" ).click(function() {
  $("#modal").remove() ;
});
}