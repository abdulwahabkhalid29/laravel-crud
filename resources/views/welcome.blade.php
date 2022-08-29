@extends('layout.scaffold')
@section('content')
    <style>
      .back{
        background-image: url(assets/img/xbg_2.jpg.pagespeed.ic.UrtJzl_WMI.webp);
        background-size: 100%;
        background-position: 100% 50%;
        width: 100%;
        margin-top:-50px;
      }
      .back1{
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.511), rgba(0, 0, 0, 0.56)) , url(assets/image/xbg_1.jpg.pagespeed.ic.ypIMA79ZQw.webp);
        background-size: 100%;
        position: 100%;
        width: 100%;
        
      }
    </style>
</head>
<body>
  <div class="container-fluid bg-light back">
    <div class="container">
        <div class="mt-5 pt-5 ml-5 pb-5">
          <p class="text-secondary">We have 850,000 great job offers you deserve!</p>
            <h1 class="text-light"><b> Your Dream <br> <span style="font-family:cursive;"> Job is Waiting </span></b></h1><br><br>
            <ul class="nav nav-tabs " style="border: none;" role="tablist">
                <li class="nav-item">
                  <a class="bg-primary text-light nav-link active" data-toggle="tab" href="#Overview">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-success text-light" data-toggle="tab" href="#Founder">Founder</a>
                </li>
              </ul>
              <div  class="pb-3 tab-content bg-light w-75">
                <div id="Overview" class="container tab-pane active"><br>
                    <div class="row">
                      <div class="col-md-3 mt-3">
                          <input type="text" class="form-control" placeholder="eg. Adam scott">
                      </div>
                      <div class="col-md-3 mt-3">   
                          <select class="form-control">
                            <option value="1">Category</option>  
                            <option value="1">Full Time</option>
                            <option value="1">Part Time</option>
                          </select>
                      </div>
                      <div class="col-md-3 mt-3">
                        <input type="text" class="form-control" placeholder="location">
                      </div>
                      <div class="col-md-3 mt-3">
                        <button class="btn btn-primary form-control">Search</button>
                      </div>    
                    </div>
                </div>
                <div id="Founder" class="container tab-pane fade"><br>
                  <div class="row">
                    <div class="col-md-3 mt-3">
                        <input type="text" class="form-control" placeholder="eg. Adam scott">
                    </div>
                    <div class="col-md-3 mt-3">   
                        <select class="form-control">
                          <option value="1">Category</option>
                          <option value="1">Tamporary</option>
                          <option value="1">Ferelance</option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-3">
                      <input type="text" class="form-control" placeholder="location">
                    </div>
                    <div class="col-md-3 mt-3">
                      <button class="btn btn-primary form-control">Search</button>
                    </div>    
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      <div class="container-fluid bg-light pt-5 pb-5">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-3 ">
              <img src="{{asset('assets/img/Capture1.PNG')}}" alt="Capture1">
              <p>Search Millions of Jobs</p>
              <p class="text-secondary"><small>A small river named Duden flows <br> by their place and supplies.</small></p>
            </div>
            <div class="col-md-3 ">
              <img src="{{asset('assets/img/Capture2.PNG')}}" alt="Capture1">
              <p>Search Millions of Jobs</p>
              <p class="text-secondary"><small>A small river named Duden flows <br> by their place and supplies.</small></p>
            </div>
            <div class="col-md-3 ">
              <img src="{{asset('assets/img/Capture3.PNG')}}" alt="Capture1">
              <p>Search Millions of Jobs</p>
              <p class="text-secondary"><small>A small river named Duden flows <br> by their place and supplies.</small></p>
            </div>
            <div class="col-md-3 ">
              <img src="{{asset('assets/img/Capture4.PNG')}}" alt="Capture1">
              <p>Search Millions of Jobs</p>
              <p class="text-secondary"><small>A small river named Duden flows <br> by their place and supplies.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container  pt-5 mt-5 pb-5">
        <p class="text-center">Categories work wating for you</p>
        <h2 class="text-center">Current <span style="font-family: Arial, Helvetica, sans-serif;"> Job Posts</span></h2>
        <div class="row mt-5">
          <div class="col-md-3 ">
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Web Development <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">500</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Graphic Desing <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">1000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Multimeidia <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">2000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Adversiting <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">900</span></button>
          </div>
          <div class="col-md-3">
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Educatin & tearning <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">3,500</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">English <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">1,500</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Social Media <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">1000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Writing <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">2.500</span></button>
          </div>
          <div class="col-md-3">
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">PHP Programing <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">5,500</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Project Mangment <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">2,500</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Finanace Mangment <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">800</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Office & Admin <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">7000</span></button>
          </div>
          <div class="col-md-3">
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Web Desing <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">8000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Customer Service <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">4000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Markiting & Sale <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">3000</span></button>
            <button style="border: #bafbab 1px solid; border-radius: 10px; font-size: small;" class="mt-4 w-100 p-2 bg-light">Software Development <span style="background: #e9f9e5; border: #5DD285 1px solid; color: #5DD285;" class="pl-1 pr-1 ">1,360</span></button>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-light pt-5 pb-5">
        <div class="container mt-5">
          <p class="text-center">Recently Added Jobs</p>
          <h2 class="text-center">Recents  <span style="font-family: Arial, Helvetica, sans-serif;"> Jobs </span></h2>
          <div class="row">
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Frontend Development <span class="badge   rounded-pill bg-primary text-light" style="height: 30px;"><small> Partime</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Full Stack Developer <span class="badge   rounded-pill bg-warning text-light"><small> Full Time</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/red.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Open Source Interactive Developer <span class="badge   rounded-pill bg-info text-light"><small> Freelance</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Frontend Development <span class="badge   rounded-pill bg-secondary text-light"><small> Internship</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Open Source Interactive Developer <span class="badge   rounded-pill bg-danger text-light"><small> Temporary</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Frontend Development <span class="badge   rounded-pill bg-primary text-light"><small> Partime</small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
            <div class="col-md-12 p-3 mt-5 shadow-lg" style="background: white;">
              <h3> Full Stack Developer <span class="badge   rounded-pill bg-secondary text-light"><small>Freelance </small></span></h3>
              <p class="mt-3 text-primary"><img src="{{asset('assets/img/1.PNG')}}" alt="1">Facebook, Inc. <img src="{{asset('assets/img/2.PNG')}}" alt="2" ><span class="text-secondary"> Western City, UK</span></p>
              <button class="btn  btn-primary" style="float: right; margin-top: -50px; margin-right: 50px;">Apply Job</button><img src="{{asset('assets/img/3.PNG')}}" alt="3" style="float: right; margin-top: -50px;">
            </div>
          </div>
          <div class="text-center mt-5 ">
          <a href="#"><span><img src="{{asset('assets/img/00.PNG')}}" alt=""></span></a>
          </div>
        </div>
      </div>
      <div class="container-fluid back1 pb-5">
        <div class="container">
          <div class="row pt-5 text-light">
            <div class="col-md-3 pt-5 text-center">
              <h1>1,350,000</h1>
              <small>Jobs</small>
            </div>
            <div class="col-md-3 pt-5 text-center">
              <h1>40,000</h1>
              <small>Members</small>
            </div>
            <div class="col-md-3 pt-5 text-center">
              <h1>30,000</h1>
              <small>Resume</small>
            </div>
            <div class="col-md-3 pt-5 text-center">
              <h1>10,5000</h1>
              <small>Company</small>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-light">
      <div class="container mt-5 pt-5 pb-5 ">
        <p class="text-center">Testimonial</p>
        <h2 class="text-center">Happy    <span style="font-family: Arial, Helvetica, sans-serif;"> Clients </span></h2>
        <div class="row">
          <div class="col-md-4 mt-5">
            <img src="{{asset('assets/img/11.PNG')}}" alt="11">
            <p class="text-secondary" style="font-size: small;">Far far away, behind the word mountains, far <br> from the countries Vokalia and Consonantia, <br> there live the blind texts.</p>
            <p>Roger Scott</p>
            <p class="text-secondary" style="font-size: small;">Marketing Manager</p>
          </div>
          <div class="col-md-4 mt-5">
            <img src="{{asset('assets/img/22.PNG')}}" alt="11">
            <p class="text-secondary" style="font-size: small;">Far far away, behind the word mountains, far <br> from the countries Vokalia and Consonantia, <br> there live the blind texts.</p>
            <p>Roger Scott</p>
            <p class="text-secondary" style="font-size: small;">Marketing Manager</p>
          </div>
          <div class="col-md-4 mt-5">
            <img src="{{asset('assets/img/33.PNG')}}" alt="11">
            <p class="text-secondary" style="font-size: small;">Far far away, behind the word mountains, far <br> from the countries Vokalia and Consonantia, <br> there live the blind texts.</p>
            <p>Roger Scott</p>
            <p class="text-secondary" style="font-size: small;">Marketing Manager</p>
          </div>
        </div>
      </div>
      </div>
      <div class="container-fluid bg-light pt-5 pb-5">
        <div class="container mt-5">
          <p class="text-center">Our Blog</p>
          <h2 class="text-center">Recent     <span style="font-family: Arial, Helvetica, sans-serif;"> Blog </span></h2>
          <div class="row">
            <div class="col-md-3 mt-5">
              <img src="{{asset('assets/img/ximage_1.jpg.pagespeed.ic.cY8J7mM7KW.webp')}}" alt="xbg_1" width="100%">
              <p class="text-secondary" style="font-size: small;">DECEMBER 2, 2018 ADMIN</p>
              <p>Even the all-powerful Pointing has no control about the blind texts</p>
              <p class="text-secondary" style="font-size: small;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
            </div>
            <div class="col-md-3 mt-5">
              <img src="{{asset('assets/img/ximage_2.jpg.pagespeed.ic.KiEvuOw7R2.webp')}}" alt="xbg_1" width="100%">
              <p class="text-secondary" style="font-size: small;">DECEMBER 2, 2018 ADMIN</p>
              <p>Even the all-powerful Pointing has no control about the blind texts</p>
              <p class="text-secondary" style="font-size: small;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
            </div>
            <div class="col-md-3 mt-5">
              <img src="{{asset('assets/img/ximage_3.jpg.pagespeed.ic.-BUz1LQ4Y6.webp')}}" alt="xbg_1" width="100%">
              <p class="text-secondary" style="font-size: small;">DECEMBER 2, 2018 ADMIN</p>
              <p>Even the all-powerful Pointing has no control about the blind texts</p>
              <p class="text-secondary" style="font-size: small;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
            </div>
            <div class="col-md-3 mt-5">
              <img src="{{asset('assets/img/ximage_4.jpg.pagespeed.ic.OKt2EKLAhd.webp')}}" alt="xbg_1" width="100%">
              <p class="text-secondary" style="font-size: small;">DECEMBER 2, 2018 ADMIN</p>
              <p>Even the all-powerful Pointing has no control about the blind texts</p>
              <p class="text-secondary" style="font-size: small;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-primary text-center pb-5">
        <div class="container text-light pt-5">
          <h1>Subcribe to our Newsletter</h1>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and <br> Consonantia, there live the blind texts. Separated they live in</p>
          <div class="pt-5 input-group md-3">
            <input type="text" class="form-control " style="margin-left: 200px; margin-top: -30px;" placeholder="Enter E-mail Address">
            <div class="input-group-append">
                <a href="#"><span class="input-group-text text-light bg-success" style="margin-right: 200px; margin-top: -30px;">Subscribe</span></a>
            </div>
        </div>
        </div>
      </div>

@endsection
