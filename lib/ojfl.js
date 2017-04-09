$('img.ayam').click(function(){
	showdd(0);
});
$('.notifblock').click(function(){
	showdd(1);
});
window.onclick = function(event) {
  if (!event.target.matches('#fcs')) {

  	$('.usersettings').removeClass('visible');
  	$('.notifcontent').removeClass('visible');

  }
}
	$("[blurbs-date]").blurbs_date({
	    ago: ' Detik Yang Lalu',
	    minute: ' Menit Yang Lalu',
	    hours: ' Jam Yang Lalu',
	    ytd: 'Kemarin, pukul ',
	    day: ' Hari Yang Lalu Pukul ',
	    server: ''
	});

$('.new-question.button').click(function(){
	var content = $('[name="content"]').val()
	, 	isanony = $('input[name="isanony"]').val()
	,	category= $('.played-sidebar > .active.item').attr('menu-id')
	,	url 	= getSlug(content);

	

	if(!content)
		$('[name="content"]').focus();
	else{
		$.ajax({
		    url   : base_url + "background",
		    type  : 'POST',
		    dataType: 'html',
		    data  : {wdyw:0,title:content,isanony:isanony,category:category,url:url},
		    beforeSend  : function(){
		      //$("#loading").show();
		    },
		    success : function(result){
		    	
		    	$('[name="content"]').val('');
		    	$('[name="content"]').val('Pertanyaan anda telah terkirim :)');
				setTimeout(function(){$('[name="content"]').val('');},500);
		    }
		});
	}
});
$('.played-sidebar > [menu-id]').each(function(){
	var d = $(this).attr('menu-id')
	, 	s = '.played-sidebar > [menu-id="'+d+'"]'
	, 	t = $(this).attr('menu-title');
	$(s).click(function(){
		
		$('.played-sidebar > [menu-id!="'+d+'"]').removeClass('active');
		$(s).addClass('active');
		loadtl();
		mainact(0);
		$('title').text('Stara - Your Spiritual Journey Is Here | Stara.id');
		window.history.pushState(null,null,base_url);
	});
});
getcatcont('0');
$('.back.from.detail').click(function(){

	var d = $('div.active.item').attr('menu-id')
		t = $('div.active.item').attr('menu-title');
	getcatcont(d,t);
	window.history.pushState(null,null,base_url);
	mainact(0);
	loadtl();
});
$('a[fb]').each(function(){
	var s = $(this).attr('fb');
	$('a[fb="'+s+'"]').click(function(){
		$('a[fb="'+s+'"]').addClass('active');
		$('a[fb!="'+s+'"]').removeClass('active');
		loadtl();
	});
});
$('.comment.modal input.comment').keypress(function(e){
  if(e.which == 13){
    var i = $(this).attr('comment-id')
    , 	c = $(this).val();

		$.ajax({
		    url   : base_url + "background",
		    type  : 'POST',
		    dataType: 'html',
		    data  : {wdyw:6,i:i,c:c},
		    beforeSend  : function(){
		    	
		    },
		    success : function(result){
		    	
		    	$('.comment.modal input.comment').val('');
				
		    }
		});
  } 
});
$('.send-new-a').click(function(){
	newAnswer();
});