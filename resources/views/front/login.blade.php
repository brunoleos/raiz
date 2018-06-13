<div class="container">
    <div id="loginnew" class="loginnew mfp-hide">
                            
      <div align="center">
          
          <img src="{{ url('img/logomirins.png') }}" style="width: 100px">
          <h3></h3>

      </div>                                                      


      <div class="formulariodep">
          
        <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                           

                            <div class="col-md-12">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="E-mail" 
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            

                            <div class="col-md-12">
                                <input type="password"
                                       class="form-control"
                                       placeholder="Senha" 
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="{{ route('auth.password.reset') }}" style="color: #FFF;">Esqueceu-se da senha?</a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Lembrar Senha
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <button type="submit"
                                        class="btn btn-vermelho-claro"
                                        style="margin-right: 15px;">
                                    @lang('quickadmin.qa_login')
                                </button>
                            </div>
                        </div>
                    </form>

      </div>
                                                            
</div>
</div>