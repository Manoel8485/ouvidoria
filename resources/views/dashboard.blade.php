<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>

    <link rel="stylesheet" href="{{ asset('css/relatorio.css')}}">
    <i class="bi bi-arrow-left-square-fill"></i>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<style>
    
*{margin: 10px; padding:0; box-sizing:border-box;}
.content{display:flex; margin: 20;}
/*.content{d-fle justify-content: right 20;}*/
/*body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, cyan, yellow);
}*/
body{
    background: linear-gradient(to left, rgb(20,147,220), rgb(17,54,71));
    color: rgb(12, 12, 12);
    text-align: left;
}

.rTable{width: 100%; text-align: center;}

    .rTable thead{background:slategray; font-weight: bold; color:#fff;}
    .rTable tbody tr:nth-child(2n){background: #ccc;}
    .rTable th , .rTable td{padding: 7px 0;}

@media screen and (max-width: 480px){
    .content{width: 94%;}
    
    .rTable thead{display:none;}
    .rTable tbody td{display: flex; flex-direction: column; }
}

@media only screen and (min-width: 1200px){
    .content{width: 90%;}
    .rTable tbody tr td:nth-child(1){width:10%;}
    .rTable tbody tr td:nth-child(2){width:30%;}
    .rTable tbody tr td:nth-child(3){width:20%;}
    .rTable tbody tr td:nth-child(4){width:10%;}
    .rTable tbody tr td:nth-child(5){width:30%;}
}


</style>

</head>
<body>
    <!--Botão de sair do Login-->
    <!--<div class="row">
            <button type="button" class="btn btn-primary btn-lg ml-4">LogOff</button>
        </div>-->


    <div class="row d-flex justify-content-center">
        <h1>Relatório de Solicitações Anual</h1>
    </div>
    
    <div class="row">
        <div class="container">
        <table class="rTable">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Secretarias</th>
                    <th>Realizadas</th>
                    <th>Pendentes</th>
                    <th>Total de Solicitações</th>
                </tr>
            </thead>
    
            <tbody>
                <tr>
                    <td>1</td>
                    <td><h5>Cultura</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                        
                    </td>
                </tr>
    
                <tr>
                    <td>2</td>
                    <td><h5>Turismo</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                   
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><h5>Educação</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><h5>Esporte</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                 
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><h5>Gabinete</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                   
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><h5>Meio Ambiente</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><h5>Obras</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><h5>Promoção Social</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>

        <tbody>

        <!--Botão de voltar-->
        
        <div class="row">
            
                <a type="button" class="btn btn-primary "nav-link href="index.html">Voltar</a>
            
        </div>
    </div>
    </div> <!-- fim do row -->
        
</body>
</html>