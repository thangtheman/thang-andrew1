<?php
/*Template Name: Testing homep page*/
$domain_name =  get_home_url();
?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="shortcut icon" href="<?php echo $domain_name;?>/wp-content/themes/Divi/images/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $domain_name;?>/wp-content/themes/Divi/css/main.css?2.9" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $domain_name;?>/wp-content/themes/Divi/css/common.css?4.0" />
    <script src="<?php echo $domain_name;?>/wp-content/themes/Divi/js/main.js?2.9" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $domain_name;?>/wp-content/themes/Divi-child/thang-custom.css"/>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" id='' class="home page page-id-2945 page-template-default geoip-country-IN geoip-continent-AS et_fixed_nav et_boxed_layout et_secondary_nav_enabled et_pb_side_nav_page linux et_pb_pagebuilder_layout et_right_sidebar gecko">


<!--HEADER -->
<div id="content" class="container">
    <header id="main-header" class="et_nav_text_color_dark">
        <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/logo-nav-mobile.jpg" id="brand-logo"/>
        <nav class="navbar">
            <div id="nav-top">
                <ul id="social-icons">
                    <li><a href="http://facebook.com"><img src="<?php echo $domain_name;
                                                                    ?>/wp-content/themes/Divi-child/img/facebook.png"/></a></li>
                    <li><a href="http://twitter.com"><img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/twitter.png"/></a></li>
                    <li><a href="http://google.com"><img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/gplus.png"/></a></li>
                    <li><a href="http://pinterest.com"><img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/pin.png"/></a></li>
                    <li><a href="http://instagram.com"><img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/instagram.png"/></a></li>
                    <li><a href="http://youtube.com"><img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/youtube.png"/></a></li>
                </ul>
                <div id="media-channel">
                    <a href="/tv"><i class="fa fa-tv"></i> Live TV</a>
                    <a href="/tv"><i class="fa fa-play-circle-o"></i> Videos</a>
                    <a href="/tv"><i class="fa fa-camera"></i> Slideshows</a>
                    <a href="/locale" id="locale"><span class="flag usa"></span>USA <i class="fa fa-caret-down"></i></a>
                </div>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="nav-bottom">
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/TV" class="tv">TV</a></li>
                        <li><a href="/TV" class="health">HEALTH</a></li>
                        <li><a href="/TV" class="wellness">WELLNESS</a></li>
                        <li><a href="/TV" class="fitness">FITNESS</a></li>
                        <li><a href="/TV" class="food">FOOD</a></li>
                        <li><a href="/TV" class="beauty">BEAUTY</a></li>
                        <li><a href="/TV" class="healthatoz">HEALTH A TO Z</a></li>
                    </ul>
                    <div id="search">
                        <input type="text" placeholder="Search"/>
                        <input type="submit"/>
                    </div>
                </div>
                <div id="nav-dropdown">
                    <div class="tv">
                        <div class="col-5">
                            <ul>
                                <li><a href="">SHOWS</a></li>
                                <li><a href="">TV SCHEDULE</a></li>
                                <li><a href="">WHERE TO WATCH</a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                    <div class="health">
                        <div class="col-5">
                            <ul>
                                <li class="diseases"><a href="">Diseases & Conditions</a></li>
                                <li class="remedies"><a href="">Natural Remedies</a></li>
                                <li class="alternative-medicine"><a href="">Complementary & Alternative Medicine</a></li>
                                <li class="womens-health"><a href="">Women's Health</a></li>
                                <li class="pregnancy"><a href="">Pregnancy & Babycare</a></li>
                            </ul>
                        </div>
                        <div class="col-5 diseases active">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>DISEASES 1</p>
                        </div>
                        <div class="col-5 diseases active">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>DISEASES 2</p>
                        </div>
                        <div class="col-5 diseases active">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>DISEASES 3</p>
                        </div>
                        <div class="col-5 diseases active">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>DISEASES 4</p>
                        </div>
                        <div class="col-5 remedies">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>REMEDIES 1</p>
                        </div>
                        <div class="col-5 remedies">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>REMEDIES 2</p>
                        </div>
                        <div class="col-5 remedies">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>REMEDIES 3</p>
                        </div>
                        <div class="col-5 remedies">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>REMEDIES 4</p>
                        </div>
                    </div>
                    <div class="wellness">
                        <div class="col-5">
                            <ul>
                                <li><a href="">Emotional Well-being</a></li>
                                <li><a href="">Home & Family</a></li>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Spa</a></li>
                                <li><a href="">Meditation</a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                    <div class="fitness">
                        <div class="col-5">
                            <ul>
                                <li><a href="">Exercise</a></li>
                                <li><a href="">Weight loss</a></li>
                                <li><a href="">Yoga</a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                    <div class="food">
                        <div class="col-5">
                            <ul>
                                <li><a href="">Healthy Recipes</a></li>
                                <li><a href="">Healthy Eating</a></li>
                                <li><a href="">Diabetic Diet</a></li>
                                <li><a href="">Vegetarian Diet</a></li>
                                <li><a href="">Vegan Diet</a></li>
                                <li><a href="">Gluten-free Diet</a></li>
                                <li><a href="">Nutrition</a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                    <div class="beauty">
                        <div class="col-5">
                            <ul>
                                <li><a href="">Skincare</a></li>
                                <li><a href="">Haircare</a></li>
                                <li><a href="">Anti-again</a></li>
                                <li><a href="">DIY</a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                    <div class="healthatoz">
                        <div class="col-4">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Cook-Your-Ass-Off.jpg"/>
                            <p>Cook Your Ass Off</p>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/I-Beat-The-Odds.jpg"/>
                            <p>I Beat The Odds</p>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Dueling-Doctors.jpg"/>
                            <p>Dueling Doctors</p>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/Yogapalooza.jpg"/>
                            <p>Yogapalooza</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="featured" class="row">
        <div class="col-sm-3 col-xs-6">
            <a href="/">
                <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/apples-for-type-two-diabetes-550x309.jpg" class="img-responsive"/>

                <div class="caption">
                    Quick Fix: Apples for Type 2 Diabetes
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="/">
                <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/fitness-trends-2016-550x309.jpg" class="img-responsive"/>

                <div class="caption">
                    The Future Of Fitness: The Trend Report For 2016 Is Here!
                </div>
                <div class="caption-icon">
                    <i class="fa fa-camera"></i>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="/">
                <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/thai-550x309.jpg" class="img-responsive"/>

                <div class="caption">
                    Thai Way To Heaven: 14 Recipes From This Tasty Asian Cuisine
                </div>
                <div class="caption-icon">
                    <i class="fa fa-map-signs"></i>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="/">
                <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/multitasker-550x309.jpg" class="img-responsive"/>

                <div class="caption">
                    Fast Five: Smart Ways To Be More Productive At Work
                </div>
            </a>
        </div>
    </div>
    <div class="main-image">
        <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/kid%201368x541.jpg" class="responsive" class="img-responsive"/>
        <div class="main-text">
            <a href="">
                <h1>Title of the Story goes here. Lorem Ipsum</h1>
            </a>
            <a href="" class="btn">See The Video</a>
        </div>
    </div>
