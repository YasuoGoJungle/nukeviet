<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 12/28/2009 20:8
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sql_create_table[] = "INSERT INTO " . NV_AUTHORS_GLOBALTABLE . "_module (mid, module, lang_key, icon, weight, act_1, act_2, act_3, checksum) VALUES
    (1, 'siteinfo', 'mod_siteinfo', 'fas fa-info-circle', 1, 1, 1, 1, ''),
    (2, 'authors', 'mod_authors', 'fab fa-adn', 2, 1, 1, 1, ''),
    (3, 'settings', 'mod_settings', 'fas fa-cogs', 3, 1, 1, 0, ''),
    (4, 'database', 'mod_database', 'fas fa-database', 4, 1, 0, 0, ''),
    (5, 'webtools', 'mod_webtools', 'fas fa-toolbox', 5, 1, 1, 0, ''),
    (6, 'seotools', 'mod_seotools', 'fab fa-searchengin', 6, 1, 1, 0, ''),
    (7, 'language', 'mod_language', 'fas fa-language', 7, 1, 1, 0, ''),
    (8, 'modules', 'mod_modules', 'fas fa-cubes', 8, 1, 1, 0, ''),
    (9, 'themes', 'mod_themes', 'fas fa-adjust', 9, 1, 1, 0, ''),
    (10, 'extensions', 'mod_extensions', 'fas fa-layer-group', 10, 1, 0, 0, ''),
    (11, 'upload', 'mod_upload', 'fas fa-file-alt', 11, 1, 1, 1, ''),
    (12, 'emailtemplates', 'mod_emailtemplates', 'fas fa-envelope', 12, 1, 1, 0, '')";

$sql_create_table[] = "INSERT INTO " . $db_config['prefix'] . "_upload_dir (did, dirname, time, thumb_type, thumb_width, thumb_height, thumb_quality) VALUES ('-1', '', 0, 3, 100, 150, 90)";
$sql_create_table[] = "UPDATE " . $db_config['prefix'] . "_upload_dir SET did = '0' WHERE did = '-1'";

