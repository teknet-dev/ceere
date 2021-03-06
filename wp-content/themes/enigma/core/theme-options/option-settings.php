<?php  $wl_theme_options = weblizar_get_options(); 
$get_pro ="GET PREMIUM"; 
$get_pro_url ="http://weblizar.com/themes/enigma-premium/";
$site ="http://www.weblizar.com" ;?>
<div class="block ui-tabs-panel active" id="option-general" >	
	<form method="post" id="weblizar_theme_options_general">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('General Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_general_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<div class="panel-group" id="accordion">
		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						 <?php _e('Theme Color Schemes','weblizar'); ?>
						</a>
						<a href="<?php echo $get_pro_url; ?>" target="_blank" class="btn btn-info  btn_upsell"><?php echo $get_pro; ?></a>
					  </h4>					  
					</div>
					
					<div id="collapseOne" class="panel-collapse collapse ">
					  <div class="panel-body">
						<?php $stylesheet= ' ' ;?>
						<select id="style_sheet" name="style_sheet" class="_inpute">
								<option <?php echo selected($stylesheet, 'light-blue.css' ); ?> value="light-blue.css" ><?php _e('light-blue','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'green.css' ); ?> value="green.css" ><?php _e('green','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'red.css' ); ?> value="red.css" ><?php _e('red','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'pink.css' ); ?> value="pink.css" ><?php _e('pink','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'light-purple.css' ); ?> value="light-purple.css" ><?php _e('light-purple','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'orange.css' ); ?> value="orange.css" ><?php _e('orange','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'bright-green.css' ); ?> value="bright-green.css" ><?php _e('bright-green','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'dark-blue.css' ); ?> value="dark-blue.css" ><?php _e('dark-blue','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'oil.css' ); ?> value="oil.css" ><?php _e('oil','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'black.css' ); ?> value="black.css"  ><?php _e('black','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'light-brown.css' ); ?> value="light-brown.css" ><?php _e('light-brown','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'coffee.css' ); ?> value="coffee.css" ><?php _e('coffee','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'flat-blue.css' ); ?> value="flat-blue.css"  ><?php _e('flat-blue','weblizar'); ?></option>
						</select>
						<span class="explain"><?php  _e('Select OUT of 10+ Color Schemes','weblizar'); ?></span>
					  </div>
					</div>
				  </div> 
			</div>	
		</div>	
		<div class="section">
		<h3><?php _e('Home-Page or Custom Page','weblizar'); ?></h3>
		<input type="checkbox" name="_frontpage" value="1" <?php checked( $wl_theme_options['_frontpage'], 1 ); ?> /><span class="explain"><?php _e('Enable front-page on the HOME','weblizar');?> <a href="<?php echo esc_url(home_url( '/' )); ?>wp-admin/options-reading.php"><?php _e('Click Here','weblizar');?></a>.</span> 
		</div>
		<div class="section">
			<h3><?php _e('Custom Logo','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['upload_image_logo']!='') { echo esc_attr($wl_theme_options['upload_image_logo']); } ?>" id="upload_image_logo" name="upload_image_logo" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" />
			<span class="explain"><?php _e('Add custom logo from here suggested size is 150X50','weblizar');?></span>	
			<?php if($wl_theme_options['upload_image_logo']!='') { ?>
			<img style="height:60px;width:100px;" src="<?php if($wl_theme_options['upload_image_logo']!='') { echo esc_attr($wl_theme_options['upload_image_logo']); } ?>" />
			<?php } ?>
		</div>
		<div class="section">
			<h3><?php _e('Logo Height','weblizar'); ?></h3>
			<input class="weblizar_inpute"  type="text" name="height" id="height" value="<?php echo $wl_theme_options['height']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Height : 55px, if you want to increase than specify your value','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Logo Width','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="width" id="width"  value="<?php echo $wl_theme_options['width']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Width : 150px, if you want to increase than specify your value','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Custom Favicon','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['upload_image_favicon']!='') { echo esc_attr($wl_theme_options['upload_image_favicon']); } ?>" id="upload_image_favicon" name="upload_image_favicon" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Favicon Icon" class="upload_image_button"  /><br>	
			<span class="explain"><?php  _e('Make sure you upload .icon image type which is not more then 25X25 px.','weblizar');?></span>
			<?php if($wl_theme_options['upload_image_favicon']!='') { ?>
			<p><img style="height:60px;width:100px;" src="<?php  echo esc_attr($wl_theme_options['upload_image_favicon']);  ?>" /></p>
			<?php } ?>
		</div>		
		<div class="section">
			<h3><?php _e('Custom css','weblizar'); ?></h3>
			<textarea rows="8" cols="8" id="custom_css" name="custom_css"><?php if($wl_theme_options['custom_css']!='') { echo esc_attr($wl_theme_options['custom_css']); } ?></textarea>
			<div class="explain"><?php _e('This is a powerful feature provided here. No need to use custom css plugin, just paste your css code and see the magic.','weblizar'); ?><br></div>
		</div>	
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_general" name="weblizar_settings_save_general" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
		</div>
	</form>	
</div>
<!-------- Home slider setting -------->
<div class="block ui-tabs-panel deactive" id="option-home-image" >
	<form method="post" id="weblizar_theme_options_home-image">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Slidshow Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-image_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-image_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-image_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-image');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-image')" >
				</td>
				</tr>
			</table>			
		</div>	
			
		<div class="section">
		<div class="panel-group" id="accordion31">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"> <?php _e('Home Slide 1','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse31">
					<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
				</h4>
			</div>
			<div id="collapse31" class="panel-collapse collapse in">
			<div class="panel-body">
			<h3><?php _e('Home Slide Image One','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['slide_image_1']!='') { echo esc_attr($wl_theme_options['slide_image_1']); } ?>" id="slide_image_1" name="slide_image_1" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image 1" class="upload_image_button" />
			<span class="explain"><?php _e('Add Home Slide image here, size suggestion is 1400X570.','weblizar');?></span>	
			<?php if($wl_theme_options['slide_image_1']!='') { ?>
			<img style="height:240px; width:480px;" src="<?php if($wl_theme_options['slide_image_1']!='') { echo esc_attr($wl_theme_options['slide_image_1']); } ?>" />
			<?php } ?>
			<h3><?php _e('Home Slide Image Title One','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_title_1" id="slide_title_1"  value="<?php if($wl_theme_options['slide_title_1']!='') { echo esc_attr($wl_theme_options['slide_title_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Title Here','weblizar');?></span>
			<h3><?php _e('Home Slide Image Description One','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_desc_1" id="slide_desc_1"  value="<?php if($wl_theme_options['slide_desc_1']!='') { echo esc_attr($wl_theme_options['slide_desc_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Description Here','weblizar');?></span>
			<h3><?php _e('Home Slide Image Button Text One','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_text_1" id="slide_btn_text_1"  value="<?php if($wl_theme_options['slide_btn_text_1']!='') { echo esc_attr($wl_theme_options['slide_btn_text_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Text Here','weblizar');?></span>
			<h3><?php _e('Home Slide Image Button Link One','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_link_1" id="slide_btn_link_1"  value="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo esc_attr($wl_theme_options['slide_btn_link_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Link Here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		
		
		<!-- Home Slide 2 -->
		<div class="section">
		<div class="panel-group" id="accordion32">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"> <?php _e('Home Slide 2','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse32">
					<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
				</h4>
			</div>
			<div id="collapse32" class="panel-collapse collapse">
			<div class="panel-body">
			<h3><?php _e('Home Slide Image Two','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['slide_image_2']!='') { echo esc_attr($wl_theme_options['slide_image_2']); } ?>" id="slide_image_2" name="slide_image_2" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image 2" class="upload_image_button" />
			<span class="explain"><?php _e('Add Home Slide image here, size suggestion is 1400X570.','weblizar');?></span>	
			<?php if($wl_theme_options['slide_image_2']!='') { ?>
			<img style="height:240px; width:480px;" src="<?php if($wl_theme_options['slide_image_2']!='') { echo esc_attr($wl_theme_options['slide_image_2']); } ?>" />
			<?php } ?>
		
			<h3><?php _e('Home Slide Image Title Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_title_2" id="slide_title_2"  value="<?php if($wl_theme_options['slide_title_2']!='') { echo esc_attr($wl_theme_options['slide_title_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Title Here','weblizar');?></span>		
		
			<h3><?php _e('Home Slide Image Description Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_desc_2" id="slide_desc_2"  value="<?php if($wl_theme_options['slide_desc_2']!='') { echo esc_attr($wl_theme_options['slide_desc_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Description Here','weblizar');?></span>		
		
			<h3><?php _e('Home Slide Image Button Text Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_text_2" id="slide_btn_text_2"  value="<?php if($wl_theme_options['slide_btn_text_2']!='') { echo esc_attr($wl_theme_options['slide_btn_text_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Text Here','weblizar');?></span>	
		
			<h3><?php _e('Home Slide Image Button Link Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_link_2" id="slide_btn_link_2"  value="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo esc_attr($wl_theme_options['slide_btn_link_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Link Here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		
		<!-- Slide 3 -->
		<div class="section">
		<div class="panel-group" id="accordion33">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"> <?php _e('Home Slide 3','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse33">
					<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
				</h4>
			</div>
			<div id="collapse33" class="panel-collapse collapse">
			<div class="panel-body">
			<h3><?php _e('Home Slide Image Three','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['slide_image_3']!='') { echo esc_attr($wl_theme_options['slide_image_3']); } ?>" id="slide_image_3" name="slide_image_3" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image 3" class="upload_image_button" />
			<span class="explain"><?php _e('Add Home Slide image here, size suggestion is 1400X570.','weblizar');?></span>	
			<?php if($wl_theme_options['slide_image_3']!='') { ?>
			<img style="height:240px; width:480px;" src="<?php if($wl_theme_options['slide_image_3']!='') { echo esc_attr($wl_theme_options['slide_image_3']); } ?>" />
			<?php } ?>
		
			<h3><?php _e('Home Slide Image Title Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_title_3" id="slide_title_3"  value="<?php if($wl_theme_options['slide_title_3']!='') { echo esc_attr($wl_theme_options['slide_title_3']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Title Here','weblizar');?></span>
		
			<h3><?php _e('Home Slide Image Description Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_desc_3" id="slide_desc_3"  value="<?php if($wl_theme_options['slide_desc_3']!='') { echo esc_attr($wl_theme_options['slide_desc_3']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Description Here','weblizar');?></span>
		
			<h3><?php _e('Home Slide Image Button Text Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_text_3" id="slide_btn_text_3"  value="<?php if($wl_theme_options['slide_btn_text_3']!='') { echo esc_attr($wl_theme_options['slide_btn_text_3']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Text Here','weblizar');?></span>
		
			<h3><?php _e('Home Slide Image Button Link Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_link_3" id="slide_btn_link_3"  value="<?php if($wl_theme_options['slide_btn_link_3']!='') { echo esc_attr($wl_theme_options['slide_btn_link_3']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Slide Image Button Link Here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		<div class="section">
			<div class="panel-group" id="accordion1">
		
			  <div class="panel panel-default">		 
				<div class="panel-heading">
				 
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo">
					 <?php _e('More Slides','weblizar'); ?>
					</a>
					<a href="<?php echo $get_pro_url; ?>" target="_blank" class="btn btn-info  btn_upsell"><?php echo $get_pro; ?></a>
				  </h4>
				  
				</div>
				
				<div id="collapsetwo" class="panel-collapse collapse in">
				<div class="panel-body">
				<span class="explain"><?php  _e('Add Unlimited slides for your sideshow ','weblizar'); ?></span>
				</div>
				</div>
			  </div> 
			</div>
		</div>
		<!---Save DATA -->
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-image" name="weblizar_settings_save_home-image" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-image');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-image')" >
		</div>
	</form>	
</div>

<!-------- Home site info and blog setting ------------>
<div class="block ui-tabs-panel deactive" id="option-portfolio-settings" >
	<form method="post" id="weblizar_theme_options_portfolio-settings">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Portfolio Option','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_portfolio-settings_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_portfolio-settings_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_portfolio-settings_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('portfolio-settings');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('portfolio-settings')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Enable Portfolio on Home','weblizar'); ?></h3>			
			<input type="checkbox" name="portfolio_home" value="1" <?php checked( $wl_theme_options['portfolio_home'], 1 ); ?> /><span class="explain"><?php _e('Enable Portfolio On Home.','weblizar');?></span>
		</div>
		<div class="section">					
		<h3><?php _e('Portfolio Section Heading','weblizar'); ?></h3>
		<input  class="weblizar_inpute" type="text" name="port_heading" id="port_heading"  value="<?php if($wl_theme_options['port_heading']!='') { echo esc_attr($wl_theme_options['port_heading']); } ?>" >	
		<span class="explain"><?php  _e('Type here your Portfolio heading','weblizar');?></span>
		</div>
		<div class="section">
		<div class="panel-group" id="accordion11">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"> <?php _e('Portfolio One','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
					<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
			</div>
			<div id="collapse11" class="panel-collapse collapse in">
				  <div class="panel-body">	
			<h3><?php _e('Portfolio One Image','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_1_img']!='') { echo esc_attr($wl_theme_options['port_1_img']); } ?>" id="port_1_img" name="port_1_img" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image1" class="upload_image_button" />
			<span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>	
			<?php if($wl_theme_options['port_1_img']!='') { ?>
			<img style="height:240px; width:480px;" src="<?php if($wl_theme_options['port_1_img']!='') { echo esc_attr($wl_theme_options['port_1_img']); } ?>" />
			<?php } ?>
			<h3><?php _e('Portfolio One Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_1_title" id="port_1_title"  value="<?php if($wl_theme_options['port_1_title']!='') { echo esc_attr($wl_theme_options['port_1_title']); } ?>" >	
			<span class="explain"><?php  _e('Type title fro home portfolio one','weblizar');?></span>
			<h3><?php _e('Portfolio One Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_1_link" id="port_1_link"  value="<?php if($wl_theme_options['port_1_link']!='') { echo esc_attr($wl_theme_options['port_1_link']); } ?>" >	
			<span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		
		<div class="section">
		<div class="panel-group" id="accordion12">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"><?php _e('Portfolio Two','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
					 <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
			</div>
			<div id="collapse12" class="panel-collapse collapse">
				  <div class="panel-body">	
			<h3><?php _e('Portfolio Two Image','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_2_img']!='') { echo esc_attr($wl_theme_options['port_2_img']); } ?>" id="port_2_img" name="port_2_img" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image2" class="upload_image_button" />
			<span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>	
			<?php if($wl_theme_options['port_2_img']!='') { ?>
			<img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_2_img']!='') { echo esc_attr($wl_theme_options['port_2_img']); } ?>" />
			<?php } ?>
			<h3><?php _e('Portfolio Two Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_2_title" id="port_2_title"  value="<?php if($wl_theme_options['port_2_title']!='') { echo esc_attr($wl_theme_options['port_2_title']); } ?>" >	
			<span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
			<h3><?php _e('Portfolio Two Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_2_link" id="port_2_link"  value="<?php if($wl_theme_options['port_2_link']!='') { echo esc_attr($wl_theme_options['port_2_link']); } ?>" >	
			<span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		
		<div class="section">
		<div class="panel-group" id="accordion13">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"><?php _e('Portfolio Three','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
					 <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
					</a>
			</div>
			<div id="collapse13" class="panel-collapse collapse">
			<div class="panel-body">	
			<h3><?php _e('Portfolio Three Image','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_3_img']!='') { echo esc_attr($wl_theme_options['port_3_img']); } ?>" id="port_3_img" name="port_3_img" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image3" class="upload_image_button" />
			<span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>	
			<?php if($wl_theme_options['port_3_img']!='') { ?>
			<img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_3_img']!='') { echo esc_attr($wl_theme_options['port_3_img']); } ?>" />
			<?php } ?>
			<h3><?php _e('Portfolio Three Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_3_title" id="port_3_title"  value="<?php if($wl_theme_options['port_3_title']!='') { echo esc_attr($wl_theme_options['port_3_title']); } ?>" >	
			<span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
			<h3><?php _e('Portfolio Three Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_3_link" id="port_3_link"  value="<?php if($wl_theme_options['port_3_link']!='') { echo esc_attr($wl_theme_options['port_3_link']); } ?>" >	
			<span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>		
		
		<div class="section">
		<div class="panel-group" id="accordion14">
		<div class="panel panel-default">		 
			<div class="panel-heading">
				<h4 class="panel-title"><?php _e('Portfolio Four','weblizar'); ?>
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
					<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i> 
					</a>
			</div>
			<div id="collapse14" class="panel-collapse collapse">
			<div class="panel-body">	
			<h3><?php _e('Portfolio Four Image','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_4_img']!='') { echo esc_attr($wl_theme_options['port_4_img']); } ?>" id="port_4_img" name="port_4_img" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Image4" class="upload_image_button" />
			<span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>	
			<?php if($wl_theme_options['port_4_img']!='') { ?>
			<img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_4_img']!='') { echo esc_attr($wl_theme_options['port_4_img']); } ?>" />
			<?php } ?>
			<h3><?php _e('Portfolio Four Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_4_title" id="port_4_title"  value="<?php if($wl_theme_options['port_4_title']!='') { echo esc_attr($wl_theme_options['port_4_title']); } ?>" >	
			<span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
			<h3><?php _e('Portfolio Four Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="port_4_link" id="port_4_link"  value="<?php if($wl_theme_options['port_4_link']!='') { echo esc_attr($wl_theme_options['port_4_link']); } ?>" >	
			<span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>

        <div class="section">
            <div class="panel-group" id="accordion14">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php _e('Portfolio Five','weblizar'); ?>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                            </a>
                    </div>
                    <div id="collapse15" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h3><?php _e('Portfolio Four Image','weblizar'); ?></h3>
                            <input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_5_img']!='') { echo esc_attr($wl_theme_options['port_5_img']); } ?>" id="port_5_img" name="port_5_img" size="36" class="upload has-file"/>
                            <input type="button" id="upload_button" value="Image4" class="upload_image_button" />
                            <span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>
                            <?php if($wl_theme_options['port_5_img']!='') { ?>
                                <img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_5_img']!='') { echo esc_attr($wl_theme_options['port_5_img']); } ?>" />
                            <?php } ?>
                            <h3><?php _e('Portfolio Four Title','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_5_title" id="port_5_title"  value="<?php if($wl_theme_options['port_5_title']!='') { echo esc_attr($wl_theme_options['port_5_title']); } ?>" >
                            <span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
                            <h3><?php _e('Portfolio Four Link','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_5_link" id="port_5_link"  value="<?php if($wl_theme_options['port_5_link']!='') { echo esc_attr($wl_theme_options['port_5_link']); } ?>" >
                            <span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="panel-group" id="accordion14">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php _e('Portfolio Six','weblizar'); ?>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                            </a>
                    </div>
                    <div id="collapse16" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h3><?php _e('Portfolio Six Image','weblizar'); ?></h3>
                            <input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_6_img']!='') { echo esc_attr($wl_theme_options['port_6_img']); } ?>" id="port_6_img" name="port_6_img" size="36" class="upload has-file"/>
                            <input type="button" id="upload_button" value="Image4" class="upload_image_button" />
                            <span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>
                            <?php if($wl_theme_options['port_6_img']!='') { ?>
                                <img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_6_img']!='') { echo esc_attr($wl_theme_options['port_6_img']); } ?>" />
                            <?php } ?>
                            <h3><?php _e('Portfolio Four Title','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_6_title" id="port_6_title"  value="<?php if($wl_theme_options['port_6_title']!='') { echo esc_attr($wl_theme_options['port_6_title']); } ?>" >
                            <span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
                            <h3><?php _e('Portfolio Four Link','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_6_link" id="port_6_link"  value="<?php if($wl_theme_options['port_6_link']!='') { echo esc_attr($wl_theme_options['port_6_link']); } ?>" >
                            <span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="panel-group" id="accordion14">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php _e('Portfolio Seven','weblizar'); ?>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                            </a>
                    </div>
                    <div id="collapse17" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h3><?php _e('Portfolio Seven Image','weblizar'); ?></h3>
                            <input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['port_7_img']!='') { echo esc_attr($wl_theme_options['port_7_img']); } ?>" id="port_7_img" name="port_7_img" size="36" class="upload has-file"/>
                            <input type="button" id="upload_button" value="Image4" class="upload_image_button" />
                            <span class="explain"><?php _e('Add Portfolio image here, size suggestion is 570 X 350 px.','weblizar');?></span>
                            <?php if($wl_theme_options['port_7_img']!='') { ?>
                                <img style="height:350px; width:570px;" src="<?php if($wl_theme_options['port_7_img']!='') { echo esc_attr($wl_theme_options['port_7_img']); } ?>" />
                            <?php } ?>
                            <h3><?php _e('Portfolio Four Title','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_7_title" id="port_7_title"  value="<?php if($wl_theme_options['port_7_title']!='') { echo esc_attr($wl_theme_options['port_7_title']); } ?>" >
                            <span class="explain"><?php  _e('Type title from home portfolio','weblizar');?></span>
                            <h3><?php _e('Portfolio Four Link','weblizar'); ?></h3>
                            <input  class="weblizar_inpute" type="text" name="port_7_link" id="port_7_link"  value="<?php if($wl_theme_options['port_7_link']!='') { echo esc_attr($wl_theme_options['port_7_link']); } ?>" >
                            <span class="explain"><?php  _e('Put link URL here','weblizar');?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--	Tsilavina customization : suppression option d'ajout de service susceptible de créer un bug	-->
		<div class="section" style="display: none;">
			<div class="panel-group" id="accordion2">		
			  <div class="panel panel-default">
				<div class="panel-heading">				 
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapsethree">
					 <?php _e('Create Unlimited Portfolio','weblizar'); ?>
					</a>
					<a href="<?php echo $get_pro_url; ?>" target="_blank" class="btn btn-info  btn_upsell"><?php echo $get_pro; ?></a>
				  </h4>				  
				</div>				
				<div id="collapsethree" class="panel-collapse collapse in">
				  <div class="panel-body">				   
					<span class="explain"><?php  _e('Add More Sections and More Features on your website.','weblizar'); ?></span>
				  </div>
				</div>
			  </div> 
			</div>
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_portfolio-settings" name="weblizar_settings_save_portfolio-settings" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('portfolio-settings');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('portfolio-settings')" >
		</div>
	</form>	
</div>

<!--------------- service settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-service" >
	<form method="post" id="weblizar_theme_options_home-service">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Service Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-service_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">				
		<h3><?php _e('Service Section Heading','weblizar'); ?></h3>
		<input  class="weblizar_inpute" type="text" name="home_service_heading" id="home_service_heading"  value="<?php if($wl_theme_options['home_service_heading']!='') { echo esc_attr($wl_theme_options['home_service_heading']); } ?>" >	
		<span class="explain"><?php  _e('Type here your service heading','weblizar');?></span>
		</div>
		<div class="section">
			<div class="panel-group" id="accordion21">
			 <div class="panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title">
			<?php _e('Service one','weblizar'); ?><a data-toggle="collapse" data-parent="#accordion" href="#collapse21"><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
			</a>
			</h4>
			</div>
			<div id="collapse21" class="panel-collapse collapse in">
			<div class="panel-body">
			<hr>			
			<h3><?php _e('Service Title','weblizar'); ?></h3>			
			<input  class="weblizar_inpute" type="text" name="service_1_title" id="service_1_title"  value="<?php if($wl_theme_options['service_1_title']!='') { echo esc_attr($wl_theme_options['service_1_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
			<h3><?php _e('Service  Icons','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_1_icons" id="service_1_icons"  value="<?php if($wl_theme_options['service_1_icons']!='') { echo esc_attr($wl_theme_options['service_1_icons']); } ?>" >	
			<br>
			<span class="explain"><?php  _e('Service Icon (Using Bootstrap icons name) like: icon-tablet','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font Awesome icons','weblizar'); ?>.</a> </span>
			<h3><?php _e('Service Description','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_1_text"]!="" ? esc_attr($wl_theme_options["service_1_text"]) : "" ; ?>                     
		<?php $editor_id = "service_1_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
			<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
			<h3><?php _e('Service  Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_1_link" id="service_1_link"  value="<?php if($wl_theme_options['service_1_link']!='') { echo esc_attr($wl_theme_options['service_1_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
			</div>
			</div>
		</div>
		</div>
		</div>
		<div class="section">
			<div class="panel-group" id="accordion22">
			 <div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title"><?php _e('Service Two','weblizar'); ?><a data-toggle="collapse" data-parent="#accordion" href="#collapse22">
				
				<i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
				</h4>
				</div>
			<div id="collapse22" class="panel-collapse collapse">
				<div class="panel-body">
				<hr>			
				<h3><?php _e('Service Title','weblizar'); ?></h3>			
				<input  class="weblizar_inpute" type="text" name="service_2_title" id="service_2_title"  value="<?php if($wl_theme_options['service_2_title']!='') { echo esc_attr($wl_theme_options['service_2_title']); } ?>" >	
				<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
				<h3><?php _e('Service  Icons','weblizar'); ?></h3>
				<input  class="weblizar_inpute" type="text" name="service_2_icons" id="service_2_icons"  value="<?php if($wl_theme_options['service_2_icons']!='') { echo esc_attr($wl_theme_options['service_2_icons']); } ?>" >	
				<br>
				<span class="explain"><?php  _e('Service Icon (Using Bootstrap icons name) like: icon-tablet','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font Awesome icons','weblizar'); ?>.</a> </span>
				<h3><?php _e('Service Description','weblizar'); ?></h3>			
				<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_2_text"]!="" ? esc_attr($wl_theme_options["service_2_text"]) : "" ; ?>                     
		<?php $editor_id = "service_2_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
				<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
				<h3><?php _e('Service  Link','weblizar'); ?></h3>
				<input  class="weblizar_inpute" type="text" name="service_2_link" id="service_2_link"  value="<?php if($wl_theme_options['service_2_link']!='') { echo esc_attr($wl_theme_options['service_2_link']); } ?>" >	
				<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
				</div>
			</div>
		</div>
		</div>
		</div>
		
		<div class="section">
			<div class="panel-group" id="accordion22">
			 <div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title"><?php _e('Service Three','weblizar'); ?>
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse23"><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a></h4>
				</div>
			<div id="collapse23" class="panel-collapse collapse">
				<div class="panel-body">
				<hr>			
				<h3><?php _e('Service Title','weblizar'); ?></h3>			
				<input  class="weblizar_inpute" type="text" name="service_3_title" id="service_3_title"  value="<?php if($wl_theme_options['service_3_title']!='') { echo esc_attr($wl_theme_options['service_3_title']); } ?>" >	
				<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
				<h3><?php _e('Service  Icons','weblizar'); ?></h3>
				<input  class="weblizar_inpute" type="text" name="service_3_icons" id="service_3_icons"  value="<?php if($wl_theme_options['service_3_icons']!='') { echo esc_attr($wl_theme_options['service_3_icons']); } ?>" >	
				<br>
				<span class="explain"><?php  _e('Service Icon (Using Bootstrap icons name) like: icon-tablet','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font Awesome icons','weblizar'); ?>.</a> </span>
				<h3><?php _e('Service Description','weblizar'); ?></h3>			
				<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_3_text"]!="" ? esc_attr($wl_theme_options["service_3_text"]) : "" ; ?>                     
		<?php $editor_id = "service_3_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
				<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
				<h3><?php _e('Service  Link','weblizar'); ?></h3>
				<input  class="weblizar_inpute" type="text" name="service_3_link" id="service_3_link"  value="<?php if($wl_theme_options['service_3_link']!='') { echo esc_attr($wl_theme_options['service_3_link']); } ?>" >	
				<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
				</div>
			</div>
		</div>
		</div>
		</div>	
		<div class="section">
			<div class="panel-group" id="accordion3">		
			  <div class="panel panel-default">		 
				<div class="panel-heading">				 
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
					 <?php _e('More Services','weblizar'); ?>
					</a>
					<a href="<?php echo $get_pro_url; ?>" target="_blank" class="btn btn-info  btn_upsell"><?php echo $get_pro; ?></a>
				  </h4>				  
				</div>
				
				<div id="collapsefour" class="panel-collapse collapse in">
				  <div class="panel-body">				   
					<span class="explain"><?php  _e('Add More Services on your Home Page.','weblizar'); ?></span>
				  </div>
				</div>
			  </div> 
			</div>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-service" name="weblizar_settings_save_home-service" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>	
</div>

<!-------- Social media link settings ----------->
<div class="block ui-tabs-panel deactive" id="option-social" >	
	<form method="post" id="weblizar_theme_options_social">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Social media','weblizar');?></h2></td>
					<td style="width:30%;">
						<div class="weblizar_settings_loding" id="weblizar_loding_social_image"></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_success" ><?php _e('Options Data updated','weblizar');?></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_reset" ><?php _e('Options data Reset','weblizar');?></div>
					</td>
					<td style="text-align:right;">					
						<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
						<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
					</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<h3><?php _e('Enable Social media:','weblizar'); ?>  </h3>			
			<input type="checkbox" name="header_social_media_in_enabled" value="1" <?php checked( $wl_theme_options['header_social_media_in_enabled'], 1 ); ?> /><span class="explain"><?php _e('Enable social media Header Section.','weblizar'); ?></span>
			<input type="checkbox" name="footer_section_social_media_enbled" value="1" <?php checked( $wl_theme_options['footer_section_social_media_enbled'], 1 ); ?> /> <span class="explain"><?php _e('Enable Social media in Footer section.','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('E-mail:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="email_id" id="email_id" value="<?php if($wl_theme_options['email_id']!='') { echo esc_attr($wl_theme_options['email_id']); } ?>" >
			<span class="explain"><?php  _e('Enter Email Id.','weblizar');?></span>
			<h3><?php _e('Contact Number:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="phone_no" id="phone_no" value="<?php if($wl_theme_options['phone_no']!='') { echo esc_attr($wl_theme_options['phone_no']); } ?>" >
			<span class="explain"><?php  _e('Enter Contact Number.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Twitter Link:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="twitter_link" id="twitter_link" value="<?php if($wl_theme_options['twitter_link']!='') { echo esc_attr($wl_theme_options['twitter_link']); } ?>" >
			<span class="explain"><?php  _e('Enter twitter link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Linkedin Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="linkedin_link" id="linkedin_link" value="<?php if($wl_theme_options['linkedin_link']!='') { echo esc_attr($wl_theme_options['linkedin_link']); } ?>" >
			<span class="explain"><?php  _e('Enter linkedin link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Facebook Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="fb_link" id="fb_link" value="<?php if($wl_theme_options['fb_link']!='') { echo esc_attr($wl_theme_options['fb_link']); } ?>" >
			<span class="explain"><?php  _e('Enter facebook link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Youtube Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="youtube_link" id="youtube_link" value="<?php if($wl_theme_options['youtube_link']!='') { echo esc_attr($wl_theme_options['youtube_link']); } ?>" >
			<span class="explain"><?php  _e('Enter youtube link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Google Plus Link:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="gplus" id="gplus" value="<?php if($wl_theme_options['gplus']!='') { echo esc_attr($wl_theme_options['gplus']); } ?>" >
			<span class="explain"><?php  _e('Enter google plus link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Instagram Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="instagram" id="instagram" value="<?php if($wl_theme_options['instagram']!='') { echo esc_attr($wl_theme_options['instagram']); } ?>" >
			<span class="explain"><?php  _e('Enter Instagram link.','weblizar');?></span>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_social" name="weblizar_settings_save_social" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
		</div>
	</form>
</div>

<!---------------- footer customization Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-footer" >
	<form method="post" id="weblizar_theme_options_footer">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Footer Customization','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_footer_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<h3><?php _e('Footer customization','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="footer_customizations" id="footer_customizations"  value="<?php if($wl_theme_options['footer_customizations']!='') { echo esc_attr($wl_theme_options['footer_customizations']); } ?>" >	
			<span class="explain"><?php  _e('Enter your footer customization text ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_text" id="developed_by_text"  value="<?php if($wl_theme_options['developed_by_text']!='') { echo esc_attr($wl_theme_options['developed_by_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by text','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_weblizar_text" id="developed_by_weblizar_text"  value="<?php if($wl_theme_options['developed_by_weblizar_text']!='') { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link text  ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_link" id="developed_by_link"  value="<?php if($wl_theme_options['developed_by_link']!='') { echo esc_attr($wl_theme_options['developed_by_link']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link','weblizar');?></span>
		</div>			
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_footer" name="weblizar_settings_save_footer" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
		</div>
	</form>	
</div>

<!---------------- footer Call Out Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-footercall" >
	<form method="post" id="weblizar_theme_options_footercall">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Footer Call Out','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_footercall_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footercall_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footercall_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footercall');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footercall')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
		<input type="checkbox" name="fc_home" value="1" <?php checked( $wl_theme_options['fc_home'], 1 ); ?> /><span class="explain"><?php _e('Enable footer call out on home page','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Footer Call Out Tagline','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="fc_title" id="fc_title"  value="<?php if($wl_theme_options['fc_title']!='') { echo esc_attr($wl_theme_options['fc_title']); } ?>" >	
			<span class="explain"><?php  _e('Footer Call Out Tagline','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Button Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="fc_btn_txt" id="fc_btn_txt"  value="<?php if($wl_theme_options['fc_btn_txt']!='') { echo esc_attr($wl_theme_options['fc_btn_txt']); } ?>" >	
			<span class="explain"><?php  _e('Enter Button text  ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Button link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="fc_btn_link" id="fc_btn_link"  value="<?php if($wl_theme_options['fc_btn_link']!='') { echo esc_attr($wl_theme_options['fc_btn_link']); } ?>" >	
			<span class="explain"><?php  _e('Button link','weblizar');?></span>
		</div>			
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_footercall" name="weblizar_settings_save_footercall" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footercall');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footercall')" >
		</div>
	</form>	
</div>
<!---------------- footer customization Settings form ------------------------>

<div class="block ui-tabs-panel deactive" id="option-homeblog" >
	<form method="post" id="weblizar_theme_options_homeblog">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Home Blog','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_homeblog_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_homeblog_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_homeblog_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('homeblog');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('homeblog')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
		<h3><?php _e('Home-Page Blog','weblizar'); ?></h3>
		<input type="checkbox" name="show_blog" value="1" <?php checked( $wl_theme_options['show_blog'], 1 ); ?> /><span class="explain"><?php _e('Enable Blog Posts on HOME Page','weblizar');?>.</span> 
		</div>	
		<div class="section">
			<h3><?php _e('Home-Blog Heading','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="blog_title" id="blog_title"  value="<?php if($wl_theme_options['blog_title']!='') { echo esc_attr($wl_theme_options['blog_title']); } ?>" >	
			<span class="explain"><?php  _e('Home Blog Heading ','weblizar');?></span>
		</div>			
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_homeblog" name="weblizar_settings_save_homeblog" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('homeblog');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('homeblog')" >
		</div>
	</form>	
</div>
<?php $demo = "http://weblizar.com/themes/enigma-premium/";
$purchase ="http://weblizar.com/themes/enigma-premium/";
$theme_name ="Enigma"; 
?>
<div class="block ui-tabs-panel deactive" id="option-getpro" >
<div class="plan-name">
        <h2><?php echo $theme_name ;?> <?php _e('Pro Responsive WordPress Theme','weblizar'); ?></h2>
		<h6><?php _e('Get The Premium','weblizar'); ?> <?php echo $theme_name ;?> <?php _e('in Just','weblizar'); ?> <span>$39</span></h6>
</div>
<div class="plan-name centre">
        <h2><?php echo $theme_name; ?> <?php _e('Pro And Free Comparison Table','weblizar'); ?></h2>
</div>
<div class="row-fluid pricing-table pricing-three-column">
	<div class="col-md-4">
		<div class=" plan ap">
			<div class="plan-name">
				<h2><?php echo $theme_name; ?> <?php _e('Feature','weblizar'); ?></h2>
				
			</div>
			<ul>
				<li class="plan-feature"><?php _e('Easy to customize','weblizar'); ?> </li>
				<li class="plan-feature"><?php _e('Awesome Slider','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Multi Color','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Boxed & Wide','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Widgetized Footer','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom Widgets','weblizar'); ?></li>				
				<li class="plan-feature"><?php _e('Shortcode','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Page Templates','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Quick Support','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom CSS','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('WPML Compatible ','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom Background','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Logo & Header text','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Portfolio Template with Isotop','weblizar'); ?> </li>
				<li class="plan-feature"><?php _e('Photobox and Lightbox enable Tamplates','weblizar'); ?> </li>
				<li class="plan-feature"><?php _e('Special Gallery Template','weblizar'); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-4">
		<div class=" plan bp">
			<div class="plan-name">
				<h2><?php _e('Free','weblizar'); ?></h2>
				
			</div>
			<ul>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature">1</li>
				<li class="plan-feature"><?php _e('WPORG Support','weblizar'); ?></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				
				<li class="plan-feature">
					<a href="#" class="button button-primary button-hero" style="font-size: large; font-weight: bolder;"><i class="fa fa-thumbs-up"></i> <?php _e('Enjoy Theme','weblizar'); ?></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class=" plan cp">
			<div class="plan-name">
				<h2><?php _e('Pro','weblizar'); ?> - ( $39 )</h2>
				
			</div>
			<ul>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature">10</li>
				<li class="plan-feature">15</li>
				<li class="plan-feature"><?php _e('Private Support Forum','weblizar'); ?></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature">
					<a class="btn btn-primary btn-lg" href="<?php echo $demo ;?>" target="_new" style="font-size: large; font-weight: bolder;"><i class="fa fa-check-circle"></i> <?php _e('Demo','weblizar'); ?></a>
					<a class="btn btn-danger btn-lg" href="<?php echo $purchase ;?>" target="_new" style="font-size: large; font-weight: bolder;"><i class="fa fa-shopping-cart"></i> <?php _e('Buy','weblizar'); ?></a>
				</li>
			</ul>
		</div>
	</div>	
</div><style>
    .pricing-table .plan ul li.plan-feature {  padding: 8px !important;   }
    .ap .plan-name { background-color: #1E8CBE !important;  }
    .bp .plan-name { background-color: #1E8CBE !important;  }
    .cp .plan-name {  background-color: #1E8CBE !important; }
	li { font-size: larger !important;  }
    .row-fluid .span4 {       width: 30.624% !important;   }	
	#product_decs p {font-size:22px;}
	ol#weblizar_product li a{font-size:18px;}
</style>
</div>
<div class="block ui-tabs-panel deactive" id="option-ourproduct">
	<div class="row-fluid pricing-table pricing-three-column">
		<div class="plan-name centre"> 
			<a style="margin-bottom:10px;textt-align:center" target="_new" href="http://weblizar.com"><img  src="<?php echo  get_template_directory_uri(). '/images/weblizar2.png'?>" /></a>
			<div class="purchase_btn_div">
				<a href="http://www.weblizar.com" target="_new" class="btn btn-primary btn-lg dmobtn">View Site</a>		
			</div>
		</div>	
		<div class="plan-name">
			<h2><?php _e('Weblizar Responsive WordPress Theme','weblizar'); ?></h2>
			<h6><?php _e('Get The Premium, And Create your website Beautifully.','weblizar'); ?>  </h6>
		</div>
		<div class="section container">
			<div class="col-lg-6">
				<h2><?php _e('Premium Themes','weblizar'); ?> </h2><hr>
				<ol id="weblizar_product">
					<li><a href="http://weblizar.com/themes/enigma-premium/"><?php _e('Enigma','weblizar'); ?> </a> </li>
					<li><a href="http://weblizar.com/themes/weblizar-premium-theme/"><?php _e('Weblizar','weblizar'); ?> </a></li>					
					<li><a href="http://weblizar.com/themes/guardian-premium-theme/"><?php _e('Guardian','weblizar'); ?> </a></li>
					<li><a href="http://weblizar.com/plugins/green-lantern-premium-theme/"><?php _e('Green-lantern','weblizar'); ?></a> </li>
					<li><a href="https://weblizar.com/themes/creative-premium-theme/"><?php _e('Creative ','weblizar'); ?></a> </li>
					<li><a href="https://weblizar.com/themes/incredible-premium-theme/"><?php _e('Incredible','weblizar'); ?> </a></li>
				</ol>
			</div>
			<div class="col-lg-6">
				<h2><?php _e('Premium Plugins','weblizar'); ?></h2><hr>
				<ol id="weblizar_product">
					<li><a href="http://weblizar.com/ultimate-responsive-image-slider-pro/"><?php _e('Ultimate Responsive Image Slider','weblizar'); ?> </a> </li>
					<li><a href="http://weblizar.com/plugins/responsive-portfolio-pro/"><?php _e('Responsive Portfolio','weblizar'); ?> </a> </li>
					<li><a href="http://weblizar.com/plugins/responsive-photo-gallery-pro//"><?php _e('Responsive Photo Gallery','weblizar'); ?> </a> </li>
					<li><a href="http://weblizar.com/lightbox-slider-pro/"><?php _e('Lightbox Slider','weblizar'); ?> </a> </li>
					<li><a href="http://weblizar.com/plugins/flickr-album-gallery-pro/"><?php _e('Flickr Album Gallery','weblizar'); ?> </a> </li>
					<li><a href="https://weblizar.com/plugins/instagram-shortcode-and-widget-pro/"><?php _e('Instagram Shortcode & Widget','weblizar'); ?> </a> </li>
				</ol>
			</div>
		</div>	
		<div class="section container" id="product_decs">
			<p><?php _e('Note: More details to click on weblizar Products site link are below given view site button.','weblizar'); ?></p>	
		</div>
	</div>											
	<div class="plan-name centre"> 
		<div class="purchase_btn_div">
		  <a href="http://www.weblizar.com" target="_new" class="btn btn-primary btn-lg dmobtn"><?php _e('View Site','weblizar'); ?></a>		
		</div>
	</div>
</div>