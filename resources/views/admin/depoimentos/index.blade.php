@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.depoimentos.title')</h3>
    @can('depoimento_create')
    <p>
        <a href="{{ route('admin.depoimentos.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('depoimento_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.depoimentos.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.depoimentos.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($depoimentos) > 0 ? 'datatable' : '' }} @can('depoimento_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('depoimento_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.depoimentos.fields.foto')</th>
                        <th>@lang('quickadmin.depoimentos.fields.nome')</th>
                        <th>@lang('quickadmin.depoimentos.fields.depoimento')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($depoimentos) > 0)
                        @foreach ($depoimentos as $depoimento)
                            <tr data-entry-id="{{ $depoimento->id }}">
                                @can('depoimento_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='foto'>@if($depoimento->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $depoimento->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $depoimento->foto) }}"/></a>@endif</td>
                                <td field-key='nome'>{{ $depoimento->nome }}</td>
                                <td field-key='depoimento'>{!! $depoimento->depoimento !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('depoimento_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.depoimentos.restore', $depoimento->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('depoimento_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.depoimentos.perma_del', $depoimento->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('depoimento_view')
                                    <a href="{{ route('admin.depoimentos.show',[$depoimento->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('depoimento_edit')
                                    <a href="{{ route('admin.depoimentos.edit',[$depoimento->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('depoimento_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.depoimentos.destroy', $depoimento->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('depoimento_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.depoimentos.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection