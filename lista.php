<?php
  include ('./php/conn.php');
?>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/lista.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/painel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&display=swap" rel="stylesheet">
</head>
<body>
    <a href="file:///C:/Users/sdagd/Downloads/lista%20de%20presentes%20(1).pdf"></a>

    <section id='checkgift' class="checkgift">
        <div class="checkgift1">
            <div>
                <p class="x" onClick="sairModal()">❌</p>
            </div>
            <div class="font-times">

                <h2 class="af3 af" >A❤F</h2>
                <h2>Digite seu nome completo:</h2>
                <form class="form"  method="POST">
                    <input type='hidden' name='id' value='' id='id' />
                    <input type="" class="inputpresent" name="person" placeholder="Seu nome completo">
                    <button class="present font-alex" type='button' onClick="abrirModal2()">Presentear</button>
                    <div class="window1">
                        <p class="font-times">Tem certeza que deseja reservar este produto?</p>
                        <div>
                            <input class="butt2 font-alex" type="submit" name="present"  value="Sim">
                            <div class="butt2 font-alex" onClick="sairModal()"><p>Não</p></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="exit" onClick="sairModal()"></div>
    </section>

    <section class="home">
        <h1 class="font-alex">Painel</h1> 
        <div class="logo"></div>
        <a href="index.php"  class="butt font-alex">Lista de presentes</a>
    </section>

    <section id="" class="gifts1">
        <div></div>
        <div>
            <div class="list">
                <div class="background2">
                    <div class=welcome></div>
                    <div class="AF">
                        <p class="AF">A</p>
                        <h2 class="heart">❤</h2>
                        <p class="AF">F</p>
                    </div>
                    <p class="font-alex">Lista de presentes</p>
                </div>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Produto</th>
                        <th>Pessoa</th> 
                    </tr>
                    <?php
                         $SQL = $conn->prepare('SELECT * FROM product WHERE situation = 1');
                         $SQL->execute();
                         $result = $SQL->fetchAll();
                         foreach ($result as $product) {
                            echo "<tr>";
                                echo "<td>" . $product['name'] . "</td>";
                                echo "<td>" . $product ['person'] . "</td>";
                            echo "</tr>";
                         }
                    ?>
                </table>
            </div>
            <div class="under">
                <p class="thanks">Olá amigos e familiares, agradecemos por todo carinho e contribuição!
                                Esperamos vocês no nosso felizes para sempre no dia 2 de julho,
                                2023 ás 16h, no Spazio Grand Jardin, Gama- DF.
                </p>
                <a id="map" href="https://www.google.com/maps/place/Spazio+Grand+Jardin+Buffet+e+Eventos/@-16.0047948,-48.0499692,17z/data=!3m1!4b1!4m5!3m4!1s0x935a2a82548fb607:0x902ebc337a211a55!8m2!3d-16.0047948!4d-48.0477805" target="_blank"><p>Abrir no mapa</p></a>
                <p class="marrieds">Amanda e Filipe</p>
            </div>   
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>