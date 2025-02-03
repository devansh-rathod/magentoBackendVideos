<?php 
declare(strict_types= 1);
namespace Training\DependencyExample\Model;

class NonInjectable
{
    public function getId() : string
    {
        return 'Class NonInjectable';
    }
}