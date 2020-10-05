'use strict'

// Smooth scroll

$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault()
  $('html, body').animate(
    {
      scrollTop: $($.attr(this, 'href')).offset().top
    },
    500
  )
})

$('ion-icon[name=menu-outline]').click(function() {
  $('.nav-container').fadeIn()
})

$('ion-icon[name=close-outline]').click(function() {
  $('.nav-container').fadeOut()
})

$('.nav-container ul li a').mouseover(function() {
  let tempText = $(this).text()
  $('#menuWord').text(tempText)
})

$('.nav-container ul li a').mouseout(function() {
  $('#menuWord').text('')
})

let position = $(window).scrollTop()
$(window).scroll(function() {
  let scroll = $(window).scrollTop()
  if (scroll > position) {
    // scroll down
    $('header').addClass('panel-nav')
  } else {
    // scroll up
    if (scroll == position) {
      $('header').removeClass('panel-nav')
    }
  }
})

// Counter animation
// https://codepen.io/hi-im-si/pen/uhxFn

$('.counter').each(function() {
  setTimeout(() => {
    let $this = $(this),
      countTo = $this.attr('data-count')

    $({
      countNum: $this.text()
    }).animate(
      {
        countNum: countTo
      },

      {
        duration: 2000,
        easing: 'linear',
        step: function() {
          $this.text(Math.floor(this.countNum))
        },
        complete: function() {
          $this.text(this.countNum)
        }
      }
    )
  }, 1000)
})

// isotope
setTimeout(function() {
  let $grid = $('.grid').isotope({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    layoutMode: 'fitRows',
    percentPosition: true
  })

  // filter items on button click
  $('.filter-button-group').on('click', 'div', function() {
    let filterValue = $(this).attr('data-filter')
    $grid.isotope({ filter: filterValue })
  })

  $('.button-group').each(function(i, buttonGroup) {
    let $buttonGroup = $(buttonGroup)
    $buttonGroup.on('click', 'div', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked')
      $(this).addClass('is-checked')
    })
  })
}, 500)

$('#exampleModalCenter').modal('show')

// Filter search bar on homepage
$('#searchUL').css('display', 'none')
document.getElementById('search').addEventListener('keyup', function() {
  $('#searchUL').css('display', 'block')
  let input, filter, ul, li, a, i, txtValue
  input = document.getElementById('search')
  filter = input.value.toUpperCase()
  ul = document.getElementById('searchUL')
  li = ul.getElementsByTagName('li')
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName('a')[0]
    txtValue = a.textContent || a.innerText
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = ''
    } else {
      li[i].style.display = 'none'
    }
  }
  li.innerText = filter
  if (input.value == '') {
    $('#searchUL').css('display', 'none')
  }
})

document.getElementById('search').addEventListener('focusout', function() {
  setTimeout(function() {
    $('#searchUL').css('display', 'none')
  }, 300)
})

// Resize UL under search bar on homepage

let searchbarWidth = document.getElementById('search').offsetWidth
$('#searchUL').css('width', searchbarWidth + 'px')

window.addEventListener('resize', function() {
  let searchbarWidth = document.getElementById('search').offsetWidth

  $('#searchUL').css('width', searchbarWidth + 'px')
})

// Lightslider

setTimeout(function() {
  $('.light-slider').lightSlider({
    item: 5,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 10,

    addClass: '',
    mode: 'slide',
    useCSS: true,
    cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: 'linear', //'for jquery animation',////

    speed: 800, //ms'
    auto: true,
    pauseOnHover: true,
    loop: true,
    slideEndAnimation: true,
    pause: 1000,

    keyPress: true,
    controls: false,
    prevHtml: '',
    nextHtml: '',

    rtl: false,
    adaptiveHeight: false,

    vertical: false,
    verticalHeight: 500,
    vThumbWidth: 100,

    thumbItem: 10,
    pager: true,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: 'middle',

    enableTouch: true,
    enableDrag: true,
    freeMove: true,
    swipeThreshold: 40,

    responsive: [
      {
        breakpoint: 800,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6
        }
      },
      {
        breakpoint: 480,
        settings: {
          item: 2,
          slideMove: 1
        }
      }
    ],

    onBeforeStart: function(el) {},
    onSliderLoad: function(el) {},
    onBeforeSlide: function(el) {},
    onAfterSlide: function(el) {},
    onBeforeNextSlide: function(el) {},
    onBeforePrevSlide: function(el) {}
  })
}, 500)
