<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL::asset('/image/use.png') ?>">
          @section('title')
        @show
    <!-- Bootstrap core CSS -->
     <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/cover.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/toastr.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/liveurl.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/owl.carousel/css/owl.carousel.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/owl.carousel/css/owl.theme.default.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">

          <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/toastr.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/jquery.liveurl.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/parsley.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/owl.carousel/js/owl.carousel.min.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="animated fadeIn">

@section('header')
@show
<?php
/*echo '<pre>';
print_r($details);
echo '</pre>';*/
 ?>
  

<div style="position: relative; margin-top: 30px;width: 100%">
<div style="position: absolute;
            background: #000;
            width: 100%;
            height: 315px;
            opacity: .3;
            margin-top: -44px;"></div>
<div style="margin-right: 15px;
            margin-left: 15px;" class="owl-carousel row container">
  <?php foreach ($details['events'] as $key => $value) {

?>
            <a class="eventCard--hasGroup" href="/single-events/{{ str_slug($value['event_title']) }}">
  <div class="eventCard-group inverted" style="background-image: url(http://startupsclub.org/wp-content/uploads/2015/06/12764534_10204454851046069_2273984407365722684_o.jpg);">
    <h4 class="text--heavy text--big">{{ $value['event_title'] }}</h4>
  </div>

  <div class="eventCard-event chunk">
    <h5 class="text--small text--heavy">  
    <span style="height: 20px;"><i class="fa fa-map-marker">
      
    </i> {{ $value['event_venue'] }}</span>
    </h5>

    
  
  
                  
                   <span style="height: 40px;"><span><i class="fa fa-clock-o"></i> {{ date('jS F Y',strtotime($value['event_date'])) }}</span>
                    <span><i class="fa fa-globe" aria-hidden="true"></i> {{ $value['event_city'] }}</span></span>
                
               

  </div>
</a>
  
<?php } ?>

</div>
<div style="position: absolute;width: 100%; top: 70px;">
<button class="flickity-prev-next-button previous  customPrevBtn float-left" type="button" aria-label="previous">
<svg viewBox="0 0 100 100">
<path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow fill"></path></svg></button>

<button class="flickity-prev-next-button next float-right customNextBtn" type="button" aria-label="next"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow fill" transform="translate(100, 100) rotate(180) "></path></svg></button>
</div>
</div>


    <!-- Begin page content -->
<div class="container page-content ">


      <div class="row">
        <!-- left links -->
        <div class="col-md-3">
          <div class="profile-nav">
            <div class="widget">
              <div class="widget-body">
                <?php if(!empty(session()->get('SessionID'))){ ?>
                <div class="user-heading round" style="cursor:pointer;" onclick="myprofilehref('<?php echo '/profile/'.$details['sc_unique_name'] ?>');">
                  <a href="<?php echo '/profile/'.$details['sc_unique_name'] ?>">
                      <img src="<?php echo $details['sc_profile_pic'] ?>" alt="">
                  </a>
                  <h1>{{ $details['sc_fullname'] }}</h1>
                  <p>@<?php echo $details['sc_unique_name'] ?></p>
                </div>
                <?php } ?>
                <input type="hidden" id="role"  value="{{ session()->get('role') }}">
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#"> <i class="fa fa-user"></i> News feed</a></li>
                                  <?php if(!empty(session()->get('SessionID'))){ ?>
<li>
                    <a href="/messages">
                      <i class="fa fa-envelope"></i> Messages
                      <!-- <span class="label label-info pull-right r-activity">9</span> -->
                    </a>
                  </li>
                  <?php } ?>
                  <li><a href="http://startupsclub.org/monthly-meetings/"> <i class="fa fa-calendar"></i> Events</a></li>
                  <li><a href="/find"> <i class="fa fa-share"></i> Find</a></li>
                  <li><a href="#"> <i class="fa fa-image"></i> Ask</a></li>

                 <!--  <li><a href="#"> <i class="fa fa-floppy-o"></i> Saved</a></li> -->
                </ul>
              </div>
            </div>

       <div class="widget">
        <h4>Knowledge</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/knowledgesessions/" target="_blank"> <i class="fa fa-globe"></i> Knowledge Sessions</a></li>
                  <li><a href="http://startupsclub.org/black-box/"> <i class="fa fa-gamepad"></i> Mentoring</a></li>
                  <li><a href="http://startupsclub.org/demoday/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Master Class</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>

            <div class="widget">
              <h4>Practice</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/monthly-meetings/" target="_blank"> <i class="fa fa-globe"></i> Monthly Meetups</a></li>
                  <li><a href="/edit-membership/"> <i class="fa fa-gamepad"></i> Pioneer Membership</a></li>
                  <li><a href="http://startupsclub.org/demoday/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Demo Day</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>
             <div class="widget">
                <h4>Growth</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/virtual-footprints/" target="_blank"> <i class="fa fa-globe"></i> Digital Marketing</a></li>
                  <li><a href="http://startupsclub.org/member-partner/" target="_blank"> <i class="fa fa-gamepad"></i> Member Partner</a></li>
                  <li><a href="http://startupsclubpost.com/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Startups Club Post</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>

          </div>
        </div><!-- end left links -->


   @yield('content')




        <!-- right posts -->
        <div class="col-md-3">
          <!-- Friends activity -->
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption">Upcoming Meetings</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">
              <div class="card">
                <div class="content">
                   <ul class="list-unstyled team-members">
                 
                    <li>
                         <div class="row">
                        <div class="col-xs-4">
                          <div>
                              <span class="event_date"> 17 Jun 2017</span>
                          </div>
                        </div>
                        <div class="col-xs-8">
                          <b><a href="http://startupsclub.org/events/businesses-investors-seek-del/" target="_blank">Businesses Investors Seek – DEL</a></b><br>
                          <span class="event_desc">Investors invest because there is an end goal they want to reach. Even they do not know whether your business will be successful or not, but, they look for elements which offer them protection.</b></span>
                          <span class="event_location">Delhi.</span>
                          <span class="timeago event_time" >11:00 AM onwards</span>
                        </div>
                      </div>   
                    </li>
                    <li>
                       <div class="row">
                        <div class="col-xs-4">
                          <div>
                              <span class="event_date"> 18 Jun 2017</span>
                          </div>
                        </div>
                        <div class="col-xs-8">
                          <b><a href="http://startupsclub.org/events/finance-non-finance-founders-blr/" target="_blank">Finance for Non-Finance Founders – CHE</a></b><br>
                          <span class="event_desc">Finance is often made to look like a deep enigma which involves a lot of esoteric knowledge. The truth of the matter is that finance involves addition subtraction multiplication and division.</b></span>
                          <span class="event_location">Chennai.</span>
                          <span class="timeago event_time" >11:00 AM onwards</span>
                        </div>
                      </div>   
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- End Friends activity -->

          <!-- People You May Know -->
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption">Announcements</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">
              <div class="card">
                  <div class="content">
                      <ul class="list-unstyled team-members">
                           <?php foreach ($details['announce_array'] as $key => $value) {
                        ?>
                          <li>
                              <div class="row">
                                  <h5> {{ $value['announcement'] }} </h5>
                              </div>
                          </li>
                            <?php } ?>
                      </ul>
                  </div>
              </div>
            </div>
          </div><!-- End people yout may know -->


          
        </div><!-- end right posts -->
      </div>
    </div>

   @section('footer')
        @show
        <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/home.js') ?>"></script>

  </body>
</html>
