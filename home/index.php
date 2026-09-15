<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Salud Cerca</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="contenedor-principal">

        <!-- ==================== NAVBAR ==================== -->

        <header class="navbar">

            <!-- LOGO -->
            <div class="logo">
                <div class="logo-icon">
                    ♥
                </div>

                <span>
                    Salud <strong>Cerca</strong>
                </span>
            </div>


            <!-- BOTONES -->
            <div class="acciones">

                <button class="btn-login">
                    Iniciar sesión
                </button>

                <button class="btn-registro">
                    Registrarse
                </button>

            </div>

        </header>


        <!-- ==================== HERO ==================== -->

        <main class="hero">
            <div class="hero-contenido">

                <h2>
                    Encuentra a tu Doctor
                </h2>

            </div>


            <!-- ==================== BUSCADOR ==================== -->

            <div class="buscador">

                <!-- Servicio -->
                <div class="campo">

                    <span class="icono">⌕</span>

                    <div>
                        <label>¿Qué necesitas?</label>
                        <input
                            type="text"
                            placeholder="Servicio o especialidad">
                    </div>

                </div>


                <!-- Ubicación -->
                <div class="campo">

                    <span class="icono">⌖</span>

                    <div>
                        <label>Ubicación</label>
                        <input
                            type="text"
                            placeholder="Ciudad o localidad">
                    </div>

                </div>


                <!-- Tipo -->
                <div class="campo">

                    <span class="icono">✚</span>

                    <div>
                        <label>Tipo de servicio</label>

                        <select>
                            <option>Todos los servicios</option>
                            <option>Centro de salud</option>
                            <option>Hospital</option>
                            <option>Clínica</option>
                            <option>Farmacia</option>
                            <option>Laboratorio</option>
                        </select>

                    </div>

                </div>


                <button class="btn-buscar">
                    Buscar
                </button>

            </div>


            <!-- ==================== CATEGORÍAS ==================== -->

            <section class="categorias">

                <h2>
                    Servicios de salud
                </h2>

                <div class="categorias-grid">


                    <button class="categoria activa">

                        <div class="categoria-icon">
                            ✚
                        </div>

                        <span>
                            Medicina general
                        </span>

                    </button>


                    <button class="categoria">

                        <div class="categoria-icon">
                            ♡
                        </div>

                        <span>
                            Odontología
                        </span>

                    </button>


                    <button class="categoria">

                        <div class="categoria-icon">
                            ⚕
                        </div>

                        <span>
                            Especialidades
                        </span>

                    </button>


                    <button class="categoria">

                        <div class="categoria-icon">
                            ◉
                        </div>

                        <span>
                            Laboratorios
                        </span>

                    </button>


                    <button class="categoria">

                        <div class="categoria-icon">
                            ♡
                        </div>

                        <span>
                            Psicología
                        </span>

                    </button>


                    <button class="categoria">

                        <div class="categoria-icon">
                            +
                        </div>

                        <span>
                            Farmacias
                        </span>

                    </button>


                </div>

            </section>

        </main>

    </div>

</body>

</html>