@extends('layouts.app')

@section('title','Travel Detail')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Everest, Himalaya</h1>
              <p>Republic of Nepal</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img
                    src="frontend/images/pic-details.jpg"
                    class="xzoom"
                    id="xzoom-default"
                    xoriginal="frontend/images/pic-details.jpg"
                  />
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/pic-details.jpg">
                    <img
                      src="frontend/images/pic-details.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="frontend/images/pic-details.jpg"
                    />
                  </a>
                  <a href="frontend/images/pic-details-2@2x.jpg">
                    <img
                      src="frontend/images/pic-details-2@2x.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="frontend/images/pic-details-2@2x.jpg"
                    />
                  </a>
                  <a href="frontend/images/pic-details-3@2x.jpg">
                    <img
                      src="frontend/images/pic-details-3@2x.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="frontend/images/pic-details-3@2x.jpg"
                    />
                  </a>
                  <a href="frontend/images/pic-details-4@2x.jpg">
                    <img
                      src="frontend/images/pic-details-4@2x.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="frontend/images/pic-details-4@2x.jpg"
                    />
                  </a>
                  <a href="frontend/images/pic-details-5@2x.jpg">
                    <img
                      src="frontend/images/pic-details-5@2x.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="frontend/images/pic-details-5@2x.jpg"
                    />
                  </a>
                </div>
              </div>
              <h2>About Place</h2>
              <p>
                Mount Everest is Earth's highest mountain above sea level,
                located in the Mahalangur Himal sub-range of the Himalayas in
                Province No. 1 of eastern Nepal. Situated at a distance of 160
                km northeast to Kathmandu and 174 km northwest to the
                provincial capital of Biratnagar, the international border
                between Nepal (Province No. 1) and China (Tibet Autonomous
                Region) runs across its summit point.
              </p>
              <p>
                The current official elevation of 8,848 m, recognised by China
                and Nepal, was established by a 1955 Indian survey and
                subsequently confirmed by a Chinese survey in 1975.
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img
                    src="frontend/images/ic_event.png"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Camping, Hiking</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img
                    src="frontend/images/ic_language.png"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Language</h3>
                    <p>Nepali</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img
                    src="frontend/images/ic_food.png"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local Foods</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img
                  src="frontend/images/member-1.png"
                  class="member-image mr-1"
                />
                <img
                  src="frontend/images/member-2.png"
                  class="member-image mr-1"
                />
                <img
                  src="frontend/images/member-3.png"
                  class="member-image mr-1"
                />
                <img
                  src="frontend/images/member-4.png"
                  class="member-image mr-1"
                />
                <img
                  src="frontend/images/member-5.png"
                  class="member-image mr-1"
                />
                <img
                  src="frontend/images/member-info.png"
                  class="member-image mr-1"
                />
              </div>
              <hr />
              <h2>Trip Informations</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">22 Aug, 2020</td>
                </tr>
                <tr>
                  <th width="50%">Trip Duration</th>
                  <td width="50%" class="text-right">10D 9N</td>
                </tr>
                <tr>
                  <th width="50%">Type of Trip</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$1200,00/person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a
                href="{{ route('checkout') }}"
                class="btn btn-block btn-join-now mt-3 py-2"
              >
                Join Trip
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: "#333",
            Xoffset: 15
        });
    });
</script>
@endpush