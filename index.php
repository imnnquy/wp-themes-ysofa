<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ysofa
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <?php 
	        global $wp_scripts, $wp_styles;
			$wp_scripts = new WP_Scripts();
			$wp_styles = new WP_Styles();
			remove_action('wp_head', '_admin_bar_bump_cb');
			remove_action('wp_head', 'print_emoji_detection_script', 7);
			remove_action('wp_print_styles', 'print_emoji_styles');
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );
			remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
        	wp_head(); 
        ?>
    </head>

    <body>
        <!-- Page Content -->
        <div class="container">
            <!-- Heading Row -->
            <div class="row ysofa-site-header">
                <div class="col-md-2 ysofa-navigation">
                    <div class="text-center padding-top-15 padding-bottom-15 ysofa-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></div>
                    <div class="sidebar-wrapper margin-top-25">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#"><span >Accueil</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Réalisations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Particuliers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Artisans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-10 ysofa-banner">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="">
                    <div class="collapse-menu-container">
                        <ul class="nav navbar-nav">
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/garages.png"><br>garages</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/fenetres.png"><br>fenêtres</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/portes.png"><br>portes</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/stores.png"><br>stores</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/volets.png"><br>volets</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/portails.png"><br>portails</a></li>
                            <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/verandas.png"><br>vérandas</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
            <hr>
            <!-- Content Row -->
            <div class="row ysofa-body">
                <div class="col-md-4 ysofa-left-body">
                    <button class="btn btn-lg btn-ysofa">VOTRE DEVIS GRATUIT ICI</button>
                    <div class="body-item margin-top-25">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#"><span>YSOFA, le spécialiste de la</span></a><br>
                                    <a href=""><span>Fermeture du Bâtiment</span></a>
                                </li>
                                <li>
                                    <a href="#"><span>Des équipes professionnelles </span></a><br>
                                    <a href=""><span>hautement qualifiées</span></a>
                                </li>
                                <li>
                                    <a href="#"><span>Ysofa s’engage</span></a><br>
                                    <a href=""><span>pour les particuliers</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div style="width:200px;height:200px;border:solid #8AC58C;"></div>
                    <button class="btn btn-ysofa" style="margin-left: 50px; margin-top: 20px;">Something</button>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
            <!-- Footer -->
            <footer>
                <div class="row ysofa-footer">
                    <div class="col-lg-3">
                        <div>------contacts------</div>
                        <div>
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/insta.png">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/gplus.png">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>------mentions légales------</div>
                        <div>------conditions de vente------</div>
                        <div>------plan du site------</div>
                        <div>------l’ avis du technicien------</div>
                    </div>
                    <div class="col-lg-3">
                        <div>------FAQ------</div>
                        <div>Comment puis-je contacter un technicien?</div>
                        <div>Comment suivre ma commande?</div>
                        <div>J’ai un problème avec mon installation.</div>
                    </div>
                    <div class="col-lg-3">
                        <div>------sponsor------</div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>
