<?php
$con = @mysqli_connect('localhost', 'root', '12345', 'chat') or die (mysqli_error());
$xl = mysqli_select_db($con, 'chat') or die (mysqli_error());

?>

<?php
$usuario = $_POST['usuario'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO mensagens(usuario,mensagem) VALUES ('{$usuario}','{$mensagem}')";
$resultado = mysqli_query($con, $sql);


if($resultado) 
    echo "mensagens enviadas";
else
    echo "ops algo deu errado";
?>





