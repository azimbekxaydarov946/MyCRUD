<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use App\Trait\mycrud;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use mycrud;

    public function __construct()
    {
       $this->model=new Product();
       $this->storerequest=ProductStoreRequest::class;
       $this->updaterequest=ProductStoreRequest::class;
    }
}
