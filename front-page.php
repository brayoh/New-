<?php get_header();?>

    <div class="container">
      <div class="row wrap">
        <div class="col-md-12 col-xs-10 gallery"> 
            <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
            
            <div data-thumb="" data-src="<?php echo get_template_directory_uri(). '/resources/img/slides/blank.gif'?>">
                <div class="img-responsive camera_caption fadeFromBottom">
                  <h2>Upto 22% returns</h2>
                </div>
              </div>
                <div data-thumb="" data-src="<?php echo get_template_directory_uri().'/resources/img/slides/blank.gif'?>">
                <div class="img-responsive camera_caption fadeFromBottom">
                  <h2>Your Investment </h2>
                </div>
              </div>
              <div data-thumb="" data-src="<?php echo get_template_directory_uri().'/resources/img/slides/blank.gif'?>">
                <div class="img-responsive camera_caption fadeFromBottom">
                  <h2>Your Life.</h2>
                </div>
              </div>
              
              <!-- <div data-thumb="" data-src="<?php echo get_template_directory_uri(). '/resources/img/slides/blank.gif'?>">
                <div class="img-responsive camera_caption fadeFromBottom">
                  <h2>on your investment</h2>
                </div>
              </div> -->
            </div><!-- #camera_wrap_1 -->
        </div>
      </div>
    </div>
  </div>
   <?php
      if (have_posts()) :
        while(have_posts()) : the_post();
      ?>
        <div class="container-fluid">
            <div class="row ">
            <div class="col-md-12">
            <?php the_content();?>
            </div>
          </div>
        </div>
        
      <?php
      endwhile;
        
         else :
        echo 'No Posts Found';
      endif;

      ?>
    <div class="container flat">
      <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <span class="tile tile-warning tile-valign">
                              <span class="fa fa-thumbs-o-up"></span><br>
                              Become an IBroker</span>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <span class="tile tile-me tile-valign">
                              <span class="fa fa-check-square-o"></span><br>
                              Become an affiliate</span> 
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
             <span class="tile tile-primary tile-valign">
                                          <span class="fa fa-user"></span><br> 
                                          The best services</span>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <span class="tile tile-danger tile-valign">
                                          <span class="fa fa-line-chart"></span><br>
                                          Grow your business</span>
                         
          </div>
           
          
      </div>
    </div>
   
      
    <div class="container-fluid">
        <div class="row line visible-lg">
            <h1 class="text-center">Who Is Gnade Capital</h1>
      </div>
    
      <div class="row about-gnade">
      <!--   <span class="fa fa-question-circle fa-5x"></span> -->


              <div class="who-gnade-is col-md-offset-1 col-md-10 col-xs-12">
                 <h1 class="text-center"><u>WHO WE ARE AND WHAT WE DO</u></h1>
                  <p>
                    Gnade Capital Ltd is a company that provides strategic investment management with a focus on Forex Trading.
                    The Forex market has become an alternative tool for today’s investors looking to expand their activity from 
                    the traditional investment opportunities such as the stock market, mutual funds, bonds, and real estate.
              
                   Gnade Capital Ltd offers currency asset management services as well as tools designed to help multiply an investor’s assets.
                   Our firm provides financial services for individuals and corporations via a Forex Exchange Managed Account offering.
                 </p>
              </div>
               
                  <!-- <div class="col-md-offset-1 col-md-10 text-center">
                   <h1 class="text-center"><u>Our Goal</u></h1>
                  <p> 
                     Our goal is to help our clients gain confidence by the high amount of transparency in our services. 
                     Accountability and delivery of superior performance in today’s markets provides unique investment solutions for any sized portfolio.
                     For institutional partners, the firm provides alternative investment portfolio administration services across the wide range of Forex Exchange Instruments.
                     The Forex market is one of the most liquid financial markets in the world with approximately $4 trillion volume of turnover daily.
                     As well as forming an excellent opportunity for investment, 
                     Forex also offers an alternative to the usual stocks, bonds and funds most investors opt for.
                 </p>
            </div> -->
         </div>
       </div>
     <div class="container-fluid clearfix">
          <div class="col-md-6 col-xs-12 col-sm-12 content-right-img visible-lg"> 
             <img class="img-responsive" src="<?php echo get_template_directory_uri(). '/resources/img/Golden-Text.png'?>" 
                alt="gnade capital forex trading"> 
          </div>

          <div class="col-md-6 col-xs-12 content-right"> 
          <h1 class="text-center">Managed Forex Accounts</h1> 
          <p>
            <strong>Managed forex accounts</strong> are becoming increasingly popular with investors seeking to diversify their portfolios.
             Particularly, for those who have neither the time or perhaps expertise to trade their own account.
             <p>
                <button type="submit" class="btn btn-info">Read More</button>
              </p>
          </p>
          </div>
          <div class="col-md-6 col-xs-12 content-left"> 
              <h1 class="text-center">Managed Forex Accounts</h1> 
              <p class="text-center">
                 Managed forex accounts are becoming increasingly popular with investors seeking to diversify their portfolios.
                 Particularly, for those who have neither the time or perhaps expertise to trade their own account.
                 
                 <!-- A Managed forex account is an account funded by the investor, who gives permission to the professional trader to trade on their behalf.  -->
              </p>
             <p>
                <button type="submit" class="btn btn-success">Read More</button>
                </p> 
          </div>
           <div class="col-md-6 col-xs-12 content-left-img visible-lg"> 
              <img class="img-responsive" src="<?php echo get_template_directory_uri(). '/resources/img/fx.png'?>" 
               alt="gnade capital forex trading">
          </div>

          
       <!--  <p class="col-md-12 text-center">
          This allows investors to leverage on the knowledge of the professional to earn profits on their investment, whilst maintaining 100% control over their funds. 
          Unlike mutual or hedge funds we do not collate your funds with other investors. The account is in your name and only you can redeem your fund.
        </p> -->
        <!-- <p class="col-md-12 text-center"> 
          Managed forex accounts are fully segregated accounts individually owned by each Investor at a brokerage firm and managed by our Portfolio Manager on client’s behalf. 
          Clients retain full control over their accounts at all times and Gnade Capital Portfolio Managers are granted “trade only” access to the accounts.

        <br>Managed forex accounts’ approach is a “set and forget” model. Once the Account is set up with the broker, 
        our Portfolio Manager takes care of all the rest: market research, entering and exiting trades, risk and trade management, and general account management.
        <br>If you don’t have either the time or experience to trade, 
        but still want to diversify your investment portfolio, then you can via our Managed Forex Account offering which is not only safe, secure and transparent, but also highly profitable.
        <br>Managed Accounts Service allows our clients to establish a Managed forex account which can consist of one or more of the Investment Portfolios. 
        This service enables us to delegate the day-to-day investment decisions of a client’s Managed forex accounts to Gnade Capital Portfolio Manager.
        Gnade Capital develops a model portfolio for each Investment Option. Client’s Portfolio is based on the model of a specific Investment Option,
         and is managed in accordance with the recommendations of our Investment Manager. -->
        </p>
      
      </div>
    </div> 
    <div class="container">
      <div class="row"> 

        <div class="col-md-4 gnade-capital-forex">
           <p class="text-center"><span class="fa fa-question-circle fa-5x"></span></p>
             <h3 class="text-center">Why open an Asset Management Account?</h3>
             	<p class="text-center">
             		A Gnade Capital Ltd Managed forex account offers private individuals participation in the
                 Foreign Exchange market and the potential high returns without the need to spend the countless 
                 hours required to invest wisely. 
    			    </p>
          </div>
          
			  <div class="col-md-4 text-center gnade-capital-forex">
             <p class="text-center"><span class="r fa fa-users fa-5x"></span></p>
              <h3 class="text-center">Transparency of your managed account</h3>
              <p>
               To ensure full transparency, all Gnade Capital Ltd clients are provided with the ability to monitor their account and the positions that
                Gnade Capital has executed on their behalf via secure online access Investors Terminal. 
                Clients can also download the history of all transactions as well as their performance and account balance
              </p>
        </div>
      
        <div class="col-md-4 text-center gnade-capital-forex">
            <p class="text-center"><span class="r fa fa-edit fa-5x"></span></p>
               <h3 class="text-center">Advantage of Forex Managed Account</h3>
            <p>
              Managed forex Account provides diversification to investment portfolios. In addition, access to online data offers the opportunity to learn.
              It allows for the possibility of generating very high returns without having to deal with the stress associated with trading on your own Execution/Brokerage account.
           
    			  </p>
        </div>
      </div>
    </div>   
   
<?php get_footer();?>
