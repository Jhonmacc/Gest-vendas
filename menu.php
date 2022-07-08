
<?php
session_start();
include('valida.php');
include 'conexao.php';

//print_r($_SESSION);
if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true))
{
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
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style_menusidebar.css">
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
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

<!--------NAVEGAÇÃO SIDEBAR NAV-LINKS---------->

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
     
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
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
<hr>
</div>


<!---------------------CARDBOS COM AS CONSULTA SQL------------------------>

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
                    <!-- SELECT tipoVenda, COUNT(tipoVenda) AS QD FROM venda WHERE tipoVenda = 'Emissão'; -->
                </div>
                <div class="iconBx">
                    <ion-icon name="cash"></ion-icon>

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
                    <div class="cardName"><strong>Vendas</strong></div>
                    <?php
                    $queryTotal2 = "SELECT tipoVenda FROM venda WHERE tipoVenda = 'Venda'";
                    $query_run_vendas2 = mysqli_query($conn, $queryTotal2);

                    if ($total_vendas2 = mysqli_num_rows($query_run_vendas2)) {

                        echo '<div class="numbers">' . $total_vendas2 . ' </div>';
                    } else {
                        echo '<div class="numbers">0</div>';
                    }
                    ?>

                </div>

                <div class="iconBx">
                <ion-icon name="basket"></ion-icon>
                    <?php
                    $queryTotal3 = "SELECT SUM(valor) AS totalValor FROM venda WHERE tipoVenda = 'Venda'";
                    $query_run_vendasTotal3 = mysqli_query($conn, $queryTotal3);

                    $total_vendasTotal3 = mysqli_fetch_assoc($query_run_vendasTotal3);

                    echo '<div class="numbers">Total <br> R$ ' . number_format($total_vendasTotal3["totalValor"], 2, ",", ".") . "</div>";


                    ?>
                </div>
            </div>


            <div class="card">
                <div>
                    <div class="numbers"></div>
                    <div class="cardName"><strong>Assinaturas</strong></div>
                    <?php
                    $queryTotal4 = "SELECT tipoVenda FROM venda WHERE tipoVenda = 'Venda Assinatura'";
                    $query_run_vendas4 = mysqli_query($conn, $queryTotal4);

                    if ($total_vendas4 = mysqli_num_rows($query_run_vendas4)) {

                        echo '<div class="numbers">' . $total_vendas4 . ' </div>';
                    } else {
                        echo '<div class="numbers">0</div>';
                    }
                    ?>
                </div>

                <div class="iconBx">
                <ion-icon name="cloud-done"></ion-icon>

                    <?php
                    $queryTotal5 = "SELECT SUM(valor) AS totalValor FROM venda WHERE tipoVenda = 'Venda Assinatura'";
                    $query_run_vendasTotal5 = mysqli_query($conn, $queryTotal5);

                    $total_vendasTotal5 = mysqli_fetch_assoc($query_run_vendasTotal5);

                    echo '<div class="numbers">Total <br> R$ ' . number_format($total_vendasTotal5["totalValor"], 2, ",", ".") . "</div>";


                    ?>
                </div>
            </div>
          <!--
            <div class="card">
                <div>
                    <div class="numbers"></div>
                    <div class="cardName"><strong>Vendas/Emitidos</strong></div>
                    
                    <?php
                    $queryTotal6 = "SELECT tipoVenda FROM venda WHERE tipoVenda = ''";
                    $query_run_vendas6 = mysqli_query($conn, $queryTotal6);

                    if ($total_vendas6 = mysqli_num_rows($query_run_vendas6)) {

                        echo '<div class="numbers">' . $total_vendas6 . ' </div>';
                    } else {
                        echo '<div class="numbers">0</div>';
                    }
                    
                    ?>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart"></ion-icon>
                    <?php
                    $queryTotal7 = "SELECT SUM(valor) AS totalValor FROM venda WHERE tipoVenda = ''";
                    $query_run_vendasTotal7 = mysqli_query($conn, $queryTotal7);

                    $total_vendasTotal7 = mysqli_fetch_assoc($query_run_vendasTotal7);

                    echo '<div class="numbers">Total <br> R$ ' . number_format($total_vendasTotal7["totalValor"], 2, ",", ".") . "</div>";
                     ?>
 
                </div>
                               
            </div>
            -->
             <div class="card" onclick="location.href='vendas_receber.php'">
                <span class="button" type="button" data-hover="VER VENDAS A RECEBER?" data-active=""><span>
                    <div class="numbers"></div>
                    <div class="cardName"><strong>A Receber</strong></div>
                    <?php
                    $queryTotal8 = "SELECT statusVenda FROM venda WHERE statusVenda = 'A RECEBER'";
                    $query_run_vendas8 = mysqli_query($conn, $queryTotal8);

                    if ($total_vendas8 = mysqli_num_rows($query_run_vendas8)) {

                        echo '<div class="numbers">' . $total_vendas8 . ' </div>';
                    } else {
                        echo '<div class="numbers">0</div>';
                    }
                    ?>
         

               
                    <ion-icon name="hourglass-outline" class="iconBx"></ion-icon>
                    <?php
                    $queryTotal9 = "SELECT SUM(valor) AS totalValor FROM venda WHERE statusVenda = 'A RECEBER'";
                    $query_run_vendasTotal9 = mysqli_query($conn, $queryTotal9);

                    $total_vendasTotal9 = mysqli_fetch_assoc($query_run_vendasTotal9);

                    echo '<div class="numbers">Total <br> R$ ' . number_format($total_vendasTotal9["totalValor"], 2, ",", ".") . "</div>";


                    ?>
                </div>
            </div>
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
 <!-- ========================= Card's Box ==================== -->

</body>
</html>
 <!-- ========================= Scritps do das funcionalidades Modal & Cadastros ==================== -->
<script src="assets/js/main.js"></script>
             <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
   