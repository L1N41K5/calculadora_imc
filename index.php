<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            $("#form").submit(function() {
            event.preventDefault();
            });
        </script>
        <title>IMC</title>
    </head>
    <body>
        <header class="cabecalho">
            <h1>Cálculo IMC </h1>
        </header>
        <main class="principal">
            <div class="conteudo">
                <article class="alinhar">
                    <div class="modulo verde">
                        <h3>Calcule Aqui</h3>
                        <section>
                            <form method="post" action="insert.php" name="form">
                            Peso: <input type="number" step="0.01" name="p"><br><br>
                            Altura:<input type="number" step="0.01" name="a"><br><br>
                            <div align="center">
                            <input type="submit" value="Calcular IMC">
                            <div>
                        </section>
                    </div>
                    
                    <div class="modulo verde">
                        <h3>Histórico de Cálculos</h3>
                        <section>
                            <?php
                                include_once("config.php");

                                $result = $dbConn->query("SELECT * FROM calculo ORDER BY id DESC");
                                ?>

                            <table width='80%' border=0>

                            <tr bgcolor='#CCCCCC'>
                                <td>Peso</td>
                                <td>Altura</td>
                                <td>IMC</td>
                                <td>Resultado</td>
                            </tr>
                            <?php

                            $remover = "<i class='small material-icons'>close</i>";

                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>";
                                    echo "<td>".$row['peso']."</td>";
                                    echo "<td>".$row['altura']."</td>";
                                    echo "<td>".$row['imc']."</td>";
                                    echo "<td>".$row['resultado']."</td>";
                        
                                    echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Deseja remover?')\">$remover</a></td>";
                                }
                              
                            ?>
                              
                            </table>
                        </section>
                    </div>
                </article>
            </div>
        </main>
        <footer class="rodape">
            By Liniker © <?= date('Y'); ?>
        </footer>
    </body>
</html>