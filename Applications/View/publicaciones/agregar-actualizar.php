<h1 class="text-light">Publicación<span class="mif-section place-right"></span></h1>
<hr class="thin bg-grayLighter"><br>
<button form = "form-publicador" class = "button primary"><span class="mif-floppy-disk"></span> Guardar...</button>
<a href="/paginas/listado" class="button warning"><span class="mif-list2"></span> Listados</a>
<a href="/paginas" class="button default"><span class="mif-layers"></span> Limpiar</a>
<hr class="thin bg-grayLighter"><br>
<div class="clear"></div>
<br>

<script type="text/javascript" src="/Public/components/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="/Public/js/publicador.js"></script>
<script type="text/javascript" src="/Public/js/upload.js"></script>


<form id="form-publicador" method="post" data-role="validator"
      data-on-error-input="notifyOnErrorInput"
      data-show-error-hint="false">
    <div class="tabcontrol2" data-role="tabcontrol">
        <ul class="tabs">
            <li><a href="#multimedia">Ingresa imagenes o videos a tu publicacion</a></li>
            <li><a href="#detalle">Detalle de la publicacion</a></li>
        </ul>
        <div class="frames">
            <div class="frame" id="multimedia">
                <div id="barra-progreso">
                    <progress></progress>
                    <p>100 %</p>
                </div>

                <div class="icon-foto" id="photo" onclick="uploadImage('photo')">
                    <img src="/Public/img/ico-photo.png" >
                    <i>Foto principal</i>
                </div>
                <div class="icon-foto" id="photo1" onclick="uploadImage('photo1')">
                    <img src="/Public/img/ico-photo.png">
                </div>
                <div class="icon-foto" id="photo2" onclick="uploadImage('photo2')">
                    <img src="/Public/img/ico-photo.png">
                </div>
                <div class="clear"></div>
                <div class="icon-foto" id="photo3" onclick="uploadImage('photo3')">
                    <img src="/Public/img/ico-photo.png">
                </div>
                <div class="icon-foto" id="photo4" onclick="uploadImage('photo4')">
                    <img src="/Public/img/ico-photo.png">
                </div>
                <div class="icon-foto" id="photo5" onclick="uploadImage('photo5')">
                    <img src="/Public/img/ico-photo.png">
                </div>
                <div class="clear"></div>
            </div>
            <div class="frame" id="detalle">
                <?php
                    include('form-detalle.php');
                ?>
            </div>
        </div>
    </div>



</form>
<form method="post" accept-charset="utf-8" name="form1">
    <input name="hidden_data" id='hidden_data' type="hidden"/>
</form>
<form id="my_form" action="/Applications/Ajax/upload.php" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
    <input name="image2" id = "imagen_upload2" type="file"  />
</form>
