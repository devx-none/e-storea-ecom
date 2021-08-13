<template>
  <div class="container">
    <SideBar />
    <div class="main">
      <NavBar />
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1020</div>
            <div class="cardName">Total Order </div>
          </div>
          <div class="iconBox">
            <i class="fas fa-shopping-bag"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">2000</div>
            <div class="cardName">Total User</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-users"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1000</div>
            <div class="cardName">Customers</div>
          </div>
          <div class="iconBox">
            <i class="far fa-money-bill-alt"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">$2000</div>
            <div class="cardName">Sales</div>
          </div>
          <div class="iconBox">
            <i class="far fa-money-bill-alt"></i>
          </div>
        </div>
      </div>
        <div class="details">
          <div class="recentOrders">
            <div class="cardHearder">
              <h2>Recet Sales</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table class="">
              <thead>
                <tr>
                <td>Date</td>
                <td>Customer</td>
                <td>Sale</td>
                <td>Total</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status delivered">Delivered</span></td>
                <td>Name</td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status return">return</span></td>
                <td>Name</td>              
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status return">return</span></td>
                <td>Name</td>
               
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status pending">pending</span></td>
                <td>Name</td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status pending">pending</span></td>
                <td>Name</td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status pending">pending</span></td>
                <td>Name</td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status pending">pending</span></td>
                <td>Name</td>
                </tr>
                <tr>
                <td>Name</td>
                <td>Name</td>
                <td><span class="status pending">pending</span></td>
                <td>Name</td>
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
                  <td><i class="fas fa-user"></i></td>
                  <td><h4>elmahdi<br><span>elmahdi@gmail.com</span></h4></td>
                </tr>
                 <tr>
                  <td><i class="fas fa-user"></i></td>
                  <td><h4>elmahdi<br><span>elmahdi@gmail.com</span></h4></td>
                  
                </tr>
                 <tr>
                  <td><i class="fas fa-user"></i></td>
                  <td><h4>elmahdi<br><span>elmahdi@gmail.com</span></h4></td>
                  
                </tr>
                 <tr>
                  <td><i class="fas fa-user"></i></td>
                  <td><h4>elmahdi<br><span>elmahdi@gmail.com</span></h4></td>
                  
                </tr>
                 <tr>
                  <td><i class="fas fa-user"></i></td>
                  <td><h4>elmahdi<br><span>elmahdi@gmail.com</span></h4></td>
                  
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
import SideBar from "../../components/admin/SideBar.vue";
import NavBar from "../../components/admin/NavBar.vue";

export default {
  name: "Dashboard",

  components: {
    SideBar,
    NavBar,
  },
};
</script>
