<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5e9b747f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\WoocommerceInvoice\Setting; use Pmpr\Module\WoocommerceInvoice\Traits\EngineTrait; use WP_Error; class Invoice extends Model { use EngineTrait; const qiookqywwgemeamk = "\x74\x61\170\x5f\156\x75\155\142\x65\162"; const kwmkawqoiesweswy = "\x76\141\x74\137\x6e\165\155\x62\x65\x72"; const wsccocqiicegwska = "\x63\x6f\x6d\160\141\x6e\171\137\151\x6e\146\157"; const aockomuqgkgqyaki = "\143\x6f\x6d\160\141\156\171\x5f\x6e\x61\x6d\x65"; const kosymqioioyguigs = "\143\157\155\x70\141\x6e\171\137\156\x75\155\x62\x65\x72"; const aeoiqogeqsmoaaai = "\151\156\166\x6f\151\x63\145\x5f\156\165\155\142\x65\x72"; const ekyyyewmowkgcgay = "\x72\145\x67\x69\163\164\145\x72\x65\x64\x5f\x6e\x61\155\145"; const qaowyaoaqwacmgeo = "\x72\x65\x67\151\x73\x74\x65\162\145\144\137\x6f\146\146\x69\x63\x65"; const iwgggmqikoqacewk = self::aeoiqogeqsmoaaai . "\137\144\x69\x73\160\x6c\x61\x79"; public function register() { $this->saemoowcasogykak(IconInterface::ukgeygywgquyaayi)->guiaswksukmgageq(__("\x49\x6e\166\157\x69\143\145", PR__MDL__WOOCOMMERCE_INVOICE))->muuwuqssqkaieqge(__("\111\156\166\157\x69\143\145\163", PR__MDL__WOOCOMMERCE_INVOICE)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x54\x69\164\x6c\145", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::aeoiqogeqsmoaaai)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x49\156\x76\157\151\x63\x65\x20\116\165\155\x62\145\x72", PR__MDL__WOOCOMMERCE_INVOICE))->acceqyqygswoecwe(64))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::iwgggmqikoqacewk)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x49\156\166\x6f\x69\143\145\40\116\x75\x6d\142\145\x72\40\104\x69\x73\160\x6c\141\x79", PR__MDL__WOOCOMMERCE_INVOICE))->acceqyqygswoecwe(128))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::kwmkawqoiesweswy)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x56\x61\164\x20\116\x75\155\142\x65\x72", PR__MDL__WOOCOMMERCE_INVOICE))->acceqyqygswoecwe(64))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::qiookqywwgemeamk)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\124\x61\170\x20\116\x75\x6d\x62\145\162", PR__MDL__WOOCOMMERCE_INVOICE))->acceqyqygswoecwe(64))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::wsccocqiicegwska)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\103\x6f\155\x70\x61\156\x79\x20\x49\156\146\x6f", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::aockomuqgkgqyaki)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\103\x6f\155\160\x61\156\171\40\x4e\x61\x6d\145", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::kosymqioioyguigs)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x43\157\155\160\141\x6e\171\40\116\165\155\142\x65\162", PR__MDL__WOOCOMMERCE_INVOICE))->acceqyqygswoecwe(64))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::ekyyyewmowkgcgay)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\x52\145\x67\151\163\164\145\162\145\144\40\116\x61\155\145", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::qaowyaoaqwacmgeo)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\122\145\147\151\163\x74\145\x72\x65\144\x20\117\146\x66\x69\143\145", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::geykusaewkemcasi)->gswweykyogmsyawy(__("\117\x72\x64\x65\x72", PR__MDL__WOOCOMMERCE_INVOICE)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__("\103\162\145\141\x74\x65\144\40\x41\164", PR__MDL__WOOCOMMERCE_INVOICE))); parent::uwmqacgewuauagai(); } }
