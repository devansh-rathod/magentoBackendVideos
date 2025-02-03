<?php 
declare(strict_types= 1);
namespace Training\DependencyExample\Model;
class Main 
{
    protected array $data;
    protected Injectable $injectable;
    public function __construct(Injectable $injectable, array $data = [])
    {
        $this->data = $data;
        $this->data['id'] = "Devansh123";
        $this->injectable = $injectable;
    }
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }
}