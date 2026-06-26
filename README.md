# PHP初級卒業カリキュラム

このリポジトリは、プログラミング超初心者がPHPの初級を卒業するための30題の練習用教材です。
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
php -v
```

1. `question/questionN.php` を開いて問題文を読む
2. TODOコメントの下に自分でコードを書く
3. ターミナルで実行する
4. 詰まったら `explanation/explanationN.md` を読む
5. それでも難しければ `answer/answerN.php` を見て比べる
6. 解答を見たあとは、もう一度何も見ずに書き直す

例:

```bash
php question/question1.php
php answer/answer1.php
```

Webフォームの問題はPHP内蔵サーバーを使います。

```bash
php -S 127.0.0.1:8000 -t question
```

そのあとブラウザで `http://127.0.0.1:8000/question10.php` または `http://127.0.0.1:8000/question28.php` を開きます。
解答を見る場合は `-t answer` に変えてください。

## 学習順

| 題 | テーマ | できるようになること | 問題 | 解説 | 解答 |
| --- | --- | --- | --- | --- | --- |
| 1 | はじめてのPHP | `echo` と改行を使って表示する | [問題](question/question1.php) | [解説](explanation/explanation1.md) | [解答](answer/answer1.php) |
| 2 | 変数と計算 | 変数、数値計算、文字列結合を使う | [問題](question/question2.php) | [解説](explanation/explanation2.md) | [解答](answer/answer2.php) |
| 3 | 文字列 | 文字列埋め込み、文字数、整形を使う | [問題](question/question3.php) | [解説](explanation/explanation3.md) | [解答](answer/answer3.php) |
| 4 | 条件分岐 | 点数から合否や評価を判定する | [問題](question/question4.php) | [解説](explanation/explanation4.md) | [解答](answer/answer4.php) |
| 5 | 繰り返し | `for` と `while` で同じ処理を繰り返す | [問題](question/question5.php) | [解説](explanation/explanation5.md) | [解答](answer/answer5.php) |
| 6 | 配列 | 配列から合計、平均、最大、最小を出す | [問題](question/question6.php) | [解説](explanation/explanation6.md) | [解答](answer/answer6.php) |
| 7 | 関数 | 同じ処理を関数にまとめる | [問題](question/question7.php) | [解説](explanation/explanation7.md) | [解答](answer/answer7.php) |
| 8 | 連想配列 | 商品データとカートを扱う | [問題](question/question8.php) | [解説](explanation/explanation8.md) | [解答](answer/answer8.php) |
| 9 | CLI入力と検証 | コマンドライン引数を受け取り、入力チェックする | [問題](question/question9.php) | [解説](explanation/explanation9.md) | [解答](answer/answer9.php) |
| 10 | Webフォーム | HTMLフォームから送られた値をPHPで処理する | [問題](question/question10.php) | [解説](explanation/explanation10.md) | [解答](answer/answer10.php) |
| 11 | JSONファイル保存 | データをファイルに保存して読み込む | [問題](question/question11.php) | [解説](explanation/explanation11.md) | [解答](answer/answer11.php) |
| 12 | クラス練習 | クラスで小さな図書管理アプリを作る | [問題](question/question12.php) | [解説](explanation/explanation12.md) | [解答](answer/answer12.php) |
| 13 | 自己紹介カード | 変数を使って複数行の文章を作る | [問題](question/question13.php) | [解説](explanation/explanation13.md) | [解答](answer/answer13.php) |
| 14 | 割り勘計算 | 割り算を使って1人あたりの金額を出す | [問題](question/question14.php) | [解説](explanation/explanation14.md) | [解答](answer/answer14.php) |
| 15 | メール文を作る | 変数を文章に埋め込んで表示する | [問題](question/question15.php) | [解説](explanation/explanation15.md) | [解答](answer/answer15.php) |
| 16 | 年齢で料金を決める | 年齢ごとに料金を判定する | [問題](question/question16.php) | [解説](explanation/explanation16.md) | [解答](answer/answer16.php) |
| 17 | 在庫判定 | 注文数と在庫数を比べて判定する | [問題](question/question17.php) | [解説](explanation/explanation17.md) | [解答](answer/answer17.php) |
| 18 | 九九の一段 | `for` で決まった回数だけ計算する | [問題](question/question18.php) | [解説](explanation/explanation18.md) | [解答](answer/answer18.php) |
| 19 | カウントダウン | `while` で数を減らしながら表示する | [問題](question/question19.php) | [解説](explanation/explanation19.md) | [解答](answer/answer19.php) |
| 20 | 買い物リスト | 配列を番号付きで表示する | [問題](question/question20.php) | [解説](explanation/explanation20.md) | [解答](answer/answer20.php) |
| 21 | 合格者だけ表示 | 配列と条件分岐を組み合わせる | [問題](question/question21.php) | [解説](explanation/explanation21.md) | [解答](answer/answer21.php) |
| 22 | 四角形の面積 | 関数で計算処理をまとめる | [問題](question/question22.php) | [解説](explanation/explanation22.md) | [解答](answer/answer22.php) |
| 23 | あいさつ関数 | 関数内で空文字を判定する | [問題](question/question23.php) | [解説](explanation/explanation23.md) | [解答](answer/answer23.php) |
| 24 | ユーザー一覧 | 連想配列の一覧を表示する | [問題](question/question24.php) | [解説](explanation/explanation24.md) | [解答](answer/answer24.php) |
| 25 | 在庫表 | 連想配列と条件分岐を組み合わせる | [問題](question/question25.php) | [解説](explanation/explanation25.md) | [解答](answer/answer25.php) |
| 26 | CLIで税込計算 | コマンドライン引数を検証して計算する | [問題](question/question26.php) | [解説](explanation/explanation26.md) | [解答](answer/answer26.php) |
| 27 | CLIで名前チェック | 文字数を確認して入力を受け取る | [問題](question/question27.php) | [解説](explanation/explanation27.md) | [解答](answer/answer27.php) |
| 28 | あいさつフォーム | フォーム入力を受け取り安全に表示する | [問題](question/question28.php) | [解説](explanation/explanation28.md) | [解答](answer/answer28.php) |
| 29 | JSONで買い物メモ | JSONファイルに簡単な配列を保存する | [問題](question/question29.php) | [解説](explanation/explanation29.md) | [解答](answer/answer29.php) |
| 30 | Todoクラス | クラスで小さなTodoを表す | [問題](question/question30.php) | [解説](explanation/explanation30.md) | [解答](answer/answer30.php) |

## おすすめの進め方

1日30分から60分で進める場合の目安です。問題数は増えましたが、難易度は初級のままです。

- 1週目: 第1題から第5題。PHPの実行、変数、文字列、条件分岐に慣れる
- 2週目: 第6題から第10題。配列、関数、連想配列、CLI、Webフォームを試す
- 3週目: 第11題から第15題。保存、クラス、変数、計算、文字列を復習する
- 4週目: 第16題から第20題。条件分岐、繰り返し、配列を反復練習する
- 5週目: 第21題から第25題。配列、関数、連想配列の組み合わせを練習する
- 6週目: 第26題から第30題。CLI、フォーム、JSON、クラスをもう一度練習する

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
- 解答を見ずに第30題のTodoクラスをもう一度作れる

## ルール

- 最初から解答を写さない
- 1つの問題につき、最低1回は自分でエラーを直す
- 解答と違っても、同じ結果になっていて読みやすければOK
- わからない構文が出たら、公式マニュアルやエラー文で調べる
- 各回の最後に「今日わかったこと」を3行メモする
