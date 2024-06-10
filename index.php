<?php
    include 'db.php';
    include 'header.php';
?>
<section class="hero">
        <div class="contenido-hero">
            <h2>Formacion a tu ritmo</h2>
            <div class="informacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-3d-cube-sphere" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 17.6l-2 -1.1v-2.5" />
                    <path d="M4 10v-2.5l2 -1.1" />
                    <path d="M10 4.1l2 -1.1l2 1.1" />
                    <path d="M18 6.4l2 1.1v2.5" />
                    <path d="M20 14v2.5l-2 1.12" />
                    <path d="M14 19.9l-2 1.1l-2 -1.1" />
                    <path d="M12 12l2 -1.1" />
                    <path d="M18 8.6l2 -1.1" />
                    <path d="M12 12l0 2.5" />
                    <path d="M12 18.5l0 2.5" />
                    <path d="M12 12l-2 -1.12" />
                    <path d="M6 8.6l-2 -1.1" />
                </svg>
                <p>Aprende desde casa</p>
            </div>
            <a class="boton" href="Tutoriales.php">Tutoriales</a>
        </div>
    </section>
    <main class="contenedor sombra">
        <h2>Mi contenido</h2>
        <div class="micontenido">
            <section class="contenido">
                <h3>Tutoriales</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <path d="M3 6l0 13" />
                        <path d="M12 6l0 13" />
                        <path d="M21 6l0 13" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </section>
            <section class="contenido">
                <h3>Novedades</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                        <path d="M6 9l12 0" />
                        <path d="M6 12l3 0" />
                        <path d="M6 15l2 0" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>            
            </section>
            <section class="contenido">
                <h3>Blog</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M7 8h10" />
                        <path d="M7 12h10" />
                        <path d="M7 16h10" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>            
            </section>
        </div>
    </main>
<?php
    include 'footer.php';
?>