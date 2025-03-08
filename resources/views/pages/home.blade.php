@extends('layouts.homepage')

@section('mainTitle')
  <title>Services | Pleasanton Real Estate | Julie Hansen Partnership</title>
@endsection

@section('mainStyles')
  <link rel="stylesheet" href="{{ URL::asset('css/pages/homepage.css') }}">
  <!-- SLICK -->

@endsection


@section('mainContent')

<style type="text/css">
  .hover01  img{
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
  

}
.hover01:hover img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);

}

.hover01:hover p{
text-decoration: underline;

}
#button-map {
  background-color: transparent;
  border: none;
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  margin-left: -6px;
  line-height: 40px;
}

#button-map.inactive{
  color: #fff;

}
#button-map.active{
  color: #b64243;
}

.front .banner--node-container .banner--node-content .field--name-field-subtext {
  font-size: 50px;
  line-height: 45px;
}

.block .word-strong {
  font-family: 'Nunito Sans', sans-serif !important;
  font-weight: 800;
}

.views-field-field-logos img {
  -webkit-filter: grayscale(100%);
  filter: none;
}

.views-field-field-logos .field-content .img-wrap {
  width: 23.66%;
  margin-bottom: 50px;
  margin: 10px 73px;
}

.block-views-blockbranch-block-domestic-branch .view-map-wrapper, .block-views-blockbranch-block-branch-map-asp .view-map-wrapper {
  background: none!important;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  flex-direction: row-reverse;
  flex-wrap: wrap;
  max-width: 922px;
  margin: 0 auto;
}

.block-views-blockbranch-block-domestic-branch .container, .block-views-blockbranch-block-branch-map-asp .container {
  max-width: 1200px;
  margin-top: -152px;
  margin-bottom: 64px;
}

.views-field-field-logos .field-content .img-wrap img {
  max-width: 113%;
}


/*image*/
.grid-container {
  border: solid 1px #eeeeee;
  padding: 0vw;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 15vw; /* smaller height for landscape look */
  grid-gap: 0.5vw;
}

.griditem {
  background-size: cover;
  background-position: center;
  padding: 0vw;
  font-size: 1.5vw; /* text overlay*/
  color: darkorange;
  box-sizing: border-box;
}
.griditem:hover {
/*  cursor: pointer;*/
  filter: brightness(70%) grayscale(100%);
}


/*full image modal */
.modal {
  z-index: 3;
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #fff; /* set window back ground color */
}
.modal-content {
  display: block;
}
.modal-btn {
  color: red;
  padding: 4px 8px;
  position: absolute;
  right: 10vw;
  top: 1vh;
}
.modal-btn:hover {
  background-color: red;
  color: white;
  cursor: pointer;
}
.animate-zoom {
  animation: animatezoom 0.8s;
}
@keyframes animatezoom {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}
.topright {
  position: relative;
  right: 0;
  top: 0;
}
.mod-img {
  /* rsponsive display full image within in view area */
  object-fit: scale-down;
  display: block;
  max-height: 99vh;
  max-width: 99vw;
  margin: 0.5vh auto;
}
mod-img:hover {
}
@media (max-width: 768px) {
  .grid-container {
    grid-auto-rows: 25vw;
  }
}

#block-services .block h2 {
  font-size: 36px;
  line-height: 44px;
  text-align: left;
}

#block-services .parag-text .field.field-name-field-content {
  text-align: justify;
  width: 87%;
}

.front #wwu_banner:before {
  content: "";
  background-image: url('');
  background-repeat: no-repeat;
  background-size: contain;
  background-position: bottom center;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  height: 245px;
  z-index: 10;
}

.front .banner--node-container:before {
  content: "";
  background-image: url('/storage/images/overlay_curve.png');
  background-repeat: no-repeat;
  background-size: contain;
  background-position: bottom center;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  height: 245px;
  z-index: 10;
  }



</style>

