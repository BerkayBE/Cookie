<?php
if( isset($_COOKIE["ad"]) ) {

    echo $_COOKIE["ad"];
    }else {
        setcookie("ad","Berkay", time()+60*60);
        echo $_COOKIE["ad"]."değeri yeni oluşturulmuştur";
    
    }

    ?>