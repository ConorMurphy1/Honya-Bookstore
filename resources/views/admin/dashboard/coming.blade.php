@extends('welcome')
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Honya</a></li>
            <li class="breadcrumb-item active" aria-current="page">List</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="layers"></i></span></span>Library</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper hk-gallery-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" role="tabpanel">
                            <h6 class="mt-30 mb-20">Book List</h6>
                            <div class="row hk-gallery">
                                @foreach ( as )
                                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock1.jpg">
                                        <a href="#" class="">
                                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock1.jpg');"></div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->

@endsection
