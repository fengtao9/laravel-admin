@extends('admin.public.base')

@section('content')
@include('admin.public.content_header')
<section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-file-code-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">代码自动生成</span>
                    <a href="{{url('admin/generate/add')}}" class="info-box-number">点击跳转</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-code"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">表单字段生成</span>
                    <a href="{{url('admin/generate/form')}}" class="info-box-number">点击跳转</a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection