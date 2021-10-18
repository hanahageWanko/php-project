# Bridgeパターン

## 概要
- 抽出されたクラスと実装を分離して、それらを独立に変更できるようにする。
- 「何をするのか」と「どうやって実現するのか」を分離する。


## Bridgeパターンのメリット
- クラス階層の見通しが良くなる
  - 「機能」と「実装」を提供するクラスが分離されているため、クラスの階層が理解しやすくなり、見通しが良くなる
- 最終的に作成すべきクラス数を抑えることができる
- 機能の拡張と実装の切り替えが容易
  - 機能」と「実装」を提供するクラスが分離されているため、お互いに影響することなく拡張や切り替えが可能になる

