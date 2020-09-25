@extends('layouts.app')

@section('content')

<!-- SFOI = Search form over image -->



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">
<div class="mySlides fade">

  <div class="numbertext"></div>
<img src="images/uploads/2017/08/background-296b3.jpg" style="width:100%">  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/uploads/properties/94/e594ce0d769d094255bdd7993a173a97/ff21c5f733c556262219ef87b1cf56e0-244x163.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset="https://www.remax-tripoli.com/wp-content/uploads/properties/94/e594ce0d769d094255bdd7993a173a97/ff21c5f733c556262219ef87b1cf56e0-244x163.jpg 244w, https://www.remax-tripoli.com/wp-content/uploads/properties/94/e594ce0d769d094255bdd7993a173a97/ff21c5f733c556262219ef87b1cf56e0-300x200.jpg 300w, https://www.remax-tripoli.com/wp-content/uploads/properties/94/e594ce0d769d094255bdd7993a173a97/ff21c5f733c556262219ef87b1cf56e0-150x100.jpg 150w, https://www.remax-tripoli.com/wp-content/uploads/properties/94/e594ce0d769d094255bdd7993a173a97/ff21c5f733c556262219ef87b1cf56e0.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
<img src="images/uploads/2017/08/background-296b3.jpg" style="width:100%">

<div class="text">
</div>
</div>

</div>


<div style="text-align:center">

  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>
















<div class="SFOI clearfix" style="">
    <div class="SFOI__content">
         <h2 class="SFOI__title">Find properties</h2>


                                <form method="GET"action="{{url('/search')}}" role="search" id="localsearch">
    {{ csrf_field() }}

                        <div class="SFOI__top-fields-wrapper">

                            <div class="SFOI__top-fields-container">

	<div class="option-bar large">

		<label for="pays">
			State		</label>

        <span class="selectwrap">

        <input type="text" name="pays" id="pays" required placeholder="Any"  class="form-control"/>

        </span>
	</div>

		<div class="option-bar large">
		<label for="gouvernaurat">
			City		</label>
        <span class="selectwrap">

          <input type="text" name="gouvernaurat" id="gouvernaurat" required placeholder="Any" class="form-control"/>

        </span>
	</div>



  <div class="option-bar large">
	<label for="select-property-type">
		Property Type	</label>
    <span class="selectwrap">
          <input type="text" name="slug" id="slug" required placeholder="Any" class="form-control"/>
    </span>
</div>


<div class="option-bar small">
	<label for="Bedrooms">
		Min Beds	</label>
    <span class="selectwrap">
              <input type="text" name="Bedrooms" id="Bedrooms" placeholder="Any" class="form-control"/>
    </span>
</div>

<div class="option-bar small">
	<label for="Bathrooms">
		Min Baths	</label>
    <span class="selectwrap">
                  <input type="text" name="Bathrooms" id="Bathrooms" required placeholder="Any" class="form-control"/>
  </span>
</div>

<div class="option-bar small ">
	<label for="prix">
		Min Price	</label>
    <span class="selectwrap">
                      <input type="text" name="prix" id="prix" required placeholder="Any" class="form-control"/>
    </span>
</div>



<div class="option-bar small ">
	<label for="prix">
		Max Price	</label>
    <span class="selectwrap">
                          <input type="text" name="prix" id="prix" required placeholder="Any" class="form-control"/>
    </span>
</div>


<div class="option-bar small">
	<label for="surface">
		Min Area		<span>(m²)</span>
	</label>
	<input type="text" name="surface" id="surface"  required placeholder="Any" class="form-control"/>
</div>



<div class="option-bar small">
	<label for="surface">
		Max Area		<span>(m²)</span>
	</label>
		<input type="text" name="surface" id="surface" required placeholder="Any" class="form-control"/>

</div>


	    <button class="btn btn-primary btn-block" type="submit">Search</button>
               </div>



</div></div>
                            </div>
                                                </form>
                     </div>

</div>






















                                  

      


