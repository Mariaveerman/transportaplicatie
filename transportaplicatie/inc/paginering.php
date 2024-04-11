<?php
include "conn/database.php";
//bekende vars: $page, $total_pages, $page_url
// begin met div...
echo '<div class="pagination">';

// Controleer of $page en $total_pages zijn gedefinieerd
if (!isset($page)) {
    $page = 0; // Standaardwaarde instellen als $page niet is gedefinieerd
}
if (!isset($total_pages)) {
    $total_pages = 0; // Standaardwaarde instellen als $total_pages niet is gedefinieerd
}

if (!isset($add_symbol)){
    $add_symbol = "?";
}
//vorige pagina
if ($page > 1) {
    $prev_page = $page - 1;
    echo "<a href='{$page_url}{$add_symbol}page={$prev_page}'>&laquo;</a>";
}
//alle pages in numbers
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='{$page_url}{$add_symbol}page=" . $i . "'";
    if ($i == $page) echo " class='curPage'";
    echo ">" . $i . "</a>";
}
// laatste pagina
if ($page < $total_pages) {
    $next_page = $page + 1;
    echo "<a href='{$page_url}{$add_symbol}page={$next_page}'>&raquo;</a>";
}
echo "</div>";
?>
