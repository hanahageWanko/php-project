<?php
  require_once 'ItemDao.php';
  require_once 'Item.php';

  class DbItemDao implements ItemDao {
    private $items;
    private $json;
    public function __construct() {
      // dataを取得
      $data  =__DIR__ . '/../data/item_data.json';
      $this->json = file_get_contents($data);
      $this->json = json_decode($this->json, true);

      $this->items = [];
      foreach($this->json["item"] as $item) {
        $item_id = $item['id'];
        $item_name = $item['item'];
        $item_price = $item['price'];
        $item = new Item($item_id, $item_name, $item_price);
        $this->items[$item->getId()] = $item;
      }

    }
    public function findById($item_id) {
      if (array_key_exists($item_id, $this->items)) {
        return $this->items[$item_id];
      } else {
        return null;
      }
    }
  }