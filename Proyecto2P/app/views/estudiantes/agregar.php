<section class="section">

    <div class="container">

        <div class="content-box">

            <div class="section__head">
                <span class="section__tag">Estudiantes</span>
                <h2>Registrar Estudiante</h2>
            </div>

            <form method="POST" class="contact-form">

                <div class="form-group">
                    <label>Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        placeholder="Nombre"
                        required>
                </div>

                <div class="form-group">
                    <label>Apellido</label>
                    <input
                        type="text"
                        name="apellido"
                        placeholder="Apellido"
                        required>
                </div>

                <div class="form-group">
                    <label>Correo</label>
                    <input
                        type="email"
                        name="correo"
                        placeholder="correo@gmail.com"
                        required>
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <input
                        type="text"
                        name="telefono"
                        placeholder="Teléfono"
                        required>
                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary" type="submit">
                        Guardar Estudiante
                    </button>

                    <a class="btn btn--ghost"
                       href="index.php?pagina=estudiantes">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</section>