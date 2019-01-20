<template>
<div>
       <!--sing-in-->
       <section class="sign-up py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title mb-2 text-center">Sign up to our newsletter</h3>
               <div class="line-w3ls-title text-center mb-md-5 mb-sm-4 mb-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et</p>
               </div>
               <form action="#" method="post">
                  <div class="row wls-contact-mid">
                     <div class="col-md-4 form-group contact-forms">
            <input type="text" class="form-control mb-0" placeholder=" Name" name='YourName' v-model='name' v-validate='"required"'>
            <transition name="fadeLeft">
                <span v-show="errors.has('YourName')">{{ errors.first('YourName') }}</span>
               </transition>
                     </div>
                     <div class="col-md-4 form-group contact-forms">
     <input type="email" class="form-control mb-0" placeholder="Email" name='YourMail' v-model='mail' v-validate='"required|email"'>
     <transition name="fadeLeft">
        <span v-show="errors.has('YourMail')">{{ errors.first('YourMail') }}</span>
       </transition>
                     </div>
                     <div class="col-md-4 click-subscribe">
                        <button type="submit" class="btn btn-block click-me" @click.prevent='sub()'>Sign Up</button>
                     </div>
                  </div>
               </form >
            </div>
         </section>
         <!--//sing-in-->

        <footer class="py-lg-5 py-md-4 py-3">
                <div class="container">
                   <div class="row">
                      <div class="col-lg-4 col-md-3 footer-bottom">
                         <h4> Service</h4>
                         <div class="footer-top mt-lg-4 mt-md-3 mt-3">
                            <ul >
                               <li>
                                  <h6>Paraffin Wax</h6>
                               </li>
                               <li>
                                  <h6>Massage</h6>
                               </li>
                               <li>
                                  <h6>Skin Care</h6>
                               </li>
                               <li>
                                  <h6>Nail Art</h6>
                               </li>
                               <li>
                                  <h6>Manicure</h6>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-lg-4 col-md-5 footer-bottom">
                         <h4> Contact Us</h4>
                         <div class="footer-top mt-lg-4 mt-md-3 mt-3">
                            <p class="pt-2"><span>Address</span> :Broome St,10002,<br>Canada New York City 90210.</p>
                            <p class="pt-2"> <span> Phone</span> :+(000) 123 4565 32</p>
                            <p class="pt-2"><span>Email</span>   :<a href="mailto:info@example.com">info@example1.com</a> 
                            </p>
                         </div>
                      </div>
                      <div class="col-lg-4 col-md-4 footer-bottom">
                         <h4>Social Icons</h4>
                         <div class="icons-footer mt-lg-4 mt-md-3 mt-3">
                            <ul>
                               <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                               <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                               <li><a href="#"><span class="fa fa-rss"></span></a></li>
                               <li><a href="#"><span class="fa fa-vk"></span></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </footer>
             <div class="copy-bottom-txt text-center py-3">
                    <p> 
   <!-- © 2018 Polish. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
   -->        © 2018 Polish. All Rights Reserved
    </p>
                 </div>
</div>

</template>


<script>

export default{
        data(){
                return{
                        name: '',
                        mail:''
                }
        },

        methods: {
                sub(){
                        this.$validator.validateAll().then(() => {

if (!this.errors.any()) {
// call form submission logic
var input={'name':this.name, 'mail':this.mail};
                       axios.post('/sub',input)
                       .then(res => {
                               this.$toasted.show('Subscribed!');
                       })
}else{
        this.$toasted.show('Check the errors...'); 
}
})
                      
                }
        }
}

</script>