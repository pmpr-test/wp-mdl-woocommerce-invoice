<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0b8b742f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceInvoice; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceInvoice\Model\Invoice; use Pmpr\Module\WoocommerceInvoice\Traits\EngineTrait; class Order extends Container { use EngineTrait; const ukiqqmkmaeuagkco = 51; const woacsaigwaqsmqaa = "\160\144\146\x5f\x69\144"; const geeoyiwewgeekiuk = "\x70\x64\146\137\x6e\157\x6e\x63\x65"; const kumygcyskssiakok = "\x70\x64\x66\x5f\x69\x6e\x76\x6f\x69\143\145\x73\x5f\145\155\x61\x69\154\137\x69\x6e\x76\157\x69\x63\x65"; const qsuqwswucsocoaom = "\x70\144\146\x5f\151\156\166\157\151\x63\x65\x73\x5f\x63\162\145\141\x74\145\137\151\x6e\x76\157\x69\x63\x65"; const wqaamgeceasamgwq = "\160\144\146\137\x69\x6e\166\157\x69\x63\145\x73\x5f\144\x65\154\x65\x74\x65\137\x69\x6e\x76\157\x69\x63\145"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\151\x6e\x69\x74", [$this, "\163\161\x73\x75\x6b\x77\x69\x67\x69\x73\x6b\163\x6f\143\171\141"])->qcsmikeggeemccuu("\141\144\x64\x5f\x6d\145\x74\x61\137\x62\157\x78\x65\x73", [$this, "\155\145\x6b\x69\x65\157\x79\x79\x69\x75\x6f\x67\163\145\x75\147"], 10, 2); if ($this->weysguygiseoukqw(Setting::skccwgqmkscswoye)) { $this->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\x6d\155\x65\162\143\x65\x5f\x74\x68\141\156\153\171\x6f\165", [$this, "\161\x63\167\151\153\x73\x73\145\151\141\163\167\155\x69\165\155"]); } $ccowyogiqwikkkie = [self::wqaamgeceasamgwq => [$this, "\165\x77\x73\147\151\x69\x6b\x63\x65\x65\x75\x63\155\x61\x6b\165"], self::qsuqwswucsocoaom => [$this, "\145\x63\153\x79\x65\x75\x79\147\143\155\x73\x77\x75\167\155\141"], self::kumygcyskssiakok => [$this, "\153\161\x6f\171\141\161\x6d\147\x6d\157\153\x69\x6b\x65\x67\x69"]]; foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou => $ekiuyucoiagmscgy) { $this->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\x6d\155\145\x72\x63\145\137\157\162\144\145\162\137\141\143\x74\x69\x6f\x6e\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\157\143\x6f\x6d\x6d\x65\x72\143\x65\137\x6f\x72\144\145\x72\137\x61\143\164\151\x6f\156\163", [$this, "\x79\x75\x73\x75\x65\x6f\145\157\x6f\171\157\145\x6b\x61\143\x65"], 10, 2)->cecaguuoecmccuse("\x70\x6f\163\x74\x5f\165\160\144\x61\x74\145\x64\137\x6d\x65\163\163\x61\x67\145\163", [$this, "\x75\145\x77\143\x79\x6d\165\163\x77\157\163\161\153\x6b\167\x61"], 99); $this->cecaguuoecmccuse("\167\x63\x73\137\156\x65\167\x5f\x6f\x72\x64\x65\162\x5f\143\x72\x65\141\x74\145\144", [$this, "\157\x77\145\143\x6b\157\x77\x6f\141\x79\x6f\x6d\141\x75\161\x71"], 10, 2)->cecaguuoecmccuse("\167\x63\163\x5f\x72\145\156\x65\x77\141\154\x5f\157\x72\144\145\162\x5f\143\162\x65\x61\x74\145\x64", [$this, "\x6f\167\145\x63\x6b\157\x77\157\x61\x79\157\x6d\141\x75\x71\161"], 10, 2); $this->cecaguuoecmccuse("\167\157\x6f\143\x6f\155\x6d\145\x72\143\145\137\x6d\171\x5f\141\143\x63\x6f\165\156\164\137\x6d\171\x5f\x6f\162\144\x65\x72\x73\137\141\x63\164\151\x6f\x6e\x73", [$this, "\153\167\143\x75\x63\x71\163\141\143\x79\x73\x75\x6b\x6b\153\167"], 10, 2); } public function init() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $cgsaiiokwycueeeo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::woacsaigwaqsmqaa); $mcceewyqsoioeuma = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::geeoyiwewgeekiuk); if ($cgsaiiokwycueeeo && $mcceewyqsoioeuma) { $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $mcceewyqsoioeuma = stripslashes($mcceewyqsoioeuma); $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($cgsaiiokwycueeeo); if ($iiwwoeukeeweaisc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $ycoeoaakqyskgykq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->kuswmimkgmyuymiu($iiwwoeukeeweaisc); if (!$miowmmgaiagcuyoo || $ycoeoaakqyskgykq != $miowmmgaiagcuyoo) { return; } } $pgioamuciiokwwoe = wp_hash($iiwwoeukeeweaisc->get_order_key(), "\x6e\x6f\156\143\x65"); if ($pgioamuciiokwwoe == $mcceewyqsoioeuma) { $this->uykissogmuaaocsg()->yiesgoeqwoqskisc($iiwwoeukeeweaisc, null, true); } } } } public function uwsgiikceeucmaku($umwqusowiqmyseom) { if ($umwqusowiqmyseom) { $eioamqeaccimmisg = $this->uykissogmuaaocsg()->imasugowgqyekses($umwqusowiqmyseom); if ($eioamqeaccimmisg) { $ceccweccosegwysu = Invoice::symcgieuakksimmu(); $ceccweccosegwysu->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($ceccweccosegwysu->mwyqswsaeeewsosm($eioamqeaccimmisg)); $this->ueicqmsaooqwoyic(); } } } public function eckyeuygcmswuwma($umwqusowiqmyseom) { $this->uykissogmuaaocsg()->wqykqagkwekacukq($umwqusowiqmyseom); $umwqusowiqmyseom->add_order_note(__("\111\x6e\x76\157\151\x63\145\40\x63\162\145\141\x74\x65\x64\x20\155\141\156\165\x61\154\154\x79", PR__MDL__WOOCOMMERCE_INVOICE), false, true); } public function kqoyaqmgmokikegi($umwqusowiqmyseom) { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $this->uykissogmuaaocsg()->gaisoeyogkaguouo($umwqusowiqmyseom); $umwqusowiqmyseom->add_order_note(__("\x49\x6e\166\157\x69\143\x65\x20\145\155\x61\x69\154\x65\x64\x20\164\157\40\x63\165\163\164\x6f\x6d\145\162\x20\x6d\x61\156\165\x61\x6c\154\x79", PR__MDL__WOOCOMMERCE_INVOICE), false, true); $this->cecaguuoecmccuse("\x72\x65\x64\x69\x72\145\x63\164\137\160\x6f\x73\x74\x5f\x6c\157\143\x61\x74\x69\157\156", [$this, "\142\x73\x69\165\147\x6b\141\x65\145\x75\151\153\x6f\x6d\x6b\x69"]); } } public function bsiugkaeeuikomki($igscmsiuisqaqwkk) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::eoskkkieowogacws, self::ukiqqmkmaeuagkco, $igscmsiuisqaqwkk); } public function yusueoeooyoekace($ccowyogiqwikkkie, $umwqusowiqmyseom = null) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { if (!empty($this->uykissogmuaaocsg()->imasugowgqyekses($umwqusowiqmyseom))) { $ccowyogiqwikkkie[self::kumygcyskssiakok] = __("\105\155\141\x69\x6c\40\x49\156\x76\157\151\143\145", PR__MDL__WOOCOMMERCE_INVOICE); $ccowyogiqwikkkie[self::wqaamgeceasamgwq] = __("\104\145\154\145\x74\145\x20\x49\x6e\x76\157\x69\143\145", PR__MDL__WOOCOMMERCE_INVOICE); } else { $ccowyogiqwikkkie[self::qsuqwswucsocoaom] = __("\103\x72\145\x61\x74\145\40\111\x6e\x76\157\x69\x63\x65", PR__MDL__WOOCOMMERCE_INVOICE); } } return $ccowyogiqwikkkie; } public function uewcymuswosqkkwa($wumguikkgaigkoee) : array { $wumguikkgaigkoee["\163\x68\x6f\160\137\157\x72\144\145\162"][self::ukiqqmkmaeuagkco] = __("\x4f\162\x64\145\x72\x20\165\x70\x64\x61\x74\x65\144\x20\x61\156\144\x20\x50\x44\106\x20\151\156\166\157\151\143\x65\x20\145\x6d\141\x69\154\x65\144\56", PR__MDL__WOOCOMMERCE_INVOICE); return $wumguikkgaigkoee; } public function sqsukwigisksocya() { $oqseeekuqisekiwy = $this->uykissogmuaaocsg()->awwskyoimucwkeoa(); if ($oqseeekuqisekiwy) { foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $this->qcsmikeggeemccuu("\167\157\x6f\143\157\155\155\x65\x72\143\x65\137\x6f\x72\x64\x65\x72\137\x73\x74\141\x74\165\163\137{$iueymcwwscwqkiyq}", [$this, "\155\x67\x71\x6b\153\143\x61\x75\x79\x61\165\x6d\x71\x73\147\153"])->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\155\145\162\143\145\x5f\x6f\x72\144\x65\x72\137\x73\164\x61\164\165\x73\137\160\x65\156\x64\x69\x6e\147\x5f\164\157\x5f{$iueymcwwscwqkiyq}\137\156\x6f\164\x69\146\151\143\x61\x74\x69\x6f\156", [$this, "\x6d\x67\x71\x6b\153\x63\141\x75\171\x61\x75\155\161\x73\x67\153"]); } } $this->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\145\162\x63\x65\x5f\x6f\162\144\145\x72\137\x73\164\141\x74\165\163\x5f\x63\157\155\x70\x6c\145\164\145\144\137\x72\x65\156\x65\167\141\x6c\x5f\x6e\157\164\151\x66\151\x63\x61\164\151\157\x6e", [$this, "\155\147\x71\x6b\x6b\x63\x61\165\171\141\x75\155\x71\163\147\x6b"]); } public function mgqkkcauyaumqsgk($umwqusowiqmyseom) { $this->uykissogmuaaocsg()->mgqkkcauyaumqsgk($umwqusowiqmyseom); } public function mekieoyyiuogseug($useksmwkuswkwcqg, $post) { if ($useksmwkuswkwcqg === Constants::aucuyeiykiqomaew && !empty($this->uykissogmuaaocsg()->imasugowgqyekses($post))) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => "\x77\x6f\157\x63\x6f\x6d\155\145\162\x63\145\x2d\x69\156\166\157\151\x63\x65\55\x64\x65\x74\x61\x69\x6c\x73", Constants::qgqyauaqwqmqseim => IconInterface::ukgeygywgquyaayi, Constants::qescuiwgsyuikume => __("\111\x6e\166\157\151\143\x65\40\104\x65\x74\x61\x69\x6c\163", PR__MDL__WOOCOMMERCE_INVOICE), Constants::cacismqswgaewkuu => "\163\150\157\x70\x5f\157\x72\x64\145\x72", Constants::wwgusigoaksqmwsm => [$this, "\x77\x73\x71\153\151\x6f\x6d\x65\x71\x79\x6d\155\161\147\165\x75"]]); } } public function wsqkiomeqymmqguu($post) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $gkkgcoiwayaccqgm = $goqqimcssiyagkwy->ayyeiqikwseeegqg($post); $eioamqeaccimmisg = $goqqimcssiyagkwy->imasugowgqyekses($gkkgcoiwayaccqgm); if ($eioamqeaccimmisg) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $ceccweccosegwysu = Invoice::symcgieuakksimmu(); $this->iuygowkemiiwqmiw("\155\x65\164\x61\x5f\x62\157\170", [Constants::qwumqqyuasyskkkc => [[Constants::uissasisiuymwsmu => __("\x49\x6e\x76\x6f\x69\x63\x65\x20\116\165\155\x62\145\x72", PR__MDL__WOOCOMMERCE_INVOICE), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($ceccweccosegwysu->waecsyqmwascmqoa($eioamqeaccimmisg, $ceccweccosegwysu::iwgggmqikoqacewk))], [Constants::uissasisiuymwsmu => __("\x49\x6e\166\157\x69\143\145\x20\x44\x61\x74\x65", PR__MDL__WOOCOMMERCE_INVOICE), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->ekasyoagocygouom($ceccweccosegwysu->waecsyqmwascmqoa($eioamqeaccimmisg, Constants::CREATED_AT))], [Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\104\157\167\156\x6c\157\x61\144\x20\x49\x6e\x76\157\151\x63\145", PR__MDL__WOOCOMMERCE_INVOICE), $goqqimcssiyagkwy->wsoewyimgeueicci($gkkgcoiwayaccqgm), ["\x63\x6c\x61\163\x73" => "\160\x64\x66\x2d\x69\156\x76\157\151\x63\145\55\x64\157\x77\156\154\x6f\x61\x64"])]]], [Constants::qaacaqioeyiuakeu => true]); } } public function qcwiksseiaswmium($gkkgcoiwayaccqgm) { if ($eioamqeaccimmisg = $this->uykissogmuaaocsg()->imasugowgqyekses($gkkgcoiwayaccqgm)) { $mqwsmsykyouoomgm = Invoice::symcgieuakksimmu()->waecsyqmwascmqoa($eioamqeaccimmisg, Invoice::iwgggmqikoqacewk, ''); $nsmgceoqaqogqmuw = __("\104\x6f\x77\x6e\154\x6f\141\144\x20\171\157\165\162\40\x69\156\x76\157\x69\143\145\x3a\40", PR__MDL__WOOCOMMERCE_INVOICE); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->yuawgssgauywkiia($this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($mqwsmsykyouoomgm), $this->uykissogmuaaocsg()->wsoewyimgeueicci($gkkgcoiwayaccqgm)); $nsmgceoqaqogqmuw = $this->ocksiywmkyaqseou("\x70\x72\x5f\x77\157\x6f\143\x6f\155\155\x65\x72\x63\x65\137\151\x6e\x76\x6f\x69\143\x65\137\x74\x68\x61\x6e\153\137\x79\157\x75\137\x70\141\x67\145\x5f\144\157\x77\x6e\x6c\x6f\x61\144\x5f\x6c\151\156\153", $nsmgceoqaqogqmuw, $gkkgcoiwayaccqgm); $swqimwqeweekeusq->sykissckqqccoiqs("\x70", [], $nsmgceoqaqogqmuw); } } public function oweckowoayomauqq($igoowguaskiscuew, $umwagewoweuckiso) { $oqseeekuqisekiwy = $this->uykissogmuaaocsg()->awwskyoimucwkeoa(); if (method_exists($umwagewoweuckiso, "\151\163\x5f\155\141\x6e\x75\x61\154") && method_exists($igoowguaskiscuew, "\147\x65\164\137\163\164\141\x74\165\x73")) { if ($umwagewoweuckiso->is_manual() && in_array($igoowguaskiscuew->get_status(), $oqseeekuqisekiwy, true)) { $this->uykissogmuaaocsg()->wqykqagkwekacukq($igoowguaskiscuew); } } return $igoowguaskiscuew; } public function kwcucqsacysukkkw($ccowyogiqwikkkie = null, $umwqusowiqmyseom = null) : ?array { $uowumwoymqcsimio = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey("\x76\x69\145\x77\137\157\x72\144\145\x72"); if (!empty($this->uykissogmuaaocsg()->imasugowgqyekses($umwqusowiqmyseom))) { $ccowyogiqwikkkie[Constants::gewemmgiaoyqcuoc] = [Constants::auqoykcmsiauccao => $this->uykissogmuaaocsg()->wsoewyimgeueicci($umwqusowiqmyseom, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($uowumwoymqcsimio, true)), Constants::NAME => __("\120\104\x46\40\111\x6e\x76\x6f\x69\143\145", PR__MDL__WOOCOMMERCE_INVOICE)]; } return $ccowyogiqwikkkie; } public function ueicqmsaooqwoyic() { $this->caokeucsksukesyo()->skckwsgymkimyuwo()->flush(); $mesieoomaagsgyqe = $this->weysguygiseoukqw(Setting::uumqsyagoeuaaimw, 0); $gqescewoksqksagq = 0; $ceccweccosegwysu = Invoice::symcgieuakksimmu(); $maaweyqaqmgqqkgw = $ceccweccosegwysu->iekyeyicoyyawomk()->oqomcmyuuakigusk([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->owogyemaccuymycq($ceccweccosegwysu->kumuygiiqswoyasy())->yogqsokgsqemsuoq()]); if ($maaweyqaqmgqqkgw) { $gqescewoksqksagq = $ceccweccosegwysu->waecsyqmwascmqoa($maaweyqaqmgqqkgw, $ceccweccosegwysu::aeoiqogeqsmoaaai, 0); } $qogaoouksgquyigs = $gqescewoksqksagq + 1; if ($mesieoomaagsgyqe > $qogaoouksgquyigs) { $qogaoouksgquyigs = $mesieoomaagsgyqe; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::ckowgwmkiqauomoc, $qogaoouksgquyigs, false); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::ysoqycicuciiyuaw, $qogaoouksgquyigs, false); } }
