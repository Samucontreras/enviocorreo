<?php
  
        if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['asunto']) && isset($_POST['mensaje']))
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $header = "From: noreply@example.com" . //quien lo envia
            $header = "Reply-to: noreply@example.com" .//quien recibe
            $header.= "X-Mailer: PHP/" .phpversion();
            
            $mail = mail($email, $asunto, $mensaje ,$header);

            if($mail)
            {
                echo "<h4>¡Mail enviado exitosamente!</h4>";
            }
            else{
                echo "correo no enviado";
            }
        
    
?>