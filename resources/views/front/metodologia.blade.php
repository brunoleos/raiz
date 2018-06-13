<div id="services" class="">



                <div class="container-fluid bg-metodo py-5">

                    @forelse ($metodo as $m)
                    <div class="row">
                        
                                                @if (!$m->imagem)
                                                <div class="col-md-12 content-box-side animated" data-animation="fadeIn">
                                                    
                                                                                <div class="box-side-details">
                                                                                    <div class="box-side__header"> <i class="fa fa-code"></i>
                                                                                    <h3 class="standard-title text-uppercase">{{ $m->titulo }}</h3> </div>
                                                                                    <p>
                                                                                        {{ $m->conteudo }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                @else
                            <div class="col-md-6">
                                <img src="{{ url($m->imagem) }}" class="image-fluid" alt="">
                            </div>
                                                <div class="col-md-6 text-justify content-box-side animated" data-animation="fadeIn">
                                                    
                                                                                <div class="box-side-details">
                                                                                    <div class="">
                                                                                    <h1 class="titulo text-center">{{ $m->titulo }}</h1> </div>
                                                                                    <p class="txt" style="color: #000">
                                                                                        {{ $m->conteudo }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                @endif
                                                
                        
                                            </div>
                                            <!-- end row -->
                    @empty
                        
                    @endforelse

                </div>
                <!-- end container -->

                



            </div>
            <!-- end services -->