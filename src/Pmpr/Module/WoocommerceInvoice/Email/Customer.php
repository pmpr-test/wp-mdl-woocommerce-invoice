<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705de183e2f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice\Email; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WC_Email; class Customer extends WC_Email { const iaymqwiukuokuwmi = "\x7b\157\162\144\145\x72\x5f\x64\x61\x74\x65\x7d"; const kkqewaoosgccwoyq = "\173\x6f\162\144\145\x72\137\x6e\x75\155\x62\145\162\175"; use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function __construct() { $this->id = "\160\x72\x5f\167\157\157\x63\x6f\x6d\155\145\x72\143\x65\x5f\143\x75\x73\164\x6f\155\x65\162\x5f\x69\x6e\x76\x6f\x69\143\x65"; $this->enabled = true; $this->customer_email = true; $this->title = __("\x43\165\x73\164\157\x6d\145\162\x20\120\x44\x46\x20\x69\x6e\x76\x6f\x69\143\145", PR__MDL__WOOCOMMERCE_INVOICE); $this->description = __("\105\x6d\141\151\x6c\40\146\x6f\162\40\x63\165\163\x74\x6f\155\145\x72\x20\167\x69\164\150\x20\x6f\162\144\145\162\40\144\x65\164\x61\151\154\x73\40\141\156\x64\x20\120\104\106\40\x69\x6e\166\157\x69\143\x65\40\141\164\164\x61\143\x68\x65\144\56", PR__MDL__WOOCOMMERCE_INVOICE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x70\x64\x66\x5f\151\x6e\x76\157\151\x63\145\137\163\x65\156\x64\x5f\x63\x75\x73\164\x6f\155\x65\x72\137\x69\156\166\157\151\x63\145\x5f\156\x6f\x74\x69\x66\151\x63\141\x74\x69\157\x6e", [$this, "\x6b\147\151\155\x65\x61\x6b\151\163\151\153\x6b\163\147\x63\145"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if ($iiwwoeukeeweaisc) { $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if ($acuayeeoiwokyomo = $this->get_recipient()) { $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); } } $this->restore_locale(); } public function get_default_subject() { return __("\x59\x6f\x75\162\x20\151\156\x76\157\x69\143\145\x20\x66\157\x72\40\157\162\x64\x65\162\x20\x23\173\157\x72\x64\x65\162\137\x6e\x75\x6d\142\145\162\x7d\40\157\156\40\173\x73\151\164\145\137\164\x69\164\x6c\145\175\x20\151\x73\40\x61\164\x74\x61\143\x68\145\x64", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_default_heading() { return __("\x59\157\x75\x72\40\151\156\x76\157\151\143\x65\40\146\x6f\x72\x20\x6f\162\144\145\x72\x20\x23\173\x6f\162\x64\145\x72\x5f\156\165\155\142\145\162\175\x20\x69\x73\x20\x61\164\164\x61\x63\x68\145\144", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\163\x75\x62\152\145\143\x74", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\150\x65\x61\144\151\156\x67", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($this->object); $qookweymeqawmcwo = []; if ($umwqusowiqmyseom) { if ($umwqusowiqmyseom->has_status(Constants::sgoswgskyiiwkyuo)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\120\141\171\40\x66\x6f\162\40\x74\x68\151\x73\x20\x6f\x72\x64\x65\x72", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\x41\x6e\40\x6f\x72\x64\x65\x72\40\x68\x61\163\40\x62\145\145\156\40\x63\162\x65\x61\164\x65\x64\x20\146\157\162\40\x79\x6f\x75\40\157\x6e\x20\x25\x31\x24\163\56\x20\131\157\x75\x72\40\x69\156\x76\157\x69\x63\x65\40\151\x73\40\x62\145\x6c\x6f\167\x2c\x20\167\x69\x74\x68\x20\x61\x20\x6c\x69\x6e\x6b\x20\x74\157\40\155\x61\153\145\40\x70\x61\171\155\145\156\164\40\167\x68\145\x6e\x20\171\x6f\x75\xe2\200\231\162\x65\40\162\x65\141\144\171\x3a\40\45\62\44\x73", PR__MDL__WOOCOMMERCE_INVOICE), get_bloginfo("\x6e\x61\155\145", "\144\151\x73\160\154\141\x79"), $iwywmkygwewiamwm); } else { $uamcoiueqaamsqma = sprintf(__("\x48\145\162\145\40\x61\x72\x65\40\164\x68\145\x20\144\x65\x74\x61\x69\x6c\163\x20\x6f\x66\40\x79\x6f\x75\x72\40\x6f\162\x64\x65\162\40\160\154\x61\x63\x65\x64\40\157\156\40\45\x73\x3a", PR__MDL__WOOCOMMERCE_INVOICE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); } $qookweymeqawmcwo = [Constants::muqaqimusmckkieq => $this, Constants::awkcoioakcaougmq => $umwqusowiqmyseom, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, "\x70\x6c\x61\x69\156\137\x74\x65\x78\x74" => false, "\163\x65\156\x74\137\x74\157\137\141\144\155\x69\x6e" => false, "\x65\x6d\141\x69\x6c\137\150\x65\141\144\151\x6e\x67" => $this->get_heading(), "\x68\x65\154\x6c\157\x5f\155\145\163\163\141\147\145" => sprintf(__("\110\151\x20\x25\163", PR__MDL__WOOCOMMERCE_INVOICE), $umwqusowiqmyseom->get_billing_first_name()), "\x61\144\x64\151\164\x69\x6f\x6e\141\x6c\137\143\157\x6e\x74\145\156\164" => $this->get_additional_content()]; } return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\124\150\141\156\153\x73\40\x66\157\162\40\x75\163\151\x6e\147\40\x7b\x73\151\164\x65\x5f\141\x64\x64\162\x65\163\163\175\41", PR__MDL__WOOCOMMERCE_INVOICE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\151\x6e\144\145\x78", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\160\154\x61\x69\156", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x63\157\144\x65", [], $iwiewowoqmoekyqi); } $ygoqmwaqmooosysc = sprintf(__("\x41\166\x61\151\154\141\x62\x6c\145\40\x70\x6c\141\143\145\150\x6f\154\144\x65\x72\163\x3a\40\45\x73", PR__MDL__WOOCOMMERCE_INVOICE), implode("\54\40", $kqmcoiicsmgwaisg)); $this->form_fields = ["\x65\156\x61\x62\154\145\144" => [Constants::squoamkioomemiyi => "\143\x68\x65\143\x6b\142\157\x78", Constants::uissasisiuymwsmu => __("\105\x6e\x61\x62\x6c\145\x20\x74\150\151\x73\40\145\155\141\151\x6c\x20\156\157\x74\x69\146\151\x63\x61\164\151\157\156", PR__MDL__WOOCOMMERCE_INVOICE), Constants::qescuiwgsyuikume => __("\105\156\x61\142\154\145\x2f\104\151\x73\x61\x62\x6c\x65", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\x79\145\163"], "\x73\x75\x62\152\145\x63\164" => ["\x64\x65\163\x63\137\x74\x69\160" => true, Constants::squoamkioomemiyi => "\x74\x65\170\x74", Constants::qescuiwgsyuikume => __("\123\x75\142\152\x65\x63\164", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => '', Constants::moacsmsigegyweoc => $this->get_default_subject(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x68\x65\141\x64\x69\x6e\147" => ["\x64\145\163\143\x5f\x74\151\x70" => true, Constants::squoamkioomemiyi => "\x74\145\170\x74", Constants::qescuiwgsyuikume => __("\105\155\141\x69\154\x20\150\x65\141\144\151\156\x67", PR__MDL__WOOCOMMERCE_INVOICE), Constants::moacsmsigegyweoc => $this->get_default_heading(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\163\165\142\152\x65\x63\164\x5f\x70\141\x69\x64" => ["\x64\145\163\143\x5f\164\151\x70" => true, Constants::squoamkioomemiyi => "\x74\145\170\x74", Constants::qescuiwgsyuikume => __("\x53\x75\x62\x6a\x65\x63\x74\x20\50\160\x61\151\x64\51", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_subject()], "\x68\x65\141\144\151\156\x67\137\160\141\x69\144" => ["\x64\145\163\x63\137\x74\x69\160" => true, Constants::squoamkioomemiyi => "\164\x65\x78\x74", Constants::qescuiwgsyuikume => __("\105\x6d\141\151\x6c\x20\150\x65\x61\x64\x69\x6e\147\x20\x28\160\x61\x69\x64\51", PR__MDL__WOOCOMMERCE_INVOICE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_heading()], "\141\144\144\x69\x74\151\157\156\141\154\137\143\157\x6e\x74\x65\x6e\164" => ["\x63\x73\x73" => "\x77\151\144\164\150\x3a\x34\x30\x30\x70\x78\73\x20\150\145\151\147\150\x74\x3a\x20\x37\65\x70\x78\x3b", "\144\145\163\143\x5f\x74\151\x70" => true, Constants::squoamkioomemiyi => "\164\x65\170\164\x61\162\x65\141", Constants::qescuiwgsyuikume => __("\x41\144\144\151\x74\151\x6f\x6e\x61\154\40\x63\x6f\156\164\145\156\x74", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => $this->get_default_additional_content(), Constants::eqkeooqcsscoggia => __("\124\x65\x78\164\x20\x74\x6f\x20\141\160\160\145\141\x72\40\x62\x65\x6c\157\167\40\164\x68\x65\x20\155\141\x69\x6e\x20\x65\x6d\141\151\x6c\x20\143\157\x6e\x74\145\156\164\x2e", PR__MDL__WOOCOMMERCE_INVOICE) . "\40" . $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => __("\x4e\x2f\x41", PR__MDL__WOOCOMMERCE_INVOICE)], "\x65\155\141\x69\154\x5f\164\x79\x70\145" => ["\143\154\141\163\163" => "\145\x6d\141\151\x6c\x5f\164\171\x70\145\x20\167\x63\x2d\145\x6e\x68\141\x6e\143\145\x64\55\x73\x65\154\145\143\164", "\x64\x65\163\143\137\x74\x69\x70" => true, Constants::squoamkioomemiyi => "\x73\x65\154\x65\143\164", Constants::qescuiwgsyuikume => __("\105\x6d\x61\x69\154\40\164\171\160\x65", PR__MDL__WOOCOMMERCE_INVOICE), Constants::wikgqsqysyuoykse => "\150\164\155\x6c", Constants::aeweusomuikewuis => $this->get_email_type_options(), Constants::eqkeooqcsscoggia => __("\x43\150\x6f\x6f\163\x65\40\167\x68\x69\143\x68\40\146\157\x72\155\141\164\x20\x6f\x66\x20\145\155\141\151\x6c\40\164\157\40\163\145\x6e\144\56", PR__MDL__WOOCOMMERCE_INVOICE)]]; } }
