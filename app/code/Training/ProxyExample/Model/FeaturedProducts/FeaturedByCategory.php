<?php 
namespace Training\ProxyExample\Model\FeaturedProducts;

class FeaturedByCategory implements FeaturedProductsInterface{

    protected array $featuredProducts = [];

    public function __construct(){
        $this->loadFeaturedProducts();
    }
    protected function loadFeaturedProducts() : void{
         $this->featuredProducts=[
            'Product1',
            'Product2'
         ];
    }
    public function getFeaturedProducts():array{
        return $this->featuredProducts;
    }
    
    public function count():int{
        return count($this->featuredProducts);
    }
}