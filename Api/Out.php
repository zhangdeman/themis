<?php
/**
 * Created by PhpStorm.
 * User: zhangdeman
 * Date: 2017/11/24
 * Time: 23:09
 */
namespace Themis\Api;
class Out
{
    const ERROR_PARAMS_ERROR = 101; //参数错误
    const ERROR_GET_ID_FAIL = 102; //获取ID信息失败
    const ERROR_EXCEPTION_TOKEN = 103;  //token校验失败

    const ERROR_DIFF_PASSWORD = 201; //两次密码不一致
    const ERROR_NIL_ACCOUNT =   202;    //用户不存在
    const ERROR_ADMIN_ACCOUNT_EXCEPTION = 203; //账户异常
    const ERROR_ADMIN_ACCOUNT_NO_MATCH = 204; //账号或密码异常

    const ERROR_ADD_ARTICLE_KIND_FIAL = 210;

    public static $ERROR_MSG_MAP = array(
        self::ERROR_PARAMS_ERROR => '参数错误',
        self::ERROR_GET_ID_FAIL =>  '获取ID信息失败',
        self::ERROR_EXCEPTION_TOKEN =>  'token校验失败',
        self::ERROR_DIFF_PASSWORD => '两次密码不一致',
        self::ERROR_NIL_ACCOUNT =>  '用户不存在',
        self::ERROR_ADMIN_ACCOUNT_EXCEPTION =>  '账号异常',
        self::ERROR_ADMIN_ACCOUNT_NO_MATCH  =>  '账号或密码错误',
        self::ERROR_ADD_ARTICLE_KIND_FIAL   =>  '文章类别添加失败',
    );

    /**
     * 获取错误码对应的错误信息
     * @param $errorCode
     * @return mixed|string
     */
    public static function getErrorMsg($errorCode)
    {
        return isset(self::$ERROR_MSG_MAP[$errorCode]) ? self::$ERROR_MSG_MAP[$errorCode] : '';
    }
}