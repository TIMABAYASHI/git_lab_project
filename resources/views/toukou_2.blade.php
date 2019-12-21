<?php

$data = file_get_contents('toukou_1.txt'); /*toukou_1.txtを読み込む*/
$element = explode( "\n",$data);/*toukou_1.txtを各行で分割する。file関数でも良い？*/
$cnt = count( $element ); /*分割した要素の数（行数）をカウントする*/

    for( $i=0;$i<$cnt;$i++ ){ /*行末までループする*/

    $fp = fopen("toukou_2.txt","a"); /*追記モードで開く*/
    $num = count( file('toukou_2.txt')); /*ファイルのデータの行数をかぞえて＄numに代入*/
    $num++; /*投稿番号の取得*/
        $youso = explode(" <> ",$element[$i]); /*各１行を　＜＞　で分割する。*/
    fwrite($fp,$num.' <> '.$youso[1].' <> '.$youso[2].' <> '.$youso[3]."\n"); /*パスワード（$youso[0]）以外の情報をファイルに書き込む*/
    fclose($fp);
    }
?>

<?php
    header('Location:toukou_3.blade.php'); /*次の処理を行うファイルへ移動する*/
    ?>