<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670cfd89c15a4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice\Email; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WC_Email; class Customer extends WC_Email { const iaymqwiukuokuwmi = "\173\157\x72\x64\x65\x72\x5f\x64\x61\x74\x65\175"; const kkqewaoosgccwoyq = "\x7b\157\162\x64\145\x72\x5f\156\x75\155\x62\145\x72\x7d"; use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function __construct() { $this->id = "\160\x72\x5f\x77\x6f\157\x63\x6f\x6d\x6d\145\x72\143\x65\137\143\x75\x73\x74\x6f\155\x65\x72\x5f\x69\156\166\157\x69\x63\x65"; $this->enabled = true; $this->customer_email = true; $this->title = __("\103\165\x73\x74\x6f\155\145\162\x20\120\x44\x46\x20\151\x6e\x76\157\151\143\145", PR__MDL__WOOCOMMERCE_INVOICE); $this->description = __("\x45\x6d\x61\151\154\40\x66\157\x72\40\143\165\163\164\157\x6d\145\162\x20\167\x69\x74\150\x20\x6f\162\x64\145\x72\40\x64\x65\164\x61\x69\154\x73\40\x61\156\x64\40\120\104\106\40\x69\156\x76\x6f\151\143\145\40\x61\x74\x74\x61\143\150\x65\x64\x2e", PR__MDL__WOOCOMMERCE_INVOICE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x70\x64\146\137\151\156\166\157\151\x63\x65\137\x73\145\x6e\x64\x5f\143\165\x73\x74\157\x6d\x65\162\137\x69\x6e\166\x6f\x69\x63\x65\x5f\156\157\x74\151\146\151\143\141\x74\x69\x6f\156", [$this, "\153\147\151\x6d\x65\x61\x6b\151\163\x69\x6b\153\163\x67\x63\145"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if ($iiwwoeukeeweaisc) { $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if ($acuayeeoiwokyomo = $this->get_recipient()) { $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); } } $this->restore_locale(); } public function get_default_subject() { return __("\131\x6f\165\x72\x20\x69\156\x76\157\x69\x63\145\x20\x66\157\x72\40\157\162\144\145\x72\40\43\173\157\162\x64\145\x72\137\x6e\x75\x6d\142\x65\x72\175\40\x6f\156\x20\x7b\x73\151\164\145\x5f\x74\151\164\x6c\x65\175\x20\151\x73\40\x61\164\164\141\x63\150\x65\144", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_default_heading() { return __("\x59\x6f\x75\x72\40\151\x6e\166\x6f\x69\143\145\40\x66\157\162\40\157\162\x64\145\x72\40\x23\173\157\x72\x64\145\162\x5f\x6e\165\155\142\145\162\175\40\151\x73\40\x61\164\x74\x61\x63\150\x65\144", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\x73\165\x62\152\x65\143\x74", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\x68\145\141\x64\x69\156\x67", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($this->object); $qookweymeqawmcwo = []; if ($umwqusowiqmyseom) { if ($umwqusowiqmyseom->has_status(Constants::sgoswgskyiiwkyuo)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\120\x61\171\x20\x66\x6f\x72\40\164\150\x69\x73\40\157\x72\144\145\162", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\x41\x6e\40\x6f\x72\144\145\x72\40\150\141\163\x20\x62\x65\x65\156\40\x63\162\145\x61\164\x65\x64\x20\x66\157\162\40\171\157\x75\40\157\156\40\45\x31\44\x73\x2e\40\131\157\165\162\x20\x69\156\x76\157\x69\x63\x65\x20\x69\163\x20\142\x65\154\x6f\167\54\x20\x77\151\x74\150\x20\141\x20\x6c\151\156\x6b\x20\x74\x6f\40\155\x61\x6b\x65\x20\160\141\171\x6d\x65\156\164\x20\x77\x68\145\x6e\40\x79\157\165\342\200\231\x72\x65\40\162\x65\x61\144\x79\72\x20\x25\62\x24\163", PR__MDL__WOOCOMMERCE_INVOICE), get_bloginfo("\156\x61\x6d\x65", "\144\x69\x73\160\x6c\x61\171"), $iwywmkygwewiamwm); } else { $uamcoiueqaamsqma = sprintf(__("\x48\145\x72\145\40\x61\162\x65\40\x74\x68\145\40\x64\x65\164\x61\x69\x6c\163\x20\x6f\x66\40\171\x6f\165\x72\40\157\162\144\145\162\40\x70\154\x61\x63\145\x64\40\157\x6e\x20\45\x73\x3a", PR__MDL__WOOCOMMERCE_INVOICE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); } $qookweymeqawmcwo = [Constants::muqaqimusmckkieq => $this, Constants::awkcoioakcaougmq => $umwqusowiqmyseom, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, "\160\x6c\141\x69\156\137\x74\x65\170\164" => false, "\163\145\x6e\x74\x5f\164\x6f\137\x61\x64\x6d\151\x6e" => false, "\x65\155\x61\x69\x6c\137\x68\x65\141\144\151\156\147" => $this->get_heading(), "\150\145\154\x6c\x6f\x5f\155\x65\x73\x73\141\x67\145" => sprintf(__("\x48\151\40\x25\x73", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_billing_first_name()), "\x61\x64\x64\151\x74\151\157\156\141\154\137\x63\x6f\x6e\164\x65\x6e\x74" => $this->get_additional_content()]; } return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\x54\150\x61\156\153\x73\x20\146\157\x72\x20\165\163\x69\x6e\x67\40\x7b\163\151\x74\145\137\x61\x64\x64\162\x65\163\163\x7d\41", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\151\156\144\x65\170", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\x70\154\x61\x69\x6e", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\143\x6f\x64\x65", [], $iwiewowoqmoekyqi); } $ygoqmwaqmooosysc = sprintf(__("\x41\x76\141\151\x6c\141\142\154\145\40\x70\x6c\x61\x63\x65\x68\157\x6c\144\x65\162\x73\x3a\x20\45\163", PR__MDL__WOOCOMMERCE_INVOICE), implode("\x2c\x20", $kqmcoiicsmgwaisg)); $this->form_fields = ["\145\x6e\141\142\x6c\x65\x64" => [Constants::squoamkioomemiyi => "\x63\x68\x65\143\153\142\x6f\x78", Constants::uissasisiuymwsmu => __("\x45\156\x61\x62\x6c\x65\40\x74\x68\x69\x73\40\x65\x6d\141\x69\154\x20\x6e\x6f\164\151\x66\x69\143\141\164\151\x6f\156", PR__MDL__WOOCOMMERCE_INVOICE), Constants::qescuiwgsyuikume => __("\x45\x6e\141\x62\154\145\x2f\104\151\x73\141\142\154\x65", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\171\145\x73"], "\x73\165\x62\152\145\x63\x74" => ["\x64\x65\x73\143\x5f\164\x69\x70" => true, Constants::squoamkioomemiyi => "\164\x65\x78\x74", Constants::qescuiwgsyuikume => __("\123\x75\142\152\x65\143\x74", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => '', Constants::moacsmsigegyweoc => $this->get_default_subject(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x68\x65\x61\144\x69\x6e\147" => ["\144\145\163\x63\x5f\x74\x69\x70" => true, Constants::squoamkioomemiyi => "\x74\x65\170\164", Constants::qescuiwgsyuikume => __("\105\x6d\x61\x69\154\x20\150\145\141\144\x69\x6e\147", PR__MDL__WOOCOMMERCE_INVOICE), Constants::moacsmsigegyweoc => $this->get_default_heading(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x73\x75\x62\x6a\145\x63\164\x5f\x70\x61\x69\x64" => ["\144\x65\x73\143\137\x74\151\x70" => true, Constants::squoamkioomemiyi => "\x74\x65\170\164", Constants::qescuiwgsyuikume => __("\x53\165\142\152\145\x63\x74\x20\x28\x70\141\151\144\51", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_subject()], "\x68\x65\x61\x64\x69\156\x67\x5f\x70\141\x69\144" => ["\x64\145\163\143\137\164\x69\x70" => true, Constants::squoamkioomemiyi => "\164\145\170\164", Constants::qescuiwgsyuikume => __("\105\155\x61\x69\x6c\40\150\x65\x61\144\x69\x6e\147\40\50\160\141\151\x64\51", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_heading()], "\141\x64\144\151\164\x69\x6f\x6e\x61\154\137\143\x6f\156\164\145\x6e\x74" => ["\x63\163\163" => "\x77\151\x64\x74\150\x3a\64\60\60\160\170\73\x20\x68\x65\x69\147\x68\x74\72\x20\x37\65\160\170\x3b", "\144\x65\163\143\x5f\x74\151\x70" => true, Constants::squoamkioomemiyi => "\x74\x65\170\x74\x61\x72\145\141", Constants::qescuiwgsyuikume => __("\101\x64\144\151\164\x69\157\x6e\x61\154\40\143\157\156\164\x65\x6e\164", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => $this->get_default_additional_content(), Constants::eqkeooqcsscoggia => __("\124\145\x78\x74\40\164\157\40\x61\160\160\x65\x61\x72\x20\142\x65\x6c\x6f\167\40\164\x68\145\x20\x6d\x61\x69\156\40\145\155\x61\151\154\x20\143\x6f\156\164\x65\156\164\x2e", PR__MDL__WOOCOMMERCE_INVOICE) . "\x20" . $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => __("\x4e\x2f\101", PR__MDL__WOOCOMMERCE_INVOICE)], "\x65\x6d\x61\x69\154\x5f\164\x79\160\145" => ["\x63\x6c\141\163\x73" => "\x65\155\141\151\x6c\137\x74\171\160\145\40\x77\x63\55\x65\x6e\150\x61\x6e\x63\145\x64\x2d\x73\145\x6c\x65\143\x74", "\x64\x65\x73\x63\137\164\x69\x70" => true, Constants::squoamkioomemiyi => "\163\145\154\145\143\x74", Constants::qescuiwgsyuikume => __("\x45\155\141\151\x6c\40\164\x79\x70\x65", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\x68\164\x6d\154", Constants::aeweusomuikewuis => $this->get_email_type_options(), Constants::eqkeooqcsscoggia => __("\103\x68\157\x6f\x73\145\40\x77\150\x69\x63\150\x20\146\157\x72\x6d\141\x74\40\157\x66\x20\x65\x6d\x61\151\x6c\x20\164\157\x20\163\145\x6e\x64\56", PR__MDL__WOOCOMMERCE_INVOICE)]]; } }
