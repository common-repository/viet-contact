<?php
// code add footer viet contact
function Viet_contact_footer_add_code_footer() {
global $vietcontact_options;
ob_start();?>
<div id="vcdesktop" class="vcdesktop">
<div id="vietcontact">
<button onclick="window.location.href='tel:<?php echo $vietcontact_options['ll4']; ?>'" id="vc-phone" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/phone.svg', __FILE__); ?>" /><span><?php echo $vietcontact_options['ll4']; ?></span></button>
<button onclick="window.location.href='mailto:<?php echo $vietcontact_options['ll3']; ?>'" id="vc-email" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/email.svg', __FILE__); ?>" /><span>Email</span></button>
<button onclick="window.open('https://chat.zalo.me/?phone=<?php echo $vietcontact_options['ll2']; ?>')" id="vc-zalo" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/zalo.svg', __FILE__); ?>" /><span>Zalo</span></button> 
<button onclick="window.open('https://m.me/<?php echo $vietcontact_options['ll1']; ?>')" id="vc-messenger" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/messenger.svg', __FILE__); ?>" /><span>Messenger</span></button> 
</div>
<div id="vcnutan">
<button id="vc-andi" onclick="vcandi()"><img style="width:35px;" src="<?php echo plugins_url('img/andi.svg', __FILE__); ?>" /><span>Ẩn</span></button>
<button id="vc-anhien" style="display:none" onclick="vcanhien()"><img style="width:35px;" src="<?php echo plugins_url('img/anhien.svg', __FILE__); ?>" /><span>Hiện</span></button>
</div>
</div>

<div class="vcmobile <?php echo $vietcontact_options['theme']; ?>" <?php if($vietcontact_options['color'] == true) { ?> style="background:<?php echo $vietcontact_options['mau'] ?> !important"<?php } ?>>
<button onclick="window.location.href='tel:<?php echo $vietcontact_options['ll4']; ?>'" id="vc-phone2" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/phone.svg', __FILE__); ?>" /></button>
<button onclick="window.location.href='mailto:<?php echo $vietcontact_options['ll3']; ?>'" id="vc-email2" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/email.svg', __FILE__); ?>" /></button>
<button onclick="window.open('https://chat.zalo.me/?phone=<?php echo $vietcontact_options['ll2']; ?>')" id="vc-zalo2" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/zalo.svg', __FILE__); ?>" /></button> 
<button onclick="window.open('https://m.me/<?php echo $vietcontact_options['ll1']; ?>')" id="vc-messenger2" type="button"><img style="width:35px;" src="<?php echo plugins_url('img/messenger.svg', __FILE__); ?>" /></button> 
</div>

<?php 
global $vietcontact_shortcode;
$vietcontact_shortcode = $vietcontact_shortcodes  = ob_get_clean();
if($vietcontact_options['code'] == true) {$vietcontact_shortcodes = "";} 
echo $vietcontact_shortcodes;
}
if ( did_action( 'wp_body_open' ) ) {
    add_action( 'wp_body_open', 'Viet_contact_footer_add_code_footer' );
} else {
add_action( 'wp_body_open', 'Viet_contact_footer_add_code_footer' );
}

//add shortcode
function Viet_contact_add_shortcode() {
	global $vietcontact_shortcode;
	return $vietcontact_shortcode;
}
add_shortcode( 'vietcontact', 'Viet_contact_add_shortcode' );

