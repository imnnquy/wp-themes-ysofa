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
                    <div></div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-10 ysofa-banner">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Ysofa-menu-fenetres-38.png" alt="">
                    <div class="collapse-menu-container">
                       
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
            <hr>
            <!-- Call to Action Well -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="well text-center">
                        This is a well that is a great spot for a business tagline or phone number for easy access!
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Heading 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Heading 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
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
