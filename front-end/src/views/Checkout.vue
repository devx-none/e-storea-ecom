<template>
  <NavBar />
  <!-- breadcrum -->
  <div class="py-4 container flex gap-3 items-center">
    <a href="index.html" class="text-primary text-base">
      <i class="fas fa-home"></i>
    </a>
    <span class="text-sm text-gray-400"
      ><i class="fas fa-chevron-right"></i
    ></span>
    <p class="text-gray-600 font-medium uppercase">My Account</p>
  </div>
  <!-- breadcrum end -->
  <!-- checkout wrapper -->
  <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
    <!-- checkout form -->
    <div class="lg:col-span-8 border border-gray-200 px-4 py-4 rounded">
      <form action="">
        <h3 class="text-lg font-medium capitalize mb-4">checkout</h3>

        <div class="space-y-4">
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="text-gray-600 mb-2 block">
                First Name <span class="text-primary">*</span>
              </label>
              <input
                type="text"
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                "
                id="username"
                placeholder="first name"
              />
            </div>
            <div>
              <label class="text-gray-600 mb-2 block">
                Last Name <span class="text-primary">*</span>
              </label>
              <input
                type="text"
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                "
                id="username"
                placeholder="last name"
              />
            </div>
          </div>

          <div>
            <label class="text-gray-600 mb-2 block">
              County/Region <span class="text-primary">*</span>
            </label>
            <input
              type="text"
              class="
                shadow
                appearance-none
                border
                rounded
                w-full
                py-2
                px-3
                text-gray-700
                leading-tight
                focus:outline-none focus:shadow-outline
              "
              id="username"
              placeholder="Morocco"
            />
          </div>
          <div>
            <label class="text-gray-600 mb-2 block">
              Street Address <span class="text-primary">*</span>
            </label>
            <input
              type="text"
              class="
                shadow
                appearance-none
                border
                rounded
                w-full
                py-2
                px-3
                text-gray-700
                leading-tight
                focus:outline-none focus:shadow-outline
              "
              id="username"
              placeholder="street"
              v-model="address"
            />
          </div>
          <div>
            <label class="text-gray-600 mb-2 block">
              Town/City <span class="text-primary">*</span>
            </label>
            <input
              type="text"
              class="
                shadow
                appearance-none
                border
                rounded
                w-full
                py-2
                px-3
                text-gray-700
                leading-tight
                focus:outline-none focus:shadow-outline
              "
              id="username"
              placeholder="safi"
              v-model="city"
            />
          </div>
          <div>
            <label class="text-gray-600 mb-2 block">
              Zip Code <span class="text-primary">*</span>
            </label>
            <input
              type="text"
              class="
                shadow
                appearance-none
                border
                rounded
                w-full
                py-2
                px-3
                text-gray-700
                leading-tight
                focus:outline-none focus:shadow-outline
              "
              id="username"
              placeholder="46000"
              v-model="zipCode"
            />
          </div>
          <div>
            <label class="text-gray-600 mb-2 block">
              Phone Number <span class="text-primary">*</span>
            </label>
            <input
              type="text"
              class="
                shadow
                appearance-none
                border
                rounded
                w-full
                py-2
                px-3
                text-gray-700
                leading-tight
                focus:outline-none focus:shadow-outline
              "
              id="username"
              placeholder="+212 .."
              v-model="phone"
            />
          </div>
          <a
            href="#"
            class="
              bg-primary
              border border-primary
              text-gray
              px-4
              py-3
              font-medium
              rounded-md
              uppercase
              hover:bg-transparent hover:text-primary
              transition
              text-sm
              w-full
              block
              text-center
            "
          >
            Checkout
          </a>
        </div>
      </form>
    </div>
    <!-- checkout form end -->

    <!-- order summary -->
    <div
      class="
        lg:col-span-4
        border border-gray-200
        px-4
        py-4
        rounded
        mt-6
        lg:mt-0
      "
    >
      <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">
        ORDER SUMMARY
      </h4>
      <div class="space-y-2">
        <div class="flex justify-between" >
          <div>
            <h5 class="text-gray-800 font-medium">MSI GAMING DESKTOP AEGIS R 10SC-210US</h5>
          </div>
          <p class="text-gray-600">x1</p>
          <p class="text-gray-800 font-medium">$122</p>
        </div>
      </div>
      <div class="flex justify-between border-b border-gray-200 mt-1">
        <h4 class="text-gray-800 font-medium my-3 uppercase">Subtotal</h4>
        <h4 class="text-gray-800 font-medium my-3 uppercase">$122</h4>
      </div>
      <div class="flex justify-between border-b border-gray-200">
        <h4 class="text-gray-800 font-medium my-3 uppercase">Shipping</h4>
        <h4 class="text-gray-800 font-medium my-3 uppercase">Free</h4>
      </div>
      <div class="flex justify-between">
        <h4 class="text-gray-800 font-semibold my-3 uppercase">Total</h4>
        <h4 class="text-gray-800 font-semibold my-3 uppercase">$122</h4>
      </div>

      <!-- agreeement  -->
      <div class="flex items-center mb-4 mt-2">
        <input
          type="checkbox"
          id="agreement"
          class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3"
        />
        <label
          for="agreement"
          class="text-gray-600 ml-3 cursor-pointer text-sm"
        >
          Agree to our
          <a href="#" class="text-primary">terms & conditions</a>
        </label>
      </div>

      <!-- checkout -->
      <a
        href="/order-complete"
        class="
          bg-primary
          border border-primary
          text-gray
          px-4
          py-3
          font-medium
          rounded-md
          uppercase
          hover:bg-transparent hover:text-primary
          transition
          text-sm
          w-full
          block
          text-center
        "
      >
        Place order
      </a>
      <!-- checkout end -->
    </div>
    <!-- order summary end -->
  </div>
  <!-- checkout wrapper end -->
  <Footer />
</template>
<script>
/*eslint-disable*/

import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer.vue";
import Account from "../components/Account.vue";
export default {
  name: "Checkout",

  components: {
    Footer,
    NavBar,
    Account,
  },
  
};
</script>
<style lang="scss" scoped>
// .carousel {
//   height: 70vh;
//   margin-top:1rem;

// }
</style>
