<?php

function getAllProducts() {
    return json_decode(file_get_contents('../Data/data_p.json'), true);
}

?>