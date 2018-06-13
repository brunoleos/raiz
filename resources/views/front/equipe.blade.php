<div id="equipe" class="py-5">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 text-center" style="position: relative">

                            <h1 class="titulo">FAMÍLIA RAIZ REDONDA</h1>
                            <img src="{{url('img/teo.png')}}" class="teo" alt="">

                        </div>
                        <!-- / col-md-12 -->

                    </div>
                    <!-- / row -->

                </div>
                <!-- / container -->

                <div class="container-fluid-flat mag-popup highlight-section2" 
                    data-popup-type="inline" 
                    data-popup-gallery-enable="false" 
                    data-popup-main-class="mfp-fade-x" 
                    data-popup-removal-delay="800">

                    <div class="row">

                        @forelse ($familia as $f)
                           
                        <div class="col-md-2 col-sm-6">
                            
                        <a href="#team{{ $f->id}}" class="team-block mag-lightbox">
                            
                                                            <img src="{{ url($f->foto) }}" alt="">
                            
                                                            <div class="team-block__details">
                            
                                                                <h3>{{$f->nome}}</h3>
                                                                <p class="txt">{{$f->funcao}}</p>
                                                                
                                                                <div class="team-block__icon"> Saiba Mais
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                            
                                                            </div>
                            
                                                        </a>
                            
                                                        <div id="team{{ $f->id}}" class="team-details mfp-hide">
                            
                                                            <h3 class="standard-title">{{$f->nome}}</h3>
                            
                                                            <p class="txt">{{$f->descricao}}</p>
                            
                                                            <ul class="team-details__social-icons clearfix">
                            
                                                                @if($f->facebook)
                                                                <li><a href="{{$f->facebook}}"><i class="fa fa-facebook"></i></a>
                                                                </li>
                                                                @endif
                            
                                                                @if($f->twitter)
                                                                <li><a href="{{$f->twitter}}"><i class="fa fa-twitter"></i></a>
                                                                </li>
                                                                @endif
                            
                                                                @if($f->email)
                                                                <li><a href="{{$f->email}}"><i class="fa fa-google-plus"></i></a>
                                                                </li>
                                                                @endif
                            
                                                            </ul>
                            
                                                        </div>
                            
                                                    </div>
                                                    <!-- end col-lg-3 -->

                        @empty
                            
                        @endforelse

                        

                    </div>
                    <!-- / row -->

                </div>
                <!-- / container-fluid-flat -->

            </div>
            <!-- end team -->