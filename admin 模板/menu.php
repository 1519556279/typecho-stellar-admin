<?php if (!defined('__TYPECHO_ADMIN__')) exit; ?>
<div class="sa-sidebar-head">
    <a class="sa-brand" href="<?php $options->adminUrl(); ?>">
        <span class="sa-brand-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 4.9L20 8l-3.6 3.9L17.5 18 12 15.2 6.5 18l1.1-6.1L4 8l5.6-1.1z"/></svg>
        </span>
        <span class="sa-brand-text"><?php $options->title(); ?></span>
    </a>
    <button type="button" class="sa-sidebar-toggle" title="折叠 / 展开侧边栏">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M3 12h12"/><path d="M3 18h18"/></svg>
    </button>
</div>
<nav class="sa-nav">
<?php $menu->output('', 'sa-current'); ?>
</nav>
<div class="sa-sidebar-foot">
    <div class="sa-user" id="sa-sidebar-user">
        <span class="sa-avatar"><?php echo mb_substr($user->screenName ?? 'U', 0, 1, 'UTF-8'); ?></span>
        <span class="sa-user-name"><?php $user->screenName(); ?></span>
    </div>
    <div class="sa-sidebar-links">
        <a href="<?php $options->siteUrl(); ?>" class="sa-foot-link" title="<?php _e('查看网站'); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </a>
        <a href="<?php $options->logoutUrl(); ?>" class="sa-foot-link" title="<?php _e('登出'); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/></svg>
        </a>
    </div>
</div>
</aside>
<div class="sa-shell">
    <header class="sa-topbar">
        <button type="button" class="sa-topbar-toggle" title="<?php _e('折叠 / 展开侧边栏'); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M3 12h18"/><path d="M3 18h18"/></svg>
        </button>
        <div class="sa-crumbs">
            <span class="sa-crumb"><?php echo $menu->title ?? ''; ?></span>
        </div>
        <div class="sa-topbar-right">
            <a class="sa-help-btn" href="https://github.com/1519556279" target="_blank" rel="noopener" title="作者咔咔的 GitHub 主页">
                <svg viewBox="0 0 16 16" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
            </a>
            <button type="button" class="sa-theme-btn" id="sa-theme-btn" title="<?php _e('主题设置'); ?>"></button>
            <button type="button" class="sa-help-btn" id="sa-help-btn" title="<?php _e('帮助'); ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
            </button>
            <button type="button" class="sa-user-chip" id="sa-user-chip">
                <span class="sa-avatar"><?php echo mb_substr($user->screenName ?? 'U', 0, 1, 'UTF-8'); ?></span>
                <span class="sa-user-name"><?php $user->screenName(); ?></span>
            </button>
            <div class="sa-user-menu" id="sa-user-menu">
                <a href="<?php $options->adminUrl('profile.php'); ?>"><?php _e('个人资料'); ?></a>
                <a href="<?php $options->siteUrl(); ?>"><?php _e('查看网站'); ?></a>
                <a href="<?php $options->logoutUrl(); ?>" class="sa-danger"><?php _e('登出'); ?></a>
            </div>
        </div>
    </header>