<!-- SERVICES -->
<section class="top-full-row container-fluid">
  <section class="services services-top-full-row">
    <div id="block-mainslideshow" class="block block-entityblock">
      <div class="content">
        <article role="article" about="/node/2" class="node node--type-banner node--view-mode-full clearfix">
          <div class="node__content clearfix">
            <div class="banner--node-container">
              <div class="banner--node-image">
                <div class="field field--name-field-images field--type-image field--label-hidden field__items">
                  <div class="field__item" style="width: 100%; display: inline-block;">
                    <div class="img-wrap">
                      <img src="{{ URL::asset('/storage/images/bg_banner/image_2.jpg') }}" alt=""  class="" style="width: 100%; height: auto; object-fit: cover; object-position: top;"/> 
                    </div>
                  </div>
                  </div>
                </div>


              <div class="banner--node-content" >
                <div class="clearfix text-formatted field field--name-field-subtext field--type-text-long field--label-hidden field__item"style="margin-top: -15%;">
                  <p>
                    Services
                  </p>

                </div>

                <span class="separator"></span>
 
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-search"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="Search by Address or Area">
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
</section>


<br><br><br>

<div class="clearfix"></div>
<div class="clearfix"></div>

<!-- COMPREHENSIVE MARKETING PLAN -->
<section class="bottom-full-row container-fluid">
  <section class="marketing-plan marketing-plan-bottom-full-row" style="">
    <!-- Comprehensive Marketing Plan -->
    <div id="block-views-marketing-plan" class="views-element-container strong-last-word block-global-partners fadeEl block block-views block-views-blockmarketing-plan-block-marketing-plan" >
    <div id="block-marketn" class="strong-last-two-word fadeEl">    

      <h2 style="color: #b64243;">Comprehensive <span class="word-strong" id="CMP" style="font-family: 'Nunito Sans', sans-serif!important; font-weight: 800;">Marketing Plan</span></h2>

      <div class="content">
        <div>
          <div class="view view-client-and-partners view-id-client_and_partners view-display-id-block_clients_and_partners">
            <div class="view-content">
              <div class="views-row">
                <div class="views-field views-field-field-logos">
                  <div class="field-content">
                   
                    <div class="img-wrap">
                      <img src="{{ URL::asset('storage/images/comprehensive/image_3.png') }}" alt=""/>
                    </div>
                    <div class="img-wrap" style="margin-top: 56px;">
                      <img src="{{ URL::asset('storage/images/comprehensive/image_4.png') }}" alt="" style="width: 119%; max-width: 1000px;" />
                    </div>
                   
                  </div>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>

<!-- COMPREHENSIVE IMAGE -->
<section class="bottom-full-row container-fluid">
  <section class="comprehensive-img comprehensive-img-bottom-full-row" style="">
    <div id="block-views-domestic-branch" class="views-element-container strong-last-word fadeEl block block-views-blockbranch-block-domestic-branch" >
      <div class="content">
        <div>
          <div class="_block-bg-container" style="background-image: url(storage/images/comprehensive/interior-of-office-building-325229.jpg);"></div>

          <div class="container">
            <div class="view view-branch view-id-branch view-display-id-block_domestic_branch">
              <span class="onp-bg hidden">
                <div class="field field--name-field-basic-banner field--type-image field--label-hidden field__item">storage/images/comprehensive/interior-of-office-building-325229.jpg</div>
              </span>
             
              <div class="custom-block-text text-center">
                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                </div>
              </div>

              <div class="view-map-wrapper fade-El" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="view-header map-image">
                  <div class="map-image-wrapper fadeEl">
                    <div class="img-wrap" style="margin-left: 30px;">
                      <img  width="120" height="120" src="{{ URL::asset('/storage/images/comprehensive/image_5.jpg') }}" alt="">                                  
                    </div>              
                  </div>
                </div>
              <div class="view-map-wrapper fade-El" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>


