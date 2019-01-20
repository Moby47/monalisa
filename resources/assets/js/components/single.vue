<template>

<div>

        <div class="header-w3layouts">
                <div class="one-headder">
 
                  <menubar></menubar>
                  
                   <div class="clearfix"> </div>
                </div>
             </div>

<!-- single -->
<div class="single-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row inner_sec_info pt-md-4">
                <!-- left side -->
                <div class="col-lg-8 single-left">
                    <div class="single-left1">
        <img :src="'/storage/images/' + content.image" alt=" " class="img-fluid" />
              
                        <ul class="blog_list my-3">
                            <li>{{content.created_at}}</li>
                            <li class="mx-3">
                                <a href="#">
                            <i class="far fa-heart mr-1"></i>
                                    22</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-comments mr-1"></i>
                                    {{com_count}}</a>
                            </li>
                        </ul>
                        <h5 class="card-title">
     <a href="#" class="text-dark">{{content.title}}</a>
                        </h5>
                        <p>{{content.des}}</p>
                    </div>
                 
                 
                    <div class="comments my-5">
                        <h3 class="blog-title ">Recent Comments</h3>
                        <div class="comments-grids mt-4">
                            <div class="media mt-4">
                                <div class="media-body comments-grid-right">
 

                                        <span v-for='com in coms'>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="images2/f.png" alt="Generic placeholder image">
                                        </a>
                
                   <div class="media-body comments-grid-right">
                                            <h4>{{com.name}}</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">{{com.created_at}}
                                                </li>
                                                <li>
                                                   <!-- <a href="#" class="font-weight-bold">Reply</a> -->
                                                </li>
                                            </ul>
                                            <p>{{com.msg}}</p>
                                     </div>
                                     </div>
                                </span>
                                   
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="leave-coment-form">
                        <h3 class="blog-title  mb-4">Leave a Reply</h3>
                        <form >
                            <input type='hidden' v-model='content.id' name='id'/>
                            <div class="row">
                                <div class="col-sm-6 form-group">
             <input type="text" name="Name" class="form-control" placeholder="Name" v-model='name' v-validate='"required"'>
             <transition name="fadeLeft">
                    <span v-show="errors.has('Name')">{{ errors.first('Name') }}</span>
                   </transition>
                                </div>
                                <div class="col-sm-6 form-group">
             <input type="email" name="Email" class="form-control" placeholder="Email" v-model='mail' v-validate='"required|email"'>
             <transition name="fadeLeft">
                    <span v-show="errors.has('Email')">{{ errors.first('Email') }}</span>
                   </transition>
                                </div>
                            </div>
                            <div class="form-group">
        <textarea name="Message" class="form-control" placeholder="Your comment here..." v-model='msg' v-validate='"required"'></textarea>
        <transition name="fadeLeft">
                <span v-show="errors.has('Message')">{{ errors.first('Message') }}</span>
               </transition>
                            </div>
                            <div class="mm_single_submit">
                                <input type="submit" value="Post Comment" @click.prevent='comment()'>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- //left side -->
                <!-- right side -->
                <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                    <div class="event-right1">
                        <div class="search1">
      <form class="form-inline" action="#" method="post">
       <input name='query' v-model='query' class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search" >
   <input @click.prevent='searchmeth()' class="btn bg-dark text-white rounded-0 mt-3 w-100" type="submit" value="Search">
                            </form>
                        </div>
                       
                        <div class="posts p-4 border">
                            <h3 class="blog-title ">Other Events</h3>
                            <div class="posts-grids">

<span v-for='ev in events'>
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                         <a href="#" class="text-primary" @click.prevent='show(ev)'>
                                            <img v-bind:src="'/storage/images/' + ev.image" alt=" " class="img-fluid" />
                         </a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                        <h4>
        <a href="#" class="text-primary" @click.prevent='show(ev)'>{{ev.title}}</a>
                                        </h4>
                                        <ul class="wthree_blog_events_list mt-2">
                                            <li class="mr-2 text-dark">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{ev.created_at}}</li>
                                           
                                        </ul>
                                    </div>
                                </div>
     </span>              

                             
                            </div>
                        </div>
                       
                    </div>
                    <aside class="side-bar my-4">
                      

                       
                        <div class="video-sec bc_sub">
                            <h4>Featured Video</h4>
                            <div class="video-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe width="460" height="250" src="https://www.youtube.com/embed/aI-QmC5asnA" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="tags mt-4 p-4 border">
                        <div class="footerv2-w3ls">
                            <h3 class="blog-title">Over 500k + Readers</h3>
                            <ul class="social-iconsv2 agileinfo pt-3">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //right side -->
            </div>
        </div>
    </div>
    <!-- //single -->

    
</div>

</template>


 
<script>
    export default {

        data(){
            return{
                content: [],
                events: [],
                name:'',
                mail:'',
                msg: '',
                coms: [],
                com_count:'',
                YourMail:'',
                YourName:'',
                query: '',
            }
        },
        mounted() {
    
            this.single();
            this.posts();
            this.comment_read();
            this.$toasted.clear();
        },
        methods:{
            single(){
                fetch('/single/' + this.$route.params.id)
                .then(response => response.json())
                .then(response => {
                    this.content = response.data;
                })
            },

            posts(){
                fetch('/posts')
            .then(res => res.json())
            .then(res =>{
                this.events = res.data;
            })
            },

            show(ev){
                fetch('/single/' + ev.id)
                .then(response => response.json())
                .then(response => {
                    this.content = response.data;
                    //reload comments read
                   this.comment_read(ev.id);
                   this.$toasted.clear();
                })
            },

            comment(){
                this.$validator.validateAll().then(() => {

                    if (!this.errors.first('name') && !this.errors.first('mail') && !this.errors.first('msg')) {

                 var input = {'id': this.content.id, 'name':this.name, 'mail':this.mail, 'msg':this.msg};
              
                axios.post('/comment',input,{
            onUploadProgress: uploadEvent =>{
            this.postloading= ('Completed ' + Math.round(uploadEvent.loaded / uploadEvent.total * 100)+ ' %');
            this.$toasted.show(this.postloading);
            //reload comments read
            this.comment_read();
            
                  }
                })
                
                    }else{
            this.$toasted.show('Check the errors...');
                    }
                })
              
                
            },//meth end

            comment_read(id){
                var id = id || this.$route.params.id;
                fetch('/coms/' + id)
                .then(response => response.json())
                .then(response => {
                    this.coms = response.data;
                    this.comment_count(id);
                })
            },

            comment_count(id){
                var id = id || this.$route.params.id;
                fetch('/com-count/' + id)
                .then(response => response.json())
                .then(response => {
                    this.com_count = response;
                })
            },

            

        searchmeth(){
         this.$router.push({name: "search", params: {query: this.query}});
         },

        }
    }
</script>

