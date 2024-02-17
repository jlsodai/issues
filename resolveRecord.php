<?php

use App\Models\Product;
 
public function resolveRecord(): ?Product
{
    return Product::query()
        ->where('sku', $this->data['sku'])
        ->first();
}
