<?php

//Lógica para ir la pantalla 1
if (strtolower($_POST['pokemon'])=='pikachu') {
   header('Location: ../view/pantalla1.php');
} else {
    header('Location: ../index.php?msg=25');
}


if (strtolower($_POST['pokemon2'])=='pichu') {
    header('Location: ../pantalla2.php');
 } else {
     header('Location: ../view/pantalla1.php');
 }
?>