</div>

<script>
    $(window).load(function() {
//        $("#menu").hide();
//        $(".navbar-toggle").click(function() {
//            $("#menu").slideToggle("fast");
//        });
        $("#nav-bottom").hover(function() {
                    $("#nav-dropdown").show();
                }, function() {
                    $("#nav-dropdown").hide();
                }
        );
        $(".tv").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .tv").addClass("active");
        });
        $(".health").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .health").addClass("active");
        });
        $(".wellness").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .wellness").addClass("active");
        });
        $(".fitness").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .fitness").addClass("active");
        });
        $(".food").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .food").addClass("active");
        });
        $(".beauty").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .beauty").addClass("active");
        });
        $(".healthatoz").hover(function() {
            $("#nav-dropdown > *").removeClass("active");
            $("#nav-dropdown > .healthatoz").addClass("active");
        });

        //sub menus
        $("li.diseases").hover(function() {
            $(".col-5").removeClass("active");
            $(".col-5.diseases").addClass("active");
        });
        $("li.remedies").hover(function() {
            $(".col-5").removeClass("active");
            $(".col-5.remedies").addClass("active");
        });
    });
</script>


<!--MAIN CONTAIN-->

<div id="et-main-area" class="et-main-area">

    <div id="main-content">
        <article>
            <div class="entry-content">
                <div class="et_pb_section et_section_regular" >


                    <div class="et_pb_row container">
                        <div  class="et_pb_column et_pb_column_2_3">





                            <!--test test test-->
                            <div  class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left hmtext">

                                <div class="catheading">
                                    <h4><a href="/">HEALTH</a></h4>
                                    <p><a href="/">View all Health</a></p>
                                </div>

                            </div> <!-- .et_pb_text -->

                            <div class="et_pb_posts et_pb_bg_layout_light featured-videos">

                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>


                            </div>








                            <!--test test test-->
                            <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left hmtext">

                                <div class="catheading">
                                    <h4><a href="/">FITNESS</a></h4>
                                    <p><a href="/">View all Fitness</a></p>
                                </div>

                            </div> <!-- .et_pb_text -->

                            <div class="et_pb_posts et_pb_bg_layout_light featured-videos">

                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>


                            </div>

                            <div  class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left hmtext">

                                <div class="catheading">
                                    <h4><a href="/">WELLNESS</a></h4>
                                    <p><a href="/">View all Wellness</a></p>
                                </div>

                            </div> <!-- .et_pb_text -->

                            <div class="et_pb_posts et_pb_bg_layout_light featured-videos">

                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>


                            </div>


                            <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left hmtext">

                                <div class="catheading">
                                    <h4><a href="/">BEAUTY</a></h4>
                                    <p><a href="/">View all Beauty</a></p>
                                </div>

                            </div> <!-- .et_pb_text -->

                            <div class="et_pb_posts et_pb_bg_layout_light featured-videos">

                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>


                            </div>


                            <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left hmtext">

                                <div class="catheading">
                                    <h4><a href="/">FOOD</a></h4>
                                    <p><a href="/">View all Food</a></p>
                                </div>

                            </div> <!-- .et_pb_text -->

                            <div class="et_pb_posts et_pb_bg_layout_light featured-videos">

                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="schover big">
                                        <a href="/">
                                            <img width="372" height="209" src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/sunny-xmas-372x209.jpg">
                                        </a>
                                        <h4 class="mc-h6"><a  href="/">White Christmas Not Your Thing? Try These 4 Sunny
                                            Holiday Destinations</a></h4>
                                        <p>by JOHN SMITH</p>
                                    </div>
                                </div>


                            </div>


                        </div> <!-- One column div -->
                        <div  class="et_pb_column et_pb_column_1_3">

                            <div class="et_pb_tabs widgettabs">
                                <ul class="et_pb_tabs_controls clearfix">
                                    <li class="et_pb_tab_active"><a href="#">Recommended</a></li><li><a href="#">Latest</a></li>
                                </ul>
                                <div class="et_pb_all_tabs">
                                    <div class="et_pb_tab clearfix et_pb_active_content">
                                        <div class="et_pb_posts et_pb_bg_layout_light">
                                            <article>
                                                <div class="small pull-left">
                                                    <a href="/"><img width="80" height="80"
                                                                     src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/breastfeeding-80x80.jpg"
                                                                     class="attachment-thumbnail-name-80x80 wp-post-image" alt="breastfeeding" /></a>
                                                </div>
                                                <p class="catname"><a href="/">Health</a></p>
                                                <h6><a href="/">Some Titles will appear here</a></h6>
                                                <a href="/">Read More</a>
                                            </article>

                                            <article>
                                                <div class="small pull-left">
                                                    <a href="/"><img width="80" height="80"
                                                                     src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/breastfeeding-80x80.jpg"
                                                                     class="attachment-thumbnail-name-80x80 wp-post-image" alt="breastfeeding" /></a>
                                                </div>
                                                <p class="catname"><a href="/">Beauty</a></p>
                                                <h6><a href="/">Some Titles will appear here</a></h6>
                                                <a href="/">Read More</a>
                                            </article>

                                            <article>
                                                <div class="small pull-left">
                                                    <a href="/"><img width="80" height="80"
                                                                     src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/breastfeeding-80x80.jpg"
                                                                     class="attachment-thumbnail-name-80x80 wp-post-image" alt="breastfeeding" /></a>
                                                </div>
                                                <p class="catname"><a href="/">Food</a></p>
                                                <h6><a href="/">Some Titles will appear here</a></h6>
                                                <a href="/">Read More</a>
                                            </article>

                                            <article>
                                                <div class="small pull-left">
                                                    <a href="/"><img width="80" height="80"
                                                                     src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/breastfeeding-80x80.jpg"
                                                                     class="attachment-thumbnail-name-80x80 wp-post-image" alt="breastfeeding" /></a>
                                                </div>
                                                <p class="catname"><a href="/">Wellness</a></p>
                                                <h6><a href="/">Some Titles will appear here</a></h6>
                                                <a href="/">Read More</a>
                                            </article>


                                        </div>
                                </div> <!-- .et_pb_tab -->
                                </div> <!-- .et_pb_all_tabs -->
                            </div> <!-- .et_pb_tabs -->

                            <!--some ads here-->
                            <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left">

                                <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/ads300x250.png" alt="">
                        </div>


                            <!--Newsletter-->
                            <div class="et_pb_widget_area et_pb_widget_area_left clearfix et_pb_bg_layout_light">
                                <div id="execphp-26" class="et_pb_widget widget_execphp">
                                    <div class="execphpwidget">


                                        <img src="<?php echo $domain_name;?>/wp-content/themes/Divi-child/img/newsz
                                        .png" alt="">
                                        <!--<div class="znewsletter">-->
                                    <!--<div class="ml77">-->
                                        <!--<img alt="ZLiving" src="http://www.zliving.com/wp-content/themes/Divi/images/logo.png">-->
                                        <!--<span>Newsletter</span>-->
                                    <!--</div>-->
                                    <!--<p>Your weekly dose of health, wellness, fitness, natural beauty and healthy eating.</p>-->
                                    <!--&lt;!&ndash; Begin MailChimp Signup Form &ndash;&gt;-->
                                    <!--<div id="response_area"></div>-->
                                    <!--<div id="mc_embed_signup" class="mc_embed_signup">-->
                                        <!--<form id="mcltgForm" class="mcltgForm" method="POST">-->
                                            <!--<div id="mc_embed_signup_scroll">-->
                                                <!--<input id="mcltg_email" class="txtemail" type="email" name="EMAIL" placeholder="Your email address" required="">-->

                                                <!--<div><input id="mc-embedded-subscribe" class="button btnsubmit pull-left" type="button" onclick="submitSubscribeUser();" value="Subscribe"></div>-->

                                            <!--</div>-->
                                            <!--<input type="hidden" name="list_id_weekly-newsletter" value="664605">-->
                                            <!--<input type="hidden" name="list_name_weekly-newsletter" value="Z Living Weekly Newsletter">-->
                                            <!--<input type="hidden" name="group_id_weekly-newsletter" value="19665">-->
                                            <!--<input type="hidden" name="group_name_weekly-newsletter" value="Direct Subscribers (from the site)">-->
                                            <!--<input type="hidden" name="tag_slug[]" value="weekly-newsletter">-->
                                            <!--<input type="hidden" name="action" value="subscribeUser">-->

                                        <!--</form>-->
                                    <!--</div>-->
                                    <!--<div class="clear">&nbsp;</div></div>-->
                                </div> <!-- end .et_pb_widget -->
                                </div>
                            </div><!-- second column div (siderbar)-->


