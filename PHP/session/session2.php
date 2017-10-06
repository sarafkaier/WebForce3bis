<?php

session_start(); // Si un fichier de session existe et est lié à notre navigateur via le cookie (PHPSESSID), alors il est ouvert, et les informations à l'intérieur sont accessible via la superglobale $_SESSION.

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// Le print_r() affiche un array à l'indice pseudo la valeur Yakine.

// Et pourtant cela à été déclaré dans le fichier session1.php. Session1.php et session2, n'ont rien à voir l'un et l'autre (pas d'inclusion de fichier), grâce au fichier de sessions (/tmp) session2.php a accès aux informations de session grâce à session_start().


?>
