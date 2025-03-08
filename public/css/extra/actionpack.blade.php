@extends('layouts.main')

@section('mainTitle')
  <title>Actionlabs</title>
@endsection

@section('mainStyles')
<link rel="stylesheet" href="{{ URL::asset('css/services/actionpackpage.css') }}">

@endsection


@section('mainContent')
  <section class="top-full-row container-fluid" style="padding: 0;">
    <section class="region region-top-full-row" style="margin: 0; padding: 0;">
      <div id="block-views-taxonomy-banner" class="views-element-container block block-views block-views-blocktaxonomy-banner-block-taxonomy-banner" >
        <div class="content">
          <div>
            <div class="view view-taxonomy-banner view-id-taxonomy_banner view-display-id-block_taxonomy_banner">
              <div class="view-content">
                <div class="views-row">
                  <div class="views-field views-field-field-banner">
                    <div class="field-content">
                      <div class="backpages-banner-wrapper">
                        <div class="img-wrap">
                          <img src="{{ URL::asset('storage/header_logo/backpages-banner_4.jpg') }}" width="1920" height="250" alt="" typeof="Image" class="image-style-backpage-banner" />
                        </div>

                        <div class="container">
                          <h1 class="title">ActionPack</h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="block-breadcrumbs" class="block block-system block-system-breadcrumb-block">
        <div class="content">
          <nav role="navigation" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/our-services">Our Services</a>
              </li>
              <li class="breadcrumb-item active">
                ActionPack
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
  </section>

  <div id="main-wrapper" class="layout-main-wrapper clearfix flex-grow-1">
    <div id="main" class="container">
      <div class="row-offcanvas row-offcanvas-left clearfix">
        <main class="main-content" role="main">
          <section class="section">
            <a id="main-content" tabindex="-1"></a>
            <div data-drupal-messages-fallback class="hidden"></div>

            <div id="block-bootstrap-sub-page-title" class="block block-core block-page-title-block" style="display: none;">
              <div class="content">
                <h1 class="title">ActionPack</h1>
              </div>
            </div>

            <div id="block-bootstrap-sub-content" class="block block-system block-system-main-block">
              <div class="content">
                <div class="view view-services-taxonomy-clone- view-id-services_taxonomy_clone_ view-display-id-page_services">
                  <div class="view-header">
                    <div about="/our-services/actionpack" id="taxonomy-term-5" class="taxonomy-term vocabulary-services">
                      <div class="content">
                        <div class="clearfix text-formatted field field--name-description field--type-text-long field--label-hidden field__item">
                          <p>With so many challenges being faced by Small to Medium-sized Enterprises (SME) and Small Offices / Home Offices (SOHO), it’s hard to manage everything. You need to worry about several aspects, such as Sales, Marketing, Business Development, IT, and more. Leave out one support, and your business may fall apart.</p>

                          <p> </p>

                          <p>We’ve got you covered on the IT part of your business. At ActionLabs, we’ve come up with solutions to manage your IT while you run your business. Our comprehensive packages will ensure that your enterprise is updated with the latest technology for operations to run with minimal issues. </p>
                        </div>

                      </div>
                    </div>
                    <p class="section-header text-uppercase">Products and Services</p>
                  </div>

                  <div class="view-content">
                    <div class="tab-container">
                      <div class="tab-links">
                        <div class="tablinks-wrapper">
                          <button class="tablink tab-active" id="srv-36">ActionPack365</button>
                          <button class="tablink " id="srv-38">Managed Print Services</button>
                        </div>
                      </div>

                      <div class="tab-contents">
                        <div id="srv-36" class="tabcontent tab-active" style="max-height: 350px;">
                          <p>Combining the power of Microsoft Office 365 and the expertise of our technical support team, ActionPack365 is the perfect solution for you! We provide unlimited remote and onsite support to maintain your IT infrastructure which is critical to your business operations.</p>

                          <div class="mt-5">
                            <div class="emph paragraph paragraph--type--image-and-text">
                              <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                <div class="img-wrap">
                                  <img src="{{ URL::asset('storage/header_logo/ActionPack365.jpg') }}" width="1024" height="683" alt="" typeof="foaf:Image" class="image-style-optimize-only" />
                                </div>
                              </div>

                              <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                <p>Experience productivity through ActionPack365! We offer service coverage, support, and management of Microsoft Office 365 applications for improved operations.</p>
                              </div>
                            </div>

                            <div class="paragraph paragraph--type--text-only">
                              <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                <p>Leverage the power of the best IT Service Provider, and the capabilities of Microsoft Office 365! ActionPack365 combines all these in a single suite of productivity and IT support. We see the struggle of being in charge of several aspects of running an SME / SOHO, so we’ve made a package that covers everything you need. From hardware to software combined with technical support, ActionLabs wants to make sure your workplace is more than ready to face everyday business challenges through innovation and transformation.</p>
                              </div>
                            </div>

                            <div class="paragraph paragraph--type--multiple-blocks">
                              <div class="field field--name-field-block field--type-entity-reference-revisions field--label-hidden field__items">

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">SERVICE COVERAGE</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>Computers? Printers? Servers? We’ll take care of all those for you. ActionLabs can provide you with enterprise level of support without breaking the bank. We know the importance of having the latest productivity tools to improve how you and your employees work, so we’re giving you exactly that to save you the hassle of looking for it yourself.</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">PHONE SUPPORT</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>Any issues you might have with your infrastructure can be resolved quickly via hotline for remote IT assistance. Through the ActionPack365, you can get unlimited remote support and software installation, threat removal assistance, troubleshooting, internet, and email setup from our dedicated experts. We’ll make sure that we can give you the help your business deserves.</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">ONSITE SUPPORT</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>Some problems require onsite assistance, but don’t worry. We can get there to your office by the next business day to resolve your technical problems. Our ActionLabs engineers can troubleshoot hardware and software issues and provide break-fix support as needed. We can also do IMAC (Install, Move, Add, Change) services to ensure everything is properly set up and your infrastructure is up-to-date.</p>
                                    </div>
                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">ASSET MANAGEMENT</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>We know how confusing it can get to keep track of all your assets. The good news is we can do all that nitty-gritty work for you. At ActionLabs, we use a system inventory tool for both hardware and software to be properly tracked and monitored including any physical relocation or IT migration.</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">MICROSOFT OFFICE 365</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>The Microsoft Office 365 suite offers a vast array of applications a business can use to increase productivity and efficiency. We can install Microsoft apps on your laptops and mobile devices to make sure you can access your business anytime you need. We can also set up email and Skype accounts for everyone in your team so your office network is united and accessible to everyone. Like Microsoft, our goal is to make your workplace process smoother and easier for all employees - from the CEOs and managers down to the staff level.</p>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="srv-38" class="tabcontent ">
                          <p>
                            Experience the benefits of printing and more! ActionLabs can provide top-of-the-line printers for your office and monitor your usage for better maintenance. Need bulk printing? Need replacement or repairs for your printers? We can do it for you.<br />
                            <br />
                            It’s no hidden fact that printers are incredibly important to a business no matter what industry they’re in. The convenience of one, however, comes with  shouldering responsibilities such as maintenance, ink supplies, utilization tracking, and more.<br />
                            <br />
                            With our Managed Print Services, you no longer have to worry about that! We go beyond just printing by also offering to monitor and track your printer performance. This helps us know what’s going on with your device so we can do repairs accordingly. And if you eventually need a new printer, we can provide that as well. This saves you the time and effort to look for a high-quality device because we already have the best in store for you. We also offer other top-of-the-line print-related products such as scanners, fax machines, and copy machines.
                          </p>


                          <div class="mt-5">
                            <div class="paragraph paragraph--type--multiple-blocks">
                              <div class="field field--name-field-block field--type-entity-reference-revisions field--label-hidden field__items">

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">Remote Monitoring</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>Get a dedicated team to analyze your printing needs via your printer usage. Through our remote monitoring, we can analyze how your printer is used and come up with solutions based on it. ActionLabs can track certain situations such as low ink levels and deliver such supplies so you don’t have to buy or order after you’ve already run out. We can also determine the ideal models and ink brands for the job depending on the type of files you print and your required print quality.</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">Printer Maintenance and Repair</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>Because we can see related details to your printer performance, we also know when your device needs repairing and fine-tuning. ActionLabs can send a technician for onsite support so we can take a closer look at your hardware’s problems. Based on the assessment of our resource, we can apply the necessary fix for your device, or we can replace the printer with a new one entirely if needed. It saves you the hassle and cost of looking for one, and you get a new printer that’s optimized to your requirements!</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="field__item">
                                  <div class="paragraph paragraph--type--blocks paragraph--view-mode--default">

                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">Max No. of Pages Monthly</div>

                                    <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                      <p>ActionLabs provides you with a maximum no. of pages monthly, with costing fixed save for when it exceeds this number. Enjoy stacks of high-quality prints as provided by the best printers and ink cartridges for the job. You don’t have to worry about being charged for paper jams, as we only count a successful print as one sheet. Your remaining pages aren’t reduced when the worst of these printer jams happen.</p>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>

  <section class="bottom-full-row container-fluid"  style="padding: 0;">
    <section class="region region-bottom-full-row" style="margin: 0; padding: 0;">

      <!-- OUR SERVICES -->
      <div id="block-views-our-services" class="strong-last-word fadeEl block block-views-our-services"  style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

        <h2>Our <span class="word-strong" style="font-weight: 800;">Services</span></h2>

        <div class="content">
          <div>
            <div class="view view-services view-id-services">
              <div class="view-content" align="center">
                <div class="services-item views-row">
                  <div class="views-field views-field-edit-taxonomy-term edit-link">
                    <span class="field-content"></span>
                  </div>
                  <div class="services-item-container">
                    <div class="views-field views-field-icon">
                      <div class="field-content">
                        <a href="/our-services/managed-it-services">
                          <div class="img-wrap">
                            <img width="120" height="120" src="{{ URL::asset('/storage/our_services/managed%20services_0.svg') }}" alt="">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="views-field views-field-name">
                      <span class="field-content">
                        <a href="/our-services/managed-it-services" hreflang="en">Managed IT Services</a>
                      </span>
                    </div>
                    <div class="views-field views-field-block-description">
                      <div class="field-content">
                        <p class="text-align-center">Entrust the management of your IT infrastructure to our highly-trained experts.</p>
                      </div>
                    </div>
                    <div class="views-field views-field-nothing">
                      <span class="field-content">
                        <div class="services-body-arrow">
                          <a href="/our-services/managed-it-services">
                            <img src="{{ URL::asset('/storage/img/right-long-arrow.svg') }}">
                          </a>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="services-item views-row">
                  <div class="views-field views-field-edit-taxonomy-term edit-link">
                    <span class="field-content"></span>
                  </div>
                  <div class="services-item-container">
                    <div class="views-field views-field-icon">
                      <div class="field-content">
                        <a href="/our-services/contact-center">
                          <div class="img-wrap">
                            <img width="120" height="120" src="{{ URL::asset('/storage/our_services/contact_0.svg') }}" alt="">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="views-field views-field-name">
                      <span class="field-content">
                        <a href="/our-services/contact-center" hreflang="en">Contact Center</a>
                      </span>
                    </div>
                    <div class="views-field views-field-block-description">
                      <div class="field-content">
                        <p class="text-align-center">Let us manage your technical helpdesk to address your customer concerns.</p>
                      </div>
                    </div>
                    <div class="views-field views-field-nothing">
                      <span class="field-content">
                        <div class="services-body-arrow">
                          <a href="/our-services/contact-center">
                            <img src="{{ URL::asset('/storage/img/right-long-arrow.svg') }}">
                          </a>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="services-item views-row">
                  <div class="views-field views-field-edit-taxonomy-term edit-link">
                    <span class="field-content"></span>
                  </div>
                  <div class="services-item-container">
                    <div class="views-field views-field-icon">
                      <div class="field-content">
                        <a href="/our-services/nationwide-service-center">
                          <div class="img-wrap">
                            <img width="120" height="120" src="{{ URL::asset('/storage/our_services/partner_0.svg') }}" alt="">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="views-field views-field-name">
                      <span class="field-content">
                        <a href="/our-services/nationwide-service-center" hreflang="en">Nationwide Service Center</a>
                      </span>
                    </div>
                    <div class="views-field views-field-block-description">
                      <div class="field-content">
                        <p class="text-align-center">Trust a certified partner to do repairs on your IT equipment.</p>
                      </div>
                    </div>
                    <div class="views-field views-field-nothing">
                      <span class="field-content">
                        <div class="services-body-arrow">
                          <a href="/our-services/nationwide-service-center">
                            <img src="{{ URL::asset('/storage/img/right-long-arrow.svg') }}">
                          </a>
                        </div>
                      </span>
                    </div>
                  </div>

                </div>

                <div class="services-item views-row">
                  <div class="views-field views-field-edit-taxonomy-term edit-link">
                    <span class="field-content"></span>
                  </div>
                  <div class="services-item-container">
                    <div class="views-field views-field-icon">
                      <div class="field-content">
                        <a href="/our-services/actionpack">
                          <div class="img-wrap">
                            <img width="120" height="120" src="{{ URL::asset('/storage/our_services/action%20pack_0.svg') }}" alt="">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="views-field views-field-name">
                      <span class="field-content">
                        <a href="/our-services/actionpack" hreflang="en">ActionPack</a>
                      </span>
                    </div>
                    <div class="views-field views-field-block-description">
                      <div class="field-content">
                        <p class="text-align-center">Employ a suite of solutions designed to address your SOHO and SME needs.</p>
                      </div>
                    </div>
                    <div class="views-field views-field-nothing">
                      <span class="field-content">
                        <div class="services-body-arrow">
                          <a href="/our-services/actionpack">
                            <img src="{{ URL::asset('/storage/img/right-long-arrow.svg') }}">
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
      </div>


    </section>
  </section>

@stop

@section('mainModals')

@endsection


@section('mainScripts')
  <script>
    $(document).ready(function() {
      $(".tab-links").niceScroll();
      $(".tab-contents").niceScroll();

      $('button.tablink').on('click', function() {
        $('.tab-container .tablink').removeClass('tab-active');
        $('.tab-container .tabcontent').removeClass('tab-active');

        $(this).addClass('tab-active');
        $('.tab-container .tabcontent').eq($(this).index()).addClass('tab-active');
      });
    });
  </script>
@endsection
