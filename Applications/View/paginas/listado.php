
<h1 class="text-light">Listado de página web<span class="mif-section place-right"></span></h1>
<hr class="thin bg-grayLighter"><br>

<a href="/paginas" class = "button primary"><span class="mif-plus"></span> Nuevo</a>
<a class="button warning" onclick="accionBoton('actualizar','/paginas/buscar')"><span class="mif-loop2"></span> Actualizar</a>
<a class="button alert" onclick="accionBoton('eliminar','/paginas/listado/eliminar')"><span class="mif-cross"></span> Eliminar</a>

<hr class="thin bg-grayLighter"><br>

<table class="dataTable border bordered no-footer" >
    <thead>
        <tr>
            <th style="width: 40px"></th>
            <th class="sortable-column">Página</th>
            <th class="sortable-column">Título</th>
            <th class="sortable-column">Url</th>
            <th class="sortable-column">Descripción</th>
            <th style="width: 80px" class="sortable-column">Estatus</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $rs =  $Spry->Services()->Controller->getListadoPaginas();
        if(!is_null($rs)){
            foreach ($rs as $key => $value) {
                if($value['status'] == 'A'){
                    $check = 'checked = checked ';
                }else{
                    $check = '';
                }
                echo '
                    <tr>
                        <td>
                            <label class="input-control checkbox small-check no-margin">
                                <input type="radio" name="item" class="check-item" id = "'.$value["pk_pagina"].'">
                                <span class="check"></span>
                            </label>
                        </td>
                        <td>'.$value['pagina'].'</td>
                        <td>'.$value['titulo'].'</td>
                        <td>
                                '.$value['url'].'
                        </td>
                        <td>'.$value['descripcion'].'</td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="pagina-activa" '.$check.'>
                                <span class="check"></span>
                            </label>
                        </td>
                    </tr>
                ';
            }
        }
    ?>
    </tbody>
</table>

<script>

</script>