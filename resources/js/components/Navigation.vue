<template>
  <div>
    <header>
      <div class="container-lg">
        <div class="row v-flexer">
          <div class="col-2">
            <div class="menup v-flexer">
              <ion-icon name="menu-outline"></ion-icon>
              <span>menu</span>
            </div>
          </div>
          <div class="col-8">
            <input
              id="search"
              type="text"
              placeholder="Search for projects & pages..."
            />
            <search></search>
          </div>
          <div class="col-2">
            <a href="./contact#contactForm" class="btn btn-danger v-flexer">
              <ion-icon name="mail"></ion-icon>
              <span>Contact</span>
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>
