//Crear un plugine
jQuery.fn.fill_or_clean = function () {
    this.each(function () {
        if ($("#nombre_hotel").attr("value") == "") {
            $("#nombre_hotel").attr("value", "Introduce nombre hotel");
            $("#nombre_hotel").focus(function () {
                if ($("#nombre_hotel").attr("value") == "Introduce nombre hotel") {
                    $("#nombre_hotel").attr("value", "");
                }
            });
        }
        $("#nombre_hotel").blur(function () { //Onblur se activa cuando el usuario retira el foco
            if ($("#nombre_hotel").attr("value") == "") {
                $("#nombre_hotel").attr("value", "Introduce nombre hotel");
            }
        });

        if ($("#direccion").attr("value") == "") {
            $("#direccion").attr("value", "Introduce last name");
            $("#direccion").focus(function () {
                if ($("#direccion").attr("value") == "Introduce last name") {
                    $("#direccion").attr("value", "");
                }
            });
        }
        $("#direccion").blur(function () {
            if ($("#direccion").attr("value") == "") {
                $("#direccion").attr("value", "Introduce last name");
            }
        });
        if ($("#fecha_disponibilidad").attr("value") == "") {
            $("#fecha_disponibilidad").attr("value", "Introduce date of birth");
            $("#fecha_disponibilidad").focus(function () {
                if ($("#fecha_disponibilidad").attr("value") == "Introduce date of birth") {
                    $("#fecha_disponibilidad").attr("value", "");
                }
            });
        }
        $("#fecha_disponibilidad").blur(function () {
            if ($("#fecha_disponibilidad").attr("value") == "") {
                $("#fecha_disponibilidad").attr("value", "Introduce date of birth");
            }
        });
        if ($("#title_date").attr("value") == "") {
            $("#title_date").attr("value", "Introduce date of title");
            $("#title_date").focus(function () {
                if ($("#title_date").attr("value") == "Introduce date of title") {
                    $("#title_date").attr("value", "");
                }
            });
        }
        $("#title_date").blur(function () {
            if ($("#title_date").attr("value") == "") {
                $("#title_date").attr("value", "Introduce date of title");
            }
        });
        if ($("#address").attr("value") == "") {
            $("#address").attr("value", "Introduce address");
            $("#address").focus(function () {
                if ($("#address").attr("value") == "Introduce address") {
                    $("#address").attr("value", "");
                }
            });
        }
        $("#address").blur(function () {
            if ($("#address").attr("value") == "") {
                $("#address").attr("value", "Introduce address");
            }
        });
        if ($("#user").attr("value") == "") {
            $("#user").attr("value", "Introduce user");
            $("#user").focus(function () {
                if ($("#user").attr("value") == "Introduce user") {
                    $("#user").attr("value", "");
                }
            });
        }
        $("#user").blur(function () {
            if ($("#user").attr("value") == "") {
                $("#user").attr("value", "Introduce user");
            }
        });
        if ($("#pass").attr("value") == "") {
            $("#pass").attr("value", "Introduce pass");
            $("#pass").focus(function () {
                if ($("#pass").attr("value") == "Introduce pass") {
                    $("#pass").attr("value", "");
                }
            });
        }
        $("#pass").blur(function () {
            if ($("#pass").attr("value") == "") {
                $("#pass").attr("value", "Introduce pass");
            }
        });
        if ($("#conf_pass").attr("value") == "") {
            $("#conf_pass").attr("value", "Repeat pass");
            $("#conf_pass").focus(function () {
                if ($("#conf_pass").attr("value") == "Repeat pass") {
                    $("#conf_pass").attr("value", "");
                }
            });
        }
        $("#conf_pass").blur(function () {
            if ($("#conf_pass").attr("value") == "") {
                $("#conf_pass").attr("value", "Repeat pass");
            }
        });
        if ($("#email").attr("value") == "") {
            $("#email").attr("value", "Introduce email");
            $("#email").focus(function () {
                if ($("#email").attr("value") == "Introduce email") {
                    $("#email").attr("value", "");
                }
            });
        }
        $("#email").blur(function () {
            if ($("#email").attr("value") == "") {
                $("#email").attr("value", "Introduce email");
            }
        });
        if ($("#conf_email").attr("value") == "") {
            $("#conf_email").attr("value", "Repeat email");
            $("#conf_email").focus(function () {
                if ($("#conf_email").attr("value") == "Repeat email") {
                    $("#conf_email").attr("value", "");
                }
            });
            }
            $("#conf_email").blur(function () {
                if ($("#conf_email").attr("value") == "") {
                    $("#conf_email").attr("value", "Repeat email");
                }
            });
    });//each
    return this;
};//function
/*$(document).ready(function () {
    $(this).fill_or_clean(); //siempre que creemos un plugin debemos llamarlo, sino no funcionará

    var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
    var address_reg = /^[a-z0-9- -.]+$/i;
    var pass_reg = /^[0-9a-zA-Z]{6,32}$/;
    var string_reg = /^[A-Za-z]{2,30}$/;
    var usr_reg = /^[0-9a-zA-Z]{2,20}$/;

    $("#submit").click(function () {

        $(".error").remove();
        if ($("#nombre_hotel").val() == "" || $("#nombre_hotel").val() == "Introduce nombre_hotel") {
            $("#nombre_hotel").focus().after("<span class='error'>Introduce nombre_hotel</span>");
            return false;
        } else if (!string_reg.test($("#nombre_hotel").val())) {
            $("#nombre_hotel").focus().after("<span class='error'>Name must be 2 to 30 letters</span>");
            return false;
        }
        else if ($("#fecha_disponibilidad").val() == "" || $("#fecha_disponibilidad").val() == "Introduce date of birth") {
            $("#fecha_disponibilidad").focus().after("<span class='error'>Introduce date of birth</span>");
            return false;
        } else if (!date_reg.test($("#fecha_disponibilidad").val())) {
            $("#fecha_disponibilidad").focus().after("<span class='error'>error format date (mm/dd/yyyy)</span>");
            return false;
        }

        else if ($("#direccion").val() == "" || $("#direccion").val() == "Introduce last name") {
            $("#direccion").focus().after("<span class='error'>Introduce last name</span>");
            return false;
        } else if (!string_reg.test($("#direccion").val())) {
            $("#direccion").focus().after("<span class='error'>Last name must be 2 to 30 letters</span>");
            return false;
        }

        $('#form_1').attr("action","index.php?module=Habitaciones");
/*

        else if ($("#title_date").val() == "" || $("#title_date").val() == "Introduce date of title") {
            $("#title_date").focus().after("<span class='error'>Introduce date of title</span>");
            return false;
        } else if (!date_reg.test($("#title_date").val())) {
            $("#title_date").focus().after("<span class='error'>error format date (mm/dd/yyyy)</span>");
            return false;
        }

        if ($("#address").val() == "" || $("#address").val() == "Introduce address") {
            $("#address").focus().after("<span class='error'>Introduce address</span>");
            return false;
        } else if (!address_reg.test($("#address").val())) {
            $("#address").focus().after("<span class='error'>Address don't have  symbols.</span>");
            return false;
        }

        if ($("#user").val() == "" || $("#user").val() == "Introduce user") {
            $("#user").focus().after("<span class='error'>Introduce user</span>");
            return false;
        } else if (!usr_reg.test($("#user").val())) {
            $("#user").focus().after("<span class='error'>Last name must be 2 to 20 characters.</span>");
            return false;
        }

        if ($("#pass").val() == "" || $("#pass").val() == "Introduce pass") {
            $("#pass").focus().after("<span class='error'>Introduce pass</span>");
            return false;
        } else if (!pass_reg.test($("#pass").val())) {
            $("#pass").focus().after("<span class='error'>Last name must be 6 to 32 characters.</span>");
            return false;
        }

        if ($("#conf_pass").val() == "" || $("#conf_pass").val() == "Repeat pass") {
            $("#conf_pass").focus().after("<span class='error'>Repeat pass</span>");
            return false;
        } else if ($("#pass").val() != $("#conf_pass").val()) {
            $("#conf_pass").focus().after("<span class='error'>Pass doesn't match.</span>");
            return false;
        }

        if ($("#email").val() == "" || $("#email").val() == "Introduce email") {
            $("#email").focus().after("<span class='error'>Introduce email</span>");
            return false;
        } else if (!email_reg.test($("#email").val())) {
            $("#email").focus().after("<span class='error'>Error format email (example@example.com).</span>");
            return false;
        }

        if ($("#conf_email").val() == "" || $("#conf_email").val() == "Repeat email") {
            $("#conf_email").focus().after("<span class='error'>Repeat email</span>");
            return false;
        } else if ($("#email").val() != $("#conf_email").val()) {
            $("#conf_email").focus().after("<span class='error'>Email doesn't match.</span>");
            return false;
        }


    });*/

    Dropzone.autoDiscover = false;
    $(document).ready(function () {

        //Datepicker///////////////////////////
        $("#fecha_disponibilidad").datepicker({
            dateFormat: 'mm/dd/yy',
            defaultDate: '05/05/1999',
            changeMonth: true,
            changeYear: true,
            yearRange: '-110:-16'
        });

        //Valida users /////////////////////////
        $('#submit').click(function () {
            validate_user();
        });

        //Control de seguridad para evitar que al volver atrás de la pantalla results a create, no nos imprima los datos
        $.get("modules/Habitaciones/controller/Habitaciones.php?load_data=true",
                function (response) {
                    //alert(response.user);
                    if (response.user === "") {
                        $("#nombre_hotel").val('');
                        $("#direccion").val('');
                        $("fecha_disponibilidad").val('');
                        /*$("#title_date").val('');
                        $("#address").val('');
                        $("#user").val('');
                        $("#pass").val('');
                        $("#conf_pass").val('');
                        $("#email").val('');
                        $("#conf_email").val('');
                        $("#en_lvl").val('Select level');*/
                        var inputElements = document.getElementsByTagName("input");
                        for (var i = 0; i < inputElements.length; i++) {
                          if (inputElements[i].type == "checkbox") {
                            if (inputElements[i].checked) {
                                inputElements[i].checked = false;
                            }
                          }
                        }
                        //siempre que creemos un plugin debemos llamarlo, sino no funcionará
        $(this).fill_or_clean();
                    } else {
                        $("#nombre_hotel").val( response.user.name);
                        $("#direccion").val( response.user.last_name);
                        $("fecha_disponibilidad").val( response.user.birth_date);
                        $("#title_date").val( response.user.title_date);
                        /*$("#address").val( response.user.address);
                        $("#user").val( response.user.user);
                        $("#pass").val( response.user.pass);
                        $("#conf_pass").val( response.user.conf_pass);
                        $("#email").val( response.user.email);
                        $("#conf_email").val( response.user.conf_email);
                        $("#en_lvl").val( response.user.en_lvl);*/
                        var interests = response.user.interests;
                        var inputElements = document.getElementsByTagName("input");
                        for (var i = 0; i < inputElements.length; i++) {
                          if (inputElements[i].type == "checkbox") {
                            for (var j = 0; j < inputElements.length; j++) {
                                if(interests[i] ===inputElements[j] )
                                    inputElements[j].checked = true;
                            }
                          }
                    }
                  }
                }, "json");

        //Dropzone function //////////////////////////////////
        $("#dropzone").dropzone({
            url: "modules/Habitaciones/controller/Habitaciones.php?upload=true",
            addRemoveLinks: true,
            maxFileSize: 1000,
            dictResponseError: "Ha ocurrido un error en el server",
            acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
            init: function () {
                this.on("success", function (file, response) {
                    //alert(response);
                    $("#progress").show();
                    $("#bar").width('100%');
                    $("#percent").html('100%');
                    $('.msg').text('').removeClass('msg_error');
                    $('.msg').text('Success Upload image!!').addClass('msg_ok').animate({'right': '300px'}, 300);
                });
            },
            complete: function (file) {
                //if(file.status == "success"){
                //alert("El archivo se ha subido correctamente: " + file.name);
                //}
            },
            error: function (file) {
                //alert("Error subiendo el archivo " + file.name);
            },
            removedfile: function (file, serverFileName) {
                var name = file.name;
                $.ajax({
                    type: "POST",
                    url: "modules/Habitaciones/controller/Habitaciones.php?delete=true",
                    data: "filename=" + name,
                    success: function (data) {
                        $("#progress").hide();
                        $('.msg').text('').removeClass('msg_ok');
                        $('.msg').text('').removeClass('msg_error');
                        $("#e_avatar").html("");

                        var json = JSON.parse(data);
                        if (json.res === true) {
                            var element;
                            if ((element = file.previewElement) != null) {
                                element.parentNode.removeChild(file.previewElement);
                                //alert("Imagen eliminada: " + name);
                            } else {
                                false;
                            }
                        } else { //json.res == false, elimino la imagen también
                            var element;
                            if ((element = file.previewElement) != null) {
                                element.parentNode.removeChild(file.previewElement);
                            } else {
                                false;
                            }
                        }
                    }
                });
            }
        });

        //Utilizamos las expresiones regulares para las funciones de  fadeout
        var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
        var address_reg = /^[a-z0-9- -.]+$/i;
        var pass_reg = /^[0-9a-zA-Z]{6,32}$/;
        var string_reg = /^[A-Za-z]{2,30}$/;
        var usr_reg = /^[0-9a-zA-Z]{2,20}$/;

        //realizamos funciones para que sea más práctico nuestro formulario
        $("#name, #direccion").keyup(function () {
            if ($(this).val() != "" && string_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#conf_email").keyup(function () {
            if ($(this).val() != "" && $(this).val() == $('#email').val()) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#user").keyup(function () {
            if ($(this).val() != "" && usr_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#conf_pass").keyup(function () {
            if ($(this).val() != "" && $(this).val() == $('#pass').val()) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#pass").keyup(function () {
            if ($(this).val() != "" && pass_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#title_date, fecha_disponibilidad").keyup(function () {
            if ($(this).val() != "" && date_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#address").keyup(function () {
            if ($(this).val() != "" && address_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#email").keyup(function () {
            if ($(this).val() != "" && email_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });
    });

    function validate_user() {
        var result = true;
        var tipo = document.getElementById('Tipo').value;
        var name = document.getElementById('nombre_hotel').value;
        var last_name = document.getElementById('direccion').value;
        var birth_date = document.getElementById('fecha_disponibilidad').value;
        /*var title_date = document.getElementById('title_date').value;
        var address = document.getElementById('address').value;
        var en_lvl = document.getElementById('en_lvl').value;
        var user = document.getElementById('user').value;
        var pass = document.getElementById('pass').value;
        var conf_pass = document.getElementById('conf_pass').value;
        var email = document.getElementById('email').value;
        var conf_email = document.getElementById('conf_email').value;*/
        var interests = [];
        var inputElements = document.getElementsByTagName("input");
        var j = 0;
        for (var i = 0; i < inputElements.length; i++) {
          if (inputElements[i].type == "checkbox") {
            if (inputElements[i].checked) {
                interests[j] = inputElements[i].value;
                j++;
            }
          }
        }

        //Utilizamos las expresiones regulares para la validación de errores JS
        var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
        var address_reg = /^[a-z0-9- -.]+$/i;
        var pass_reg = /^[0-9a-zA-Z]{6,32}$/;
        var string_reg = /^[A-Za-z]{2,30}$/;
        var usr_reg = /^[0-9a-zA-Z]{2,20}$/;

        $(".error").remove();

        if ($("#nombre_hotel").val() == "" || $("#nombre_hotel").val() == "Introduce nombre_hotel") {
            $("#nombre_hotel").focus().after("<span class='error'>Introduce nombre_hotel</span>");
            result = false;
            return false;
        } else if (!string_reg.test($("#nombre_hotel").val())) {
            $("#nombre_hotel").focus().after("<span class='error'>Name must be 2 to 30 letters</span>");
            result = false;
            return false;
        }

        else if ($("#direccion").val() == "" || $("#direccion").val() == "Introduce last name") {
            $("#direccion").focus().after("<span class='error'>Introduce last name</span>");
            result = false;
            return false;
        } else if (!string_reg.test($("#direccion").val())) {
            $("#direccion").focus().after("<span class='error'>Last name must be 2 to 30 letters</span>");
            result = false;
            return false;
        }

        else if ($("#fecha_disponibilidad").val() == "" || $("#fecha_disponibilidad").val() == "Introduce date of birth") {
            $("#fecha_disponibilidad").focus().after("<span class='error'>Introduce date of birth</span>");
            result = false;
            return false;
        } else if (!date_reg.test($("#fecha_disponibilidad").val())) {
            $("#fecha_disponibilidad").focus().after("<span class='error'>error format date (mm/dd/yyyy)</span>");
            result = false;
            return false;
        }
/*
        else if ($("#title_date").val() == "" || $("#title_date").val() == "Introduce date of title") {
            $("#title_date").focus().after("<span class='error'>Introduce date of title</span>");
            result = false;
            return false;
        } else if (!date_reg.test($("#title_date").val())) {
            $("#title_date").focus().after("<span class='error'>error format date (mm/dd/yyyy)</span>");
            result = false;
            return false;
        }

        if ($("#address").val() == "" || $("#address").val() == "Introduce address") {
            $("#address").focus().after("<span class='error'>Introduce address</span>");
            result = false;
            return false;
        } else if (!address_reg.test($("#address").val())) {
            $("#address").focus().after("<span class='error'>Address don't have  symbols.</span>");
            result = false;
            return false;
        }

        if ($("#user").val() == "" || $("#user").val() == "Introduce user") {
            $("#user").focus().after("<span class='error'>Introduce user</span>");
            result = false;
            return false;
        } else if (!usr_reg.test($("#user").val())) {
            $("#user").focus().after("<span class='error'>Last name must be 2 to 20 characters.</span>");
            result = false;
            return false;
        }

        if ($("#pass").val() == "" || $("#pass").val() == "password") {
            $("#pass").focus().after("<span class='error'>Introduce pass</span>");
            result = false;
            return false;
        } else if (!pass_reg.test($("#pass").val())) {
            $("#pass").focus().after("<span class='error'>Last name must be 6 to 32 characters.</span>");
            result = false;
            return false;
        }

        if ($("#conf_pass").val() == "" || $("#conf_pass").val() == "password") {
            $("#conf_pass").focus().after("<span class='error'>Repeat pass</span>");
            result = false;
            return false;
        } else if ($("#pass").val() != $("#conf_pass").val()) {
            $("#conf_pass").focus().after("<span class='error'>Pass doesn't match.</span>");
            result = false;
            return false;
        }

        if ($("#email").val() == "" || $("#email").val() == "Introduce email") {
            $("#email").focus().after("<span class='error'>Introduce email</span>");
            result = false;
            return false;
        } else if (!email_reg.test($("#email").val())) {
            $("#email").focus().after("<span class='error'>Error format email (example@example.com).</span>");
            result = false;
            return false;
        }

        if ($("#conf_email").val() == "" || $("#conf_email").val() == "Repeat email") {
            $("#conf_email").focus().after("<span class='error'>Repeat email</span>");
            result = false;
            return false;
        } else if ($("#email").val() != $("#conf_email").val()) {
            $("#conf_email").focus().after("<span class='error'>Email doesn't match.</span>");
            result = false;
            return false;
        }*/
        //Si ha ido todo bien, se envian los datos al servidor
        if (result) {
            var data = {"tipo":tipo, "nombre_hotel": name, "direccion": last_name, "fecha_disponibilidad": birth_date, "interests": interests};

            var data_users_JSON = JSON.stringify(data);
            console.log(data_users_JSON);
            $.post('modules/Habitaciones/controller/Habitaciones.php',
                    {alta_users_json: data_users_JSON},
            function (response) {
              console.log(typeof(response));
                if (response.success) {
                    window.location.href = response.redirect;
                }
              console.log(response);
                //alert(response);  //para debuguear
                //}); //para debuguear
            //}, "json").fail(function (xhr) {

            }, "json").fail(function(xhr, status, error) {
                console.log(xhr.responseText);
              if (xhr.responseJSON === undefined || xhr.responseJSON === null)
                     xhr.responseJSON = JSON.parse(xhr.responseText);
                 if (xhr.status === 0) {
                     alert('Not connect: Verify Network.');
                 } else if (xhr.status === 404) {
                     alert('Requested page not found [404]');
                 } else if (xhr.status === 500) {
                     alert('Internal Server Error [500].');
                 } else if (textStatus === 'parsererror') {
                     alert('Requested JSON parse failed.');
                 } else if (textStatus === 'timeout') {
                     alert('Time out error.');
                 } else if (textStatus === 'abort') {
                     alert('Ajax request aborted.');
                 } else {
                     alert('Uncaught Error: ' + xhr.responseText);
                 }
                if (xhr.responseJSON.error.nombre_hotel)
                    $("#nombre_hotel").focus().after("<span  class='error1'>" + xhr.responseJSON.error.nombre_hotel + "</span>");

                if (xhr.responseJSON.error.direccion)
                    $("#direccion").focus().after("<span  class='error1'>" + xhr.responseJSON.error.direccion + "</span>");

                if (xhr.responseJSON.error.fecha_disponibilidad)
                    $("#fecha_disponibilidad").focus().after("<span  class='error1'>" + xhr.responseJSON.error.fecha_disponibilidad + "</span>");

                /*if (xhr.responseJSON.error.title_date)
                    $("#title_date").focus().after("<span  class='error1'>" + xhr.responseJSON.error.title_date + "</span>");

                if (xhr.responseJSON.error.address)
                    $("#address").focus().after("<span  class='error1'>" + xhr.responseJSON.error.address + "</span>");

                if (xhr.responseJSON.error.user)
                    $("#user").focus().after("<span  class='error1'>" + xhr.responseJSON.error.user + "</span>");

                if (xhr.responseJSON.error.pass)
                    $("#pass").focus().after("<span  class='error1'>" + xhr.responseJSON.error.pass + "</span>");

                if (xhr.responseJSON.error.conf_pass)
                    $("#conf_pass").focus().after("<span  class='error1'>" + xhr.responseJSON.error.conf_pass + "</span>");

                if (xhr.responseJSON.error.email)
                    $("#email").focus().after("<span  class='error1'>" + xhr.responseJSON.error.email + "</span>");

                if (xhr.responseJSON.error.conf_email)
                    $("#conf_email").focus().after("<span class='error1'>" + xhr.responseJSON.error.conf_email + "</span>");

                if (xhr.responseJSON.error.en_lvl)
                    $("#en_lvl").focus().after("<span  class='error1'>" + xhr.responseJSON.error.en_lvl + "</span>");
*/
                if (xhr.responseJSON.error.opciones)
                    $("#e_interests").focus().after("<span  class='error1'>" + xhr.responseJSON.error.interests + "</span>");

                if (xhr.responseJSON.error_avatar)
                    $("#dropzone").focus().after("<span  class='error1'>" + xhr.responseJSON.error_avatar + "</span>");

                if (xhr.responseJSON.success1) {
                    if (xhr.responseJSON.img_avatar !== "/Servidor_2DAW/Exercici_Dropzone/media/default-avatar.png") {
                        //$("#progress").show();
                        //$("#bar").width('100%');
                        //$("#percent").html('100%');
                        //$('.msg').text('').removeClass('msg_error');
                        //$('.msg').text('Success Upload image!!').addClass('msg_ok').animate({ 'right' : '300px' }, 300);
                    }
                } else {
                    $("#progress").hide();
                    $('.msg').text('').removeClass('msg_ok');
                    $('.msg').text('Error Upload image!!').addClass('msg_error').animate({'right': '300px'}, 300);
                }
            });
        }
    }
