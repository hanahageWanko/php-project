<?php
  require_once './class/DisplaySourceFileImplTransfer.php';

  /**
   * DisplaySourceFileImplクラスをインスタンス化する
   * 内容を表示するファイルは、「ShowFile.php」
   */

    $show_file = new DisplaySourceFileImpl('./class/ShowFIle.php');

   /**
    * プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
    */
   $show_file->display();
