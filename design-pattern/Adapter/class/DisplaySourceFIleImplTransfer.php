<?php
  require_once 'DisplaySOurceFIle.php';
  require_once 'ShowFile.php';

  /**
   * DisplaySourceFileを実装したクラス
   */

   class DisplaySourceFileImpl implements DisplaySourceFile
   {
       /**
        * ShowFilekクラスのインスタンスを保持する
        */
       private $show_file;

       /**
        * コンストラクタ
        */

       public function __construct($filename)
       {
           $this->show_file = new ShowFile($filename);
       }

       /**
        * 指定されたソースファイルをハイライト表示する
        */

       public function display()
       {
           $this->show_file->showHighlight();
       }
   }
