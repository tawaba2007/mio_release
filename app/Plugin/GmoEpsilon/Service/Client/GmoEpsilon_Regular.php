<?php
namespace Plugin\GmoEpsilon\Service\Client;
use Eccube\Entity\Order;
/**
    private $shippingVar = array(
    private $orderDetailVar = array(
    private $shipmentItemVar = array(
    /**
        // 定期受注マスタが未登録の場合 ※決済完了通知と2重に作成しないため
        $RegularOrder = $this->app['eccube.plugin.epsilon.repository.regular_order']->findBy(array('FirstOrder' => $response['order_number']));
        if (empty($RegularOrder)) {
            // 定期受注マスタを登録
            $this->copyOrderEachOther($Order, $response);
        }
    }

    function copyOrderEachOther($SourceOrder, array $other = null)
        if (strpos(get_class($SourceOrder),'RegularOrder') !== false) {
        // order_detail
            $add = 'add' . $destination_prefix . 'OrderDetail';
        // shipping
                $add = 'add' . $destination_prefix . 'ShipmentItem';
            $add = 'add' . $destination_prefix . 'Shipping';
        $this->app['orm.em']->flush();
        // order_extension
            $SourceOrder->setRegularOrderCount($SourceOrder->getRegularOrderCount() + 1);
            $this->app['orm.em']->persist($SourceOrder);
        $this->app['orm.em']->persist($OrderExtension);
        $this->app['orm.em']->getConnection()->commit();
    public function copyRecord(&$Destination, $Source, $commonVar)
    /**
    /**

    /**
        $PaymentExtension = $this->app['eccube.plugin.epsilon.repository.payment_extension']->find($Payment->getId());
        // 最後の受注IDの作成日を取得する
        $CreateDate->add($Interval);
        // 次回注文月を「年/月/日」の形で設定する
        return $result;
}