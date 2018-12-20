<?php
    
    echo "<br> <i>файл</i> lib.php  <b>подключен</b><br>";
    $i=10;
    
    // цикл while
    echo "<hr><br>Цикл <b>while</b><br>";
    
    echo "цикл $i";
    while ($i>0){
        $i--;
        echo '<br>цикл '.$i;
    }
    echo "<hr><br>Цикл <b>for</b><br>";
    // цикл for
    for ($i_f; $i_f<10; $i_f++){
        echo '<br>'."$i_f";
    }
    echo '<br>'."$i_f".'<br>';
    
    
    
    // цикл foreach
    echo "<hr><br>Цикл <b>FOREACH</b><br>";
    $names = array ("Иванов"=>"Андрей","Петров"=>"Борис","Волков"=>"Сергей","Макаров"=>"Федор");
    //$names["Петров"] = "Борис";
    //$names["Волков"] = "Сергей";
    //$names["Макаров"] = "Федор";
    echo  'массив состоит из <b>'.(count($names)).'</b> символов<br>';
    foreach ($names as $key => $value) {
        echo "<b>$value $key</b><br>";
    }    
?>