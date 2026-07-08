<section class="section">

    <div class="container">

        <div class="content-box">

            <div class="section__head">
                <span class="section__tag">Estudiantes</span>
                <h2>Editar Estudiante</h2>
            </div>

            <form method="POST" class="contact-form">

                <input
                    type="hidden"
                    name="id"
                    value="<?= $estudiante['id_estudiante']; ?>">

                <div class="form-group">
                    <label>Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        value="<?= $estudiante['nombre']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Apellido</label>
                    <input
                        type="text"
                        name="apellido"
                        value="<?= $estudiante['apellido']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Correo</label>
                    <input
                        type="email"
                        name="correo"
                        value="<?= $estudiante['correo']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <input
                        type="text"
                        name="telefono"
                        value="<?= $estudiante['telefono']; ?>"
                        required>
                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary" type="submit">
                        Actualizar Estudiante
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