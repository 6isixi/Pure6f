<div id="secondary">
    <section class="widget">
        <form id="search" method="post" action="./">
			<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
			<button type="submit" class="submit"><?php _e('搜'); ?></button>
        </form>
    </section>

    <?php if (!empty($this->options->sidebarBlock) && in_array('BaiduPush', $this->options->sidebarBlock)): ?>
            <?php include_once("baidu_push.php") ?>
    <?php endif; ?>

	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
    	<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
        </ul>
	</section>
    <?php endif; ?>
</div>
