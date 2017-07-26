    <link href="{$basedomain}assets/css/bootstrap.css" rel="stylesheet">
    <link href="{$basedomain}assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="{$basedomain}assets/css/bootstrap-overrides.css" rel="stylesheet">
	<link href="{$basedomain}assets/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href="{$basedomain}assets/css/bin.css" rel="stylesheet">
	<link href="{$basedomain}assets/css/components/signin.css" rel="stylesheet" type="text/css">   

<div id="login-container">
    <div class="account-container login">
        <div class="content clearfix">
        	<div class="login_logo">
            	<h1 style="color:#BF1323;">InOrOut</h1>
            </div>
            <form id="loginBeat" method="POST" action="{$basedomain}login/local" >	
                <div class="login-fields">
                    <div class="field">
                        <label for="username">Username:</label>
                        <input type="text" id="username" class="required" name="username" value="" placeholder="Username" class="login" />
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="password">Password:</label>
                       
                        <input type="password" id="password" class="required" name="password" value="" placeholder="Password" class="login"/>
                    </div> <!-- /password -->
                </div> <!-- /login-fields -->
                <div class="login-actions">
					 {if $res}	 
						{else}{if $msg == "null"}  {else}  {$msg} {/if}
					 {/if}
					 <input type="hidden" id="" name="login" value="1" />
                    <button class="button"><span class="icons icon_lock"></span><span>Sign In</span></button>
                </div> <!-- .actions -->
            </form>
        </div> <!-- /content -->
    </div> <!-- /account-container -->
</div> <!-- /login-container -->