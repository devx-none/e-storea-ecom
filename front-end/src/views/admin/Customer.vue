<template>
  <div class="container">
    <SideBar />
    <div class="main">
      <NavBar />
      <div class="details">
        <div class="products">
          <h4>Product <span class="numberOrder">100</span></h4>
          <div class="search-cont">
            <div class="box1">
              <a href="" class="link_item1 link">All</a>
              <a href="" class="link_item2 link">Category</a>
            </div>
            <div class="box2">
              <input
                placeholder="Search by name"
                class="search"
                type="search"
                name=""
                id=""
              />
              <button class="btn" id="addBtn" @click="addModal()">
                &#43; Add new item
              </button>
            </div>
          </div>
          <table class="">
            <thead>
              <tr>
                <td>Product</td>
                <td>ItemID</td>
                <td>Category</td>
                <td>Amount</td>
                <td>Brand</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>

              <tr v-for="product in products" :key="product">
                <td>MacBook Pro</td>
                <td>{{product.ProductID}}</td>
                <td>{{product.ProductName}}</td>
                <td>$599</td>
                <td>Apple</td>
                <td>Name</td>
              </tr>
              <tr>
                <td>MacBook Pro</td>
                <td>#12333</td>
                <td>Computer</td>
                <td>$599</td>
                <td>Apple</td>
                <td>Name</td>
              </tr>
              <tr>
                <td>MacBook Pro</td>
                <td>#12333</td>
                <td>Computer</td>
                <td>$599</td>
                <td>Apple</td>
                <td>Name</td>
              </tr>
             
              
            </tbody>
          </table>
        </div>
      </div>
      <div id="addModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2>add new product</h2>
          <form action="" method="POST">
            <div>
              <label for="p_id">Product ID:</label>
              <input type="text" v-model="productID" name="p_id" id="p_id" required />
            </div>
            <div>
              <label for="p_name">Product Name:</label>
              <input type="text" v-model="productName" name="p_name" id="p_name" required />
            </div>
            <div>
              <label for="p_brand">Brand:</label>
              <input type="text" v-model="brand" name="p_brand" id="p_brand" required />
            </div>
            <div>
              <label for="p_category">Category:</label>
              <select v-model="category" name="p_category" id="p_category" required>
                <option value="select">Select</option>
                <option value="Laptops">Laptops</option>
                <option value="Phones">TV</option>
                <option value="Phones">Phones</option>
                <option value="Phones">Chaires</option>
                <option value="Phones">Digital</option>
                <option value="Phones">Animal</option>
                <option value="Phones">Watches</option>
              </select>
            </div>
            <div>
              <label for="qty">Quantity</label>
              <input type="number" v-model="qty" name="p_qty" id="qty" required />
            </div>
            <div>
              <label for="price">Price</label>
              <input type="number" v-model="price" name="p_price" id="price" required />
            </div>
            <div>
              <label for="description">Description</label>
              <textarea
              v-model="description"
                name="description"
                id="description"
                cols="30"
                rows="10"
                required
              ></textarea>
            </div>
            <div>
              <input type="file" id="uploadImg"  name="image" onchange="previewImages" />

              <label for="uploadImg"
                ><i class="fas fa-cloud-upload-alt"></i></label>
              <span id="file-chosen">No file chosen</span>
            </div>
            
            <div id="preview"></div>
            <input type="button" value="submit" name="submit" @click="addProducts(); getdata();"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
/*eslint-disable*/
import SideBar from "../../components/admin/SideBar.vue";
import NavBar from "../../components/admin/NavBar.vue";
import axios from "axios";


export default {
  name: "Dashboard",

  components: {
    SideBar,
    NavBar,
  },
  data() {
    return {
     
      products: [],
      
    };
  },
  created() {
    this.getdata();
  },
  methods: {
    
    addModal() {
      var addModal = document.getElementById("addModal");
      var content = document.querySelector(".details");
      var aside = document.querySelector(".navigation");
      var nav = document.querySelector(".topbar");
      content.style.filter = "blur(8px)";
      aside.style.filter = "blur(8px)";
      nav.style.filter = "blur(8px)";
      addModal.style.transform = "translateY(0)";
    },
    addProducts() {
      var products = {
        ProductId: this.productID,
        productName: this.productName,
        // brand: this.brand,
        category: this.category,
        quantity: this.qty,
        price: this.price,
        productDescription: this.description,
      };
      // var getslot = import('../methods.js');

      axios({
        method: "post",
        url: "http://localhost:7882/e-storea/products/AddProduct",
        data: products,
      }).then(function(response) {
        
      });
       var addModal = document.getElementById("addModal");
      //  addModel.style.display = "none";
      addModal.style.transform = "translateY(0)";

      
    },
    getdata() {
      axios
        .get("http://localhost:7882/e-storea/products/ListProduct")
        .then((response) => (this.products = response.data))
        
          //  window.location.href = './slots';
   
        .catch((error) => console.log(error));
      // this.$emit("clicked", "someValue");
    },
    


  },
};
</script>