<!-- VIRTUAL TOOL AND PHOTOGRAPHY -->
<section class="bottom-full-row container-fluid">
  <section class="virtual virtual-bottom-full-row" style="margin-top: -12%;">
    <div id="block-views-clients-and-partners" class="views-element-container strong-last-word block-global-partners fadeEl block block-views block-views-blockclient-and-partners-block-clients-and-partners" >
    <div id="block-services" class="strong-last-two-word fadeEl">    
      <div class="content">
        <div>
          <div class="view view-client-and-partners view-id-client_and_partners view-display-id-block_clients_and_partners">
            <div class="view-content">
              <div class="views-row">
                <div class="views-field views-field-field-logos">
                  <div class="field-content">
                   
                    <div class="img-wrap">
                      <img src="{{ URL::asset('storage/images/comprehensive/image_6.png') }}" alt=""/>
                    </div>
                    <div class="img-wrap" style="margin-top: auto;width: 34%;">
                      <img src="{{ URL::asset('storage/images/comprehensive/image_7.png') }}" alt=""/>
                    </div>
                   
                  </div>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>

<!-- IMAGES -->
<section class="bottom-full-row container-fluid">
  <section class="comprehensive-img comprehensive-img-bottom-full-row">
    <div id="block-views-clients-and-partners" class="views-element-container strong-last-word block-global-partners fadeEl block block-views block-views-blockclient-and-partners-block-clients-and-partners" >
      <div id="grid" class="grid-container" style="margin-left: 3">
        <div id="image1" class="griditem image1">
          <img src="{{ URL::asset('storage/images/comprehensive/image_12.png') }}" alt=""/>
        </div>

        <div id="image2" class="griditem image2">
          <img src="{{ URL::asset('storage/images/comprehensive/image_8.jpg') }}" alt=""/>
        </div>

        <div id="image3" class="griditem image3">
          <img src="{{ URL::asset('storage/images/comprehensive/image_13.png') }}" alt=""/>
        </div>

        <div id="image4" class="griditem image4">
          <img src="{{ URL::asset('storage/images/comprehensive/image_9.jpg') }}" alt=""/>
        </div>

        <div id="image5" class="griditem image5">
          <img src="{{ URL::asset('storage/images/comprehensive/image_10.jpg') }}" alt=""/>
        </div>

        <div id="image6" class="griditem image6">
          <img src="{{ URL::asset('storage/images/comprehensive/image_14.png') }}" alt=""/>
        </div>

        <div id="image7" class="griditem image7">
          <img src="{{ URL::asset('storage/images/comprehensive/image_11.jpg') }}" alt=""/>
        </div>

        <div id="image8" class="griditem image8">
          <img src="{{ URL::asset('storage/images/comprehensive/image_15.png') }}" alt=""/>
        </div>
      </div>
    </div>
  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>

<!-- The Selling Process -->
<section class="bottom-full-row container-fluid">
  <section class="sellingprocess sellingprocess-bottom-full-row">
    <div id="block-views-our-solutions" class="strong-last-word slide-up fadeEl block block-views-our-solutions">
      <br>
      <h2>The Selling <span class="word-strong">Process</span></h2>
      <div class="content">
        <div>
          <div class="view view-our-solutions view-id-solutions" style="background-image: url(/storage/images/sellingprocess/selling_img.png);background-size: cover;background-position: center;">
            <div class="view-content" align="center">
              <div class="block-solution-item">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num1.png') }}" alt="" typeof="Image">
                        </div>
                      </div><br>
                      <span class="our-solutions-wrapper-title">Initial Consultation & Planning</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num2.png') }}" alt="" typeof="Image">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Devise & Execute Marketing Plan</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num3.png') }}" alt="" typeof="Image">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Review Offers & Reach Agreement with Buyer</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="50" height="50" src="{{ URL::asset('/storage/images/sellingprocess/num4.png') }}" alt="" typeof="Image" style="width: 10%;">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Complete Transaction Process</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num5.png') }}" alt="" typeof="Image">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">After - Sale Service</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>


