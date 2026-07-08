<section class="section">

    <div class="container">

        <div class="section__head">
            <span class="section__tag">Estudiantes</span>
            <h2>Listado de Estudiantes</h2>
        </div>

        <div class="content-box">

            <form method="GET" class="hero__actions" style="margin-bottom:20px;">

                <input type="hidden" name="pagina" value="estudiantes">

                <input
                    type="text"
                    name="buscar"
                    placeholder="Buscar estudiante..."
                    value="<?= $_GET['buscar'] ?? '' ?>">

                <button class="btn btn--primary" type="submit">
                    Buscar
                </button>

                <a class="btn btn--primary"
                   href="index.php?pagina=estudiantes&accion=agregar">
                    Nuevo Estudiante
                </a>

            </form>

            <?php if(isset($_GET['msg'])): ?>

                <p class="form-success">
                    Estudiante eliminado correctamente.
                </p>

            <?php endif; ?>

            <div style="overflow:auto;">

                <table style="width:100%; border-collapse:collapse;">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>

                    <?php foreach($estudiantes as $estudiante): ?>

                    <tr>

                        <td><?= $estudiante['id_estudiante']; ?></td>

                        <td><?= $estudiante['nombre']; ?></td>

                        <td><?= $estudiante['apellido']; ?></td>

                        <td><?= $estudiante['correo']; ?></td>

                        <td><?= $estudiante['telefono']; ?></td>

                        <td>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=estudiantes&accion=editar&id=<?= $estudiante['id_estudiante'] ?>">
                                Editar
                            </a>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=estudiantes&accion=eliminar&id=<?= $estudiante['id_estudiante'] ?>"
                               onclick="return confirm('¿Está seguro de eliminar el estudiante <?= $estudiante['nombre'] ?>?');">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                </table>

            </div>

        </div>

    </div>

</section>