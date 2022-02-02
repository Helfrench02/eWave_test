<?php
 
    
public function getProductsData()
{
    $productData = [];
    foreach ($this->productSkus as $sku) {
        $product = $this->productRepository->get($sku);
        $productData[$product->getId()] = [
            'name' => $product->getName(),
            'price' => $product->getPrice()
        ];
    }

    return $productData;
}
 

//   I found a mismatch class property name at line number 7. If this typo error occur in this method, 
//   the calling keyword $this cannot call or target the defined class property name "productSku" inside 
//   the class ProductInformation, " Undefined variable: productSkus" error will be displayed on the browser. 
//   Remove the letter 's' at the end of class property name "productSkus".
 
