
<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>{$modul}</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc">{$contentmodul}</p>
        </div>
    </div>
    <div id="isotope">
        <div class="postlist galleryList" dataWidth="500" dataStart="0" dataPage="{$total}">
		
		{section name=i loop=$listcontent}
            <figure class="item col-md-4">
                <figcaption>
				{if $listcontent[i].img}
                	<a class="thumb thumb-medium" href="{$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}">
                    	 <img src="{$basedomain}public_assets/imgregistrasi/{$listcontent[i].img}"/>
                    </a>
				{/if}
                    <h4><a href="{$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}">{$listcontent[i].title}</a></h4>
                    <div class="meta-container">
					{if $listcontent[i].avatar}
                        <a href="{$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}">
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}public_assets/avatar/{$listcontent[i].avatar}"/>
                            </div>
                        </a>
					{/if}
                        <p class="meta-post">
                            <span class="author">By {$listcontent[i].name}</span> |  
                            <span class="post-dates">{$listcontent[i].date|date_format:"%A, %B %e, %Y"}</span>
                        </p>
                        <p class="social-post">
                            <a class="like-count likecategory" href='#' likeidnya='{$listcontent[i].id}' ><i class="icon-heart-o"></i> <span>{$listcontent[i].like}</span> Likes</a>
							<a class="fb-share" href="javascript:void(0)" onclick="shareFB('{$listcontent[i].titleshare}','{$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}','{$basedomain}public_assets/imgregistrasi/{$listcontent[i].img}','','{$listcontent[i].contentisi|truncate:150:'...':true}')"><i class="icon-facebook">&nbsp;</i></a> 
							<a class="twitter-share" href="http://twitter.com/share?text={$listcontent[i].contentisi|truncate:40:'...':true}&url={$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p>{$listcontent[i].content|truncate:150:"...":true}</p>
                        <a href="{$basedomain}{$listcontent[i].page}/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="readmore"><i class="icon-arrow-right"></i></a>
						   <span class='pineapple-man' style='display:none'>xx</span>
                    </div>
                </figcaption>
            </figure>
          {/section}
			
        </div>
    </div><!-- end #isotope -->
</div><!-- end .row -->
 <div class="row loaderbox" style="display:none">
    <div class="preloader"></div>
</div>
<script>
{literal}


