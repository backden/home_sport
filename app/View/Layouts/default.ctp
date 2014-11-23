<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
  <head>
	<?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
    </title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
  echo $this->Html->css('animate');
  //echo $this->Html->css('bootstrap.min');
  echo $this->Html->css('bootstrap_cosmos.min');
  echo $this->Html->css('/font-awesome/css/font-awesome.min', null, array('inline' => true));
  if (0) { 
    echo $this->Html->css('/AdminLTE/css/AdminLTE');
  }
  echo $this->Html->css('style');
  echo $this->Html->css('main_style');
  echo $this->Html->css('horizontal');
  echo $this->Html->css('/color/default');
  echo $this->Html->css('font_styles');
  
  echo $this->Html->script('jquery.min');
  echo $this->Html->script('bootstrap.min');
  echo $this->Html->script('jquery.easing.min');
  echo $this->Html->script('jquery.scrollTo');
//  echo $this->Html->script('scroll/portfolio.pack.min');
//  echo $this->Html->script('scroll/spin.min');
//  echo $this->Html->script('scroll/jquery.touchSwipe.min');
  echo $this->Html->script('scroll/sly.min');
  echo $this->Html->script('wow.min');
  echo $this->Html->script('custom');
  
		echo $this->fetch('meta');
	?>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <!--    <div id="preloader">
          <div id="load"></div>
        </div>-->

    <nav class="navbar navbar-custom navbar-fixed-top nav-menu-fixed" role="navigation">
      <div class="container" id="top-menus">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1>LOGO HERE</h1>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="" style="display: none;">
              <div class="input-group" style="width: 96%; padding-top: 2px;">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              </div>
            </li>
            <li class=""><div class="separate-ver-line"></div></li>
            <li class="active sign-up-collapse" id='sign_up_btn'><a class="" data-toggle="modal" data-target="#modal_login"><?php echo _("sign_up");?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo _("language"); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Example menu</a></li>
                <li><a href="#">Example menu</a></li>
                <li><a href="#">Example menu</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">

      <div class="slogan">
        <h2>WELCOME TO <span class="text_color">SQUAD</span> </h2>
        <h4>WE ARE GROUP OF GENTLEMEN MAKING AWESOME WEB WITH BOOTSTRAP</h4>
        <?php echo $this->fetch('content'); ?>
      </div>
      <div class="">
        <a class="btn btn-lg"><?php //echo _("sign_up"); ?></a>
      </div>
      <div class="page-scroll">
        <a order="1" href="#section1" class="btn btn-circle first-next-section">
          <i class="fa fa-chevron-down animated"></i>
        </a>
      </div>
    </section>
    <!-- /Section: intro -->

    <!-- Section: about -->
    <section id="section1" class="home-section text-center">
      <div class="heading-about">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                  <h2>About us</h2>
                  <i class="fa fa-2x fa-angle-down"></i>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-lg-2 col-lg-offset-5">
            <hr class="marginbot-50">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="team boxed-grey">
                <div class="inner">
                  <h5>Anna Hanaceck</h5>
                  <p class="subtitle">Pixel Crafter</p>
                  <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow bounceInUp" data-wow-delay="0.5s">
              <div class="team boxed-grey">
                <div class="inner">
                  <h5>Maura Daniels</h5>
                  <p class="subtitle">Ruby on Rails</p>
                  <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow bounceInUp" data-wow-delay="0.8s">
              <div class="team boxed-grey">
                <div class="inner">
                  <h5>Jack Briane</h5>
                  <p class="subtitle">jQuery Ninja</p>
                  <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow bounceInUp" data-wow-delay="1s">
              <div class="team boxed-grey">
                <div class="inner">
                  <h5>Tom Petterson</h5>
                  <p class="subtitle">Typographer</p>
                  <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                </div>
              </div>
            </div>
          </div>
        </div>		
      </div>
      <div class="page-scroll">
        <a order="2" href="#section2" class="btn btn-circle next-section" style="color: black;">
          <i class="fa fa-chevron-down animated"></i>
        </a>
      </div>
    </section>
    <!-- /Section: about -->


    <!-- Section: services -->
    <section id="section2" class="home-section text-center bg-gray">

      <div class="heading-about">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                  <h2>Our Services</h2>
                  <i class="fa fa-2x fa-angle-down"></i>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5">
            <hr class="marginbot-50">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInLeft" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="img/icons/service-icon-1.png" alt="" />
                </div>
                <div class="service-desc">
                  <h5>Print</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="img/icons/service-icon-2.png" alt="" />
                </div>
                <div class="service-desc">
                  <h5>Web Design</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="img/icons/service-icon-3.png" alt="" />
                </div>
                <div class="service-desc">
                  <h5>Photography</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="img/icons/service-icon-4.png" alt="" />
                </div>
                <div class="service-desc">
                  <h5>Cloud System</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
              </div>
            </div>
          </div>
        </div>		
      </div>
      <div class="page-scroll">
        <a order="3" href="#section3" class="btn btn-circle next-section" style="color: black;">
          <i class="fa fa-chevron-down animated"></i>
        </a>
      </div>
    </section>
    <!-- /Section: services -->




    <!-- Section: contact -->
    <section id="section3" class="home-section text-center">
      <div class="heading-contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                  <h2>Get in touch</h2>
                  <i class="fa fa-2x fa-angle-down"></i>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-lg-2 col-lg-offset-5">
            <hr class="marginbot-50">
          </div>
        </div>
        <div class="scrollbar">
          <div class="handle">
            <div class="mousearea"></div>
          </div>
        </div>
        <div id="content-scroll-h" class="frame" style="height: 400px;">
          <ul class="">
          <?php $i = 0; while ($i < 10) { ?>
          <li class="box-container">
            <div class="box box-primary" style="max-height: 400px;">
              <div class="box-header">
                <h3 class="box-title">Primary Solid Box <?php echo $i; ?></h3>
                <div class="box-tools pull-right">
                </div>
              </div>
              <div class="box-body">
                <p>Box class: <code>.box.box-solid.box-primary</code>
                amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                berliner weisse wort chiller adjunct hydrometer alcohol aau!
                sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                </p>
              </div><!-- /.box-body -->
            </div>
          </li>
          <?php $i++; } ?>
          </ul>
        </div>
      </div>	
    </section>
    <!-- /Section: contact -->

    <!-- Modal -->
    <div class="modal fade bg-aqua" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow-y: hidden">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="display: none;">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#sign_in_form" data-toggle="tab">Log In</a></li>
              <li><a href="#sign_up_form" data-toggle="tab">Sign Up</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="sign_in_form">
                <form class="form-horizontal">
                  <fieldset>
                    <legend style="display: none;">Login</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-12 control-label">Email</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-12 control-label">Password</label>
                      <div class="col-lg-12">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Checkbox
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-12 text-right">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
              <div class="tab-pane fade" id="sign_up_form">
                <form class="form-horizontal">
                  <fieldset>
                    <legend style="display: none;">Sign Up</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-12 control-label">Email</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-12 control-label">Password</label>
                      <div class="col-lg-12">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-12 control-label">Retype Password</label>
                      <div class="col-lg-12">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-12 text-right">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">

              </div>
              <div class="col-lg-6">

              </div>
            </div>
          </div>
          <div class="modal-footer" style="display: none;">
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="main-footer" id="section4">
      <div class="footer-sidebars-wrapper">

        <div id="footer-sidebars" data-rows="5">
          <div class="row" data-num="0" style="margin-right: 0px">
            <aside class="col-lg-2" style="border-right: whitesmoke 1px solid;">
              <section id="text-2" class="widget widget_text">			<div class="textwidget"><img style="margin-top: 100px;" src="http://medigenehomoeocare.com/PBYINC/wp-content/uploads/2014/09/f_logo.png"></div>
              </section>						</aside>
            <aside class="col-lg-2">
              <section id="text-3" class="widget widget_text"><h4 class="widget-title">CONTACT  US</h4>			<div class="textwidget"><p>P.O. Box 3036<br>
                    Hyattsville, Maryland 20784<br>
                    United States</p>
                  <p>Tel: 240-459-8265<br>
                    E-mail:info@pbyinc.com</p>
                  <p><a style="color:#ED2B94;" href="">Get Directions on the map</a></p>
                </div>
              </section>						</aside>
            <aside class="col-lg-2">
              <section id="nav_menu-13" style="border-right: whitesmoke 1px solid;" class="widget widget_nav_menu"><h4 class="widget-title">MAIN LINKS</h4><div class="menu-bottom-links-container"><ul id="menu-bottom-links" class="menu"><li id="menu-item-22573" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22472 current_page_item menu-item-22573"><a href="http://medigenehomoeocare.com/PBYINC/">HOME</a></li>
                    <li id="menu-item-22734" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22734"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=22619">ABOUT US</a></li>
                    <li id="menu-item-22748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22748"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=22178">PROGRAM</a></li>
                    <li id="menu-item-22733" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22733"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=22546">GET INVOLVED</a></li>
                    <li id="menu-item-22577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22577"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=22548">MEDIA</a></li>
                    <li id="menu-item-22735" class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-22735"><a href="http://medigenehomoeocare.com/PBYINC/?tribe_events_cat=events">EVENTS</a></li>
                    <li id="menu-item-22731" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22731"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=277">BLOG</a></li>
                    <li id="menu-item-22732" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22732"><a href="http://medigenehomoeocare.com/PBYINC/?page_id=22179">CONTACT US</a></li>
                  </ul></div></section>						</aside>
            <aside class="col-lg-6" style="border-right: whitesmoke 1px solid;">
              <section id="text-5" class="widget widget_text"><h4 class="widget-title">WHY US</h4>			<div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
              </section>						</aside>
          </div>
        </div>

      </div>
    </footer>
    <!-- end footer -->
  </body>

</html>
