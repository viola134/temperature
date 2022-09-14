<?php
$b = 0;
$a = rand(-30, 50);
echo round($a);
echo ($a>$b? "<span style = \"color: red;\">Тепло! </span>" : ($a == $b ?
"Не мороз и не тепло..." : "<span style = \" color: blue;\"> Мороз!</span>"));