$(document).bind('scroll','.galleryList', function()
        {

             var batas =$('.galleryList').attr('dataWidth');
             var Tpage =$('.galleryList').attr('dataPage');
             var start =$('.galleryList').attr('dataStart') ;
             var totalPage=0;
          
            var html='';
        
            if(Tpage>1 ) 
            {
               
                if(start==Tpage)
                {
                    return false;
                }
                
                start++;
				
                if($(this).scrollTop()>= batas){
				//console.log('masuk');
				
                    batas = parseInt(batas);
					
                    $('.loaderbox').attr('style',"display:block");
                    batasx = batas + 500;
                    $('.galleryList').removeAttr('dataWidth');
                    $('.galleryList').attr('dataWidth',batasx);
                    $('.galleryList').attr('dataStart',start) ;
                   //console.log('ss');
                    
					
					
		$.ajax({
		type: "POST",
		url: basedomain+v.page+'/getStyle',
		data: {start:start},
		dataType: "json",
		success: function( result ){
		var str='';
				
		$.each(result.data,function(k,v){  
			//console.log(k);
			var hasilawal=parseInt($('.item:last').css( "top" ))+502;
			var hasil='';
			
			if(k=='0' || k=='3' || k=='6')
			{
			if(k=='3')
				{
					hasil=hasilawal+502;
				}else if (k=='6'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
			str+='<figure class="item col-md-4" style="position: absolute; left: 0px; top: '+hasil+'px;">';
		    str+='<figcaption>';
			str+='<a class="thumb thumb-medium" href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
			str+='<img src="'+basedomain+'public_assets/imgregistrasi/'+v.img+'"/>';
			str+='</a>';
		    str+='<h4><a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">'+v.title+'</a></h4>';
			str+='<div class="meta-container">';
			str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
            str+='<div class="thumb thumb-small">';
            str+='<img src="'+basedomain+'public_assets/avatar/'+v.avatar+'"/>';
            str+='</div>';
            str+='</a>';
            str+='<p class="meta-post">';
            str+='<span class="author">By '+v.name+'</span> |  ';
            str+='<span class="post-dates">'+v.date+'</span>';
            str+='</p>';
            str+='<p class="social-post">';
            str+='<a class="like-count" href="#" likeidnya='+v.id+'><i class="icon-heart-o"></i><span> '+v.like+' </span>Likes</a>';
			str+='<a class="fb-share" href="javascript:void(0)" onclick="shareFB('+v.titleshare+','+basedomain+'public_assets/imgregistrasi/'+v.img+''+basedomain+'public_assets/imgregistrasi/'+v.img+','+v.content.substring(0,50)+')"><i class="icon-facebook">&nbsp;</i></a> ';
			str+=' <a class="twitter-share" href="http://twitter.com/share?text'+v.content.substring(0,50)+'&url='+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>';
            str+='</p>';
            str+='</div>';
            str+='<div class="entry-post">';
            str+='<p>'+v.content+'</p>';
            str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'" class="readmore"><i class="icon-arrow-right"></i></a>';
		
            str+='</div>';
            str+='</figcaption>';
            str+='</figure>';
            }
			else if(k=='1' || k=='4' || k=='7')
			{			
				if(k=='4')
				{
					hasil=hasilawal+502;
				}else if (k=='7'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
				
			str+='<figure class="item col-md-4" style="position: absolute; left: 330px; top: '+hasil+'px;">';
		    str+='<figcaption>';
			str+='<a class="thumb thumb-medium" href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
			str+='<img src="'+basedomain+'public_assets/imgregistrasi/'+v.img+'"/>';
			str+='</a>';
		    str+='<h4><a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">'+v.title+'</a></h4>';
			str+='<div class="meta-container">';
			str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
            str+='<div class="thumb thumb-small">';
            str+='<img src="'+basedomain+'public_assets/avatar/'+v.avatar+'"/>';
            str+='</div>';
            str+='</a>';
            str+='<p class="meta-post">';
            str+='<span class="author">By '+v.name+'</span> |  ';
            str+='<span class="post-dates">'+v.date+'</span>';
            str+='</p>';
            str+='<p class="social-post">';
            str+='<a class="like-count" href="#" likeidnya='+v.id+'><i class="icon-heart-o"></i> <span>'+v.like+' </span>Likes</a>';
			str+='<a class="fb-share" href="javascript:void(0)" onclick="shareFB('+v.titleshare+','+basedomain+'public_assets/imgregistrasi/'+v.img+''+basedomain+'public_assets/imgregistrasi/'+v.img+','+v.content.substring(0,50)+')"><i class="icon-facebook">&nbsp;</i></a> ';
			str+=' <a class="twitter-share" href="http://twitter.com/share?text'+v.content.substring(0,50)+'&url='+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>';
            str+='</p>';
            str+='</div>';
            str+='<div class="entry-post">';
            str+='<p>'+v.content+'</p>';
            str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'" class="readmore"><i class="icon-arrow-right"></i></a>';
		
            str+='</div>';
            str+='</figcaption>';
            str+='</figure>';
            }
			else if(k=='2'|| k=='5' || k=='8')
			{		
				if(k=='5')
				{
					hasil=hasilawal+502;
				}else if (k=='8'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
			
			str+='<figure class="item col-md-4" style="position: absolute; left: 660px; top: '+hasil+'px;">';
		    str+='<figcaption>';
			str+='<a class="thumb thumb-medium" href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
			str+='<img src="'+basedomain+'public_assets/imgregistrasi/'+v.img+'"/>';
			str+='</a>';
		    str+='<h4><a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">'+v.title+'</a></h4>';
			str+='<div class="meta-container">';
			str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'">';
            str+='<div class="thumb thumb-small">';
            str+='<img src="'+basedomain+'public_assets/avatar/'+v.avatar+'"/>';
            str+='</div>';
            str+='</a>';
            str+='<p class="meta-post">';
            str+='<span class="author">By '+v.name+'</span> |  ';
            str+='<span class="post-dates">'+v.date+'</span>';
            str+='</p>';
            str+='<p class="social-post">';
            str+='<a class="like-count" href="#" likeidnya='+v.id+'><i class="icon-heart-o"></i> <span>'+v.like+' </span>Likes</a>';
			str+='<a class="fb-share" href="javascript:void(0)" onclick="shareFB('+v.titleshare+','+basedomain+'public_assets/imgregistrasi/'+v.img+''+basedomain+'public_assets/imgregistrasi/'+v.img+','+v.content.substring(0,50)+')"><i class="icon-facebook">&nbsp;</i></a> ';
			str+=' <a class="twitter-share" href="http://twitter.com/share?text'+v.content.substring(0,50)+'&url='+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>';
            str+='</p>';
            str+='</div>';
            str+='<div class="entry-post">';
            str+='<p>'+v.content+'</p>';
            str+='<a href="'+basedomain+v.page+'/detail/'+v.id+'/'+v.titleurl+'" class="readmore"><i class="icon-arrow-right"></i></a>';
		
            str+='</div>';
            str+='</figcaption>';
            str+='</figure>';
            }
         
			
			});
			
							
                            setTimeout(function(){$('.loaderbox').attr('style','display:none')},2000);
                            setTimeout(function(){$('.galleryList').append(str);},500);
							
							
				
											
                        
							}
						});
						setTimeout(function(){$('.loaderbox').attr('style','display:none')},500);
                    
                }
            }
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

