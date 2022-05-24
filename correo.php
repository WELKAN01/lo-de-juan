<?php
    $destinatario=$_POST['correo'];
    // esto es al correo al que se enviará el mensaje
    $asunto="BOLETA";
    $mensaje="<hr> BUENOS DIAS".$nombre."SU BOLETA ES DE:<br>".$facturacum."<br> <hr>".
            "TOTAL S/.:".$total;
    $email="POLLERIA24124124@GMAIL.COM";
    $header="BOLETA";
    $mensajeCompleto=$mensaje."\nAtentamente:"."POLLERIA LA DE JUAN";
    mail($destinatario,$asunto,$mensajeCompleto,$header);
?>