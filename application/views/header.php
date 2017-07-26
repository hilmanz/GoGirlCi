 <header id="header" class="header">
    	<div class="container">
        	<div class="row">
                <div class="topbanner banner-ads">
                   <img src="{$basedomain}assets/content/banner.jpg"/>
                    <a href="{$basedomain}home" class="homebtn"></a>
                    <a href="{$basedomain}register" class="registerbtn"></a>
                </div>
            </div><!-- end .row -->
        	<div class="row navigation">
            	<div class="col-md-4">
                	<div class="logo">
			<a href="https://www.facebook.com/cleanclearindonesia" target="_blank"><img src="{$basedomain}assets/images/logo-cleanclear.png"/></a>
                    	<a href="http://www.gogirlmagz.com/" target="_blank"><img src="{$basedomain}assets/images/logo.png"/></a>
                    </div>
                </div><!-- end .col-md-4 -->
            	<div class="col-md-8">
                    <nav class="navbar nav-collapse">
                          <ul id="menu">
                           <li {if $pages=="home"}class="current"{/if}><a href="{$basedomain}home"><span>Home</span></a></li>
                            <li {if $pages=="style"}class="current"{/if}><a href="{$basedomain}style"><span>Style</span></a></li>
                            <li {if $pages=="event"}class="current"{/if}><a href="{$basedomain}event"><span>Events</span></a></li>
                            <li {if $pages=="skin"}class="current"{/if}><a href="{$basedomain}skin"><span>Skin 101</span></a></li>
                            <li {if $pages=="diy"}class="current"{/if}><a href="{$basedomain}diy"><span>D.I.Y</span></a></li>
                            <li {if $pages=="relations"}class="current"{/if}><a href="{$basedomain}relations"><span>Relations</span></a></li>
                            <li {if $pages=="quiz"}class="current"{/if}><a href="{$basedomain}quiz"><span>Quiz</span></a></li>
                          </ul>
                    </nav>
                </div><!-- end .col-md-4 -->
                <button class="btn-search" id="showsearch"><i class="icon-search">&nbsp;</i></button>
                <div id="navbarmobile"></div>
            </div><!-- end .row -->
        	<div class="row">
                <div class="searchbox-container">
                    <div class="searchbox">
                        <div class="search-form-overlay"></div>
                         <form class="search-form" action="{$basedomain}search" method="post">
                            <div class="formbox">
                                <input type="text" name="param">
                                <label>Tap enter after search</label>
                                <button type="submit" class="btn-search"><i class="icon-search">&nbsp;</i></button>
                            </div>
                        </form>
                    </div>
                     <a class="close-search" href="#">&nbsp;</a>
                </div>
            </div><!-- end .row -->
        </div><!-- end .container -->
    </header><!-- end #header -->
	
<script>
{literal}
$(document).ready(function(){
			$(document).on("click",".twitter-share", function(){
			console.log('masuk');
			var likenya=$(this).attr('likeidnya');
			var thiss=$(this);
			$.ajax({
                        'type': 'POST',
                        'url': basedomain+'likemodul/liketwitter',
                        'data': {like:likenya},
						'dataType':'json',
                        'success': function(result){
							
						
						}
						
						})
				});
});


$(document).ready(function(){
			$(document).on("click",".fb-share", function(){
			
			var likenya=$(this).attr('likeidnya');
			var thiss=$(this);
			console.log('masuk');
			$.ajax({
                        'type': 'POST',
                        'url': basedomain+'likemodul/likefb',
                        'data': {like:likenya},
						'dataType':'json',
                        'success': function(result){
							
						
						}
						
						})
				});
});
{/literal}
</script>
