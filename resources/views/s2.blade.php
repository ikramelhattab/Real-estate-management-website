
@extends('layouts.app')

@section('content')
<div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('themes/realhomes/assets/classic/images/banner.jpg'); background-size: cover; ">
        <div class="container">
        <div class="wrap clearfix">
            <h1 class="page-title"><span>S2</span></h1>
                    </div>
    </div>
    </div><!-- End Page Head -->

<div class="container contents listing-grid-layout">
    <div class="row">
        <div class="span9 main-wrap">

            <!-- Main Content -->
            <div class="main">

                <section class="listing-layout ">


<div class="view-type clearfix">
        <a class="list active" href="indexd1fd.html?view=list">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<rect class="boxes" x="9" y="3" width="13" height="4"/>
<rect class="boxes" x="9" y="10" width="13" height="4"/>
<rect class="boxes" x="9" y="17" width="13" height="4"/>
<rect class="boxes" x="2" y="3" width="4" height="4"/>
<rect class="boxes" x="2" y="10" width="4" height="4"/>
<rect class="boxes" x="2" y="17" width="4" height="4"/>
<path fill="none" d="M0,0h24v24H0V0z"/>
</svg>    </a>
    <a class="grid " href="indexb92a.html?view=grid">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<rect class="boxes" x="10" y="3" width="4" height="4"/>
<rect class="boxes" x="10" y="10" width="4" height="4"/>
<rect class="boxes" x="10" y="17" width="4" height="4"/>
<rect class="boxes" x="17" y="3" width="4" height="4"/>
<rect class="boxes" x="17" y="10" width="4" height="4"/>
<rect class="boxes" x="17" y="17" width="4" height="4"/>
<rect class="boxes" x="3" y="3" width="4" height="4"/>
<rect class="boxes" x="3" y="10" width="4" height="4"/>
<rect class="boxes" x="3" y="17" width="4" height="4"/>
<path fill="none" d="M0,0h24v24H0V0z"/>
</svg>
    </a>
</div>

                    <div class="list-container clearfix">

<div class="sort-controls">
    <strong>Sort By:</strong>
    &nbsp;
        <select name="sort-properties" id="sort-properties">
        <option value="default">Default Order</option>
        <option value="price-asc" >Price Low to High</option>
        <option value="price-desc" >Price High to Low</option>
        <option value="date-asc" >Date Old to New</option>
        <option value="date-desc" selected>Date New to Old</option>
    </select>
</div>

<div class="compare-properties clear">

	<h4>Compare Properties</h4>

	<div class="compare-carousel clear">


	</div>

	<a href="../../compare-properties-sale-rent-online/index.html" class="compare-submit real-btn btn">Compare</a>
	<!-- .compare-submit -->

</div>
<!-- .compare-properties -->
@foreach($categ as $villa)
@if ( $villa->slug == "s2")
<div class="property-item-wrapper">
    <article class="property-item clearfix">

        <h4><a href="{{ url('details/'.$villa->id) }}"> {{ $villa->name_loc }} </a></h4>

        <figure>
            <a href="{{ url('details/'.$villa->id) }}">
                <img width="244" height="163" src="../../wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-244x163.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset="https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-244x163.jpg 244w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-300x199.jpg 300w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-1024x680.jpg 1024w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-768x510.jpg 768w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-1536x1020.jpg 1536w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-2048x1360.jpg 2048w, https://www.remax-tripoli.com/wp-content/uploads/properties/08/e9dc924f238fa6cc29465942875fe8f0/8968df8afe158b8f7694387d29b4a512-150x100.jpg 150w" sizes="(max-width: 244px) 100vw, 244px" />            </a>

            <figcaption class="for-sale">***</figcaption>
        </figure>

        <div class="detail">
            <h5 class="price">
                {{ $villa->prix }} <small> </small>            </h5>
            <p>{{ $villa->description }}</p>
            <a class="more-details" href="{{ url('details/'.$villa->id) }}">More Details <i class="fa fa-caret-right"></i></a>
        </div>

        <div class="property-meta">
            <meta name='PROPERTY_ID' VALUE='10009-127' /><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M14 7.001H2.999C1.342 7 0 8.3 0 10v11c0 1.7 1.3 3 3 3H14c1.656 0 3-1.342 3-3V10 C17 8.3 15.7 7 14 7.001z M14.998 21c0 0.551-0.447 1-0.998 1.002H2.999C2.448 22 2 21.6 2 21V10 c0.001-0.551 0.449-0.999 1-0.999H14c0.551 0 1 0.4 1 0.999V21z"/>
<path class="path" d="M14.266 0.293c-0.395-0.391-1.034-0.391-1.429 0c-0.395 0.39-0.395 1 0 1.415L13.132 2H3.869l0.295-0.292 c0.395-0.391 0.395-1.025 0-1.415c-0.394-0.391-1.034-0.391-1.428 0L0 3l2.736 2.707c0.394 0.4 1 0.4 1.4 0 c0.395-0.391 0.395-1.023 0-1.414L3.869 4.001h9.263l-0.295 0.292c-0.395 0.392-0.395 1 0 1.414s1.034 0.4 1.4 0L17 3 L14.266 0.293z"/>
<path class="path" d="M18.293 9.734c-0.391 0.395-0.391 1 0 1.429s1.023 0.4 1.4 0L20 10.868v9.263l-0.292-0.295 c-0.392-0.395-1.024-0.395-1.415 0s-0.391 1 0 1.428L21 24l2.707-2.736c0.391-0.394 0.391-1.033 0-1.428s-1.023-0.395-1.414 0 l-0.292 0.295v-9.263l0.292 0.295c0.392 0.4 1 0.4 1.4 0s0.391-1.034 0-1.429L21 7L18.293 9.734z"/>
</svg>
 {{ $villa->surface }} m</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<circle class="circle" cx="5" cy="8.3" r="2.2"/>
