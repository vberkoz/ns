<?php

class SiteController
{

  public function actionIndex()
  {
  	$overviewPage = 'is-active';
    $products = array();
    $products = Product::getLatestProducts(6);
    require_once(ROOT . '/views/site/index.php');
    return true;
  }

}
?>
