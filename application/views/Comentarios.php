<center>
<div class="alert alert-primary" role="alert">
Buzon de quejas, sugerencias, observaciones, felicitaciones o denuncias de corrupción</div>
</center>
<form method="post" action="Coment/InsertarComentarios">
  <center>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <img src="..\img\sobre2.jpg" class="img-fluid" alt="...">
            <label for="exampleFormControlTextarea1" class="form-label" id="Opiniones_Comentarios" name="Opiniones_Comentarios"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
            <div class="alert alert-warning" role="alert">
          Si deseas guardar tu comentario de manera anónima solo da clic en guardar</div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="Opiniones_NombreCompleto" name="Opiniones_NombreCompleto" placeholder="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="Opiniones_Email" name="Opiniones_Email" placeholder="">
          </div><br><br>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" id="Opiniones_Telefono" name="Opiniones_Telefono" placeholder="">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Guardar</button><br><br>

    </div>
  </center>
</form>