<!-- The Buying Process -->
<section class="bottom-full-row container-fluid">
  <section class="buyingprocess buyingprocess-bottom-full-row">
    <div id="block-views-our-solutions" class="strong-last-word slide-up fadeEl block block-views-our-solutions">
      <br>
      <h2>The Buying <span class="word-strong">Process</span></h2>
      <div class="content">
        <div>
          <div class="view view-our-solutions view-id-solutions" style="background-image: url(/storage/images/sellingprocess/selling_img1.png);background-size: cover;background-position: center;">
            <div class="view-content" align="center">
              <div class="block-solution-item" id="buyingprocess">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num1.png') }}" alt="" typeof="Image">
                        </div>
                      </div><br>
                      <span class="our-solutions-wrapper-title">Initial Consultation & Planning</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item" id="buyingprocess">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num2.png') }}" alt="" typeof="Image">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Search for a Home & Get Pre-Approved</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item" id="buyingprocess">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="120" height="120" src="{{ URL::asset('/storage/images/sellingprocess/num3.png') }}" alt="" typeof="Image">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Submit an Offer</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>

              <div class="block-solution-item" id="buyingprocess">
                <div class="views-field views-field-title">
                  <span class="field-content">
                    <div class="our-solutions-wrapper">
                      <div class="our-solutions-wrapper-icon">
                        <div class="img-wrap">
                          <img width="50" height="50" src="{{ URL::asset('/storage/images/sellingprocess/num4.png') }}" alt="" typeof="Image" style="width: 10%;">
                        </div>
                      </div>
                      <span class="our-solutions-wrapper-title">Complete Settlement Process</span>  
                    </div>
                  </span>
                </div>
                <div class="views-field views-field-edit-node edit-link">
                  <span class="field-content"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>


<!-- Over 33 Years of Real Estate Success -->
<section class="bottom-full-row container-fluid">
  <section class="realestate realestate-bottom-full-row" style="">
    <!-- Years of Real Estate Success -->
    <div id="block-services" class="strong-last-two-word fadeEl">
      <div class="content">
        <div class="field field-name-field-layout field-type-entity-reference-revisions">
          <div class="field_item">
            <div class="paragraph">
              <div class="row">
                <div class="col-lg-6">
                  <img src="{{ URL::asset('/storage/images/buyingprocess/image_16.png') }}" style="width: 100%; height: auto; padding: 15px;">
                </div>
                <div class="col-lg-6 block parag-text" style="padding-top: 30px;">
                  <div class="clearfix text-formatted field">
                    <h2 style="color: #b64243;margin-left: 33px;">Over 33 Years of <span class="word-strong" style="font-family: 'Nunito Sans', sans-serif!important; font-weight: 800;">Real Estate Success</span></h2>
                  </div>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
                    <p style="margin-left: 33px;">
                      We provide every one of our clients with a level of service they won’t find anywhere else. We give them what they need, often before they know they need it. In real estate, almost everything can be negotiated. When you choose Hansen Partners It is experience is 100% nonnegotiable.And it’s an experience like no other.
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 block parag-text" style="padding-top: 30px;">
                  <div class="clearfix text-formatted field">
                    <h2 style="color: #b64243; margin-left: 33px;">We Want To Create An <span class="word-strong" style="font-family: 'Nunito Sans', sans-serif!important; font-weight: 800;">Unforgettable Experience For You...</span></h2>
                  </div>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
                    <p style="margin-left: 33px;">
                      We combine data gained from your home’s Comparative Market Analysis with local market research to create a marketing plan designed to help you meet your selling goals. Your home’s carefully designed plan will include a range of online, print, and other marketing tools targeted to the best-qualified pool of buyers. Successfully marketing a home in today’s real estate environment requires a firm with experience and flexibility. Hansen Partners provides both.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <img src="{{ URL::asset('/storage/images/buyingprocess/image_17.jpg') }}" style="width: 100%; height: auto; padding: 15px;">
                </div>

                <div class="row">
                <div class="col-lg-6">
                  <img src="{{ URL::asset('/storage/images/buyingprocess/image_18.jpg') }}" style="width: 100%; height: auto; padding: 15px;">
                </div>
                <div class="col-lg-6 block parag-text" style="padding-top: 30px;">
                  <div class="clearfix text-formatted field">
                    <h2 style="color: #b64243;margin-left: 33px;">The Hansen Partners <span class="word-strong" style="font-family: 'Nunito Sans', sans-serif!important; font-weight: 800;">Communications Tablet</span></h2>
                  </div>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
                    <p style="margin-left: 33px;">
                      We have created this as a wonderful tool so that we can communicate with you daily, provide you with updates on what is happening with your home. We are available at the with a click of your tablet.
                      <ul style="margin-left: 33px;">
                        <li>Review all documents and sign in the comfort of your home or anywhere.</li>
                        <li>Stay up to date on all marketing activities, review materials, photos, etc. in real time.</li>
                        <li>Meet with us face to face on our Gotomeeting.com platform to go over and discuss the events of the week.</li>
                        <li>You have your own email assigned just for you and your common space to quickly write a note, or quickly send a video message to us for fast communication using our Bomb bomb video messaging system.</li>
                      </ul>
                      <p style="margin-left: 33px;">We believe that transparency and guiding you and your family through the process is key to having the best experience.  During these uncertain times. It is a good feeling to know you have some one with a proven track record you can count on.  We will be here to handle your needs during the Real Estate process.  We think of it before a need even arises. Because, that is just what we do.  Who you work with does matter! </p>
                    </p>
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="clearfix"></div>
    <div class="clearfix"></div>
  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div><br><br>

