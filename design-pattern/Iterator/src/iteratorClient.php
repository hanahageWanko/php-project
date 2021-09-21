<?php
require_once ('./class/Employee.php');
require_once ('./class/Employees.php');
require_once ('./class/SalesmanIterator.php');

function dumpWithForeach($iterator) {
  echo '<ul>';
  foreach($iterator as $employee) {
    printf('<li>%s (%d, %s)</li>',
      $employee->getName(),
      $employee->getAge(),
      $employee->getJob()
    );
  }
  echo '</ul>';
  echo '<hr>';
}

$employees = new Employees();
$employees->add(new Employee('SMITH', 32, 'CLERK'));
$employees->add(new Employee('ALLEW', 26, 'SALESMAN'));
$employees->add(new Employee('MARTIN', 50, 'SALESMAN'));
$employees->add(new Employee('CLARK', 45, 'MANAGER'));
$employees->add(new Employee('KING', 58, 'PRESIDENT'));

$iterator = $employees->getIterator();

/**
 * iteratorのメソッドを利用する
 */

echo '<ul>';
while($iterator->valid()) {
  $employees = $iterator->current();
  printf(
    '<li>%s (%d, %s)</li>',
    $employees->getName(),
    $employees->getAge(),
    $employees->getJob()
  );
  $iterator->next();
}
echo '</ul>';
echo '<hr>';

/**
 * foreach分を利用する場合
 */
dumpWithForeach($iterator);

/**
 * 異なるIteratorで要素を取得する
 */

dumpWithForeach(new SalesmanIterator($iterator));