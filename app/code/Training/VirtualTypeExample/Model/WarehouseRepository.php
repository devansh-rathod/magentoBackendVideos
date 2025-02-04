<?php 
namespace Training\VirtualTypeExample\Model;

use Training\VirtualTypeExample\Api\WarehouseManagementInterface;
use Training\VirtualTypeExample\Api\WarehouseRepositoryInterface;
use \Magento\Framework\DataObject;

class WarehouseRepository implements WarehouseRepositoryInterface 
{
    protected WarehouseManagementInterface $warehouseManagement;
    public function __construct(WarehouseManagementInterface $warehouseManagement) 
    {
        $this->warehouseManagement = $warehouseManagement;
    }
    public function newWarehouse(string $code): DataObject 
    {
        return new DataObject($this->warehouseManagement->getWarehouseInfo($code));   
    }
}