<path class="path" d="M0 22.999C0 23.6 0.4 24 1 24S2 23.6 2 22.999V18H2h20h0.001v4.999c0 0.6 0.4 1 1 1 C23.552 24 24 23.6 24 22.999V10C24 9.4 23.6 9 23 9C22.447 9 22 9.4 22 10v1H22h-0.999V10.5 C20.999 8 20 6 17.5 6H11C9.769 6.1 8.2 6.3 8 8v3H2H2V9C2 8.4 1.6 8 1 8S0 8.4 0 9V22.999z M10.021 8.2 C10.19 8.1 10.6 8 11 8h5.5c1.382 0 2.496-0.214 2.5 2.501v0.499h-9L10.021 8.174z M22 16H2v-2.999h20V16z"/>
</svg>
 {{ $villa->Bedrooms }} Bedrooms</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M23.001 12h-1.513C21.805 11.6 22 11.1 22 10.5C22 9.1 20.9 8 19.5 8S17 9.1 17 10.5 c0 0.6 0.2 1.1 0.5 1.5H2.999c0-0.001 0-0.002 0-0.002V2.983V2.98c0.084-0.169-0.083-0.979 1-0.981h0.006 C4.008 2 4.3 2 4.5 2.104L4.292 2.292c-0.39 0.392-0.39 1 0 1.415c0.391 0.4 1 0.4 1.4 0l2-1.999 c0.39-0.391 0.39-1.025 0-1.415c-0.391-0.391-1.023-0.391-1.415 0L5.866 0.72C5.775 0.6 5.7 0.5 5.5 0.4 C4.776 0 4.1 0 4 0H3.984v0.001C1.195 0 1 2.7 1 2.98v0.019v0.032v8.967c0 0 0 0 0 0.002H0.999 C0.447 12 0 12.4 0 12.999S0.447 14 1 14H1v2.001c0.001 2.6 1.7 4.8 4 5.649V23c0 0.6 0.4 1 1 1s1-0.447 1-1v-1h10v1 c0 0.6 0.4 1 1 1s1-0.447 1-1v-1.102c2.745-0.533 3.996-3.222 4-5.897V14h0.001C23.554 14 24 13.6 24 13 S23.554 12 23 12z M21.001 16.001c-0.091 2.539-0.927 3.97-3.001 3.997H7c-2.208-0.004-3.996-1.79-4-3.997V14h15.173 c-0.379 0.484-0.813 0.934-1.174 1.003c-0.54 0.104-0.999 0.446-0.999 1c0 0.6 0.4 1 1 1 c2.159-0.188 3.188-2.006 3.639-2.999h0.363V16.001z"/>
<rect class="rect" x="6.6" y="4.1" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.6319 3.2336)" width="1" height="1.4"/>
<rect class="rect" x="9.4" y="2.4" transform="matrix(0.7066 0.7076 -0.7076 0.7066 4.9969 -6.342)" width="1.4" height="1"/>
<rect class="rect" x="9.4" y="6.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 7.8179 -5.167)" width="1.4" height="1"/>
<rect class="rect" x="12.4" y="4.4" transform="matrix(0.7069 0.7073 -0.7073 0.7069 7.2858 -7.8754)" width="1.4" height="1"/>
<rect class="rect" x="13.4" y="7.4" transform="matrix(-0.7064 -0.7078 0.7078 -0.7064 18.5823 23.4137)" width="1.4" height="1"/>
</svg>
 {{ $villa->Bathrooms }} Bathrooms</span><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M23.958 0.885c-0.175-0.64-0.835-1.016-1.475-0.842l-11 3.001c-0.64 0.173-1.016 0.833-0.842 1.5 c0.175 0.6 0.8 1 1.5 0.842L16 4.299V6.2h-0.001H13c-2.867 0-4.892 1.792-5.664 2.891L5.93 11.2H5.024 c-0.588-0.029-2.517-0.02-3.851 1.221C0.405 13.1 0 14.1 0 15.201V18.2v2H2h2.02C4.126 22.3 5.9 24 8 24 c2.136 0 3.873-1.688 3.979-3.801H16V24h2V3.754l5.116-1.396C23.756 2.2 24.1 1.5 24 0.885z M8 22 c-1.104 0-2-0.896-2-2.001s0.896-2 2-2S10 18.9 10 20S9.105 22 8 22.001z M11.553 18.2C10.891 16.9 9.6 16 8 16 c-1.556 0-2.892 0.901-3.553 2.201H2v-2.999c0-0.599 0.218-1.019 0.537-1.315C3.398 13.1 5 13.2 5 13.2h2L9 10.2 c0 0 1.407-1.999 4-1.999h2.999H16v10H11.553z"/>
</svg>
 {{ $villa->Garages }} Garages</span><span class="add-to-compare-span">
            <div class="compare_output">
            <i class="fa fa-plus-circle dim"></i>
            <span class="compare_target dim"></span>
        </div>
        <a class="add-to-compare" data-property-id="94293" href="../../wp-admin/admin-ajax.html">
            <i class="fa fa-plus-circle"></i>&nbsp;Add to Compare        </a>
        </span>
        </div>

    </article>

</div>
@endif
        @endforeach





                    </div>

                    <div class='pagination'><a href='index.html' class='real-btn current' >{{ $categ->links() }}</a></div>
                </section>

            </div><!-- End Main Content -->

        </div> <!-- End span9 -->


    </div><!-- End contents row -->
</div>

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
@endsection
