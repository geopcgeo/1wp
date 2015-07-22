function thanks(bplikeid,uid){
		 var bplikeid= bplikeid;
		 var uid= uid;		 
		 var data={
				action: 'thanks_action',
				post_bplikeid: bplikeid,
				post_uid: uid
			}
		$.post(ajax_object.ajaxurl, data, function(resp) {
				var response=resp;
				var arrayOfStrings = response.split(",");
				var value1 =arrayOfStrings[0];
				var value2 =arrayOfStrings[1];
				var value3 =arrayOfStrings[2];
				if(value1 > 0){			
				$('#fetchid_'+bplikeid).html('<span class="icon-thanks"></span> - <span class="typechange" >thanked</span><div class="enc_thank_num enc_val">'+$.trim(value2)+'</div>');	
				$('#fetchid_'+bplikeid).css({"background-color": "rgb(1, 139, 205)","color": "rgb(62, 76, 74)"});
				
				}else{
				$('#fetchid_'+bplikeid).html('<span class="icon-thanks"></span> + <span class="typechange">thanks</span><div class="enc_thank_num enc_val">'+$.trim(value2)+'</div>');
				$('#fetchid_'+bplikeid).css({"background-color": "","color": ""});
				}
				$('#careid_'+bplikeid).html($.trim(value3));
				
			
		});
	};
	
	// ************hugs*************
	function hugs(bplikeid,uid){
		 var bplikeid= bplikeid;
		 var uid= uid;		 
		 var data={
				action: 'ajax_hugaction',
				post_bplikeid: bplikeid,
				post_uid: uid
			}
		$.post(ajax_object.ajaxurl, data, function(resp) {
				var response=resp;
				var arrayOfStrings = response.split(",");
				var value1 =arrayOfStrings[0];
				var value2 =arrayOfStrings[1];
				var value3 =arrayOfStrings[2];
				if(value1 > 0){
				$('#hugid_'+bplikeid).html('<span class="icon-hugs"></span> - <span class="typechange">hugged</span><div class="enc_hug_num enc_val">'+$.trim(value2)+'</div>');					
				$('#hugid_'+bplikeid).css({"background-color": "rgb(1, 139, 205)","color": "rgb(62, 76, 74)"});
				}else{
				$('#hugid_'+bplikeid).html('<span class="icon-hugs"></span> + <span class="typechange">hugs</span><div class="enc_hug_num enc_val">'+$.trim(value2)+'</div>');	
				$('#hugid_'+bplikeid).css({"background-color": "","color": ""});
				}
				$('#careid_'+bplikeid).html($.trim(value3));
			
		});
	};
	// ************prayers*************
	function pray(bplikeid,uid){
		 var bplikeid= bplikeid;
		 var uid= uid;		 
		 var data={
				action: 'ajax_prayaction',
				post_bplikeid: bplikeid,
				post_uid: uid
			}
		$.post(ajax_object.ajaxurl, data, function(resp) {
				var response=resp;
				var arrayOfStrings = response.split(",");
				var value1 =arrayOfStrings[0];
				var value2 =arrayOfStrings[1];
				var value3 =arrayOfStrings[2];
				if(value1 > 0){
				$('#prayid_'+bplikeid).html('<span class="icon-prayers"></span> - <span class="typechange">prayed</span><div class="enc_pray_num enc_val">'+$.trim(value2)+'</div>');					
				$('#prayid_'+bplikeid).css({"background-color": "rgb(1, 139, 205)","color": "rgb(62, 76, 74)"});
				}else{			
				$('#prayid_'+bplikeid).html('<span class="icon-prayers"></span> + <span class="typechange">Prayers</span><div class="enc_pray_num enc_val">'+$.trim(value2)+'</div>');
				$('#prayid_'+bplikeid).css({"background-color": "","color": ""});

				}				
				$('#careid_'+bplikeid).html($.trim(value3));
				
			
		});
	};
	
	// ************cares*************
	function care(bplikeid,uid){
		 var bplikeid= bplikeid;
		 var uid= uid;		 
		 var data={
				action: 'ajax_careaction',
				post_bplikeid: bplikeid,
				post_uid: uid
			}
		$.post(ajax_object.ajaxurl, data, function(resp) {
				var response=resp;
				var arrayOfStrings = response.split(",");
				var value1 =arrayOfStrings[0];
				var value2 =arrayOfStrings[1];
				var value3 =arrayOfStrings[2];
				if(value1 > 0){
				$('#caredid_'+bplikeid).html('<sub> - </sub> cared&nbsp;&nbsp;');					
				}else{
				$('#caredid_'+bplikeid).html('<sub> + </sub> care&nbsp;&nbsp;');	
				}
				$('#careid_'+bplikeid).html($.trim(value3));
			
		});
	};