<div class="container">

    <div class="row">

        <div class="span12">

            <div class="main">

                <section id="home-properties-section" class="property-items ajax-pagination">

                    <div class="narrative">
    </div>
                    <div id="home-properties-section-wrapper">

                        <div id="home-properties-section-inner">

                            <div id="home-properties-wrapper">
                                     @foreach($locales as $blog)

                                <div id="home-properties" class="property-items-container clearfix">
    <article class="property-item clearfix">
        <h4><a href="{{ url('details/'.$blog->id) }}"></a>{{ $blog->name_loc }}</a></h4>

        <figure>
            <a href="{{ url('details/'.$blog->id) }}">
                <img width="244" height="163" src="images/uploads/properties/77/e594ce0d769d094255bdd7993a173a97/5b16370cc2fc09b9df54ee122a67f25e-244x163.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset="https://www.remax-tripoli.com/wp-content/uploads/properties/77/e594ce0d769d094255bdd7993a173a97/5b16370cc2fc09b9df54ee122a67f25e-244x163.jpg 244w, https://www.remax-tripoli.com/wp-content/uploads/properties/77/e594ce0d769d094255bdd7993a173a97/5b16370cc2fc09b9df54ee122a67f25e-300x200.jpg 300w, https://www.remax-tripoli.com/wp-content/uploads/properties/77/e594ce0d769d094255bdd7993a173a97/5b16370cc2fc09b9df54ee122a67f25e-150x100.jpg 150w, https://www.remax-tripoli.com/wp-content/uploads/properties/77/e594ce0d769d094255bdd7993a173a97/5b16370cc2fc09b9df54ee122a67f25e.jpg 500w" sizes="(max-width: 244px) 100vw, 244px" />            </a>

            <figcaption class="for-sale">****</figcaption>
        </figure>

        <div class="detail">
            <h5 class="price">
                {{ $blog->prix}} <small> -  {{ $blog->slug }}</small>            </h5>
            <p>{{ $blog->description}}</p>
            <a class="more-details" href="{{ url('details/'.$blog->id) }}">More Details <i class="fa fa-caret-right"></i></a>
        </div>

        <div class="property-meta">
            <meta name='PROPERTY_ID' VALUE='100009001-382' /><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M14 7.001H2.999C1.342 7 0 8.3 0 10v11c0 1.7 1.3 3 3 3H14c1.656 0 3-1.342 3-3V10 C17 8.3 15.7 7 14 7.001z M14.998 21c0 0.551-0.447 1-0.998 1.002H2.999C2.448 22 2 21.6 2 21V10 c0.001-0.551 0.449-0.999 1-0.999H14c0.551 0 1 0.4 1 0.999V21z"/>
