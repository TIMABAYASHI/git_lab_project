<?php
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date = date("Y/m/d H:i:s");

    $filename = 'toukou_1.txt'; /*保存先にファイル名を$filenameに代入*/

    $fp = fopen($filename,'a'); /*ファイルを追記モードで開く*/

    fwrite($fp,$name.' <> '.$comment.' <> '.$date."\n"); /*情報をファイルに書き込む*/

    fclose($fp); /*ファイルを閉じる*/
?>

<?php
    unlink('toukou_2.txt'); /*ここでtoukou_2.txtを削除するコードを入れておく。理由は後ほど。*/
    ?>

<?php
    header('Location:toukou_2.blade.php'); /*次の処理を行うファイルへ移動させる*/
    ?>