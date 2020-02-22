<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Laravel mail</title>
    <meta charset="utf-8">
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
    <!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>


    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <div class="widget widget_search">
            <form method="get" class="searchform form-inline" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword"
                        id="modal-search-input">
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div>

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <section class="page_topline ds ms columns_margin_0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-left">
                            <p class="fontsize_12 grey">
                                <i class="flaticon-clock"></i> Opening Times: Mon - Sat 8.00 - 18.00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right">
                            <div class="grey fontsize_12">Follow us:
                                <div class="page_social_icons inline-block darklinks">
                                    <a class="social-icon soc-facebook" href="#" title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="Google"></a>
                                    <a class="social-icon soc-linkedin" href="#" title="LinkedIn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page_toplogo ds table_section section_padding_25 columns_margin_0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 text-center text-sm-left">
                            <a href="./" class="logo">
                                <img src="{{asset('images/processed.jpeg')}}" alt="" style="height: 69px;width:173px;">
                            </a>
                        </div>

                        <div class="col-sm-8 text-right hidden-xs darklinks">
                            <div class="teaser media inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon fontsize_20 highlight">
                                        <i class="flaticon-paper-plane"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle text-left">
                                    <p class="bold fontsize_26 grey bottommargin_5">0800 123 4567</p>
                                    <p>energy@support.com</p>
                                </div>
                            </div>
                            <a class="teaser location-teaser media inline-block hidden-sm hidden-xs" href="#">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon fontsize_20 highlight">
                                        <i class="flaticon-signs"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle text-left">
                                    <p class="bold fontsize_26 bottommargin_5">1116 15th St,</p>
                                    <p class="fontcolor">Sacramento, California</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <section id="breadcrumbs"
                class="page_breadcrumbs ds parallax section_padding_65 table_section table_section_md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-left">
                            <h1 class="cornered-heading">Contact</h1>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_110 section_padding_bottom_75">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <div class="cornered-heading center-heading bottommargin_40">
                                <span class="text-uppercase">Connect with us</span>
                                <h2 class="text-uppercase">Our Contacts</h2>
                            </div>
                            <p>
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Fusce tempus odio vitae nibh semper, ac venenatis massa mollis. Proin tempus, mauris eu
                                facilisis feugiat, nisi augue faucibus.
                            </p>
                        </div>
                    </div>
                    <div class="row with_shadow topmargin_40 to_animate" data-animation="fadeInDown">
                        <div class="col-sm-4 col-lg-offset-1 col-lg-3 text-center">
                            <div class="teaser inline-block topmargin_30 bottommargin_20">
                                <div class="media-left">
                                    <div class="teaser_icon size_small grey">
                                        <i class="flaticon-signs"></i>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <h5 class="text-uppercase fontsize_16 extra-bold">Head office</h5>
                                    <p>1116 15th St, Sacramento,
                                        <br> California, CA 95814, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="teaser inline-block topmargin_30 bottommargin_20">
                                <div class="media-left">
                                    <div class="teaser_icon size_small grey">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <h5 class="text-uppercase fontsize_16 extra-bold">Call us</h5>
                                    <p>Support: 0800 123 4567
                                        <br> Office: 0800 123 4566</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3 text-center">
                            <div class="teaser inline-block topmargin_30 bottommargin_20">
                                <div class="media-left">
                                    <div class="teaser_icon size_small grey">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <h5 class="text-uppercase fontsize_16 extra-bold">Email Us</h5>
                                    <p class="greylinks">
                                        <a href="#">energy@support.com</a>
                                        <br>
                                        <a href="#">energy@info.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row topmargin_35 contact-form-container to_animate" data-animation="fadeInUp">
                        <div class="col-sm-12 text-center">
                            <span class="text-uppercase">Short loin meatloaf</span>
                            <h2 class="text-uppercase topmargin_5 bottommargin_25">Contact Form</h2>
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form class="row columns_margin_0" method="post" action="{{route('sendemail.send')}}">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="contact-form-name form-group">
                                        <label for="name" class="sr-only">Full Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name"
                                            class="form-control" placeholder="Enter your Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class=" form-group row">
                                        <label for="email" class="sr-only">Email
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" aria-required="true" size="30" value="" name="email"
                                            id="email" class="form-control" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact-form-phone form-group">
                                        <label for="subject" class="sr-only">Subject
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" aria-required="true" size="30" value="" name="subject"
                                            id="subject" class="form-control" placeholder="Enter your Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">

                                    <div class="contact-form-message form-group">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea aria-required="true" rows="5" cols="45" name="message" id="message"
                                            class="form-control" placeholder="Enter your Message..."></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="contact-form-submit topmargin_10 bottommargin_25">
                                        <button type="submit" class="theme_button color1 margin_0">Send Message</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

            <section id="map" class="ls" data-address="York St, Marylebone, London W1U 6PZ, Grait Britain">
                <!-- marker description and marker icon goes here -->
                <div class="map_marker_description">
                    <h3>Map Title</h3>
                    <p>Map description text</p>
                    <img class="map_marker_icon" src="images/map_marker_icon.png" alt="">
                </div>
            </section>



            <section class="page_copyright ds ms parallax table_section section_padding_25">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="darklinks fontsize_12">&copy;
                                <span class="text-uppercase">Energy</span>2016 | Created with
                                <i class="fa fa-heart-o highlight"></i> by
                                <a href="http://wprollers.com">WPRollers</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Map Script -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>