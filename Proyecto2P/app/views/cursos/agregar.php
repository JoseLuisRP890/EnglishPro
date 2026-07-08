<section class="section">

    <div class="container">

        <div class="content-box">

            <div class="section__head">
                <span class="section__tag">Cursos</span>
                <h2>Registrar Curso</h2>
            </div>

            <form method="POST" class="contact-form">

                <div class="form-group">
                    <label>Nombre del curso</label>
                    <input
                        type="text"
                        name="nombre"
                        placeholder="Nombre del curso"
                        required>
                </div>

                <div class="form-group">
                    <label>Nivel</label>
                    <select name="nivel" required>
                        <option value="">Seleccione un nivel</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Avanzado">Avanzado</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input
                        type="number"
                        step="0.01"
                        name="precio"
                        placeholder="Precio"
                        required>
                </div>

                <div class="form-group">
                    <label>Duración</label>
                    <input
                        type="text"
                        name="duracion"
                        placeholder="Duración"
                        required>
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea
                        name="descripcion"
                        rows="5"
                        placeholder="Descripción del curso"></textarea>
                </div>

                <div class="hero__actions">

                    <button class="btn btn--primary" type="submit">
                        Guardar Curso
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