(() => {

	hamburgerMenu();
	fixMenu();

	function fixMenu() {

		window.onscroll = () => {

			if ( pageYOffset > 0 ) {

				header.classList.add('fix');
				main.style.marginTop =  header.offsetHeight + 'px';

			} else {

				header.classList.remove('fix');
				main.style.marginTop =  0 + 'px';
			}
		}
	}

	function hamburgerMenu() {

		document.addEventListener('click', (event) => {

				var e = event.target;
				var targetElem = event.target.getAttribute('href');
				var links = document.querySelectorAll('.header__nav-item');

				while(!e.classList.contains('hamb')) {
					if (e.tagName == 'BODY') { e = null; break }
					e = e.parentNode;
				}

			if (e) {

				nav.classList.toggle('active')
				for (let link of links) link.classList.toggle('submenu-open');
				e = null;
			}

			else if (event.target.classList.contains('scroll')) {

				event.preventDefault();

				if (targetElem.length != 0) {
					$('html, body').animate({ scrollTop: ($(targetElem).offset().top - $('.header').innerHeight())}, 1000);

					if (window.innerWidth < 1200) {

					nav.classList.toggle('active');
					hamburger.classList.remove('is-active');
					for (let link of links) link.classList.remove('submenu-open')
					}
				}
			}

			else if (event.target.classList.contains('active')) {
				return;
			}      

			else  {

				if ($(window).width() < 1200) {

					for (let link of links) {link.style.opacity = '0px'; link.classList.remove('submenu-open')}
					nav.classList.remove('active')
					hamburger.classList.remove('is-active')
				}
			}
		})
	}
})();
$(function () {

	let
	// lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
	// lazyArr = [].slice.call(querySelectorAllLive(document, '.lazy')),
	active = false,
	threshold = 200
	;

	const lazyLoad = function(e) {
		if (active === false) {
			active = true;
			let lazyArr = [].slice.call(document.querySelectorAll('.lazy'));

			setTimeout(function() {
				lazyArr.forEach(function(lazyObj) {
					if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

						if ( lazyObj.dataset.src ) {
							let
							img = new Image(),
							src = lazyObj.dataset.src
							;
							img.src = src;
							img.onload = function() {
								if (!! lazyObj.parent) {
									lazyObj.parent.replaceChild(img, lazyObj);
								} else {
									lazyObj.src = src;
								}
							}
							lazyObj.removeAttribute('data-src');
						}

						if ( lazyObj.dataset.srcset ) {
							lazyObj.srcset = lazyObj.dataset.srcset;
							lazyObj.removeAttribute('data-srcset');
						}

						lazyObj.classList.remove('lazy');
						lazyObj.classList.add('lazy-loaded');

						lazyArr = lazyArr.filter(function(obj) {
							return obj !== lazyObj;
						});

						if (lazyArr.length === 0) {
							document.removeEventListener('scroll', lazyLoad);
							window.removeEventListener('resize', lazyLoad);
							window.removeEventListener('orientationchange', lazyLoad);
						}
					}
				});

				active = false;
			}, 1);
		}
	};

	function querySelectorAllLive(element, selector) {
		var result = Array.prototype.slice.call(element.querySelectorAll(selector));

		var observer = new MutationObserver(function(mutations) {
			mutations.forEach(function(mutation) {
				[].forEach.call(mutation.addedNodes, function(node) {
					if (node.nodeType === Node.ELEMENT_NODE && node.matches(selector)) {
						result.push(node);
					}
				});
			});
		});

		observer.observe(element, { childList: true, subtree: true });

		return result;
	}

	lazyLoad();

	document.addEventListener('scroll', lazyLoad);
	window.addEventListener('resize', lazyLoad);
	window.addEventListener('orientationchange', lazyLoad);

});

//=require main/script.js


$(function () {
    /* Inits */
    //initlazy();
    //backgraundmenu
    function initBodyScroll() {
        $(document)
            .on('scroll init.scroll', function () {
                var
                    scroll_top = $(this).scrollTop(),
                    /*window_height = $(window).height(),*/
                    header_height = $('#header').height()
                    ;

                $('body').toggleClass('page-scrolled', scroll_top > header_height);

            })
            .trigger('init.scroll');
    }


    /* Слайдеры */

    // let $advantage_slider = $('.organizator__block'),
    //     settingsAdvantage = {
    //         mobileFirst: true,
    //         dots: false,
    //         arrows: false,
    //         infinite: false,
    //         centerMode: true,
    //         slidesToShow: 1.545,
    //         slidesToScroll: 1,
    //         rows: 2,
    //         centerPadding: '10px',
    //         responsive: [
    //             {
    //                 breakpoint: 767,
    //                 settings: "unslick"
    //             }
    //         ]

    //     }


    // $advantage_slider.slick(settingsAdvantage);

    // $(window).on('resize', function () {
    //     if (!$advantage_slider.hasClass('slick-initialized')) {
    //         return $advantage_slider.slick(settingsAdvantage);
    //     }
    // });

});



