@extends('layouts.app')
@section('title', 'Home')

@section('content')


<div class="container-fluid doc_container">
<div class="left-bar">Navigation Bar</div>
<div class="container-fluid content_container">

  <div class="row">
  <div class="col-md-12" style="border: 5px solid blue; ">
   
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="border: 5px solid red; width: 100%;">
  
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <!-- MYVERSION: Added style="height: 500px" to each image to fit in containing div -->
      <div class="carousel-item active">
        <img src="images/carousel/img1.jpg" class="d-block w-100" 
        alt="First Slide">
		<div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel/img2.jpg" class="d-block w-100" 
          alt="Second Slide">
		<div class="carousel-caption">
          <h3>New York</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel/img3.jpg" class="d-block w-100" 
          alt="Third Slide">
		<div class="carousel-caption text-warning">
          <h3>Las Vegas</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  <!-- Closing carouselExampleIndicators div -->
  </div>

  </div>
  </div>
  
  
  <!-- medium md in bootstrap 5 is >=768px -->
  <!-- jumbotron1 -->
  <!-- jumbotron are no longer supported in bootstrap 5 -->
  <div class="row">
    <div class="col-md-12 text-center" style="border: 5px solid blue;">
      <div class="shadow mt-4 mb-2 p-5 bg-primary text-white rounded
        jumbotron" id="jumbotron1"> 
        <h1>Welcome to Humanr Home!</h1> 
        <p>
          The human resource galaxy. We got all you need!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
          Natus maiores quasi beatae vero autem accusamus, inventore 
          molestiae aliquam officia nobis!
        </p>
        <p>
		      <a class="btn btn-warning btn-lg text-white" role="button"> 
            Learn more 
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>  
		      </a> 
        </p>
      <!-- Closing div jumbotron--> 
      </div> 
    </div>
  </div>
  
  <!-- Partnering with Humanr -->
  <div class="row">
    <div class="col-md-12" style="border: 5px solid green; text-align: center;">
      <div class="text-white mb-2 mt-2 rounded shadow partnering" 
        id="partnering_blue_bg" style="background-color: blue;">
        <h1>Partnering with Humanr</h1> <br /><br /><br /><br />
        Are you an actor in the human resource sector? 
        Lets partner and dream together. <br /><br /><br /><br />
      <!-- closing div partnering_blue_bg -->
      </div>  
    </div>
  </div>
  
  <!-- Blog humanr -->
  <div class="row mt-2 mb-4 shadow bg-light">
    <h2 class="text-center">Our News Articles</h2>
    <!-- recent articles section from blog - two columns two rows in md -->
    <div class="col-md-6">
      <div class="article">Article 1</div>
    </div>
    <div class="col-md-6">
      <div class="article">Article 2</div>
    </div>
    <div class="col-md-6">
      <div class="article">Article 3</div>
    </div>
    <div class="col-md-6">
      <div class="article">Article 4</div>
    </div>
    <div class="mt-2 mb-2 all_btn" style="text-align: center">
      <a class="btn btn-primary btn-lg" href="#">
	    <i class="fas fa-blog" style="color: white"></i>
        Read More
      </a>
    </div>   
  </div>
  
  
  <!-- Skills and strengths -->
  <div class="row mt-2 mb-2 rounded" style="background-color: #ededed;">
    <!-- Skills and strengths - three columns in md -->
    <div class="col-md-4" style="border: 5px solid green;">
      <div class="skill_item">
        <h2>Proven Track Record</h2>
        <div class="illustration">
          <img src="" alt="track record" />>
        </div>
        <p>
          Our delivery model integrates the insight gathered from the
          thousands of assignments we have delivered across industry 
          sectors and domains.
        </p>
      </div>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
      <div class="skill_item">
        <h2>Co-creating</h2>
        <div class="illustration">
          <img src="" alt="track record" />>
        </div>
        <p>
          Our consultants collaborate deeply with client organizations 
          understand not only the stated needs but also their latent 
          talent management needs, thereby being part of future success
          stories.
        </p>
      </div>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
      <div class="skill_item">
        <h2>Context Based</h2>
        <div class="illustration">
          <img src="" alt="track record" />>
        </div>
        <p>
          Humanr HR matches the context of the employer with that of the
          potential candidate, thereby ensuring a higher retention
          rate.
        </p>
      </div>
    </div>
  </div>
  
  <!-- Sectors-jumbotron -->
  <div class="row mt-2 mb-2">
    <!-- Sectors-jumbotron - two columns in md -->
    <div class="col-md-6" style="border: 5px solid green;">
      <div class="sectors">
        Advertising, Automobile, Contact Centers, Construction
        Education, Engineering, Entertainment, Financial
      </div>
    </div>
    <div class="col-md-6" style="border: 5px solid orange;">
      <div class="jumbotron">
        We cater to a range of industries and functions therein.

        We have dedicated teams to cater to needs of each industry 
        sector. They are further specialised to hire skill-sets and 
        levels.

        IT, Outsourcing, Engineering, Infrastructure to Consumer 
        Products Services, Financial Services and Pharma.
        We find talent for full-time roles as well as contractual roles. 
        <br /><br />
        <div class="mb-2">
          <a class="btn btn-primary btn-lg" href="#">
		    <i class="fa-solid fa-user" style="color: white;"></i>
            Find Talent
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Our team slider carousel -->
  <!-- Our team - three columns in md carousel or slider -->
  <div class="row">
    <div class="header" style="text-align: center;">
      <h1>Our Team</h1>
    </div>  
  <div class="slider" id="slider_team">
    <div class="col-md-4" style="border: 5px solid green;">
      <a href="#">
        <div class="member">
          <img src="images/our-team/p000001-arc-d-triomphe.jpg" alt="Team member 1" >
          <h2>Arc Triomphe</h2>
          Founder and CEO
        </div>
      </a>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
      <a href="#">
        <div class="member">
          <img src="images/our-team/p000002-chartres-cathedral.jpg" alt="Team member 2" >
          <h2>Chartres Cathedral</h2>
          Chief Technical Officer
        </div>
      </a>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
      <a href="#">
        <div class="member">
          <img src="images/our-team/p000003-coat-of-arms.jpg" alt="Team member 3" >
          <h2>Coat Arms</h2>
          Chief Financial Officer
        </div>
      </a>
    </div>
    
    <div class="col-md-4" style="border: 5px solid green;">
      <a href="#">
        <div class="member">
          <img src="images/our-team/p000004-gallic-cock.jpg" alt="Team member 4" >
          <h2>Gallic Cock</h2>
          Chief Administrative Officer
        </div>
      </a>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
      <a href="#">
        <div class="member">
          <img src="images/our-team/p000005-marianne.jpg" alt="Team member 5" >
          <h2>Marianne Moore</h2>
          Chief Marketing Officer
        </div>
      </a>
    </div>
    <div class="col-md-4" style="border: 5px solid orange;">
       <a href="#">
        <div class="member">
          <img src="images/our-team/p000006-alsace.jpg" alt="Team member 6" >
          <h2>Alsace Cook</h2>
          Chief Financial Accountant
        </div>
      </a>
    </div>
  <!-- Closing div slider_team -->    
  </div>  
  </div>
  
  
  <!-- Candidate_jumbotron_image -->
  <div class="row mt-2 mb-2">
    <!-- Candidate-jumbotron - two columns in md -->
    <div class="col-md-6" style="border: 5px solid green;">
      <div class="jumbotron">
        <h1 class="text-primary">If you are a candidate?</h1>

         Send your CV to jobs@humanrs.org We will add your CV to 
         our database and overwrite the old CV if any. We use a
         technology tool which automatically matches the CV with
         the jobs that we are trying to fill. So, you will hear 
         from us as soon as we have a role that matches with your 
         profile. Write to info@humanrs.org
          Call and SMS us at +237 651817527.
          <br /><br />
          <div class="mt-2 mb-2">
            <a class="btn btn-primary btn-lg" href="#">
              <i class="fa-solid fa-briefcase"></i>
			  Find Jobs
            </a>
          </div>
      </div>
    </div>
    <div class="col-md-6" style="border: 5px solid orange;">
      <div class="sectors">
        Advertising, Automobile, Contact Centers, Construction
        Education, Engineering, Entertainment, Financial
      </div>
    </div>
  </div>
  
  <!-- User display carousel, get users from db and display-->
  <div class="row">
    <div class="col-md-12" style="border: 5px solid green;">
      <div class="user_display" id="user_display_home">
        
        <!-- Include jCarousel for users -->
        <div class="jcarousel-wrapper">
          <div class="jcarousel">
            <ul>
              @foreach ($users as $user)
		          <li>
			          <a href="/user/{{ $user->id }}">
			            <div class="card" style="min-height: 250px;>
			              <img class="card-img-top" src="" alt="{{ $user->name }}" />
						    <div class="card-body">
				              <h4>{{ ucfirst($user->name) }}</h4>
				              <button type="button" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-user" 
                                  style="color: white;"></i> See Profile
                              </button>
						    </div>
				          </div>
			          </a>
			        </li>
              @if (!$loop->count)
			        <li>No Users available</li>
		          @endif
	            @endforeach
	          </ul>
          </div>

          <!-- jcarousel navigation and pagination -->
          <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
          <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
          <p class="jcarousel-pagination">
          </p>

        </div>
	    
	       


      <!-- closing user_display div -->
      </div>
    </div> 
  </div>

  <!-- Contact Us -->  
    <div class="row">
      <div class="col-md-12" style="border: 5px solid green;">
        <div class="contactus" id="contactus_home">
          <h1>Contact Us</h1>
          <div class="office_address">
            Office Address
            <address>
            No. 2802 (Broadway Building),
            2nd & 3rd Floor, 27th Main Road,
            HSR Layout, Sector 1,
            Bengaluru 560102. 
            </address>
          </div>
          <div class="phone">
            Phone Number
            +91 7816 000 111
          </div>
          <div class="email">
            Email 
            Job Seekers:
            jobs@cielhr.com

            Employees / Deputees:
            helpdesk@cielhr.com

            Companies:
            info@cielhr.com
          </div>
              
          <div class="view_map">
            <button style="border: none;">
              <a class="btn btn-primary" href="#">
			    <i class="fa-solid fa-location-dot"></i>
			    View Map
			  </a>
            </button>
          </div>
        <!-- closing div contactus_home --> 
        </div>
      </div> 
    </div>

  <!-- Register tab content -->
  <div class="row">
    <div class="col-md-12" style="border: 5px solid green;">
      <div class="tab_signup" id="tab_signup_home">
        
        <div><h1>Register</h1></div>
        <ul class="nav nav-tabs"> 
          <li class="nav-item"> 
            <a class="nav-link active" data-bs-toggle="tab" href="#home"> 
              Employer 
            </a> 
          </li> 
          <li class="nav-item">
				    <a class="nav-link" data-bs-toggle="tab" href="#ios" >
				      Deputees/Employee
				    </a>
				  </li> 
          <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              href="#">
              Job Seeker
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="dropdown-item nav-link" data-bs-toggle="tab"
                  href="#jmeter">
                  Full-time
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item nav-link" data-bs-toggle="tab"
                 href="#ejb">
                  Part-time
                </a>
              </li>
            </ul>
          </li> 
        </ul> 
               
              <div class="tab-content"> 
                <div class="tab-pane container active" id="home"> 
                  <p>
                    Tutorials Point is a place for beginners in all technical areas.  
                    This website covers most of the latest technoligies and explains  
                    each of the technology with simple examples. You also have a  
                    <b>tryit</b> editor, wherein you can edit your code and  
                    try out different possibilities of the examples.
                    <a class="btn btn-primary" href="#">Register as Employer</a>
                  </p> 
                </div> 
                <div class="tab-pane container fade" id="ios"> 
                  <p>iOS is a mobile operating system developed and distributed by Apple  
                     Inc. Originally released in 2007 for the iPhone, iPod Touch, and  
                     Apple TV. iOS is derived from OS X, with which it shares the  
                     Darwin foundation. iOS is Apple's mobile version of the  
                     OS X operating system used on Apple computers.
                     <a class="btn btn-primary" href="#">Register as Employees/Deputees</a>
                     </p> 
                </div> 
                
                <div class="tab-pane container fade" id="jmeter">
                  <p>jMeter is an Open Source testing software. It is 100% pure
                    Java application for load and performance testing.
                    <a class="btn btn-primary" href="#">
                      Register as Job Seeker Full-time
                    </a>
                  </p>
                </div>
                <div class="tab-pane container fade" id="ejb">
                  <p>Enterprise Java Beans (EJB) is a development architecture
                    for building highly scalable and robust enterprise level
                    applications to be deployed on J2EE compliantTUTORIALS POINT
                    Simply Easy Learning
                    Application Server such as JBOSS, Web Logic etc.
                    <a class="btn btn-primary" href="#">
                      Register as Job Seeker Part-time
                    </a>
                  </p>
                </div>
			  <!-- Ending div tab-content -->
              </div> 

      <!-- closing div tab_signup -->
      </div>
    </div>
  </div>
  
<!-- Closing container div -->
</div>
<div class="right-bar">Advertisements</div>

<!-- Closing doc-container div -->
</div>

    
@endsection
