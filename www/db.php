<?php
    $db_host = 'localhost';
    $db_name = 'cook-shop';
    $db_username = 'root';
    $db_password = 'lerua102';
    

    
    /* Соединяемся, выбираем базу данных */
    $link = mysql_connect($db_host,$db_username,$db_password)
        or die("нет соединения с хостом : $db_host" . mysql_error());
    print "Соединение с хостом <b>$db_host</b> установлено <br>";
    mysql_select_db($db_name) or die("база данных $db_name не найдена - mysql eror: ". mysql_error());

    /* Выполняем SQL-запрос */
    $query = "SELECT * FROM user where first_name='Евгений'  order by code_user  limit 30";
    $result = mysql_query($query) or die("<br>ошибка запроса  $query  mysql eror:" . mysql_error());
    
   
    
    /* Выводим результаты в html */
    print "<table border=1>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";

    /* Освобождаем память от результата */
    mysql_free_result($result);

    /* Закрываем соединение */
    mysql_close($link);


?>
