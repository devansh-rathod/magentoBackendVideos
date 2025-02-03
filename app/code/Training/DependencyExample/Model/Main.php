<?php 
declare(strict_types= 1);
namespace Training\DependencyExample\Model;
class Main 
{
    protected array $data;
    public function __construct(array $data = [])
    {
        $this->data = $data;
        $this->data['id'] = "Devansh123";
    }
    public function getId(): string
    {
        return $this->data['id'];
    }
}