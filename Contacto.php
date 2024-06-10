<?php
    include 'header.php';
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $msg=$_GET['msg'];
        ?>
    
    <div class="mensaje container <?php echo $status; ?>">
        <p><?php echo $msg ?></p>
    </div>

        <?php
    }
?>
<h1>Contacto</h1>
<main>
    <section>
        <form class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Contáctame enviando tus datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <div>
                            <label for="">Nombre:</label>
                            <input class="input-text" type="text" name="Nombre" placeholder="Tu Nombre">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Teléfono:</label>
                            <input class="input-text" type="tel" name="Teléfono" placeholder="Tu Teléfono">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Correo:</label>
                            <input class="input-text" type="email" name="Correo" placeholder="Tu Correo">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje</label>
                            <textarea name="Mensaje" ></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="input-text" class="boton" type="submit" value="Enviar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
<main/>
<?php
    include 'footer.php';
?>