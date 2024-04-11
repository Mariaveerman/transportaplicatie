<?php
include 'inc/header.php';
// header tags toevoegen
echo '<header class="head">';
// hier komt straks een url om een nieuwe klant aan te maken…

echo '</header>'; //afsluiten header
// voor gridopmaak alvast de main-content
echo '<main class="main-content">';
// FORM EDIT klant...
echo '<div id="frmDetail">';
if (isset($_GET["id"])) {
    $opdrachtId=$_GET["id"];
    $klantid = $_GET["klantid"];
}
else {
    echo 'Opdracht niet gevonden...';
    header('refresh: 2; url=opdrachten.php');
    exit();
}
// delete opdracht en terug naar klant?
if (deleteOpdracht($dbconn, $opdrachtId)) {
    echo 'actie geslaagd';
    header('refresh: 2; url=opdrachten.php?klantid=' . $klantid);
    exit();
} else {
    header('refresh: 2; url=klanten.php');
    exit();
}
?>
<div>
    <p>Weet u zeker dat u deze klant wilt verwijderen?</p>
    <form action="dataverwerken.php" method="POST" class="frmDetail">
        <input type="hidden" name="action" value="deleteOpdr">
        <input type="hidden" name="opdrachtnr" value="<?php echo $opdrachtId;?>">
        <div class="submitbtn">
            <input type="submit" name="submit" value="Opdracht verwijderen" class="btnDetailSubmit">
        </div>
    </form>
</div>

<?php
echo '</div>'; //frmDetail
echo '</main>'; //main-content
include ("inc/footer.php");
?>