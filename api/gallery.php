<?php
$images=preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);


if ($handle = opendir('/path/to/folder')) {

    while (false !== ($entry = readdir($handle))) {
        $files[] = $entry;
    }
    $images=preg_grep('/\.jpg$/i', $files);

    foreach($images as $image)
    {
    echo $image;
    }
    closedir($handle);
}
echo "test";
?>