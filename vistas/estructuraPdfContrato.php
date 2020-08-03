<?php


    function plantilla(){


        $palntilla = "
        <body>
          <table width='100%'>
        <tr>
          <td width='100%' style='text-align: center;'><img src='../images/osf.png'></td>
        </tr>
          <tr>
          <td width='100%' style='text-align: center;'><b style='color: #a1a1a1;'>Fecha: </b> <span style='color: #a1a1a1;'>".$fecha."</span><td>
          </tr>
        </table>
        <br>
        <div class='tituloDiv'>
          <h2 class='tituloDivH2'>Apreciados Familiares de: <br><span>dsfsdfsdfsdf</span></h2>
          <p class='tituloDivH2'>La organización San Frnacisco presenta a continuación los mensajes recibidos durante la trasmision en la Sala Numero $sala</p>
        </div>
        <br>
        <br>";
         
          $palntilla .= "<div class='mensajes'>
          <div class='mensaje'><span class='a'>Enviado Por: </span><span class='b'>asdasdas</span></div>
          <div class='mensaje'><span class='a'>Mensaje:  </span><span class='b'>asdasd</span></div>
          <div class='mensaje'><span class='a'>Celular: </span><span class='b'> asdas</span></div>
          <div class='mensaje'><span class='a'>Email: </span><span class='b'>asdasd </span></div>
          </div>
          <hr>
          <br>
          ";
        $palntilla .= "
    </body>";
    return $palntilla;


    }


?>