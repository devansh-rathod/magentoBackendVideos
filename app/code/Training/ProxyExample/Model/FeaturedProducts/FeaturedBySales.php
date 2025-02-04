<?php 
namespace Training\ProxyExample\Model\FeaturedProducts;

class FeaturedBySales implements FeaturedProductsInterface{

    protected array $featuredProducts = [];

    public function __construct(){
        $this->loadFeaturedProducts();
    }
    protected function loadFeaturedProducts() : void{
         $this->featuredProducts=[
            'Sales1',
            'Sales2',
            'Sales3'
         ];
    }
    public function getFeaturedProducts():array{
        return $this->featuredProducts;
    }
    
    public function count():int{
        return count($this->featuredProducts);
    }
}