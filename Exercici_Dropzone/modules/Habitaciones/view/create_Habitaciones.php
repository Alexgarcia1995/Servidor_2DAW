<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">

<script type="text/javascript" src="modules/Habitaciones/view/js/habitaciones.js"></script>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>ADD USER    </h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="form_1" method="post">
                <div class="col-sm-5 col-sm-offset-1">
                      <!--<label>Name *</label>
                      <input type="text" name="name" placeholder="name" class="form-control" required="required" value="<?php
                      if (!isset($error['name'])) {
                          echo $_POST ? $_POST['name'] : "";
                      }
                      ?>" >
                      <div id="e_name"><?php
                          if (isset($error['name'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['name'] . "</span><br/>");
                          }
                          ?></div>-->
                          <label for="Tipo" align="center">Tipo de habitacion</label>
                          <table border="0">
                          <tr>
                           <td><select name="Tipo" id="Tipo">
                            <option value="Habitacion Individual">Habitacion Individual</option>
                            <option value="Habitacion Doble">Habitacion Doble</option>
                            <option value="Habitacion Triple">Habitacion Triple</option>
                            <option value="Habitacion Cuadruple">Habitacion Cuadruple</option>
                          </td>
                          </tr>
                          </table>
                  </div>
                  <div class="form-group">
                      <label>Nombre hotel</label>
                      <input type="text" name="nombre_hotel" id="nombre_hotel" placeholder="Nombre hotel" class="form-control" required="required" value="<?php
                      if (!isset($error['nombre_hotel'])) {
                          echo $_POST ? $_POST['nombre_hotel'] : "";
                      }
                      ?>">
                      <div id="e_nombre_hotel"><?php
                          if (isset($error['nombre_hotel'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['nombre_hotel'] . "</span><br/>");
                          }
                          ?></div>
                  </div>
                  <div class="form-group">
                      <label>Fecha disponibilidad</label><br />
                      <input id="fecha_disponibilidad" type="text" name="fecha_disponibilidad"   class="form-control" placeholder="mm/dd/yyyy"  value="<?php
                      if (!isset($error['fecha_disponibilidad'])) {
                          echo $_POST ? $_POST['fecha_disponibilidad'] : "";
                      }
                      ?>">
                      <div id="e_fecha_disponibilidad"><?php
                          if (isset($error['fecha_disponibilidad'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['fecha_disponibilidad'] . "</span><br/>");
                          }
                          ?></div>
                  </div>
                  <!--<div class="form-group">
                      <label>Date of obtaining title *</label><br />
                      <input id="title_date" type="text" name="title_date" placeholder="mm/dd/yyyy"  class="form-control"  value="<?php
                      if (!isset($error['title_date'])) {
                          echo $_POST ? $_POST['title_date'] : "";
                      }
                      ?>">
                      <div id="e_title_date"><?php
                          if (isset($error['title_date'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['title_date'] . "</span><br/>");
                          }
                          ?></div>
                  </div>-->
                  <div class="form-group">
                      <label>Direccion hotel</label><br />
                      <input id="direccion" type="text" name="direccion" placeholder="Direccion hotel" required="required" class="form-control"value="<?php
                      if (!isset($error['direccion'])) {
                          echo $_POST ? $_POST['direccion'] : "";
                      }
                      ?>">
                      <div id="e_direccion"><?php
                          if (isset($error['direccion'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['direccion'] . "</span><br/>");
                          }
                          ?></div>
                  </div>

                  <div class="form-group" align="center">
                      <label>Opciones:</label>
                      Pension completa  <input type="checkbox" name="opciones[]" value="Pension completa">
                      Media pension  <input type="checkbox" name="opciones[]" value="Media pension">
                      Alojamiento y desayuno  <input type="checkbox" name="opciones[]" value="Alojamiento y desayuno">
                      <div id="e_opciones"><?php
                          if (isset($error['opciones'])) {
                              print ("<BR><span style='color: #ff0000'>" . "* " . $error['opciones'] . "</span><br/>");
                          }
                          ?></div>
                  </div>

                  <div class="msg"></div>
                  <br/>
                  <div id="dropzone" class="dropzone"></div><br/>
                  <br/>
                  <br/>
                  <br/>

                  <div class="form-group">
                      <button type="button" id="submit" name="submit" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                  </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
