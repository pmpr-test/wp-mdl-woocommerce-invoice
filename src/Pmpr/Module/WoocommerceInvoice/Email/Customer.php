<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b788153c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice\Email; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WC_Email; class Customer extends WC_Email { const iaymqwiukuokuwmi = "\x7b\157\x72\144\145\162\137\144\141\x74\145\175"; const kkqewaoosgccwoyq = "\x7b\x6f\162\144\x65\162\137\x6e\x75\x6d\142\x65\x72\x7d"; use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function __construct() { $this->id = "\160\x72\x5f\x77\x6f\157\x63\x6f\155\x6d\145\162\143\145\137\143\165\163\x74\157\x6d\x65\x72\x5f\x69\156\166\157\x69\x63\145"; $this->enabled = true; $this->customer_email = true; $this->title = __("\103\165\x73\x74\x6f\155\145\162\x20\x50\104\x46\40\151\x6e\x76\157\151\143\145", PR__MDL__WOOCOMMERCE_INVOICE); $this->description = __("\x45\x6d\141\x69\x6c\x20\146\x6f\x72\x20\x63\x75\163\164\157\155\x65\x72\40\167\151\164\x68\40\157\x72\x64\145\162\40\144\145\x74\x61\151\154\163\x20\x61\x6e\144\x20\120\104\x46\40\151\156\166\x6f\x69\143\145\40\141\x74\164\x61\x63\x68\x65\144\56", PR__MDL__WOOCOMMERCE_INVOICE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x70\144\146\137\151\x6e\166\157\x69\143\145\137\x73\x65\156\x64\x5f\x63\165\163\164\157\x6d\145\x72\x5f\151\x6e\166\157\151\143\145\137\x6e\x6f\164\x69\146\151\143\141\x74\x69\157\x6e", [$this, "\x6b\x67\x69\x6d\x65\141\x6b\x69\x73\151\153\x6b\163\147\143\x65"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if ($iiwwoeukeeweaisc) { $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if ($acuayeeoiwokyomo = $this->get_recipient()) { $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); } } $this->restore_locale(); } public function get_default_subject() { return __("\x59\157\x75\162\40\x69\156\166\x6f\x69\143\145\40\146\157\162\40\157\162\144\x65\162\40\x23\173\157\162\144\145\x72\x5f\x6e\165\x6d\x62\x65\x72\175\x20\x6f\x6e\x20\173\x73\x69\x74\x65\137\x74\151\x74\x6c\x65\x7d\40\151\x73\40\x61\164\x74\141\x63\x68\145\144", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_default_heading() { return __("\131\x6f\x75\x72\40\151\x6e\x76\x6f\x69\143\x65\40\x66\x6f\x72\x20\x6f\162\x64\x65\x72\x20\x23\x7b\157\162\x64\x65\162\x5f\x6e\x75\x6d\x62\x65\162\175\40\x69\163\40\141\x74\x74\x61\x63\x68\x65\144", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\163\x75\x62\152\145\x63\164", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\x68\145\141\144\151\156\x67", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($this->object); $qookweymeqawmcwo = []; if ($umwqusowiqmyseom) { if ($umwqusowiqmyseom->has_status(Constants::sgoswgskyiiwkyuo)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\120\x61\x79\40\146\x6f\162\40\x74\150\151\163\40\x6f\162\x64\145\162", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\x41\x6e\x20\157\162\144\x65\x72\x20\150\141\x73\x20\142\145\145\x6e\40\143\x72\145\x61\164\x65\144\40\146\x6f\x72\40\x79\x6f\x75\x20\157\156\40\x25\x31\x24\163\x2e\x20\131\157\165\162\x20\x69\x6e\166\157\151\x63\145\40\x69\x73\40\x62\145\x6c\x6f\167\x2c\x20\x77\x69\x74\x68\40\141\x20\x6c\x69\x6e\x6b\x20\x74\157\x20\155\141\153\145\40\160\x61\171\155\145\156\164\40\167\x68\x65\156\40\x79\x6f\x75\xe2\200\231\162\x65\40\x72\x65\141\x64\x79\x3a\40\x25\62\x24\x73", PR__MDL__WOOCOMMERCE_INVOICE), get_bloginfo("\156\x61\x6d\x65", "\144\x69\163\160\x6c\x61\x79"), $iwywmkygwewiamwm); } else { $uamcoiueqaamsqma = sprintf(__("\110\145\162\145\x20\x61\162\145\x20\164\150\x65\x20\x64\x65\x74\x61\151\154\163\x20\x6f\x66\x20\x79\157\165\162\40\157\x72\x64\145\x72\40\160\x6c\x61\143\145\x64\x20\157\x6e\x20\45\163\x3a", PR__MDL__WOOCOMMERCE_INVOICE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); } $qookweymeqawmcwo = [Constants::muqaqimusmckkieq => $this, Constants::awkcoioakcaougmq => $umwqusowiqmyseom, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, "\x70\x6c\141\x69\156\137\x74\145\170\x74" => false, "\x73\145\156\x74\137\164\x6f\x5f\x61\x64\x6d\x69\x6e" => false, "\x65\155\141\151\x6c\x5f\x68\x65\x61\144\151\x6e\x67" => $this->get_heading(), "\x68\x65\154\x6c\x6f\137\x6d\x65\x73\163\141\x67\145" => sprintf(__("\110\151\x20\45\163", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_billing_first_name()), "\141\x64\144\x69\164\x69\x6f\x6e\141\x6c\x5f\x63\157\x6e\164\x65\x6e\164" => $this->get_additional_content()]; } return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\124\x68\x61\156\153\163\x20\x66\157\162\40\x75\x73\x69\x6e\x67\40\x7b\x73\151\x74\x65\x5f\x61\x64\x64\162\145\163\x73\175\41", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\151\x6e\x64\x65\170", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\x70\154\141\x69\156", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x63\157\144\x65", [], $iwiewowoqmoekyqi); } $ygoqmwaqmooosysc = sprintf(__("\101\x76\141\151\x6c\141\142\154\x65\x20\160\154\141\143\145\x68\x6f\154\144\x65\x72\163\x3a\x20\45\163", PR__MDL__WOOCOMMERCE_INVOICE), implode("\x2c\x20", $kqmcoiicsmgwaisg)); $this->form_fields = ["\145\x6e\x61\x62\154\x65\144" => [Constants::squoamkioomemiyi => "\x63\150\145\143\153\x62\157\x78", Constants::uissasisiuymwsmu => __("\105\x6e\141\142\154\x65\x20\x74\150\x69\x73\40\x65\155\141\x69\x6c\x20\156\x6f\164\151\x66\151\x63\141\x74\x69\157\x6e", PR__MDL__WOOCOMMERCE_INVOICE), Constants::qescuiwgsyuikume => __("\105\x6e\141\142\x6c\145\57\104\x69\163\x61\142\154\145", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\x79\x65\x73"], "\x73\x75\142\152\x65\143\164" => ["\x64\145\163\143\137\164\151\160" => true, Constants::squoamkioomemiyi => "\164\x65\170\x74", Constants::qescuiwgsyuikume => __("\x53\165\142\x6a\x65\x63\164", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => '', Constants::moacsmsigegyweoc => $this->get_default_subject(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x68\145\x61\x64\151\x6e\147" => ["\144\x65\x73\143\137\x74\151\x70" => true, Constants::squoamkioomemiyi => "\164\145\x78\164", Constants::qescuiwgsyuikume => __("\105\x6d\141\151\x6c\40\x68\145\x61\x64\151\156\x67", PR__MDL__WOOCOMMERCE_INVOICE), Constants::moacsmsigegyweoc => $this->get_default_heading(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\163\x75\x62\x6a\x65\x63\164\x5f\160\141\151\144" => ["\x64\x65\163\x63\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\x74\x65\x78\164", Constants::qescuiwgsyuikume => __("\x53\165\x62\152\145\143\x74\x20\50\160\x61\151\x64\51", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_subject()], "\150\x65\x61\144\x69\x6e\147\x5f\160\141\151\144" => ["\x64\145\x73\143\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\x74\x65\170\164", Constants::qescuiwgsyuikume => __("\105\155\x61\x69\154\40\x68\145\141\144\151\x6e\x67\40\x28\x70\141\151\144\x29", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_heading()], "\x61\x64\x64\x69\x74\151\157\156\x61\154\x5f\143\x6f\156\164\145\x6e\x74" => ["\x63\x73\x73" => "\167\151\144\x74\150\x3a\x34\60\x30\160\x78\73\40\150\x65\151\x67\x68\164\x3a\40\67\65\160\170\73", "\x64\x65\x73\143\137\x74\x69\x70" => true, Constants::squoamkioomemiyi => "\x74\x65\x78\164\x61\162\145\141", Constants::qescuiwgsyuikume => __("\101\144\x64\x69\x74\x69\157\156\141\x6c\40\x63\157\x6e\x74\x65\x6e\x74", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => $this->get_default_additional_content(), Constants::eqkeooqcsscoggia => __("\x54\x65\170\x74\x20\x74\x6f\x20\141\160\x70\145\x61\162\40\142\x65\154\157\x77\40\164\150\145\x20\155\141\151\156\40\x65\x6d\141\x69\x6c\x20\143\x6f\156\164\145\x6e\164\56", PR__MDL__WOOCOMMERCE_INVOICE) . "\x20" . $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => __("\x4e\x2f\101", PR__MDL__WOOCOMMERCE_INVOICE)], "\x65\x6d\141\x69\x6c\137\x74\171\x70\x65" => ["\x63\154\x61\x73\x73" => "\x65\x6d\x61\151\x6c\137\164\171\160\x65\x20\x77\x63\55\x65\156\x68\x61\156\x63\x65\144\x2d\x73\145\154\145\x63\164", "\x64\x65\x73\143\137\x74\151\160" => true, Constants::squoamkioomemiyi => "\x73\x65\x6c\145\x63\x74", Constants::qescuiwgsyuikume => __("\105\155\x61\151\154\x20\164\171\160\145", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\150\164\x6d\x6c", Constants::aeweusomuikewuis => $this->get_email_type_options(), Constants::eqkeooqcsscoggia => __("\x43\x68\x6f\157\163\x65\x20\167\x68\151\x63\150\40\x66\x6f\162\155\x61\164\x20\x6f\x66\x20\145\155\x61\x69\x6c\x20\164\x6f\x20\x73\x65\x6e\144\x2e", PR__MDL__WOOCOMMERCE_INVOICE)]]; } }
