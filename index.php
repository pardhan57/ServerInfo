<?php
/*Server Information */

$style = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

include_once('./server-info.php');

foreach ($serverInfo as $key => $value){
    echo '<ul class="list-group">
            <li class="list-group-item">' .$key . ' ' . $value.'</li>
            <li class="list-group-item">' .$key . ' ' . $value.'</li>
            <li class="list-group-item">' .$key . ' ' . $value.'</li>
            <li class="list-group-item">' .$key . ' ' . $value.'</li>
            <li class="list-group-item">' .$key . ' ' . $value.'</li>
        </ul>';
}

?>