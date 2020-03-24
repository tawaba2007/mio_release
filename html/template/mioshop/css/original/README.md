# オリジナル CSS の運用方法について

EC サイト固有の style を付与する場合のルールを記述します。<br>
css を記述する前に、必ず目を通してください。

## レギュレーション

- EC サイト固有の style を付与するには、このディレクトリ内で css ファイルを作成し、style を記述する。
- css ファイルは、ブロック or ページ単位で作成し、common.css に読み込ませる（import）。
- 作成する css ファイルの名称は、対象となる block ファイル名（page ファイル名）と同一の名称にする。

  |       | style を付与したい対象の twg ファイル | 生成する css ファイル名 |
  | :---- | :------------------------------------ | :---------------------- |
  | 例 1) | tmp_originalHeader.twg                | tmp_originalHeader.css  |
  | 例 2) | cart.twg                              | cart.css                |

- css ファイルに記載できる style は、関連する block ファイルに対する style のみ。

---

## 各フォルダの説明

original フォルダ配下の各種フォルダの性質と役割について説明する。

### original/block

- ブロック(twg ファイル)の element 要素に対する style を記述する場合、ここに css ファイルを生成する。
- 生成対象となる主なブロック要素は以下。
  - 「tmp\_」から始まるオリジナルブロックファイル。
  - 既存のブロック要素。
  - プラグインのブロック要素。
- css ファイルを生成したら、block_common.css にインポートをさせる。

### original/frame

- ページを構成するtwgファイル（default.twg / index.twg）のelementに対する style を記述する。

### original/layout

- element.css
  - 各ブロックやページで**共通して使用できる element style**を記述する。
- layout.css
  - 各ブロックやページで**共通して使用できる layout style**を記述する。

### original/page

- 各種ページファイルに対する style を記述する。
- css ファイルを生成したら、page_common.css にインポートをさせる。

```
例）
商品詳細ページ
プライバシーポリシー
etc...
```

---

## CSS 記法ルール

### 共通

- w3c に準拠した記法を用いる。
- css を記述するときには、必ず最初にブロックに記載されている固有の ID 名を記述することで、他のブロックの style とバッティングさせない。（\*1）
- 既存の style に上書きしたい場合、既存の style よりも詳細度を上げる。（\*2）

### やっていはいけないこと

- html タグ名に対して style を書かない。<br>
  ※ただし、既存 style を上書きするために詳細度を上げる場合には、これを例外とする。（\*3）
- css ファイルには、関連しない外部ブロックの style を書いてはいけない。（\*4）
- float は使わない。
- important は使わない。

```
例）header.twgに固有のstyleをつけたい場合

作成するファイル：original/block/header.css

#originalHeader .header_logo_link  { /*（*1）*/
    disoplay:inline-block;
}

#originalHeader div.header_logo_wrapp { /*（*2）（*3）*/
   justify-content: space-around;
}

#navigation { /*（*4）headerのcssにnavigation要素のstyleを記述している*/
    display: inline-block;
}

```

---

## 他 CSS ファイルの説明

### template ディレクトリ（絶対に触ってはいけない）

このディレクトリの css ファイルは、オリジナルで制作した ECCUBE テンプレートサイトの元となる CSS ファイル群。<br>
絶対に触らない。

```
/html/template/ectemplate/css/template
```

### ECCUBE デフォルト CSS ファイル群（絶対に触ってはいけない）

ECCUBE の大元となる CSS ファイル群。<br>
絶対に触らない。

```
default.css
slick.css
style.css
theme.css
```
