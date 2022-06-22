<center><div class="alert alert-info" role="alert">
    Roles</div>
    </center>
    <form method="post" action="Roles/RegistrarRoles">
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table text-center table-hover " id="tablaRoles">
          <thead class="">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Tipo de Rol</th>
            </tr>
          </thead>

          <tbody>
            <?php
            for ($i = 0; $i < count($rol); $i++) {

            ?>
              <tr>
                <th><?= $rol[$i]['PersonaRol_Id'] ?></th>
                <td><?= $rol[$i]['PersonaRol_Tipo'] ?></td>
              </tr>
            <?php }  ?>
          </tbody>
        </table>
        <div class="mb-3"><br><br>
          <label for="">¿Deseas agregar un nuevo rol?</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Seleccione...</option>
            <option value="1">SI</option>
            <option value="2">NO</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row"><br><br><br>

      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlInput1" style="display: none;" id="LabelRol" class="form-label">Nombre de rol:</label>
          <input type="text" class="form-control" style="display: none;" id="PersonaRol_Tipo" name="PersonaRol_Tipo" placeholder="">
        </div><br><br>

      </div>
      <div class="col"><br><br><br>
        <button type="submit" style="display: none;" id="boton" class="btn btn-primary btn-lg">Agregar</button><br><br>
      </div>
      <center>
        <a class="btn btn-primary" href="<?= base_url() . 'Configuracion_Sistema' ?>" role="button">Regresar</a>
      </center><br><br>
    </div>
  </div>

</form>



<script>
  $(document).ready(function() {
    /*$("#form_registro").submit(function(e) {
      e.preventDefault();
      console.log($(this).serializeArray());
    })*/
  });

  /*************************************** */
  /*$( "#Proveedor" ).click(function() {
  $( ".Procedencia" ).change();
  document.getElementById("LabelDependencia").style.display = "block";
});*/

  $(".form-select").change(function() {
    console.log($(this).val());
    if ($(this).val() == 1) {
      $("#LabelRol").show();
      $("#PersonaRol_Tipo").show();
      $("#LabelCont").show();
      $("#boton").show();

    } else
    if ($(this).val() == 2) {
      $("#LabelRol").hide();
      $("#PersonaRol_Tipo").hide();
      $("#boton").hide();

    }

  });
</script>