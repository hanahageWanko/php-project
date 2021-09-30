<?php
if (isset($_POST['factory'])) {
  $factory = $_POST['factory'];

  switch ($factory) {
    case 1:
      include_once 'http://127.0.0.1:8080/design-pattern/AbstractFactory/src/DbFactory.php';
      $factory = new DbFactory();
      break;
    case 2:
      include_once './class/MockFactory.php';
      $factory = new MockFactory();
      break;
  }

  $item_id = 1;
  $item_dao = $factory->createItemDao();
  $item = $item_dao->findById($item_id);
  echo 'ID=' . $item_id . 'の商品は「' . $item->getName() . '」です<br>';

  $order_id = 3;
  $order_dao = $factory->createOrderDao();
  $order = $order_dao->findById($order_id);
  echo 'ID=' . $order_id . 'の注文情報は次の通りです。';
  echo '<ul>';
  foreach ($order->getItems() as $item) {
    echo '<li>' . $item['ovject']->getName();
  }
  echo '</ul>';
}
?>
<hr>
<form action="" method="post">
  <div>
    DaoFactoryの種類：
    <input type="radio" name="factory" value="1">DbFactory
    <input type="radio" name="factory" value="2">MockFactory
  </div>
  <div>
    <input type="submit">
  </div>
</form>