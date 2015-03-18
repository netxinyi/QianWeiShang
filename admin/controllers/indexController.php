<?php
class indexController extends baseController{

    public function showIndex(){
        return Response::view('index');
    }

}