<div class="alert alert-warning" role="alert">
  Registra un nuevo proveedor.</div>
<form method="post" action="Registro/RegistroDatosPersona">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Nombre del proveedor<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_Nombre" name="CatalogoProveedor_Nombre" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Número de proveedor<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_NumeroProveedor" name="CatalogoProveedor_NumeroProveedor" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">RFC<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_RFC" name="CatalogoProveedor_RFC" placeholder="" required>
        </div>

        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Estatus<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_Estatus" name="CatalogoProveedor_Estatus" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Giros del proveedor<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_GirosProveedor" name="CatalogoProveedor_GirosProveedor" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Tipo de proveedor<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_Tipo" name="CatalogoProveedor_Tipo" placeholder="" required>
        </div>
      </div>
      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Calle y número<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_CalleNo" name="CatalogoProveedor_CalleNo" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Colonia<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_Colonia" name="CatalogoProveedor_Colonia" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">CP<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_CP" name="CatalogoProveedor_CP" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Teléfono:</label>
          <input type="text" class="form-control" id="CatalogoProveedor_Telefono" name="CatalogoProveedor_Telefono" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Email:</label>
          <input type="email" class="form-control" id="CatalogoProveedor_Email" name="CatalogoProveedor_Email" placeholder="" required>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Representante Legal<span class="red">*</span></label>
          <input type="text" class="form-control" id="CatalogoProveedor_RepresentanteLegal" name="CatalogoProveedor_RepresentanteLegal" placeholder="" required>
        </div>

      </div>

      <div class="col">
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Región<span class="red">*</span></label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" id="CatalogoProveedor_Region" name="CatalogoProveedor_Region" placeholder="" required>
            <option selected>Seleccione...</option>
            <option>28</option>
            <option>48</option>
            <option>AGS</option>
            <option>AZ</option>
            <option>BCN</option>
            <option>BCS</option>
            <option>CAL</option>
            <option>CHI</option>
            <option>CHS</option>
            <option>CMP</option>
            <option>COA</option>
            <option>COL</option>
            <option>DF</option>
            <option>DGO</option>
            <option>GRO</option>
            <option>GTO</option>
            <option>HGO</option>
            <option>JAL</option>
            <option>LD</option>
            <option>MA</option>
            <option>MCH</option>
            <option>MEX</option>
            <option>MOR</option>
            <option>NAY</option>
            <option>NL</option>
            <option>OAX</option>
            <option>PUE</option>
            <option>QR</option>
            <option>QRO</option>
            <option>SIN</option>
            <option>SLP</option>
            <option>SON</option>
            <option>TAB</option>
            <option>TLX</option>
            <option>TMS</option>
            <option>VER</option>
            <option>WA</option>
            <option>YUC</option>
            <option>ZAC</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">País<span class="red">*</span></label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" id="CatalogoProveedor_Pais" name="CatalogoProveedor_Pais" placeholder="" required>
            <option selected>Seleccione...</option>
            <option>ES</option>
            <option>GB</option>
            <option>MX</option>
            <option>US</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Estado<span class="red">*</span></label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" id="CatalogoProveedor_Estado" name="CatalogoProveedor_Estado" placeholder="" required>
            <option selected>Seleccione...</option>
            <option>28</option>
            <option>48</option>
            <option>AGS</option>
            <option>AZ</option>
            <option>BCN</option>
            <option>BCS</option>
            <option>CAL</option>
            <option>CHI</option>
            <option>CHS</option>
            <option>CMP</option>
            <option>COA</option>
            <option>COL</option>
            <option>DF</option>
            <option>DGO</option>
            <option>GRO</option>
            <option>GTO</option>
            <option>HGO</option>
            <option>JAL</option>
            <option>LD</option>
            <option>MA</option>
            <option>MCH</option>
            <option>MEX</option>
            <option>MOR</option>
            <option>NAY</option>
            <option>NL</option>
            <option>OAX</option>
            <option>PUE</option>
            <option>QR</option>
            <option>SIN</option>
            <option>SLP</option>
            <option>SON</option>
            <option>TAB</option>
            <option>TLX</option>
            <option>TMS</option>
            <option>VER</option>
            <option>WA</option>
            <option>YUC</option>
            <option>ZAC</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleFormControlInput1" class="form-label">Ciudad<span class="red">*</span></label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" id="CatalogoProveedor_Ciudad" name="CatalogoProveedor_Ciudad" placeholder="" required>
            <option selected>Seleccione...</option>
             <option> Abasolo </option>
             <option> Acámbaro </option>
             <option> Acapulco de Juárez </option>
             <option> Acatlán de Juárez </option>
             <option> Acolman </option>
             <option> Aguascalientes </option>
             <option> Ahome </option>
             <option> Almoloya de Juárez </option>
             <option> Álvaro Obregón </option>
             <option> Amealco de Bonfil </option>
             <option> Amozoc </option>
             <option> Apaseo el Alto </option>
             <option> Apaseo el Grande </option>
             <option> Apatzingán </option>
             <option> Apodaca </option>
             <option> Arandas </option>
             <option> Atarjea </option>
             <option> Atizapán </option>
             <option> Atizapán de Zaragoza </option>
             <option> Atlatlahucan </option>
             <option> Atlixco </option>
             <option> Ayala </option>
             <option> Azcapotzalco </option>
             <option> Bahía de Banderas </option>
             <option> Banderilla </option>
             <option> Benito Juárez </option>
             <option> BILBAO </option>
             <option> Bizkaia - Bilbao </option>
             <option> Boca del Río </option>
             <option> Cadereyta de Montes </option>
             <option> Cajeme </option>
             <option> Cárdenas </option>
             <option> Carmen </option>
             <option> Celaya </option>
             <option> Centro </option>
             <option> Chalco </option>
             <option> Chapala </option>
             <option> Chihuahua </option>
             <option> Chilpancingo de los Bravo </option>
             <option> Chimalhuacán </option>
             <option> Ciénega de Flores </option>
             <option> Ciudad </option>
             <option> Ciudad Madero </option>
             <option> Coacalco de Berriozábal </option>
             <option> Coatzacoalcos </option>
             <option> Colima </option>
             <option> Colón </option>
             <option> Comitán de Domínguez </option>
             <option> Comonfort </option>
             <option> Coroneo </option>
             <option> Corregidora </option>
             <option> Cortazar </option>
             <option> Coyoacán </option>
             <option> Cuajimalpa de Morelos </option>
             <option> Cuauhtémoc </option>
             <option> Cuautitlán </option>
             <option> Cuautitlán Izcalli </option>
             <option> Cuautla </option>
             <option> Cuautlancingo </option>
             <option> Cuerámaro </option>
             <option> Cuernavaca </option>
             <option> Cuitzeo </option>
             <option> Culiacán </option>
             <option> Doctor Mora </option>
             <option> Dolores Hidalgo </option>
             <option> Durango </option>
             <option> Ecatepec de Morelos </option>
             <option> El Marqués </option>
             <option> El Salto </option>
             <option> Emiliano Zapata </option>
             <option> Ensenada </option>
             <option> Ezequiel Montes </option>
             <option> García </option>
             <option> General Escobedo </option>
             <option> Gómez Palacio </option>
             <option> Guadalajara </option>
             <option> Guadalupe </option>
             <option> Guanajuato </option>
             <option> Gustavo A. Madero </option>
             <option> Hermosillo </option>
             <option> Huanímaro </option>
             <option> Huauchinango </option>
             <option> Huehuetoca </option>
             <option> Huimilpan </option>
             <option> Huitzilac </option>
             <option> Huixquilucan </option>
             <option> Irapuato </option>
             <option> Ixmiquilpan </option>
             <option> Ixtapaluca </option>
             <option> Iztacalco </option>
             <option> Iztapalapa </option>
             <option> Jaral del Progreso </option>
             <option> Jerécuaro </option>
             <option> Jesús María </option>
             <option> Jilotzingo </option>
             <option> Jiquilpan </option>
             <option> Jiutepec </option>
             <option> Jocotitlán </option>
             <option> Jojutla </option>
             <option> José Sixto Verduzco </option>
             <option> Juárez </option>
             <option> La Barca </option>
             <option> La Magdalena Contreras </option>
             <option> La Paz </option>
             <option> La Piedad </option>
             <option> Lagos de Moreno </option>
             <option> Lázaro Cárdenas </option>
             <option> Leon </option>
             <option> Lerma </option>
             <option> Londres </option>
             <option> Los Cabos </option>
             <option> Madrid - Alcobendas </option>
             <option> Malinalco </option>
             <option> Manuel Doblado </option>
             <option> Manzanillo </option>
             <option> Matamoros </option>
             <option> Mazatlán </option>
             <option> Medellín de Bravo </option>
             <option> Mérida </option>
             <option> Metepec </option>
             <option> Mexicali </option>
             <option> Miguel Hidalgo </option>
             <option> Milpa Alta </option>
             <option> Mineral de la Reforma </option>
             <option> Monclova </option>
             <option> Monterrey </option>
             <option> Morelia </option>
             <option> Morelos </option>
             <option> Moroleón </option>
             <option> Mountain View </option>
             <option> Naranjos Amatlán </option>
             <option> Naucalpan de Juárez </option>
             <option> Nezahualcóyotl </option>
             <option> Nicolás Romero </option>
             <option> Nuevo Casas Grandes </option>
             <option> Oaxaca de Juárez </option>
             <option> Ocampo </option>
             <option> Ocotlán </option>
             <option> Ocoyoacac </option>
             <option> Ocoyucan </option>
             <option> Ojuelos de Jalisco </option>
             <option> Ontario - Ottawa </option>
             <option> Orizaba </option>
             <option> Otumba </option>
             <option> Pachuca de Soto </option>
             <option> Papantla </option>
             <option> Pénjamo </option>
             <option> Peñamiller </option>
             <option> Progreso de Obregón </option>
             <option> Puebla </option>
             <option> Pueblo Nuevo </option>
             <option> Purísima del Rincón </option>
             <option> Queréndaro </option>
             <option> Querétaro </option>
             <option> Reynosa </option>
             <option> Rioverde </option>
             <option> Romita </option>
             <option> Sabinas </option>
             <option> Salamanca </option>
             <option> Saltillo </option>
             <option> Salvatierra </option>
             <option> San Andrés Cholula </option>
             <option> San Diego de la Unión </option>
             <option> San Felipe </option>
             <option> San Francisco de los Romo </option>
             <option> San Francisco del Rincón </option>
             <option> San José Iturbide </option>
             <option> San Juan del Río </option>
             <option> San Julián </option>
             <option> San Luis de la Paz </option>
             <option> San Luis Potosí </option>
             <option> San Mateo Atenco </option>
             <option> San Miguel de Allende </option>
             <option> San Nicolás de los Garza </option>
             <option> San Pablo del Monte </option>
             <option> San Pedro Cholula </option>
             <option> San Pedro Garza García </option>
             <option> San Pedro Tlaquepaque </option>
             <option> Santa Catarina </option>
             <option> Santa Cruz de Juventino Rosas </option>
             <option> Santiago Maravatío </option>
             <option> Seattle </option>
             <option> Silao de la Victoria </option>
             <option> Soledad de Graciano Sánchez </option>
             <option> Solidaridad </option>
             <option> Tampico </option>
             <option> Tarandacuao </option>
             <option> Tarímbaro </option>
             <option> Tarimoro </option>
             <option> Taxco de Alarcón </option>
             <option> Tecámac </option>
             <option> Tehuacán </option>
             <option> Temamatla </option>
             <option> Temixco </option>
             <option> Tepatitlán de Morelos </option>
             <option> Tepehuanes </option>
             <option> Tepeji del Río de Ocampo </option>
             <option> Tepetlaoxtoc </option>
             <option> Tepic </option>
             <option> Tepotzotlán </option>
             <option> Tequisquiapan </option>
             <option> Tequixquiac </option>
             <option> Texcoco </option>
             <option> Teziutlán </option>
             <option> Tierra Blanca </option>
             <option> Tijuana </option>
             <option> Tlachichuca </option>
             <option> Tlacolula de Matamoros </option>
             <option> Tláhuac </option>
             <option> Tlajomulco de Zúñiga </option>
             <option> Tlalnepantla de Baz </option>
             <option> Tlalpan </option>
             <option> Tlalpujahua </option>
             <option> Tlaltizapán de Zapata </option>
             <option> Tolimán </option>
             <option> Toluca </option>
             <option> Tonalá </option>
             <option> Torreón </option>
             <option> Tucson </option>
             <option> Tulancingo de Bravo </option>
             <option> Tultepec </option>
             <option> Tultitlán </option>
             <option> Tuxtla Gutiérrez </option>
             <option> Uriangato </option>
             <option> Uruapan </option>
             <option> Valle de Bravo </option>
             <option> Valle de Chalco Solidaridad </option>
             <option> Valle de Santiago </option>
             <option> Venustiano Carranza </option>
             <option> Veracruz </option>
             <option> Victoria </option>
             <option> Villagrán </option>
             <option> Watertown </option>
             <option> Xalapa </option>
             <option> Xichú </option>
             <option> Xochimilco </option>
             <option> Yautepec </option>
             <option> Yuriria </option>
             <option> Zacapoaxtla </option>
             <option> Zacatecas </option>
             <option> Zacatlán </option>
             <option> Zamora </option>
             <option> Zapopan </option>
             <option> Zapotlán de Juárez </option>
             <option> Zapotlán el Grande </option>
             <option> Zaragoza </option>
             <option> Zimapán </option>
             <option> Zinacantepec </option>
             <option> Zinapécuaro </option>
             <option> Zirándaro </option>
             <option> Zitácuaro </option>
          </select>
        </div>

      </div>
    </div>
    <center><br>
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button><br><br>
      <a class="btn btn-primary btn-lg" href="<?= base_url() . 'Registro' ?>" role="button">Regresar</a><br><br>
    </center>
  </div>
  </div>
</form>