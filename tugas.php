<?php
echo "<h1> tegar zulian </h1> ";
for ($i = 5; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
    echo "<br>";
}

echo "<br>";
for ($i = 0; $i <= 104; $i += 8) {
    echo $i . " ";
    echo "<br>";
}
echo "<br>";
echo "LOOPING SATU\n <br>";
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . " - aku jago koding\n";
    echo "<br>";
}
echo "<br>";
echo "LOOPING DUA\n <br>";
for ($i = 100; $i >= 1; $i -= 2) {
    echo $i . " - aku seorang web developer\n";
    echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ". Hoby aku adalah koding\n";
    } else {
        echo $i . ". Aku sangat senang koding\n";
    }
    echo "<br>";
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ". Hoby aku adalah koding\n <br>";
    } else {
        echo $i . ". Aku sangat senang koding\n <br>";
    }
    
}
echo "<br>";
for ( $i = 1; $i <= 100; $i++){
    if ($i %3 == 0 && $i % 2 != 0){
        echo $i . " I love koding <br>";
    }
}

echo "<br>";


?>