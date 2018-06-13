<div class="container">
    <div id="addmirins" class="add-dep mfp-hide">
                            
      <div align="center">
          
          <img src="{{ url('img/logomirins.png') }}" style="width: 100px">
          <h3 style="color: #FFF !important;">Faça parte do nosso time de colaboradores mirins, 
            <br>
preencha o formulário abaixo.</h3>

      </div>                                                      


      <div class="formulariodep">
          {!! Form::open(['method' => 'POST', 'route' => ['admin.depoimentos.addsite'], 'files' => true,]) !!}

          <div class="row">
                <div class="col-md-6 form-group">
                   
                    {!! Form::text('responsavel', old('responsavel'), ['class' => 'form-control', 'placeholder' => 'Nome do responsável (maior de 18 anos)']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('responsavel'))
                        <p class="help-block">
                            {{ $errors->first('responsavel') }}
                        </p>
                    @endif
                </div>
            
                <div class="col-md-6 form-group">
                   
                    {!! Form::file('foto', ['class' => 'form-control', 'required']) !!}
                    {!! Form::hidden('foto_max_size', 6) !!}
                    {!! Form::hidden('foto_max_width', 4096) !!}
                    {!! Form::hidden('foto_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('foto'))
                        <p class="help-block">
                            {{ $errors->first('foto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                   
                    {!! Form::text('cpf', old('cpf'), ['class' => 'form-control', 'data-mask' => '999.999.999-99', 'placeholder' => 'CPF do responsável', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpf'))
                        <p class="help-block">
                            {{ $errors->first('cpf') }}
                        </p>
                    @endif
                </div>
           
                <div class="col-md-6 form-group">
                   
                    <input class="form-control" placeholder="Telefone" required="" data-mask="(99) 9999-9999" name="telefone" type="phone">
                    <p class="help-block"></p>
                    @if($errors->has('telefone'))
                        <p class="help-block">
                            {{ $errors->first('telefone') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                   
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => 'Nome do menor', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
           
                <div class="col-md-6 form-group">
                   
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'e-mail', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="col-md-12 form-group" style="padding-right: 0; padding-left: 0;" >
                   
                    {!! Form::text('endereco', old('endereco'), ['class' => 'form-control', 'placeholder' => 'Endereço', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endereco'))
                        <p class="help-block">
                            {{ $errors->first('endereco') }}
                        </p>
                    @endif
                </div>

                <div class="col-md-12 form-group" style="padding-right: 0; padding-left: 0;" >
                   
                   <div class="col-md-6" style="padding-left: 0;" >
                       {!! Form::text('complemento', old('complemento'), ['class' => 'form-control', 'placeholder' => 'Complemento', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('complemento'))
                        <p class="help-block">
                            {{ $errors->first('complemento') }}
                        </p>
                    @endif
                   </div>

                   <div class="col-md-6" style="padding-right: 0;" >
                       {!! Form::text('cep', old('cep'), ['class' => 'form-control', 'data-mask' => '99.999-999', 'placeholder' => 'cep', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cep'))
                        <p class="help-block">
                            {{ $errors->first('cep') }}
                        </p>
                    @endif
                   </div>
                    
                </div>
                </div>
           
                
            

            
                <div class="col-xs-6 form-group">
                   
                    {!! Form::textarea('depoimento', old('depoimento'), ['class' => 'form-control ', 'placeholder' => 'mensagem', 'rows' => '4', 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('depoimento'))
                        <p class="help-block">
                            {{ $errors->first('depoimento') }}
                        </p>
                    @endif
                </div>
            </div>

            <input type="checkbox"> sou responsável pelo menor e autorizo a divulgação de imagem e comentário.<br>
<br>
           <div align="center">
                {!! Form::submit(trans('Enviar'), ['class' => 'btn txt btn-vermelho-claro']) !!}
           </div>
    {!! Form::close() !!}
      </div>
                                                            
</div>
</div>