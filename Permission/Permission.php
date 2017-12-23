<?php
/**
 * Created by PhpStorm.
 * User: zhangdeman
 * Date: 2017/12/23
 * Time: 16:49
 */
namespace Themis\Permission;

class Permission
{
    const PERMISSION_STATUS_NORMAL = 0; //权限状态-正常
    const PERMISSION_STATUS_DELETE = 1; //权限状态-删除

    const PERMISSION_IS_LEFT_YES = 0;   //是否侧边栏展示-是
    const PERMISSION_IS_LEFT_NO  = 1;   //是否侧边栏展示-否
}