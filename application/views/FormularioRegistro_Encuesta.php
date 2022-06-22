<div class="alert alert-primary" role="alert">
  Registra tus datos</div>
<form method="post" action="RegistroDatos_Comentarios/InsertarComentarios">
  <div class="container">
    <div class="row">
      <div class="col">

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre Completo:</label>
          <input type="text" class="form-control" id="Opiniones_NombreCompleto" name="Opiniones_NombreCompleto" placeholder="" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email:</label>
          <input type="email" class="form-control" id="Opiniones_Email" name="Opiniones_Email" placeholder="">
        </div><br><br>
    </div>
      <div class="col">       
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Teléfono:</label>
          <input type="text" class="form-control" id="Opiniones_Telefono" name="Opiniones_Telefono" placeholder="">
        </div>
        </div>
      <center>
      <button type="submit" class="btn btn-primary btn-lg">Guardar</button><br><br>
      </center>
      </div>
 
</form>
<script>
  $(document).ready(function() {
    /*$("#form_registro").submit(function(e) {
      e.preventDefault();
      console.log($(this).serializeArray());
    })*/
  });
</script>