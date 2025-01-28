<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\HelloWorld\Model\PostFactory;

class Index implements HttpGetActionInterface
{
    private PageFactory $pageFactory;
    private PostFactory $postFactory;

    public function __construct(
        PageFactory $pageFactory,
        PostFactory $postFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
    }

    public function execute(): ResultInterface
    {
        $post = $this->postFactory->create();
        $collection = $post->getCollection();

        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }

        return $this->pageFactory->create();
    }
}
