<template>
    <div>
        <div class="nav-container">
            <div class="backword">
                <p id="menuWord"></p>
            </div>
            <div class="container-lg">
                <div class="row">
                    <nav class="col-12">
                        <ion-icon name="close-outline"></ion-icon>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Skills</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
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
                        <input type="text" name="search" placeholder="Search for something...">
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-danger v-flexer"><ion-icon name="mail-outline"></ion-icon> <span>Contact</span></a>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>