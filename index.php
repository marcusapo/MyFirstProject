<?php
  include ('./php/conn.php');
  if (isset($_POST['present'])) {
    $data = [$_POST['person'], $_POST['id']];

    $SQL = $conn->prepare('UPDATE product SET situation = 1, person = ? WHERE id = ?');
    $SQL->execute($data);
}
?>
<html lang="en">
<head>
    <title>Amanda e Filipe</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/lista.css">
    <link rel="stylesheet" href="./css/general.css">
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
        <h1 class="font-alex">Seja bem-vindo (a)</h1>
        <div class="logo"></div>
        <a href="#turn" class="butt font-alex">Lista de presentes</a>
    </section>


    <section id="turn" class="gifts1">
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
                    <h6>SALVEEEEEEEEEEEEEEEEEE</h6>
                </div>
            </div>
            <div>
                <div id='boxItems'>
                    <?php
                        include ('PHP/conn.php');

                        $SQL = $conn->prepare('SELECT * FROM product');
                        // $SQL = $conn->prepare('SELECT * FROM product WHERE situation = 1');
                        $SQL->execute();
                        $result = $SQL->fetchAll();
                        foreach ($result as $product) {
                            $id = "'".$product['id']."'";
                            $image = "'".$product['image']."'";
                            $name = "'".$product['name']."'";
                            $size = "'".$product['size']."'";
                            $color = "'".$product['color']."'";
                            $brand = "'".$product['brand']."'";
                            $situation = "'".$product['situation']."'";

                            $modal = "abrirModal(".$id.")";

                            echo '<div class="product font-franklin situation';
                            echo $product['situation'];
                            echo '">';
                            echo    '<div class="productImg" style="background:url(';
                            echo    $product['image'];
                            echo    ');">';
                            echo    '</div>';
                            echo    '<p class="font-franklin">';
                            echo        $product['name'];
                            echo    '</p>';
                            echo    '<div class="productSubName">';
                            echo        '<p class="font-franklin">';
                            echo            $product['size'];
                            echo        '</p>';
                            echo        '<p class="font-franklin">|</p>';
                            echo        '<p class="font-franklin">';
                            echo            $product['color'];
                            echo        '</p>';
                            echo        '<p class="font-franklin">|</p>';
                            echo        '<p class="font-franklin">';
                            echo            $product['brand'];
                            echo        '</p>';
                            echo    '</div>';
                            echo    '<div class="presentBase">';
                            echo        '<p class="font-alex present" onClick="'.$modal.'">Presentear</p>';
                            echo        '<a  class="font-alex" href="';
                            echo            $product['image'];
                            echo        '" class="font-alex" target="_blank"><p class="view   present">Visualizar</p></a>';
                            echo    '</div>';
                            echo '</div>';
                        }
                    ?>    
                </div>           
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