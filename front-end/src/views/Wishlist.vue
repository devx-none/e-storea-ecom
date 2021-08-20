<template>
<NavBar/>
 <!-- breadcrum -->
    <div class="py-4 container flex gap-3 items-center">
        <a href="index.html" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">My Account</p>
    </div>
    <!-- breadcrum end -->
    <div class="container lg:grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <Account/>
 <!-- account content -->
        <div class="col-span-9 mt-6 lg:mt-0 space-y-4">
            <!-- single wishlist -->
            <div v-for="product in products" :key="product.ProductID"
                class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap">
                <!-- cart image -->
                <div class="w-28 flex-shrink-0">
                    <img :src="require('../assets/images/products/'+product.image1+'.jpg')"  class="w-full">
                </div>
                <!-- cart image end -->
                <!-- cart content -->
                <div class="md:w-1/3 w-full">
                    <h2 class="text-gray-800 mb-1 xl:text-xl textl-lg font-medium uppercase">
                        {{product.ProductName}}
                    </h2>
                    <p class="text-gray-500 text-sm">Availability: <span class="text-green-600">In Stock</span></p>
                </div>
                <!-- cart content end -->
                <div class="">
                    <p class="text-primary text-lg font-semibold">${{product.Price}}</p>
                </div>
                <!-- <input type="text" :value="product.ProductID" v-model="id" class=""> -->
                <a href="#" @click="addToCart(product.ProductID);"
                    class="ml-auto md:ml-0 block px-6 py-2 text-center text-sm  bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                    Add to cart
                </a>
                <div class="text-gray-600 hover:text-primary cursor-pointer" @click="deleteProduct(product.id)">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- single wishlist end -->
          
        </div>
        <!-- account content end -->
 </div>
    <Footer/>
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import Account from "../components/Account.vue";
import axios from "axios";

export default {
  name: "Wishlist",

  components: {
    Footer,
    NavBar,
    Account,
    
  },
  data(){
     return{
        
      products:[],
      productsCat:[],
      id:'',
      

     }
      
  },
  created() {
    this.wishlist();
  },
  methods: {
      subtotal(){


      },
     
    wishlist() {
        var id = localStorage.getItem("userID");
      axios
        .get("http://localhost:7882/e-storea/wishlists/wishlist/"+id)
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error))
      // this.$emit("clicked", "someValue");
    },

    deleteProduct(id) {
      axios
      .delete(
         "http://localhost:7882/e-storea/wishlists/Delete/"+id)
         .then((response)=> {
        this.products = this.products.filter((product)=>{
          return product.id !== id;
        });
        
      })
      .catch((error)=>console.log(error));
      
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
    


  }

};
</script>
<style lang="scss" scoped>
// .carousel {
//   height: 70vh;
//   margin-top:1rem;
  

// }
</style>