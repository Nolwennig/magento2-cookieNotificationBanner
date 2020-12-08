<?php

namespace Nolwennig\CookieNotificationBanner\Model\Config\Backend;

class CMSPageList implements \Magento\Framework\Option\ArrayInterface {

    protected $_pageCollectionFactory;

    public function __construct(
    \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory
    ) {
        $this->_pageCollectionFactory = $pageCollectionFactory;
    }

    public function toOptionArray() {
        $arr = $this->_toArray();
        $ret = [];

        foreach ($arr as $key => $value) {
            $ret[] = [
                'value' => $key,
                'label' => $value
            ];
        }

        return $ret;
    }

    // List of all CMS Pages
    private function _toArray() {
        $pages = $this->_pageCollectionFactory->create();
        $pageList = array();

        foreach ($pages as $page) {
            // identifier => url-alias
            $pageList[$page->getIdentifier()] = __($page->getTitle());
        }

        return $pageList;
    }

}
