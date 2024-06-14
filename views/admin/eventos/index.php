<h2 class="dashboars__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contendor-boton">
    <a class="dashboard__boton" href="/admin/eventos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Evento
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
    <?php if(!empty($eventos)) { ?>
        <table class="table" id="tabla">
            <thead class="table__thead">
                <tr>
                    <th scope='col' class="table__th">Evento</th>
                    <th scope='col' class="table__th">Categoria</th>
                    <th scope='col' class="table__th">Dia y Hora</th>
                    <th scope='col' class="table__th">Ponente</th>
                    <th scope='col' class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach($eventos as $evento) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $evento->nombre;?>
                        </td>     
                        <td class="table__td">
                            <?php echo $evento->categoria->nombre;?>
                        </td>    
                        <td class="table__td">
                            <?php echo $evento->dia->nombre . ", " . $evento->hora->hora;?>
                        </td>    
                        <td class="table__td">
                            <?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido;?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__mantenimiento table__mantenimiento--editar" href="/admin/eventos/editar?id=<?php echo $evento->id ?>">
                                <i class="fa-solid fa-pencil"></i>                           
                            </a>
                            <form id="frEliminar" method="POST" action="/admin/eventos/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
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
        <p class="text-center">No hay Eventos Aun</p>
    <?php } ?>
</div>

<?php
    echo $paginacion;
?>