<!-- We Market Your Home to The World -->
<section class="bottom-full-row container-fluid">
  <section class="wemarket wemarket-bottom-full-row" style="">
    <div id="block-views-our-services" class="strong-last-word fadeEl block block-views-our-services" >
      <h2 style="margin-left: 33px;">We Market Your Home <span class="word-strong">to The World</span></h2>

      <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
        <h1 style="text-align: center; font-size: 20px; font-weight: bold;"> Our Online Marketing Strategy </h1>
        <p style="text-align: center; margin-left: 33px;">
          The Bay Area remains one of the world's most sought-after regions to live in, and when looking to sell, it is vital that your home be marketed online to audiences locally, nationally, and internationally.
        </p>
      </div><br>

      <div class="content" >
        <div>
          <div class="view view-services view-id-services">
            <div class="view-content" align="center" >
              <!-- LOCAL EXPOSURE -->
              <div class="services-item views-row" >
                <div class="views-field views-field-edit-taxonomy-term edit-link" >
                  <span class="field-content"></span>
                </div>
                <div class="services-item-container" id="ITservicehover">
                 
                  <div class="views-field views-field-name">             
                    <span class="field-content">

                      <div class="field-content" >
                        <div class="img-wrap">
                          <img  width="120" height="120" src="{{ URL::asset('/storage/images/market/managed%20services_0.svg') }}" alt="">
                        </div>
                      </div>

                      <a href="" hreflang="en">Local Exposure</a>
                    </span>
                  </div>
                  <div class="views-field views-field-block-description">
                    <div class="field-content">
                      <p id="textit" class="text-align-center">Through our partnership with Nextdoor, the private online social network now used in over 80% of U.S. neighborhoods and virtually all Bay Area neighborhoods, we make sure your home receives targeted local exposure. When you list your home with Hansen Partners it will automatically appear on Nextdoor in your neighborhood.</p>
                    </div>
                  </div>
                  <div class="views-field views-field-nothing">
                    <span class="field-content">
                      <div class="services-body-arrow">
                        <a href="">
                          <img  src="{{ URL::asset('/storage/images/market/right-long-arrow.svg') }}">
                        </a>
                      </div>
                    </span>            
                  </div>
                </div>              
              </div>

              <!-- National Exposure -->
              <div class="services-item views-row" >
                <div class="views-field views-field-edit-taxonomy-term edit-link" >
                  <span class="field-content"></span>
                </div>
                <div class="services-item-container" id="ITservicehover">
                 
                  <div class="views-field views-field-name">             
                    <span class="field-content">

                      <div class="field-content" >
                        <div class="img-wrap">
                          <img  width="120" height="120" src="{{ URL::asset('/storage/images/market/managed%20services_0.svg') }}" alt="">
                        </div>
                      </div>

                      <a href="" hreflang="en">National Exposure</a>
                    </span>
                  </div>
                  <div class="views-field views-field-block-description">
                    <div class="field-content">
                      <p id="textit" class="text-align-center">We secure strategic positioning and enhancement on Realtor.com, Trulia, and Zillow, driving more consumers to your home and increasing exposure. We  will receive every inquiry about your property directly.</p>
                    </div>
                  </div>
                  <div class="views-field views-field-nothing">
                    <span class="field-content">
                      <div class="services-body-arrow">
                        <a href="">
                          <img  src="{{ URL::asset('/storage/images/market/right-long-arrow.svg') }}">
                        </a>
                      </div>
                    </span>            
                  </div>
                </div>              
              </div>

              <!-- International Exposure -->
              <div class="services-item views-row" >
                <div class="views-field views-field-edit-taxonomy-term edit-link" >
                  <span class="field-content"></span>
                </div>
                <div class="services-item-container" id="ITservicehover">
                 
                  <div class="views-field views-field-name">             
                    <span class="field-content">

                      <div class="field-content" >
                        <div class="img-wrap">
                          <img  width="120" height="120" src="{{ URL::asset('/storage/images/market/managed%20services_0.svg') }}" alt="">
                        </div>
                      </div>

                      <a href="" hreflang="en">International Exposure</a>
                    </span>
                  </div>
                  <div class="views-field views-field-block-description">
                    <div class="field-content">
                      <p id="textit" class="text-align-center">To expose your luxury listing to millions of potential homebuyers worldwide, we promote on prominent international real estate portals, including: Wall Street Journal, LuxuryPortfolio.com, LuxuryRealEstate.com, LeadingRE.com, UniqueHomes.com, China.apr.com, Caimeiju, Juwai, Country Life UK</p>
                    </div>
                  </div>
                  <div class="views-field views-field-nothing">
                    <span class="field-content">
                      <div class="services-body-arrow">
                        <a href="">
                          <img  src="{{ URL::asset('/storage/images/market/right-long-arrow.svg') }}">
                        </a>
                      </div>
                    </span>            
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

    <center><div class="field-content">
      <div class="img-wrap" >
        <img src="{{ URL::asset('/storage/images/market/logo.jpg') }}" alt="" style="width:35%;">
      </div>
  </section>
