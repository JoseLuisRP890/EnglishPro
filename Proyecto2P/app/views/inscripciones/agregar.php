<section class="section">

    <div class="container">

        <div class="content-box">

           <div class="section__head">
            <span class="section__tag">Inscripciones</span>
            <h2>Nueva Inscripción</h2>
           </div>

            <form method="POST" class="contact-form">

                <div class="form-group">

                    <label>Estudiante</label>

                    <select name="id_estudiante" required>

                        <option value="">Seleccione...</option>

                        <?php foreach($estudiantes as $estudiante): ?>

                            <option value="<?= $estudiante['id_estudiante']; ?>">

                                <?= $estudiante['nombre']; ?>
                                <?= $estudiante['apellido']; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="form-group">

                    <label>Curso</label>

                    <select name="id_curso" required>

                        <option value="">Seleccione...</option>

                        <?php foreach($cursos as $curso): ?>

                            <option value="<?= $curso['id_curso']; ?>">

                                <?= $curso['nombre']; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary">

                        Guardar Inscripción

                    </button>

                    <a
                        class="btn btn--ghost"
                        href="index.php?pagina=inscripciones">

                        Cancelar

                    </a>

                </div>

            </form>

        </div>

    </div>

</section>