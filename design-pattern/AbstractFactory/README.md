# Abstract Hactoryパターン

## 概要
- 互いに関連したり依存し合うオブジェクト群を、その具象クラスを明確にせずに生成するためのインターフェースを提供するパターンである。

## AbstractFactoryパターンのメリット
- 具体的なクラスをクライアントから隠蔽する
  - クライアントは具体的なスーパークラスにアクセスすることなく、部品化されたクラスやAPIに接続している。
  - そのため、クライアント側を変更することなく、処理内容等を変更することができる。
- 利用する部品軍の整合性を保つ
  - 関連し合うオブジェクト群の整合性を容易に保つことができる。
- 部品群の単位で切り替えができる
  - AbstractFactoryパターンでは関連するクラスを集約するクラスが定義される。
  - そのため、集約するクラスを返納することで、関連処理を容易に変更することができる。