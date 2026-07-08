<section class="section">

    <div class="container">

        <div class="section__head">
            <span class="section__tag">Cursos</span>
            <h2>Administración de Cursos</h2>
        </div>

        <div class="content-box">

            <form method="GET" class="hero__actions" style="margin-bottom:20px;">

                <input type="hidden" name="pagina" value="cursos">

                <input
                    type="text"
                    name="buscar"
                    placeholder="Buscar curso..."
                    value="<?= $_GET['buscar'] ?? '' ?>">

                <button class="btn btn--primary" type="submit">
                    Buscar
                </button>

                <a class="btn btn--primary"
                   href="index.php?pagina=cursos&accion=agregar">
                    Nuevo Curso
                </a>

            </form>

            <?php if(isset($_GET['msg'])): ?>

                <p class="form-success">
                    Curso eliminado correctamente.
                </p>

            <?php endif; ?>

            <div style="overflow:auto;">

                <table style="width:100%; border-collapse:collapse;">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Nivel</th>
                        <th>Precio</th>
                        <th>Duración</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>

                    <?php foreach($cursos as $curso): ?>

                    <tr>

                        <td><?= $curso['id_curso'] ?></td>

                        <td><?= $curso['nombre'] ?></td>

                        <td><?= $curso['nivel'] ?></td>

                        <td>$<?= $curso['precio'] ?></td>

                        <td><?= $curso['duracion'] ?></td>

                        <td><?= substr($curso['descripcion'], 0, 40) ?>...</td>

                        <td>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=cursos&accion=editar&id=<?= $curso['id_curso'] ?>">
                                Editar
                            </a>

                            <a class="btn btn--ghost"
                               href="index.php?pagina=cursos&accion=eliminar&id=<?= $curso['id_curso'] ?>"
                               onclick="return confirm('¿Está seguro de eliminar el curso <?= $curso['nombre'] ?>?');">
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