</section>
  
<div class="clearfix"></div>
<div class="clearfix"></div>


<!-- Leading Real Estate -->
<section class="bottom-full-row container-fluid">
  <section class="leadingrealestate leadingrealestate-bottom-full-row" style="">
    <div id="block-services" class="strong-last-two-word fadeEl">
      <div class="content">
        <div class="field field-name-field-layout field-type-entity-reference-revisions">
          <div class="field_item">
            <div class="paragraph">
              <!-- 1st row -->
              <div class="row">
                <div class="col-lg-6 block parag-text" style="padding-top: 60px;">
                  <center><div class="clearfix text-formatted field">
                    <img src="{{ URL::asset('/storage/images/leading/logo1.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                    <img src="{{ URL::asset('/storage/images/leading/logo2.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                    <img src="{{ URL::asset('/storage/images/leading/logo3.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                  </div></center><br>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
                    <p style="margin-left: 33px;">
                      Leading Real Estate Companies of The World® & Luxury Portfolio International </p><br><br>
                    <p style="margin-left: 33px;">JRockcliff is a founding member of Luxury Portfolio International®, the luxury division of Leading Real Estate Companies of the World. With more than 500 member firms around the world, Our luxury listings are exposed to a vast global audience and reach potential buyers and investors in over 50 countries.</p><br>
                    <p style="margin-left: 33px;"><center>Who's Who in Luxury Real Estate</p></center><br>
                    <p style="margin-left: 35px;">Who’s Who in Luxury Real Estate is a global collection of luxury real estate brokers.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <img src="{{ URL::asset('/storage/images/leading/image_19.jpg') }}" style="width: 100%; height: auto; padding: 15px;">
                </div>
              </div>

              <!-- 2nd Row -->
              <div class="row">
                <div class="col-lg-6">
                  <img src="{{ URL::asset('/storage/images/leading/image_20.jpg') }}" style="width: 100%; height: auto; padding: 15px;">
                </div>
                <div class="col-lg-6 block parag-text">
                  <p style="margin-left: 33px; width: 87%;">
                      Through our international affiliations, we have a strong presence in over 50 countries. Our luxury listings are sent to prominent international real estate sites, reaching over 70 million potential buyers and investors worldwide through our relationships with: <br><br>
                  </p>
                  <center>
                    <div class="clearfix text-formatted field">
                      <img src="{{ URL::asset('/storage/images/leading/logo1.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                      <img src="{{ URL::asset('/storage/images/leading/logo2.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                      <img src="{{ URL::asset('/storage/images/leading/logo3.jpg') }}" style="width: 25%; height: auto; padding: 15px;">
                    </div>
                  </center><br><br>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item"></div>
                    <p style="margin-left: 33px; width: 87%;">We also have several well-positioned affiliate offices in China, providing our clients with access to buyers in Hong Kong, Shanghai, and Beijing. </p><br>              
                  </div>
                </div>
              </div>

              <!-- 3rd row -->
              <div class="row">
                <div class="col-lg-6 block parag-text">
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item">
                    <p style="margin-left: 33px;">Through our international affiliations, we have a strong presence in over 50 countries. Our luxury listings are sent to prominent international real estate sites, reaching over 70 million potential buyers and investors worldwide through our relationships with:</p><br>
                  </div>
                </div>            
              </div>

              <!-- 4th Row -->
              <div class="row">          
                <div class="col-lg-6 block parag-text">
                  <center>
                    <div class="clearfix text-formatted field">
                      <img src="{{ URL::asset('/storage/images/comprehensive/image_3.png') }}" style="width: 45%; height: auto; padding: 15px;">
                      <img src="{{ URL::asset('/storage/images/comprehensive/image_4.png') }}" style="width: 46%; height: auto; padding: 0px;margin-top: 22px;"><br>
                      <img src="{{ URL::asset('/storage/images/comprehensive/image_6.png') }}" style="width: 45%; height: auto; padding: 15px;margin-left: -7%;margin-right: 9%;">
                      <img src="{{ URL::asset('/storage/images/comprehensive/image_22.png') }}" style="width: 28%; height: auto; padding: 0px;">
                    </div>
                  </center><br><br>
                  <div class="clearfix text-formatted field field-name-field-content field-type-text-long field-label-hidden field_item"></div>
                           
                  </div>
                    <div class="col-lg-6">
                      <img src="{{ URL::asset('/storage/images/leading/image_21.jpg') }}" style="width: 77%; height: auto; padding: 15px;">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<div class="clearfix"></div>
<div class="clearfix"></div>

<!-- Work With Us -->
<section class="top-full-row container-fluid">
  <section class="services services-top-full-row">
    <div id="block-mainslideshow" class="block block-entityblock">
      <div class="content">
        <article role="article" about="/node/2" class="node node--type-banner node--view-mode-full clearfix">
          <div class="node__content clearfix">
            <div class="banner--node-container" id="wwu_banner">
              <div class="banner--node-image">
                <div class="field field--name-field-images field--type-image field--label-hidden field__items">
                  <div class="field__item" style="width: 100%; display: inline-block;">
                    <div class="img-wrap">
                      <img src="{{ URL::asset('/storage/images/workwithus/image_24.jpg') }}" alt=""  class="" style="width: 100%; height: auto; object-fit: cover; object-position: top;"/>
                    </div>
                  </div>
                  </div>
                </div>
              <div class="banner--node-content">
                <div class="clearfix text-formatted field field--name-field-subtext field--type-text-long field--label-hidden field__item">
                  <p>
                    Work With Us
                  </p>
                </div>
                <span class="separator"></span>
                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                  <p style="font-size: 16px;">
                    With decades of experience in luxurious Tri Valley real estate, our team is here <br> to ensure that your dreams are a reality. Let us guide you through your home <br> buying journey, contact us today!
                  </p>
                </div>

                <div class="field field--name-field-link field--type-link field--label-hidden field__item">
                  <a href="/">Contact us now!</a>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
</section>




@stop

@section('mainModals')

@endsection



@section('mainScripts')


  <script>
  



  </script>
@endsection
