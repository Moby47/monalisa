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
                           <h3 class="title text-center mb-sm-4 mb-3">Edit Post</h3>
                           
                           <div class="row">
                             
                              <div class="col-lg-6 col-md-6  ">
                                 <div class="wthree-info-para">
                                    <!--contact-map -->
                                    <form >
                                       <div class=" form-group contact-forms">
         <input type="text" class="form-control" placeholder="Title" v-model='post.title'  v-validate='"required"' name='title'>
         <transition name="fadeLeft">
         <span v-show="errors.has('title')">{{ errors.first('title') }}</span>
        </transition>
                                       </div>
                                       <div class=" form-group contact-forms">
        <input type="file" class="form-control"  @change='imageselect' v-validate='"required|image"' name='image'>
        <transition name="fadeLeft">
                <span v-show="errors.has('image')">{{ errors.first('image') }}</span>
               </transition>
                                       </div>
                                       <div class="form-group contact-forms">
           <textarea class="form-control" rows="1" placeholder="Description.." v-model='post.des'  v-validate='"required"' name='description'></textarea>
           <transition name="fadeLeft">
                <span v-show="errors.has('description')">{{ errors.first('description') }}</span>
               </transition>
                                       </div>
                                       <div class="text-left click-subscribe">
            <button type="submit" class="btn btn-block click-me" @click.prevent='update(post.id)'>Update</button>
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
        
                data(){
            return{
                  post: {title: '', des: '', id: ''},
                    
                     image: '',
                     imagefile: '',
                     postloading: ''
            }
        },
        mounted() {
    
            this.posts();
            
        },
        methods:{

                imageselect(event){
                    this.image = event.target.files[0];
                    this.imagefile = (this.image);
                },

              posts(){
                fetch('/edit/' + this.$route.params.id)
            .then(res => res.json())
            .then(res =>{
                this.post = res.data;
                console.log(this.post);
            })
            },

            update(id){

                    this.$validator.validateAll().then(() => {

            if (!this.errors.any()) {
        // call form submission logic
        const formdata  = new FormData();

formdata.append('imagefile',  this.imagefile);
formdata.append('title', this.post.title);
formdata.append('des', this.post.des);
formdata.append('id', this.post.id);

axios.post('/update',formdata,{
onUploadProgress: uploadEvent =>{
this.postloading= ('Completed ' + Math.round(uploadEvent.loaded / uploadEvent.total * 100)+ ' %');
this.$toasted.show(this.postloading);
}
})
.then(res => {
  this.$router.push({name: 'index'});
})
            }else{
this.$toasted.show('Check the errors...');    
            }
            });
                 
                
                }//post end

        }
        }
        </script>