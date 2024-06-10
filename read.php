<?php
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);
?>
<h1>leer mensajes</h1>

<div class="container listado">
    <div class="cabecera fila">
        <div class="campoCabecera">
            ID
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensaje
        </div>
    </div>
    <?php
        $num=0;
        while($row = $result->fetch_assoc()){
            $num++;
            $paridad="impar";
            if($num%2==0){
                $paridad="par";
            }
            //paridad me indica sila fila es par o inpar
            ?>
            <div class="fila <?=$paridad?>">
                    <div class="campo"><?=$row['id'];?></div>
                    <div class="campo"><?=$row['nombre'];?></div>
                    <div class="campo"><?=$row['telefono'];?></div>
                    <div class="campo"><?=$row['correo'];?></div>
                    <div class="campo"><?=$row['mensaje'];?></div>
            </div>
            <?php
        }
    ?>

    <?php
        include 'footer.php';
    ?>
</div>