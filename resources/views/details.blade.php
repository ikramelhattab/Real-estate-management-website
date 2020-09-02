
@extends('layouts.app')

@section('content')


<!--
<div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('themes/realhomes/assets/classic/images/banner.jpg'); background-size: cover;">
            <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>Villa for Sale in Kalhat, Koura</span></h1>
                        <div class="page-breadcrumbs">
        <nav class="property-breadcrumbs">
            <ul>
            <li><a href="">Home</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li><li><a href="">North</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li><li><a href="">Koura</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li><li><a href="">Kalhat</a></li>            </ul>
        </nav>
        </div>
                    </div>
        </div>
    </div>End Page Head
 -->
<!-- Content -->
<div class="container contents detail">
    <div class="row">
        <div class="span9 main-wrap">

            <!-- Main Content -->
            <div class="main">

                <div id="overview">
                                                    <div class="slider-main-wrapper">
                                            <div id="property-detail-flexslider" class="clearfix">
            <div class="flexslider">
                <ul class="slides">

                    <li data-thumb="{{ asset('images/uploads/properties/70/cfecfabd7e01d0e5e964ed7fb2b1c868/9370.jpg')}}">
                    <a href="{{ asset('images/uploads/properties/70/e594ce0d769d094255bdd7993a173a97/9370.jpg') }}" class="swipebox" rel="gallery_real_homes" >
                    <img src="{{ asset('images/uploads/properties/70/1ca44144b12eb8cea7bb4dee29f36cbf/9370.jpg')}}" alt="Villa for Sale in Kalhat, Koura" /></a></li>

                        <li data-thumb="{{ asset('images/uploads/properties/70/cfecfabd7e01d0e5e964ed7fb2b1c868/9370.jpg')}}">
                    <a href="{{ asset('images/uploads/properties/70/e594ce0d769d094255bdd7993a173a97/9370.jpg') }}" class="swipebox" rel="gallery_real_homes" >
                    <img src="{{ asset('images/uploads/properties/70/1ca44144b12eb8cea7bb4dee29f36cbf/9370.jpg')}}" alt="Villa for Sale in Kalhat, Koura" /></a></li>

                       <li data-thumb="{{ asset('images/uploads/properties/70/cfecfabd7e01d0e5e964ed7fb2b1c868/9370.jpg')}}">
                    <a href="{{ asset('images/uploads/properties/70/e594ce0d769d094255bdd7993a173a97/9370.jpg') }}" class="swipebox" rel="gallery_real_homes" >
                    <img src="{{ asset('images/uploads/properties/70/1ca44144b12eb8cea7bb4dee29f36cbf/9370.jpg')}}" alt="Villa for Sale in Kalhat, Koura" /></a></li>

                     <li data-thumb="{{ asset('images/uploads/properties/70/cfecfabd7e01d0e5e964ed7fb2b1c868/9370.jpg')}}">
                    <a href="{{ asset('images/uploads/properties/70/e594ce0d769d094255bdd7993a173a97/9370.jpg') }}" class="swipebox" rel="gallery_real_homes" >
                    <img src="{{ asset('images/uploads/properties/70/1ca44144b12eb8cea7bb4dee29f36cbf/9370.jpg')}}" alt="Villa for Sale in Kalhat, Koura" /></a></li>

                    </ul>
            </div>
        </div>
                <div id="property-featured-image" class="clearfix only-for-print">
            <img src="{{ asset('images/uploads/properties/62/e594ce0d769d094255bdd7993a173a97/d90fe2c548b32f35df26480124451cc1.jpg')}}" alt="Villa for Sale in Kalhat, Koura" />        </div>
                                            <div class="slider-socket thumb-on-right">





                                            <span class="add-to-fav">
                    <form action="{{url('/favourites')}}" method="post" class="add-to-favorite-form">
                <input type="hidden" name="property_id" value="92775" />
                <input type="hidden" name="action" value="add_to_favorite" />
            </form>








            <span class="btn-fav favorite-placeholder highlight__red hide" title="Added to favorites">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 21">
  <path class="rh_svg" d="M1089.48,1923.98a6.746,6.746,0,0,1,9.54,9.54L1089,1943l-10.02-9.48a6.746,6.746,0,0,1,9.54-9.54A0.641,0.641,0,0,0,1089.48,1923.98Z" transform="translate(-1077 -1922)"/>
