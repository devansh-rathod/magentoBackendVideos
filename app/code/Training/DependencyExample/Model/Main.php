<?php 
declare(strict_types= 1);
namespace Training\DependencyExample\Model;
class Main 
{
    protected array $data;
    protected Injectable $injectable;
    protected NonInjectableFactory $nonInjectableFactory;
    public function __construct(Injectable $injectable, NonInjectableFactory  $nonInjectableFactory, array $data = [])
    {
        $this->data = $data;
        $this->data['id'] = "Devansh123";
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
    }
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable()
    {
        return $this->nonInjectableFactory->create();
    }
}