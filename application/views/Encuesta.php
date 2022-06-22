<center>
  <div class="alert alert-warning" role="alert">
    ¡Gracias por tu visita! <br>
    Te invitamos a contestar nuestra encuesta de satisfacción.
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <form method="post" action="Encuesta/RegistroEncuesta">
          <input type="image" name="botondeenvio" src="..\img\Satisfecha.png" alt="" id="Encuesta" name="Encuesta" width="210px" height="280px"> &nbsp;&nbsp;&nbsp;&nbsp;
          <input id="Encuesta_Respuesta" name="Encuesta_Respuesta" type="hidden" value="Satisfactorio">
        </form>
      </div>
      <div class="col-sm">
        <form method="post" action="Encuesta/RegistroEncuesta">
          <input type="image" name="botondeenvio" src="..\img\Media.png" alt="" value="" id=Encuesta name="Encuesta" width="210px" height="280px">&nbsp;&nbsp;&nbsp;&nbsp;
          <input id="Encuesta_Respuesta" name="Encuesta_Respuesta" type="hidden" value="Regular">
        </form>
      </div>
      <div class="col-sm">
        <form method="post" action="Encuesta/RegistroEncuesta">
          <input type="image" name="botondeenvio" src="..\img\Inconforme.png" alt="" value="" id=Encuesta name="Encuesta" width="210px" height="280px">&nbsp;&nbsp;&nbsp;&nbsp;
          <input id="Encuesta_Respuesta" name="Encuesta_Respuesta" type="hidden" value="Malo">
        </form>
      </div><br><br>
    </div>
  </div>
</center>