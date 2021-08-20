<template>
<NavBar/>
    <!-- breadcrum -->
    <div class="py-4 container flex gap-3 items-center">
        <a href="\" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">Shopping Cart</p>
    </div>
    <!-- breadcrum end -->

    <!-- cart wrapper -->
    <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
        <!-- product cart -->
        <div class="xl:col-span-9 lg:col-span-8">
            <!-- cart title -->
            <div class="bg-gray-200 py-2 pl-12 pr-20 xl:pr-28 mb-4 hidden md:flex">
                <p class="text-gray-600 text-center">Product</p>
                <p class="text-gray-600 text-center ml-auto mr-16 xl:mr-24">Quantity</p>
                <p class="text-gray-600 text-center">Total</p>
            </div>
            <!-- cart title end -->

            <!-- shipping carts -->
            <div class="space-y-4">
                <!-- single cart -->
                <div
                    class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap" v-for="product in products" :key="product">
                    <!-- cart image -->
                    <div class="w-32 flex-shrink-0">
                        <img :src="require('@/assets/images/products/'+product.image1+'.jpg')" class="w-full">
                    </div>
                    <!-- cart image end -->
                    <!-- cart content -->
                    <div class="md:w-1/3 w-full">
                        <h2 class="text-gray-800 mb-3 xl:text-xl textl-lg font-medium uppercase">
                            {{product.ProductName}}
                        </h2>
                        <p class="text-primary font-semibold">${{product.Price}}</p>
                        
                        
                    </div>
                    <!-- cart content end -->
                    <!-- cart quantity -->
                    <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" @click="compt--">-</div>
                        <div class="h-8 w-10 flex items-center justify-center">{{compt}}</div>
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" @click="compt++">+</div>                    </div>
                    <!-- cart quantity end -->
                    <div class="ml-auto md:ml-0">
                        <p class="text-primary text-lg font-semibold" >${{product.Price*compt}}</p>
                        <input type="text"  :value="product.Price"  hidden >

                    </div>
                    <div class="text-gray-600 hover:text-primary cursor-pointer" @click="deleteProduct(product.id)">
                        <input type="text" v-model="id"  hidden >
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
                <!-- single cart end -->
            
            </div>
            <!-- shipping carts end -->
        </div>
        <!-- product cart end -->
        <!-- order summary -->
        <div class="xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0" >
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
            <div class="space-y-1 text-gray-600 pb-3 border-b border-gray-200">
                <div class="flex justify-between font-medium">
                    <p>Subtotal</p>
                    <p>$122</p>
                </div>
                <div class="flex justify-between">
                    <p>Delivery</p>
                    <p>Free</p>
                </div>
                <div class="flex justify-between">
                    <p>Tax</p>
                    <p>Free</p>
                </div>
            </div>
            <div class="flex justify-between my-3 text-gray-800 font-semibold uppercase">
                <h4>Total</h4>
                <h4>$122</h4>
            </div>

            <!-- searchbar -->
            <div class="flex mb-5">
                <input type="text"
                    class="pl-4 w-full border border-r-0 border-primary py-2 px-3 rounded-l-md focus:ring-primary focus:border-primary text-sm"
                    placeholder="Coupon">
                <button type="submit"
                    class="bg-primary border border-primary text-white px-5 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition text-sm font-roboto">
                    Apply
                </button>
            </div>
            <!-- searchbar end -->

            <!-- checkout -->
            <a href="/checkout" class="bg-primary border border-primary  px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
             hover:text-primary transition text-sm w-full block text-center">
                Process to checkout
            </a>
            <!-- checkout end -->
        </div>
        <!-- order summary end -->
    </div>
    <!-- cart wrapper end -->
    <Footer/>
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import axios from "axios";

export default {
  name: "Cart",

  components: {
    Footer,
    NavBar,
    
  },
  
  data:()=> ({
      compt:1,
      
    products: [],
    return: {
 
    },
  }),
  created() {
    this.cart();
  },
  methods: {
      subtotal(){


      },
     
    cart() {
        var id = localStorage.getItem("userID");
      axios
        .get("http://localhost:7882/e-storea/carts/cart/"+id)
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error));
      // this.$emit("clicked", "someValue");
    },
    
    deleteProduct(id) {
      axios
      .delete(
         "http://localhost:7882/e-storea/carts/Delete/"+id)
         .then((response)=> {
        this.products = this.products.filter((product)=>{
          return product.id !== id;
        });
        
      })
      .catch((error)=>console.log(error));
      
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