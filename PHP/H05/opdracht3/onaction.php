<?php

echo '<style> img { width: 200px; height: 200px; }</style>';

foreach ($_GET['dierennamen'] as $diernaam ) {
    echo '<img class="img" src="https://source.unsplash.com/random/?'. $diernaam .'" alt="'. $diernaam .'">' . "<br>\n";
}

?>

