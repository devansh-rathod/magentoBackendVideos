<?php 
namespace Training\VirtualTypeExample\Api;

interface WarehouseManagementInterface{
    public function getWarehouseInfo(string $code): array; 
}