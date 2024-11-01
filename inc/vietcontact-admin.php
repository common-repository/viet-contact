<?php
// viet contact add code admin
function vietcontact_options_page() {
	global $vietcontact_options;
	ob_start(); ?>
	<div class="wrap" style="font-size:16px;">
		<h2 style="background:#0056c1;padding:20px;color:#fff;border-radius:7px;"><b><?php echo __('QUẢN LÝ VIET CONTACT', 'viet-contact'); ?></b></h2>
		<form method="post" action="options.php">
			<?php settings_fields('vietcontact_settings_group'); ?>
		   <h4 style="font-size:26px;color:#444"><?php _e('Thay đổi các tùy chọn bên dưới', 'viet-contact'); ?></h4>
		   
		    <div style="margin-top:20px;background:#fff;padding:20px;border-left:7px solid #0056c1;box-shadow:0px 0px 10px #777">
		       <div style="margin-bottom:20px;"><b style="font-size:24px;color:#0056c1"><?php _e('Giao diện chế độ điện thoại', 'viet-contact'); ?></b></div>
		       <?php $styles = array('Pro1', 'Pro2', 'Pro3', 'Pro4'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="vietcontact_settings[theme]" id="vietcontact_settings[theme]" > 
               <?php foreach($styles as $style) { ?> 
               <?php if($vietcontact_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
               <option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option> 
               <?php } ?> 
               </select>
			   <br><br>
			   <div style="margin-bottom:10px;"><b style="font-size:18px;"><?php _e('Màu tùy chọn', 'viet-contact'); ?></b></div>
		       <input id="vietcontact_settings[color]" type="checkbox" name="vietcontact_settings[color]" value="1" <?php checked('1', $vietcontact_options['color']); ?> />
               <label class="description"><?php _e('Bật màu tùy chỉnh', 'viet-share'); ?></label>
			   <br><br>
			   <input style="border:2px solid #aaa;border-radius:10px;height:40px;width:70px;" id="vietcontact_settings[mau]" name="vietcontact_settings[mau]" type="color" value="<?php echo $vietcontact_options['mau']; ?>"/>
			</div>
		   
		   
		   
		   <div style="margin-top:20px;background:#fff;padding:20px;border-left:7px solid #0056c1;box-shadow:0px 0px 10px #777">
		        <div style="margin-bottom:20px;"><b style="font-size:24px;color:#0056c1"><?php _e('Nhập liên hệ của bạn vào ô bên dưới', 'viet-contact'); ?></b></div>
				<p><label style="font-size:18px;" class="description" for="vietcontact_settings[vietcontact]"><b><?php _e('Nhập nick chat Facebook Messenger', 'viet-contact'); ?></b></label></p>
				<input style="border:2px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:350px;width:100%;" id="vietcontact_settings[ll1]" name="vietcontact_settings[ll1]" type="text" value="<?php echo $vietcontact_options['ll1']; ?>"/>
				<p><label style="font-size:18px;" class="description" for="vietcontact_settings[vietcontact]"><b><?php _e('Nhập số điện thoại đã đăng ký Zalo ID', 'viet-contact'); ?></b></label></p>
				<input style="border:2px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:350px;width:100%;" id="vietcontact_settings[ll2]" name="vietcontact_settings[ll2]" type="text" value="<?php echo $vietcontact_options['ll2']; ?>"/>
				<p><label style="font-size:18px;" class="description" for="vietcontact_settings[vietcontact]"><b><?php _e('Nhập địa chỉ email của bạn vào', 'viet-contact'); ?></b></label></p>
				<input style="border:2px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:350px;width:100%;" id="vietcontact_settings[ll3]" name="vietcontact_settings[ll3]" type="text" value="<?php echo $vietcontact_options['ll3']; ?>"/>
				<p><label style="font-size:18px;" class="description" for="vietcontact_settings[vietcontact]"><b><?php _e('Nhập số điện thoại của bạn vào', 'viet-contact'); ?></b></label></p>
				<input style="border:2px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:350px;width:100%;" id="vietcontact_settings[ll4]" name="vietcontact_settings[ll4]" type="text" value="<?php echo $vietcontact_options['ll4']; ?>"/>
			</div>
			
			<div style="margin-top:20px;background:#fff;padding:20px;border-left:7px solid #0056c1;box-shadow:0px 0px 10px #777">
			   <div style="margin-bottom:10px;"><b style="font-size:18px;"><?php _e('Sử dụng Shortcode', 'viet-contact'); ?></b></div>
		       <input id="vietcontact_settings[code]" type="checkbox" name="vietcontact_settings[code]" value="1" <?php checked('1', $vietcontact_options['code']); ?> />
               <label class="description"><?php _e('Tích vào đây nếu bạn sử dụng Shortcode', 'viet-share'); ?></label>
			   <br><br>
			   <div style="border:2px solid #aaa;border-radius:10px;width:100%;max-width:600px;padding:10px;background:#e0fff5">&lt;?php echo do_shortcode(&#39;[vietcontact]&#39;); ?&gt;</div>
			   <br>
			   <?php _e('Nếu không hiển thị nút liên hệ trên web của bạn, bạn có thể sử dụng Shortcode này để dán vào file footer.php trong thư mục theme của bạn, thay cho hiển thị tự động.', 'viet-contact'); ?>
			<div>
			
		   <div class="submit"><input style="background:#0056c1;color:#fff;padding: 2px 16px 2px 16px;border:none;font-size:18px;border-radius:10px;" type="submit" class="button-primary" value="<?php _e('Lưu cài đặt', 'viet-contact'); ?>" /></div>
		</form>
	</div>
	<?php
	echo ob_get_clean();
}
// add muc luc menu admin
function vietcontact_add_options_link() {
	add_options_page('Viet Contact', 'Viet Contact', 'manage_options', 'vietcontact-options', 'vietcontact_options_page');
}
add_action('admin_menu', 'vietcontact_add_options_link');
// add thong tin vao database
function vietcontact_register_settings() {
	register_setting('vietcontact_settings_group', 'vietcontact_settings');
}
add_action('admin_init', 'vietcontact_register_settings');