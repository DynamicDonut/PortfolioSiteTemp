<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- 
        Don't forget to set a title and description! 
        The title and description both appear in search engine results and
        social media when sharing. 
        The title also sets the text seen in a browser tab/window.
        -->

        <title>DynamicDonut - Test Project</title>
        <meta name="description" content="">

        <!--
        The favicon is the image that appears next to your title
        in a browser tab/window. You can create a .ico file from an image file 
        using a converter (e.g. http://tools.dynamicdrive.com/favicon)
        
        Once you have a favicon file, overwrite the favicon.ico file in this 
        folder.
        -->

        <link rel="shortcut icon" href="../../favicon.ico">

        <!-- 
        These link tags load the normalize CSS file and your own CSS file.
        -->

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/html5-boilerplate.css">
        <link rel="stylesheet" href="../../css/project.css">
    </head>

    <body>
        <div id="container">
            <div id="social">
                <a href="../../index.php" style="height: 95%"><img id="logo" src="http://placekitten.com/500"></a>
                <div id="socIconList">
                    <a href="https://twitter.com/EmperialDonut">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="soc_icon soc_twit">
                            <path d="M512 97.2c-19 8.4-39.3 14-60.5 16.6 21.8-13 38.4-33.4 46.2-58a209.8 209.8 0 0 1-66.6 25.4A105 105 0 0 0 249.5 153c0 8.3.8 16.3 2.5 24A297.1 297.1 0 0 1 35.6 67 105.1 105.1 0 0 0 68 207.4c-16.9-.3-33.4-5.2-47.4-12.9v1.1c0 51 36.4 93.4 84 103.2-8.5 2.3-17.8 3.4-27.4 3.4-6.8 0-13.5-.3-20-1.8a106 106 0 0 0 98.2 73.2A211 211 0 0 1 0 416.9 295.5 295.5 0 0 0 161 464c193.2 0 298.8-160 298.8-298.7 0-4.6-.2-9.1-.4-13.6A209.4 209.4 0 0 0 512 97.2z"/>
                        </svg></a>
                    <a href="https://www.instagram.com/emperialdonut/">
                        <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="soc_icon soc_insta">
                            <path d="M352 0H160C72 0 0 72 0 160v192c0 88 72 160 160 160h192c88 0 160-72 160-160V160C512 72 440 0 352 0zm112 352c0 62-50 112-112 112H160c-62 0-112-50-112-112V160C48 98 98 48 160 48h192c62 0 112 50 112 112v192z"/>
                            <path d="M256 128a128 128 0 1 0 0 256 128 128 0 0 0 0-256zm0 208a80 80 0 1 1 0-160 80 80 0 0 1 0 160z"/>
                            <circle cx="394" cy="118" r="17"/>
                        </svg></a>
                    <a href="https://www.twitch.tv/dynamicdonut">
                        <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="soc_icon soc_twitch">
                          <path d="M48 0L16 96v352h128v64h64l64-64h96l128-136V0H48zm416 288l-90 96H261l-69 50v-50H80V32h384v256z"/>
                          <path d="M240 128h32v128h-32zm96 0h32v128h-32z"/>
                        </svg></a>
                    <a href="https://dynamicdonut.itch.io/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="8.23 10.91 49.76 44.08" class="soc_icon soc_itch">
                            <path d="M14.42 10.91l-6.2 7.74v2.17c0 6.2 10.12 6.2 10.12 0 0 6.2 9.7 6.2 9.7 0 0 6.2 10.12 6.2 10.12 0 0 6.2 9.7 6.2 9.7 0 0 6.2 10.12 6.2 10.12 0v-2.17l-6.2-7.74H14.43zm3.82 13.63c-.31.4-.62.72-.93 1.03a6.31 6.31 0 0 1-4.03 1.34c-.4 0-.82 0-1.13-.1v28.18h41.8V26.8c-.4.1-.72.1-1.13.1a6.32 6.32 0 0 1-4.03-1.34c-.3-.31-.62-.62-.92-1.03-.31.4-.52.72-.93 1.03A6.23 6.23 0 0 1 43 26.9a5.85 5.85 0 0 1-3.92-1.34c-.3-.31-.62-.62-.93-1.03-.3.4-.62.72-.93 1.03C35.9 26.6 34.44 27 33 27s-2.89-.41-4.03-1.34c-.3-.3-.62-.62-.93-1.03-.3.41-.51.72-.92 1.03A6.23 6.23 0 0 1 23.19 27a5.84 5.84 0 0 1-3.92-1.34c-.3-.3-.62-.62-.93-1.03l-.1-.1zm5.57 4.23c2.38 0 3.4.62 4.65 3.1h9.19c.51-2.48 1.54-3.1 4.64-3.1 2.37 0 6.4 2.27 7.02 5.47l3.1 12.08c.62 3.1-1.14 5.36-4.23 5.36-2.17 0-4.96-1.44-6.82-5.36H24.84c-1.85 4.02-4.64 5.36-6.8 5.36-3.1 0-4.86-2.27-4.24-5.36l3.1-12.08c.62-3.2 4.64-5.47 7.02-5.47h-.1zM33 33l-7.33 7.74h3.1v3.92h8.57v-3.81h3.1L33 33z"/>
                        </svg></a>
                    <a href="http://www.tumblr.com/">
                        <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="soc_icon soc_tumb"><path d="M349 429c-14 0-28-4-39-11-8-5-16-13-19-22-3-8-3-25-3-55V224h128v-96H288V0h-83c-3 26-9 48-18 65-8 17-20 32-34 44s-37 22-57 28v73h69v179c0 24 2 42 7 54s14 24 26 35c13 11 28 19 47 25 17 6 31 9 55 9a287 287 0 0 0 116-27v-77c-26 17-41 21-67 21z"/>
                        </svg></a>
                </div>
            </div>

            <div id="project">
                <img id="proj_gallery" src="http://placekitten.com/1920/1080">
                <div id="proj_info">
                    <h2 id="proj_title">BIG Ol' HUGE TITLE</h2>
                    <p id="proj_desc">Words words and more words.</p>
                    <h4 id="proj_role"><strong>ROLE:</strong> Headmaster of all the games.</h4>
                </div>
            </div>

            <div id="navbar">
                    <div class="nav pub_games"><span>Current Games</span></div>
                        <div class="nav-content nav-stuff1">
                            <?php
                                $dir = "../pub_games/";
                                $projList = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                foreach ($projList as $project) {
                                    echo '<a href="' . $dir . substr(basename($project), 0, -4) . '.php"><img src="' . $project . '"></a>';
                                }
                            ?>
                        </div>
                    <div class="nav jam_games"><span>Previous Games</span></div>
                        <div class="nav-content nav-stuff2">
                            <?php
                                $dir = "../jam_games/";
                                $projList = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                foreach ($projList as $project) {
                                    echo '<a href="' . $dir . substr(basename($project), 0, -4) . '.php"><img src="' . $project . '"></a>';
                                }
                            ?>
                        </div>
                    <div class="nav oth_proj"><span>Other Not-Games</span></div>
                        <div class="nav-content nav-stuff3">
                            <?php
                                $dir = "../oth_proj/";
                                $projList = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                foreach ($projList as $project) {
                                    echo '<a href="' . $dir . substr(basename($project), 0, -4) . '.php"><img src="' . $project . '"></a>';
                                }
                            ?>
                        </div>
                </div>
        </div>

        <!-- 
        These script tags load jQuery, any plugins you've downloaded, 
        and your main JavaScript file into your web page
        -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/project.js"></script>
    </body>
</html>
