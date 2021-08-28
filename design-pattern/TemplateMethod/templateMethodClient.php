<?php
  require_once './class/ListDisplay.php';
  require_once './class/TableDisplay.php';

  $data = [
    'Design Pattern',
    'Gang of Four,',
    'Template Method Sample1',
    'Template Method Sample2'
  ];

  $display1 = new ListDisplay($data);
  $display2 = new TableDisplay($data);

  $display1->display();
  echo '<hr>';
  $display2->display();