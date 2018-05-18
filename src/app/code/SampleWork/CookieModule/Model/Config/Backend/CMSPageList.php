<?php
/**
 * Cookie Module
 */

namespace SampleWork\CookieModule\Model\Config\Backend;

class CMSPageList implements \Magento\Framework\Option\ArrayInterface
{
    protected $pageCollectionFactory;

    public function __construct(
        \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory
    ) {
        $this->pageCollectionFactory = $pageCollectionFactory;
    }

    public function toOptionArray()
    {
        $optionArray = $this->_toArray();
        $options = [];

        foreach ($optionArray as $key => $value)
        {
            $options[] = [
                'value' => $key,
                'label' => $value
            ];
        }

        return $options;
    }

    private function _toArray()
    {
        $pages = $this->pageCollectionFactory->create();
        $pageList = array();

        foreach ($pages as $page)
        {
            $pageList[$page->getIdentifier()] = __($page->getTitle());
        }

        return $pageList;
    }
}
