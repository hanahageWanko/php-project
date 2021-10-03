<?php
require_once 'OrderDao.php';
require_once 'Order.php';

class DbOrderDao implements OrderDao
{
  private $orders;
  public function __construct(ItemDao $item_dao)
  {
    // dataを取得
    $data  = __DIR__ . '/../data/order_data.json';
    $this->orders = file_get_contents($data);
    $this->orders = json_decode($this->orders, true);

    $this->items = [];
    foreach ($this->orders["item"] as $item) {
      $order_id = $item['order_id'];
      $item_ids  = $item['item_id'];
      $order = new Order($order_id);
      foreach ($item_ids as $index => $item_id) {
        $target = $item_dao->findById($item_id[$index]);
        if (!is_null($target)) {
          $order->addItem($target);
        }
      }
      $this->orders[$order->getId()] = $order;
    }
  }

  public function findById($order_id)
  {
    if (array_key_exists($order_id, $this->orders)) {
      return $this->orders[$order_id];
    } else {
      return null;
    }
  }
}
