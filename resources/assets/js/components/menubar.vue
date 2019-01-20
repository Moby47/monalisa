<template>

     <!--//navigation section -->
     <nav class="navbar navbar-expand-lg navbar-light">
        <div class="hedder-up">
           <ul>
              <li>
                 <h1><router-link class="navbar-brand" to="/">Jimell</router-link></h1>
              </li>
              <li>
                 <div class="sub-headder">
                    <h2><router-link to="/">Signature</router-link></h2>
                 </div>
              </li>
              <li>
                 <div class="call-us">
                    <p>+234 807 474 747</p>
                 </div>
              </li>
           </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
           <ul class="navbar-nav ">
              <li class="nav-item active">
                 <router-link class="nav-link" to="/">Home <span class="sr-only"></span></router-link>
              </li>
              <li class="nav-item">
                 <router-link to="/about" class="nav-link ">About</router-link>
              </li>
              <li class="nav-item" v-if='isauth()'>
                  <router-link to="/post" class="nav-link ">Admin</router-link>
               </li>
              <li class="nav-item" v-if='!isauth()'>
                    <a href="#" @click.prevent='loginmodal()' class="nav-link">Login</a>
                 </li>
                 <li class="nav-item" v-if='!isauth()'>
                        <a href="#" @click.prevent='regmodal()' class="nav-link">Register</a>
                     </li>
                     <li class="nav-item" v-if='isauth()'>
                        <a href="#" @click.prevent='logout()' class="nav-link">Logout</a>
                     </li>
                     
           </ul>
        </div>

        <modal name="login">
            <form>
                  <br>
   <input type='text' v-model='username' name='username' class='form-control form-group' placeholder="Username"/>
   <input type='password' v-model='password' name='password' class='form-control form-group' placeholder="password"/>
      <button class='btn' @click.prevent='login()'>login</button>   
      </form>
          </modal>

          <modal name="reg">
                  <form>
                        <br>
         <input type='text' v-model='Rusername' name='Rusername' class='form-control form-group' placeholder="Username"/>
         <input type='password' v-model='Rpassword' name='Rpassword' class='form-control form-group' placeholder="password"/>
            <button class='btn' @click.prevent='reg()'>Register</button>   
            </form>
                </modal>

     </nav>
     <!--//navigation section -->

</template>

<script>
      export default{
            data(){
                  return{
                        username:'',
                        password: '',
                        Rusername:'',
                        Rpassword: '',
                  }
            },
      methods:{
            loginmodal(){
                  //pass henry as name params
                  //this.username = 'mob';
                  this.$modal.show('login');
            },
            regmodal(){
                  
                  this.$modal.show('reg');
            },

            login(){
                  var input = {'name':this.username, 'password':this.password}
                  axios.post('/customlogin',input)
                  .then(res => {
                        var token = res.data.token;
                        console.log('toke is  ' + token);
                        if(token){
                              localStorage.setItem('token',token);
                              console.log('token found and stored');
                              this.$router.push({name:'post'})
                        }else{
                              var token = null;   
                              console.log('token is null');
                        }
                  })
            },

            isauth(){
                  if(localStorage.getItem('token')){
                        console.log('Authenticated');
                        return true;
                  }else{
                        console.log('Not Authenticated');
                        return false;
                  }
            },

            logout(){
                  localStorage.removeItem('token');
                  console.log('logged out');
                  this.$router.push({name:'index'});
            },

            reg(){
                  var input = {'name':this.Rusername, 'password':this.Rpassword}
                  axios.post('/customreg',input)
                  .then(res => {
                        console.log(res.data);
                  })
            },
            
            beforeOpen (event) {
                  //do before modal load
                 // @before-open="beforeOpen"
                 //,{ name: 'Henry' }
              //this.username = event.params.name;
            }
      }

      }
      
</script>