<path class="path" d="M14.266 0.293c-0.395-0.391-1.034-0.391-1.429 0c-0.395 0.39-0.395 1 0 1.415L13.132 2H3.869l0.295-0.292 c0.395-0.391 0.395-1.025 0-1.415c-0.394-0.391-1.034-0.391-1.428 0L0 3l2.736 2.707c0.394 0.4 1 0.4 1.4 0 c0.395-0.391 0.395-1.023 0-1.414L3.869 4.001h9.263l-0.295 0.292c-0.395 0.392-0.395 1 0 1.414s1.034 0.4 1.4 0L17 3 L14.266 0.293z"/>
<path class="path" d="M18.293 9.734c-0.391 0.395-0.391 1 0 1.429s1.023 0.4 1.4 0L20 10.868v9.263l-0.292-0.295 c-0.392-0.395-1.024-0.395-1.415 0s-0.391 1 0 1.428L21 24l2.707-2.736c0.391-0.394 0.391-1.033 0-1.428s-1.023-0.395-1.414 0 l-0.292 0.295v-9.263l0.292 0.295c0.392 0.4 1 0.4 1.4 0s0.391-1.034 0-1.429L21 7L18.293 9.734z"/>
</svg>
{{ $blog->surface}} m²</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<circle class="circle" cx="5" cy="8.3" r="2.2"/>
<path class="path" d="M0 22.999C0 23.6 0.4 24 1 24S2 23.6 2 22.999V18H2h20h0.001v4.999c0 0.6 0.4 1 1 1 C23.552 24 24 23.6 24 22.999V10C24 9.4 23.6 9 23 9C22.447 9 22 9.4 22 10v1H22h-0.999V10.5 C20.999 8 20 6 17.5 6H11C9.769 6.1 8.2 6.3 8 8v3H2H2V9C2 8.4 1.6 8 1 8S0 8.4 0 9V22.999z M10.021 8.2 C10.19 8.1 10.6 8 11 8h5.5c1.382 0 2.496-0.214 2.5 2.501v0.499h-9L10.021 8.174z M22 16H2v-2.999h20V16z"/>
</svg>
{{ $blog->Bedrooms}} Bedrooms</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M23.001 12h-1.513C21.805 11.6 22 11.1 22 10.5C22 9.1 20.9 8 19.5 8S17 9.1 17 10.5 c0 0.6 0.2 1.1 0.5 1.5H2.999c0-0.001 0-0.002 0-0.002V2.983V2.98c0.084-0.169-0.083-0.979 1-0.981h0.006 C4.008 2 4.3 2 4.5 2.104L4.292 2.292c-0.39 0.392-0.39 1 0 1.415c0.391 0.4 1 0.4 1.4 0l2-1.999 c0.39-0.391 0.39-1.025 0-1.415c-0.391-0.391-1.023-0.391-1.415 0L5.866 0.72C5.775 0.6 5.7 0.5 5.5 0.4 C4.776 0 4.1 0 4 0H3.984v0.001C1.195 0 1 2.7 1 2.98v0.019v0.032v8.967c0 0 0 0 0 0.002H0.999 C0.447 12 0 12.4 0 12.999S0.447 14 1 14H1v2.001c0.001 2.6 1.7 4.8 4 5.649V23c0 0.6 0.4 1 1 1s1-0.447 1-1v-1h10v1 c0 0.6 0.4 1 1 1s1-0.447 1-1v-1.102c2.745-0.533 3.996-3.222 4-5.897V14h0.001C23.554 14 24 13.6 24 13 S23.554 12 23 12z M21.001 16.001c-0.091 2.539-0.927 3.97-3.001 3.997H7c-2.208-0.004-3.996-1.79-4-3.997V14h15.173 c-0.379 0.484-0.813 0.934-1.174 1.003c-0.54 0.104-0.999 0.446-0.999 1c0 0.6 0.4 1 1 1 c2.159-0.188 3.188-2.006 3.639-2.999h0.363V16.001z"/>
<rect class="rect" x="6.6" y="4.1" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.6319 3.2336)" width="1" height="1.4"/>
<rect class="rect" x="9.4" y="2.4" transform="matrix(0.7066 0.7076 -0.7076 0.7066 4.9969 -6.342)" width="1.4" height="1"/>
<rect class="rect" x="9.4" y="6.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 7.8179 -5.167)" width="1.4" height="1"/>
<rect class="rect" x="12.4" y="4.4" transform="matrix(0.7069 0.7073 -0.7073 0.7069 7.2858 -7.8754)" width="1.4" height="1"/>
<rect class="rect" x="13.4" y="7.4" transform="matrix(-0.7064 -0.7078 0.7078 -0.7064 18.5823 23.4137)" width="1.4" height="1"/>
</svg>
{{ $blog->Bathrooms}} Bathrooms</span>        </div>
    </article>
</div>
        @endforeach

</div>
<div class="clearfix"></div>
                                </div><!-- end of #home-properties -->

                            </div><!-- end of #home-properties-wrapper -->

                            <div class="svg-loader">
                                <img src="{{ asset('themes/realhomes/assets/classic/images/loading-bars.svg') }}" width="32" height="32">
                            </div>

<!--                                                <div class='pagination'><a href='' class='real-btn current' >{{$locales ->links()}}</a></div>
 -->
                    </div><!-- end of #home-properties-section-wrapper -->


                </section>

            </div>
            <!-- /.main -->

        </div>
        <!-- /.span12 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->



    </div>
    <!-- /.main-wrapper -->

		<div class="container page-carousel">
			<div class="row">
				<div class="span12">
					<section class="brands-carousel  clearfix">
													<h3><span>Partners</span></h3>
														<ul class="brands-carousel-list clearfix">
															<li>
									<a target="_blank" href="http://www.remax.com.lb/" title="RE/MAX Lebanon">
										<img width="145" height="46" src="{{ asset('images/uploads/2017/08/Remax-Lebanon-1-150x100.png') }}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="RE/MAX Lebanon" title="RE/MAX Lebanon" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.vivadoo.com/" title="Vivadoo.com">
										<img width="145" height="25" src="{{ asset('images/uploads/2017/08/Vivadoo-150x100.png') }}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Vivadoo.com" title="Vivadoo.com" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.lebaneseinfo.com/" title="Lebanese info">
										<img width="150" height="100" src="{{ asset('images/uploads/2017/08/LebaneseInfo-150x100.png') }}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Lebanese info" title="Lebanese info" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.thalesit.ch/" title="Thales IT">
										<img width="150" height="100" src="{{ asset('images/uploads/2017/08/THALES-IT-150x100.png') }}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Thales IT" title="Thales IT" />									</a>
								</li>
															</ul>
												</section>
				</div>
			</div>
		</div>

<a href="#top" id="scroll-top"><i class="fa fa-chevron-up"></i></a>

	</div>
	<!-- /.rh_wrap -->

@endsection
