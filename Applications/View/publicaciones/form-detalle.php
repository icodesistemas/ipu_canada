<div class="input-control text" style="width: 98%">
    <label>Título de la publicación:</label>
    <input type="text" maxlength="200" name="titulo_publicacion" placeholder="Titulo descriptivo" data-validate-func="required">
</div>
<div class="clear"></div><br>
<div class="input-control text">
    <label>Página</label>
    <select name="pk_pagina" id="pk_pagina">
        <?php
        echo $Spry->Services()->Functions->getLoadCombo('tb_paginas','pk_pagina,pagina');
        ?>
    </select>

</div>
<div class="input-control text" data-role="datepicker">
    <label>Para ser publicado</label>
    <input type="text" name="fecha_publicacion" data-validate-func="required">
    <button class="button"><span class="mif-calendar"></span></button>
</div>
<label class="switch">Publicación Activa?</label>
<label class="switch">
    <input type="checkbox" name="publicacion-activa" <?=(isset($rs["status"]) ? 'checked = "checked"' : '') ?>>
    <span class="check"></span>
</label>
<div class="clear"></div><br>
<div class="input-control textarea" style="width: 98%">
    <label>Descripción de la publicación:</label>
    <textarea id="textarea-descripcion" name="textarea-descripcion"></textarea>
</div>