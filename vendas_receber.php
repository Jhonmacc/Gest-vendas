<?php
session_start();

//print_r($_SESSION);
if ((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['user']);
  unset($_SESSION['senha']);
  header('location: index.php');
}
$logado = $_SESSION['user'];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="imagem/png" href="assets/imgs/" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="main.css">  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style_menusidebar.css">
      
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <title>Gest - Relatórios</title>
</head>

<body>
<style>
      /*-----------------SCROLL DAS PAGINAS-----------------------*/
    ::-webkit-scrollbar {
      background: transparent;
        }
        ::-webkit-scrollbar-thumb {
          background: rgba(0, 0, 0, 0.2);
          border-radius: 20px;
          }

    </style>

    <!-- =============== Navigation ================ -->

    <div class="sidebar">
    <div class="logo-details">
    <i class='bx bx-store-alt'></i>
      <span class="logo_name">Gest Vendas</span>
    </div>
      <ul class="nav-links">
      <li>
        <a href="menu.php">
        <i class='bx bxs-dashboard'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
       
      <li>
        <a href="cadastro.php">
        <i class='bx bxs-user-plus bx-flip-horizontal bx-tada' style='color:#f3eeee' ></i>
          <span class="link_name">Cadastros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Menu Cadastros</a></li>
        </ul>
      </li>
      <li>
        <a href="mult_relatorios.php">
        <i class='bx bxs-report'></i>
          <span class="link_name">Relatórios</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Menu Relatórios</a></li>
        </ul>
      </li>

      <li>
        <a href="financeiro.php">
        <i class='bx bxs-dollar-circle'></i>
          <span class="link_name">Financeiro</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Menu Financeiro</a></li>
        </ul>
      </li>
     
      <!--
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Categorias</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Sub-Menu</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
        
      </li>
    
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
         
      </li>
        -->
     
      </li>
      <li>
        <a href="#">
        <i class='bx bxs-wink-smile'></i>
          <span class="link_name">Suporte</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Suporte</a></li>
        </ul>
      </li>
      <!--
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Menu</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
     
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Menu</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      
      </li>
        -->
        <li>
        <a href="#">
        <i class='bx bxs-conversation'></i>
          <span class="link_name">Chat</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chat</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Configurações</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Configurações</a></li>
        </ul>
      </li>
      <li>
        <a href="sair.php">
        <i class='bx bxs-log-out'></i>
          <span class="link_name">Sair</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Vai Sair?</a></li>
        </ul>
      </li>
    
    
      <div class="profile-details">
     <!-- <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>-->
      <div class="name-job">

        <div class="profile_name">Bem vindo: <?php echo $logado?></div>
        <div class="job"><p class="titlefooter">&copy; Nome da Empresa</p></div>
      </div>
     
    </div>
  
</ul>
  </div>
  </div>
     
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Mega Relatórios</span>
      </div>
      <div class="dropdown">
  <button onclick="myFunction()" class="btn btn-secondary dropdown-toggle">Selecionar Loja</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Pesquisar.." id="myInput" onkeyup="filterFunction()">
    <a href="menu.php">Lojas</a>
    <a href="#">Loja - 1</a>
    <a href="#">Loja - 2</a>
    <a href="#">Loja - 3</a>
    <a href="#">Loja - 4</a>
    <a href="#">Loja - 5</a>
    <a href="#">Loja - 6</a>
  </div>
    <button type="button" class="btn btn-primary">
            <ion-icon name="notifications"></ion-icon>
  Notificações <span class="badge bg-secondary">4</span>
</button>
</div>
    </nav>

<div>
<br>
<br>
</div>
<script>
 
 let sidebar = document.querySelector(".sidebar");
 let sidebarBtn = document.querySelector(".bx-menu");
 console.log(sidebarBtn);
 sidebarBtn.addEventListener("click", ()=>{
   sidebar.classList.toggle("close");
 });

