@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.jogos.title')</h3>
    @can('jogo_create')
    <p>
        <a href="{{ route('admin.jogos.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('jogo_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.jogos.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.jogos.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($jogos) > 0 ? 'datatable' : '' }} @can('jogo_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('jogo_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.jogos.fields.titulo')</th>
                        <th>@lang('quickadmin.jogos.fields.conteudo')</th>
                        <th>@lang('quickadmin.jogos.fields.imagem')</th>
                        <th>@lang('quickadmin.jogos.fields.posicao')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($jogos) > 0)
                        @foreach ($jogos as $jogo)
                            <tr data-entry-id="{{ $jogo->id }}">
                                @can('jogo_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='titulo'>{{ $jogo->titulo }}</td>
                                <td field-key='conteudo'>{!! $jogo->conteudo !!}</td>
                                <td field-key='imagem'>@if($jogo->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $jogo->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $jogo->imagem) }}"/></a>@endif</td>
                                <td field-key='posicao'>{{ $jogo->posicao }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('jogo_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.jogos.restore', $jogo->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('jogo_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.jogos.perma_del', $jogo->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('jogo_view')
                                    <a href="{{ route('admin.jogos.show',[$jogo->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('jogo_edit')
                                    <a href="{{ route('admin.jogos.edit',[$jogo->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('jogo_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.jogos.destroy', $jogo->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('jogo_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.jogos.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection