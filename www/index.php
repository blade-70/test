<?php
   header('Content-type: text/html; charset=utf-8');
   error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
   ini_set('display_errors', 1);
   
   print 'Задание №1. <br>';
   
        $name='Евгений';
        $age=40;
   
        echo "Меня зовут $name. <br> Мне ~ $age лет.<br>";
   //  Задание №1 - выполнено.
   echo '**************<br>Задание №2.<br>';
   
   define('CITY', "Уфа");
   var_dump (CITY);
   echo '<br>Нахожусь в городе ',CITY,'.<br>';
   
  //  Задание №2 - выполнено. Изменить значение константы не возможно.
      echo '**************<br>Задание №3.<br>';
     $book=array('title'=>'Вниз по великой реке','author'=>'Диана Уинн Джонс','pages'=>'237');
     echo 'Недавно я прочитал книгу ' .$book['title']. ', написанную автором '.$book['author']. 
             ', я осилил все '.$book['pages']. 'страниц, мне она очень понравилась.<br>';

  //  Задание №3 - выполнено.
   echo '**************<br>Задание №4.<br>';

   $book1=array ('title'=>'Вниз по великой реке','author'=>'Диана Уинн Джонс','pages'=>'237');
   $book2=array ('title'=>'ВВерх по великой реке','author'=>'Диана Уинн Джонс','pages'=>'330');
   $books=array ('$book1', '$book2');
   echo 'Недавно я прочитал книги '.$book1['title']. ' и '.$book2['title']. 
           ', написанные соответсвенно авторами '.$book1['author']. ' и '.$book2['author']. 
           ', я осилил в сумме ' .($book1['pages']+$book2['pages']). ' страниц, не ожидал от себя подобного.';
   //  Задание №4 - выполнено.
?>
