
<?php
session_start();
include('valida.php');
include 'config.php';
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
    <title>GEST-VENDAS</title>
  <link rel="icon" type="imagem/png" href="assets/imgs/" />
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style_menusidebar.css">
      
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
</head>

<body>
  <!-- =============== Listagem de Registros do BD ================ -->
<?php
$query = "SELECT id FROM venda ORDER BY id";
$query_run = mysqli_query($conn, $query);

?>

<!-- =============== Navegação ================ -->


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
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">

        <div class="profile_name">Bem vindo: <?php echo $logado?></div>
        <div class="job"><p class="titlefooter">&copy;  Jhon Amorim</p></div>
      </div>
     
    </div>
 
</ul>
  </div>
  </div>
    
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <button id="btnNuevo" type="button" class="btn btn-primary" data-toggle="modal"><h4 class="material-icons">CADASTRAR</h4></button>    
        <hr>
        <span class="dashboard">Menu de Cadastros</span>
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
<hr>


</div>
<!-- =============== SideBar dos Menus ================ -->
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
 
 


 <style>
 
 
    /*-----------------SCROLL DAS PAGINAS-----------------------*/
    ::-webkit-scrollbar {
      background: transparent;
        }
        ::-webkit-scrollbar-thumb {
          background: rgba(0, 0, 0, 0.2);
          border-radius: 20px;
          }
 
 
      .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 16px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    
    -webkit-font-smoothing: antialiased;
  }

</style>




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
<!-- =============== Navegação e Listagem de Registros do BD ================ -->    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">              
          </div> 
        </div>    
    </div>    
    <br>  
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
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
                        <th>Status Recebimento</th> 
                        <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <!-- <div class="row"> -->
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="">Nome Completo:</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome do cliente" id="nome" required>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Data da Venda</label>
                    <input name="dataVenda" type="date" class="form-control" id="dataVenda">
                    </div> 
                    </div>    
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="tipoVenda">Tipo da Venda:</label>
            <select name="tipoVenda" class="form-control" id="tipoVenda" required>
            <option value="">--Selecione--</option>
            <option value="Venda">Venda Normal</option>
              <option value="Venda Assinatura">Venda Assinatura</option>
             
            </select>
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Protocolo</label>
                    <input name="protocolo" type="text" class="form-control" id="protocolo">
                    </div>
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="">Status da Venda:</label>
            <select name="statusCert" id="statusCert" class="form-control" required>
            <option value="">--Selecione--</option>
            <option value="APROVADO">APROVADO</option>
              <option value="REVOGADO">REVOGADA</option>
            </select>
                    </div> 
                    </div>    
                    <div class="col-lg-12">    
                    <div class="form-group produto-type">
            <label for="produto"> Produto:</label>
            <select name="produto" class="form-control" id="produto" required>
            <option value="">--Selecione--</option> 
              <option value="JAVASCRIPT + REACT" data-price="229,00">CURSO JAVASCRIPT + REACT </option>
              <option value="JAVASCRIPT + REACT 3 MESES" data-price="89,00">CURSO JAVASCRIPT + REACT 3 MESES</option>
              <option value="Curso PHP 3 Meses)" data-price="99,00">CURSO PHP 3 MESES</option>
              <option value="E-CNPJ A3 DE 1 ANO EM CARTÃO" data-price="385,00">CURSO PHP</option>
              <option value="CURSO PHYTON 3 MESES" data-price="159,00">CURSO PHYTON 3 MESES</option>
              <option value="CURSO PHYTON 3 MESES" data-price="95,00">CURSO PHYTON</option>
              <option value="CURSO HTML+CSS & BOOTSTRAP 3 MESES" data-price="75,00">CURSO HTML+CSS & BOOTSTRAP 3 MESES</option>
              <option value="CURSO HTML+CSS & BOOTSTRAP" data-price="99,00">CURSO HTML+CSS & BOOTSTRAP</option>
            </select>
          </div>          
        </div> 

        <label for="form-check form-switch">Benefícios</label>
          <div class="form-check form-switch descontoMF2">
            <input class="form-check-input checkgroup" name="section" type="checkbox" id="descMF2" value="GRATUITO">
            <label class="form-check-label" for="flexSwitchCheckDefault">Vale Presente</label>
          </div>

          <div class="form-check form-switch desc1">
            <input class="form-check-input checkgroup" name="section" id="tipoDesc1" type="checkbox" value="10% DE DESCONTO">
            <label class="form-check-label" for="flexSwitchCheckDefault">Desconto 10%</label>
          </div>
          <div class="form-check form-switch desc2">
            <input class="form-check-input checkgroup" name="section" id="tipoDesc2" type="checkbox" value="20% DE DESCONTO">
            <label class="form-check-label" for="flexSwitchCheckDefault">Desconto 20%</label>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input checkgroup" name="section" id="tipoDesc3" type="checkbox" value="VENDA NORMAL">
            <label class="form-check-label" for="flexSwitchCheckDefault">Sem desconto</label>
          </div>
          <input type="hidden" name="textInv" id="tipoDesc">
          <div class="col-lg-6">
                        <div class="form-group">
                        <label for="price">Valor:</label>
            <input name="valor" type="text" id="valor" class="form-control price-input valorProduto txtBloqueado valor" readonly>
                        </div>
                    </div>
                    <div class="form-check form-switch">
                    <input class="form-check-input checkgroup" name="section" id="tipoDesc4" type="checkbox" value="DESCONTO MANUAL">
            <label class="form-check-label" for="flexSwitchCheckDefault">Desconto Manual</label>
          </div> 

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="">Status da Venda:</label>
                        <select name="statusVenda" class="form-control" id="statusVenda" required>
                        <option value="">--Selecione--</option>
                        <option value="PAGO">PAGO</option>
                          <option value="A RECEBER">A RECEBER</option>
                        </select>
                        </div>
                    </div>                   
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Salvar</button>
               
            </div>
        </form>    
        </div>
    </div>
</div>  
<script>
var btn = document.querySelector("#btnGuardar");
btn.addEventListener("click", function() {
    
    location.reload();
});



</script>
<!-- =============== Validação de Dados no Modal Cadastrar ================ -->
      <script>
    (function() {
    const form = document.querySelector('#formUsuarios');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'Selecione ao menos uma das opções.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();
      </script>

      
    <!-- jQuery, Popper.js, Bootstrap JS Na Tela Gerenciador De -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script> 

     <!-- =========== Script e Css dos Icons Cards =========  -->
    <script type="text/javascript" src="main.js"></script>  
    <script type="text/javascript" src="js/scripts.js"></script>  
    

    <!-- =========== Scripts dos Icons Cards =========  -->
    <script src="assets/js/main.js"></script>

 

</body>

</html>