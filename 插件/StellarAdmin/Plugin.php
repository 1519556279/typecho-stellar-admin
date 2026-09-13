<?php

namespace TypechoPlugin\StellarAdmin;

use Typecho\Plugin\PluginInterface;
use Typecho\Widget\Helper\Form;

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * Stellar Admin —— 星辰风格后台美化（与前台 Stellar 主题同风格：毛玻璃/渐变/暗色/动效）
 *
 * @package StellarAdmin
 * @author 咔咔
 * @version 1.0.0
 */
class Plugin implements PluginInterface
{
    public static function activate()
    {
        \Typecho\Plugin::factory('admin/header.php')->header = __CLASS__ . '::render';
        return 'Stellar 后台美化已启用，刷新页面即可看到效果';
    }

    public static function deactivate()
    {
    }

    public static function config(Form $form)
    {
        $info = new \Typecho\Widget\Helper\Form\Element\Text(
            'sa_info', null, '', _t('说明'),
            _t('Stellar Admin 为纯后台美化插件，无需额外配置。AI 写作 / 评论 AI 等能力请使用独立的 StellarAI 插件。')
        );
        $form->addInput($info);
    }

    public static function personalConfig(Form $form)
    {
    }

    public static function render(string $header): string
    {
        $base = \Typecho\Common::url('usr/plugins/StellarAdmin/assets',
            \Typecho\Widget::widget('Widget_Options')->siteUrl);

        $cssV = filemtime(__TYPECHO_ROOT_DIR__ . '/usr/plugins/StellarAdmin/assets/stellar.css');
        $jsV = filemtime(__TYPECHO_ROOT_DIR__ . '/usr/plugins/StellarAdmin/assets/stellar.js');
        return $header
            . '<link rel="stylesheet" href="' . $base . '/stellar.css?v=' . $cssV . '">' . "\n"
            . '<script src="' . $base . '/stellar.js?v=' . $jsV . '" defer></script>' . "\n";
    }
}
