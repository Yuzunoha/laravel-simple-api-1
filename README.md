## セットアップ手順(make を使うやり方, かんたん)

1. Makefile があるディレクトリ(リポジトリ直下)で下記のコマンドを実行する

   ```
   make init
   ```

1. laravel アプリをブラウザで表示する

   - http://localhost:10580 にアクセスする

## コンテナを終了する方法

- docker-compose.yml があるディレクトリで下記のコマンドを実行する

  ```
  docker-compose down
  ```

## 備考

- ホスト側で html 配下のファイルを編集すれば app コンテナに反映される
- composer コマンドや artisan コマンドは app コンテナの bash で実行する
- この laravel アプリ は db コンテナの MySQL データベース:docker_db に接続済みである

## artisan を使う方法

- 例 1) migration を行う方法

  - app コンテナの bash で 下記のコマンドを実行する

    ```
    php artisan migrate
    ```

- 例 2) HelloController を作成する方法

  - app コンテナの bash で 下記のコマンドを実行する

    ```
    php artisan make:controller HelloController
    ```

## ブラウザで phpMyAdmin を表示する方法

- http://localhost:10581 にアクセスする

## make コマンドの紹介(Makefile 参照)

- make up

  - docker コンテナを起動する

- make ps

  - docker コンテナの状態を表示する

- make down

  - docker コンテナを停止する

- make bash

  - app コンテナで ユーザ:docker の bash を起動する

- make migrate-seed

  - マイグレーションとシーディングを行う

- make init

  - docker コンテナのビルドと設定、起動を行う
