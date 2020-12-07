(function($) {
	"use strict";

	// ______________ Cover-image
	$(".cover-image").each(function(e) {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});

	// ______________ Global Loader
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})

	// ______________ Color-skin
	$(document).on("click", "a[data-theme]", function(e) {
        $("head link#theme").attr("href", $(this).data("theme"));
        $(this).toggleClass('active').siblings().removeClass('active');
    });
    $(document).on("click", "a[data-effect]", function(e) {
        $("head link#effect").attr("href", $(this).data("effect"));
        $(this).toggleClass('active').siblings().removeClass('active');
    });

	// ______________ Modal
	$("#myModal").modal('show');

	// ______________Rating Stars
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);

	// ______________mCustomScrollbar
	$(".vscroll").mCustomScrollbar();
	$(".nav-sidebar").mCustomScrollbar({
		theme: "minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});

	// ______________Active Class
	$(".horizontalMenu-list li a").each(function(e) {
		var pageUrl = window.location.href.split(/[?#]/)[0];
		if (this.href == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("active"); // add active to li of the current link
			$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
			$(this).parent().parent().prev().click(); // click the item to make it drop
		}
	});


	// ______________ Back to Top
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$(document).on("click", "#back-to-top", function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});



	// ______________Quantity-right-plus
	var quantitiy = 0;
	$(document).on('click','.quantity-right-plus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);
	});
	$(document).on('click', '.quantity-left-minus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});



	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function(e) {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#f9faff',
				lineCap: ''
			});
		});
	}
	const DIV_CARD = 'div.card';



	// ______________Tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// ______________Popover
	$('[data-toggle="popover"]').popover({
		html: true
	});

	// ______________Card Remove
	$(document).on('click', '[data-toggle="card-remove"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});

	// ______________Card Collapse
	$(document).on('click', '[data-toggle="card-collapse"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});

	// ______________Card Full Screen
	$(document).on('click', '[data-toggle="card-fullscreen"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});

	/*//////////////////// Header and Horizontal skins  //////////////////////*/

	//$('body').addClass("default-header"); //

	 //$('body').addClass("headerstyle1");   //

	// $('body').addClass("headerstyle2"); //

	// $('body').addClass("default-menu"); //

	// $('body').addClass("menu-style1"); //

	// $('body').addClass("menu-style2"); //

})(jQuery);

function getCoursesBySpecialistId(id){
    var checkInput = $('#spec_id_input-'+id);

    if (checkInput.is(':checked')){
         ajaxRequestWizard(id,1);
    }else{
         ajaxRequestWizard(id,0);
    }

}

function ajaxRequestWizard(id,request_type){
    $.ajax({
        url: '/specialist-id/courses/'+id+'/'+request_type,
        type:'GET',
        success:function (courses){

            $('.fetchDataHere').empty();
            if(courses != 0){
                for(var i = 0 ; i < courses.length ; i++){
                    var  course_type = null;
                    if(courses[i].type === 1){

                        course_type = "Online";
                    }else if(courses[i].type === 2){
                        course_type = "Registered";
                    }else{
                        course_type = "Headquarter";
                    }

                    $('.fetchDataHere').append(`
        						<div class="card overflow-hidden">
        							<div class="d-md-flex">
        								<div class="item-card9-img">
        									<div class="item-card9-imgs">
        										<a href="/course-details/`+courses[i].id+`"></a>
        										<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
        									</div>
        									<div class="item-overly-trans">

        											<a href="/course-details/`+courses[i].id+`" class="bg-primary">'+course_type+'</a>

        									</div>
        								</div>
        								<div class="card border-0 mb-0">
        									<div class="card-body ">
        										<div class="item-card9">
        											<a href="/course-details/`+courses[i].id+`" class="text-dark"><h3 class="font-weight-semibold mt-1">`+courses[i].title+`</h3></a>
        												<div class="mt-2 mb-2">
        												<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i>`+courses[i].date+`</span></a>
        											</div>
        											<p class="mb-0 leading-tight">`+courses[i].description+`</p>
        										</div>
        									</div>
        									<div class="card-footer pt-4 pb-4">
        										<div class="item-card9-footer d-flex">
        											<div class="item-card9-cost">
        												<h4 class="text-dark font-weight-semibold mb-0 mt-0">`+courses[i].price+`</h4>
        											</div>
        										</div>
        									</div>
        								</div>
        							</div>
        						</div>
        					`);
                }
            }else{
                $('.fetchDataHere').append(`
         		            <div class="text-center text-danger"><h3>no courses found !</h3></div>
         		        `);
            }
        },
        error:function (exception){
            alert('error');
        }
    })
}
