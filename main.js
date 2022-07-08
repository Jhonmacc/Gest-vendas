$(document).ready(function() {
    var id, opcion;
    opcion = 4;
        
    tablaUsuarios = $('#tablaUsuarios').DataTable({ 
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }, 
        "bJQueryUI": true,
"bStateSave": true,
"iDisplayLength": 5,
"aaSorting": [[4, "desc"], [5, "asc"]],
"aLengthMenu": [[5, 15, 25, 50, 100, -1], [5, 15, 25, 50, 100, "All"]],
"sPaginationType": "full_numbers",
"sScrollY": "50em",
"sScrollX": "100%",
"bScrollCollapse": true,
        "ajax":{            
            "url": "bd/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "id"},
            {"data": "nome"},
            {"data": "dataVenda"},
            {"data": "tipoVenda"},
            {"data": "protocolo"},
            {"data": "statusCert"},
            {"data": "produto"},
            {"data": "tipoDesc"},
            {"data": "valor"},
            {"data": "statusVenda"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
    $(window).resize(function() {
        oTable.fnDraw(false)        
    });
    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formUsuarios').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nome = $.trim($('#nome').val());    
        dataVenda = $.trim($('#dataVenda').val());
        tipoVenda = $.trim($('#tipoVenda').val());    
        protocolo = $.trim($('#protocolo').val());    
        statusCert = $.trim($('#statusCert').val());
        produto = $.trim($('#produto').val());
        tipoDesc = $.trim($('#tipoDesc').val());
        tipoDesc1 = $.trim($('#tipoDesc1').val());
        tipoDesc2 = $.trim($('#tipoDesc2').val());
        tipoDesc3 = $.trim($('#tipoDesc3').val());
        tipoDesc4 = $.trim($('#tipoDesc4').val()); 
        valor = $.trim($('#valor').val()); 
        tipoDesc5 = $.trim($('#tipoDesc5').val());
        statusVenda = $.trim($('#statusVenda').val());                           
            $.ajax({
              url: "bd/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {id:id, nome:nome, dataVenda:dataVenda, tipoVenda:tipoVenda, protocolo:protocolo, statusCert:statusCert, produto:produto, tipoDesc:tipoDesc, valor:valor, statusVenda:statusVenda, opcion:opcion},    
              success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
               }
            });			        
        $('#modalCRUD').modal('hide');											     			
    });
            
     
    
    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function(){
        opcion = 1; //alta           
        id=null;
        $("#formUsuarios").trigger("reset");
        $(".modal-header").css( "background-color", "#007bff");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Cadastrar Cliente");
        $('#modalCRUD').modal('show');	    
    });
    
    //Editar        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;//editar
        fila = $(this).closest("tr");	        
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nome = fila.find('td:eq(1)').text();
        dataVenda = fila.find('td:eq(2)').text();
        tipoVenda = fila.find('td:eq(3)').text();
        protocolo = fila.find('td:eq(4)').text();
        statusCert = fila.find('td:eq(5)').text();
        produto = fila.find('td:eq(6)').text();
        tipoDesc = fila.find('td:eq(7)').text();
        valor = fila.find('td:eq(8)').text();
        statusVenda = fila.find('td:eq(9)').text();
        $("#nome").val(nome);
        $("#dataVenda").val(dataVenda);
        $("#tipoVenda").val(tipoVenda);
        $("#protocolo").val(protocolo);
        $("#statusCert").val(statusCert);
        $("#produto").val(produto);
        $("#tipoDesc").val(tipoDesc);
        $("#valor").val(valor);
        $("#statusVenda").val(statusVenda);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Cadastro");		
        $('#modalCRUD').modal('show');		   
    });
    
    //Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3; //eliminar        
        var respuesta = confirm("Deseja apagar o registro"+id+"?");                
        if (respuesta) {            
            $.ajax({
              url: "bd/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},    
              success: function() {
                  tablaUsuarios.row(fila.parents('tr')).remove().draw();                  
               }
            });	
        }
     });
         
    });    
    
 
    
    