<!--whats on tv-->

                            <div class="et_pb_widget_area et_pb_widget_area_left clearfix et_pb_bg_layout_light">
                                <div id="execphp-24" class="et_pb_widget widget_execphp">			<div class="execphpwidget">


                                    <div class="redetpb et_pb_text">
                                        <h2 class="">WHAT'S ON TV</h2>
                                    </div>
                                    <a class="show-full-list" href="http://go.zliving.com/channel_guide/z-living#current-program" target="_blank">Full List</a><div class="countrychoose chooseblock chooseblock-sd pull-right ">
                                        <a id="widget_country_chooser" href="javascript:;" data-target="#CountryModal" data-toggle="modal"><span class="flag usa"></span>
                                            USA</a>
                                    </div>
                                    <div class="whatstv"><div><div class="livenow"><img src="http://www.zliving.com/wp-content/themes/Divi/images/livenow.png" alt="LIVE NOW"/></div><div class="tvtext pull-left">
                                        <h6>Chasing The Yum</h6>
                                        <p><span>03</span> : 30PM</p>
                                    </div>
                                        <img class="imgcircle" src="http://www.zliving.com/wp-content/uploads/tvshows/Chasing_The_Yum.jpg" alt="Chasing The Yum" />
                                    </div><div><div class="tvtext pull-left notlive">
                                        <h6>The Sweet Truth</h6>
                                        <p><span>04</span> : 00PM</p>
                                    </div>
                                        <img class="imgcircle" src="http://www.zliving.com/wp-content/uploads/tvshows/The_Sweet_Truth.jpg" alt="The Sweet Truth" />
                                    </div><div><div class="tvtext pull-left notlive">
                                        <h6>Fed Up!</h6>
                                        <p><span>04</span> : 30PM</p>
                                    </div>
                                        <img class="imgcircle" src="http://www.zliving.com/wp-content/uploads/tvshows/Fed_Up.jpg" alt="Fed Up!" />
                                    </div><div><div class="tvtext pull-left notlive">
                                        <h6>The Lisa Oz Show</h6>
                                        <p><span>05</span> : 00PM</p>
                                    </div>
                                        <img class="imgcircle" src="http://www.zliving.com/wp-content/uploads/tvshows/The_Lisa_Oz_Show.jpg" alt="The Lisa Oz Show" />
                                    </div></div></div>
                                </div> <!-- end .et_pb_widget -->
                            </div>


                            <!--Health A to Z-->

                            <div class="et_pb_widget_area et_pb_widget_area_left clearfix et_pb_bg_layout_light" >
                                <div id="execphp-3" class="et_pb_widget widget_execphp" >
                                    <div
                                        class="execphpwidget"><div class="et_pb_text">
                                    <h2 class="">Health A To Z</h2>
                                </div>
                                    <div class="healthaz sidebar-bg" style="background-color: #d6d9d6">
                                        <div class="descwidget">
                                            Information on Herbs, Yoga, Complementary & Alternative Medicine and Health Conditions.
                                        </div>
                                        <div class="widgetlink">
                                            <a href="/complementary-alternative-medicine-2">Complementary & Alternative Medicine</a>
                                            <a href="/conditions">Conditions</a>
                                            <a href="/herbs">Herbs</a>
                                            <a href="/yoga">Yoga</a>
                                        </div>
                                    </div>
                                </div>
                                </div> <!-- end .et_pb_widget -->
                            </div>




                        </div><!-- .et_pb_row -->


                </div> <!-- .et_pb_section -->
            </div> <!-- .entry-content -->
                </div>
        </article> <!-- .et_pb_post -->
    </div> <!-- #main-content -->
    <!-- footer starts here -->



    <footer style="border:1px solid black" id="main-footer">
        FOOTER
        <br>Keep The Same Footer

    </footer>
    <!-- footer ends here -->
</div>
</div>

</body>
</html>