 <template>
<NavBar/>
<!-- breadcrum -->
    <div class="container py-4 flex justify-between">
        <div class="flex gap-3 items-center">
            <a href="index.html" class="text-primary text-base">
                <i class="fas fa-home"></i>
            </a>
            <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
            <p class="text-gray-600 font-medium">Shop</p>
        </div>
    </div>
    <!-- breadcrum end -->
     <!-- shop wrapper -->
    <div class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <!-- sidebar -->
        <div
            class="col-span-1 bg-white px-4 pt-4 pb-6 shadow rounded overflow-hidden absolute lg:static left-4 top-16 z-10 w-72 lg:w-full lg:block">
            <div class="divide-gray-200 divide-y space-y-5 relative">
                <!-- category filter -->
                <div class="relative">
                    <div
                        class="lg:hidden text-gray-400 hover:text-primary text-lg absolute right-0 top-0 cursor-pointer">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Bedroom"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">Gaming PC</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Sofa"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer">Peripherals</label>
                            <div class="ml-auto text-gray-600 text-sm">(05)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Office"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Office" class="text-gray-600 ml-3 cursor-pointer">Networking</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Outdoor"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer">Software </label>
                            <div class="ml-auto text-gray-600 text-sm">(19)</div>
                        </div>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- category filter end -->
                <!-- brand filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Brands</h3>
                    <div class="space-y-2">
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Dominik"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Dominik" class="text-gray-600 ml-3 cursor-pointer">Hp</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Karl"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Karl" class="text-gray-600 ml-3 cursor-pointer">Dell</label>
                            <div class="ml-auto text-gray-600 text-sm">(18)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Maxing"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer">MSI</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Ernest"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer">Asus</label>
                            <div class="ml-auto text-gray-600 text-sm">(12)</div>
                        </div>
                        <!-- single brand name end -->
                    </div>
                </div>
                <!-- brand filter end -->
                <!-- price filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="mix">
                    </div>
                </div>
                <!-- price filter end -->
               
               
                    
            </div>
        </div>
        <!-- sidebar end -->

        <!-- products -->
        <div class="col-span-3">
            <!-- sorting -->
            <div class="mb-4 flex items-center">
                <button
                    class="bg-primary border border-primary text-white px-10 py-3 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition lg:hidden text-sm mr-3 focus:outline-none">
                    Filter
                </button>
                <select
                    class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option>Default sorting</option>
                    <option>Price low-high</option>
                    <option>Price high-low</option>
                    <option>Latest product</option>
                </select>
                <div class="flex gap-2 ml-auto">
                    <div
                        class="border border-primary w-10 h-9 flex items-center justify-center text-white bg-primary rounded cursor-pointer">
                        <i class="fas fa-th"></i>
                    </div>
                    <div
                        class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
            <!-- sorting end -->
            <!-- product wrapper -->
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 gap-6">
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden" v-for="product in products" :key="product.ProductID">
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
        <!-- products end -->
    </div>
    <!-- shop wrapper end -->

    <Footer/>
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import Account from "../components/Account.vue";
import axios from "axios";

export default {
  name: "Shop",

  components: {
    Footer,
    NavBar,
    Account,
    
  },
  data(){
     return{
        
      products:[],
      

     }
      
  },
  created() {
  this.ListProducts();
  },
  methods: {
    ListProducts() {
        
      axios
        .get("http://localhost:7882/e-storea/products/ListProduct")
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error))
      // this.$emit("clicked", "someValue");
    },
  }
};
</script>
<style lang="scss" scoped>

</style>
