<?php
    include 'header.php';
?>
<h1>Contactanos</h1>
<main>
    <section>
        <h2>Contacto</h2>
        <form class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Contactanos utilizando tus datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">            
                        <div>
                            <label for="">Nombre:</label>
                            <input class="input-text" type="text" name="nombre" placeholder="Tu nombre">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Teléfono:</label>
                            <input class="input-text" type="tel" name="telefono" id="" placeholder="Tu Teléfono">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Correo</label>
                            <input class="input-text" type="email" name="correo" id="" placeholder="Tu correo">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje</label>
                            <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div><!--contenedor-campos-->
            </fieldset>
        </form>
    </section>
</main>

<?php
    include 'footer.php';
?>