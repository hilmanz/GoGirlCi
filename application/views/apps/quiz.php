<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>Quiz</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc" style="padding:46px 0 0 0;">Mainin kuisnya dan temuin serunya!</p>
        </div>
    </div>
    <div class="pagecontainer">
	{section name=i loop=$listquiz}
    		<img src="{$basedomain}public_assets/quiz/{$listquiz[i].img}"/>
	{/section}
    </div><!-- end .pagecontainer -->
</div><!-- end .row -->