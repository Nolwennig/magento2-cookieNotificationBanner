<?php

namespace Nolwennig\CookieNotificationBanner\Model\Config\Backend;

class Position implements \Magento\Framework\Option\ArrayInterface {

    public function toOptionArray() {
        $position = array();

        $position[] = [
            'value' => 'top',
            'label' => __('Haut')
        ];
        $position[] = [
            'value' => 'bottom',
            'label' => __('Bas')
        ];

        return $position;
    }

}
