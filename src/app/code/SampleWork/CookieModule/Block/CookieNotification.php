<?php
/**
 * Cookie Module
 */

namespace SampleWork\CookieModule\Block;

class CookieNotification extends \Magento\Framework\View\Element\Template
{
    protected $dataHelper;
    protected $storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \SampleWork\CookieModule\Helper\Data $dataHelper,
        array $data
    ) {
        $this->dataHelper = $dataHelper;
        $this->storeManager = $context->getStoreManager();
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getModuleActivation() 
    {
        return $this->dataHelper->getConfig('cookiesettings/functional/activation');
    }

    public function getCookieName() 
    {
        return "cookies_allowed";
    }

    public function getCookieLifetime() 
    {
        return $this->dataHelper->getConfig('cookiesettings/functional/lifetime');
    }

    public function getCookiePath() 
    {
        $cookiePath = $this->dataHelper->getConfig('cookiesettings/functional/path') ? $this->dataHelper->getConfig('cookiesettings/functional/path') : "/";
        return $cookiePath;
    }

    public function getCookieDomain() 
    {
        return $this->dataHelper->getConfig('cookiesettings/functional/domain');
    }

    public function getCookieMessage() 
    {
        return $this->dataHelper->getConfig('cookiesettings/design/message');
    }

    public function getCookiePosition() 
    {
        switch ($this->dataHelper->getConfig('cookienotification/design/position')) {
        case 'top': return 'top: 0;';
        case 'bottom': return 'bottom: 0;';
        default : return 'top: 0;';
        }
    }

    public function getCookieMessageTextColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/message_text_color'
        );
    }

    public function getCookieMessageBackgroundColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/message_background_color'
        );
    }

    public function getCookieMoreButtonText() 
    {
        return $this->dataHelper->getConfig(
            'cookienotification/design/btn_more_text'
        );
    }

    public function getCookieMoreButtonTextColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/btn_more_text_color'
        );
    }

    public function getCookieMoreButtonBackgroundColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/btn_more_background_color'
        );
    }

    public function getCookieMoreButtonLinkDestination() 
    {
        return $this->dataHelper->getConfig(
            'cookienotification/design/btn_more_link_destination'
        );
    }

    public function getCookieMoreButtonLink() 
    {
        return $this->storeManager->getStore()->getBaseUrl() . 
        $this->dataHelper->getConfig('cookienotification/design/btn_more_link');
    }

    public function getCookieAllowButtonText() 
    {
        return $this->dataHelper->getConfig(
            'cookienotification/design/btn_allow_text'
        );
    }

    public function getCookieAllowButtonTextColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/btn_allow_text_color'
        );
    }

    public function getCookieAllowButtonBackgroundColor() 
    {
        return '#'.$this->dataHelper->getConfig(
            'cookienotification/design/btn_allow_background_color'
        );
    }
}
