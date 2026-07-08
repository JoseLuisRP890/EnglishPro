<section class="section">

    <div class="container">

        <div class="section__head">
            <span class="section__tag">Inscripciones</span>
            <h2>Gestión de Inscripciones</h2>
        </div>

        <div class="content-box">

            <a class="btn btn--primary"
               href="index.php?pagina=inscripciones&accion=agregar">
                Nueva Inscripción
            </a>

            <br><br>

            <?php if(isset($_GET['msg'])): ?>

                <p class="form-success">
                    Inscripción eliminada correctamente.
                </p>

            <?php endif; ?>

            <div style="overflow:auto;">

                <table style="width:100%; border-collapse:collapse;">

                    <tr>
                        <th>ID</th>
                        <th>Estudiante</th>
                        <th>Curso</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>

                    <?php foreach($inscripciones as $inscripcion): ?>

                    <tr>

                        <td><?= $inscripcion['id_inscripcion']; ?></td>

                        <td>
                            <?= $inscripcion['nombre']; ?>
                            <?= $inscripcion['apellido']; ?>
                        </td>

                        <td><?= $inscripcion['curso']; ?></td>

                        <td><?= $inscripcion['fecha_inscripcion']; ?></td>

                        <td>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=inscripciones&accion=editar&id=<?= $inscripcion['id_inscripcion']; ?>">
                                Editar
                            </a>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=inscripciones&accion=eliminar&id=<?= $inscripcion['id_inscripcion']; ?>"
                               onclick="return confirm('¿Eliminar inscripción?');">
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