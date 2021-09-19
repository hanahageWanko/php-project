<?php
require_once('Reader.php');
require_once('CSVFileReader.php');
require_once('XMLFileReader.php');

/**
 * Readerクラスのインスタンス生成を行うクラス
 */

class ReaderFactory
{
  /**
   * Readerクラスのインスタンスを生成する
   */
  public function create($filename)
  {
    $reader = $this->createReader($filename);
    return $reader;
  }

  /**
   * Readerクラスのサブクラスを条件判定し、生成する
   */
  public function createReader($filename)
  {
    $poscsv = stripos($filename, '.csv');
    $posxml = stripos($filename, '.xml');
    if ($poscsv !== false) {
      $r = new CSVFileReader($filename);
      return $r;
    } else if ($posxml !== false) {
      return new XMLFileReader($filename);
    } else {
      die("This filename is not supported : ${fileneme}");
    }
  }
}
