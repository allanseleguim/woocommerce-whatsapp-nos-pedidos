<?php
/**
 * Plugin Name:       Pedidos: Telefone para Whatsapp
 * Plugin URI:        https://www.selega.com.br
 * Description:       Acrescenta link para Whatsapp WEB após o campo de telefone.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Allan Seleguim
 * Author URI:        https://www.selega.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
?>

<?php


/* GERANDO LINK ADICIONAL DO WHATSAPP */ 


 function add_whatsapp() { 
?>
      <div class="wc-order-preview-addresses">
            <div class="wc-order-preview-address">
                 
                  <# if ( data.data.billing.phone ) { #>
                  <strong>Whatsapp: </strong>
                  <a href="#" onclick="changeTeltoWhats('{{ data.data.billing.phone }}')" class="clientwhats" target="_blank">{{ data.data.billing.phone }}</a>
                  <# } #>
            </div>
      </div>

<?php }  ?>

<?php add_action('woocommerce_admin_order_preview_start', 'add_whatsapp'); ?>

<?php

/* INSERINDO JAVASCRIPT PARA MUDAR LINK */ 

add_action( 'admin_enqueue_scripts', 'js_tel_to_whats' );

function js_tel_to_whats(){
  wp_enqueue_script( 'my-custom-script', plugin_dir_url( __FILE__ ) . '/tel_to_whats.js', array( 'jquery' ) );
}

?>
