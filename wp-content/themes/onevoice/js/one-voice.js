jQuery(document).ready(function(){
	jQuery.fn.toggleText = function(t1, t2){
	if (this.text() == t1) this.text(t2);
	else                   this.text(t1);
	return this;
	};
	
	jQuery('.curate_info_content .info_title').click(function() {
	
	  jQuery(this).siblings('.info_cont_hide').toggleClass('slideRight');
	  jQuery(this).siblings('.info_cont_hide').toggle();
	  jQuery(this).toggleClass('collapsed');
	  jQuery(this).toggleClass('expanded');
		
	});
	
	jQuery('.panel-title a').click(function() {
	
		jQuery(this).siblings('.panel-body a').toggle();
		jQuery(this).children('.cl_indicator').toggleText('- hide', '+ show');
		jQuery(this).toggleClass('grey_bg');
		jQuery(this).toggleClass('ee_blue_bg');
	});
	jQuery('.evidence-education-title a').click(function() {
		jQuery(this).toggleClass('grey_bg');
		jQuery(this).toggleClass('ee_blue_bg');
		jQuery(this).children('.cl_indicator').toggleText('- hide', '+ show');
	});
	
	
	jQuery('.people-places-title a').click(function() {
		jQuery(this).children('.cl_indicator').toggleText('- hide', '+ show');
		jQuery(this).toggleClass('grey_bg');
		jQuery(this).toggleClass('ee_lt_blue_bg');	
	});
	
	
	jQuery('.research-grants-title a').click(function() {
		jQuery(this).children('.cl_indicator').toggleText('- hide', '+ show');
		jQuery(this).toggleClass('grey_bg');
		jQuery(this).toggleClass('ee_green_bg');	
	});
	
	
	jQuery('.news-meetings-title a').click(function() {
		jQuery(this).children('.cl_indicator').toggleText('- hide', '+ show');
		jQuery(this).toggleClass('grey_bg');
		jQuery(this).toggleClass('ee_orange_bg');	
	});
		
	jQuery('#input_status').focus(function() {
			jQuery('#input_status').css("height",'100px');
			jQuery('.courage_make_post').css('margin-bottom','30px');
			jQuery('.courage_post_form_actions').css('height','50px');
			jQuery('.courage_post_form_actions').css('display','block');
			jQuery('.courage_make_post_actions').show(400,'swing');
			
		});
	jQuery('#whats-new').focus(function() {
			//jQuery('#input_status').css("height",'100px');
			//jQuery('.courage_make_post').css('margin-bottom','30px');
			jQuery('.bpfb_actions_container').css('height','35px');
			jQuery('.bpfb_actions_container').css('display','block');
			//jQuery('.courage_make_post_actions').show(400,'swing');
			//jQuery('.courage_post_form_box .bpfb_actions_container').css('right','80px');
		
		});
		
		jQuery('#whats-new-textarea #whats-new').focusout(function()  {
			jQuery('#whats-new').css('height','30px');
			//jQuery('.courage_post_form_box .bpfb_actions_container').css('right','-20px');
		});
		
		
		/*jQuery('#whats-new').focusout(function()  {
			jQuery('.bpfb_actions_container').css('height','0px');
			jQuery('.bpfb_actions_container').css('display','none');
		});*/
		
	jQuery(".slide-right").click(function () {
		//jQuery(this).parents().eq(4).next().find('.rare_flyout_open').toggleClass('slideEffect');
		jQuery(this).parents().eq(5).find('.rare_flyout_open').toggleClass('slideEffect');
		//jQuery('#'+this.id+'_flyout').toggleClass('slideEffect');
	});
	
$('.lr_horizontal_share').click(function(){        
        var i=1;
        $('.lr').children('.lrc').each(function(index,element) {       
            if($('div.lrc:nth-child('+i+')').html().match("Facebook")){             
                $('div.lrc:nth-child('+i+')').addClass('shw');
            }else if($('div.lrc:nth-child('+i+')').html().match("GooglePlus")){
                $('div.lrc:nth-child('+i+')').addClass('shw');
            }else if($('div.lrc:nth-child('+i+')').html().match("LinkedIn")){
                $('div.lrc:nth-child('+i+')').addClass('shw');
            }else if($('div.lrc:nth-child('+i+')').html().match("Twitter")){
                $('div.lrc:nth-child('+i+')').addClass('shw');
            }else if($('div.lrc:nth-child('+i+')').html().match("Pinterest")){
                $('div.lrc:nth-child('+i+')').addClass('shw');
            }else if($('div.lrc:nth-child('+i+')').html().match("Email")){
                $('div.lrc:nth-child('+i+')').addClass('shw');
            } 
            else{
               // $('.lrc:nth-child('+i+')').remove();
            }           
            i++;
            $('.lrc').hide();
            $('.shw').show();
    });
     });
	
});

