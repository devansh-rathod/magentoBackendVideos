<?php 
namespace  Training\VirtualTypeExample\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\VirtualTypeExample\Api\WarehouseRepositoryInterface;

class Example implements ArgumentInterface{

    protected  WarehouseRepositoryInterface $warehouseRepository;
       
    public function __construct(WarehouseRepositoryInterface $warehouseRepository)
     {
        $this->warehouseRepository = $warehouseRepository;
     }
     public function getWarehouse(RequestInterface $request){
        return $this->warehouseRepository->newWarehouse((string)$request->getParam('code'));
     }
}