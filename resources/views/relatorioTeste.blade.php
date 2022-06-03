
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>

    <link href="relatorio.css" rel="stylesheet">
    <i class="bi bi-arrow-left-square-fill"></i>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                        @foreach($requisicao as $requisicoes)
                            <p>{{$requisicoes->titulo}}</p>
                        @endfoeach
                    </td>
                </tr>
    
                <tr>
                    <td>2</td>
                    <td><h5>Turismo</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><h5>Educação</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><h5>Esporte</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><h5>Gabinete</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><h5>Meio Ambiente</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><h5>Obras</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><h5>Promoção Social</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><h5>Saúde</h5></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>

        <tbody>
        <!-- Buscando as infomação no banco com while.
            <php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<tr>".$user_data['codigo']."<tr>";
                    echo "<tr>".$user_data['secretaria']."<tr>";
                    echo "<tr>".$user_data['pendentes']."<tr>";
                    echo "<tr>".$user_data['realizado']."<tr>";
                    echo "<tr>".$user_data['total']."<tr>";
                    echo "</tr>";
                }
                
            ?>
        -->

        <!--Botão de voltar-->
        <style>
            .button {     
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;        
            }
        </style>
        
        <div class="row">
            <li class="nav-item">
                <div class="container text-center">
                <a type="button" class="btn btn-primary "nav-link href="../welcome.blade.php">Voltar</a>
            </li>
        </div>
    </div>
    </div> <!-- fim do row -->
        
</body>
</html>