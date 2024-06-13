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
        <div class="campoCabecera">
            Accion
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
                    <div class="campo"><?=$row['mensaje'];?>
                    <?=substr(0, 51)?>...
                </div>
                    <div class="btm-borrar">
                        <a href="borrar.php?id=<?=$row['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-filled" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" stroke-width="0" fill="currentColor" />
                            <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" stroke-width="0" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
            </div>
            <?php
        }
    ?>

    <?php
        include 'footer.php';
    ?>
</div>