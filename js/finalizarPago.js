$(document).ready(function(){


    function cargarDatos(){

        handler = ePayco.checkout.configure({
            key: '030b8518d9492c6e32506901e54a2845',
            test: true
        })
    
        var nombreTitular = $("#nombreTitular").val(),
        tipoDocumento = $("#tipoDocumento").val(),
        numeroDocumento = $("#numeroDocumento").val(),
        numeroCelular = $("#numeroCelular").val(),
        nombrePlan = $("#nombrePlan").val(),
        precioPlan = $("#precioPlan").val();

         data={
            //Parametros compra (obligatorio)
            name: nombrePlan,
            description: nombrePlan,
            invoice: "1234",
            currency: "cop",
            amount: precioPlan,
            country: "co",
            lang: "es",
  
            //Onpage="false" - Standard="true"
            external: "false",
  
            //Atributos opcionales
 
            acepted: "http://localhost/huellitas/vistas/transaccionAceptada.php",
            rejected: "http://localhost/huellitas/servidor/deleteSession.php",
            pending: "http://localhost/huellitas/vistas/deleteSession.php",
  
            //Atributos cliente
            name_billing: nombreTitular,
            type_doc_billing: tipoDocumento,
            number_doc_billing: numeroDocumento,
            mobilephone_billing: numeroCelular,
  
           //atributo deshabilitación metodo de pago
            methodsDisable: ["SP","CASH","DP"]
  
            }

            return (data, handler);

    }

    $("#finalizar").on("click", function(){ 
        cargarDatos();
        $("#finalizar").html("<img src='../img/cargando.gif' alt='loading' width='32' height='32' />")
        var idContratos = $("#idContrato").val();
    
        $.ajax({
            type: "POST",
            url: "../servidor/controlador/controlador_a_fecha_inicio.php",
            data: "idContrato="+idContratos,
            success: function(res){
                if(res == 1){
                    handler.open(data);
                }else{
                    console.log(res);
                }
            }

        })

    })

})