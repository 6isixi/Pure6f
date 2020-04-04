<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowCategory' => _t('显示分类'),
    'BaiduPush' => _t('启用百度推送(建议开启帮助百度搜录)'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}