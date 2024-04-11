<?php
include_once 'inc/paginering.php';
include 'inc/header.php';
// header tags toevoegen
echo '<header class="head">';
echo '</header>'; //afsluiten header

// voor gridopmaak alvast de main-content
echo '<main class="main-content">';
// Begin FORM
?>
<table id="customers">
    <tr>
        <th>klantnr</th>
        <th>klantnaam</th>
        <th>contactpersoon</th>
        <th>straat</th>
        <th>huisnummer</th>
        <th>postcode</th>
        <th>plaats</th>
        <th>telefoon</th>
        <th>actie</th>
    </tr>
    <?php
// ophalen klantgegevens uit database
$query="SELECT id, naam, cp, straat, huisnummer, postcode, plaats, telefoon, notitie
        FROM Klant
        ORDER BY naam, plaats
        LIMIT 1, 20;";
       //$resultaat bepalen....
$result=mysqli_query($dbconn, $query);
//aantal records bepalen....
$aantal=mysqli_num_rows($result);
$contentTable="";
// tabel aanvullen met klantgegevens
if ($aantal>0){ //controle of er wel wat opgehaald wordt...
    while ($row=mysqli_fetch_array($result)) {
        $contentTable.="<tr>
                            <td>".$row['id']."</td>                       
                            <td>".$row['naam']."</td>                       
                            <td>".$row['cp']."</td>                       
                            <td>".$row['straat']."</td>                       
                            <td>".$row['huisnummer']."</td>                       
                            <td>".$row['postcode']."</td>                      
                            <td>".$row['plaats']."</td>                      
                            <td>".$row['telefoon']."</td>
                            <!--<td>".$row['notitie']."</td>-->
                            <td> 
                                <a href='klant_edit.php?id={$row['id']}' class='btn-edit'><i class='material-icons md-24'>edit</i></a>
                                <a href='klant_delete.php?id={$row['id']}' class='btn-delete'><i class='material-icons md-24'>delete</i></a>
                            </td>
                        </tr>"; }
}
else {
    $contentTable='<tr>
                        <td colspan="9">Geen gegevens om op te halen...</td>
                    </tr>';
}
// weergave van de rest van de tabel;
$contentTable.='</table><br>';
echo $contentTable;

// paginering van de tabel

// invoegen footer
echo '</div>';
echo '</main>';
include ("inc/footer.php");
?>
                