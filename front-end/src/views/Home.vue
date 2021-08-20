<template>

<NavBar/>
<!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36 relative " v-bind:style="{background:img }">
        <div class="container">
            <!-- banner content -->
            <h1 class="xl:text-6xl md:text-5xl text-4xl text-gray-800 font-medium mb-4">
               SUMMERTIME <br class="hidden sm:block"> UPGRADE
            </h1>
            <p class="text-base text-gray-600 leading-6">
                Level Up Your Gaming Room 
            </p>
            <!-- banner button -->
            <div class="mt-12">
                <a href="/shop" class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md uppercase hover:bg-transparent
               hover:text-primary transition">
                    Shop now
                </a>
            </div>
            <!-- banner button end -->
            <!-- banner content end -->
        </div>
    </div>
    <!-- banner end -->
<!-- banner end -->

    <!-- features -->
    <div class="container py-16">
        <div class="lg:w-10/12 grid md:grid-cols-3 gap-3 lg:gap-6 mx-auto justify-center">

            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img :src="require('../assets/images/icons/delivery-van.svg')" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">free shipping</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Order over $200</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img :src="require('../assets/images/icons/money-back.svg')" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Money returns</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">30 Days money return</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img :src="require('../assets/images/icons/service-hours.svg')" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Customer support</p>
                </div>
            </div>
            <!-- single feature end -->

        </div>
    </div>
    <!-- features end -->
  <!-- top new arrival -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
        <!-- product wrapper -->
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
            <!-- single product -->

            <div class="group rounded bg-white shadow overflow-hidden" v-for="product in products" :key="product">
              
                <!-- product image -->
                <div class="relative">
                    <img :src="require('../assets/images/products/'+product.image1+'.jpg')" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <router-link v-bind:to="'/view/'+product.ProductID"><a href="/view"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        </router-link>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <router-link v-bind:to="'/view/'+product.ProductID"><a href="/view">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            {{product.ProductName}}
                        </h4>
                    </a></router-link>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">${{(product.Price*85)/100}}</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">${{product.Price}}</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <form class="" method="post">
                <!-- <input type="text" :value="product.ProductID" @input="id = $event.target.value"> -->
                <!-- product content end -->
                <!-- product button -->
                <button @click="addToCart(product.ProductID);" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                <a href="#" 
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                </button>
                </form>
                <!-- product button end -->
            </div>
            <!-- single product end -->
           
            
            
           
        </div>
        <!-- product wrapper end -->
    </div>
    <!-- top new arrival end -->

    <!-- recomended for you -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">recomended for you</h2>
        <!-- product wrapper -->
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden" v-for="product in productRe" :key="product.ProductID">
                <!-- product image -->
                <div class="relative">
                    <img :src="require('../assets/images/products/'+product.image1+'.jpg')" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <router-link v-bind:to="'/view/'+product.ProductID"><a href="/view"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a></router-link>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <router-link v-bind:to="'/view/'+product.ProductID"><a href="/view">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            {{product.ProductName}}
                        </h4>
                    </a></router-link>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">${{product.Price}}</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            
      
        </div>
        <!-- product wrapper end -->
    </div>
    <!-- recomended for you end -->

<Footer/>
 

   

</template>

<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import axios from "axios";

export default {
  name: "Home",
  components: {
    Footer,
    NavBar,
  },
  data: () =>({
     
      products: [],
      productRe:[],
      img:'url('+require('../assets/images/banner-bg.jpg')+')',
      
      
      
  }),
  created() {
    this.NewArrival();
    this.ListProducts();
  },
 
  methods: {
     
    NewArrival() {
      axios
        .get("http://localhost:7882/e-storea/products/NewArrival")
        .then((response) => (this.productRe = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error));
      // this.$emit("clicked", "someValue");
    },
    addToCart(ProductID) {
      var cart = {
        userID : localStorage.getItem("userID"),
        ProductID: ProductID,
        Quantity: '1',
     
      };
      // var getslot = import('../methods.js');

      axios({
        method: "post",
        url: "http://localhost:7882/e-storea/carts/AddToCart",
        data: cart,
      }).then(function(response) {
        
      });
   

      
    },
     ListProducts() {
        
      axios
        .get("http://localhost:7882/e-storea/products/ListProduct")
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error))
      // this.$emit("clicked", "someValue");
    },

    


  },
  

};
</script>
<style lang="scss" scoped>
 .banner{
   background-image: url('../assets/images/banner-bg.jpg');
 }
</style>
