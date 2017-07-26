<!-- <h1>{if $hasil=='success'} Berhasil {else} {$error_no}{/if}</h1> -->
<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>Join Now!</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc">Daftar di sini untuk jadi bagian dari kontributor Cerita Kita! Kamu bisa berbagi dan juga mengekspresikan talentamu bersama dengan teman-teman lainnya. Selain itu, kamu juga bisa bertemu mentor-mentor di bidang yang kamu suka dan berkesempatan buat menangin iPad mini serta magang di Gogirl! Magazine.<br /> Yuk, tunggu apa lagi!</p>
        </div>
    </div>
    <div class="pagecontainer">
    	<div id="errorbox" class="errorbox">
        	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>
        </div>
    	<form class="theform" action="" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-md-4">
                    <label>Tipe Kontributor</label>
                </div><!-- end .col-md-4 -->
				
		
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="writer" />
                        <span>Writer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="beauty" />
                        <span>Beauty Enthusiast</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="graphic_designer"/>
                        <span>Graphic Designer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="shotographer" />
                        <span>Photographer</span>
                    </div>
					<div class="checkbox-row">
                        <input type="radio" name="tipe" value="fashion_stylist" />
                        <span>Fashion Stylist</span>
                    </div>
					    <i>Pilih salah satu (Tipe Contributor)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
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
                    <label>Alamat</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="alamat"  id='alamat'/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>No. Hp</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required number" name="telp"  id='telp'/>
                    <i>Tim Cerita Kita akan mengirimkan kode unik untuk diskon 50% pembelian produk Clean and Clear FFW di Alfamart</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="email"  id='email'/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Your Story</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<textarea class="required" name="story" id='story'></textarea>
                    <i>Ceritakan singkat tentang kamu, passion kamu dan kenapa kamu ingin menjadi kontributor di Cerita Kita (max 270 karakter)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload File</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFile" type="text" class="required inputfile1" readonly/>
                         <div class="file_upload">
                          	<input id="uploadBtn" type="file"  class="custom-file-input" name="resume" />
                          </div>
                    </div>
                    <i>Sertakan tulisan atau foto karya kamu (dalam bentuk Doc)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload Foto Kamu</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFileImage" type="text" class="required inputfile2" name="rsss" readonly/>
                        <div class="file_upload">
                        	<input id="uploadBtnImage" type="file"  class="custom-file-input resume2" name="resume2">
                        </div>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="hidden"  name="submit" value="1"/>
						 <input type="checkbox" id="myCheck" name="agree"/>
                        <span>Saya sudah membaca dan menyetujui  <a href="{$basedomain}register/termandcondition" target="_blank">Terms and Conditions</a> dari tim Cerita Kita</a></span>
						
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-12">
					<input type="hidden" >
					<input type="submit" name="send" id='send' class="send" style="display:none">
					 <button class="button fr okeh" id="send">SUBMIT</button>
                	{*}<a href="{$basedomain}register#"  id="joinform" class="button fr okeh">SUBMIT</a>{/*}
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        </form>
    </div><!-- end .entry-detail -->
</div><!-- end .row -->
<script>
{literal}


$('#uploadBtn').click(function(e)
 {
	
			
			thiss= $("#uploadBtn");
			thiss.change(function(e)
			{
		   
			   e.preventDefault();
			   console.log(this.files[0].type);
			   if(this.files[0].size != '')
			   {
				if(this.files[0].size > 5000000)
				{
					alert('File lebih dari 5 Mb ');
					$('#uploadBtn').val("");
					return false;
				}
				if(this.files[0].type !='application/msword' && this.files[0].type !='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
				{
						alert('Format File harus Doc/Docx ');
						$('#uploadBtn').val("");
						return false;
				}
				
				if(this.files[0].size < 5000000 && this.files[0].type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || this.files[0].type =='application/msword'){
				
						$( "#uploadFile" ).val(this.value);
						return true;


				}
				}
				
			});
			
});	


$('#uploadBtnImage').click(function(e)
 {
	
			
			thiss= $("#uploadBtnImage");
			thiss.change(function(e)
			{
		   
			   e.preventDefault();
			   console.log(this.files[0].type);
			   if(this.files[0].size != '')
			   {
				if(this.files[0].size > 2000000)
				{
					alert('File lebih dari 5 Mb ');
					$('#uploadBtnImage').val("");
					return false;
				}
				if(this.files[0].type !='image/jpeg' && this.files[0].type !='image/png')
				{
					alert('Format File harus image/png/jpg ');
					$('#uploadBtnImage').val("");
					return false;
				}
				
				if(this.files[0].size < 2000000 && this.files[0].type=='image/jpeg' || this.files[0].type=='image/png'){
				
						$( "#uploadFileImage" ).val(this.value);
						return true;


				}
				}
				
			});
			
});	

$("#joinform").on("click", function(){


if($('#name').val()=='' || $('#alamat').val()=='' || $('#telp').val()==''  || $('#story').val()=='' || $('.inputfile1').val()=='' || $('.inputfile2').val()=='' || document.getElementById("myCheck").checked == false ){

	$(".errorbox").show();	
	console.log('dsdsd');
}else{
	$('#send').trigger('click');
	//console.log('1223');
}


	$(".theform").validate({
		onkeyup: false,
  		ignore: ".ignore",
		
		  rules: {
			agree: {
			  required: true,
			  },
			name: "required",
			rsss: "required",
			alamat: "required",
			telp: "required",
			story: "required",
			file: "required",
			image: "required",
			email: {
			  required: true,
			  email: true
			}
			
			
		  },
		  success: "valid",
		  submitHandler: function() {
			form.submit();
		},
		 
		});
		
	
	});
	
	
	
	//$( "#uploadBtn" ).change(function () {
		//$( "#uploadFile" ).val(this.value);
	 //});
	//$( "#uploadBtnImage" ).change(function () {
	//	$( "#uploadFileImage" ).val(this.value);
	// });
	 
	$(".okeh").on("click", function(){
	
	$('#name').removeClass('error');
	$('#telp').removeClass('error');
	$('#story').removeClass('error');
	$('#email').removeClass('error');
	$('#alamat').removeClass('error');
	$('#uploadFile').removeClass('error');
	$('#myCheck').removeClass('error');
	$('#uploadFileImage').removeClass('error');
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,15})+$/; 
		if($('#name').val()=='' || $('#').val()=='' || $('#telp').val()==''  || $('#story').val()=='' || $('#email').val()==''|| $('#uploadFile').val()=='' || $('#uploadFileImage').val()=='' || document.getElementById("myCheck").checked == false )
		{
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
			if($('#story').val()=='')
			{
			$('#story').focus();
			$('#story').addClass('error');
			}
			if($('#email').val()=='')
			{
			$('#email').focus();
			$('#email').addClass('error');
			}
			if($('#alamat').val()=='')
			{
			$('#alamat').focus();
			$('#alamat').addClass('error');
			}
			
			if($('#uploadFile').val()=='')
			{
				$('#uploadFile').focus();
				$('#uploadFile').addClass('error');
			}
			if($('#uploadFileImage').val()=='')
			{
				$('#uploadFileImage').focus();
				$('#uploadFileImage').addClass('error');
			}
			if(document.getElementById("myCheck").checked == false)
			{
				$('#myCheck').focus();
				$('#myCheck').addClass('error');
			}
			//console.log('sdsdsd');
			$(window).scrollTop(0);
			return false;
		}
		else{
			$(".errorbox").show();
				$(".errorbox").html('	<p><i class="icon-report-problem"></i> format email salah</p>');
			if(!$('#email').val().match(mailformat))  
					{  
						
						$('#email').focus();
						$('#email').addClass('error');
						$(window).scrollTop(0);
							return false;
					} 
		}
		 
	});
	
	$('.number').keyup(function () {  
		if(this.value)
		{
			this.value = this.value.replace(/[^0-9]/g,''); 
			
		}
	});
	{/literal}	


</script>
 