<section class="section">

    <div class="container">

        <div class="content-box">

            <div class="section__head">
                <span class="section__tag">Inscripciones</span>
                <h2>Editar Inscripción</h2>
            </div>

            <form method="POST" class="contact-form">

                <input
                    type="hidden"
                    name="id"
                    value="<?= $inscripcion['id_inscripcion']; ?>">

                <input
                    type="hidden"
                    name="id_estudiante"
                    value="<?= $inscripcion['id_estudiante']; ?>">

                <div class="form-group">

                    <label>Estudiante</label>

                    <input
                        type="text"
                        value="<?php
                            foreach($estudiantes as $estudiante){
                                if($estudiante['id_estudiante'] == $inscripcion['id_estudiante']){
                                    echo $estudiante['nombre'] . ' ' . $estudiante['apellido'];
                                }
                            }
                        ?>"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Curso</label>

                    <select name="id_curso" required>

                        <?php foreach($cursos as $curso): ?>

                            <option
                                value="<?= $curso['id_curso']; ?>"
                                <?= $curso['id_curso'] == $inscripcion['id_curso'] ? 'selected' : ''; ?>>

                                <?= $curso['nombre']; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary" type="submit">
                        Actualizar Curso
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