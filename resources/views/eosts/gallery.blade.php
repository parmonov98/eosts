

@if(count($gallerys[0])>0)

           <section class="bg-light-gray wide-tb-100">
                <div class="container pos-rel">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <h1 class="heading-main">

                                {!!('ru'==$gallerys[1])?'<span>наша </span>фотогалерея':''!!} {!!('en'==$gallerys[1])?'<span> our </span> Photo gallery':''!!} {!!('tu'==$gallerys[1])?'<span>bizim  </span> fotoğraf Galerisi':''!!} 

                                  
                            </h1>
                        </div>
                        <!-- Heading Main -->
                    </div>

                    <div id="js-styl2-mosaic" class="cbp" itemscope itemtype="https://schema.org/ImageObject">
                        

@foreach($gallerys[0] as $k=>$gallery)

                        <div class="cbp-item @if($gallery->sezi == 1) design @elseif($gallery->sezi == 2) identity @else photography @endif" itemprop="">
                            <div class="gallery-link">
                                <a href="project-single.html" class="txt-white">
                                    <i class="icofont-external-link"></i>
                                </a>
                            </div>
                            <a href="{{ asset('/gallery/'.$gallery->img['max']) }}" itemprop="contentUrl" class="cbp-caption cbp-lightbox"
                                data-title="Lorem ipsum" itemscope itemtype="https://schema.org/ImageObject">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('/gallery/'.$gallery->img['min']) }}" itemprop="contentUrl" alt="Somehere {{$gallery->id}}">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <i class="icofont-search icofont-2x txt-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

@endforeach


                       





                    </div>

                </div>
            </section>


            @endif