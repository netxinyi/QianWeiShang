@extends('admin.layouts.master')

@section('title')
    添加鹦鹉
@stop


@section('content')

    @breadCrumb(array('首页'=>'/','添加鹦鹉'=>route('product.create')))

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
                    {{ Form::model('Product', ['route'=>[$resource.'.store']]) }}
                     <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#product-baseinfo">基本信息</a></li>
                            <li><a href="#product-description">描述</a></li>
                            <li><a href="#product-gallery">相册</a></li>
                     </ul>
                      <br>
                    <div id="myTabContent" class="tab-content col-md-8">
                       @include('admin.common.notice')
                        <div class="tab-pane active " id="product-baseinfo">

                                <div class="form-group input-group ">
                                    {{ Form::label('title', '标题', ['class'=>'input-group-addon']) }}
                                    {{ Form::text('title',Form::old('title'),['class'=>'form-control','placeholder'=>'请输入标题，5到30个字']) }}
                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('code', '编号', ['class'=>'input-group-addon']) }}
                                    {{ Form::text('code',Form::old('code'),['class'=>'form-control','placeholder'=>'请输入编号，3到10个字母数字组合']) }}
                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('price', '价格', ['class'=>'input-group-addon']) }}
                                    {{ Form::text('price',Form::old('price'),['class'=>'form-control','placeholder'=>'请输入价格，两位小数']) }}
                                    {{ Form::label('price', '元', ['class'=>'input-group-addon']) }}

                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('varietie', '品种', ['class'=>'input-group-addon']) }}
                                    {{ Form::select('varietie', ['请选择'], 1, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group  input-group">
                                    {{ Form::label('birthday', '出生日期', ['class'=>'input-group-addon']) }}
                                    {{ Form::input('date','birthday', Form::old('birthday'), ['class'=>'form-control']) }}

                                </div>

                                <div class="form-group input-group">
                                    {{ Form::label('faVarietie', '父系品种', ['class'=>'input-group-addon']) }}
                                    {{ Form::select('faVarietie', ['请选择'], 1, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('maVarietie', '母系品种', ['class'=>'input-group-addon']) }}
                                    {{ Form::select('maVarietie', ['请选择'], 1, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('dominantGene', '显性基因', ['class'=>'input-group-addon']) }}
                                    {{ Form::text('dominantGene',Form::old('dominantGene'),['class'=>'form-control','placeholder'=>'请输入鹦鹉的显性基因']) }}

                                </div>
                                <div class="form-group input-group">
                                    {{ Form::label('implicitGene', '隐性基因', ['class'=>'input-group-addon']) }}
                                    {{ Form::text('implicitGene',Form::old('dominantGene'),['class'=>'form-control','placeholder'=>'请输入鹦鹉的显性基因']) }}

                                </div>

                        </div>
                        <div class="tab-pane" id="product-description">
                            {{ Form::textarea('description',Form::old('description'),['class'=>'form-control','rows'=>'10','placeholder'=>'输入鹦鹉描述']) }}
                            <br>
                        </div>
                        <div class="tab-pane" id="product-gallery">
                            dd
                        </div>

                    </div>
                        <br>
                    <div class="form-group col-md-8 input-group">
                        {{ Form::submit('提交',['class'=>'btn btn-success']) }}
                    </div>
                    {{ Form::close() }}

                </div>

            </div>
        </div>
        <!--/span-->

    </div>

@stop
