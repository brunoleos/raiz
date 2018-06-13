<section class="bg-mirins mag-popup py-5" id="mirins">


    <div class="container" align="center">

        <div class="row">
            <div class="col-md-12 mb-sm-30 clearfix">
                <h1 class="titulo">COLABORADORES MIRINS</h1>

                <div class="tsestimonial-controls">
                    <span class="bx-testimonial-prev"></span>
                    <span class="bx-testimonial-next"></span>
                </div>
            </div>
            <!-- / col-md-12 -->

        </div>
        <!-- / row -->

        <div class="row">

            <div class="col-md-12">

                <ul class="bx-slider testimonial-standard"
                    data-bx-carousel="true"
                    data-bx-delay="1500"
                    data-bx-mode="horizontal"
                    data-bx-easing="easeInOutQuart"
                    data-bx-auto-play="false"
                    data-bx-control="true"
                    data-bx-auto-hover="true"
                    data-bx-pager="true"
                    data-slide-width="370"
                    data-max-slide="3"
                    data-bx-speed="700"
                    data-move-slide="3"
                    data-slide-margin="15"
                    data-bx-prev-selector=".bx-testimonial-prev"
                    data-bx-next-selector=".bx-testimonial-next">

                    @forelse ($dep as $d)
                        <li>

                            <div class="item moldura" align="center">

                                <img class="imgmirins" src="{{ url($d->foto) }}" alt="">
                                <h3 class="txt no-padding no-margin">{{ $d->nome }}</h3>
                                <p>{{ $d->depoimento }}</p>
                                <div class="moldurapad"></div>


                                {{--  <span>seo <i class="separator fa  fa-minus"></i> co founder</span>  --}}

                            </div>

                        </li>
                        <!-- / col-sm-6 -->
                    @empty

                    @endforelse



                </ul>
                <!-- / bx testimonial-standard-->

            </div>
            <!-- end col-md-12 -->



        </div>
        <!-- / row -->

    </div>
    <!-- / container-->

    <div align="center" class="">
        <h3 class="txt">Faça parte do nosso time de colaboradores mirins!</h3>
        <a href="#addmirins" class="btn-azul txt mag-lightbox">SAIBA MAIS</a>

    </div>

</section>
<!-- / test-classic-->