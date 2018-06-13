@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.slideshow.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.slideshow.fields.titulo')</th>
                            <td field-key='titulo'>{{ $slideshow->titulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.slideshow.fields.chamada')</th>
                            <td field-key='chamada'>{!! $slideshow->chamada !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.slideshow.fields.imagem')</th>
                            <td field-key='imagem'>@if($slideshow->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $slideshow->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $slideshow->imagem) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.slideshows.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
