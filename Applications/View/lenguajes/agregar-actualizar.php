<h1 class="text-light">Administración de idiomas<span class="mif-section place-right"></span></h1>
<hr class="thin bg-grayLighter"><br>
<button form = "form-section" class = "button primary"><span class="mif-floppy-disk"></span> Guardar...</button>
<a href="/idiomas/listado" class="button warning"><span class="mif-list2"></span> Listados</a>
<a href="/idiomas" class="button default"><span class="mif-layers"></span> Limpiar</a>

<hr class="thin bg-grayLighter"><br>
<form id="form-section" method="post" action="" data-role="validator"
      data-on-error-input="notifyOnErrorInput"
      data-show-error-hint="false">
    <input type="hidden" name="action" value="<?=$action?>">
    <input type="hidden" name="pk" value="<?= (isset($rs["pk_pagina"]) ? $rs["pk_pagina"] : '') ?>">

    <div class="input-control text" style="width: 20%">
        <label>Codigo Idiomas</label>
        <input type="text" name="codigo_idioma" data-validate-func="required" data-validate-hine="This field can not be empty!">
    </div>
    <p class="clear"></p>
    <div class="input-control text" style="width: 60%">
        <label>Nombre del Idiomas</label>
        <input type="text" name="nombre_idioma" data-validate-func="required" data-validate-hine="This field can not be empty!">
    </div>
    <div class="clear"></div>
</form>