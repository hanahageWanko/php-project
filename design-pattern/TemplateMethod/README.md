# TmplateMethodパターン
- 処理の穴埋めするデザインパターン
- 親クラス
  - 共通処理を記述する
  - 子クラスごとに内容を変更したいメソッドは抽象メソッドとして定義だけしておく
- 子クラス
  - 親クラスから継承したメソッドに具体的な処理内容を記述する