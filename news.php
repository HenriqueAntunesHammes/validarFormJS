<DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
            function validar(){
                var email = formuser.email.value;

                if(email == "" || email.indexOf('@') == -1 ){
                    alert('Preencha o campo E-mail.');
                    formuser.email.focus();
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <h1>Teste Validar Form</h1>
        <form name="formuser" action="enviar.php" method="POST">
            E-mail:<input type="text" name="email" >
            <input type="submit" onclick="return validar()">
        </form>
    </body>
</html>