$sql_create_table[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES
    ('sys', 'site', 'closed_site', '0'),
    ('sys', 'site', 'admin_theme', 'admin_default'),
    ('sys', 'site', 'date_pattern', 'l, d/m/Y'),
    ('sys', 'site', 'time_pattern', 'H:i'),
    ('sys', 'site', 'online_upd', '1'),
    ('sys', 'site', 'statistic', '1'),
    ('sys', 'site', 'site_phone', ''),
    ('sys', 'site', 'mailer_mode', ''),
    ('sys', 'site', 'smtp_host', 'smtp.gmail.com'),
    ('sys', 'site', 'smtp_ssl', '1'),
    ('sys', 'site', 'smtp_port', '465'),
    ('sys', 'site', 'verify_peer_ssl', '1'),
    ('sys', 'site', 'verify_peer_name_ssl', '1'),
    ('sys', 'site', 'smtp_username', 'user@gmail.com'),
    ('sys', 'site', 'smtp_password', ''),
    ('sys', 'site', 'googleAnalyticsID', ''),
    ('sys', 'site', 'googleAnalyticsSetDomainName', '0'),
    ('sys', 'site', 'googleAnalyticsMethod', 'classic'),
    ('sys', 'site', 'searchEngineUniqueID', ''),
    ('sys', 'site', 'metaTagsOgp', '1'),
    ('sys', 'site', 'pageTitleMode', 'pagetitle'),
    ('sys', 'site', 'description_length', '170'),
    ('sys', 'site', 'nv_unickmin', '" . $global_config['nv_unickmin'] . "'),
    ('sys', 'site', 'nv_unickmax', '" . $global_config['nv_unickmax'] . "'),
    ('sys', 'site', 'nv_upassmin', '" . $global_config['nv_upassmin'] . "'),
    ('sys', 'site', 'nv_upassmax', '" . $global_config['nv_upassmax'] . "'),
    ('sys', 'site', 'dir_forum', ''),
    ('sys', 'site', 'nv_unick_type', '" . $global_config['nv_unick_type'] . "'),
    ('sys', 'site', 'nv_upass_type', '" . $global_config['nv_upass_type'] . "'),
    ('sys', 'site', 'allowmailchange', '1'),
    ('sys', 'site', 'allowuserpublic', '1'),
    ('sys', 'site', 'allowquestion', '0'),
    ('sys', 'site', 'allowloginchange', '0'),
    ('sys', 'site', 'allowuserlogin', '1'),
    ('sys', 'site', 'allowuserloginmulti', '0'),
    ('sys', 'site', 'allowuserreg', '2'),
    ('sys', 'site', 'is_user_forum', '0'),
    ('sys', 'site', 'openid_servers', ''),
    ('sys', 'site', 'openid_processing', '0'),
    ('sys', 'site', 'user_check_pass_time', '1800'),
    ('sys', 'site', 'auto_login_after_reg', '1'),
    ('sys', 'site', 'whoviewuser', '2'),
    ('sys', 'site', 'ssl_https', '0'),
    ('sys', 'site', 'facebook_client_id', ''),
    ('sys', 'site', 'facebook_client_secret', ''),
    ('sys', 'site', 'google_client_id', ''),
    ('sys', 'site', 'google_client_secret', ''),
    ('sys', 'site', 'cors_restrict_domains', '1'),
    ('sys', 'site', 'cors_valid_domains', ''),

    ('sys', 'define', 'nv_gfx_num', '6'),
    ('sys', 'global', 'notification_active', '1'),
    ('sys', 'global', 'notification_autodel', '15'),
    ('sys', 'global', 'site_keywords', 'NukeViet, portal, mysql, php'),
    ('sys', 'global', 'block_admin_ip', '0'),
    ('sys', 'global', 'admfirewall', '0'),
    ('sys', 'global', 'dump_autobackup', '1'),
    ('sys', 'global', 'dump_backup_ext', 'gz'),
    ('sys', 'global', 'dump_backup_day', '30'),
    ('sys', 'global', 'gfx_chk', '" . $global_config['gfx_chk'] . "'),
    ('sys', 'global', 'file_allowed_ext', 'adobe,archives,audio,documents,flash,images,real,video'),
    ('sys', 'global', 'forbid_extensions', 'php,php3,php4,php5,phtml,inc'),
    ('sys', 'global', 'forbid_mimes', ''),
    ('sys', 'global', 'nv_max_size', '" . min(nv_converttoBytes(ini_get('upload_max_filesize')), nv_converttoBytes(ini_get('post_max_size'))) . "'),
    ('sys', 'global', 'upload_checking_mode', 'strong'),
    ('sys', 'global', 'upload_alt_require', '1'),
    ('sys', 'global', 'upload_auto_alt', '1'),
    ('sys', 'global', 'upload_chunk_size', '0'),
    ('sys', 'global', 'useactivate', '2'),
    ('sys', 'global', 'allow_sitelangs', '" . NV_LANG_DATA . "'),
    ('sys', 'global', 'read_type', '0'),
    ('sys', 'global', 'rewrite_enable', '" . $global_config['rewrite_enable'] . "'),
    ('sys', 'global', 'rewrite_optional', '" . $global_config['rewrite_optional'] . "'),
    ('sys', 'global', 'rewrite_endurl', '" . $global_config['rewrite_endurl'] . "'),
    ('sys', 'global', 'rewrite_exturl', '" . $global_config['rewrite_exturl'] . "'),
    ('sys', 'global', 'rewrite_op_mod', ''),
    ('sys', 'global', 'autocheckupdate', '1'),
    ('sys', 'global', 'autoupdatetime', '24'),
    ('sys', 'global', 'gzip_method', '" . $global_config['gzip_method'] . "'),
    ('sys', 'global', 'authors_detail_main', '0'),
    ('sys', 'global', 'spadmin_add_admin', '1'),
    ('sys', 'global', 'timestamp', '1'),
    ('sys', 'global', 'captcha_type', '0'),
    ('sys', 'global', 'version', '" . $global_config['version'] . "'),
    ('sys', 'global', 'cookie_httponly', '" . $global_config['cookie_httponly'] . "'),
    ('sys', 'global', 'admin_check_pass_time', '1800'),
    ('sys', 'global', 'cookie_secure', '" . $global_config['cookie_secure'] . "'),
    ('sys', 'global', 'is_flood_blocker', '1'),
    ('sys', 'global', 'max_requests_60', '40'),
    ('sys', 'global', 'max_requests_300', '150'),
    ('sys', 'global', 'is_login_blocker', '1'),
    ('sys', 'global', 'login_number_tracking', '5'),
    ('sys', 'global', 'login_time_tracking', '5'),
    ('sys', 'global', 'login_time_ban', '30'),
    ('sys', 'global', 'nv_display_errors_list', '1'),
    ('sys', 'global', 'display_errors_list', '1'),
    ('sys', 'global', 'nv_auto_resize', '1'),
    ('sys', 'global', 'dump_interval', '1'),
    ('sys', 'global', 'cdn_url', ''),
    ('sys', 'global', 'two_step_verification', '0'),
    ('sys', 'global', 'recaptcha_sitekey', ''),
    ('sys', 'global', 'recaptcha_secretkey', ''),
    ('sys', 'global', 'recaptcha_type', 'image'),
    ('sys', 'global', 'remote_api_access', '0'),
    ('sys', 'define', 'nv_gfx_width', '150'),
    ('sys', 'define', 'nv_gfx_height', '40'),
    ('sys', 'define', 'nv_max_width', '1500'),
    ('sys', 'define', 'nv_max_height', '1500'),
    ('sys', 'define', 'nv_live_cookie_time', '" . NV_LIVE_COOKIE_TIME . "'),
    ('sys', 'define', 'nv_live_session_time', '0'),
    ('sys', 'define', 'nv_anti_iframe', '" . NV_ANTI_IFRAME . "'),
    ('sys', 'define', 'nv_anti_agent', '" . NV_ANTI_AGENT . "'),
    ('sys', 'define', 'nv_allowed_html_tags', '" . NV_ALLOWED_HTML_TAGS . "'),
    ('sys', 'define', 'nv_debug', '" . NV_DEBUG . "')";

$sql_create_table[] = "INSERT INTO " . NV_CRONJOBS_GLOBALTABLE . " (start_time, inter_val, run_file, run_func, params, del, is_sys, act, last_time, last_result) VALUES
    (" . NV_CURRENTTIME . ", 5, 'online_expired_del.php', 'cron_online_expired_del', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 1440, 'dump_autobackup.php', 'cron_dump_autobackup', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 60, 'temp_download_destroy.php', 'cron_auto_del_temp_download', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 30, 'ip_logs_destroy.php', 'cron_del_ip_logs', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 1440, 'error_log_destroy.php', 'cron_auto_del_error_log', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 360, 'error_log_sendmail.php', 'cron_auto_sendmail_error_log', '', 0, 1, 0, 0, 0),
    (" . NV_CURRENTTIME . ", 60, 'ref_expired_del.php', 'cron_ref_expired_del', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 60, 'check_version.php', 'cron_auto_check_version', '', 0, 1, 1, 0, 0),
    (" . NV_CURRENTTIME . ", 1440, 'notification_autodel.php', 'cron_notification_autodel', '', 0, 1, 1, 0, 0)";

$sql_create_table[] = "INSERT INTO " . $db_config['prefix'] . "_setup_extensions (id, type, title, is_sys, is_virtual, basename, table_prefix, version, addtime, author, note) VALUES
    (0, 'module', 'about', 0, 0, 'Page', 'about', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (0, 'module', 'siteterms', 0, 0, 'Page', 'siteterms', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (19, 'module', 'banners', 1, 0, 'Banners', 'banners', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (20, 'module', 'contact', 0, 1, 'Contact', 'contact', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (1, 'module', 'news', 0, 1, 'News', 'news', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (21, 'module', 'voting', 0, 0, 'Voting', 'voting', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (284, 'module', 'seek', 1, 0, 'Seek', 'seek', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (24, 'module', 'users', 1, 1, 'Users', 'users', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (27, 'module', 'statistics', 0, 0, 'Statistics', 'statistics', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (29, 'module', 'menu', 0, 0, 'Menu', 'menu', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (283, 'module', 'feeds', 1, 0, 'Feeds', 'feeds', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (282, 'module', 'page', 1, 1, 'Page', 'page', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (281, 'module', 'comment', 1, 0, 'Comment', 'comment', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (312, 'module', 'freecontent', 0, 1, 'FreeContent', 'freecontent', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (327, 'module', 'two-step-verification', 1, 0, 'TwoStepVerification', 'two_step_verification', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (307, 'theme', 'default', 0, 0, 'default', 'default', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', ''),
    (311, 'theme', 'mobile_default', 0, 0, 'mobile_default', 'mobile_default', '4.3.02 1525251600', " . NV_CURRENTTIME . ", 'VINADES <contact@vinades.vn>', '')";

$sql_create_table[] = "INSERT INTO " . $db_config['prefix'] . "_banners_plans (id, blang, title, description, form, width, height, act, require_image, uploadtype) VALUES
    (1, '', 'Quang cao giua trang', '', 'sequential', 575, 72, 1, 1, 'images,flash'),
    (2, '', 'Quang cao trai', '', 'sequential', 212, 800, 1, 1, 'images,flash'),
    (3, '', 'Quang cao Phai', '', 'random', 250, 500, 1, 1, 'images,flash')";

$sql_create_table[] = "INSERT INTO " . $db_config['prefix'] . "_banners_rows (id, title, pid, clid, file_name, file_ext, file_mime, width, height, file_alt, imageforswf, click_url, target, bannerhtml, add_time, publ_time, exp_time, hits_total, act, weight) VALUES
    (2, 'vinades', 2, 1, 'vinades.jpg', 'jpg', 'image/jpeg', 212, 400, '', '', 'http://vinades.vn', '_blank', '', " . NV_CURRENTTIME . ", " . NV_CURRENTTIME . ", 0, 0, 1, 2),
    (3, 'Quang cao giua trang', 1, 1, 'webnhanh.jpg', 'png', 'image/jpeg', 575, 72, '', '', 'http://webnhanh.vn', '_blank', '', " . NV_CURRENTTIME . ", " . NV_CURRENTTIME . ", 0, 0, 1, 1)";

// FIXME ID 1001, 1002 dùng để dev giao diện admin_nv5, sau khi dev xong xóa đi
$sql_create_table[] = "INSERT INTO " . $db_config['prefix'] . "_plugin (pid, plugin_file, plugin_area, plugin_module_name, plugin_module_file, weight) VALUES
    (1, 'qrcode.php', 'get_qr_code', '', '', 1),
    (2, 'cdn_js_css_image.php', 'change_site_buffer', '', '', 1),
    (3, 'emf_active_via_email.php', 'get_email_merge_fields', 'users', 'Users', 1),
    (5, 'emf_author_delete.php', 'get_email_merge_fields', '', '', 2),
    (6, 'emf_author_suspend.php', 'get_email_merge_fields', '', '', 3),
    (7, 'emf_auto_error_report.php', 'get_email_merge_fields', '', '', 4),
    (8, 'emf_delete_user.php', 'get_email_merge_fields', 'users', 'Users', 5),
    (9, 'emf_new_2step_code.php', 'get_email_merge_fields', 'users', 'Users', 6),
    (10, 'emf_new_user_info.php', 'get_email_merge_fields', 'users', 'Users', 7),
    (11, 'emf_admin_add_user.php', 'get_email_merge_fields', 'users', 'Users', 8),
    (12, 'emf_user_safekey.php', 'get_email_merge_fields', 'users', 'Users', 9),
    (13, 'emf_user_self_edit.php', 'get_email_merge_fields', 'users', 'Users', 10),
    (14, 'emf_user_admin_edit.php', 'get_email_merge_fields', 'users', 'Users', 11),
    (15, 'emf_verify_email.php', 'get_email_merge_fields', 'users', 'Users', 12),
    (16, 'emf_group_join.php', 'get_email_merge_fields', 'users', 'Users', 13),
    (17, 'emf_lostactive_link.php', 'get_email_merge_fields', 'users', 'Users', 14),
    (18, 'emf_lostpass.php', 'get_email_merge_fields', 'users', 'Users', 15),
    (1001, 'get_global_admin_theme.php', 'get_global_admin_theme', '', '', 1),
    (1002, 'get_module_admin_theme.php', 'get_module_admin_theme', '', '', 1)";
