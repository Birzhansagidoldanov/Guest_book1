<?php
session_start();

class Base 
{
    public function header()
    {
        ?>
            <head>
                <meta charset="utf-8">

                <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

                <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
                <meta name="author" content="pixelcave">
                <meta name="robots" content="noindex, nofollow">
                <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

                <!-- Icons -->
                <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
                <link rel="shortcut icon" href="/assets/img/favicons/favicon.png">

                <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16">
                <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32">
                <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-96x96.png" sizes="96x96">
                <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-160x160.png" sizes="160x160">
                <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-192x192.png" sizes="192x192">

                <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-touch-icon-57x57.png">
                <link rel="apple-toustylesheetch-icon" sizes="60x60" href="/assets/img/favicons/apple-touch-icon-60x60.png">
                <link rel="apple-toustylesheetch-icon" sizes="72x72" href="/assets/img/favicons/apple-touch-icon-72x72.png">
                <link rel="apple-toustylesheetch-icon" sizes="76x76" href="/assets/img/favicons/apple-touch-icon-76x76.png">
                <link rel="apple-toustylesheetch-icon" sizes="114x114" href="/assets/img/favicons/apple-touch-icon-114x114.png">
                <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-touch-icon-120x120.png">
                <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-touch-icon-144x144.png">
                <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-touch-icon-152x152.png">
                <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon-180x180.png">
                <!-- END Icons -->

                <!-- Stylesheets -->
                <!-- Web fonts -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">


                <link rel="stylesheet" href="/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
                <link rel="stylesheet" href="/assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
                <link rel="stylesheet" href="/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

                <!-- Bootstrap and OneUI CSS framework -->
                <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
                <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">

                <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
                <!-- <link rel="stylesheet" id="css-theme" href="/assets/css/themes/flat.min.css"> -->
                <!-- END Stylesheets -->
            </head> 
        <?php
    }

    public function footer()
    {
        ?>
            <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
            <script src="/assets/js/core/jquery.min.js"></script>
            <script src="/assets/js/core/bootstrap.min.js"></script>
            <script src="/assets/js/core/jquery.slimscroll.min.js"></script>
            <script src="/assets/js/core/jquery.scrollLock.min.js"></script>
            <script src="/assets/js/core/jquery.appear.min.js"></script>
            <script src="/assets/js/core/jquery.countTo.min.js"></script>
            <script src="/assets/js/core/jquery.placeholder.min.js"></script>
            <script src="/assets/js/core/js.cookie.min.js"></script>
            <script src="/assets/js/app.js"></script>

            <!-- Page JS Plugins -->
            <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
            <script src="/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
            <script src="/assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
            <script src="/assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

            <!-- Page JS Code -->
            <script src="/assets/js/pages/base_pages_login.js"></script>
        <?php
    }
}



