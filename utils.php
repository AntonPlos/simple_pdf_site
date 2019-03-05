<?php
function get_all_articles($main_dir) {
    $files_article = scandir_current($main_dir);
    $info_articles = array();
    foreach ($files_article as $index => $name_file) {
        $info_article = array();
        $file_stream = fopen('./'.$main_dir.'/'.$name_file, 'r') or die("Error when open file.");
        while(!feof($file_stream))
        {
            array_push($info_article, fgets($file_stream));
        }
        fclose($file_stream);
        array_push($info_articles, $info_article);
    }
    return $info_articles;
}

function scandir_current($dir, $sort=0)
{
    $list = scandir($dir, $sort);
    
    if (!$list) {
        return false;
    }

    if ($sort == 0) {
        unset($list[0], $list[1]);
    } else {
        unset($list[count($list) - 1], $list[count($list) - 1]);
    }
    return $list;
}
$article_pattern = '
                <a href="LINK_TO_PDF"><article>
                    <header>
                        <h2>NAME_ARTICLE</h2>
                        <h3>TYPE_ARTICLE</h3>
                    </header>
                    <h2>AUTHORS</h2>
                    <h3>ABOUT</h3>
                    <h3>TAGS</h3>
                </article></a>';
?>