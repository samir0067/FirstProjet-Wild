<?php
function nav_title (string $lien, string $title): string
{
    $classe = 'nav_title';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe = $classe . ' active';
    }
    return '<li class="' . $classe . '">
            <a class="nav-item nav-link" href="' . $lien . '"> ' . $title . '</a>
        </li>';
}
?>

<pre>
<?php print_r($_SERVER); ?>
</pre>


<?= nav_title('/c_viePerso.php', 'Mon histoire'); ?>