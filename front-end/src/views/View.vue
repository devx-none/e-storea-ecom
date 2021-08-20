 <template>
<NavBar/>
<!-- breadcrum -->
    <div class="py-4 container flex gap-3 items-center" v-for="product in products" :key="product.ProductID">
        <a href="/" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <a href="/shop" class="text-primary text-base font-medium uppercase">
            Shop
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">{{product.ProductName}}</p>
    </div>
    <!-- breadcrum end -->
    <!-- product view -->
    <div class="container pt-4 pb-6 grid lg:grid-cols-2 gap-6" v-for="product in products" :key="product.ProductID">
        <!-- product image -->
        <div>
            <div>
                <img id="main-img" :src="require('../assets/images/products/'+product.image1+'.jpg')" class="w-full">
            </div>
            <div class="grid grid-cols-5 gap-4 mt-4">
                <div>
                    <img :src="require('../assets/images/products/'+product.image2+'.jpg')" class="single-img w-full cursor-pointer border border-primary">
                </div>
                <div>
                    <img :src="require('../assets/images/products/'+product.image3+'.jpg')" class="single-img w-full cursor-pointer border"/>
                </div>
              
                
            </div>
        </div>
        <!-- product image end -->
        <!-- product content -->
        <div>
            <h2 class="md:text-3xl text-2xl font-medium uppercase mb-2">{{product.ProductName}}</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">In Stock</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Brand: </span>
                    <span class="text-gray-600">{{product.brand}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">{{product.Category}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">BE45VGRT</span>
                </p>
            </div>
            <div class="mt-4 flex items-baseline gap-3">
                <span class="text-primary font-semibold text-xl">${{product.Price}}</span>
                <span class="text-gray-500 text-base line-through">${{(product.Price*85)/100}}</span>
            </div>
            <p class="mt-4 text-gray-600">
                {{product.ProductDescription}}
            </p>
          
          
            <!-- quantity -->
            <div class="mt-4">
                <h3 class="text-base text-gray-800 mb-1">Quantity</h3>
                <input type="number" v-bind:min=1 class="">
            </div>
            <!-- color end -->
            <!-- add to cart button -->
            <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                <a href="#" @click="addToCart(product.ProductID)" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase 
                    hover:bg-transparent hover:text-primary transition text-sm flex items-center">
                    <span class="mr-2"><i class="fas fa-shopping-bag"></i></span> Add to cart
                </a>
                <a href="#" @click="AddWishlist(product.ProductID)" class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase 
                    hover:bg-transparent hover:text-primary transition text-sm">
                    <span class="mr-2"><i class="far fa-heart"></i></span> Wishlist
                </a>
            </div>
            <!-- add to cart button end -->
            <!-- product share icons -->
            <div class="flex space-x-3 mt-4">
                <a href="#"
                    class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"
                    class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                    class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <!-- product share icons end -->
        </div>
        <!-- product content end -->
    </div>
    <!-- product view end -->

    <!-- product details and review -->
    <div class="container pb-16" v-for="product in products" :key="product.ProductID">
        <!-- detail buttons -->
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">
            Product Details
        </h3>
        <!-- details button end -->

        <!-- details content -->
        <div class="lg:w-4/5 xl:w-3/5 pt-6">
            <div class="space-y-3 text-gray-600">
               {{product.ProductDescription}}
            </div>
            
        </div>
        <!-- details content end -->
    </div>
    <!-- product details and review end -->

    <!-- related products -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">related products</h2>
        <!-- product wrapper -->
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6" >
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden" v-for="product in productsCat" :key="product.ProductID">
                <!-- product image -->
                <div class="relative">
                    <img :src="require('../assets/images/products/'+product.image1+'.jpg')" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
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
                        <p class="text-sm text-gray-400 font-roboto line-through">${{(product.Price*85)/100}}</p>
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
                <a href="#" @click="addToCart(product.ProductID)"
                    class="block w-full py-1 text-center  bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            
            
            
        </div>
        <!-- product wrapper end -->
    </div>
    <!-- related products end -->

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
  data(){
     return{
        
      products:[],
      productsCat:[],
      productID:this.$route.params.id,

     }
      
  },
  created() {
  this.viewProduct();
  this.ProductByCategory();
  },
  mounted: function () {
       let mainImg = document.getElementById('main-img')
          let imgBars = document.getElementsByClassName('single-img')
    for(let imgBar of imgBars){
        imgBar.addEventListener('click', function(){
            clearActive()
            let imgPath = this.getAttribute('src')
            mainImg.setAttribute('src', imgPath)
            this.classList.add('border-primary')
        })
    }
    function clearActive(){
        for(let imgBar of imgBars){
            imgBar.classList.remove('border-primary')
        }
    }
  },
  methods: {
      
     
    viewProduct() {
        
      axios
        .get("http://localhost:7882/e-storea/products/SingleProduct/"+this.productID)
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error));
      // this.$emit("clicked", "someValue");
    },
    ProductByCategory() {
        var category ={
            category :"Gaming PC",
        } 
        
  
     axios
        .post("http://localhost:7882/e-storea/products/ProductByCategory",category)
        .then((response) => (this.productsCat = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error));
      // this.$emit("clicked", "someValue");
    },
    addToCart(ProductID) {
      var cart = {
        userID :'4ffacfcf-de4d-11eb-b9b0-747827',
        productID:ProductID,
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
    
    AddWishlist(ProductID) {
      var wishlist = {
        userID :localStorage.getItem("userID"),
        productID:ProductID,
        
     
      };
      // var getslot = import('../methods.js');

      axios({
        method: "post",
        url: "http://localhost:7882/e-storea/wishlists/AddWishlist",
        data: wishlist,
      }).then(function(response) {
        
      });
   

      
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
