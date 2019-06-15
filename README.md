# portal

## 概要

カレンダーを見ながらスケジュール管理、天気予報を確認、お気に入り画像の表示、アルバムへのリンク表示ができるアプリ

## 機能

- スケジュール
  - 予定の登録
  - カレンダーの参照
- 天気予報 api
- 画像ファイルのアップロード/ダウンロード、保存/削除
- アルバムへのリンク

## 準備物

PHP の API を動かすための、Apache などのサーバ環境

```
brew tap homebrew/dupes
brew tap homebrew/apache
brew install httpd24
```

## 言語

JavaScript, jQuery

## データベース

localstorage を使用

## その他

- ローカルストレージを使用したデータ管理
- ajax, php を使用した API

---

## overview

An application for managing schedules with keeping plans referring to calendar, cheking out weather information, and keeping pictures in albums linking to google photo.

## features

- schedule
  - register appointments
  - refer to calendar
- weather information api
- file upload
- album

## prerequisites

install server like Apache for weather API

```
brew tap homebrew/dupes
brew tap homebrew/apache
brew install httpd24
```

## Dependency

composed of Javascript and jQuery

## DB

using localstorage

## others

data managing on localstorage, API with PHP, ajax
