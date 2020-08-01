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
            <input type="text" name="search" placeholder="Search for something..." />
            <ul id="searchUL">
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Projects</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-2">
            <a href="./contact" class="btn btn-danger v-flexer">
              <ion-icon name="mail"></ion-icon>
              <span>Contact</span>
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>