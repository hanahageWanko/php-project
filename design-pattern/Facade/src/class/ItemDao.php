<?php
  require_once 'OrderItem.php';

  class ItemDao {
    private static $instance;
    private $items;
    private function __construct() {
      $data  =__DIR__ . '/item_data.json';
      $json = file_get_contents($data);
      $json = json_decode($json, true);
      /**
       * ヘッダ行を抜く
       */
      $this->items = [];
      foreach($json["item"] as $item) {
        $item_id = $item['id'];
        $item_name = $item['item'];
        $item_price = $item['price'];
        $item = new Item($item_id, $item_name, $item_price);
        $this->items[$item->getId()] = $item;
      }
    }

    public static function getInstance() {
      if(!isset(self::$instance)) {
        self::$instance = new ItemDao();
      }
      return self::$instance;
    }

    public function findById($item_id) {
      if(array_key_exists($item_id, $this->items)) {
        return $this->items[$item_id];
      } else {
        return null;
      }
    }

    public function setAside(OrderItem $order_item) {
      echo $order_item->getItem()->getName() . 'の在庫引き当てを行いました<br>';
    }

    /**
     * このインスタンスの複製を許可しないようにする
     * @throws RuntimeException
     */
    public final function __clone() {
      throw new RuntimeException('Clone is not allowed against' . get_class($this));
    }

  }