<?php
class Order
{
  private $id;
  private $items;
  public function __construct($id)
  {
    $this->id = $id;
    $this->items = [];
  }

  public function addItem(Item $item)
  {
    $id = $item->getId();
    if (!array_key_exists($id, $this->items)) {
      $this->items[$id]['object'] = $item;
      $this->items[$id]['amount'] = 0;
    }
    $this->items[$id]['amount']++;
  }

  public function getItem()
  {
    return $this->items;
  }

  public function getId()
  {
    return $this->id;
  }
}
