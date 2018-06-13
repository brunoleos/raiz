<div id="about" class="bg-about">

                <div class="container-fluid space-y">

                    <div class="row">



                    </div>
                    <!-- / row -->

                    <div class="row">

                        <div class="col-md-5 col-sm-12">

                            <h1 class="titulo text-center">QUEM SOMOS</h1>

                            <h3 class="text-center">{{$about->titulo}}</h3>

        <h4 class="text-center">{{$about->subtitulo}}</h4> 
        <p class="text-center txt" style="color: #000">
            {!! $about->conteudo !!}

</p>


                            

                        </div>
                        <!-- / col-sm-5 -->

                        <div class="col-md-7 hidden-xs hidden-sm">

                            <div class="img-full animated" data-animation="fadeInRight"><img src="{{$about->imagem}}" style="width: 100%" alt=""></div>

                        </div>
                        <!-- / col-sm-6 -->

                    </div>
                    <!-- / row -->

                </div>
                <!-- / container -->

    <div class="container-fluid bg-branco py-5">

        <div class="">
                    <div class="col-md-6">
                        <div class=""style="position: relative">
                            <div class="mascote-about">
                                <img src="{{url('img/lateral-beneficios.png')}}" class="img-responsive" alt="">
                            </div>

                        </div>
                        <div align="right" class="py-10">
                            <h1 class="deco-header timer titulo f120" data-to="{{$about->numero}}" data-speed="2000"></h1>
                            <p class="text-center txt" style="width: 65%; float: right; color: #000">{{$about->chamada}}</p>
                        </div>

                    </div>
                    <!-- / col-md-6 -->

                    <div class="col-md-6">
                        <h1 class="titulo text-center">BENEFÍCIOS</h1>

                        <img src="{{url('img/beneficios.png')}}" class="img-responsive" alt="">

                    </div>
                    <!-- / col-md-6 -->
        </div>
                </div>
                <!-- / container-fluid -->

                

                
                

            </div>
            <!-- end about -->