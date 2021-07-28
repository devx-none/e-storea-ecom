<template>
  <div class="container">
    <SideBar />
    <div class="main">
      <NavBar />
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1000</div>
            <div class="cardName">Daily views</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-eye"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">1000</div>
            <div class="cardName">Orders</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-eye"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1000</div>
            <div class="cardName">Customers</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-eye"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1000</div>
            <div class="cardName">Customers</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-eye"></i>
          </div>
        </div>
      </div>
        <div class="details">
          <div class="recentOrders">
            <div class="cardHearder">
              <h2>Recent Orders</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table class="">
              <thead>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
                
                <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
                
                <td><span class="status return">return</span></td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
               
                <td><span class="status return">return</span></td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status return">return</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="recentCustomers">
            <div class="cardHearder">
              <h2>Recent Customers</h2>
            </div>
            <table>
              <tbody>
                <tr>
                  <td>Name</td>
                  <td>Email</td> 
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped></style>
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
