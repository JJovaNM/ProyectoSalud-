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
                <div class="logo-icon">♥</div>
                <span>Salud <strong>Cerca</strong></span>
            </div>


            <!-- BUSCADOR -->
            <div class="search-box">

                <div class="search-field">
                    <span class="search-icon">⌕</span>

                    <div>
                        <small>¿Qué necesitas?</small>
                        <span>Servicio o especialidad</span>
                    </div>
                </div>

                <div class="search-field">
                    <span class="search-icon">✚</span>

                    <div>
                        <small>Tipo de servicio</small>
                        <span>Todos los servicios⌄</span>
                    </div>
                </div>


                <button class="search-button">
                    Buscar
                </button>

            </div>


    <!-- BOTONES -->
    <div class="auth-buttons">
        <button class="login-button">
            Iniciar sesión
        </button>

        <button class="register-button">
            Registrarse
        </button>
    </div>

</header>

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

        <section class="resultados">

            <div class="doctores-container">

                <div class="titulo-resultados">
                    <h2>Doctores cerca de ti</h2>
                </div>

                <div class="doctores-slider" id="doctoresSlider">

                    <article class="doctor-card">
                        <div class="doctor-info">

                            <div class="doctor-avatar">
                                DR
                            </div>

                            <div class="doctor-datos">
                                <h3>Dr. Juan Pérez</h3>
                                <span>Medicina general</span>

                                <p class="ubicacion">
                                    📍 Centro de Salud Huetamo
                                </p>

                                <div class="doctor-calificacion">
                                    ⭐ 4.9
                                </div>
                            </div>

                        </div>

                        <div class="doctor-footer">
                            <span>Disponible hoy</span>
                            <button>Ver perfil →</button>
                        </div>
                    </article>


                    <article class="doctor-card">
                        <div class="doctor-info">

                            <div class="doctor-avatar">
                                AL
                            </div>

                            <div class="doctor-datos">
                                <h3>Dra. Ana López</h3>
                                <span>Odontología</span>

                                <p class="ubicacion">
                                    📍 Clínica Dental Huetamo
                                </p>

                                <div class="doctor-calificacion">
                                    ⭐ 4.8
                                </div>
                            </div>

                        </div>

                        <div class="doctor-footer">
                            <span>Disponible mañana</span>
                            <button>Ver perfil →</button>
                        </div>
                    </article>


                    <article class="doctor-card">
                        <div class="doctor-info">

                            <div class="doctor-avatar">
                                CM
                            </div>

                            <div class="doctor-datos">
                                <h3>Dra. Carla Martínez</h3>
                                <span>Psicología</span>

                                <p class="ubicacion">
                                    📍 Consultorio particular
                                </p>

                                <div class="doctor-calificacion">
                                    ⭐ 4.7
                                </div>
                            </div>

                        </div>

                        <div class="doctor-footer">
                            <span>Disponible hoy</span>
                            <button>Ver perfil →</button>
                        </div>
                    </article>


                    <article class="doctor-card">
                        <div class="doctor-info">

                            <div class="doctor-avatar">
                                RG
                            </div>

                            <div class="doctor-datos">
                                <h3>Dr. Roberto García</h3>
                                <span>Cardiología</span>

                                <p class="ubicacion">
                                    📍 Hospital Regional
                                </p>

                                <div class="doctor-calificacion">
                                    ⭐ 4.9
                                </div>
                            </div>

                        </div>

                        <div class="doctor-footer">
                            <span>Disponible viernes</span>
                            <button>Ver perfil →</button>
                        </div>
                    </article>

                </div>

            </div>


            <div class="mapa-container">

                <div class="mapa-header">
                    <h2>Servicios cercanos</h2>

                    <button class="btn-mapa">
                        Ver mapa completo →
                    </button>
                </div>

                <div class="mapa-placeholder">

                    <div class="mapa-centro">
                        <div class="mapa-pulso"></div>
                        <span>📍</span>
                    </div>

                    <div class="mapa-pin pin-1">📍</div>
                    <div class="mapa-pin pin-2">📍</div>
                    <div class="mapa-pin pin-3">📍</div>

                    <div class="mapa-texto">
                        <strong>Tu ubicación</strong>
                        <span>Huetamo, Michoacán</span>
                    </div>

                </div>

            </div>

        </section>

    </div>


    <script src="script.js"></script>

</body>

</html>