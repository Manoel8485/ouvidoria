<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="home.css" media="screen" />-->
    <title>Ouvidoria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h5> <img src="png/logo.jpg"  alt="Imagem de Exemplo" height="36"> Ouvidoria Municipal</h5> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Relatorios</a>
            </li>
        </div>
      </div>
    </nav>
    <style>
        .button {     
            background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            cursor:pointer;
            overflow: hidden;        
        }
    </style>
</head>


<body style="background-color: white;">
   

<?php
        if (isset($_GET["categoria"])){
            $categoria     = $_GET["categoria"];
            $descCategoria ="";
            $unidade       ="";
            switch ($categoria) {
                case "0":
                    $descCategoria ="Cultura de Turismo";
                    $unidade       ="SEMETUR - Secretaria Municipal de Esportes e Turismo";
                    break;
                case "1":
                    $descCategoria ="Educação";
                    break;
                case "2":
                    $descCategoria = "Esporte";
                    break;
                case "3":
                    $descCategoria = "Fiscalização";
                    break;
                case "4":
                    $descCategoria = "Gabinete";
                    break;
                case "5":
                    $descCategoria = "Meio Ambiente";
                    break;
                case "6":
                    $descCategoria = "Obras";
                    break;
                case "7":
                    $descCategoria = "Promoção Socia";
                    break;
                case "8":
                    $descCategoria = "Saúde";
                    break;
            }
?>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <input type="text" name="unidade" value="<?php echo $unidade ?>">
                <input type="text" name="categoria" value="<?php echo $categoria ?>">
                <input type="text" name="desc_categoria" value="<?php echo $descCategoria ?>">

                <label for="">Unidade: <b><?php echo $unidade ?></b></label>             
                <label for="categoria">Categoria:</label>                
                <select name="categoria" disabled>
                    <option value="<?php echo $categoria ?>"><?php echo $descCategoria ?></option>    
                </select>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" cols="30" rows="4"></textarea>
                <label for="servidor">É relacionado a algum servidor? qual?</label>
                <input name="servidor" type="text">
                <label>Informe a localização do problema:</label>
                <label for="rua">Rua</label>
                <input type="text" name="rua" id="">
                <label for="numero">Número do estabelecimento</label>    
                <input type="text" name="numero" id="">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="">
                <label for="referencia">Referência</label>
                <input type="text" name="referencia">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade">
                <label for="estado">Estado</label>
                <input type="text" name="estado">
                <button type="submit">Enviar</button>
            </form>
<?php            
        }
?>

   <div class="p-3 mb-2 bg-dark bg-gradient">

    <div class="container">

       <div class="row" id="row">
        <form action="/" method="GET" >
            <button type="submit" class="button" name="categoria" value="0">
                <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 0, 0);" class="col-lg-3" style="padding: 5px" class="card-deck">
                    <img class="card-img-top" src="https://marianazorron.com.br/site/wp-content/uploads/2020/04/corona-4931132_1280.png" alt="Covid 19" class="img-rounnded" height="200p" width="200p">
                    <div class="card-body">
                    <p style="text-align: center;"  class="card-text">Cultura de Turismo</p>
                    </div>
                </div>
            </button>
            <div  class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(238, 255, 0);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.turismo.bjperdoes.sp.gov.br/site/img/logo-rodape.png" alt="Cultura e Turismo" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;"  class="card-text">Cultura de Turismo</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(2, 255, 23);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://bibliotecasma.org/wp-content/uploads/2021/11/educacao-aa-900x610.png" alt="Educação" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Educação</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(0, 255, 191);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://organicsnewsbrasil.com.br/wp-content/uploads/2016/04/esporte-verao-iguapense.png" alt="Esporte" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Esporte</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(0, 204, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www3.crcpr.org.br/crcpr/conteudo/noticias-importadas/2019_05_20_5ce2bd5c5a0a4.png" alt="Fiscalização" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Fiscalização</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(2, 6, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/gabinete-do-prefeito.png" alt="Gabinete" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Gabinete</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(175, 2, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.ambientelegal.com.br/wp-content/uploads/20200522151416250024o-e1616977193399.png" alt="Meio Ambiente" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Meio Ambiente</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 2, 242);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://mvobras.com.br/wp-content/uploads/2015/01/obras.png" alt="Obras" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Obras</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 124, 2);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="http://www.remansofraterno.org.br/remanso/images/categorias/projetos/projeto_acolher_e_transformar_333x280.png" alt="Promoção Social" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Promoção Social</p>
                </div>
            </div>
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 255, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.ufsm.br/app/uploads/sites/256/2019/03/feira.png" alt="Saúde" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Saúde</p>
                </div>
            </div>
         </form>
     </div>
    </div>
   </div>
</body>
</html>