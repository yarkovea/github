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
    
   // проверка кол-ва полученных данных
    $num_rows = mysql_num_rows($result);
    //echo "возвращено $num_rows значений.<br>";
    
    if ($num_rows>0){
        print "<table border=1>\n";
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
            print "\t<tr>\n";
            foreach ($line as $col_value) {
                print "\t\t<td>$col_value</td>\n";
            }
            print "\t</tr>\n";
        }
        print "</table>\n";
    }
    else {
        echo "возвращено $num_rows значений.<br>";
    }
    
    // создание таблицы
    // проверка на существование таблицы с таким же именем
    //
    
    $table_create = "CREATE TABLE IF NOT EXISTS `primer` (
        `id` int(10) NOT NULL AUTO_INCREMENT,
        `name1` varchar(36) NOT NULL,
        `name2` varchar(36) NOT NULL,
        `name3` varchar(36) CHARACTER SET utf8mb4 NOT NULL,
        `bigid` varchar(36) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
    ";
    $table_create_1 = mysql_query($table_create) or die("<br>ошибка создания таблицы  mysql eror:" . mysql_error());;
    

    /* Освобождаем память от результата */
    mysql_free_result($result);

    /* Закрываем соединение */
    mysql_close($link);


?>
