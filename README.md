# PHP初級卒業カリキュラム

このリポジトリは、プログラミング超初心者がPHPの初級を卒業するための練習用教材です。
フレームワークやComposerは使わず、PHP本体だけで「書く、動かす、直す」を繰り返します。

教材一覧ページ: https://yuta222.github.io/php-learning/

## ゴール

このカリキュラムを終えたら、次のことが自力でできる状態を目指します。

- `php ファイル名.php` でPHPを実行できる
- 変数、文字列、数値、配列、連想配列を使える
- `if`、`for`、`foreach`、`while` を読んで書ける
- 関数に処理を分けられる
- 入力値を検証して、エラーを出せる
- 簡単なHTMLフォームをPHPで処理できる
- JSONファイルにデータを保存・読み込みできる
- クラスを使って、小さなアプリの部品を作れる
- エラーメッセージを読んで、原因の場所を探せる

## 使い方

最初にPHPが動くか確認します。

```bash
php test.php
```

1. `question/questionN.php` を開いて問題文を読む
2. TODOコメントの下に自分でコードを書く
3. ターミナルで実行する
4. 詰まったら `answer/answerN.php` を見て比べる
5. 解答を見たあとは、もう一度何も見ずに書き直す

例:

```bash
php question/question1.php
php answer/answer1.php
```

Webフォームの問題だけはPHP内蔵サーバーを使います。

```bash
php -S 127.0.0.1:8000 -t question
```

そのあとブラウザで `http://127.0.0.1:8000/question10.php` を開きます。
解答を見る場合は `-t answer` に変えてください。

## 学習順

| 回 | テーマ | できるようになること | 問題 | 解答 |
| --- | --- | --- | --- | --- |
| 1 | はじめてのPHP | `echo` と改行を使って表示する | `question/question1.php` | `answer/answer1.php` |
| 2 | 変数と計算 | 変数、数値計算、文字列結合を使う | `question/question2.php` | `answer/answer2.php` |
| 3 | 文字列 | 文字列埋め込み、文字数、整形を使う | `question/question3.php` | `answer/answer3.php` |
| 4 | 条件分岐 | 点数から合否や評価を判定する | `question/question4.php` | `answer/answer4.php` |
| 5 | 繰り返し | `for` と `while` で同じ処理を繰り返す | `question/question5.php` | `answer/answer5.php` |
| 6 | 配列 | 配列から合計、平均、最大、最小を出す | `question/question6.php` | `answer/answer6.php` |
| 7 | 関数 | 同じ処理を関数にまとめる | `question/question7.php` | `answer/answer7.php` |
| 8 | 連想配列 | 商品データとカートを扱う | `question/question8.php` | `answer/answer8.php` |
| 9 | CLI入力と検証 | コマンドライン引数を受け取り、入力チェックする | `question/question9.php` | `answer/answer9.php` |
| 10 | Webフォーム | HTMLフォームから送られた値をPHPで処理する | `question/question10.php` | `answer/answer10.php` |
| 11 | JSONファイル保存 | データをファイルに保存して読み込む | `question/question11.php` | `answer/answer11.php` |
| 12 | クラスと卒業課題 | クラスで小さな図書管理アプリを作る | `question/question12.php` | `answer/answer12.php` |

## おすすめの進め方

1日30分から60分で進める場合の目安です。

- 1週目: 第1回から第3回。PHPの実行、変数、文字列に慣れる
- 2週目: 第4回から第6回。条件分岐、繰り返し、配列を練習する
- 3週目: 第7回から第9回。関数、連想配列、入力チェックを練習する
- 4週目: 第10回から第12回。Web、保存、クラスを使って卒業課題を作る

## 初級卒業チェック

次のチェックに全部答えられたら、PHP初級卒業です。

- エラーが出たとき、ファイル名と行番号を見て修正できる
- 変数名を見て、何の値が入っているか説明できる
- `if` の条件を日本語で説明できる
- `foreach` で配列を1件ずつ処理できる
- 関数の引数と戻り値を説明できる
- ユーザー入力をそのまま信用せず、空文字や数値範囲を確認できる
- `htmlspecialchars` が必要な場面を説明できる
- JSONファイルの読み書きで、配列と文字列の変換を説明できる
- 小さな処理をクラスや関数に分けられる
- 解答を見ずに第12回の卒業課題をもう一度作れる

## ルール

- 最初から解答を写さない
- 1つの問題につき、最低1回は自分でエラーを直す
- 解答と違っても、同じ結果になっていて読みやすければOK
- わからない構文が出たら、公式マニュアルやエラー文で調べる
- 各回の最後に「今日わかったこと」を3行メモする
