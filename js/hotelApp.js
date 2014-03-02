;(function ($, window, undefined) {
  'use strict';


    var hotelApp = {

    webApp: function() {

		// Hide Address Bar
		if( /iPad/i.test(navigator.userAgent) ) {
			var a=document.getElementsByTagName("a");
				for(var i=0;i<a.length;i++) {
					if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
						a[i].onclick=function() {
								window.location=this.getAttribute("href");
								return false;
						}
				}
			}
		}

	},

	itemSelect: function(){

		$('.select-add').click(function(e){
			// $('.select-check.selected').removeClass('selected');
			// $(this).addClass('selected');
			// e.preventDefault();
			// $(this).toggleClass('selected');

			//$('button', this).css({'color':'red !important'});

			//$('.selected', this).css({'color':'red'});

		});

	},
	masonryLayout: function(){

		var container = document.querySelector('.overview-grid');

			var msnry = new Masonry( container, {
			  // options
			  // columnWidth: 5,
			  itemSelector: '.item',
			  "gutter": 5

			});

	},

    init: function(){

        $(document).ready(function() {

        	//hotelApp.webApp();

    	  	//console.log('I work');


    	  	//hotelApp.masonryLayout();
    	  	// hotelApp.itemSelect();



    	  });

      return false;

    }

  };

 hotelApp.init();

  })(jQuery, this);