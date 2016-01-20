<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include_once './lib/bootstrap.php';
        ?>
        <meta charset="UTF-8">
        <title>PagFoco</title>
    </head>
    <body>
        Login
        <form action="lib/logar.php">
            <div class="input-group">
                <input type="text" name="usuario"class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                <input type="text" name="senha" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                
            </div>
        </form>
    </body>
</html>
