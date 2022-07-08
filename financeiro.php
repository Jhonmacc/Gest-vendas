<?php
session_start();
include('valida.php');
include 'conexao.php';

//print_r($_SESSION);
if ((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header('location: index.php');
}
$logado = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEST - VENDAS</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="imagem/png" href="assets/imgs/" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style_menusidebar.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <a target="_blank" href='mult_relatorios.php'>
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
        <span class="dashboard">Financeiro</span>
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
<hr>
<br>
<br>
<hr>
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
    

        <!-- ========================= Card's Box DatasQuerys + Somas PHP ==================== -->
        <form id="Formulario" class="container" method="POST">


            <input type="date" class="btn btn-primary" name="dataInicio" id="" placeholder="Data Incial">

            <input type="date" class="btn btn-primary" name="dataFim" id="" placeholder="Data Final">
            <button type="submit" id="filtro" class="btn btn-outline-info btn-sm">Filtrar</button>
            <button id="reset" class="btn btn-outline-warning btn-sm">Resetar</button>


  
        </form>
        

        <div class="row mt-3">
            <div class="col-md-12">
               
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                </script>
                <!-- Font Awesome -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

                <!-- Datatables -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
                </script>
                <!-- Momentjs -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>





                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName"><strong>
                                    <h5>Total Geral</h5>
                                </strong></div>

                            <?php
                            $query = "SELECT id FROM venda ORDER BY id";
                            $query_run_vendas = mysqli_query($conn, $query);

                            if ($total_vendas = mysqli_num_rows($query_run_vendas)) {

                                echo '<div class="numbers">' . $total_vendas . ' </div>';
                            } else {
                                echo '<div class="numbers">0</div>';
                            }


                            ?>
                         
                      

                            <?php
                            $queryTotal1 = "SELECT SUM(valor) AS totalValor FROM venda";

                            $query_run_vendasTotal1 = mysqli_query($conn, $queryTotal1);

                            $total_vendasTotal1 = mysqli_fetch_assoc($query_run_vendasTotal1);

                            echo '<div class="numbers">Valor Total <br> R$ ' . number_format($total_vendasTotal1["totalValor"], 2, ",", ".") . "</div>";

                            ?>


                        </div>
                    </div>

                    <div class="card">
                      
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName"><strong>
                                    <h5>Total de Assinaturas</h5>
                                </strong></div>
                            <?php
                      $queryTotal12 = "SELECT tipoVenda FROM venda WHERE tipoVenda = 'Venda Assinatura'";
                      if (isset($_POST['dataInicio']) && isset($_POST['dataFim'])) {
                          $dataInicio = $_POST['dataInicio'];
                          $dataFim = $_POST['dataFim'];
                          $queryTotal12 .= "AND dataVenda BETWEEN '$dataInicio' AND '$dataFim'";
                          $query_run_vendas5 = mysqli_query($conn, $queryTotal12);
                      }
                          $query_run_vendas5 = mysqli_query($conn, $queryTotal12);
  
                          if ($total_vendas15 = mysqli_num_rows($query_run_vendas5)) {
  
                              echo '<div class="numbers">' . $total_vendas15 . ' Assinaturas</div>';
                          } else {
                              echo '<div class="numbers">0</div>';
                          }    
                            $queryTotal3 = "SELECT SUM(valor) AS totalValor FROM venda WHERE tipoVenda = 'Venda Assinatura'";
                            if (isset($_POST['dataInicio']) && isset($_POST['dataFim'])) {
                                $dataInicio = $_POST['dataInicio'];
                                $dataFim = $_POST['dataFim'];
                                $queryTotal3 .= "AND dataVenda BETWEEN '$dataInicio' AND '$dataFim'";
                            }

                            $query_run_vendasTotal3 = mysqli_query($conn, $queryTotal3);

                            $total_vendasTotal3 = mysqli_fetch_assoc($query_run_vendasTotal3);

                            echo '<div class="numbers"><br>Valor Total <br> R$ ' . number_format($total_vendasTotal3["totalValor"], 2, ",", ".") . "</div>";

                            $total_vendasTotal3["totalValor"];
                            $pctm = 85.00;
                            $valor_com_desconto2 = $total_vendasTotal3["totalValor"] - (($total_vendasTotal3["totalValor"] * $pctm) / 100);
                            echo '<div class="numbers">Repasse <br> R$ ' . number_format($valor_com_desconto2, 2, ",", ".") . "</div>";

                            ?>
                        </div>
                        </div>
                        <div class="card">
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName"><strong>
                                    <h5>Total Vendas</h5>
                                </strong></div>
                            <?php
                      $queryTotal13 = "SELECT tipoVenda FROM venda WHERE tipoVenda = 'Venda'";
                      if (isset($_POST['dataInicio']) && isset($_POST['dataFim'])) {
                          $dataInicio = $_POST['dataInicio'];
                          $dataFim = $_POST['dataFim'];
                          $queryTotal13 .= "AND dataVenda BETWEEN '$dataInicio' AND '$dataFim'";
                          $query_run_vendas6 = mysqli_query($conn, $queryTotal13);
                      }
                          $query_run_vendas6 = mysqli_query($conn, $queryTotal13);
  
                          if ($total_vendas16 = mysqli_num_rows($query_run_vendas6)) {
  
                              echo '<div class="numbers">' . $total_vendas16 . ' Vendidos</div>';
                          } else {
                              echo '<div class="numbers">'. 0 .' Vendidos</div>';
                          } 
                           
                            $queryTotal5 = "SELECT SUM(valor) AS totalValor FROM venda WHERE tipoVenda = 'Venda'";
                            if (isset($_POST['dataInicio']) && isset($_POST['dataFim'])) {
                                $dataInicio = $_POST['dataInicio'];
                                $dataFim = $_POST['dataFim'];
                                $queryTotal5 .= "AND dataVenda BETWEEN '$dataInicio' AND '$dataFim'";
                            }
                            $query_run_vendasTotal5 = mysqli_query($conn, $queryTotal5);

                            $total_vendasTotal5 = mysqli_fetch_assoc($query_run_vendasTotal5);

                            echo '<div class="numbers"><br>Valor Total <br> R$ ' . number_format($total_vendasTotal5["totalValor"], 2, ",", ".") . "</div>";
                            $total_vendasTotal5["totalValor"];
                            $pctm = 75.00;
                            $valor_com_desconto3 = $total_vendasTotal5["totalValor"] - (($total_vendasTotal5["totalValor"] * $pctm) / 100);
                            echo '<div class="numbers">Repasse <br> R$ ' . number_format($valor_com_desconto3, 2, ",", ".") . "</div>";

                            ?>
                        </div>
                    </div>
                    
                    <div class="card">
                            <div class="numbers"></div>
                            <div class="cardName1"><strong>
                                    <h5>Total de Repasse</h5>
                                </strong></div>
                                <?php
                                $totalRepasse = $valor_com_desconto2 + $valor_com_desconto3;
                                echo '<div class="numbers">Valor R$ ' . number_format($totalRepasse, 2, ",", ".") . "</div>";

                                ?>
                        </div>
                    </div>
                </div>

</body>

</html>
<script src="assets/js/main.js"></script>
<!-- ====== ionicons ======= -->