// --------------------------style
<style lang="scss" scoped>
@mixin breakpoint($class) {
  @if $class == sm {
    @media (max-width: 480px) {
      @content;
    }
  }
}
.search-cont {
  display: flex;
  justify-content: space-between;
  align-items: center;
  @include breakpoint(sm) {
    display: block;
    flex-direction: column;
    justify-content: start;
  }
}
.link {
  text-decoration: none;
  color: rgb(58, 57, 57);
}
.link_item1 {
  margin-right: 40px;
  font-weight: bold;
}
.btn {
  display: inline-block;
  outline: 0;
  border: 0;
  cursor: pointer;
  background-color: #0f6b77;
  border-radius: 4px;
  padding: 8px 16px;
  font-size: 16px;
  font-weight: 500;
  color: white;
  line-height: 26px;
}
.search {
  border-radius: 4px;
  padding: 8px 16px;
  border: 1px solid #adadad;
  outline: none;
  margin-right: 10px;
  color: #adadad;
}
.box1 {
  @include breakpoint(sm) {
    margin: 10px;
  }
}

body .container .main {
  .details {
    grid-template-columns: 1fr;

    .products {
      margin: 10px;
      h4 {
        font-weight: 600;
        font-size: 20px;
        .numberOrder {
          border: 1px solid #000;
          border-style: none;
          background-color: #e9e9e9;
          border-radius: 30%;
          color: #adadad;
          padding: 2px;
        }
      }
      table {
        background: #fff;

        tr {
          border-bottom: 1px solid rgba(0, 0, 0, 0.1);

          td {
            padding: 20px 30px;
          }

          td:last-child {
            text-align: right;
          }
        }

        tbody {
          // overflow-y: auto;
          tr:hover {
            background: #03cad8;
            color: #fff;

            td:last-child {
              text-align: right;
            }
          }

          tr:last-child {
            border-bottom: none;
          }

          td:nth-child(2) {
            text-align: right;
            padding-right: 20px;
          }

          td:nth-child(3) {
            text-align: center;
          }
        }

        thead {
          tr {
            td:last-child {
              text-align: right;
            }

            td:nth-child(2) {
              text-align: right;
              padding-right: 20px;
            }

            td:nth-child(3) {
              text-align: center;
            }
          }
        }
        @include breakpoint(sm) {
          width: 600px;
        }
      }

      @include breakpoint(sm) {
        overflow-x: auto;
      }
    }
  }
  .modal {
    transform: translateY(-100%); /* Hidden by default */
    transition: 400ms;
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    // background-color: rgb(0, 0, 0); /* Fallback color */
    // background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */

    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 70px 30px;
      border-radius: 15px;
      width: 80%;
      overflow: hidden;
      h2 {
        margin-bottom: 40px;
        font-weight: 600;
        font-size: 1.7rem;
        text-align: center;
        color: #1d1fdd;
      }
      form {
        overflow: hidden;
        box-sizing: border-box;
        display: grid;
        grid-template-rows: repeat(3, 80px);
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 15px;
        @include breakpoint(sm) {
          display: flex;
          flex-direction: column;
        }
        div:nth-last-child(3) {
          grid-column: 3 / 5;
          grid-row: 1/4;
          @include breakpoint(sm) {
            grid-column: unset;
            grid-row: unset;
          }
          textarea {
            padding-top: 10px;
            width: 100%;
            height: 244px;
          }
        }
        div:nth-last-child(2) {
          grid-column: 1 / span 2;
          @include breakpoint(sm) {
            grid-column: unset;
          }
          > div {
            width: 90px;
            cursor: pointer;
            float: left;
            height: 90px;
            background: #f5f5fd;
            margin-right: 10px;
            border-radius: 5px;
            overflow: hidden;
            img {
              height: 100%;
              width: 100%;
              object-fit: cover;
            }
          }
        }
        label {
          margin-bottom: 10px;
          font-family: Poppins;
          font-weight: 500;
          font-size: 1rem;
          text-align: left;
          color: #707070;

          display: block;
        }
        input,
        select,
        textarea {
          font-weight: 600;
          outline: none;
          color: #1d1fdd;
          font-family: "POppins", sans-serif;
          padding-left: 10px;
          box-sizing: inherit;
          border: none;
          width: 100%;
          height: 55px;
          border-radius: 5px;
          background: #8b8df71e;
          color: #000;
        }
        input[type="submit"] {
          grid-column: 4;
          width: 50%;
          justify-self: right;
          background: #000;
          color: white;
          cursor: pointer;
        }
      }
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
  }
}
</style>
