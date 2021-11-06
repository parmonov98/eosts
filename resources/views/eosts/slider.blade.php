@if(isset($sliders[0]) > 0)      
        <!-- slider -->
        <div class="slider-section">


            <div class="home-slider ">
@foreach($sliders[0] as $z=>$slider)

               

                <div class="slider-item" style="background-image: url({{ asset('/sliders/'.$slider->img['max'])}});">
                    <!-- <div class="slider-item"> -->
                    <!-- <img src="images/banner_slider_2.jpg" alt=""> -->
                        @if(isset($slider->name['name'][$sliders[1]]))
                            <div class="h2">{!!$slider->name['name'][$sliders[1]]!!}</div>
                        @endif
                        @if(isset($slider->name['title'][$sliders[1]]))
                            <div class="h3">{!!$slider->name['title'][$sliders[1]]!!}</div>
                        @endif
                        @if(isset($slider->name['description'][$sliders[1]]))
                            <div class="h4">{!!$slider->name['description'][$sliders[1]]!!} </div>
                        @endif                    
                </div>



@endforeach
</div></div>
@endif


