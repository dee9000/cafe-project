<?php include 'navigation.php';?>

  
      <div class="container-fluid">
         <div class="jumbotron header-jumbotron">
            <img src="img/logo-light.png" height="350" width="350" alt="logo" class="animate__animated animate__flip">
            <h1 class="display-3 animate__animated animate__flipInX text-center">School House Cafe</h1>
            <h3 class="animate__animated animate__backInUp text-center">Your one stop cafe central for everyone.</h3>
            <h3 class="animate__animated animate__backInUp text-center">View Our Menu</h3>
            <!--arrow animation-->
            <div class='mouse-wrapper'>
               <div class="mouse-arrow">
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="jumbotron jumbotron-welcome">
            <section class="section about-section" id="about">
               <div class="container">
                  <div class="row align-items-center justify-content-around flex-row-reverse">
                     <div class="col-lg-6">
                        <div class="about-text">
                           <h3 class="dark-color" data-aos="fade-down">Welcome to the School house cafe</h3>
                           <h4 class="theme-color" data-aos="fade-left">Let the good times roll!</h4>
                           <p data-aos="fade-up">The School House Cafe has been set up by Spa School to provide work experience for its pupils, all of whom have a diagnosis of autism. Older pupils at Spa School help run the cafe, supported by staff from the school and Rossana the cafe manager. They get a chance to learn a range of skills useful in future employment.</p>
                           <div class="btn-bar">
                              <a class="px-btn theme" href="#">Read More..</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 text-center">
                        <div class="about-img">
                           <img src="img/cups.png" data-aos="fade-up" class="responsive">
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <!--carousel for popular choices-->
      <div class="container-fluid">
         <div class="jumbotron jumbotron-carousel">
            <section class="pt-5 pb-5">
               <div class="container">
                  <div class="row">
                     <div class="col-6">
                        <h3 class="mb-3" data-aos="fade-up">Popular Choices</h3>
                     </div>
                     <div class="col-6 text-right">
                        <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                     <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="row mr-5">
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image1.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Capuccino</h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image3.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Long Black</h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image1.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Caffe Latte</h4>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="row mr-5">
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image3.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Capuccino</h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image3.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Caffe Latte</h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/image3.png">
                                          <div class="card-body">
                                             <h4 class="card-title">Long Black</h4>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <!-- Button trigger modal -->
                   <div class="text-center ingridients_api">
                   <button type="button" class="btn btn-hows_it_made" data-toggle="modal" data-target="#exampleModal">
                  How's it made?
                  </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content modal-content-cocoa">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CHOOSE YOUR COCOA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form class="form-group" id="form"> <!--changed from div to form-->
                           <select class="form-control" id="drinks" name="drinks">
                          
                         
                           </select>
                        </form>
                        <div>
                           <img src="" alt="" id="image">
                           <span id="title"></span>
                           <ul id="list" class="container">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, facere aliquam dignissimos accusantium ipsum nesciunt autem labore voluptatibus quae minima laudantium cumque dicta impedit doloremque magnam neque excepturi eius pariatur.
                           </ul>

                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <div class="container-fluid">
         <div class="jumbotron jumbotron-spa-school">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                     <div class="row align-items-center" data-aos="fade-right">
                        <div class="col-lg-6 col-md-6 col-6">
                           <div class="row" >
                              <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                 <div class="card work-desk  border-0 ">
                                    <img src="img/image4.png" class="img-fluid" alt="Image"  />
                                    <div class="img-overlay bg-dark"></div>
                                 </div>
                              </div>
                              <!--end col-->
                              <div class="col-12">
                                 <div class="mt-4 pt-2 text-right">
                                    <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--end row-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-6 col-md-6 col-6">
                           <div class="row">
                              <div class="col-lg-12 col-md-12">
                                 <div class="card work-desk  border-0 ">
                                    <img src="img/image6.png"  class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                 </div>
                              </div>
                              <!--end col-->
                              <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                 <div class="card work-desk  border-0 ">
                                    <img src="img/image5.png"  class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                 </div>
                              </div>
                              <!--end col-->
                           </div>
                           <!--end row-->
                        </div>
                        <!--end col-->
                     </div>
                     <!--end row-->
                  </div>
                  <!--end col-->
                  <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                     <div class="section-title ml-lg-5">
                        <h3 class="text-custom font-weight-normal mb-3" data-aos="fade-down">Spa School</h3>
                        <h4 class="title mb-4" data-aos="fade-left">Camberwell</h4>
                        <h4 class="title mb-4" data-aos="fade-right">Bermondsey</h4>
                        <p class="mb-0" data-aos="fade-up">Spa is a special school in Southwark for pupils aged 11-19 with autism and caters for young people with a wide range of abilities.</p>
                        <p class="mb-0" data-aos="fade-up">Our expertise in helping young people with autism has been officially recognised by the National Autistic Society’s Autism Accreditation Programme, and by Ofsted.</p>
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <!--enr row-->
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="jumbotron jumbotron-feedback">
            <div class="text-center">
               <div class="card-body">
                  <h2 class="card-title" data-aos="fade-down">Let us know how we are doing!</h2>
                  <h5 class="card-title">"The Good Times are Here!"</h5>
                  <p class="card-text">Here at spa-cafe we strive to give you best experience, and your feedback will help the pupils improve.</p>
                  <p class="card-text">The feedback will go a long way in improving training and giving encouragement to the trainees.</p>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-feedback" data-toggle="modal" data-target="#exampleModalCenter">
                  Click for Feedback
                  </button>
                  <!-- Modal -->
                  <form action="process-form.php" method="POST" novalidate>
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Feedback for Staff</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <img src="img/logo2.png" height="100" width="100" alt="logo" class="animate__animated animate__flip">
                                 <!-- form -->

                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                  </div>
                  <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="Name@example.com" name="email">
                  </div>
                  <div class="form-group">
                  <label for="rate_your_experience">Rate your experience today with 5 being excellent</label>
                  <select class="form-control" id="rate_your_experience" name="rate_your_experience">
                  <option>...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="name_of_staff">Name of Staff</label>
                  <input type="text" class="form-control" id="name_of_staff" placeholder="Name of Staff" name="name_of_staff">
                  </div>
                  <div class="form-group">
                  <label for="rate_service_staff">Rate the service from the staff with 5 being excellent</label>
                  <select class="form-control" id="rate_service_staff"  name="rate_service_staff">
                  <option>...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  </select>
                  </div>

                  <div class="form-group">
                  <label for="feedback">Any other feedback you have for the staff</label>
                  <textarea class="form-control" id="feedback" rows="3" name="feedback"></textarea>
                  </div>
                  <div class="form-group form-check">
                 <input type="checkbox" class="form-check-input" id="terms" name="terms">
                 <label class="form-check-label" for="terms" required>Terms and Conditions</label>
                 </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit">
                  </div>

                  </form>
                  </div>

                  </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="container-fluid">
         <footer class="jumbotron jumbotron-footer">
            <div class="container py-5">
               <div class="row py-3">
                  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                     <h6 class=" font-weight-bold mb-4">About</h6>
                     <p class="text-muted mb-4">Contact Us</p>
                     <p class="text-muted mb-4">About Us</p>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                     <h6 class=" font-weight-bold mb-4">Help</h6>
                     <p class="text-muted mb-4">Payments</p>
                     <p class="text-muted mb-4">Shipping</p>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                     <h6 class=" font-weight-bold mb-4">Policy</h6>
                     <p class="text-muted mb-4">Return Policy</p>
                     <p class="text-muted mb-4">Terms of Use</p>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                     <h6 class="font-weight-bold mb-4">Company</h6>
                     <p class="text-muted mb-4">Login</p>
                     <p class="text-muted mb-4">Register</p>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-lg-0">
                     <h6 class=" font-weight-bold mb-4">Registered Office Address</h6>
                     <p class="text-muted mb-4">Here, write the complete address of the Registered office address along with telephone number.</p>
                     <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa  fa-1x fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-1x fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-1x fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-1x fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-1x fa-google"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="javascript/app2.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
         AOS.init({
           offset:100,
           duration:1000
         });
      </script>
   </body>
</html>
