<h1>{if $hasil=='success'} Berhasil {else} {$error_no}{/if}</h1>
       
<div class="row">
	<div class="page-title">
    	<div class="col-md-12">
        	<h2 style="font-size:24px;">CERITA KITA, PROMO DISCOUNT 50%<br /> CLEAN & CLEAR<span style="font-size:14px; position:relative; top:-15px;">&reg;</span> FOAMING FACIAL WASH 100 ML <br /><img src="{$basedomain}assets/images/logo-alfa.png" /> </h2>
        </div>
    </div>
    <div class="pagecontainer">
    		<div id="errorbox" class="errorbox">
        	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>
        </div>   
	   
	   <form class="theform" action="" method="post"  enctype="multipart/form-data">
			<div class="row">
                <div class="col-md-4">
                    <label>Nama</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="name" id='name' value="{$name}"/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Umur</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required number" name="umur"  id='umur' maxlength="3"/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>No. HP</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required number" name="telp"  id='telp' maxlength="20"/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
           <div class="row">
                <div class="col-md-8">
                	<div class="checkbox-row">
						 <input type="hidden"  name="submit" value="1"/>
                       <input type="checkbox" id="myCheck" name="agree"/>
                        <span>Saya sudah membaca dan menyetujui  <a href="{$basedomain}promo/termandconditions" target="_blank">Terms and Conditions</a> dari tim Cerita Kita</a></span>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-12">
					<input type="hidden" >
					<input type="submit" name="send" id='send' class="send" style="display:none">
                	<button type="button" class="button fr okeh" >SUBMIT</button>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
			</form>
 </div><!-- end .entry-detail -->
</div><!-- end .row -->
<script>
{literal}

$('.number').keyup(function () {  
		if(this.value)
		{
			this.value = this.value.replace(/[^0-9]/g,''); 
			
		}
	});
	
	
$("#joinform").on("click", function(){

if($('#name').val()=='' || $('#umur').val()=='' || $('#telp').val()==''  || document.getElementById("myCheck").checked == false ){

	$(".errorbox").show();	
	console.log('ssawwe');
}else{


$('#send').trigger('submit');
}


	/*$(".theform").validate({
		onkeyup: false,
  		ignore: ".ignore",
		
		  rules: {
			agree: {
			  required: true,
			  },
			name: "required",
			umur: "required",
			telp: "required",
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
		
		
	
	
		
		
		
		
	});
		$(".okeh").on("click", function(){
	
			$('#name').removeClass('error');
			$('#telp').removeClass('error');
			$('#umur').removeClass('error');
			
			$('#myCheck').removeClass('error');
			
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,15})+$/; 
				if($('#name').val()=='' || $('#telp').val()==''  || $('#umur').val()=='' || document.getElementById("myCheck").checked == false )
				{
					console.log($('#name').val());
					console.log($('#telp').val());
					console.log( $('#umur').val());
					console.log(document.getElementById("myCheck").checked);
					$(".errorbox").show();	
					$(".errorbox").html('	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>');
					
					if($('#name').val()=='')
					{
					$('#name').focus();
					$('#name').addClass('error');
					}
					if($('#telp').val()=='')
					{
					$('#telp').focus();
					$('#telp').addClass('error');
					}
					if($('#umur').val()=='')
					{
					$('#umur').focus();
					$('#umur').addClass('error');
					}
					
					if(document.getElementById("myCheck").checked == false)
					{
					$('#myCheck').focus();
					$('#myCheck').addClass('error');
					}
					//console.log('sdsdsd');
					return false;
				}
				
		$('#send').trigger('click');
	});
	
	
	$( "#uploadBtn" ).change(function () {
		$( "#uploadFile" ).val(this.value);
	 });
	$( "#uploadBtnImage" ).change(function () {
		$( "#uploadFileImage" ).val(this.value);
	 });
{/literal}	
</script>
 
