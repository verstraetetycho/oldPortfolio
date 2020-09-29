"use strict";

// Smooth scroll

$(document).on("click", 'a[href^="#"]', function(event) {
    event.preventDefault();
    $("html, body").animate(
        {
            scrollTop: $($.attr(this, "href")).offset().top
        },
        500
    );
});

$("ion-icon[name=menu-outline]").click(function() {
    $(".nav-container").fadeIn();
});

$("ion-icon[name=close-outline]").click(function() {
    $(".nav-container").fadeOut();
});

$(".nav-container ul li a").mouseover(function() {
    let tempText = $(this).text();
    $("#menuWord").text(tempText);
});

$(".nav-container ul li a").mouseout(function() {
    $("#menuWord").text("");
});

let position = $(window).scrollTop();
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if (scroll > position) {
        // scroll down
        $("header").addClass("panel-nav");
    } else {
        // scroll up
        if (scroll == position) {
            $("header").removeClass("panel-nav");
        }
    }
});

// Counter animation
// https://codepen.io/hi-im-si/pen/uhxFn

$(".counter").each(function() {
    setTimeout(() => {
        let $this = $(this),
            countTo = $this.attr("data-count");

        $({
            countNum: $this.text()
        }).animate(
            {
                countNum: countTo
            },

            {
                duration: 2000,
                easing: "linear",
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            }
        );
    }, 1000);
});

// isotope
setTimeout(function() {
    let $grid = $(".grid").isotope({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: ".grid-item",
        // use element for option
        layoutMode: "fitRows",
        percentPosition: true
    });

    // filter items on button click
    $(".filter-button-group").on("click", "div", function() {
        let filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
    });

    $(".button-group").each(function(i, buttonGroup) {
        let $buttonGroup = $(buttonGroup);
        $buttonGroup.on("click", "div", function() {
            $buttonGroup.find(".is-checked").removeClass("is-checked");
            $(this).addClass("is-checked");
        });
    });
}, 500);

$("#exampleModalCenter").modal("show");

// Filter search bar on homepage

function filterSearchBar() {
    let input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

// Resize UL under search bar on homepage

window.addEventListener("resize", function() {
    let searchbarWidth = document.getElementById("search").offsetWidth;

    $("#searchUL").css("width", searchbarWidth + "px");
});
