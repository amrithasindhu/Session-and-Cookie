<?php

setcookie("username", "Amritha", time() - 3600, "/");
echo $_COOKIE['username'];