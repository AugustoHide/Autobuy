<!DOCTYPE>

<html>

<head>
    <meta charset="UTF-8">
    <title>CHAT</title>

    <link rel="stylesheet" href="estilo.css" type="text/css" />


    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>




</head>

<body>

    <div class="centeralised">
        <div class="chathistorico"></div>

        <div class="chatbox">

            <form action="" method="POST">

                <textarea class="txtarea" id="mensagem" name="mensagem"></textarea>
            </form>





        </div>
    </div>

    <script>

    $(document).ready(function(){       
        iniciaChat();
    });


    $("#mensagem").keyup(function(e) {

        var mensagem = $(this).val();

        if (e.which == 13) {
            $.post('handlers/ajax.php?action=SendMessage&mensagem=' + mensagem, function(response) {
                iniciaChat();
                $('#mensagem').val('');
            });

        }
    });

    function iniciaChat()
    {
        $.post('handlers/ajax.php?action=getChat',  function(response) {
                $('.chathistorico').html(response);
            });
    }


setInterval(function(){
    iniciaChat();
}, 2000);
    </script>



</body>

</html>