</svg>
					</span>
                <a href="{{url('/home')}}" class="btn-fav favorite add-to-favorite" title="Add to favorite">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 21">
  <path class="rh_svg" d="M1089.48,1923.98a6.746,6.746,0,0,1,9.54,9.54L1089,1943l-10.02-9.48a6.746,6.746,0,0,1,9.54-9.54A0.641,0.641,0,0,0,1089.48,1923.98Z" transform="translate(-1077 -1922)"/>
</svg>
            </a>

                </span>






                                            <!-- Print link -->
                                        <!-- <span class="printer-icon"><a href="javascript:window.print()"><i class="fa fa-print"></i></a></span> -->
                                    </div>
                                </div>


@foreach($loc as $locdet)
<article class="property-item clearfix">
    <div class="wrap clearfix">
        <address class="title">
           {{ $locdet->adress }}        </address>
        <h5 class="price">
            <span class="status-label">
                        </span>
            <span>
                {{ $locdet->prix }} <small> </small>            </span>
        </h5>
    </div>

    <div class="property-meta clearfix">
        <span title="Property ID"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 24 24"  xmlns:xlink="http://www.w3.org/1999/xlink" >
  <g>
    <g>
      <path d="m464.1,67.7h-416.2c-19.8,0-36.4,15.6-36.4,36.4v303.8c0,19.8 15.6,36.4 36.4,36.4h416.1c19.8,0 36.4-16.6 36.4-37.4v-302.8c0.1-19.7-15.5-36.4-36.3-36.4zm16.6,339.1c0,9.4-7.3,16.6-16.6,16.6h-416.2c-9.4,0-16.6-7.3-16.6-16.6v-302.7c0-9.4 7.3-16.6 16.6-16.6h416.1c9.4,0 16.6,7.3 16.6,16.6v302.7z"/>
      <path d="M178,134.3H69.8v108.2H178V134.3z M158.2,222.7H90.6v-67.6h67.6V222.7z"/>
      <rect width="215.3" x="80.2" y="294.5" height="20.8"/>
      <rect width="215.3" x="80.2" y="360" height="20.8"/>
    </g>
  </g>
