<?php 

declare(strict_types= 1);
namespace Training\InjectablesAndNonInjectables\Service;

use Training\InjectablesAndNonInjectables\Model\Supplier;

class Supply
{
    protected Supplier $supplier;
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }
    public function getSupplier(): Supplier
    {
        $this->supplier->setCode('123ABC');
        return $this->supplier;
    }
    public function setSupplier(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }
}