<template>
  <NavBar />
  <!-- form wrapper -->
  <div class="container py-16">
    <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
      <h2 class="text-2xl uppercase font-medium mb-1">LOGIN</h2>
      <p class="text-gray-600 mb-6 text-sm">
        Login if you are a returing customer
      </p>
      <form action="">
        <div class="space-y-4">
          <div>
            <label class="text-gray-600 mb-2 block">
              Email Address <span class="text-primary">*</span>
            </label>
            <input
              type="email"
              class="input-box"
              placeholder="example@mail.com"
              v-model="email"
            />
          </div>
          <div>
            <label class="text-gray-600 mb-2 block"
              >Password <span class="text-primary">*</span></label
            >
            <input
              type="password"
              class="input-box"
              placeholder="type password"
              v-model="password"
            />
          </div>
        </div>
        <div class="flex items-center justify-between mt-6">
          <div class="flex items-center">
            <input
              type="checkbox"
              id="agreement"
              class="text-primary focus:ring-0 rounded-sm cursor-pointer"
            />
            <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
              Remember Me
            </label>
          </div>
          <a href="#" class="text-primary">Forgot Password?</a>
        </div>
        <div class="mt-4">
          <button
            type="button"
            @click="login();"
            class="
              block
              w-full
              py-2
              text-center text-white
              bg-primary
              border border-primary
              rounded
              hover:bg-transparent hover:text-primary
              transition
              uppercase
              font-roboto font-medium
            "
          >
            Login
          </button>
        </div>
      </form>

      <p class="mt-4 text-gray-600 text-center">
        Don't have an account?
        <a href="/register" class="text-primary">Register Now </a>
      </p>
    </div>
  </div>
  <!-- form wrapper end -->

  <Footer />
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import axios from "axios";

export default {
  name: "Login",

  components: {
    Footer,
    NavBar,
  },
  data: () => ({
    step: 1,
    users: [],
    error: false,
    return: {
      email: "",
      password: "",
    },
  }),
  methods: {
    login() {
      var user = {
        email: this.email,
        password: this.password,
      };
      axios({
        method: "post",
        url: "http://localhost:7882/e-storea/users/login",
        data: user,
      })
        .then(function (response) {
          localStorage.setItem("userID", response.data[0].userID);

          var ref = localStorage.getItem("userID");
          if (ref != null) {
            window.location.href = "./";
          }else{
            // window.location.href = "./login";
                        console.log(ref);


          }
        })
        .catch(function (error) {});
    },
  },
};
</script>
<style lang="scss" scoped>
// .carousel {
//   height: 70vh;
//   margin-top:1rem;

// }
</style>
