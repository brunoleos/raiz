<div id="jogos" class="pages">



                <div class="container-fluid-flat mag-popup highlight-section2" data-popup-type="inline" data-popup-gallery-enable="false" data-popup-main-class="mfp-fade-x" data-popup-removal-delay="800">


                    @foreach ($jogos as $key => $value)

                    @if($key % 2 == 0)

                    <div class="row equal-height">
                        
                                                <div class="col-md-6">
                        
                                                <img src="{{ url($value->imagem) }}" alt="" data-no-retina="">
                        
                                                </div>
                                                <!-- / col-md-6 -->
                        
                                                <div class="col-md-6">
                        
                                                    <div class="item-img-details">
                        
                                                    <h3 class="titulo text-center">{{$value->titulo}}</h3>
                        
                        
                                                    <p class="txt preto" style="color: #000">{{$value->conteudo}}</p>


                        
                                                    </div>
                                                    <!-- / item-img-details -->
                        
                                                </div>
                                                <!-- / col-md-6 -->
                        
                                            </div>
                                            <!-- / row -->

                    @else
                    <div class="row clearfix equal-height">
                        
                                                <div class="col-md-6">
                        
                                                    <div class="item-img-details">
                        
                                                        <h3 class="titulo text-center">{{$value->titulo}}</h3>
                        
                                                        <p class="txt preto" style="color: #000">{{$value->conteudo}}</p>

                                                        <h3 class="txt preto text-center" style="color: #000">Quer saber mais sobre nosso trabalho? Faça o download do portfólio.</h3>
                                                       <div align="center">
                                                           <a class="txt btn-azul btn" href="{{url('portifolio.pdf')}}">CLIQUE AQUI</a>
                                                       </div>
                                                    </div>
                                                    <!-- / item-img-details -->
                        
                                                </div>
                                                <!-- / col-md-6 -->
                        
                                                <div class="col-md-6">
                        
                                                    <img src="{{ url($value->imagem) }}" alt="" data-no-retina="">
                        
                                                </div>
                                                <!-- / col-md-6 -->
                        
                                            </div>
                                            <!-- / row -->
                    @endif

                    

                    @endforeach

                    

                    

                </div>
                <!-- / container-fluid-flat -->

            </div>