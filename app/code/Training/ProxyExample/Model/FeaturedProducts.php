<?php 
namespace Training\ProxyExample\Model;

use Training\ProxyExample\Model\FeaturedProducts\FeaturedByCategory;
use Training\ProxyExample\Model\FeaturedProducts\FeaturedBySales;

class FeaturedProducts{

    protected FeaturedByCategory $featuredByCategory;
    protected  FeaturedBySales $featuredBySales;
    public function __construct(FeaturedByCategory $featuredByCategory, FeaturedBySales $featuredBySales){

        $this->featuredByCategory = $featuredByCategory;
        $this->featuredBySales = $featuredBySales;
    }

    public function getFeaturedProducts():array{
        if($this->featuredByCategory->count()<2){
            return $this->featuredBySales->getFeaturedProducts();
        }
        else{
            return $this->featuredByCategory->getFeaturedProducts();
        }
    }
}