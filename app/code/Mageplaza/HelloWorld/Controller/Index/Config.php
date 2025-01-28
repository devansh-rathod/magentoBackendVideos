<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\HelloWorld\Helper\Data as HelperData;

class Config implements HttpGetActionInterface
{
    private HelperData $helperData;
    private ResultFactory $resultFactory;

    public function __construct(
        ResultFactory $resultFactory,
        HelperData $helperData
    ) {
        $this->resultFactory = $resultFactory;
        $this->helperData = $helperData;
    }

    public function execute(): ResultInterface
    {
        // Retrieve configuration values
        $isEnabled = $this->helperData->getGeneralConfig('enable');
        $displayText = $this->helperData->getGeneralConfig('display_text');

        // Create response content
        $content = sprintf(
            "Enable: %s<br>Display Text: %s",
            $isEnabled ? 'Yes' : 'No',
            $displayText
        );

        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents($content);

        return $result;
    }
}
