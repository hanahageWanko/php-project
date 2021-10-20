<?php
require_once 'Listing.php';

/**
 * Listingクラスで提供されている機能を拡張する
 * RefinedAbstractionに相当する
 */

class ExtendedListing extends Listing
{
  /**
   * コンストラクタ
   * @param $source_name ファイル名
   */
  function __construct($data_source)
  {
    parent::__construct($data_source);
  }

  /**
   * データを読み込む際、データの中の特殊文字を変換する
   * @return 変換されたデータ
   */

  function readWithEncode()
  {
    return htmlspecialchars($this->read(), ENT_QUOTES, mb_internal_encoding());
  }
}
