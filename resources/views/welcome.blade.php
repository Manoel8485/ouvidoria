<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Ouvidoria</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h5> <img src="{{ URL::asset('css/logo.jpg') }}"  alt="Imagem de Exemplo" height="36">Ouvidoria Municipal</h5> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <div class="container text-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginModal">
                    Login
                </button> 
              </div>
            </li>
            <!-- <li class="nav-item">
              <a type="button" class="btn btn-primary " nav-link href="relatorio/relatorio.html">Relatorios</a>
            </li> -->
        </div>
      </div>
    </nav>
    <style>
        .hidden{
            height:0;
            width:0;
            visibility: hidden;
            padding:0;
            margin:0;
            float:right;
        }
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
                    $unidade       ="SEMED - Secretaria de Educação";
                    break;
                case "2":
                    $descCategoria = "Esporte";
                    $unidade       ="SEMES - Secretaria Municipal de Esportes";
                    break;
                case "3":
                    $descCategoria = "Fiscalização";
                    $unidade       ="SEMEA - Secretaria De Fiscalizacao";
                    break;
                case "4":
                    $descCategoria = "Gabinete";
                    $unidade       ="Gabinete do Prefeito";
                    break;
                case "5":
                    $descCategoria = "Meio Ambiente";
                    $unidade       ="SEMEIA - Secretaria Municipal de Meio Ambiente";
                    break;
                case "6":
                    $descCategoria = "Obras";
                    $unidade       ="SEMOSP - Secretaria Municipal de Obras e Serviços Públicos";
                    break;
                case "7":
                    $descCategoria = "Promoção Social";
                    $unidade       ="Secretaria Municipal de Trabalho, Economia e Promoção Social";
                    break;
                case "8":
                    $descCategoria = "Saúde";
                    $unidade       ="SEMUSA - A Secretaria Municipal de Saúde";
                    break;
                case "9":
                    $descCategoria = "COVID";
                    $unidade       ="SEMUSA -  A Secretaria Municipal de Saúde";
                    break;
            }
?>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <input type="text" class="hidden" name="unidade" value="<?php echo $unidade ?>">
                <input type="text" class="hidden" name="categoria" value="<?php echo $categoria ?>">
                <input type="text" class="hidden" name="desc_categoria" value="<?php echo $descCategoria ?>">

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

  
        <form action="/" method="GET" >
            <div class="p-3 mb-2 bg-dark bg-gradient">

                <div class="container">

                    <div class="row" id="row">

            <div class="btn-group" role="group" aria-label="Grupo 1">

            <button type="submit" class="button" name="categoria" value="9"  class="btn btn-Primary">
                <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 0, 0);" class="col-lg-3" style="padding: 5px" class="card-deck">
                    <img class="card-img-top" src="https://marianazorron.com.br/site/wp-content/uploads/2020/04/corona-4931132_1280.png" alt="Covid 19" class="img-rounnded" height="200p" width="200p">
                    <div class="card-body">
                    <p style="text-align: center;"  class="card-text">COVID 19</p>
                    </div>
                </div>
            </button>
            <button type="submit" class="button" name="categoria" value="0"  class="btn btn-secondary">
            <div  class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(238, 255, 0);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.turismo.bjperdoes.sp.gov.br/site/img/logo-rodape.png" alt="Cultura e Turismo" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;"  class="card-text">Cultura de Turismo</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="1"  class="btn btn-secondary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(2, 255, 23);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://bibliotecasma.org/wp-content/uploads/2021/11/educacao-aa-900x610.png" alt="Educação" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Educação</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="2"  class="btn btn-primary btn-lg btn-block">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(0, 255, 191);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://organicsnewsbrasil.com.br/wp-content/uploads/2016/04/esporte-verao-iguapense.png" alt="Esporte" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Esporte</p>
                </div>
            </div>
            </button>
            </div>

            <div class="btn-group" role="group" aria-label="Grupo 2">

            <button type="submit" class="button" name="categoria" value="3"  class="btn btn-Primary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(0, 204, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www3.crcpr.org.br/crcpr/conteudo/noticias-importadas/2019_05_20_5ce2bd5c5a0a4.png" alt="Fiscalização" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Fiscalização</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="4"  class="btn btn-secondary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(2, 6, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/gabinete-do-prefeito.png" alt="Gabinete" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Gabinete</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="5" class="btn btn-secondary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(175, 2, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.ambientelegal.com.br/wp-content/uploads/20200522151416250024o-e1616977193399.png" alt="Meio Ambiente" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Meio Ambiente</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="6"  class="btn btn-secondary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 2, 242);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://mvobras.com.br/wp-content/uploads/2015/01/obras.png" alt="Obras" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Obras</p>
                </div>
            </div>
            </button>
            </div>
             
            <div class="btn-group" role="group" aria-label="Grupo 3">

            <button type="submit" class="button" name="categoria" value="7"  class="btn btn-Primary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 124, 2);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="http://www.remansofraterno.org.br/remanso/images/categorias/projetos/projeto_acolher_e_transformar_333x280.png" alt="Promoção Social" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Promoção Social</p>
                </div>
            </div>
            </button>
            <button type="submit" class="button" name="categoria" value="8"  class="btn btn-secondary">
            <div class="card border-dark mb-3" class="h-100 d-inline-block" style="width: 220px; background-color: rgb(255, 255, 255);" class="col-lg-3" style="padding: 5px" class="card-deck">
                <img class="card-img-top" src="https://www.ufsm.br/app/uploads/sites/256/2019/03/feira.png" alt="Saúde" class="img-rounnded" height="200p" width="200p">
                <div class="card-body">
                <p style="text-align: center;" class="card-text">Saúde</p>
                </div>
            </div>
            </button>
            </div>
         </form>
     </div>
    </div>
   </div>

   <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModal">Área Restrita Audire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="Login" class="col-form-label">Login:</label>
                  <input type="text" nome = Login class="form-control" id="Login" placeholder="Digite o Login">
                </div>
                <div class="mb-3">
                  <label for="Senha" class="col-form-label">Senha:</label>
                  <input type="password" Senha="password" class="form-control" id="Senha" placeholder="Digite a senha">
                </div>
            </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Acessar</button>
        </div>
      </div>
    </div>



    
    </body>
</html>