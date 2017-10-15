# Slim Framework 3 Skeleton Application Template

## データベースの作成

MySQLにデータベースとサンプルデータを作成するために以下のコマンドをTerminalで実行してください。

```sh
# MySQL を起動する
sudo service mysql start

# データベースの作成とサンプルデータを作成する
mysql -u root -p < /projects/itace/setup/db.sql
```

##  アプリケーションの起動

上部メニューの起動ボタン（右向き三角）の右側のドロップダウンから以下二つをクリックしてください。

1. start mysql
2. start apache

「start apache」を実行したTerminalパネルの「preview:」に表示されるリンクにアクセスするとアプリケーションが確認できます。