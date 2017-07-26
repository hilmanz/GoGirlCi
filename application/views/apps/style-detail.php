
<div class="row">
    <div id="single">
	
	
	
        <div class="entry-detail">
		{section name=i loop=$listcontent}
        	<h1>{$listcontent[i].title}</h1>
            <div class="meta-container">
				{if $listcontent[i].avatar}
                <a href="#">
                    <div class="thumb thumb-small">
                        <img src="{$basedomain}public_assets/avatar/{$listcontent[i].avatar}" class="img-circle"/>
                    </div>
                </a>
				{/if}
                <p class="meta-post">
                    <span class="author">By  {$listcontent[i].name}</span> |  
                    <span class="post-dates">{$listcontent[i].date|date_format:"%A, %B %e, %Y"}</span>
                </p>
                <p class="social-post">
                    <a class="like-count likecategory" href='#' likeidnya='{$listcontent[i].id}' ><i class="icon-heart-o"></i> <span>{$listcontent[i].like}</span> Likes</a>
		    <a class="fb-share" href="javascript:void(0)"  likeidnya='{$listcontent[i].id}' onclick="shareFB('{$listcontent[i].titleshare}','{$basedomain}{$listcontent[i].page}/detail?param={$listcontent[i].id}','{$basedomain}public_assets/imgregistrasi/{$listcontent[i].img}','','{$listcontent[i].contentisifb|truncate:150:'...':true}')"><i class="icon-facebook">&nbsp;</i></a> 
		    <a class="twitter-share" likeidnya='{$listcontent[i].id}' href="http://twitter.com/share?text={$listcontent[i].contentisitwitter|truncate:40:'...':true}&url={$basedomain}{$listcontent[i].page}/detail?param={$listcontent[i].id}"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                          
                </p>
            </div>
            <div class="entry-container">
            	
                <p>{$listcontent[i].contentnya}</p>
            </div>
            <div class="row-btn">
            	<a href="{$basedomain}{$listcontent[i].page}" class="button fr">BACK</a>
            </div>
			{/section}
		
            <div id="comment">
            	<form id="commentform" method="post" action="" class="col-md-8">
					<div id="errorbox" class="errorbox row">
						<p><i class="icon-report-problem "></i> Semua data wajib diisi</p>
					</div>
                	<div class="comment-title">
                        <h3>Comment</h3>
                        <span class="comment-count">{$total} Comment</span>
                    </div>
					
					 <input type="text" name="nama" placeholder="Name" id="nama"/>
                    <input type="email" name="email"  placeholder="Email" id="email"/>
                    <textarea  name="comment"  placeholder="Add Comment" id="commentar"></textarea>
					<input type="hidden"  name="submit" value="1"/>
					<input type="hidden"  name="idcerita" value="{$paramcerita}"/>
                    <button class="button fr okeh" id="send">OK</button>
					
                </form>
            </div><!-- end #comment -->
			<div class="row">
				
			</div>
			<script>
			{literal}
			
	/*$("#commentform").validate({
		onkeyup: false,
  		ignore: ".ignore",
		
		  rules: {
			agree: {
			  required: true,
			  },
			nama: "required",
			comment: "required",
			email: {
			  required: true,
			  email: true
			}
			
			
		  },
		  success: "valid",
		  submitHandler: function() {
			form.submit();
		},
		 
		});*/
		$(".okeh").on("click", function(){
	
			$('#nama').removeClass('error');
			$('#email').removeClass('error');
			$('#commentar').removeClass('error');
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,15})+$/; 
			$(".errorbox").hide();
			
				if($('#nama').val()=='' || $('#email').val()=='' || $('#commentar').val()=='' )
				{
					//$(".errorbox").show();	
					$(".errorbox").show();	
					$(".errorbox").html('<p><i class="icon-report-problem "></i> Semua data wajib diisi</p>');
					
					if($('#nama').val()=='')
					{
					$('#nama').focus();
					$('#nama').addClass('error');
					}
					if($('#email').val()=='')
					{
					$('#email').focus();
					$('#email').addClass('error');
					}
					if($('#commentar').val()=='')
					{
					$('#commentar').focus();
					$('#commentar').addClass('error');
					}
					
					return false;
				}
				else
				{
					if(!$('#email').val().match(mailformat))  
					{  
						$(".errorbox").show();	
						$(".errorbox").html('<p><i class="icon-report-problem "></i> Format Email Belum Benar</p>');
						console.log('ssdsda');
						console.log($(".errorboxtext"));
						$('#email').focus();
						$('#email').addClass('error');
							return false;
					} 
					console.log('sdsdsds');
				}
				$('#commentform').trigger('submit');
		});

$(document).ready(function(){
			$(document).on("click",".like-count", function(){
			console.log('masuk');
			var likenya=$(this).attr('likeidnya');
			var thiss=$(this);
			$.ajax({
                        'type': 'POST',
                        'url': basedomain+'likemodul',
                        'data': {like:likenya},
						'dataType':'json',
                        'success': function(result){
							if(result.status==true){
								thiss.children().next().html(result.total);
							
							}
						
						}
						
						})
				});
});

		
function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
			$("#bg-popup").fadeOut();
			$(".popup,.popup2").fadeOut();
			FB.init();
			FB.ui({
				method: 'feed',
				name: fb_name,
				link: fb_link,
				picture: fb_img,
				caption: fb_user,
				description: fb_post
				
				
			});
				 
		}
			{/literal}
			</script>
			
			
            <div id="respond" class="col-md-8">
            	<ul>
				
				
				{section name=i loop=$listcomment}
                	<li>
                      
                        <div class="reply-content">
                            <div class="comment-author">
                                <h5>{$listcomment[i].name}</h5>
                                <span class="comment-date">{$listcomment[i].date|date_format:"%A, %B %e, %Y"}</span>
                            </div>
                            <div class="comment-entry">
                                <p>{$listcomment[i].comment}</p>
                            </div>
                        </div>
                    </li>
					
				{/section}
                </ul>
            </div><!-- end #comment -->
            <div class="row-btn">
            	<a href="#" class="button fr">BACK TO TOP</a>
            </div>
        </div><!-- end .entry-detail -->
		
		
    </div>
</div><!-- end .row -->
