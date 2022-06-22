<div class="alert alert-primary" role="alert">
  Generar informes</div>
    <form method="post" action="Datos/informesDatos">
      <div class="container overflow-hidden">
        <div class="row gy-5">
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="">Área</label>
                <select name="Area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="">Todas las opciones</option>
                  <option value="1">DIRECCION GENERAL</option>
                  <option value="2">FINANZAS Y ADMINISTRACIÓN</option>
                  <option value="3">CRÉDITO EDUCATIVO</option>
                  <option value="4">BECAS</option>
                  <option value="5">POLÍTICA EDUCATIVA Y LIDERAZGO SOCIAL</option>
                  <option value="6">COMUNICACIÓN</option>
                  <option value="7">VINCULACION NACIONAL E INTERNACIONAL</option>
                </select>
              </center>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="">Sexo</label>
                <select name="Persona_Sexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="">Todas las opciones</option>
                  <option value="Femenino">FEMENINO</option>
                  <option value="Masculino">MASCULINO</option>
                </select>
              </center>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="">Procedencia</label>
                <select name="Procedencia" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="">Todas las opciones</option>
                  <option value="1">Visitante</option>
                  <option value="2">Proveedor</option>
                  <option value="3">Dependencia</option>
                </select>
              </center>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="">Procedencia</label>
                <select name="Edad" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="">Todas las opciones...</option>
                  <option value="1">(6-11 años)</option>
                  <option value="2">(12-17 años)</option>
                  <option value="3">(18-23 años)</option>
                  <option value="4">(24-29 años)</option>
                  <option value="5">(30-35 años)</option>
                  <option value="6">(36-41 años)</option>
                  <option value="7">(42-47 años)</option>
                  <option value="8">(Mayores de 50 años)</option>
                </select>
              </center>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="startDate">Fecha de inicio</label>
                <input id="fechaI" name="fechaI" class="form-control" type="date" />
              </center>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border bg-light">
              <center>
                <label for="startDate">Fecha de inicio</label>
                <input id="fechaT" name="fechaT" class="form-control" type="date" />
              </center>
            </div>
          </div>
        </div>
        <center><br>
        <button type="submit" class="btn btn-primary btn-lg">Generar</button><br><br>
                  <a class="btn btn-primary" href="<?= base_url() . 'Admin' ?>" role="button">Regresar</a>
        </center><br><br>

      </div>
    </form>