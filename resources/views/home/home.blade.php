@extends('home.layout')


@section('boardOfMembers')
<div class="col-lg-5 col-company">
        <h3 class="widget widget-title">
                Board Of Members
        </h3>

        <ul class="widget-nav-menu">
            @foreach ($boardOfMembers as $item)
            <li><a href="#">{{ $item->getName() }} - ({{ $item->getPosition() }})</a></li>    
            @endforeach
            
        </ul>
</div>
@endsection

@section('content')
    

<section class="flat-slider style1 clearfix">
    <div class="rev_slider_wrapper fullwidthbanner-container" >
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>


               @foreach ($halls as $hall)
               

                <!-- Slide 1 -->
                <li data-transition="random">
                    <!-- Main Image -->
                <img src="{{ url('uploads/halls/' . $hall->getImage())  }}" alt="" data-bgposition="center center" data-no-retina>
                    <div class="overlay"></div>

                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme education"
                    data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-113','-80','-70','-70']"
                    data-fontsize="['70','70','50','30']"
                    data-lineheight="['90','90','70','50']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"> <div class="education-text text-white">Halls & Interiors</div> </div>

                    <div class="tp-caption tp-resizeme text-white complete text-edukin"
                    data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-22','-5','-10','-10']"
                    data-fontsize="['17','17','15','14']"
                    data-lineheight="['30','30','26','22']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-paddingright="['550','155','50','2']" >
                    Your comfort is our priority.
                </div>
                
                {{-- Complete your educution record collection. Discover Educution's full discography. Education is not key to success in life. --}}

                    <div class="tp-caption"
                    data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['88','80','60','70']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-paddingtop= "['50','50','50','50']"
                    data-paddingbottom= "['50','50','50','50']"> 
                
                    {{-- <a href="#" class="btn btn-styl1">Read More</a>
                    <a href="#" class="btn btn-styl2"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                
                </div>

                    <div class="tp-caption sl-address"
                    data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['325','280','250','200']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-paddingtop= "['50','50','50','50']"
                    data-paddingbottom= "['50','50','50','50']"> <a href="#" class="text-white sl-phone"><i class="fa fa-phone" aria-hidden="true"></i> +91 254 785 587</a><a href="#" class="text-white sl-email"><i class="fa fa-envelope" aria-hidden="true"></i> educate@info.com</a></div>
                </li>               


               @endforeach




                <!-- Slide 2 -->
            </ul>
        </div>
    </div> 
</section><!-- flat-slider -->





<section class="partner-clients partner-clients-style1"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                </div>
    
    
                <div>
                    &nbsp;
                </div>
    
    
    
            </div>
        </div>
    </section><!-- partner-clients -->
    










<section class="online-courses online-courses-style1">
    <div class="container">
        <div class="title-section text-center">
            <p class="sub-title lt-sp17">Exotic Views</p>
            <div class="flat-title medium">
               Interiors & Exteriors 
            </div>
        </div>
        <div class="online-courses-wrap">
            <div class="row">

                @foreach ($interiors as $interior)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="imagebox-courses-type1">
                        <div class="featured-post">
                            <img src="{{ url('uploads/interiors/' . $interior->getImage()) }}" alt="images">
                        </div>
                        <div class="author-info">
                            <div class="avatar">
                                    {{-- <img src="{{ url('uploads/interiors/' . $interior->getImage() . '.jpeg') }}" alt="images"> --}}
                            </div>
                            <div class="category">
                                {{-- design --}}
                            </div>
                            <div class="name">
                                {{-- <a href="#">Learn Photoshop CC ...</a>  --}}
                            </div>
                            <div class="border-bt">
                                
                            </div>
                            <div class="evaluate">
                                <div class="price">
                                    {{-- <span class="price-now">$269</span> --}}
                                    {{-- <span class="price-previou"><del>$169</del></span> --}}
                                </div>

                                {{-- <div class="review">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>(4)</span>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                
            </div>
        </div>

        <div class="browse-all-courses pd-browse-course text-center">
            {{-- <a href="#" class="btn-browse-courses">Browse all courses</a> --}}
        </div>

    </div>
</section><!-- online-courses -->





@endsection