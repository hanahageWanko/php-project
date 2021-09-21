<?php
  require_once './class/Order.php';
  require_once './class/OrderItem.php';
  require_once './class/ItemDao.php';
  require_once './class/OrderManager.php';

  $order = new Order();
  $item_dao = ItemDao::getInstance();

  $order->addItem(new OrderItem($item_dao->findById(1),2));
  $order->addItem(new OrderItem($item_dao->findById(2),1));
  $order->addItem(new OrderItem($item_dao->findById(3),3));

  /**
   * 注文処理はこの1行だけ
   */

  OrderManager::order($order);
  