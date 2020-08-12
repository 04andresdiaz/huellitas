$(document).ready(function(){

        /* Boton Llamame  */
        $("#llamame").on("click", function(){

            var nombre = $("#nombre").val(),
                celular = $("#celular").val(),
                tipo_plan = document.getElementById("tipo_plan").value;
                if(nombre == ""){
                   $("#mensajes").fadeIn().addClass("mensajesAparece bg-danger text-white").html("El Campo Nombre es Obligatorio");
                   $("#nombre").focus();
                }else if(celular == ""){
                   $("#mensajes").fadeIn().addClass("mensajeAparece bg-danger text-white").html("El Campo Celular es Obligatorio");
                   $("#celular").focus();
                }else{
                $("#mensajes").html("<img src='img/cargando.gif' alt='loading' />")

                    $.ajax({
                        type: "POST",
                        url: ("servidor/controlador/llamame_controlador.php"),
                        data: "nombre="+nombre+"&celular="+celular+"&tipo_plan="+tipo_plan,
                        success: function(res){
                                $("#mensajes").fadeIn().addClass("mensajeAparece bg-success text-white").html(res).delay(5000).fadeOut(5000);
                                document.getElementById("nombre").value = "";
                                document.getElementById("celular").value = "";
                        }
                    })    
                }

        })

        $("#nombre").bind('blur keyup', function(){
                if($(this).val() != ""){
                        $("#mensajes").fadeOut(400).removeClass("mensajesAparece mensajeAparece bg-success text-white");
                }
        })
        $("#celular").bind('bulr keyup', function(){
                if($(this).val() != ""){
                        $("#mensajes").fadeOut(400).removeClass("mensajesAparece mensajeAparece bg-success text-white");
                }
        })


        /* Boton Contacto */

        $("#btnContacto").on("click", function(){
                var nombre_contacto = $("#nombre_contacto").val(),
                celular_contacto = $("#celular_contacto").val(),email_contacto = $("#email_contacto").val(),
                mensaje_contacto = $("#mensaje_contacto").val();

                if(nombre_contacto == ""){

                   $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white text-center").html("El Campo Nombre No Puede Estar Vacio")
                   $("#nombre_contacto").focus();

                }else if (celular_contacto == ""){

                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white text-center").html("El Campo Celular No Puede Estar Vacio")
                        $("#celular_contacto").focus();

                }else if (email_contacto == ""){

                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white text-center").html("El Campo Email No Puede Estar Vacio")
                        $("#email_contacto").focus();

                }else if (mensaje_contacto == ""){

                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white text-center").html("El Campo Mensaje No Puede Estar Vacio")
                        $("#mensaje_contacto").focus();

                }else{
                         $("#mensajesContacto").html("<img src='img/cargando.gif' alt='loading' />")
                        $.ajax({
                                
                                type: "POST",
                                url: "servidor/controlador/contacto_controlador.php",
                                data: "nombre_contacto="+nombre_contacto+"&celular_contacto="+celular_contacto+"&email_contacto="+email_contacto+"&mensaje_contacto="+mensaje_contacto,
                                success: function(res){
                                        $("#mensajesContacto").fadeIn().addClass("mensajeAparece bg-success text-white").html(res).delay(5000).fadeOut(5000);
                                        document.getElementById("nombre_contacto").value = "";
                                        document.getElementById("celular_contacto").value = "";
                                        document.getElementById("email_contacto").value = "";
                                        document.getElementById("mensaje_contacto").value = "";
                                }
                        })
                }
        })


        $("#email_contacto , #nombre_contacto, #celular_contacto, #mensaje_contacto").bind('blur keyup', function(){
                if($(this).val() != ""){
                        $("#mensajesContacto").fadeOut(400).removeClass("mensajesAparece");
                }
        })
})
