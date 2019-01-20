<template>

    <div>

            <div class="header-outs">
                    <!--banner -->
                    <div class="header-w3layouts">
                       <div class="one-headder">
                          <!--//navigation section -->

                          <menubar></menubar>

                          <div class="clearfix"> </div>
                       </div>
                    </div>
                 </div>
                 <!-- //Navigation -->
                 <!--//headder-->
                 <!-- banner -->
                 <div class="inner_page-banner one-img">
                 </div>
                 <!--//banner -->
                 <!-- short -->
                 <div class="using-border py-3">
                    <div class="inner_breadcrumb  ml-4">
                       <ul class="short_ls">
                          <li>
                            <router-link to="/">Home</router-link>
                             <span>/ /</span>
                          </li>
                          <li>About</li>
                       </ul>
                    </div>
                 </div>
                 <!-- //short-->
               
                
                 <!-- team -->
                 <section class="team py-lg-4 py-md-3 py-sm-3 py-3">
                    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
                       <h3 class="title text-center mb-sm-4 mb-3">Our Team</h3>
                       <div class="line-w3ls-title text-center mb-md-4 mb-sm-3 mb-3">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et</p>
                       </div>
                       <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 team-grad-wthree">
                             <div class="row">
                                <div class="col-lg-4 team-list-img">
                                   <img src="images/t1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 team-list-txt">
                                   <div class="team-w3layouts-list">
                                      <h4>Jhon Jozz</h4>
                                   </div>
                                   <div class="team-sub-txt mt-2">
                                      <h5>
                                         Coordinator
                                      </h5>
                                   </div>
                                   <div class="team-info mt-3">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor</p>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 team-grad-wthree">
                             <div class="row">
                                <div class="col-lg-4 team-list-img">
                                   <img src="images/t2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 team-list-txt">
                                   <div class="team-w3layouts-list">
                                      <h4>Lora Tyson</h4>
                                   </div>
                                   <div class="team-sub-txt mt-2">
                                      <h5>Artist</h5>
                                   </div>
                                   <div class="team-info mt-3">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor</p>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 team-grad-wthree mt-lg-5 mt-mb-4 mt-3">
                             <div class="row">
                                <div class="col-lg-4 team-list-img">
                                   <img src="images/t3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 team-list-txt">
                                   <div class="team-w3layouts-list">
                                      <h4>Lola Tran</h4>
                                   </div>
                                   <div class="team-sub-txt mt-2">
                                      <h5>Senior artist</h5>
                                   </div>
                                   <div class="team-info mt-3">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor</p>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 team-grad-wthree mt-lg-5 mt-mb-4 mt-3">
                             <div class="row">
                                <div class="col-lg-4 team-list-img">
                                   <img src="images/t4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 team-list-txt">
                                   <div class="team-w3layouts-list">
                                      <h4>Sharon Jozz</h4>
                                   </div>
                                   <div class="team-sub-txt mt-2">
                                      <h5>Founder </h5>
                                   </div>
                                   <div class="team-info mt-3">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor</p>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </section>
                 <!-- team -->
               
                <foot></foot>

               

    </div>

    </template>


    

    <script>
    
    export default{
        mounted(){
            this.$toasted.clear();
        }
    }
    </script>