class Main extends Base
{
    public function render($data = [])
    {
        ?>
            <!DOCTYPE html>
            <!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
            <!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
                <?php $this->header(); ?>
                <body>
                    <!-- Page Container -->
                    <!--
                        Available Classes:

                        'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

                        'sidebar-l'                  Left Sidebar and right Side Overlay
                        'sidebar-r'                  Right Sidebar and left Side Overlay
                        'sidebar-mini'               Mini hoverable Sidebar (> 991px)
                        'sidebar-o'                  Visible Sidebar by default (> 991px)
                        'sidebar-o-xs'               Visible Sidebar by default (< 992px)

                        'side-overlay-hover'         Hoverable Side Overlay (> 991px)
                        'side-overlay-o'             Visible Side Overlay by default (> 991px)

                        'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

                        'header-navbar-fixed'        Enables fixed header
                    -->
                    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

                        <!-- Sidebar -->
                        <nav id="sidebar">
                            <!-- Sidebar Scroll Container -->
                            <div id="sidebar-scroll">
                                <!-- Sidebar Content -->
                                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                                <div class="sidebar-content">
                                    <!-- Side Header -->
                                    <div class="side-header side-content bg-white-op">
                                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                                        <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <a class="h5 text-white" href="index.html">
                                            <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                                        </a>
                                    </div>
                                    <!-- END Side Header -->

                                    <!-- Side Content -->
                                    <div class="side-content side-content-full">
                                        <ul class="nav-main">
                                            <li>
                                                <a href="/login.php"><i class="si si-list"></i><span class="sidebar-mini-hide">Оставить отзыв</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Side Content -->
                                </div>
                                <!-- Sidebar Content -->
                            </div>
                            <!-- END Sidebar Scroll Container -->
                        </nav>
                        <!-- END Sidebar -->

                        <!-- Header -->
                        <header id="header-navbar" class="content-mini content-mini-full">
                            <!-- Header Navigation Right -->
                            <ul class="nav-header pull-right">
                                <li>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                            <img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="base_pages_inbox.html">
                                                    <i class="si si-envelope-open pull-right"></i>
                                                    <span class="badge badge-primary pull-right">3</span>Inbox
                                                </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="base_pages_profile.html">
                                                    <i class="si si-user pull-right"></i>
                                                    <span class="badge badge-success pull-right">1</span>Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">
                                                    <i class="si si-settings pull-right"></i>Settings
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Actions</li>
                                            <li>
                                                <a tabindex="-1" href="base_pages_lock.html">
                                                    <i class="si si-lock pull-right"></i>Lock Account
                                                </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="base_pages_login.html">
                                                    <i class="si si-logout pull-right"></i>Log out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                                    <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                                        <i class="fa fa-tasks"></i>
                                    </button>
                                </li>
                            </ul>
                            <!-- END Header Navigation Right -->

                            <!-- Header Navigation Left -->
                            <ul class="nav-header pull-left">
                                <li class="hidden-md hidden-lg">
                                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                                        <i class="fa fa-navicon"></i>
                                    </button>
                                </li>
                                <li class="hidden-xs hidden-sm">
                                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                </li>
                                <li>
                                    <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                                    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                                        <i class="si si-grid"></i>
                                    </button>
                                </li>
                                <li class="visible-xs">
                                    <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                                    <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </li>
                                <li class="js-header-search header-search">
                                    <form class="form-horizontal" action="base_pages_search.html" method="post">
                                        <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                            <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                            <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <!-- END Header Navigation Left -->
                        </header>
                        <!-- END Header -->

                        <!-- Main Container -->
                        <main id="main-container">
                            <!-- Page Header -->
                            <div class="content bg-gray-lighter">
                                <div class="row items-push">
                                    <div class="col-sm-7">
                                        <h1 class="page-heading">
                                            <?php
                                            if($_POST){
                                                $result = [];
                                                $pattern ='/<(.+?)>/';
                                                preg_match_all($pattern, $_POST['text'], $result);
                                                if($result[0]){ 
                                                    echo "Не Допустимы HTML теги. Пожалуйста замените '>' '<' символы на ковычки ";      
                                                    $_POST = null;                                        
                                                }elseif($_POST){
                                                echo "Спасибо за отзыв!";

                                              
                                                }
                                            
                                        }else{
                                                echo "Гостевая книга отзыва";
                                            }
                                    
                                            ?>
                                        </h1>
                                    </div>
                                    <div class="col-sm-5 text-right hidden-xs">
                                        <ol class="breadcrumb push-10-t">
                                            <li>Generic</li>
                                            <li><a class="link-effect" href="">Blank</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- END Page Header -->

                            <!-- Page Content -->
                            <div class="content">
              <?php                  
                $host = '127.0.0.1';
                $db   = 'cg_16_reviews';
                $user = 'Admin';
                $pass = 'aselasel';
                $charset = 'utf8';
                
                #$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;
                $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                $opt = [
                    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                
                # - Этап 1й (Подключение)
                $pdo = new \PDO($dsn, $user, $pass, $opt);
                
                
                
                
                $stmt = $pdo->prepare("
                    SELECT
                        *
                    FROM
                        `reviews`
                ");
                
                $stmt->execute();
                
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $rests){
 echo '<main id="main-container">
               
                <div class="js-chat-container content content-full" data-chat-mode="full">
                   
                    <div class="block remove-margin-b">
                        <ul class="js-chat-head nav nav-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#chat-window1">
                                    <img class="img-avatar img-avatar16" src="assets/img/avatars/avatar3.jpg" alt="">
                                    <span class="push-5-l">'.$rests['username'].'</span>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content overflow-hidden">
                            <div class="tab-pane fade in active" id="chat-window1">
                                <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="1">
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>'. date('d.m.Y H:i',$rests['time']+60*60*6) .'</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-r">
                                        <div class="block-content block-content-full block-content-mini bg-gray-light">'.$rests['text'].'</div>
                                </div>
                            </div>
                         </div>                 
                     </div>
                    <!-- END Full Chat -->
                </div>
                <!-- END Page Content -->
            </main>';
}
                    $this->footer(); ?>
                </body>
            </html>
        <?php
                }
    
    public function content($data = [])
    {
        $host = '127.0.0.1';
        $db   = 'cg_16_reviews';
        $user = 'Admin';
        $pass = 'aselasel';
        $charset = 'utf8';

        #$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        # - Этап 1й (Подключение)
        $pdo = new \PDO($dsn, $user, $pass, $opt);
        
        $stmt = $pdo->prepare("
        SELECT
            *
        FROM
            `reviews`
        ");

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function table($options, $data, $buttons)
    {
        ?>
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Список</h3>
                </div>
                <div class="block-content">
                    <?php
                        foreach ($buttons as $button) {
                            echo '<a class="btn ' . $button['class'] . ' push-5-r" href="' . $button['link'] . '">' . $button['label'] . '</a>';
                        }
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <?php
                                        foreach ($options as $key => $column) {
                                            if ($key == 'table-actions') {
                                                echo '<th>Действия</th>';
                                            } else {
                                                echo '<th class="' . $column['class'] . '">' . $column['label'] . '</th>';
                                            }
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($data['data'] as $row) {
                                        echo '<tr>';
                                        foreach ($options as $key => $column) {

                                            if ($key == 'table-actions') {
                                                echo '<td>';
                                                foreach ($column as $button) {
                                                    echo '<a class="btn btn-sm btn-default" href="' . $button['link'] . '?id=' . $row['id'] . '"><i class="fa ' . $button['icon'] . '"></i></a>';
                                                }
                                                echo '</td>';
                                            } else {

                                                echo '<td class="' . $column['class'] . '">' . $row[$key] . '</td>';
                                            }
                                        }
                                        echo '</tr>';
                                    }

                                    

                                  
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php
    }
}


?>

