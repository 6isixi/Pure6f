<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php if($this->is('index')): ?><?php $this->options->title(); ?>-<?php $this->options->description(); ?>
    <?php elseif($this->is('archive')): ?><?php $this->archiveTitle('/','',' - '); ?><?php $this->options->title(); ?>
    <?php else: ?><?php $this->archiveTitle('','',' - '); ?><?php $this->options->title(); ?><?php endif; ?></title>
<!--[if lt IE 9]>
<script src="https://cdn.bootcss.com/html5shiv/r29/html5.js"></script>
<![endif]-->
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>"
    <?php $this->header("generator=&template=&"); ?>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/instantclick/3.0.1/instantclick.js"data-no-instant></script>
        <script data-no-instant>
        InstantClick.on('change', function() {
        ga('send', 'pageview', location.pathname + location.search);
        });
        #instantclick-bar {
        background: white;
        }
        InstantClick.init();
        </script>
        <script type="text/javascript">
            var OriginTitile = document.title;
            var titleTime;
            document.addEventListener('visibilitychange', function () {
                if (document.hidden) {
                $('[rel="icon"]').attr('href', "/img/seven.ico");
                document.title = '╭(°A°`)╮ 页面崩溃啦 ~ | 呜呜呜！';
                clearTimeout(titleTime);
            }
            else {
                $('[rel="icon"]').attr('href', "/favicon.ico");
                document.title = '(ฅ>ω<*ฅ) 噫又好啦~' + OriginTitile;
                titleTime = setTimeout(function () {
                    document.title = OriginTitile;
                    }, 2000);
                }
            });
        </script>
</head>
<body>
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name ">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                   <?php $this->options->title() ?>
                </a>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <a class="<?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('博客'); ?></a>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
					<?php endwhile; ?>
				</nav>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group">
