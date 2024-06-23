@include('layout.frontend.header')
    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }})">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact</h1>
                
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">

        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fas fa-map-marker-alt mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Visit Our Office</h4>
                {{ $header->address ?? '' }}
              </div>
            </div>
          </div><!-- Col 1 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-envelope mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Email Us</h4>
                <p>{{ $header->email ?? '' }}</p>
              </div>
            </div>
          </div><!-- Col 2 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-phone-square mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Call Us</h4>
                <p>{{ $header->phone ?? '' }}</p>
              </div>
            </div>
          </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="google-map d-none">
          <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974"
            data-marker="images/marker.png" data-marker-name="Osudbd"></div>
        </div>

        <div class="container">
          <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5960281703738!2d90.3442709750738!3d23.79739558697097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c194667fd715%3A0x73bf551fcfaa425c!2z4Kau4Ka_4Kaw4Kaq4KeB4KawIOCmruCmvuCmnOCmvuCmsCDgprDgp4vgpqEg4Kau4Ka44Kac4Ka_4Kam!5e0!3m2!1sbn!2sbd!4v1719125152931!5m2!1sbn!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="gap-40"></div>

        <div class="row">
          <div class="col-md-12">
            <h3 class="column-title">Contact Us / Send Your Message</h3>
            <!-- contact form works with formspree.io  -->
            <!-- contact form activation doc: https://docs.themefisher.com/Osudbd/contact-form/ -->
              <form id="contact-form" action="{{ route('contact.store') }}" method="post" role="form">
              @csrf
              <div class="error-container"></div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text"
                      required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                      required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder=""
                      required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                  required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Send Message</button>
              </div>


              @if(session('success'))
                  <div class="alert alert-success mt-3">
                      {{ session('success') }}
                  </div>
              @endif

              @if($errors->any())
                  <div class="alert alert-danger mt-3">
                      Please fix the following errors:
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

            </form>
          </div>

        </div><!-- Content row -->
      </div><!-- Conatiner end -->
    </section><!-- Main container end -->

  @include('layout.frontend.footer')