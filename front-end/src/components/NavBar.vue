<template>
  
    <div class="topbar">
      <div class="toggle" @click="toggleMenu()"></div>
      <div class="search">
        <label>
          <input type="text" placeholder="Search here" />
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="user">
        <img src="" />
      </div>
    </div>
  
</template>
<script>
/*eslint-disable*/

export default {
  methods:{
 toggleMenu() {
    
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}
}

};
</script>
