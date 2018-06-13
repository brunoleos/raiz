<div id="home" class="bg-slide">
    <div class="row pb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" align="right">
                <div class="bxslider">
                    @forelse ($slides as $s)
                    <div class="foto-slide">
                        
                        <img src="{{url($s->imagem)}}" class="img-responsive" alt="">
                       
                       <br>
                        <div align="center">
                            <p>{{ $s->titulo }}</p>
                        <span >{{ $s->chamada }}</span>
                        
                        </div> 
                    </div>
                    @empty
                    <p>nenhuma foto</p>
                    @endforelse

                    
                </div>
            </div>
                <div class="col-md-6" align="right">
                    <img src="{{url('img/ipad-slide.png')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div id="home" class="pages">--}}

                {{--<!-- REVOLUTION SLIDER START -->--}}
                {{--<div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">--}}
                    {{--<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->--}}
                    {{--<div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">--}}
                        {{--<ul>--}}
                            {{--<!-- SLIDE  -->--}}
                            {{--@forelse ($slides as $s)--}}
                            {{----}}
                        {{--<li data-index="rs-309{{ $s->id }}" --}}
                                {{--data-transition="slideoverhorizontal" --}}
                                {{--data-slotamount="default" --}}
                                {{--data-easein="Power4.easeInOut" --}}
                                {{--data-easeout="Power4.easeInOut" --}}
                                {{--data-masterspeed="1000" --}}
                                {{--data-thumb="{{ url("thumb/$s->imagem") }}" --}}
                                {{--data-rotate="0" --}}
                                {{--data-fstransition="fade" --}}
                                {{--data-fsmasterspeed="1500" --}}
                                {{--data-fsslotamount="7" --}}
                                {{--data-saveperformance="off" --}}
                                {{--data-title="we are carna" --}}
                                {{--data-description="">--}}
                                 {{--<!-- MAIN IMAGE -->--}}
                                 {{--<img src="{{ url("$s->imagem") }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}
                                 {{--<!-- LAYERS -->--}}
 {{----}}
                                 {{--<!-- LAYER NR. 1 -->--}}
                                 {{--<div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0" id="rs-309{{ $s->id }}-layer-11" --}}
                                 {{--data-x="['center','center','center','center']" --}}
                                 {{--data-hoffset="['0','0','0','0']" --}}
                                 {{--data-y="['bottom','bottom','bottom','bottom']" --}}
                                 {{--data-voffset="['0','0','0','0']" --}}
                                 {{--data-width="full" --}}
                                 {{--data-height="['400','400','400','550']" --}}
                                 {{--data-whitespace="nowrap" --}}
                                 {{--data-transform_idle="o:1;" --}}
                                 {{--data-style_hover="cursor:default;" --}}
                                 {{--data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" --}}
                                 {{--data-transform_out="opacity:0;s:1000;s:1000;" --}}
                                 {{--data-start="0" data-basealign="slide" --}}
                                 {{--data-responsive_offset="off" --}}
                                 {{--data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">--}}
                                 {{--</div>--}}
 {{----}}
                                 {{--<!-- LAYER NR. 2 -->--}}
                                 {{--<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="rs-309{{ $s->id }}-layer-1" --}}
                                 {{--data-x="['left','left','left','left']" --}}
                                 {{--data-hoffset="['50','50','30','17']" --}}
                                 {{--data-y="['bottom','bottom','bottom','bottom']" --}}
                                 {{--data-voffset="['110','110','180','160']" --}}
                                 {{--data-fontsize="['110','100','70','60']" --}}
                                 {{--data-lineheight="['100','90','60','60']" --}}
                                 {{--data-width="['none','none','none','400']" --}}
                                 {{--data-height="none" --}}
                                 {{--data-whitespace="['nowrap','nowrap','nowrap','normal']" --}}
                                 {{--data-transform_idle="o:1;" --}}
                                 {{--data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" --}}
                                 {{--data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" --}}
                                 {{--data-mask_in="x:0px;y:[100%];" --}}
                                 {{--data-mask_out="x:inherit;y:inherit;" --}}
                                 {{--data-start="500" data-splitin="none" --}}
                                 {{--data-splitout="none" --}}
                                 {{--data-basealign="slide" --}}
                                 {{--data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">{{ $s->titulo }}--}}
                                 {{--</div>--}}
 {{----}}
                                 {{--<!-- LAYER NR. 3 -->--}}
                                 {{--<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="rs-309{{ $s->id }}-layer-4" --}}
                                 {{--data-x="['left','left','left','left']" --}}
                                 {{--data-hoffset="['55','55','33','20']" --}}
                                 {{--data-y="['bottom','bottom','bottom','bottom']" --}}
                                 {{--data-voffset="['40','1','74','58']" --}}
                                 {{--data-fontsize="['15','15','15','13']" --}}
                                 {{--data-lineheight="['24','24','24','20']" --}}
                                 {{--data-width="['410','410','410','280']" --}}
                                 {{--data-height="['60','100','100','100']" --}}
                                 {{--data-whitespace="normal" --}}
                                 {{--data-transform_idle="o:1;" --}}
                                 {{--data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" --}}
                                 {{--data-start="650" --}}
                                 {{--data-splitin="none" --}}
                                 {{--data-splitout="none" --}}
                                 {{--data-basealign="slide" --}}
                                 {{--data-responsive_offset="off" --}}
                                 {{--data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">{{ $s->chamada }}--}}
                                 {{--</div>--}}
 {{----}}
                                 {{----}}
 {{----}}
                                 {{----}}
                             {{--</li>--}}
                            {{--@empty--}}
                                {{----}}
                            {{--@endforelse--}}
                            {{----}}
                            {{--<!-- SLIDE  -->--}}

                            {{----}}

                        {{--</ul>--}}
                        {{--<div class="tp-static-layers"></div>--}}
                        {{--<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- END REVOLUTION SLIDER -->--}}

            {{--</div>--}}
            {{--<!-- end home -->--}}