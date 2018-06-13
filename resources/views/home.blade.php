@extends('layouts.app')

@section('content')
    <div class="row">
         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added users</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.users.fields.name')</th> 
                            <th> @lang('quickadmin.users.fields.email')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                               
                                <td>{{ $user->name }} </td> 
                                <td>{{ $user->email }} </td> 
                                <td>

                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('user_edit')
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('user_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>

 <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added escolas</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.escolas.fields.razao-social')</th> 
                            <th> @lang('quickadmin.escolas.fields.nome-fantasia')</th> 
                            <th> @lang('quickadmin.escolas.fields.cnpj')</th> 
                            <th> @lang('quickadmin.escolas.fields.endereco')</th> 
                            <th> @lang('quickadmin.escolas.fields.telefone')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($escolas as $escola)
                            <tr>
                               
                                <td>{{ $escola->razao_social }} </td> 
                                <td>{{ $escola->nome_fantasia }} </td> 
                                <td>{{ $escola->cnpj }} </td> 
                                <td>{{ $escola->endereco }} </td> 
                                <td>{{ $escola->telefone }} </td> 
                                <td>

                                    @can('escola_view')
                                    <a href="{{ route('admin.escolas.show',[$escola->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('escola_edit')
                                    <a href="{{ route('admin.escolas.edit',[$escola->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('escola_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.escolas.destroy', $escola->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>

 <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added professores</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.professores.fields.nome')</th> 
                            <th> @lang('quickadmin.professores.fields.materias')</th> 
                            <th> @lang('quickadmin.professores.fields.turmas')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($professores as $professore)
                            <tr>
                               
                                <td>{{ $professore->nome }} </td> 
                                <td>{{ $professore->materias }} </td> 
                                <td>{{ $professore->turmas }} </td> 
                                <td>

                                    @can('professore_view')
                                    <a href="{{ route('admin.professores.show',[$professore->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('professore_edit')
                                    <a href="{{ route('admin.professores.edit',[$professore->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('professore_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.professores.destroy', $professore->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>


    </div>
@endsection

