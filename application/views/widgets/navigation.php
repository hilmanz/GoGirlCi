 {if $user}
	<div class="widget">
    <div id="navigation">
		<ul class="nav">
			<li {if $pages==home || !$pages}class="active"{else}{/if}>
				<a href="{$basedomain}home">
					<i class="icons icon_home"></i>
					<span>Home</span>
					<i class="arrow-nav"></i>
				</a>	    				
			</li>
			<li {if $pages==gallery || !$pages}class="active"{else}{/if}>
				<a href="{$basedomain}gallery">
					<i class="icons icon_home"></i>
					<span>Gallery</span>
					<i class="arrow-nav"></i>
				</a>	    				
			</li>
		</ul>
    </div> <!-- /#nav -->
</div><!-- /.widget -->
{/if}
