<?php 
declare(strict_types= 1);
namespace Training\InjectablesAndNonInjectables\Model;

class Supplier
{
    protected string $code;
    public function setCode(string $code)
    {
        $this->code = $code;
    }
    public function getCode(): string
    {
        return $this->code;
    }
}