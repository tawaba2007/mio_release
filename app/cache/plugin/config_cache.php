<?php return array (
  'ApgProductClassImage' => 
  array (
    'config' => 
    array (
      'name' => '商品規格画像アップロードプラグイン',
      'code' => 'ApgProductClassImage',
      'version' => '1.0.2',
      'service' => 
      array (
        0 => 'ApgProductClassImageServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'ApgProductClassImageEvent',
      'const' => NULL,
    ),
    'event' => 
    array (
      'admin.product.product.class.index.classes' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductClassIndexIndex',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product_class.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductProductClass',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductClassEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.update' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductClassEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.delete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductClassEditDelete',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderFrontProductDetail',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'CssEditor' => 
  array (
    'config' => 
    array (
      'name' => 'CSS編集プラグイン',
      'code' => 'CssEditor',
      'version' => '1.0.1',
      'service' => 
      array (
        0 => 'CssEditorServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'FacebookAdsToolbox' => 
  array (
    'config' => 
    array (
      'name' => 'Facebook連携プラグイン',
      'code' => 'FacebookAdsToolbox',
      'version' => '1.0.1',
      'service' => 
      array (
        0 => 'FacebookAdsToolboxServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'PixelEvent',
    ),
    'event' => 
    array (
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onProductDetailInitialize',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onCartIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onShoppingCompleteInitialize',
          1 => 'NORMAL',
        ),
      ),
      'index.twig' => 
      array (
        0 => 
        array (
          0 => 'onIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onShoppingIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'GmoEpsilon' => 
  array (
    'config' => 
    array (
      'name' => 'GmoEpsilon',
      'code' => 'GmoEpsilon',
      'version' => '1.2.1',
      'service' => 
      array (
        0 => 'GmoEpsilonServiceProvider',
      ),
      'event' => 'GmoEpsilon',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
        1 => '/Resource/doctrine/master',
        2 => '/Resource/doctrine/extension',
      ),
      'const' => 
      array (
        'PLUGIN_CODE' => 'GmoEpsilon',
        'PAY_ID_CREDIT' => 1,
        'PAY_ID_REG_CREDIT' => 2,
        'PAY_ID_CONVENI' => 3,
        'PAY_ID_NETBANK_JNB' => 4,
        'PAY_ID_NETBANK_RAKUTEN' => 5,
        'PAY_ID_PAYEASY' => 7,
        'PAY_ID_WEBMONEY' => 8,
        'PAY_ID_YWALLET' => 9,
        'PAY_ID_PAYPAL' => 11,
        'PAY_ID_BITCASH' => 12,
        'PAY_ID_CHOCOM' => 13,
        'PAY_ID_SPHONE' => 15,
        'PAY_ID_JCB' => 16,
        'PAY_ID_SUMISHIN' => 17,
        'PAY_ID_DEFERRED' => 18,
        'PAY_ID_MAIL' => 99,
        'PAY_NAME_CREDIT' => 'クレジットカード決済',
        'PAY_NAME_REG_CREDIT' => '登録済みのクレジットカードで決済',
        'PAY_NAME_CONVENI' => 'コンビニ決済',
        'PAY_NAME_NETBANK_JNB' => 'ネット銀行決済(ジャパンネット銀行)',
        'PAY_NAME_NETBANK_RAKUTEN' => 'ネット銀行決済(楽天銀行)',
        'PAY_NAME_PAYEASY' => 'ペイジー決済',
        'PAY_NAME_WEBMONEY' => 'WebMoney決済',
        'PAY_NAME_YWALLET' => 'Yahoo!ウォレット決済サービス',
        'PAY_NAME_PAYPAL' => 'Paypal決済',
        'PAY_NAME_BITCASH' => 'Bitcash決済',
        'PAY_NAME_CHOCOM' => '電子マネーちょコム決済',
        'PAY_NAME_SPHONE' => 'スマートフォンキャリア決済',
        'PAY_NAME_JCB' => 'JCB PREMO',
        'PAY_NAME_SUMISHIN' => '住信SBIネット銀行決済',
        'PAY_NAME_DEFERRED' => 'GMO後払い',
        'PAY_NAME_MAIL' => 'メールリンク決済',
        'CREDIT_RULE_MAX' => 9999999,
        'REG_CREDIT_RULE_MAX' => 9999999,
        'CONVENI_RULE_MAX' => 299999,
        'NETBANK_JNB_RULE_MAX' => 9999999,
        'NETBANK_RAKUTEN_RULE_MAX' => 9999999,
        'PAYEASY_RULE_MAX' => 9999999,
        'WEBMONEY_RULE_MAX' => 199999,
        'YWALLET_RULE_MAX' => 499999,
        'PAYPAL_RULE_MAX' => 499999,
        'BITCASH_RULE_MAX' => 199999,
        'CHOCOM_RULE_MAX' => 99999,
        'SPHONE_RULE_MAX' => 50000,
        'JCB_RULE_MAX' => 500000,
        'SUMISHIN_RULE_MAX' => 9999999,
        'DEFERRED_RULE_MAX' => 49999,
        'MAIL_RULE_MAX' => 9999999,
        'CONVENI_ID_SEVENELEVEN' => 11,
        'CONVENI_ID_FAMILYMART' => 21,
        'CONVENI_ID_LAWSON' => 31,
        'CONVENI_ID_SEICOMART' => 32,
        'CONVENI_ID_MINISTOP' => 33,
        'CONVENI_NAME_SEVENELEVEN' => 'セブンイレブン',
        'CONVENI_NAME_FAMILYMART' => 'ファミリーマート',
        'CONVENI_NAME_LAWSON' => 'ローソン',
        'CONVENI_NAME_SEICOMART' => 'セイコーマート',
        'CONVENI_NAME_MINISTOP' => 'ミニストップ',
        'PAY_ID_EVERY_MONTH' => 101,
        'PAY_ID_EVERY_OTHER_MONTH' => 102,
        'PAY_ID_EVERY_THREE_MONTH' => 103,
        'PAY_ID_EVERY_SIX_MONTH' => 104,
        'PAY_ID_EVERY_YEAR' => 105,
        'PAY_NAME_EVERY_MONTH' => '定期的なクレジットカード決済（毎月）',
        'PAY_NAME_EVERY_OTHER_MONTH' => '定期的なクレジットカード決済（2ヵ月ごと）',
        'PAY_NAME_EVERY_THREE_MONTH' => '定期的なクレジットカード決済（3ヵ月ごと）',
        'PAY_NAME_EVERY_SIX_MONTH' => '定期的なクレジットカード決済（半年ごと）',
        'PAY_NAME_EVERY_YEAR' => '定期的なクレジットカード決済（1年ごと）',
        'CREDIT_ST_CODE' => '10000-0000-00000',
        'REG_CREDIT_ST_CODE' => '01000-0000-00000',
        'CONVENI_ST_CODE' => '00100-0000-00000',
        'NETBANK_JNB_ST_CODE' => '00010-0000-00000',
        'NETBANK_RAKUTEN_ST_CODE' => '00001-0000-00000',
        'SUMISHIN_ST_CODE' => '00000-0000-00000-00100-00000-00000-00000',
        'PAYEASY_ST_CODE' => '00000-0100-00000',
        'WEBMONEY_ST_CODE' => '00000-0010-00000',
        'YWALLET_ST_CODE' => '00000-0001-00000',
        'PAYPAL_ST_CODE' => '00000-0000-01000',
        'BITCASH_ST_CODE' => '00000-0000-00100',
        'CHOCOM_ST_CODE' => '00000-0000-00010',
        'SPHONE_ST_CODE' => '00000-0000-00000-10000-00000-00000-00000',
        'JCB_ST_CODE' => '00000-0000-00000-01000-00000-00000-00000',
        'DEFERRED_ST_CODE' => '00000-0000-00000-00010-00000-00000-00000',
        'MAIL_ST_CODE' => 'maillink',
        'EVERY_MONTH_MISSION_CODE' => 21,
        'EVERY_OTHER_MONTH_MISSION_CODE' => 25,
        'EVERY_THREE_MONTH_MISSION_CODE' => 27,
        'EVERY_SIX_MONTH_MISSION_CODE' => 29,
        'EVERY_YEAR_MISSION_CODE' => 31,
        'SEVENELEVEN_PRE_MESSAGE' => '以下「払込票URL」ページをプリントアウトされるか「払込票番号（13桁）」をメモして「お支払期限」までにお近くのセブンイレブンのレジにて代金をお支払いください。
',
        'SEVENELEVEN_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭でのお手続き方法をご確認いただけます。

▼セブンイレブン決済のお支払方法
http://www.epsilon.jp/mb/conv/seven/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'FAMIRYMART_PRE_MESSAGE' => '「お支払期限」までにお近くのファミリーマートにて代金をお支払いください。
',
        'FAMIRYMART_MESSAGE' => '
<お支払方法>
以下URLを携帯電話にご転送いただくと、店頭で操作方法をご確認いただけます。

▼ファミリーマート決済のお支払方法
http://www.epsilon.jp/mb/conv/famima/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Famiポートトップ画面左下の「代金支払い」を選択して下さい。
2.「代金支払い」一覧の「各種番号をお持ちの方はこちら」を選択して下さい。
3.ご案内画面の「番号入力画面に進む」を選択して下さい。
4.「お支払い受付番号」または「企業コード」を入力し、「OK」ボタンを押して下さい。
5.「申込時にご登録いただいた電話番号」または「注文番号」を入力し、「OK」ボタンを押して下さい。
6.お支払い方法の案内画面が表示されます。
7.お客様のご注文内容の確認画面が表示されます。内容をご確認頂いた後、「OK」を押下して下さい。
8.出力されたFamiポート申込券をもって30分以内にレジにて代金をお支払いください。
　代金と引き換えに「領収書」をお渡ししますので、必ずお受取り下さい。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'LAWSON_PRE_MESSAGE' => '「お支払期限」までにお近くのローソンにて代金をお支払いください。
',
        'LAWSON_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼ローソン決済のお支払方法
http://www.epsilon.jp/mb/conv/lawson/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Loppiトップ画面左上の「各種番号をお持ちの方」ボタンを押してください。
2.「受付番号（6桁）」を入力し、「次へ」ボタンを押してください。
3.「申込時にご登録いただいた電話番号」を入力してください。
4.お客様のご注文内容の確認画面が表示されます。内容をご確認いただき「了解」ボタンを押してください。
5.Loppi端末から「申込券」が出力されます。その申込券を持って30分以内にレジで代金をお支払いください。
　※代金と引き換えに領収書をお渡ししますので、必ずお受け取りください。実際に代金をお支払いされたという証明になります。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'SEICOMART_PRE_MESSAGE' => '「お支払期限」までにお近くのセイコーマートにて代金をお支払いください。
',
        'SEICOMART_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼セイコーマート決済のお支払方法
http://www.epsilon.jp/mb/conv/seico/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.セイコーマートの店内に設置してあるセイコーマートクラブステーション（情報端末）のトップ画面の中から、「インターネット受付」をお選び下さい。
2.画面に従って「受付番号（6桁）」と、「申込時にご登録いただいた電話番号」をご入力いただくとセイコーマートクラブステーションより「決済サービス払込取扱票・払込票兼受領証・領収書（計3枚）」が発券されます。
3.発券された「決済サービス払込取扱票・払込票兼受領証・領収書（計3枚）」をお持ちの上、レジにて代金をお支払い下さい。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'MINISTOP_PRE_MESSAGE' => '「お支払期限」までにお近くのミニストップにて代金をお支払いください。
',
        'MINISTOP_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼ミニストップ決済のお支払方法
http://www.epsilon.jp/mb/conv/ministop/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Loppi端末のトップ画面左の「各種番号をお持ちの方」ボタンを押してください。
2.「お支払い受付番号(6桁)」を入力し、「次へ」ボタンを押してください。
3.「申込時にご登録いただいた電話番号」を入力してください。
4.お客様のご注文内容の確認画面が表示されます。内容をご確認いただいた後、「了解」のボタンを押してください。
5.Loppi端末より「申込券」が出力されますので、その「申込券」を持って30分以内にレジにて代金をお支払いください。
　※代金と引き換えに「領収書」をお渡ししますので、必ずお受取りください。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'CURL_SSLVERSION_DEFAULT_NUMBER' => 0,
        'CURL_SSLVERSION_TLSv1_NUMBER' => 1,
        'CURL_SSLVERSION_SSLv2_NUMBER' => 2,
        'CURL_SSLVERSION_SSLv3_NUMBER' => 3,
        'CURL_SSLVERSION_TLSv1_0_NUMBER' => 4,
        'CURL_SSLVERSION_TLSv1_1_NUMBER' => 5,
        'CURL_SSLVERSION_TLSv1_2_NUMBER' => 6,
        'CURL_SSLVERSION_DEFAULT_NAME' => 'デフォルト',
        'CURL_SSLVERSION_TLSv1_NAME' => 'TLS1.x',
        'CURL_SSLVERSION_SSLv2_NAME' => 'SSL2.0',
        'CURL_SSLVERSION_SSLv3_NAME' => 'SSL3.0',
        'CURL_SSLVERSION_TLSv1_0_NAME' => 'TLS1.0',
        'CURL_SSLVERSION_TLSv1_1_NAME' => 'TLS1.1',
        'CURL_SSLVERSION_TLSv1_2_NAME' => 'TLS1.2',
        'SSLVERSION_ERROR_CODE' => '35;',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_complete.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingCompleteBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_confirm.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingConfirmBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'NEConnect' => 
  array (
    'config' => 
    array (
      'name' => 'ネクストエンジン接続プラグイン',
      'code' => 'NEConnect',
      'version' => '1.0.6',
      'event' => 'Event',
      'service' => 
      array (
        0 => 'NEConnectServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'setOrderIdToSession',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.complete.initialize' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMailToNE',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'PlgExpandProductColumns' => 
  array (
    'config' => 
    array (
      'name' => '商品情報追加プラグイン',
      'code' => 'PlgExpandProductColumns',
      'version' => '1.0.10',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'service' => 
      array (
        0 => 'PlgExpandProductColumnsServiceProvider',
      ),
      'event' => 'Event',
    ),
    'event' => 
    array (
      'eccube.event.render.admin_product_product_edit.before' => 
      array (
        0 => 
        array (
          0 => 'addContentOnProductEdit',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'saveExColValue',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_new.before' => 
      array (
        0 => 
        array (
          0 => 'addContentOnProductEdit',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'saveExColValue',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.copy.complete' => 
      array (
        0 => 
        array (
          0 => 'productCopy',
          1 => 'NORMAL',
        ),
      ),
      'index.twig' => 
      array (
        0 => 
        array (
          0 => 'setListOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'setListOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'setProductOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/index.twig' => 
      array (
        0 => 
        array (
          0 => 'setListOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductNew',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/csv_product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminCsvImport',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'RelatedProduct' => 
  array (
    'config' => 
    array (
      'name' => '関連商品プラグイン',
      'code' => 'RelatedProduct',
      'version' => '1.0.1',
      'service' => 
      array (
        0 => 'RelatedProductServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'Event',
    ),
    'event' => 
    array (
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductInit',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductComplete',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProduct',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_new.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetailBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'SalesRanking' => 
  array (
    'config' => 
    array (
      'name' => '売上ランキング',
      'code' => 'SalesRanking',
      'version' => '1.0.4',
      'service' => 
      array (
        0 => 'SalesRankingServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'SalesReport' => 
  array (
    'config' => 
    array (
      'name' => '売上集計プラグイン',
      'code' => 'SalesReport',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'SalesReportServiceProvider',
      ),
      'const' => 
      array (
        'product_maximum_display' => 20,
      ),
    ),
    'event' => NULL,
  ),
  'Shiro8NewProductBlock3' => 
  array (
    'config' => 
    array (
      'name' => '新着商品ブロックプラグイン',
      'version' => 1.0,
      'service' => 
      array (
        0 => 'Shiro8NewProductBlock3ServiceProvider',
      ),
      'code' => 'Shiro8NewProductBlock3',
    ),
    'event' => NULL,
  ),
  'UaGaEEc' => 
  array (
    'config' => 
    array (
      'name' => 'Google Analytics eコマース/拡張eコマースタグ設置プラグイン',
      'code' => 'UaGaEEc',
      'version' => '1.4.7',
      'service' => 
      array (
        0 => 'UaGaEEcServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'Event',
      'const' => 
      array (
        'UAGAEEC_USE_EEC' => 1,
        'UAGAEEC_USE_EC' => 2,
        'UAGAEEC_OP_CATEGORY_ON' => 1,
        'UAGAEEC_OP_CATEGORY_OFF' => 2,
        'UAGAEEC_OP_WITH_VARIANT' => 1,
        'UAGAEEC_OP_WITHOUT_VARIANT' => 2,
        'UAGAEEC_OP_INCLUDE_USER_ID' => 1,
        'UAGAEEC_OP_NOT_INCLUDE_USER_ID' => 2,
        'UAGAEEC_OP_WITH_DISPLAY_FEATURES' => 1,
        'UAGAEEC_OP_WITHOUT_DISPLAY_FEATURES' => 2,
        'UAGAEEC_OP_WITH_USER_TIMINGS' => 1,
        'UAGAEEC_OP_WITHOUT_USER_TIMINGS' => 2,
        'UAGAEEC_OP_WITH_IMP_TRACK' => 1,
        'UAGAEEC_OP_WITHOUT_IMP_TRACK' => 2,
        'UAGAEEC_OP_USE_CUSTOM_REFERRER' => 1,
        'UAGAEEC_OP_NOT_USE_CUSTOM_REFERRER' => 2,
        'UAGAEEC_UUID' => 'e1f7d13a-3894-34b8-bdc2-5db5b668a5cc',
      ),
    ),
    'event' => 
    array (
      'eccube.event.front.request' => 
      array (
        0 => 
        array (
          0 => 'initUaGaEEc',
          1 => 'NORMAL',
        ),
      ),
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/favorite.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/login.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/nonmember.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'setTwigParameters',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.response' => 
      array (
        0 => 
        array (
          0 => 'uaGaEEcResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'productDetail',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_list.before' => 
      array (
        0 => 
        array (
          0 => 'productList',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.mypage_favorite.before' => 
      array (
        0 => 
        array (
          0 => 'mypageFavorite',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.cart.before' => 
      array (
        0 => 
        array (
          0 => 'cart',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_login.before' => 
      array (
        0 => 
        array (
          0 => 'shopping_login',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_nonmember.before' => 
      array (
        0 => 
        array (
          0 => 'shopping_nonmember',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'shopping',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_complete.before' => 
      array (
        0 => 
        array (
          0 => 'shoppingComplete',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);