<?php
$autRol=isset($_SESSION['rol']) ? strtolower($_SESSION['rol']) : '';
$inlognaam=isset($_SESSION['inlognaam']) ? $_SESSION['inlognaam'] : '';
// samenstellen menu
$menu = '';
// op basis van rol menu tonen
switch ($autRol){
    case 'beheerder':
        $menu='<nav>
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="klanten.php">klantegegevs</a></li>
        <li><a href="opdrachten.php">Opdrachten</a></li>
        <li>
            <a href="#Beheer" class="dropbtn">Beheer</a>
            <ul>
                <li><a href="#">Nieuwe gebruiker</a></li>
                <li><a href="#">Wijzigen gebruiker</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
                      </ul>
  </nav>';
        break;
    case 'administratie':
        $menu='<nav>
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="klanten.php">klantegegevens</a></li>
        <li><a href="opdrachten.php">opdrachten</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
        </ul>
  </nav>';
        break;
    case 'planner':
        $menu='<nav>
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="klanten.php">klantgegevens</a></li>
        <li><a href="opdrachten.php">opdrachten</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
        </ul>
  </nav>';
        break;
    case 'klantrelaties':
        $menu='<nav>
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="klanten.php">klantgegevens</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
        </ul>
  </nav>';
  break;
  default:
      $menu='';
}

echo $menu;

?>
