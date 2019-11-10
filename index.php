
<?php
    $json_string= file_get_contents("https://content.guardianapis.com/search?api-key=41822d18-a45b-4018-8bcf-752e4ee29f66");
    
    $data = json_decode($json_string, TRUE);

    $data = $data["response"]["results"];
  
  


echo "
<!doctype html>\n";
echo "<html class=\"no-js\" lang=\"\">\n";
echo "
<head>\n";
    echo "
    <meta charset=\"utf-8\">\n";
    echo "
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\n";
    echo " <title>Newspaper Web Template</title>\n";
    echo "
    <meta name=\"description\" content=\"\">\n";
    echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo " \n";
    echo "
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">\n"; echo "        <link rel=\" stylesheet\"
        href=\"css/normalize.css\">\n"; echo "        <link rel=\" stylesheet\" href=\"css/main.css\">\n";
        echo "        <script src=\" js/vendor/modernizr-2.8.3.min.js\"> </script>\n"; echo "    </head>\n" ;
        echo "    <body>\n" ; echo "        <!--[if lt IE 8]>\n" ; echo "            <p class=\" browserupgrade\">You
    are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a>
        to improve your experience.</p>\n"; echo "        <![endif]-->\n" ; echo "\n" ;
        echo "        <!-- Add your site or application content here -->\n" ; echo "        \n" ; echo "        \n" ;
        echo "        <section class=\" topbar clear\">\n";
        echo " <div class=\"template clear\">\n";
            echo " <div class=\"topbarleft clear\">\n";
                echo " <ul>\n";
                    echo " <li><a href=\"\">Sign Up</a></li>\n";
                    echo " <li><a href=\"\">Login</a></li>\n";
                    echo " <li><a href=\"\">Rss Feeds</a></li>\n";
                    echo " <li><a href=\"\">Archive News</a></li>\n";
                    echo " </ul>\n";
                echo " \n";
                echo " </div>\n";
            echo " </div>\n";
        echo " \n";
        echo " </section>\n";
        echo " <div class=\"template clear \">\n";
            echo " \n";
            echo " <section class=\"headersection clear text-center \">\n";
                echo " <h1>Mag Magazine</h1>\n";
                echo " <p>All The Latest News & Information In The World</p>\n";
                echo " \n";
                echo " </section>\n";
            echo " \n";
            echo " <section class=\"mainmenu clear\">\n";
                echo " <ul>\n";
                    echo " <li><a id=\"active\" href=\"\">Home</a></li>\n";
                    echo " <li><a href=\"\">National</a></li>\n";
                    echo " <li><a href=\"\">International</a></li>\n";
                    echo " <li><a href=\"\">Health</a></li>\n";
                    echo " <li><a href=\"\">Sports</a></li>\n";
                    
                  for ($x = 0; $x <= count($data); $x++) {
                        $link = $data[$x]["pillarName"] ;
                        $href = $data[$x]["webUrl"];
                        echo " <li><a href='$href'>$link</a></li>\n";
                    }
                echo " </ul>\n";
                echo " </section>\n";
            echo " \n";
            echo " <section class=\"recentnews clear\">\n";
                echo "\n";
                echo " <article class=\"recentleft clear\">\n";
                    echo " <img src=\"img/banner.JPG\" alt=\"LatestNews\">\n";
                    echo " \n";
                    echo " <h3>Cursus penati saccum ut curabitur nulla.</h3>\n";
                    echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque velit voluptatem
                        explicabo cupiditate, quae totam temporibus. Cupiditate, magni aliquid sunt incidunt alias, quo
                        debitis vitae officiis deserunt iste modi est!quo debitis vitae officiis deserunt iste modi est!
                    </p>\n";
                    echo " \n";
                    echo " </article>\n";
                echo " \n";
                echo " <article class=\"recentright clear\">\n";
                    for ($x = 0; $x <= count($data); $x++) {
                        $title = $data[$x]["webTitle"] ;
                        $href = $data[$x]["webUrl"];
                        echo " <li><a href='$href'>$link</a></li>\n";
                    
                            echo " <div class=\"latestnews clear\"> \n";
                                echo " <div class=\"postimage\">\n";
                                    echo " <img src=\"img/post4.jpg\" alt=\"LatestNews\">\n";
                                    echo " </div>\n";
                                echo " <div class=\"postdes\">\n";
                                    echo " <h3><a href='$href'>$title</a></h3>\n";
                                    
                                    echo " </div> \n";
                            echo " </div> \n";

                    }
                    echo " </article> \n";
                
                echo " </section>\n";
            echo " \n";
            echo " \n";
            echo " \n";
            echo " <section class=\"contentsection clear\">\n";
                echo " <div class=\"contentleft clear\">\n";
                    echo " <article class=\"topcat clear\">\n";
                        echo " <div class=\"samepost clear\">\n";
                            echo " <h2>International</h2>\n";
                            echo " \n";
                            echo " <div class=\"sametopcat clear\">\n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " \n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " \n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " </div>\n";
                            echo " </div>\n";
                        echo " \n";
                        echo " \n";
                        echo " <div class=\"samepost clear\">\n";
                            echo " <h2>International</h2>\n";
                            echo " <div class=\"sametopcat clear\">\n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " \n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " \n";
                                echo " <div class=\"sametopimg clear\">\n";
                                    echo " <img src=\"img/catagoryimage.jpg\" alt=\"Catagory image\">\n";
                                    echo " <div class=\"sametopdes clear \">\n";
                                        echo " <h4>Indonectitus facills</h4>\n";
                                        echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                            suscipit dolorum</p>\n";
                                        echo " <a href=\"post.html\">Read More »</a> \n";
                                        echo " </div>\n";
                                    echo " </div>\n";
                                echo " </div>\n";
                            echo " </div>\n";
                        echo " </article>\n";
                    echo " <article class=\"bottomcat clear\">\n";
                        echo " \n";
                        echo " <ul>\n";
                            echo " <li><a id=\"catactive\" href=\"\">Financial World</a></li>\n";
                            echo " <li><a href=\"\">Sports World</a></li>\n";
                            echo " <li><a href=\"\">Promi World</a></li>\n";
                            echo " <li><a href=\"\">Music & Arts World</a></li>\n";
                            echo " </ul>\n";
                        echo " \n";
                        echo " <div>\n";
                            echo " <div class=\"samearticle clear\">\n";
                                echo "\n";
                                echo " <h4><a href=\"post.html\">Lorem ipsum dolor</a></h4>\n";
                                echo " <img src=\"img/topcatagoryimage.jpg\" alt=\"Image\">\n";
                                echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sint culpa,
                                    perspiciatis iste, facilis distinctio deleniti illo ea qui dicta id</p>\n";
                                echo " <p> Tag: <a href=\"#\">Tag Name »</a></p>\n";
                                echo "\n";
                                echo " </div>\n";
                            echo "\n";
                            echo " <div class=\"samearticle clear\">\n";
                                echo "\n";
                                echo " <h4><a href=\"post.html\">Lorem ipsum dolor</a></h4>\n";
                                echo " <img src=\"img/topcatagoryimage.jpg\" alt=\"Image\">\n";
                                echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sint culpa,
                                    perspiciatis iste, facilis distinctio deleniti illo ea qui dicta id</p>\n";
                                echo " <p> Tag: <a href=\"#\">Tag Name »</a></p>\n";
                                echo "\n";
                                echo " </div>\n";
                            echo "\n";
                            echo " <div class=\"samearticle clear\">\n";
                                echo "\n";
                                echo " <h4><a href=\"post.html\">Lorem ipsum dolor</a></h4>\n";
                                echo " <img src=\"img/topcatagoryimage.jpg\" alt=\"Image\">\n";
                                echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sint culpa,
                                    perspiciatis iste, facilis distinctio deleniti illo ea qui dicta id</p>\n";
                                echo " <p> Tag: <a href=\"#\">Tag Name »</a></p>\n";
                                echo "\n";
                                echo " </div>\n";
                            echo "\n";
                            echo " <div class=\"samearticle clear\">\n";
                                echo "\n";
                                echo " <h4><a href=\"post.html\">Lorem ipsum dolor</a></h4>\n";
                                echo " <img src=\"img/topcatagoryimage.jpg\" alt=\"Image\">\n";
                                echo " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sint culpa,
                                    perspiciatis iste, facilis distinctio deleniti illo ea qui dicta id</p>\n";
                                echo " <p> Tag: <a href=\"#\">Tag Name »</a></p>\n";
                                echo "\n";
                                echo " </div>\n";
                            echo " \n";
                            echo " </div>\n";
                        echo " \n";
                        echo " </article>\n";
                    echo " \n";
                    echo " </div>\n";
                echo " <aside class=\"rightasidebar clear\">\n";
                    echo " <div class=\"addoption clear\">\n";
                        echo " <h4>Advertisement</h4>\n";
                        echo " <img src=\"img/advertisement.jpg\" alt=\"\">\n";
                        echo " </div>\n";
                    echo " <div class=\"catagoryoption clear\">\n";
                        echo " <h4>Catagories</h4>\n";
                        echo " <ul>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " </ul>\n";
                        echo " \n";
                        echo " <h4>Link Heder</h4>\n";
                        echo " \n";
                        echo " <ul>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " </ul>\n";
                        echo " \n";
                        echo " <h4>Link Heder</h4>\n";
                        echo " \n";
                        echo " <ul>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " <li><a href=\"post.html\">» Lorem ipsum dolor</a></li>\n";
                            echo " </ul>\n";
                        echo " \n";
                        echo " \n";
                        echo " </div>\n";
                    echo " \n";
                    echo " </aside>\n";
                echo " \n";
                echo " </section>\n";
            echo " \n";
            echo " \n";
            echo " <div class=\"footertop clear\">\n";
                echo "\n";
                echo " <div class=\"sametext clear\">\n";
                    echo " <h4>About us</h4>\n";
                    echo " <ul>\n";
                        echo "\n";
                        echo " <li><a href=\"#\">Portfolio</a></li>\n";
                        echo " <li><a href=\"#\">Customization Services</a></li>\n";
                        echo " <li><a href=\"#\">Meet the Team</a></li>\n";
                        echo "\n";
                        echo " </ul>\n";
                    echo " </div>\n";
                echo "\n";
                echo " <div class=\"sametext clear\">\n";
                    echo " <h4>Support</h4>\n";
                    echo " <ul>\n";
                        echo " <li><a href=\"#\">Forum Support</a></li>\n";
                        echo " <li><a href=\"#\">Newspaper Documentation</a></li>\n";
                        echo " <li><a href=\"#\">Newsmag Documentation</a></li>\n";
                        echo " <li><a href=\"#\">Video Tutorials</a></li>\n";
                        echo "\n";
                        echo " </ul>\n";
                    echo " </div>\n";
                echo "\n";
                echo " <div class=\"sametext clear\">\n";
                    echo " <h4>Resources</h4>\n";
                    echo " <ul>\n";
                        echo " <li><a href=\"#\">Blog</a></li>\n";
                        echo " <li><a href=\"#\">Newspaper Showcase</a></li>\n";
                        echo " <li><a href=\"#\">Newsmag Showcase</a></li>\n";
                        echo " <li><a href=\"#\">Privacy Policy</a></li>\n";
                        echo "\n";
                        echo " </ul>\n";
                    echo " </div>\n";
                echo "\n";
                echo " <div class=\"sametext clear\">\n";
                    echo " <h4>SUPPORT POLICY</h4>\n";
                    echo " <ul>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " </ul>\n";
                    echo " </div>\n";
                echo "\n";
                echo " <div class=\"sametext clear\">\n";
                    echo " <h4>PRIVACY POLICY</h4>\n";
                    echo " <ul>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " <li><a href=\"#\">Lorem ipsum dolor</a></li>\n";
                        echo " </ul>\n";
                    echo " </div>\n";
                echo "\n";
                echo " </div>\n";
            echo " \n";
            echo " <section class=\"footer clear\">\n";
                echo " <div class=\"footerleft clear\">\n";
                    echo " <p>Copyright Ibrahim Khalil © 2019 - All Rights Reserved</p>\n";
                    echo " \n";
                    echo " \n";
                    echo " \n";
                    echo " </section>\n";
            echo " \n";
            echo " \n";
            echo " \n";
            echo " </div>\n";
        echo " \n";
        echo " \n";
        echo " \n";
        echo " \n";
        echo " \n";
        echo " \n";
        echo " \n";
        echo "\n";
       
        echo "</body>\n" ;
        echo "</html>\n" ;
?>