</svg>
10009-97</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M14 7.001H2.999C1.342 7 0 8.3 0 10v11c0 1.7 1.3 3 3 3H14c1.656 0 3-1.342 3-3V10 C17 8.3 15.7 7 14 7.001z M14.998 21c0 0.551-0.447 1-0.998 1.002H2.999C2.448 22 2 21.6 2 21V10 c0.001-0.551 0.449-0.999 1-0.999H14c0.551 0 1 0.4 1 0.999V21z"/>
<path class="path" d="M14.266 0.293c-0.395-0.391-1.034-0.391-1.429 0c-0.395 0.39-0.395 1 0 1.415L13.132 2H3.869l0.295-0.292 c0.395-0.391 0.395-1.025 0-1.415c-0.394-0.391-1.034-0.391-1.428 0L0 3l2.736 2.707c0.394 0.4 1 0.4 1.4 0 c0.395-0.391 0.395-1.023 0-1.414L3.869 4.001h9.263l-0.295 0.292c-0.395 0.392-0.395 1 0 1.414s1.034 0.4 1.4 0L17 3 L14.266 0.293z"/>
<path class="path" d="M18.293 9.734c-0.391 0.395-0.391 1 0 1.429s1.023 0.4 1.4 0L20 10.868v9.263l-0.292-0.295 c-0.392-0.395-1.024-0.395-1.415 0s-0.391 1 0 1.428L21 24l2.707-2.736c0.391-0.394 0.391-1.033 0-1.428s-1.023-0.395-1.414 0 l-0.292 0.295v-9.263l0.292 0.295c0.392 0.4 1 0.4 1.4 0s0.391-1.034 0-1.429L21 7L18.293 9.734z"/>
</svg>
{{ $locdet->surface }} m</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<circle class="circle" cx="5" cy="8.3" r="2.2"/>
<path class="path" d="M0 22.999C0 23.6 0.4 24 1 24S2 23.6 2 22.999V18H2h20h0.001v4.999c0 0.6 0.4 1 1 1 C23.552 24 24 23.6 24 22.999V10C24 9.4 23.6 9 23 9C22.447 9 22 9.4 22 10v1H22h-0.999V10.5 C20.999 8 20 6 17.5 6H11C9.769 6.1 8.2 6.3 8 8v3H2H2V9C2 8.4 1.6 8 1 8S0 8.4 0 9V22.999z M10.021 8.2 C10.19 8.1 10.6 8 11 8h5.5c1.382 0 2.496-0.214 2.5 2.501v0.499h-9L10.021 8.174z M22 16H2v-2.999h20V16z"/>
</svg>
{{ $locdet->Bedrooms }} Bedrooms</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M23.001 12h-1.513C21.805 11.6 22 11.1 22 10.5C22 9.1 20.9 8 19.5 8S17 9.1 17 10.5 c0 0.6 0.2 1.1 0.5 1.5H2.999c0-0.001 0-0.002 0-0.002V2.983V2.98c0.084-0.169-0.083-0.979 1-0.981h0.006 C4.008 2 4.3 2 4.5 2.104L4.292 2.292c-0.39 0.392-0.39 1 0 1.415c0.391 0.4 1 0.4 1.4 0l2-1.999 c0.39-0.391 0.39-1.025 0-1.415c-0.391-0.391-1.023-0.391-1.415 0L5.866 0.72C5.775 0.6 5.7 0.5 5.5 0.4 C4.776 0 4.1 0 4 0H3.984v0.001C1.195 0 1 2.7 1 2.98v0.019v0.032v8.967c0 0 0 0 0 0.002H0.999 C0.447 12 0 12.4 0 12.999S0.447 14 1 14H1v2.001c0.001 2.6 1.7 4.8 4 5.649V23c0 0.6 0.4 1 1 1s1-0.447 1-1v-1h10v1 c0 0.6 0.4 1 1 1s1-0.447 1-1v-1.102c2.745-0.533 3.996-3.222 4-5.897V14h0.001C23.554 14 24 13.6 24 13 S23.554 12 23 12z M21.001 16.001c-0.091 2.539-0.927 3.97-3.001 3.997H7c-2.208-0.004-3.996-1.79-4-3.997V14h15.173 c-0.379 0.484-0.813 0.934-1.174 1.003c-0.54 0.104-0.999 0.446-0.999 1c0 0.6 0.4 1 1 1 c2.159-0.188 3.188-2.006 3.639-2.999h0.363V16.001z"/>
<rect class="rect" x="6.6" y="4.1" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.6319 3.2336)" width="1" height="1.4"/>
<rect class="rect" x="9.4" y="2.4" transform="matrix(0.7066 0.7076 -0.7076 0.7066 4.9969 -6.342)" width="1.4" height="1"/>
<rect class="rect" x="9.4" y="6.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 7.8179 -5.167)" width="1.4" height="1"/>
<rect class="rect" x="12.4" y="4.4" transform="matrix(0.7069 0.7073 -0.7073 0.7069 7.2858 -7.8754)" width="1.4" height="1"/>
<rect class="rect" x="13.4" y="7.4" transform="matrix(-0.7064 -0.7078 0.7078 -0.7064 18.5823 23.4137)" width="1.4" height="1"/>
</svg>
{{ $locdet->Bathrooms }} Bathrooms</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M23.958 0.885c-0.175-0.64-0.835-1.016-1.475-0.842l-11 3.001c-0.64 0.173-1.016 0.833-0.842 1.5 c0.175 0.6 0.8 1 1.5 0.842L16 4.299V6.2h-0.001H13c-2.867 0-4.892 1.792-5.664 2.891L5.93 11.2H5.024 c-0.588-0.029-2.517-0.02-3.851 1.221C0.405 13.1 0 14.1 0 15.201V18.2v2H2h2.02C4.126 22.3 5.9 24 8 24 c2.136 0 3.873-1.688 3.979-3.801H16V24h2V3.754l5.116-1.396C23.756 2.2 24.1 1.5 24 0.885z M8 22 c-1.104 0-2-0.896-2-2.001s0.896-2 2-2S10 18.9 10 20S9.105 22 8 22.001z M11.553 18.2C10.891 16.9 9.6 16 8 16 c-1.556 0-2.892 0.901-3.553 2.201H2v-2.999c0-0.599 0.218-1.019 0.537-1.315C3.398 13.1 5 13.2 5 13.2h2L9 10.2 c0 0 1.407-1.999 4-1.999h2.999H16v10H11.553z"/>
</svg>
{{ $locdet->Garages }} Garages</span>    </div>

    <div class="content clearfix">
        <div style="display: none;"
    class="kk-star-ratings kksr-valign-top kksr-align-right kksr-disabled"
    data-id="92775"
    data-slug="">
    <div class="kksr-stars">
    <div class="kksr-stars-inactive">
            <div class="kksr-star" data-star="1">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star" data-star="2">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star" data-star="3">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star" data-star="4">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star" data-star="5">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
    </div>
    <div class="kksr-stars-active" style="width: 62px;">
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 12px; height: 12px;"></div>
        </div>
    </div>
