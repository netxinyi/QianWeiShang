<?php
class productController extends baseController{

    protected $viewPath = 'product.';

    public function showAdd(){
        return Response::view($this->viewPath.'add');
    }

}