<?php
$components = [
    'header_vanlthpc07042',
    'album_vuntpc07201',
    'footer_phuoctmpc07090'
];
require_once 'header.php';
foreach ($components as $component){
    if (file_exists('components/' . '/' . $component . '.php')){
        require 'components/' . '/' . $component . '.php';
    }
}
require_once 'footer.php';