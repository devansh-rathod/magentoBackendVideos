<?php 
namespace Training\ProxyExample\ViewModel;

use Codeception\Lib\Generator\Feature;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\ProxyExample\Model\FeaturedProducts;

class Example implements ArgumentInterface{


      protected FeaturedProducts $featuredProducts;
    public function __construct( FeaturedProducts $featuredProducts){
        $this->featuredProducts = $featuredProducts;        
    }

    public function getFeaturedProducts() : array{   
          return $this->featuredProducts->getFeaturedProducts();
    }

}