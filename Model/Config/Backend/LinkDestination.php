<?php

namespace Nolwennig\CookieNotificationBanner\Model\Config\Backend;

class LinkDestination implements \Magento\Framework\Option\ArrayInterface {

    public function toOptionArray() {
        $destination = array();

        $destination[] = [
            'value' => 1,
            'label' => __('Fenêtre initiale')
        ];
        $destination[] = [
            'value' => 2,
            'label' => __('Nouvelle fenêtre')
        ];

        return $destination;
    }

}
