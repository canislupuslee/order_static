<?php



return [
    // 默认语言
    'default_lang'=>'en-us',
    // 开启语言切换
    'lang_switch_on' => false,
    //语言列表
    'lang_list' => ['vi-vn'],

    // 应用调试模式

    'app_debug'                 => true,

    // 应用Trace调试

    'app_trace'                 => false,

    // 0按名称成对解析 1按顺序解析

    'url_param_type'            => 1,

    // 当前 ThinkAdmin 版本号

    'thinkadmin_ver'            => 'v5',


    'empty_controller'          => 'Error',



    'pwd_str'                   => '!qws6F!xffD2vx80?95jt',  //盐



    'pwd_error_num'             => 10,    //密码连续错误次数



    'allow_login_min'           => 5,     //密码连续错误达到次数后的冷却时间，分钟



    'default_filter'            => 'trim',

// 开启语言切换
    //'lang_switch_on' => true,
    //  //开启多语言
    // 'default_lang'=>'en-us',

    //'lang_list' => ['zh-cn','en-ww'],

    'default_timezone'=>'Asia/Kolkata', // 设置时区


    'zhangjun_sms' => [

        'userid'        => '????',

        'account'       => '?????',

        'pwd'           => '????',

        'content'       => '【????】您的验证码为：',

        'min'           => 5,  //短信有效时间，分钟

    ],

    // 短信相关

    'duanxin' => [
        'duanxin_status'=>'2',
        'duanxin_type'=>'1',
    ],
    // 短信宝
    'smsbao' => [
        'user'=>'xiaoc', //账号  无需md5
        'pass'=>'qwe12', //密码
        'sign'=>'Leea', //签名
    ],
    'aliyun' => [
        'aliyun_access'=>'111',
        'aliyun_key'=>'222',
        'aliyun_sign'=>'亚马逊',
        'aliyun_template'=>'444',
    ],
    'yunzhixun' => [
        'yunzhixun_sid'=>'b9255c845de8f653',
        'yunzhixun_token'=>'67d36e6feb',
        'yunzhixun_appid'=>'3f1851bb8361409e922d3b6',
        'yunzhixun_templateid'=>'573508',
    ],

    // 提现 1 银行卡 2 支付宝
    'tixian_type'=>'1',

    'chongzhi_type'=>'1',//1是sepro 2是其他
    //bi支付

    'bipay' => [

        'appKey' => '2ed2c4347fa70847',          //bi支付 商户appkey

        'appSecret' => 'b471e157a6bcafea74360dbc0b7ba523', //密钥

    ],

    //paysapi支付

    'paysapi' => [

        'uid'    => '362c5d32770407de2f009c54',          //bi支付 商户appkey

        'token'  => 'bedfd347390e127bd675c18dc92dfa16', //密钥

        'istype' => 1, //默认支付方式  1 支付宝  2 微信  3 比特币

    ],



    'app_only' => 0,            //只允许app访问

    'vip_sj_bu'=> 1,            //vip升级 是否补交

    'app_url'=>'/index/down',          //app下载地址

    'version'=>'20100106',  //版本号





    'verify'    => true,

    'mix_time'=>'5',                    //匹配订单最小延迟

    'max_time'=>'10',                   //匹配订单最大延迟

    'min_recharge'=>'100',              //最小充值金额

    'max_recharge'=>'5000',             //最大充值金额

    'deal_min_balance'=>'0',          //交易所需最小余额

    'deal_min_num'=>'63',               //匹配区间

    'deal_max_num'=>'89',               //匹配区间

    'deal_count'=>'60',                 //当日交易次数限制

    'popups_time'=>'20',               // 抢单弹窗时间

    'deal_reward_count'=>'0',          //推荐新用户获得额外的交易次数

    'deal_timeout'=>'60',              //订单超时时间

    'deal_feedze'=>'1',              //交易冻结时长

    'deal_error'=>'2',                  //允许违规操作次数

    'vip_1_commission'=>'0',          //交易佣金

    'min_deposit'=>'100',               //最低提现额度

    '1_reward'=>'0',                  //直推上级推荐奖励

    '2_reward'=>'0',                 //上两级推荐奖励

    '3_reward'=>'0',                 //上三级推荐奖励

    '1_d_reward'=>'0.16',               //上级会员获得交易奖励

    '2_d_reward'=>'0.08',               //上二级会员获得交易奖励

    '3_d_reward'=>'0.04',               //上三级会员获得交易奖励

    '4_d_reward'=>'0',               //上四级会员获得交易奖励

    '5_d_reward'=>'0',                  //上五级会员获得交易奖励

    'master_cardnum'=>'',             //银行卡号

    'master_name'=>'',                              //收款人

    'master_bank'=>'',                          //所属银行

    'master_bk_address'=>'',         //银行地址

    'deal_zhuji_time'=>'1',         //远程主机分配时间

    'deal_shop_time'=>'1',          //等待商家响应时间

    'tixian_time_1'=>'0',           //提现开始时间

    'tixian_time_2'=>'24',          //提现结束时间



    'chongzhi_time_1'=>'0',           //充值开始时间

    'chongzhi_time_2'=>'24',          //充值结束时间





    'order_time_1'=>'0',           //抢单结束时间

    'order_time_2'=>'24',          //抢单结束时间


    // 切换新旧vip页面
    'is_new_vip' => false,


    'rechargeReturnSw'=>'2',          // 充值超时退回开关（1:开启, 2:关闭）
    'rechargeReturnTi'=>'24',          // 充值超时时间（小时）

    'rechargeReturnSw'=>'2',          // 充值超时退回开关
    'rechargeReturnTi'=>'24',          // 充值超时时间（小时）
    'appDownSwitch'=>'0',           //appDown按钮开关 1 开启 0 关闭

    //利息宝
    'lxb_bili_status'=>'1',      //利息宝 开关 1 开启 0 关闭
    'lxbOrderCancelSwitch'=>'1',      //利息宝订单取消 开关 1 开启 0 关闭

    'lxb_bili'=>'0.005',         //利息宝 日利率

    'lxb_time'=>'0',             //利息宝 转出到余额  实际 /小时

    'lxb_sy_bili1'=>'0',         //利息宝 上一级会员收益比例

    'lxb_sy_bili2'=>'0',         //利息宝 上一级会员收益比例

    'lxb_sy_bili3'=>'0',         //利息宝 上一级会员收益比例

    'lxb_sy_bili4'=>'0',         //利息宝 上一级会员收益比例

    'lxb_sy_bili5'=>'0',         //利息宝 上一级会员收益比例

    'lxb_ru_max'=>'99999999',         //利息宝 转入最大金额

    'lxb_ru_min'=>'500',         //利息宝 转入最低金额

    'ios_download' => 'itms-services://?action=download-manifest&url=https://cpvip.oss-cn-hongkong.aliyuncs.com/ios/shop/shop.plist',

    'an_download' => 'https://cpvip.oss-cn-hongkong.aliyuncs.com/android/shop/app-shop-release.apk',

    'is_download'=>'1',


    'is_invite' => true,
    'is_style' => 'hwork',
    'is_order_style' => 'hwork',
    'is_ifsc' => false,
    'is_bank_name' => true,
    'is_header_icon' => true, // true为新的图标  flase为老的图标
    'is_new_order_html' => true, // true为新的订单详情和订单列表
    'country_code'=>'[{"id": "91","name": "INDIA"},{"id": "63","name": "PHILIPPINES"}]',         //国家区号配置

    'ip_number_for_register'=>'0',    // IP注册限制个数

    'shop_status'=>'1',         //商城状态',
    'tankuang_status'=>'1',         //首页弹框',
    // 动态颜色风格变换
    // '/theme/颜色/' 为本地保底图片文件夹 https://cdn.jsdelivr.net/gh/canislupuslee/平台名/颜色/ 为外部CDN
    // default 为默认颜色(绿) red 为红色版
    'color_style' => "https://cdn.jsdelivr.net/gh/canislupuslee/order_static/theme/default/",
    // 动态logo
    // '/theme/red/logo' 为本地保底logo文件夹 https://cdn.jsdelivr.net/gh/canislupuslee/order_static/平台名/ 为外部CDN
    'color_style_logo' => "https://cdn.jsdelivr.net/gh/canislupuslee/order_static/test/",
    'cache' => [
        'type'  =>  'complex',
        'default'    =>    [
            // 驱动方式
            'type' => 'File',
            // 缓存保存目录
            'path' => env('runtime_path')  . DIRECTORY_SEPARATOR,
            // 缓存前缀
            'prefix' => 'global::',
            // 缓存有效期 0表示永久缓存
            'expire' => 0,
        ],
        'redis' =>[
            'type'    =>    'redis',
            'host'    =>    '127.0.0.1',
            'port' => 6379,
            'password' => '',
            // 全局缓存有效期（0为永久有效）
            'expire'=>  0,
            // 缓存前缀
            'prefix'=>  'global::',
            'timeout'=> 3600,
            'select'=>3
        ]
    ]
];


