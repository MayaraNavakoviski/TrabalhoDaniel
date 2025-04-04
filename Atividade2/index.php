<link rel="stylesheet" href="style.css">

<?php 

require_once("Modelo/Link.php");


// Função desenhaBotão:

function desenhaBotao($array, $titulo) {
    echo "<div class='dropdown'>";
    echo "<button class='dropbtn'>$titulo</button>";
    echo "<div class='dropText'>";
    foreach ($array as $link) {
        echo "<span><img src='" . $link->getLinkImg() . "' width='
        20' height='20'>" . $link->getInfo() . "</span>";
        }
        echo "</div>";
        echo "</div>";
}


// Botão 1:

$obj1 = New Link("https://logospng.org/wp-content/uploads/chanel.png", "Chanel");
$obj2 = New Link("https://logospng.org/download/dior/logo-dior-256.png", "Dior");
$obj3 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ-fAmbGmcJidkwDugWSOKEYSUOTq8_BlACQ&s", "Versace");
$obj4 = New Link("https://logospng.org/download/gucci/logo-gucci-256.png", "Gucci");

$moda = array($obj1, $obj2, $obj3, $obj4);

desenhaBotao($moda, "Moda");



// Botão 2:

$obj5 = New Link("https://licensingcon.com.br/wp-content/uploads/2023/05/f1.png", "Grêmio");
$obj6 = New Link("https://icons.iconarchive.com/icons/giannis-zographos/south-american-football-club/256/Palmeiras-icon.png", "Palmeiras");
$obj7 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS63CSM3vkGv3XzuszuxS8ZNt9dTGNyOL4m2w&s", "Santos");
$obj8 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3j_A_A5cSzT9MmttTe_foqIKgqqvKVzPqOA&s", "Flamengo");

$times = array($obj5, $obj6, $obj7, $obj8);

desenhaBotao($times, "Times");

// Botão 3:

$obj9 = New Link("https://cdn.iconscout.com/icon/free/png-512/free-ferrari-4-202771.png?f=webp&w=256", "Ferrari");
$obj10 = New Link("https://i.pinimg.com/originals/e2/e4/66/e2e4662e541a44a55410f40315f9222d.jpg", "Lamborghini");
$obj11 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwkkilCcaD-gYToRQbaqDf5olYfACSCpfMZw&s", "Porsche");
$obj12 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYy-qVX0MPrpJgDyy6NDqE5qAqRsMnzMWGMQ&s", "Mercedes");

$carros = array($obj9, $obj10, $obj11, $obj12);

desenhaBotao($carros, "Carros");

// Botão 4:

$obj13 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWMsC9BwThvgCrl_YG3KbO3skYEMUH45Do3Q&s", "KFC");
$obj14 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-mwH8D7nmaq8OOj_A5qI4qh4LnXhuJtN5vQ&s", "Burguer King");
$obj15 = New Link("https://logospng.org/download/spoleto/logo-spoleto-1024.png", "Spoleto");
$obj16 = New Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRjLWhWpx9PfbzysffLbMA_DK_8jawJAVHbw&s", "McDonald's");

$restaurantes($obj13, $obj14, $obj15, $obj16);

desenhaBotao($restaurantes, "Restaurantes");






