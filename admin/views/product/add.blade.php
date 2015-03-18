@extends('layouts.master')

@section('title')
    添加
@stop


@section('content')

   @breadCrumb(array('w'=>v))
   @include('common.breadCrumb',array('首页'=>'/'));

@stop
