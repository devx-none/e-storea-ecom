<template>
<SideBar/>
<NavBar/>
<v-simple-table
    fixed-header
    height="300px"
  >
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">
            Product
          </th>
          <th class="text-left">
            Item ID
          </th>
           <th class="text-left">
            Category
          </th>
           <th class="text-left">
            Amount
          </th>
           <th class="text-left">
            Brand
          </th>
           <th class="text-left">
           Action
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>
<script>
import SideBar from "../../components/SideBar.vue";
import NavBar from "../../components/NavBar.vue";

export default {
  name: "Dashboard",

  components: {
    SideBar,
    NavBar,
  },
};
</script>