@extends('admin.layouts.master')

@section('title')
    首页
@stop
@section('css')
    @parent
    <link href="/assets/admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@stop

@section('content')
    @breadCrumb(array('首页'=>'/','鹦鹉列表'=>route('product.index')))
    <div class="row">
        <div class="box col-md-4">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>搜索</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                    class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                    class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group has-feedback ">
                            {{Form::label('keyword','关键词：')}}
                            {{Form::text('keyword',Form::old('keyword'),['class'=>'form-control','placeholder'=>'输入标题或编码搜索'])}}

                            <i class="glyphicon glyphicon-search form-control-feedback" id="keywordSearchButton"></i>

                        </div>
                        <div class="form-group">
                            {{ Form::label('varietieId', '品种：') }}
                            {{ Form::select('varietieId',  $varieties,  Form::old('varietie',0), ['class' => 'form-control']) }}
                        </div>
                        <div class="">
                            {{Form::label('priceLt','价格：')}}
                        </div>
                        <div class="input-group form-group">

                            {{ Form::label('priceLt', '从', ['class'=>'input-group-addon']) }}
                            {{Form::text('priceLt',Form::old('priceLt'),['class'=>'form-control'])}}

                            {{ Form::label('priceGt', '到', ['class'=>'input-group-addon']) }}

                            {{Form::text('priceGt',Form::old('priceGt'),['class'=>'form-control'])}}

                        </div>
                        <div class="">
                            {{Form::label('ageLt','年龄：')}}
                        </div>
                        <div class="input-group form-group">

                            {{ Form::label('ageLt', '从', ['class'=>'input-group-addon']) }}
                            {{Form::text('ageLt',Form::old('ageLt'),['class'=>'form-control'])}}

                            {{ Form::label('ageGt', '到', ['class'=>'input-group-addon']) }}

                            {{Form::text('ageGt',Form::old('ageGt'),['class'=>'form-control'])}}

                        </div>

                        <button type="submit" class="btn btn-default btn-block btn-primary">搜索</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="box col-md-8">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>鹦鹉列表</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                    class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                    class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>编号</th>
                            <th>标题{{ order_by('title') }}</th>
                            <th>价格</th>
                            <th>品种</th>
                            <th>年龄</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key => $product)

                            <tr>
                                <td>{{$key + 1}}</td>
                                <td class="center">{{$product->code}}</td>
                                <td class="center">{{$product->title}}</td>
                                <td class="center">{{$product->price}}</td>
                                <td class="center">{{$product->varietie->name}}</td>
                                <td class="center">{{$product->date_to_age()}}</td>

                                <td class="center">
                                    <span class="label-success label label-default">Active</span>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-9 center-block">
                            {{ pagination($datas->appends(Input::except('page'))) }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@stop

@section('js_footer')
    @parent
    <script type="text/javascript" src="/assets/admin/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">

    </script>
@stop
