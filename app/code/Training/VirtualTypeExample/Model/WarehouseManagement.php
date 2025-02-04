<?php 
namespace Training\VirtualTypeExample\Model;

use Training\VirtualTypeExample\Api\WarehouseManagementInterface;

class WarehouseManagement implements WarehouseManagementInterface{

     
    public function getWarehouseInfo(string $code): array{
        $warehouses=$this->getAllWarehouses();
        if(array_key_exists($code,$warehouses)){
            return $warehouses[$code];
        }
        return [];
    }
    protected function getAllWarehouses(): array{
        return [
            "warehouse1" => [
                "name" => "Warehouse 1",
                "code" => "warehouse1",
                "address" => "123 Main St"
            ],
            "warehouse2" => [
                "name" => "Warehouse 2",
                "code" => "warehouse2",
                "address" => "456 Main St"
            ],
        ];
    }
}