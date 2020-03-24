<?php

require __DIR__.'/../autoload.php';

$app = new Eccube\Application();
$app->initialize();
$app->initializePlugin();
$app->boot();


$app['monolog.gmoepsilon']->addInfo('Epsilon_Notice start.');
$params = $_POST;

// 受注情報を取得
$Order = $app['eccube.plugin.epsilon.repository.order_extension']->findBy(array('id' => $params['order_number'], 'trans_code' => $params['trans_code']));

// 受注情報が取得できない場合
if (is_null($Order)) {
    $app['monolog.gmoepsilon']->addInfo('Notice Error : not found Order "order_id = ' . $params['order_number'] . ' trans_code = ' . $params['trans_code'] . '"');
} else {
    // コンビニ決済・ペイジー決済
    if (!empty($params['trans_code']) && $params['paid'] == '1' && !empty($params['order_number'])) {
        $OrderStatus = $app['eccube.repository.order_status']->find($app['config']['order_pre_end']);
        $app['eccube.repository.order']->changeStatus($params['order_number'], $OrderStatus);
        $app['monolog.gmoepsilon']->addInfo('Epsilon_Notice conveni or payeasy pre_end. order_id='.$params['order_number']);

        // 正常応答
        echo '1';
    // GMO後払い決済
    } else if (!empty($params['trans_code']) && $params['payment_code'] == $app['config']['GmoEpsilon']['const']['PAY_ID_DEFERRED'] && !empty($params['order_number'])) {
        switch ($params['state']) {
            // 入金済み
            case '1':
                $OrderStatus = $app['eccube.repository.order_status']->find($app['config']['order_pre_end']);
                $app['eccube.repository.order']->changeStatus($params['order_number'], $OrderStatus);
                $app['monolog.gmoepsilon']->addInfo('Epsilon_Notice gmo pre_end. order_id='.$params['order_number']);
                break;
            // キャンセル
            case '9':
                $OrderStatus = $app['eccube.repository.order_status']->find($app['config']['order_cancel']);
                $app['eccube.repository.order']->changeStatus($params['order_number'], $OrderStatus);
                $app['monolog.gmoepsilon']->addInfo('Epsilon_Notice gmo cancel. order_id='.$params['order_number']);
                break;
        }
        // 正常応答
        echo '1';
    } else {
        $app['monolog.gmoepsilon']->addInfo('Epsilon_Notice error. POST = '.print_r($_POST, true));
        // 異常応答
        echo '0';
    }
}

$app['monolog.gmoepsilon']->addInfo('Epsilon_Notice end.');
