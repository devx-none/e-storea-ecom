<template>
<NavBar />
 
     <!-- form wrapper -->
    <div class="container py-16" >
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">
                create an acocunt
            </h2>
            <p class="text-gray-600 mb-6 text-sm">
                Register here if you don't have account
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            First Name <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box" placeholder="elmahdi" v-model="first_name">
                    </div>
                      <div>
                        <label class="text-gray-600 mb-2 block">
                            Last Name <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box" placeholder="rammach" v-model="last_name">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <input type="email" class="input-box" placeholder="example@mail.com" v-model="email">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Password <span class="text-primary">*</span></label>
                        <input type="password" class="input-box" placeholder="type password" v-model="password">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Confirm Password 
                            <span class="text-primary">*</span>
                        </label>
                        <input type="password" class="input-box" placeholder="confirm your password">
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <input type="checkbox" id="agreement"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                        I have read and agree to the
                        <a href="#" class="text-primary">terms & conditions</a>
                    </label>
                </div>
                <div class="mt-4">
                    <button type="button" @click="register();"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        create account
                    </button>
                </div>
            </form>
          
            <p class="mt-4 text-gray-600 text-center">
                Already have an account? <a href="/login" class="text-primary">Login Now</a>
            </p>
        </div>
    </div>
    <!-- form wrapper end -->
    <Footer/>
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import axios from "axios";

export default {
  name: "Register",
  

  components: {
    Footer,
    NavBar,
    
  },
    data: () => ({
    step: 1,
    users :[],
    error :false,
    return: {
      first_name:'', 
      last_name:'',  
      email:'',
      password:'',
     
      
  },
  }),
  methods: {
   register(){
      var user ={
        first_name:this.first_name,
        last_name:this.last_name,
        email : this.email,
        password : this.password

    }
    axios({
      method: 'post',
      url:'http://localhost:7882/e-storea/users/register',
      data: user
    })
    .then(function(response) {
           window.location.href = './login';

    })
     .catch(function(error){
       
      })

    
  }
}
};
</script>
<style lang="scss" scoped>
// .carousel {
//   height: 70vh;
//   margin-top:1rem;
  

// }
</style>