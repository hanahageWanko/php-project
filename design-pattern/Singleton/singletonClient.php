<?php
  require_once './class/Singleton.php';

  /**
   * インスタンスを2つ取得する
   */

  $instance1 = Singleton::getInstance();
  sleep(1);
  $instance2 = Singleton::getInstance();

  echo '<hr>';

  /**
   * 2つのインスタンスが同一IDかどうか検証する
   */

  echo 'instance ID : ' . $instance1->getID() . '<br>';
  echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
  echo '<hr>';

  /**
   * 2つのインスタンスが同一か検証する
   */

  echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
  echo '<hr>';

  /**
   * 複製できないことを確認する
   */

   $instance1_clone = clone $instance1;