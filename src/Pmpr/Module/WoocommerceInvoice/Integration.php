<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6844521021369             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice; class Integration extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('before_invoice_content', [$this, 'aogqaweagqgciwao'])->qcsmikeggeemccuu('after_invoice_content', [$this, 'gqwsmwiwasymkcsi']); } public function aogqaweagqgciwao($umwqusowiqmyseom) { global $sitepress; if ($sitepress) { $swaukaagekiououo = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw('wpml_language', $umwqusowiqmyseom); if ($swaukaagekiououo != '') { $sitepress->get_current_language(); $sitepress->switch_lang($swaukaagekiououo); } } } public function gqwsmwiwasymkcsi() { global $sitepress; if ($sitepress) { $sitepress->switch_lang($sitepress->get_default_language()); } } }
