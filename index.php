<!DOCTYPE html>
<html>
    <head>
        <title>BB А.А.</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var $container	= $('#ib-container'),
                        $articles	= $container.children('article'),
                        timeout;
                $articles.on( 'mouseenter', function( event ) {
                        var $article	= $(this);
                        clearTimeout( timeout );
                        timeout = setTimeout( function() {
                                if( $article.hasClass('active') ) return false;
                                $articles.not( $article.removeClass('blur').addClass('active') )
                                                 .removeClass('active')
                                                 .addClass('blur');
                        }, 65 );
                });

                $container.on( 'mouseleave', function( event ) {
                        clearTimeout( timeout );
                        $articles.removeClass('active blur');
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Публикации:</h1>
            </header>
            <section class="ib-container" id="ib-container">
                <?php 
                    include 'utils.php';
                    $main_dir = 'articls';
                    $info_articles = get_all_articles($main_dir);
                    $output_articles = '';
                    foreach ($info_articles as $index => $info_article) {
                        $output_article = str_replace('LINK_TO_PDF', 'pdf/'.$info_article[0], 
                                str_replace('NAME_ARTICLE', $info_article[1], 
                                str_replace('TYPE_ARTICLE', $info_article[2], 
                                str_replace('AUTHORS', $info_article[3], 
                                str_replace('ABOUT', $info_article[4], 
                                str_replace('TAGS', $info_article[5], 
                                        $article_pattern))))));
                        $output_articles .= $output_article;
                    }
                    echo $output_articles;
                ?>
            </section>
        </div>
    </body>
</html>
