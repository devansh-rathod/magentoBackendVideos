<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Mageplaza\HelloWorld\Helper\Data as HelperData;

class Config implements HttpGetActionInterface
{
    private HelperData $helperData;

    public function __construct(
        HelperData $helperData
    ) {
        $this->helperData = $helperData;
    }

    public function execute()
    {
        // Retrieve configuration values using the helper
        $isEnabled = $this->helperData->getGeneralConfig('enable');
        $displayText = $this->helperData->getGeneralConfig('display_text');

        // Output the configuration values
        echo $isEnabled;
        echo $displayText;

        return null;
    }
}
