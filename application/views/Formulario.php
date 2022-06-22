<div class="alert alert-primary" role="alert">
  ¡Bienvenido al registro de visitas!</div>
<form method="post" action="Registro/RegistroDatosPersona">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Nombres<span class="red">*</span></label>
          <input type="text" class="form-control" id="Persona_Nombre" name="Persona_Nombre" placeholder="" required>
        </div>

        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Apellido Paterno<span class="red">*</span></label>
          <input type="text" class="form-control" id="Persona_ApellidoP" name="Persona_ApellidoP" placeholder="" required>
        </div>

        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Apellido Materno<span class="red">*</span></label>
          <input type="text" class="form-control" id="Persona_ApellidoM" name="Persona_ApellidoM" placeholder="" required>
        </div>

        <div class="mb-1"><br>
          <label for="exampleFormControlInput1" class="form-label">Sexo<span class="red">*</span></label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Persona_Sexo" name="Persona_Sexo" value="Femenino" required>
            <label class="form-check-label" for="inlineRadio1">Femenino</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Persona_Sexo" name="Persona_Sexo" value="Masculino" required>
            <label class="form-check-label" for="inlineRadio2">Masculino</label>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
          <input type="telefono" class="form-control" id="Persona_Telefono" name="Persona_Telefono" placeholder="">
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="Persona_Email" name="Persona_Email" placeholder="">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Rango de edad<span class="red">*</span></label>
          <select class="form-select" aria-label="Default select example" id="Edad_Id" name="Edad_Id" required>
            <option selected>Seleccione...</option>
            <?php
            foreach ($edades as $key => $value) {
            ?>
              <option value="<?= $value["Edad_Id"] ?>"><?= $value["Edad_Rango"] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">¿Qué área visita?<span class="red">*</span></label>
          <select class="form-select" aria-label="Default select example" id="Area_Id" name="Area_Id" required>
            <option value="">Seleccione...</option>

            <?php

            foreach ($areas as $key => $value) {
            ?>
              <option value="<?= $value["Area_Id"] ?>"><?= $value["Area_Nombre"] ?></option>
            <?php
            }
            ?>
          </select>
        </div>

      </div>
      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Motivo<span class="red">*</span></label>
          <input type="text" class="form-control" id="Visitante_MotivoVisita" name="Visitante_MotivoVisita" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Procedencia<span class="red">*</span></label>
          <select class="form-select form-select-sm" aria-label="Default select example" id="Procedencia_Id" name="Procedencia_Id" required>
            <option selected>Seleccione...</option>

            <?php
            foreach ($procedencias as $key => $value) {
            ?>
              <option value="<?= $value["Procedencia_Id"] ?>"><?= $value["Procedencia_Nombre"] ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mb-1">
          <label for="exampleFormControlInput1" style="display: none;" id="LabelProv" class="form-label">Elige tu proveedor:</label>
          <select class="form-select" aria-label="Default select example" style="display: none;" id="CatalogoProveedor_Id" name="CatalogoProveedor_Id" required>
            <?php
            foreach ($proveedores as $key => $value) {
            ?>
              <option value="<?= $value["CatalogoProveedor_Id"] ?>"><?= $value["CatalogoProveedor_Nombre"] ?></option>
            <?php
            }
            ?>
          </select>
          <label for="exampleFormControlInput1" id="labelRegP" style="display: none;" class="form-label">¿No se encuentra registrado tu proveedor?
            <a style="display: none;" id="labelRegP2" href="<?= base_url() . 'RegistroProveedores' ?>">Da clic aqui.</a>
          </label>

        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" style="display: none;" id="LabelDependencia" class="form-label">Elige tu dependencia:</label>
          <select class="form-select" aria-label="Default select example" style="display: none;" id="CatalogoDependencia_Id" name="CatalogoDependencia_Id" required>
            <?php
            foreach ($dependencias as $key => $value) {
            ?>
              <option value="<?= $value["CatalogoDependencia_Id"] ?>"><?= $value["CatalogoDependencia_Nombre"] ?></option>
            <?php
            }
            ?>
          </select>
          <label for="exampleFormControlInput1" id="labelD" style="display: none;" class="form-label">¿No se encuentra registrado tu dependencia? <a style="display: none;" id="labelD2" href="<?= base_url() . 'RegistroDependencias' ?>">Da clic aqui.</a>
          </label>

        </div>
      </div>
      <center><br>
        <button type="submit" class="btn btn-primary btn-lg">Registrar</button><br><br>
        <a class="btn btn-primary btn-lg" href="<?= base_url() . 'Ingreso_Sistema' ?>" role="button">Salir</a><br><br>
      </center>
    </div>
  </div>
</form>
<script>
  $(document).ready(function() {

    $('.select2').select2({
      placeholder: 'Select category',
      theme: 'bootstrap4',
      tags: true,
    });

    /*$("#form_registro").submit(function(e) {
      e.preventDefault();
      console.log($(this).serializeArray());
    })*/
  });

  /************* */
  /*$( "#Proveedor" ).click(function() {
  $( ".Procedencia" ).change();
  document.getElementById("LabelDependencia").style.display = "block";
});*/

  $(".form-select").change(function() {
    console.log($(this).val());
    if ($(this).val() == 2) {
      $("#CatalogoProveedor_Id").show();
      $("#LabelProv").show();
      $("#labelRegP").show();
      $("#labelRegP2").show();
      $("#CatalogoDependencia_Id").hide();
      $("#LabelDependencia").hide();
      $("#link").hide();
      $("#labelD").hide();
    } else
    if ($(this).val() == 1) {
      $("#CatalogoDependencia_Id").hide();
      $("#LabelDependencia").hide();
      $("#labelD").hide();
      $("#link").hide();
      $("#CatalogoProveedor_Id").hide();
      $("#LabelProv").hide();
      $("#labelRegP").hide();
      $("#labelRegP2").hide();
    } else
    if ($(this).val() == 3) {
      $("#CatalogoDependencia_Id").show();
      $("#LabelDependencia").show();
      $("#labelD").show();
      $("#labelD2").show();
      $("#CatalogoProveedor_Id").hide();
      $("#LabelProv").hide();
      $("#labelRegP").hide();
      $("#labelRegP2").hide();
    }

  });
</script>























</form>
<script>
  $(document).ready(function() {
    /*$("#form_registro").submit(function(e) {
      e.preventDefault();
      console.log($(this).serializeArray());
    })*/
  });

  /************* */
  /*$( "#Proveedor" ).click(function() {
  $( ".Procedencia" ).change();
  document.getElementById("LabelDependencia").style.display = "block";
});*/

  $(".Procedencia").change(function() {
    console.log($(this).val());
    if ($(this).val() == 2) {
      $("#CatalogoProveedor_Id").show();
      $("#LabelProv").show();
      $("#labelRegP").show();
      $("#labelRegP2").show();
      $("#CatalogoDependencia_Id").hide();
      $("#LabelDependencia").hide();
      $("#link").hide();
      $("#labelD").hide();
    } else
    if ($(this).val() == 1) {
      $("#CatalogoDependencia_Id").hide();
      $("#LabelDependencia").hide();
      $("#labelD").hide();
      $("#link").hide();
      $("#CatalogoProveedor_Id").hide();
      $("#LabelProv").hide();
      $("#labelRegP").hide();
      $("#labelRegP2").hide();
    } else
    if ($(this).val() == 3) {
      $("#CatalogoDependencia_Id").show();
      $("#LabelDependencia").show();
      $("#labelD").show();
      $("#labelDN").show();
      $("#CatalogoProveedor_Id").hide();
      $("#LabelProv").hide();
      $("#labelRegP").hide();
      $("#labelRegP2").hide();
    }

  });
</script>