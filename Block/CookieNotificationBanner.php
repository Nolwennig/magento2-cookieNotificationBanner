<?php

namespace Nolwennig\CookieNotificationBanner\Block;

class CookieNotificationBanner extends \Magento\Framework\View\Element\Template {

    CONST COOKIE_NAME = "nolwennig_cookienotificationbanner";

    protected $_dataHelper;

    /**
     * {@inheritDoc}
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Nolwennig\CookieNotificationBanner\Helper\Data $dataHelper
     * @param array $data
     */
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context, \Nolwennig\CookieNotificationBanner\Helper\Data $dataHelper, array $data) {
        $this->_dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

    // Cookie Name
    public function getCookieName() {
        return self::COOKIE_NAME;
    }

    /**
     * Module Activation
     * 
     * @return boolean
     */
    public function getModuleActivation() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/functional/activation');
    }

    // Cookie Lifetime
    public function getCookieLifetime() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/functional/lifetime');
    }

    // Cookie Path
    public function getCookiePath() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/functional/path');
    }

    // Cookie Domain
    public function getCookieDomain() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/functional/domain');
    }

    // Cookie Message
    public function getCookieMessage() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/design/message');
    }

    public function getCookieMoreButtonText() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/design/btn_more_text');
    }

    public function getCookieMoreButtonLink() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/design/btn_more_link');
    }

    public function getCookieMoreButtonLinkDestination() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/design/btn_more_link_destination');
    }

    public function getCookieAllowButtonText() {
        return $this->_dataHelper->getConfig('cookienotificationbanner/design/btn_allow_text');
    }

    // Colors function
    // message colors
    public function getCookieMessageTextColor() {
        return $this->_dataHelper->getColor('message_text_color');
    }

    public function getCookieMessageBackgroundColor() {
        return $this->_dataHelper->getColor('message_background_color');
    }

    // allow colors
    public function getCookieAllowButtonTextColor() {
        return $this->_dataHelper->getColor('btn_allow_text_color');
    }

    public function getCookieAllowButtonBackgroundColor() {
        return $this->_dataHelper->getColor('btn_allow_background_color');
    }

    // more colors
    public function getCookieMoreButtonBackgroundColor() {
        return $this->_dataHelper->getColor('btn_more_background_color');
    }

    public function getCookieMoreButtonTextColor() {
        return $this->_dataHelper->getColor('btn_more_text_color');
    }

    public function getCookiePosition() {
        switch ($this->_dataHelper->getConfig('cookienotificationbanner/design/position')) {
            case 'top': return 'top: 0;';
            case 'bottom': return 'bottom: 0;';
            default : return 'top: 0;';
        }
    }

    public function getBlockStyle() {
        $blockStyle = $this->_dataHelper->toCss('display', 'none');
        $blockStyle .= $this->getCookiePosition();
        $blockStyle .= $this->_dataHelper->toCss('background-color', $this->getCookieMessageBackgroundColor());
        $blockStyle .= $this->_dataHelper->toCss('color', $this->getCookieMessageTextColor());
        return $blockStyle;
    }

    public function getBtnMoreStyle() {
        return $this->_dataHelper->toCss('background-color', $this->getCookieMoreButtonBackgroundColor());
    }

    public function getBtnMoreTextStyle() {
        return $this->_dataHelper->toCss('color', $this->getCookieMoreButtonTextColor());
    }

    public function getBtnAllowStyle() {
        return $this->_dataHelper->toCss('background-color', $this->getCookieAllowButtonBackgroundColor());
    }

    public function getBtnAllowTextStyle() {
        return $this->_dataHelper->toCss('color', $this->getCookieAllowButtonTextColor());
    }

}
