<?php
namespace Hook\Sql\Hook;

class Hook
{
    const GET_ALL = 'SELECT a.`id`,a.`status`,a.`position`,a.`date_add`,a.`date_upd`,a.`key`,b.`title`,b.`description` FROM `hp_'.APP_NAME.'_hook_hook` a LEFT JOIN `hp_'.APP_NAME.'_hook_hook_lang` b ON a.`id`=b.`hook_id` WHERE b.`lang_id`=?';
    const GET_SHOW_SELECT = 'SELECT a.`id`,b.`title` FROM `hp_'.APP_NAME.'_hook_hook` a LEFT JOIN `hp_'.APP_NAME.'_hook_hook_lang` b ON a.`id`=b.`hook_id` WHERE a.`status`=1 AND b.`lang_id`=?';
}