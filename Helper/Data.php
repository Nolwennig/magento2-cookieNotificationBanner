<?php

namespace Nolwennig\CookieNotificationBanner\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    public function getConfig($config_path) {
        return $this->scopeConfig->getValue($config_path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getColor($design_path) {
        return $this->toHtmlColor($this->getConfig('cookienotificationbanner/design/' . $design_path));
    }

    public function toHtmlColor($color) {
        $hexa = strlen($color) == 3 ?
                $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2] :
                $color[0] . $color[1] . $color[2] . $color[3] . $color[4] . $color[5];
        return '#' . $hexa;
    }

    public function toCss($key, $value) {
        return $key . ': ' . $value . '; ';
    }

}
