<?php

/*unsetuje sesiju i vraca gosta na pocetnu stranicu*/

session_start();

unset($_SESSION);

session_destroy();

header('Location: http://localhost/SlagalicaIgniter/');