<?php get_header();?>

	<?php
if (have_posts()) :
	while(have_posts()) : the_post();
?>
	<!-- <div class="container">
	   <div class="row">
	   <br>
	   <br>
	   <div class="col-md-8 col-md-offset-2">
		   	<div class="panel panel-info">
				    <div class="panel-heading">
				      <h3 class="panel-title">
				         Step 1: Complete application
				      </h3> 
				      </div>
				   <div class="panel-body">
				       Complete the Customer Account Application and SIGN the Customer Application.  
						Carefully read the Customer Agreement and the Risk Disclosure Statement. SIGN the
						acknowledgement for the Customer Agreement, Risk Disclosure Statement. Submit the
						completed and signed Customer Account Application (in its entirety) and the
						Signature
						Page for the Customer Agreement & Risk Disclosure Statement.

				   </div>
				   
				</div> 
	   </div>
	   <div class="col-md-8 col-md-offset-2">
		   	<div class="panel panel-info">
				    <div class="panel-heading">
				      <h3 class="panel-title">
				         Step 2: Verify and Submit Additional Personal Information.
				      </h3> 
				      </div>
				   <div class="panel-body">

				       Complete the Customer Account Application and <strong style="color:red;"><u>SIGN</u></strong> the Customer Application.  
						Carefully read the Customer Agreement and the Risk Disclosure Statement. SIGN the
						acknowledgement for the Customer Agreement, Risk Disclosure Statement. Submit the
						completed and signed Customer Account Application (in its entirety) and the
						Signature
						Page for the Customer Agreement & Risk Disclosure Statement.

				   </div>
				   
				</div> 
	   </div>
	   
	    <div class="col-md-8 col-md-offset-2">
		   	<div class="panel panel-info">
				    <div class="panel-heading">
				      <h3 class="panel-title">
				         Step 3: Account Details Processing
				      </h3> 
				      </div>
				   <div class="panel-body">

				      Send your completed, signed application (in its entirety), the Customer Agreement,
						Risk Disclosure Statement, along with required photo ID(s) to  
						GNADE CAPITAL LTD:
						 
						 
						Via e-mail (for expedited processing)
						ATTN: New Accounts
						applications@gnadecapital.com        
				   </div>
				   
				</div> 
	   </div>
	   

	   </div>
	  </div>
	  <div class="container-fluid">
	     <div class="line2 col-lg-12">
	         <h2 class="text-center" style="font:quicksand;">Sign Up Below</h2>
	     </div>
	  </div> -->
	  
	<div class="container">
		 <div class="row">
		 	
		 		<div class=""><?php the_content();?></div>
	   		
	   		</div>
	</div>
	
<?php
endwhile;
	
	 else :
	echo 'No Posts Found';
endif;

?>

<?php get_footer();?>