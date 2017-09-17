<!--<div id="contenido">
  <h2 align="center">Incluir habitacion</h2>
    <form enctype="multipart/form-data" autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" >
        <label for="Tipo" align="center">Tipo de habitacion</label>
        <table border="0">
        <tr>
         <td><select name="Tipo" id="Tipo">
          <option value="Individual">Habitacion Individual</option>
          <option value="Doble">Habitacion Doble</option>
          <option value="Triple">Habitacion Triple</option>
          <option value="Cuadruple">Habitacion Cuadruple</option>
        </td>
        </tr>
        </table>
        <p>
            <label for="marca" align="center">Nombre del hotel</label>
            <input name="marca" id="marca" type="text" placeholder="Nombre del hotel" value="" />
            <span id="e_marca" class="error">
                <?php
                     echo $error['marca']
                ?>
            </span>
        </p>
        <p>
            <label for="matricula" align="center">Direccion del hotel</label>
            <input name="matricula" id="matricula" type="text" placeholder="Direccion del hotel" value="" />
            <span id="e_marca" class="error">
                 <?php
                     echo $error['matricula']
                ?>
            </span>
        </p>
        <p>
            <label for="Potencia" align="center">Piso</label>
            <input name="Potencia" id="Potencia" type="text" placeholder="Piso" value="" />
            <span id="e_Potencia" class="error">
                 <?php
                     echo $error['Potencia']
                ?>
            </span>
        </p>
        <p>
            <label for="Potencia" align="center" >Puerta</label>
            <input name="Potencia" id="Potencia" type="text" placeholder="Puerta" value="" />
            <span id="e_Potencia" class="error">
                 <?php
                     echo $error['Potencia']
                ?>
            </span>
        <p><label align="center">Fecha disponibilidad </label><input id="Fecha_compra" type="text" name="Fecha_compra">
        <span id="e_fecha" class="error">
                 <?php
                     echo $error['Fecha_compra']
                ?>
            </span></p>
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
        <div>
            <label for="Descripcion" align="center">Descripcion</label>
            <textarea rows='6' name="Descripcion" id="Descripcion" type="text" placeholder="Descripcion" ></textarea>
            <span id="e_descripcion" class="error">
                 <?php
                     echo $error['Descripcion']
                ?>
            </span>
        </div>

        <input name="submit" type="submit" value="Alta"/>
    </form>
</div>-->
<script type="text/javascript" src="modules/Habitaciones/view/js/habitacion.js" ></script>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>ADD USER    </h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="form" method="post" action="index.php?module=Habitaciones">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
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
                        <input type="text" name="nombre_hotel" placeholder="Nombre hotel" class="form-control" required="required" value="<?php
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
                        <label>Direccion hotel*</label><br />
                        <input id="direccion" type="text" name="direccion" placeholder="Street nXX ptaX" required="required" class="form-control"value="<?php
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


                    <!--<div class="form-group">
                        <label>English level</label><br />
                        <select name="en_lvl" id="en_lvl">
                            <option selected>Select level</option>
                            <option value="a1">A1</option>
                            <option value="a2">A2</option>
                            <option value="b1">B1</option>
                            <option value="b2">B2</option>
                            <option value="c1">C1</option>
                        </select>
                        <div id="e_en_lvl"><?php
                            if (isset($error['en_lvl'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['en_lvl'] . "</span><br/>");
                            }
                            ?></div>
                    </div>-->

                </div>
                <!--<div class="col-sm-5">
                    <div class="form-group">
                        <label>User *</label>
                        <input type="text" name="user" placeholder="user" class="form-control" required="required" value="<?php
                        if (!isset($error['user'])) {
                            echo $_POST ? $_POST['user'] : "";
                        }
                        ?>">
                        <div id="e_user"><?php
                            if (isset($error['user'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['user'] . "</span><br/>");
                            }
                            ?></div>
                    </div>
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" name="pass" placeholder="pass" class="form-control" required="required">
                        <div id="e_pass"><?php
                            if (isset($error['pass'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['pass'] . "</span><br/>");
                            }
                            ?></div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password *</label>
                        <input type="password" name="conf_pass" placeholder="confirm pass" class="form-control" required="required">
                        <div id="e_conf_pass"><?php
                            if (isset($error['conf_pass'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['conf_pass'] . "</span><br/>");
                            }
                            ?></div>
                    </div>
                    <div class="form-group">
                        <label>E-mail *</label>
                        <input type="email" name="email" placeholder="e-mail" class="form-control" required="required" value="<?php
                        if (!isset($error['email'])) {
                            echo $_POST ? $_POST['email'] : "";
                        }
                        ?>">
                        <div id="e_email"><?php
                            if (isset($error['email'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['email'] . "</span><br/>");
                            }
                            ?></div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Email *</label>
                        <input type="email" name="conf_email" placeholder="confirm e-mail" class="form-control" required="required" value="<?php
                        if (!isset($error['email'])) {
                            echo $_POST ? $_POST['email'] : "";
                        }
                        ?>">
                        <div id="e_conf_email"><?php
                            if (isset($error['conf_email'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['conf_email'] . "</span><br/>");
                            }
                            ?></div>
                    </div>-->
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

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
