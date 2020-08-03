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
            external: "true",

  
            //Atributos opcionales
 
            acepted: "http://localhost/huellitas-de-vida/vistas/transaccionAceptada.php",
  
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
        
        console.log(data);

        handler.open(data);
    })

})