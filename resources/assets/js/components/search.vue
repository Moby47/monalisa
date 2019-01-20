<template>

<div>

        <div class="header-outs" id="header">
                <!--banner -->
                <div class="header-w3layouts">
                   <div class="one-headder">
    
                     <menubar></menubar>
                     
                      <div class="clearfix"> </div>
                   </div>
                </div>
                
             </div>
             <!--//banner -->
            
            
               
             <!--blog-->
             <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
                <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
                   <h3 class="title mb-2 text-center">Search Result</h3>
                   <div class="line-w3ls-title text-center mb-md-5 mb-sm-4 mb-3">
                      <p></p>
                   </div>
    
            
               <div class="pagination ">
                        <button class="btn btn-default" @click.prevent="posts(pagination.prev_page_url)"
                                :disabled="!pagination.prev_page_url">
                            Previous
                        </button>
    
                        <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
    
                        <button class="btn btn-default" @click="posts(pagination.next_page_url)"
                                :disabled="!pagination.next_page_url">Next
                        </button>
                    </div> 
    <br>
  
    <span v-for='con in result' v-bind:key='con.id' >
                   <div class="row blog-bloged-about">
                      <div class="col-lg-4 blog-wed-img">
                   <router-link v-bind:to='{name: "single", params: {id: con.id}}'> <img :src="'/storage/images/'+con.image" class="img-thumbnail" alt=""> </router-link> 
                      </div>
                      <div class="col-lg-8 blog-wthree-info">
                         <div class="blog-matter mb-3">
                            <h6><router-link v-bind:to='{name: "single", params: {id: con.id}}'>{{con.title}}</router-link></h6>
                         </div>
                         <div class="news-date mt-3">
                            <ul>
                               <li><span class="fa fa-calendar" aria-hidden="true"></span><a href="#">{{con.created_at}}</a></li>
                               <li><span class="fa fa-thumbs-up"></span><a href="/show">5 likes</a></li>
     <!--<li><span class="fa fa-comments"></span><router-link v-bind:to='{name: "single", params: {id: con.id}}'>5 Comments</router-link></li>
     -->   </ul>
                         </div>
                         <div class="event-blog-w3pvt mt-lg-5 mt-md-4 mt-3">
                            <p>{{con.des}}</p>
                         </div>
                         <router-link :to='{name: "edit", params: {id: con.id}}' class='btn btn-info'>Edit</router-link>
                          <router-link class='btn btn-danger' :to="{name: 'remove', params: {id: con.id}}">Delete</router-link>
                      </div>
                   </div>
          </span>
    <br>
          <div class="pagination ">
                <button class="btn btn-default" @click.prevent="posts(pagination.prev_page_url)"
                        :disabled="!pagination.prev_page_url">
                    Previous
                </button>
    
                  <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
    
                <button class="btn btn-default" @click="posts(pagination.next_page_url)"
                        :disabled="!pagination.next_page_url">Next
                </button>
            </div>
        
                </div>
             </section>
             <!--//blog-->
             <!--tips-tops-->
           
          
            
             <foot></foot>
    

</div>

</template>



<script>

export default{
    data(){
        return {
            result:[],
            query: '',
            pagination: []
        }
    },

    mounted(){
        
        this.posts();
    },

    methods: {

        posts(page_url){
            var   page_url = page_url || '/search/';
            this.query = this.$route.params.query;

            fetch(page_url + this.query)
        .then(response => response.json())
        .then(response => {
         this.result = response.data;
         this.makepagination(response.meta, response.links);
        });
        },

        makepagination(meta, links){
    var pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                     }
    this.pagination = pagination;
},
    }
}

</script>