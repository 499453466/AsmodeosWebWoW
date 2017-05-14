{$head}
<script type="text/javascript" src="{$image_path}resources/min/?f=template/js/jquery-1.7.js,template/js/custom.js,template/js/alertbox.js,template/js/jquery.cycle.all.js,template/js/jquery.easing.1.3.js,template/js/video.bg.js"></script>
<div id="fb-root">
</div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=542727609162776";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3442782683509797",
    enable_page_level_ads: true
  });
</script>
					
	<body>
	
		<!--[if lte IE 8]>
			<style type="text/css">
				body {
					background-image:url(images/background.png);
					background-position:top center;
				}
			</style>
		<![endif]-->
		<section id="wrapper">
			{$modals}
            <a id="server_logo" href="http://asmodeos-wow.tk/" title="{$serverName}"><p>{$serverName}</p></a>
			<!-- Navbar -->
			<ul id="top_menu">
							
				<li><a href='http://asmodeos-wow.tk/page/foro'><span>Foro</span></a></li>
				<div id='cssmenu'>
<ul>
   
   <li class='has-sub'><a href='#'><span>Features</span></a>
      <ul>
         <li class='has-sub'><a href='http://asmodeos-wow.tk/online'><span>Jugadores Online</span></a>
            
         </li>
         <li class='has-sub'><a href='http://asmodeos-wow.tk/armory'><span>Armeria</span></a>

         </li>
		 <li class='has-sub'><a href='http://asmodeos-wow.tk/store'><span>Tienda</span></a>

         </li>
		 </li>
		 <li class='has-sub'><a href='http://asmodeos-wow.tk/lottery'><span>Loteria</span></a>

         </li>
		 
		  <li class='has-sub'><a href='http://asmodeos-wow.tk/character_tools'><span>Herramientas de personaje</span></a>

         </li>
      </ul>
   </li>
   

<li class='has-sub'><a href='#'><span>Soporte</span></a>
      <ul>
         <li class='has-sub'><a href='http://asmodeos-wow.tk/page/connect'><span>Guia de Conexion</span></a>
            
         </li>
         <li class='has-sub'><a href='http://asmodeos-wow.tk/bugreport'><span>Bugtracker</span></a>

		</li>	
		<li class='has-sub'><a href='http://asmodeos-wow.tk/page/descargas'><span>Zona de Descargas</span></a>

		</li>		
      </ul>
   </li>
   <li><a href='http://asmodeos-wow.tk/vote'><span>Votar</span></a></li>
   {foreach from=$menu_top item=menu_1}
					<li><a {$menu_1.link}>{$menu_1.name}</a></li>
				{/foreach}
  
</div>

		</ul>
		
	<!-- Navbar END -->
				
			<div class="main_b_holder" align="center">
			<div class="membership-holder">
			<div class="membership-bar">
			<div class="member-side-left">
            <div id="header">
            	
                <div class="top_container">
                
                	<div class="login_box_top">
                    	<div class="actions_cont">
                        
                        	{if $isOnline}
                            	<div class="account_info">
                                	
                                    <!-- Avatar -->
                                    	<div class="avatar_top">
                                            <img src="{$CI->user->getAvatar()}" width="50" height="50"/>
                                            <span></span>
                                        </div>
                                    <!-- Avatar . End -->
                                    
                                    <!-- Welcome & VP/DP -->
                                	<div class="left">
                                    
                                        <p>Bienvenid@, <span>{$CI->user->getUsername()}</span>!</p>
                                        <div class="vpdp">
                                        
                                        	<div class="vp">
                                           		<img src="{$url}application/images/icons/lightning.png" align="absmiddle" width="12" height="12" /> VP
                                                <span>{$CI->user->getVp()}</span>
                                            </div>
                                            <div class="dp">
                                           		<img src="{$url}application/images/icons/coins.png" align="absmiddle" width="12" height="12"  /> DP
                                                <span>{$CI->user->getDp()}</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Welcome & VP/DP . End-->
                                    	<div class="right">
                                        	<a href="{$url}ucp" class="nice_button">panel</a>
											<a href="{$url}messages" class="nice_button">PM</a>
                                            <a href="{$url}vote" class="nice_button">Votar</a>
											<a href="{$url}logout" class="nice_button">Log out</a>
                                        </div>
                                    <!-- Account Panel & Logout -->
                                    
                                </div>
                            {else}
                            	<div class="login_form_top">
                                    {form_open('login')}
                                            <input type="text" name="login_username" id="login_username" value="" placeholder="Username">
                                            <input type="password" name="login_password" id="login_password" value="" placeholder="Password">
                                            <input type="submit" name="login_submit" value="Login">
											<a href="{$url}register" class="submit">Register</a>
                                    </form>
									
                            	</div>
                            {/if}
                            
                        </div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						
						
                   
                    
                
                
                
				
                
                
                    
               
                
                <!--{$serverName}-->
           	
            
            
            
            
			<div id="main">
            
                
				<aside id="left">
					{if $isOnline}
                        <a href="{$url}vote" id="vote_banner"><p>votar</p></a>
                        {else}
                        <a href="{$url}register" id="register_banner"><p>Crear Cuenta</p></a> 
                    {/if}
                
                	
                    
                    <article>
						<ul id="left_menu">
							{foreach from=$menu_side item=menu_2}
								<li><a {$menu_2.link}><img src="{$image_path}bullet.png">{$menu_2.name}</a>
							{/foreach}
						<li class="bot_shadow"></li>
						</ul>
						
					</article>                   
                   	
                    {foreach from=$sideboxes item=sidebox}
						<article class="sidebox">
							<h1 class="top"><p>{$sidebox.name}</p></h1>
							<section class="body">
								{$sidebox.data}
							</section>
						</article>
					{/foreach}
                    
				</aside>
				
				<aside id="right">
					<script type="text/javascript">
    google_ad_client = "ca-pub-3442782683509797";
    google_ad_slot = "9974233583";
    google_ad_width = 780;
    google_ad_height = 90;
</script>
<!-- asmodeos3 -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

					{$page}
					
				</aside>

				<div class="clear"></div>
			</div>
			</div><p align="center">
			</p><div id="foot"></div>
			<footer>
			
            	<h3>

<b>World of Warcraft©<b> and Blizzard Entertainment© are all trademarks or registered trademarks<br/>
of Blizzard Entertainment in the United States and/or other countries. These terms and all related<br/>
materials, logos, and images are copyright © Blizzard Entertainment. This site is in no way<br/>
associated with or endorsed by Blizzard Entertainment©
</h3><p align="center">
                
             	<script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"></script><a href="http://www.dmca.com/Protection/Status.aspx?ID=0299dc82-cf94-4147-bd1b-be1c18a4de6d" title="DMCA.com Protection Program" class="dmca-badge"> <img src ="//images.dmca.com/Badges/_dmca_premi_badge_3.png?ID=0299dc82-cf94-4147-bd1b-be1c18a4de6d"  alt="DMCA.com Protection Status" /></a>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- asmodeos2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3442782683509797"
     data-ad-slot="9254379984"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
			</footer>
		</section>
	</body>
</html>