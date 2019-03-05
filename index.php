<!DOCTYPE html>
<html>
    <head>
        <title>BB А.А.</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
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
    <body>
        <div class="container">
            <header>
                <h1>Публикации:</h1>
            </header>
            <section class="ib-container" id="ib-container">
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
                <article>
                    <header>
                        <h3><a href="test.html">Sample.pdf</a></h3>
                    </header>
                    <a href="test.html"><img src="images/1.jpg" width=100%></img></a>
                </article>
            </section>
        </div>
    </body>
</html>
