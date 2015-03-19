@extends('layouts.master')

@section('title')
    添加
@stop


@section('content')

    @breadCrumb(array('首页'=>'/','添加'=>URL::route('productAdd')))
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> 基本信息</h2>

                    <div class="box-icon">
                        {{--<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>--}}
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                    class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content ">
                    <ul class="nav nav-tabs" id="addProductTab">
                        <li class="active"><a href="#product-baseInfo">基本信息</a></li>
                        <li><a href="#product-gallery">相册</a></li>
                        <li><a href="#product-description">描述</a></li>

                    </ul>
                    <div id="addProductTabContent" class="tab-content">
                        <div class="tab-pane active" id="product-baseInfo">
                            <form class="" role="form">
                                <div class="form-group input-group col-md-8">
                                    <span class="input-group-addon">标题：</span>
                                    <input type="text" class="form-control" placeholder="请输入商品标题" name="productTitle">
                                </div>
                                <div class="form-group input-group col-md-8">
                                    <span class="input-group-addon">编号：</span>
                                    <input type="text" class="form-control" placeholder="请输入鹦鹉编号" name="productCode">
                                </div>
                                <div class="form-group input-group col-md-8">
                                    <span class="input-group-addon">价格：</span>
                                    <input type="text" class="form-control" placeholder="请输入鹦鹉价格" name="productPrice">
                                    <span class="input-group-addon">元</span>
                                </div>
                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">品种：</span>
                                    <select class="form-control" name="productVarietie">
                                        <option>请选择</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">出生日期：</span>
                                    <input type="date" class="form-control" placeholder="请输入鹦鹉价格" name="productPrice">
                                </div>

                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">父系品种：</span>
                                    <select class="form-control" name="productFaVarietie">
                                        <option>请选择</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">母系品种：</span>
                                    <select class="form-control" name="productMaVarietie">
                                        <option>请选择</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">显性基因：</span>
                                    <input type="date" class="form-control" placeholder="请输入鹦鹉的显性基因(可选)"
                                           name="productDominantGene">
                                </div>
                                <div class="form-group col-md-8 input-group">
                                    <span class="input-group-addon">隐性基因：</span>
                                    <input type="date" class="form-control" placeholder="请输入鹦鹉的显性基因(可选)"
                                           name="productImplicitGene">
                                </div>
                                <div class="form-group col-md-8 input-group">
                                    <button type="button" class="btn btn-success">保存</button>
                                </div>


                            </form>

                        </div>
                        <div class="tab-pane" id="product-gallery">
                            ss
                        </div>
                        <div class="tab-pane" id="product-description">dd</div>

                    </div>

                </div>

            </div>
        </div>
        <!--/span-->

    </div>
@stop
