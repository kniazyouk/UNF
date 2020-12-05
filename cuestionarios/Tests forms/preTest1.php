<?php

$score = 0;

if(isset($_REQUEST['calculate'])){
    $answer1 = $_REQUEST['answer1'];
    $answer2 = $_REQUEST['answer2'];
    $answer3 = $_REQUEST['answer3'];
    $answer4 = $_REQUEST['answer4'];
    $answer5 = $_REQUEST['answer5'];
    $answer6 = $_REQUEST['answer6'];
    $answer7 = $_REQUEST['answer7'];
    $answer8 = $_REQUEST['answer8'];
    $answer9 = $_REQUEST['answer9'];
    $answer10 = $_REQUEST['answer10'];
    
    $score = $answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10;
}

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <title>Curso UNF</title>
    <link rel="stylesheet" href="sorces/bootstrap.min.css">
    <link src="sorces/">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <script src="sorces/jquery-3.5.1.slim.min.js"></script>
    <script src="sorces/popper.min.js"></script>
    <script src="sorces/bootstrap.min.js"></script>
    <script src="sorces/base64.js"></script>
    <script type="text/javascript">
    
    function calcul(){
        var score = parseInt($('input[name=answer1]:checked', '#questionsForm').val()) + parseInt($('input[name=answer2]:checked', '#questionsForm').val()) + parseInt($('input[name=answer3]:checked', '#questionsForm').val()) + parseInt($('input[name=answer4]:checked', '#questionsForm').val()) + parseInt($('input[name=answer5]:checked', '#questionsForm').val()) + parseInt($('input[name=answer6]:checked', '#questionsForm').val()) + parseInt($('input[name=answer7]:checked', '#questionsForm').val()) + parseInt($('input[name=answer8]:checked', '#questionsForm').val()) + parseInt($('input[name=answer9]:checked', '#questionsForm').val()) + parseInt($('input[name=answer10]:checked', '#questionsForm').val());
        
        document.getElementById('result').textContent = score.toString() + " de 10 Preguntas";    
        //document.getElementById('btn').disable = true;
    }
    
    // This will be executed when the document is ready
    $(function save() {

        // This will act when the submit BUTTON is clicked
        $("#questionsForm").submit(function (event) {
            event.preventDefault();
            var txtData = calcul();
        });

    });
        
</script>

</head>

<body>
    <div class="container">
        <section title="title">
            <h1 id="titleTest">Cuestionario Pre - Modulo 1</h1>
        </section>
        <section id="questions">
            <form action="" method="post" id="questionsForm">
                <div id="question1">
                    <p id="question">1.	La comunicación asertiva es una forma de encuentro entre las personas, donde ambas se predisponen a escuchar a la otra persona.</p>
                   <div id="inputName">
                        <input type="text" name="firstname" id="firstname" class="form-control" width="" pattern="[a-zA-Z]+" placeholder="Introduzca su Nombre" required="required">
                        <input type="text" name="lastname" id="lastname" class="form-control" width="" pattern="[a-zA-Z]+" placeholder="Introduzca sus Apellidos" required="required">
                   </div> 
                   <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer1' value='1'/><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer1' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer1' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div> 
                <div id="question2">
                    <p id="question">2.	Cuando las personas se comunican asertivamente manifiestan lo que piensan, sienten y hacen, valorando la capacidad de comprensión de la otra persona.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer2' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer2' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer2' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>
                <div id="question3">
                    <p id="question">3.	Es responsabilidad de las madres y de los padres enseñar a sus hijas e hijos a resolver problemas, si los hubieran, con empatía, aceptación y congruencia.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer3' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer3' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer3' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>
                <div id="question4">
                    <p id="question">4.	Las madres y los padres tienen el deber de imponer sus pensamientos, sentimientos y comportamientos a sus hijos e hijas.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer4' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer4' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer4' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>
                <div id="question5">
                    <p id="question">5.	Una madre o un padre, nunca debería disculparse por un error, pues eso le hace perder autoridad.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer5' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer5' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer5' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>        
                <div id="question6">
                    <p id="question">6.	Autoconcepto, autoestima y autoeficacia son sinónimos.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer6' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer6' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer6' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>        
                <div id="question7">
                    <p id="question">7.	La manera más efectiva de regular las conductas que consideramos inapropiadas en nuestras hijas e hijos es por medio del castigo.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer7' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer7' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer7' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>        
                <div id="question8">
                    <p id="question">8.	Como madres o padres, podemos negociar todo con nuestras hijas e hijos.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer8' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer8' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer8' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>        
                <div id="question9">
                    <p id="question">9.	Permitir que nuestras hijas e hijos se expresen es vital para enseñarles el Buen Trato.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer9' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer9' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer9' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>        
                <div id="question10">
                    <p id="question">10.	Los valores son universales y debemos imponerlos en caso de que las otras personas no cuenten con ellos.</p>
                    <div>
                        <div id="altcontainer" class="notranslate">
                           <label class='radiocontainer' id='label1'>Verdadero
                           <input type='radio' name='answer10' value='0' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label2'>Falso
                           <input type='radio' name='answer10' value='1' /><span class='checkmark'></span></label>
                           <label class='radiocontainer' id='label3'>Estoy en duda
                           <input type='radio' name='answer10' value='0' checked/><span class='checkmark'></span></label>
                        </div>
                    </div>
                </div>
                <div id="btn-cont">                             
                    <button type="submit" id="btn" name="calculate" data-toggle="modal" data-target="#staticBackdrop"><span>Enviar</span></button>
                </div>
            </form>
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Su Puntuacion</h5>
                  </div>
                  <div class="modal-body">
                    <span class="label label-default">Respuestas Correctas:</span>
					<span class="label label-default" id="result"></span><br>
                  </div>
                  <div class="modal-footer">
                    <form method="post" action="sendTest1.php">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Revisa Tus Respuestas</button>
                        <button type="submit" class="btn btn-primary">Cerrar para continuar</button>    
                        
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
   <script src=""></script>                     
</body>
</html>