sidebarBtn.onclick = function() {
 sidebar.classList.toggle("active");
 if(sidebar.classList.contains("active")){
 sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
 sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 
 </script>


 <script>
 let arrow = document.querySelectorAll(".arrow");
 for (var i = 0; i < arrow.length; i++) {
   arrow[i].addEventListener("click", (e)=>{
  let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
  arrowParent.classList.toggle("showMenu");
   });
 }


  let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
 sidebar.classList.toggle("active");
 if(sidebar.classList.contains("active")){
 sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
 sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
</script>
 
  
 <script>
 let arrow = document.querySelectorAll(".arrow");
 for (var i = 0; i < arrow.length; i++) {
   arrow[i].addEventListener("click", (e)=>{
  let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
  arrowParent.classList.toggle("showMenu");
   });
 }
 let sidebar = document.querySelector(".sidebar");
 let sidebarBtn = document.querySelector(".bx-menu");
 console.log(sidebarBtn);
 sidebarBtn.addEventListener("click", ()=>{
   sidebar.classList.toggle("close");
 });
 </script>
 
             <script>
              /*DROPLIST DAS AGR */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

          </script>    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
              
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_date" placeholder="Data Incial" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_date" placeholder="Data Final" readonly>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Filtrar</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Resetar</button>
                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Voltar ao Início</a>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records_receber" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Data da Venda</th>
                                        <th>Tipo da Venda</th>
                                        <th>Protocolo</th>
                                        <th>Status</th>
                                        <th>Produto</th>
                                        <th>Tipo de desconto</th>
                                        <th>Valor</th>
                                        <th>Status do Recebimento</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <!-- Momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>
       $(function() {
        $("#start_date").datepicker({
 
            dateFormat: 'yy/mm/dd',
   dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
   dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
   dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
   monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
   monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
   nextText: 'Proximo',
   prevText: 'Anterior'
});
           
        });
        $("#end_date").datepicker({

            dateFormat: 'yy/mm/dd',
   dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
   dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
   dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
   monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
   monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
   nextText: 'Proximo',
   prevText: 'Anterior'
});
    </script>

    <script>
    // Fetch records_receber

    function fetch(start_date, end_date) {
        $.ajax({
            url: "records_receber.php",
            type: "POST",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            dataType: "json",
            success: function(data) {
                // Datatables
                var i = "1";

                $('#records_receber').DataTable({
                     "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        },
                "bJQueryUI": true,
"bStateSave": true,
"iDisplayLength": 10,
"aaSorting": [[4, "desc"], [5, "asc"]],
"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
"sPaginationType": "full_numbers",
"sScrollY": "50em",
"sScrollX": "100%",
"bScrollCollapse": true,
                    "data": data,
                    // buttons
                    "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    "buttons": [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    // responsive
                    "responsive": true,
                    "columns": [{
                            "data": "id",
                            "render": function(data, type, row, meta) {
                                return i++;
                            }
                             
                            
                        },
                        {
                            "data": "nome"
                        },
                        {
                            "data": "dataVenda",
                            "render": function(data, type, row, meta) {
                                return moment(row.dataVenda).format('DD-MM-YYYY');
                            
                                
                            }
                        },
                        
                        {
                            "data": "tipoVenda"
                        },
                        {
                            "data": "protocolo"
                        },
                        {
                            "data": "statusCert"
                        },
                        {
                            "data": "produto"
                        },
                        {
                            "data": "tipoDesc"
                        },
                        {
                            "data": "valor",
                            "render": function(data, type, row, meta) {
                                return `R$:${row.valor}`;
                            }
                        },
                        {
                            "data": "statusVenda"
                            
                            
                        }
                    ]
                });
            }
        });
      }
    fetch();

    // Filter

    $(document).on("click", "#filter", function(e) {
        e.preventDefault();

        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();

        if (start_date == "" || end_date == "") {
            alert("Por favor, selecione a data!");
        } else {
            $('#records_receber').DataTable().destroy();
            fetch(start_date, end_date);
        }
    });

    // Reset

    $(document).on("click", "#reset", function(e) {
        e.preventDefault();

        $("#start_date").val(''); // empty value
        $("#end_date").val('');

        $('#records_receber').DataTable().destroy();
        fetch();
    });
    </script>
</body>

</html>
