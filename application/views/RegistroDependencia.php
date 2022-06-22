  <div class="alert alert-warning" role="alert">
  Registra tu dependencia.</div>
  <form method="post" action="RegistroDependencias/RegistrarDependencia">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre de la Dependencia<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoDependencia_Nombre" name="CatalogoDependencia_Nombre" placeholder="" required>
        </div>
      </div>

      <div class="col">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sector al que pertenece<span class="red">*</span></label>
          <select class="form-select" aria-label="Default select example" id="Sectores_Id" name="Sectores_Id" required>
            <option value="">Seleccione...</option>
            <?php

            foreach ($sectores as $key => $value) {
            ?>
              <option value="<?= $value["v"] ?>"><?= $value["Sectores_Nombre"] ?></option>
            <?php
            }
            ?>
          </select><br><br>
        </div>
  </script>
      </div>
      <center>
        <button type="submit" class="btn btn-primary btn-lg">Registrar</button><br><br>
        <a class="btn btn-primary btn-lg" href="<?= base_url() . 'Registro' ?>" role="button">Regresar</a><br><br>
      </center><br><br>
    </div>
  </div>
</form>