<?php
/**
 * Abstract Classクラスに相当する
 */
abstract class AbstractDisplay {

  private $data;

  /**
   * @param mixed 表示するデータ
   */

  public function __construct($data) {
    if(!is_array($data)) {
        $data = array($data);
    }
    $this->data = $data;
  }

  /**
 * template methodに相当 
 */
  public function display() {
    $this->displayHeader();
    $this->displayBody();
    $this->displayFooter();
  }

  /**
   *  データを取得する
   */
  public function getData() {
    return $this->data;
  }


  /**
   * ヘッダを取得する
   * サブクラスに実装を任せるメソッド
   */
  protected abstract function displayHeader();

  /**
   * ボディ（クライアントから渡された内容）を表示する
   * サブクラスに実装を任せるメソッド
   */
  protected abstract function displayBody();

  /**
   * フッターを表示する
   * サブクラスに実装を任せるメソッド
   */
  protected abstract function displayFooter();


}