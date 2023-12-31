<?php


namespace app\service\validate;

use think\Validate;

/**
 *  注册验证器.
 */
class Services extends Validate
{

    /**
     * 验证规则.
     * [$rule description]
     * @var [type]
     */
    protected $rule = [
        "user_name"  => "require|length:1,16|alphaNum",
        "password"  => "require|length:6,16",
        "password2" => "require|confirm:password",
        "nick_name"  => "length:2,20",
        "email"     => "email",

    ];

    /**
     * 验证失败信息.
     * [$message description]
     * @var array
     */
    protected $message = [
        "user_name.require"   => "请填写用户名称",
        "user_name.unique"    => "该用户名存在",
        "user_name.alphaNum"  => "用户名只能是字母和数字",
        "user_name.length"    => "用户名长度为1~16个字符",
        "nick_name.length"    => "昵称长度为2~20个字符",
        "password.requireIf" => "请填写登录密码",
        "password.length"    => "登录密码长度为6~16个字符",
        "password2.confirm"  => "密码不一致",
        "password2.require"  => "请再次输入密码",
        "email.email"        => "格式不符合要求",

    ];


    /**
     * 验证场景.
     * @access protected
     * @var array
     */
    protected $scene = [

    ];

}
