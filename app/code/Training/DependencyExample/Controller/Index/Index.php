<?php 
declare(strict_types=1);

namespace Training\DependencyExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory; // <-- Add this

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Dependency Injection in Magento 2');
        return $page;
    }
}
