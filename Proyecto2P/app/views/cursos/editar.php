<section class="section">

    <div class="container">

        <div class="content-box">

            <div class="section__head">
                <span class="section__tag">Cursos</span>
                <h2>Editar Curso</h2>
            </div>

            <form method="POST" class="contact-form">

                <input
                    type="hidden"
                    name="id"
                    value="<?= $curso['id_curso']; ?>">

                <div class="form-group">
                    <label>Nombre del curso</label>
                    <input
                        type="text"
                        name="nombre"
                        value="<?= $curso['nombre']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Nivel</label>
                    <select name="nivel" required>

                        <option value="Básico"
                            <?= $curso['nivel'] == "Básico" ? "selected" : ""; ?>>
                            Básico
                        </option>

                        <option value="Intermedio"
                            <?= $curso['nivel'] == "Intermedio" ? "selected" : ""; ?>>
                            Intermedio
                        </option>

                        <option value="Avanzado"
                            <?= $curso['nivel'] == "Avanzado" ? "selected" : ""; ?>>
                            Avanzado
                        </option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input
                        type="number"
                        step="0.01"
                        name="precio"
                        value="<?= $curso['precio']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Duración</label>
                    <input
                        type="text"
                        name="duracion"
                        value="<?= $curso['duracion']; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea
                        name="descripcion"
                        rows="5"><?= $curso['descripcion']; ?></textarea>
                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary" type="submit">
                        Actualizar Curso
                    </button>

                    <a class="btn btn--ghost"
                       href="index.php?pagina=cursos">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</section>