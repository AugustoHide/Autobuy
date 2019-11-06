<?php
$con = @mysqli_connect('localhost', 'root', '12345', 'chat') or die (mysqli_error());
$xl = mysqli_select_db($con, 'chat') or die (mysqli_error());

?>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/chat.css">
<script type="text/javascript">
function Nova(){
    setTimeout("window.location='chat.php'",20);
}

</script>



    </head>

    <body>
        
        <div class="container">
        <h1>CHAT</h1>
            <div class="superior">
            <?php
            $np = ("SELECT * FROM mensagens");
            $res = mysqli_query($con,$np);
            while($ln = mysqli_fetch_array($res)) {
                $usuario = $ln['usuario'];
                $mensagem = $ln['mensagem'];
            
            echo "<br>$usuario : $mensagem";
            }
        ?>
        </div> 
            </div>
            </body>
            <div class="campos">
                <form action="enviar.php" method="post">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <textarea cols="50" name="mensagem"  placeholder="Mensagens" wrap="hard"></textarea>
                    <input type="submit" name="enviar" onClick="Nova()">
                </form>
            </div> 
                    
        
    
    </html>