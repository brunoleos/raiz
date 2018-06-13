@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.depoimentos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.depoimentos.fields.foto')</th>
                            <td field-key='foto'>@if($depoimento->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $depoimento->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $depoimento->foto) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.depoimentos.fields.nome')</th>
                            <td field-key='nome'>{{ $depoimento->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.depoimentos.fields.depoimento')</th>
                            <td field-key='depoimento'>{!! $depoimento->depoimento !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.depoimentos.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
