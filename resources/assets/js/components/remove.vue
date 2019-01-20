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
                    <br>
                    
                     <!--contact -->
                     <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
                        <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
                           <h3 class="title text-center mb-sm-4 mb-3">Delete Post?</h3>
                           
                           <div class="row">
                             
                              <div class="col-lg-6 col-md-6  ">
                                 <div class="">
                                    <!--contact-map -->
                                    <form >
                                       <div class="text-left click-subscribe">
            <button type="submit" class="btn btn-danger" @click.prevent='del()'>Yes</button>
            <router-link to='/' class='btn btn-info'>No</router-link>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4 contact-right ">
                              </div>
                           </div>
                        </div>
                     </section>
                     <!--//contact  -->
                    
    
        </div>
        
        </template>


        <script>
        
        export default{
        
                methods:{
                        del(){
                                fetch('/del/' + this.$route.params.id)
                                .then(res => res.json())
                                .then(res => {
                                        this.$toasted.show('Deleted!');
                                })
                                .then(res => {
                        this.$router.push({name: 'index'});
                        })
                        }
                }

        }
        </script>