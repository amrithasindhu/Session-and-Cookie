 <?php
 if(isset($_COOKIE['username']))
 {
    echo "Hello" . $_COOKIE['username'];
 }
 else{
    echo "hello all";
 }