</div>
    <div class="kksr-legend">
            <strong class="kksr-score">4.5</strong>
        <span class="kksr-muted">/</span>
        <strong>5</strong>
        <span class="kksr-muted">(</span>
        <strong class="kksr-count">58</strong>
        <span class="kksr-muted">
            votes        </span>
        <span class="kksr-muted">)</span>
    </div>
</div>
            @endforeach

<form role="form" action="{{ action('TestController@store') }}" method="post">
 @csrf


    <div class="form-group">
      <label> Date Start Location
      <input class="form-control" type="date" name="dateDeb" /></label>
    </div>

<div class="form-group">
      <label>Date Fin Location
      <input class="form-control" type="date" name="datefin" /></label>
    </div>
<button><span class="glyphicon glyphicon-heart">fav</span></button>
 @if(Auth::user())
<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#achat">Demande</button>


<a href="{{action('TestController@index')}}" class="btn btn-default">Back</a>
 @else
 <li style="padding-bottom: 15px; padding-top: 15px;">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                   Demande
                   </button>
                   <!-- Modal -->
                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Login</h4>
                         </div>
                         <div class="modal-body">
                           <!--mon code-->

                                       @include('auth.login')
                           <!---------------------------->
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
                                 <!--<a href="#"><i class="fa fa-user-plus"></i></a>-->
                                  </li>

                      @endif
                       <!-- Modal -->
                   <div class="modal fade" id="achat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Demande</h4>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
              </div>


                       </div>



                  </div>
                </div>
              </div>


 </form>
    </div>


    </article>








    <div class="map-wrap clearfix">
       <!--  <span class="map-label">Property Map</span>  -->               <div id="property_map"></div>


    </div>

                    </div>

            </div><!-- End Main Content -->





        </div> <!-- End span9 -->





    </div><!-- End contents row -->
</div><!-- End Content -->



		<div class="container page-carousel">
			<div class="row">
				<div class="span12">
					<section class="brands-carousel  clearfix">
													<h3><span>Partners</span></h3>
														<ul class="brands-carousel-list clearfix">
															<li>
									<a target="_blank" href="http://www.remax.com.lb/" title="RE/MAX Lebanon">
										<img width="145" height="46" src="{{ asset('images/uploads/2017/08/Remax-Lebanon-1-150x100.png')}}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="RE/MAX Lebanon" title="RE/MAX Lebanon" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.vivadoo.com/" title="Vivadoo.com">
										<img width="145" height="25" src="{{ asset('images/uploads/2017/08/Vivadoo-150x100.png')}}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Vivadoo.com" title="Vivadoo.com" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.lebaneseinfo.com/" title="Lebanese info">
										<img width="150" height="100" src="{{ asset('images/uploads/2017/08/LebaneseInfo-150x100.png')}}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Lebanese info" title="Lebanese info" />									</a>
								</li>
																<li>
									<a target="_blank" href="http://www.thalesit.ch/" title="Thales IT">
										<img width="150" height="100" src="{{ asset('images/uploads/2017/08/THALES-IT-150x100.png')}}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="Thales IT" title="Thales IT" />									</a>
								</li>
															</ul>
												</section>
				</div>
			</div>
		</div>
 <button onclick="actOnChirp(event);" data-chirp-id="{{ $locales->id }}">Like</button>
                    <span id="likes-count-{{ $locales->id }}"></span>
@endsection
@section('js')
    <script>
        function markAsSolution(threadId, solutionId,elem) {
            var csrfToken='{{csrf_token()}}';
            $.post('{{route('markAsSolution')}}', {solutionId: solutionId, threadId: threadId,_token:csrfToken}, function (data) {
                $(elem).text('Solution');
            });
        }

        function likeIt(commentId,elem){
            var csrfToken='{{csrf_token()}}';
            var likesCount=parseInt($('#'+commentId+"-count").text());
            $.post('{{route('toggleLike')}}', {commentId: commentId,_token:csrfToken}, function (data) {
                console.log(data);
               if(data.message==='liked'){
                   $(elem).addClass('liked');
                   $('#'+commentId+"-count").text(likesCount+1);
//                   $(elem).css({color:'red'});
               }else{
//                   $(elem).css({color:'black'});
                   $('#'+commentId+"-count").text(likesCount-1);
                   $(elem).removeClass('liked');
               }
            });

        }


    </script>
