function abremodal(){ $("body").append('<div id="modal"> <video controls autoplay><source src="../videos/cierre2.mp4" type="video/mp4; codecs="avc1.42E01E, mp4a.40.2"" /> <source src="../videos/cierre2.mp4" type="video/mp4; codecs="vp8, vorbis"" /></video><a href="../menu.html"><div id="close"> Siguiente </div></a></div>')

$( "#close" ).click(function() {
  $("#modal").remove() ;
});
}