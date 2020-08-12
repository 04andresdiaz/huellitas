$(document).ready(function(){

  function cargarDatos(){


            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

            nombreSeccionUno = $("#nombreSeccionUno").val(),
            cedulaSeccionUno = $("#cedulaSeccionUno").val(),
            fechaDeNacimiento = $("#fechaDeNacimiento").val(),
            direccionSeccionUno = $("#direccionSeccionUno").val(),
            valorUnoDireccion = $("#valorUnoDireccion").val(),
            valorDosDireccion = $("#valorDosDireccion").val(),
            ubicacionDireccionSeccionuno = $("#ubicacionDireccionSeccionuno").val(),
            ciudadSeccionUno = $("#ciudadSeccionUno").val(),
            barrioSeccionUno = $("#barrioSeccionUno").val(),
            emailTitular = $("#emailTitular").val(), 
            celularSeccionUno = $("#celularSeccionUno").val();
             tipoDocumentoSeccionUno = document.getElementById("tipoDocumentoSeccionUno").value;
             direccionLetrasSeccionUno = document.getElementById("direccionLetrasSeccionUno").value;
 /* -------------Datos Segunda Seccion ----------------- */
 
            direccionTrabajo = document.getElementById("direccionTrabajo").value,
            valorUnoDireccionTrababjo = $("#valorUnoDireccionTrababjo").val(),
            letraDireccionTrabajo = document.getElementById("letraDireccionTrabajo").value,
            valorDosDireccionTrababjo = $("#valorDosDireccionTrababjo").val(),
            ubicacionDireccionTrabajo = document.getElementById("ubicacionDireccionTrabajo").value,
            ciudadTrabajo = $("#ciudadTrabajo").val(),
            barrioTrabajo = $("#barrioTrabajo").val(),
            celularTrabajo = $("#barrioTrabajo").val(),
            nombreEmpresa = $("#nombreEmpresa").val(),
            email = $("#email").val();

/* -------------Datos Tercera Seccion ----------------- */
            periodicidadPago = document.getElementById("periodicidadPago").value,
            lugarDePago = $("#lugarDePago").val(),contratoDeligado = $("#contratoDeligado").val(),
            plan = $("input:radio[name=plan]:checked").val();
/*---------------Datos del Vocero Contrato-------------- */
            
            nombreVocero = $("#nombreVocero").val(),
            tipoDocumentoVocero = document.getElementById("tipoDocumentoVocero").value,
            numeroDocumentoVocero = $("#numeroDocumentoVocero").val(),
            direccionVocero = document.getElementById("direccionVocero").value,
            valorUnoDireccionVocero = $("#valorUnoDireccionVocero").val(),
            letraDireccionVocero = document.getElementById("letraDireccionVocero").value,
            valorDosDireccionVocero = $("#valorDosDireccionVocero").val(),
            ubicacionDireccionVocero = document.getElementById("ubicacionDireccionVocero").value,
            ciudadVocero = $("#ciudadVocero").val(),
            barrioVocero = $("#barrioVocero").val(),
            emailVocero = $("#emailVocero").val();
            celularVocero = $("#celularVocero").val();


/*---------------Datos de la Mascota-------------- */ 

            nombreMascota = $("#nombreMascota").val(),
            especieMascota = document.getElementById("especieMascota").value,
            razaMascota = $("#razaMascota").val(),
            edadMascota = document.getElementById("edadMascota").value;

            return validacion_email,  nombreSeccionUno , cedulaSeccionUno,
            fechaDeNacimiento, direccionSeccionUno,valorUnoDireccion,
            valorDosDireccion, ubicacionDireccionSeccionuno,ciudadSeccionUno,
            barrioSeccionUno,celularSeccionUno,tipoDocumentoSeccionUno,
            direccionTrabajo,valorUnoDireccionTrababjo,letraDireccionTrabajo,valorDosDireccionTrababjo,ubicacionDireccionTrabajo,barrioTrabajo,nombreEmpresa, email,periodicidadPago, lugarDePago, contratoDeligado ,plan, nombreVocero,tipoDocumentoVocero,numeroDocumentoVocero,direccionVocero,valorUnoDireccionVocero,letraDireccionVocero,valorDosDireccionVocero,ubicacionDireccionVocero,ciudadVocero,barrioVocero,emailVocero,nombreMascota,especieMascota,razaMascota,edadMascota
        } 

        $("#siguienteSeccionUno").click(function(e){
            cargarDatos();

            if (nombreSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Este Campo Es Requerido");
                $("#nombreSeccionUno").focus().addClass("sobraError border border-danger");
            }else if (cedulaSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#cedulaSeccionUno").focus().addClass("sobraError border border-danger");
            }else if (fechaDeNacimiento == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#fechaDeNacimiento").focus().addClass("sobraError border border-danger");
            }else if (direccionSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#direccionSeccionUno").focus().addClass("sobraError border border-danger");
            }else if (valorUnoDireccion == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#valorUnoDireccion").focus().addClass("sobraError border border-danger");
            }else if (valorDosDireccion == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#valorDosDireccion").focus().addClass("sobraError border border-danger");
            }else if (ciudadSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#ciudadSeccionUno").focus().addClass("sobraError border border-danger");
            }else if (barrioSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#barrioSeccionUno").focus().addClass("sobraError border border-danger");
            }else if (emailTitular == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#emailTitular").focus().addClass("sobraError border border-danger");
            }else if (!validacion_email.test(emailTitular)){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Revisa el campo Email debe incluir @");
                $("#emailTitular").focus().addClass("sobraError border border-danger");
            }else if (celularSeccionUno == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#celularSeccionUno").focus().addClass("sobraError border border-danger");
            } else{
                 $("#siguienteSeccionUno").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
                var datos = $("#form");
                  $.ajax({
                    type: "POST",
                    url: "../servidor/controlador/controlador_datos_seccion_uno.php",
                    data: datos.serializeArray(),
                    success: function(res){
                        if(res == 1){
                     
                            $("#primaraSeccion").fadeOut().attr("class", "d-none");
                            $("#segunadaSeccion").fadeIn().attr("class", "d-block");
                        }else{

                            $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html(res);
                            
                        }
                    }
                })
            }

        });
    
        $("#atrasSeccionDos").on("click", function(){
            $("#segunadaSeccion").fadeOut().attr("class", "d-none");
                $("#primaraSeccion").fadeIn().attr("class", "d-block");
        })

        $("#siguienteSeccionDos").on("click", function(){
            $("#siguienteSeccionDos").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
            cargarDatos();
            console.log(cedulaSeccionUno);
            var datosFormDos = $("#formSeccionDos");
            var cedulaTitular = cedulaSeccionUno;
            $.ajax({
                type : "POST",
                url: "../servidor/controlador/controlador_datos_seccion_dos.php",
                data: datosFormDos.serialize(),
                success: function(res){
                    if (res == 1){
                         $("#segunadaSeccion").fadeOut().attr("class", "d-none");
                         $("#terceraSeccion").fadeIn().attr("class", "d-block");
                        console.log(res);

                    }else{
                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html(res);

                    }
                }
            })

        })

        $("#atrasSeccionTres").on("click", function(){
            $("#terceraSeccion").fadeOut().attr("class", "d-none");
                $("#segunadaSeccion").fadeIn().attr("class", "d-block");
        })

        $("#siguienteSeccionTres").on("click", function(){
            $("#siguienteSeccionTres").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
            var cedulaTitular = cedulaSeccionUno;
            var datos = $("#formSeccionTres");
            $.ajax({
                type: "POST",
                url: "../servidor/controlador/controlador_datos_seccion_tres.php",
                data: datos.serialize()+"&cedulaTitular="+cedulaTitular,
                success: function(res){
                    if (res == 1){
                        $("#terceraSeccion").fadeOut().attr("class", "d-none");
                        $("#cuartaSeccion").fadeIn().attr("class", "d-block");
                    }else{
                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html(res);
                    }

                    
                }
            })

  
        })
        
        $('#datosVocero').on( 'change', function() {
            if($(this).is(':checked')){
                $("#nombreVocero").attr("value", nombreSeccionUno)
                $("#tipoDocumentoVocero").val(tipoDocumentoSeccionUno)
                $("#numeroDocumentoVocero").attr("value", cedulaSeccionUno)
                $("#direccionVocero").val(direccionSeccionUno)
                $("#valorUnoDireccionVocero").attr("value", valorUnoDireccion)
                $("#letraDireccionVocero").val(direccionLetrasSeccionUno)
                $("#valorDosDireccionVocero").attr("value", valorDosDireccion)
                $("#ubicacionDireccionVocero").val(ubicacionDireccionSeccionuno)
                $("#ciudadVocero").attr("value", ciudadSeccionUno)
                $("#barrioVocero").attr("value", barrioSeccionUno)
            }
        })

        $('#atrasSeccionCuantro').on("click" , function(){
            $("#cuartaSeccion").fadeOut().attr("class", "d-none");
            $("#terceraSeccion").fadeIn().attr("class", "d-block");
        })
        
        $("#siguienteSeccionCuatro").on("click" ,function(){
            cargarDatos();
            var datos = $("#formSeccionCuatro");

            if (nombreVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Este Campo Es Requerido");
                $("#nombreVocero").focus().addClass("sobraError border border-danger");
            }else if (numeroDocumentoVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#numeroDocumentoVocero").focus().addClass("sobraError border border-danger");
            }else if (valorUnoDireccionVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#valorUnoDireccionVocero" ).focus().addClass("sobraError border border-danger");
            }else if (valorDosDireccionVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#valorDosDireccionVocero").focus().addClass("sobraError border border-danger");
            }else if (ciudadVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#ciudadVocero").focus().addClass("sobraError border border-danger");
            }else if (barrioVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#barrioVocero").focus().addClass("sobraError border border-danger");
            }else if (emailVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#emailVocero").focus().addClass("sobraError border border-danger");
           }else if (!validacion_email.test(emailTitular)){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#emailVocero").focus().addClass("sobraError border border-danger");
            }else if(celularVocero == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#celularVocero").focus().addClass("sobraError border border-danger");
            }
            else{
                
            $("#siguienteSeccionCuatro").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
               
                $.ajax({
                    type: "POST",
                    url: "../servidor/controlador/controlador_datos_seccion_cuatro.php",
                    data: datos.serialize(),
                    success: function(res){
                        if (res == 1){
                            $("#cuartaSeccion").fadeOut().attr("class", "d-none");
                            $("#quintaSeccion").fadeIn().attr("class", "d-block");
                        }else{
                            $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html(res);
                        }
                    }
                })
            } 

        });

        $("#checkbox").on("change", function(){
            if( $(this).is(':checked') ){
                document.getElementById("vistaPrevia").disabled = false;
            }else{
                document.getElementById("vistaPrevia").disabled = true;
            }
        })

        $("#vistaPrevia").on("click", function(e){
            cargarDatos();
            
            if (nombreMascota == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Este Campo Es Requerido");
                $("#nombreMascota").focus().addClass("sobraError border border-danger");
            }else if (especieMascota == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#especieMascota").focus().addClass("sobraError border border-danger");
            }else if (razaMascota == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#razaMascota" ).focus().addClass("sobraError border border-danger");
            }else if (edadMascota == ""){
                $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html("Los Campos Marcados En Rojo Son Obligatorios");
                $("#edadMascota").focus().addClass("sobraError border border-danger");
            }else{
            $("#vistaPrevia").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
                
                var datos = new FormData();
                e.preventDefault();
                datos.append("nombreMascota", $("#nombreMascota").val());
                datos.append("especieMascota", $("#especieMascota").val());
                datos.append("razaMascota", $("#razaMascota").val());
                datos.append("edadMascota", $("#edadMascota").val());
                datos.append("pesoMascota", $("#pesoMascota").val());
                datos.append("cedulaTitular", $("#cedulaSeccionUno").val());
                datos.append("carneMascota", $("#carneMascota")[0].files[0]);
                datos.append("fotoMascota", $("#fotoMascota")[0].files[0]);
                var cedulaTitular = cedulaSeccionUno;
                $.ajax({
                    type: "POST",
                    url: "../servidor/controlador/controlador_datos_seccion_cinco.php",
                    dataType: "html",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(res){
                        if (res == 1){
                            location.href="pagoContrato.php";
                        }else{

                        $("#mensajesContacto").fadeIn().addClass("mensajesAparece bg-danger text-white").html(res);
                        }
                 }
                })
            }
        })

        

        $("#nombreSeccionUno, #nombreSeccionUno, #cedulaSeccionUno, #fechaDeNacimiento, #valorUnoDireccion, #valorDosDireccion, #ciudadSeccionUno, #barrioSeccionUno,#celularSeccionUno,#valorUnoDireccionTrababjo,#valorDosDireccionTrababjo,#ciudadTrabajo,#barrioTrabajo,#nombreEmpresa,#email,#emailVocero,#barrioVocero,#ciudadVocero, #valorDosDireccionVocero,#valorUnoDireccionVocero,#valorDosDireccionVocero,#numeroDocumentoVocero, #nombreVocero,#nombreMascota,#especieMascota,#razaMascota,#edadMascota").bind('blur keyup', function(){
            if($(this).val() != ""){
                    $("#nombreSeccionUno, #nombreSeccionUno, #cedulaSeccionUno, #fechaDeNacimiento, #valorUnoDireccion, #valorDosDireccion, #ciudadSeccionUno, #barrioSeccionUno,#celularSeccionUno,#valorUnoDireccionTrababjo,#valorDosDireccionTrababjo,#ciudadTrabajo,#barrioTrabajo,#nombreEmpresa,#email,#emailVocero,#barrioVocero,#ciudadVocero, #valorDosDireccionVocero,#valorUnoDireccionVocero,#numeroDocumentoVocero,#nombreVocero,#nombreMascota,#especieMascota,#razaMascota,#edadMascota").removeClass("sobraError border border-danger");
                    $("#mensajesContacto").fadeOut().removeClass("mensajesAparece bg-danger text-white");
            }
        })

});

