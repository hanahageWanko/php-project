<?php
  require_once ('Employee.php');

  // FilterIteratorクラスはオブジェクトを包み込むクラスで、包み込まれるオブジェクトに付加的な機能を提供する。
  // この機能は、抽象メソッドであるacceptメソッドを実装することで実現できる
  class SalesmanIterator extends FilterIterator {
    public function __construct($iterator) {
      parent::__construct($iterator);
    }
    public function accept() {
      // 要素の現在の値を取得する
      $employee = $this->current();
      // ここでは、要素が「SALESMAN」に一致する場合に返却している
      return ($employee->getJob() === 'SALESMAN');
    }
  }