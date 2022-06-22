<center>
    <div class="alert alert-info" role="alert">
        Usuarios</div>
</center>
<form method="post" action="Usuarios/RegistrarUsuarios">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table text-center table-hover " id="tablaUsuarios">
                    <thead class="">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre usuario</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estatus</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        for ($i = 0; $i < count($usuario); $i++) {

                        ?>
                            <tr>
                                <th><?= $usuario[$i]['Usuario_Id'] ?></th>
                                <td><?= $usuario[$i]['Usuario_Nombre'] ?></td>
                                <td><?= $rol[$i]['PersonaRol_Tipo'] ?></td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1">Activado</label>
                                    </div>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3"><br><br>
                        <label for="">¿Deseas agregar un nuevo usuario?</label>
                        <select class="form-select" id="usu"aria-label="Default select example">
                            <option selected>Seleccione...</option>
                            <option value="1">SI</option>
                            <option value="2">NO</option>
                        </select>
                    </div>
                </div>
            </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" style="display: none;" id="LabelUsu" class="form-label">Nombre de Usuario:</label>
                        <input type="text" class="form-control" style="display: none;" id="Usuario_Nombre" name="Usuario_Nombre" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" style="display: none;" id="LabelCont" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" style="display: none;" id="Usuario_Contraseña" name="Usuario_Contraseña" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" style="display: none;" id="LabelRol" class="form-label">Tipo de Rol:</label>
                        <select class="form-select" style="display: none;" id="PersonaRol_Id" name="PersonaRol_Id" aria-label="Default select example">
                            <option selected>Seleccione...</option>
                            <option value="1">Administrador</option>
                            <option value="2">Departamento</option>
                            <option value="3">Visitante</option>

                        </select>
                    </div>
 

                    <center>
                        <button type="submit" style="display: none;" id="boton" class="btn btn-primary btn-lg">Agregar</button><br><br>
                    </center>
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
            $("#LabelUsu").show();
            $("#Usuario_Nombre").show();
            $("#LabelCont").show();
            $("#Usuario_Contraseña").show();
            $("#LabelRol").show();
            $("#PersonaRol_Id").show();
            $("#boton").show();

        } else
        if ($(this).val() == 2) {
            $("#LabelUsu").hide();
            $("#Usuario_Nombre").hide();
            $("#LabelCont").hide();
            $("#Usuario_Contraseña").hide();
            $("#LabelRol").hide();
            $("#PersonaRol_Id").hide();

            $("#boton").hide();

        }

    });
</script>