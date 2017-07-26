<!-- <b>Banner </b><br>
<p>

{section name=i loop=$listbanner}
{$listbanner[i].images} 
{/section}
</p>



<b>Content  </b><br>
<p>
{section name=i loop=$listcontent}
{$listcontent[i].title} 
{/section}
</p>
 -->
 <section id="slider">
       <div class="flexslider row">
          <ul class="slides">
			{section name=i loop=$listbanner}
			<li>{if $listbanner[i].link}
              <a href="{$listbanner[i].link}"><img src="{$base_domain}public_assets/banner/{$listbanner[i].images}" /></a>
			  {else}
			  <img src="{$base_domain}public_assets/banner/{$listbanner[i].images}" />
			  {/if}
            </li>
			{/section}
           
          </ul>
        </div><!-- end .flexslider -->
</section><!-- end #slider-->
<div class="row">
    <div id="sidebar" class="col-md-4">
        <div class="widget widget-list featured-girls">
            <div class="widget-title">
                <h3>Feature Girl</h3>
            </div>
            <div class="widget-content">
                <ul>
				{section name=i loop=$listfeaturegirl}
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img {if $listfeaturegirl[i].avatar}src="{$basedomain}public_assets/avatar/small_{$listfeaturegirl[i].avatar}"{else}src="{$basedomain}public_assets/avatar/images.jpg"{/if} class="img-circle" />
                            </div>
                            <h6>{$listfeaturegirl[i].name}</h6>
                        </a>
                    </li>
                  {/section}
				{*}
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Andrea Hamdan - Beauty Enthusiast.jpg" class="img-circle" />
                            </div>
                            <h6>Andrea Hamdan</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Audia Pinasthi - Photographer.jpg" class="img-circle" />
                            </div>
                            <h6>Audia Pinasthi</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Dwi Andini Putri - Photographer.jpg" class="img-circle" />
                            </div>
                            <h6>Dwi Andini Putri</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Nadine Roza - Graphic Designer.jpg" class="img-circle" />
                            </div>
                            <h6>Nadine Roza</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Rahel Akil - Fashion Stylist.jpg" class="img-circle" />
                            </div>
                            <h6>Rahel Akil</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Reinna Emily Rachman - Writer.jpg" class="img-circle" />
                            </div>
                            <h6>Reinna Emily Rachman</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Silvi Hidayah - Graphic Designer.jpg" class="img-circle" />
                            </div>
                            <h6>Silvi Hidayah</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Yessy Dwi R - Fashion Stylist.jpg" class="img-circle" />
                            </div>
                            <h6>Yessy Dwi R</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/yohana alfrida - writer.jpg" class="img-circle" />
                            </div>
                            <h6>Yohana Alfrida</h6>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="{$basedomain}assets/images/winner/Tiara Nabila.jpg" class="img-circle" />
                            </div>
                            <h6>Tiara Nabila</h6>
                        </a>
                    </li>
				  {/*}
				  
                </ul>
            </div>
        </div><!-- end .widget -->
    </div><!-- end .col-md-4 -->
    <div id="content" class="col-md-8">
        <div class="widget widget-thumb latest-story">
            <div class="widget-title">
                <h3 class="has-arrow">Latest Story</h3>
            </div><!-- end .widget-title -->
            <div class="widget-content">
			
			{section name=i loop=$listcontent}
                <div class="col-md-6">
				
					{if $listcontent[i].id_category==1}
                    <a href="{$basedomain}style/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="story-box">
					{elseif $listcontent[i].id_category==2}
					 <a href="{$basedomain}event/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="story-box">
					 {elseif $listcontent[i].id_category==3}
					  <a href="{$basedomain}skin/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="story-box">
					  {elseif $listcontent[i].id_category==4}
					  <a href="{$basedomain}diy/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="story-box">
					   {else}
					  <a href="{$basedomain}relations/detail/{$listcontent[i].id}/{$listcontent[i].titleurl}" class="story-box">
					  {/if}
                        <div class="thumb thumb-medium">
                            <img src="{$base_domain}public_assets/imgregistrasi/{$listcontent[i].img_home}"/>
                        </div>
                        <div class="caption">
                            <h4>{$listcontent[i].title}</h4>
                            <p class="meta-post">
                                <span class="author">By {$listcontent[i].name}</span> |  
                                <span class="like-count">{$listcontent[i].like} Likes</span>
                                <span class="post-date">{$listcontent[i].date|date_format:"%A, %B %e, %Y"}</span>
                            </p>
                        </div>
                    </a>
                </div>
			{/section}	
		
               
            </div><!-- end .widget-content -->
        </div><!-- end .widget -->
        <div class="widget widget-thumb popular-story">
            <div class="widget-title">
                <h3 class="has-arrow">Most Popular Story</h3>
            </div><!-- end .widget-title -->
			
			{section name=i loop=$listcontentpopular}
            <div class="widget-content">
                <div class="col-md-12">
                    <div class="popular-box">
                        <div class="thumb thumb-big">
						
                           {if $listcontentpopular[i].id_category==1}
							<a href="{$basedomain}style/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							{elseif $listcontentpopular[i].id_category==2}
							 <a href="{$basedomain}event/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							 {elseif $listcontentpopular[i].id_category==3}
							  <a href="{$basedomain}skin/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							  {elseif $listcontentpopular[i].id_category==4}
							  <a href="{$basedomain}diy/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							   {else}
							  <a href="{$basedomain}relations/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							  {/if}
							<img src="{$base_domain}public_assets/imgregistrasi/{$listcontentpopular[i].img_home}"/>
							
							</a>
                        </div>
                        <div class="entry">
                            <h4>
							 {if $listcontentpopular[i].id_category==1}
							<a href="{$basedomain}style/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							{elseif $listcontentpopular[i].id_category==2}
							 <a href="{$basedomain}event/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							 {elseif $listcontentpopular[i].id_category==3}
							  <a href="{$basedomain}skin/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							  {elseif $listcontentpopular[i].id_category==4}
							  <a href="{$basedomain}diy/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							   {else}
							  <a href="{$basedomain}relations/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}" class="story-box">
							  {/if}
							
							{$listcontentpopular[i].title} </a></h4>
                            <p class="meta-post">
                                <span class="author">By {$listcontentpopular[i].name}</span> |  
                                <span class="post-dates">{$listcontentpopular[i].date|date_format:"%A, %B %e, %Y"}</span>
                            </p>
                            <p class="social-post">
                                <a class="like-count" likeidnya="{$listcontentpopular[i].id}"><i class="icon-heart-o"></i> <span>{$listcontentpopular[i].like}</span> Likes</a>
				<a class="fb-share" href="javascript:void(0)"  likeidnya='{$listcontentpopular[i].id}' onclick="shareFB('{$listcontentpopular[i].titleshare}','{$basedomain}{$listcontentpopular[i].page}/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}','{$basedomain}public_assets/imgregistrasi/{$listcontentpopular[i].img}','','{$listcontentpopular[i].contentisifb|truncate:150:'...':true}')"><i class="icon-facebook">&nbsp;</i></a>
				<a class="twitter-share" likeidnya='{$listcontentpopular[i].id}' href="http://twitter.com/share?text={$listcontentpopular[i].contentisitwitter|truncate:40:'...':true}&url={$basedomain}{$listcontentpopular[i].page}/detail/{$listcontentpopular[i].id}/{$listcontentpopular[i].titleurl}"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                            </p>
                            <p class="summary">{$listcontentpopular[i].content|truncate:150:"...":true}</p>
                        </div>
                    </div>
                </div><!-- end .col-md-6 -->
            </div><!-- end .widget-content -->
			{/section}
			
			
			
        </div><!-- end .widget -->
    </div><!-- end .col-md-4 -->
</div><!-- end .row -->
<div class="row category-banner">
    <div class="col-md-4">
    	<a href="{$base_domain}style" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/1.png"/>
                </div>
               <div class="caption-title">
                    <h4 style="color:#9fc5e1;">Style</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="{$base_domain}event" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/2.png"/>
                </div>
                <div class="caption-title">
                    <h4>Events</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="{$base_domain}skin" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/3.png"/>
                </div>
                   <div class="caption-title">
                    <h4 style="color:#dda1a6;">SKIN 101</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="{$base_domain}diy" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/4.png"/>
                </div>
                <div class="caption-title">
                    <h4>D.I.Y</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="{$base_domain}relations" class="category-banner-box">
            <div class="front">
                <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/5.png"/>
                </div>
               <div class="caption-title">
                    <h4 style="color:#eba9b0;">Relations</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="{$base_domain}quiz" class="category-banner-box">
            <div class="front">
                <div class="thumb thumb-medium">
                    <img src="{$base_domain}assets/content/thumb/6.png"/>
                </div>
              <div class="caption-title">
                    <h4 style="color:#e1c7ed;">Quiz</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
</div><!-- end .row -->

<script>
{literal}

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
