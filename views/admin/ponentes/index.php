<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contendor-boton">
    <a class="dashboard__boton" href="/admin/ponentes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Ponentes
    </a>
    <input
        type = "text"
        class = "dashboard__buscar"
        id="buscar"
        name="buscar"
        placeholder="Buscar..."                        
    /> 
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($ponentes)) { ?>
        <table class="table" id ="tabla">
            <thead class="table__thead">
                <tr>
                    <th scope='col' class="table__th">Nombre</th>
                    <th scope='col' class="table__th">Ubicacion</th>
                    <th scope='col' class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody" id="tabla">
                <?php foreach($ponentes as $ponente) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $ponente->nombre . " " . $ponente->apellido ;?>
                        </td>
                        <td class="table__td">
                            <?php echo $ponente->ciudad . ", " . $ponente->pais ;?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__mantenimiento table__mantenimiento--editar" href="/admin/ponentes/editar?id=<?php echo $ponente->id ?>">
                                <i class="fa-solid fa-user-pen"></i>                                
                            </a>
                            <form id="frEliminar" method="POST" action="/admin/ponentes/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $ponente->id; ?>">
                                <button class="table__mantenimiento table__mantenimiento--eliminar" type="submit" id="btEliminar">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">NO hay Ponentes Aun</p>
    <?php } ?>
</div>

<?php
    echo $paginacion;
?>