'use strict';

$('ion-icon[name=menu-outline]').click(function() {
    $('.nav-container').fadeIn();
});

$('ion-icon[name=close-outline]').click(function() {
    $('.nav-container').fadeOut();
});

$('.nav-container ul li a').mouseover(function() {
    let tempText = $(this).text();
    $('#menuWord').text(tempText);
});
$('.nav-container ul li a').mouseout(function() {
    $('#menuWord').text('');
});

let position = $(window).scrollTop();
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if(scroll > position) {
		// scroll down
		$('header').addClass('panel-nav');
    } else {
		// scroll up
         if (scroll == position) {
			$('header').removeClass('panel-nav');
		 }
    }
});

// Typing animation
// https://codepen.io/hi-im-si/pen/DHoup

let TxtType = function(el, toRotate, period) {
	this.toRotate = toRotate;
	this.el = el;
	this.loopNum = 0;
	this.period = parseInt(period, 10) || 2000;
	this.txt = '';
	this.tick();
	this.isDeleting = false;
};

TxtType.prototype.tick = function() {
	let i = this.loopNum % this.toRotate.length;
	let fullTxt = this.toRotate[i];

	if (this.isDeleting) {
		this.txt = fullTxt.substring(0, this.txt.length - 1);
	}
	else {
		this.txt = fullTxt.substring(0, this.txt.length + 1);
	}

	this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

	let that = this;
	let delta = 200 - Math.random() * 100;

	if (this.isDeleting) {
		delta /= 2;
	}

	if (!this.isDeleting && this.txt === fullTxt) {
		delta = this.period;
		this.isDeleting = true;
	}
	else if (this.isDeleting && this.txt === '') {
		this.isDeleting = false;
		this.loopNum++;
		delta = 500;
	}

	setTimeout(function() {
		that.tick();
	}, delta);
};

let elements = document.getElementsByClassName('typewrite');
for (let i = 0; i < elements.length; i++) {
	let toRotate = elements[i].getAttribute('data-type');
	let period = elements[i].getAttribute('data-period');
	if (toRotate) {
		new TxtType(elements[i], JSON.parse(toRotate), period);
	}
}

// Counter animation
// https://codepen.io/hi-im-si/pen/uhxFn

$('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
      }
  
    });
  
  });

// Scrollify
$.scrollify({
	section: '.panel',
	sectionName: 'section-name',
	interstitialSection: '',
	easing: 'easeOutExpo',
	scrollSpeed: 500,
	offset: 0,
	scrollbars: false,
	standardScrollElements: '',
	setHeights: true,
	overflowScroll: true,
	updateHash: false,
	touchScroll: true,
	before: function() {},
	after: function() {
		let classList = $.scrollify.current()[0].classList;
		if (classList.contains('dark-back')) {
			$('header').addClass('dark-back');
		}
		else {
			$('header').removeClass('dark-back');
		}
		
	},
	afterResize: function() {},
	afterRender: function() {}
});