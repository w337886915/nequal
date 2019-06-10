<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 管理后台相关路由定义
|
*/

/*
 * -------------------------------------------------------------------------
 * 后台不需要需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['domain' => config('administrator.domain'), 'prefix' => config('administrator.uri'), 'namespace' => 'Administrator', 'middleware' => [], ], function () {

    # 登录
    Route::get('login', 'LoginController@showLoginForm')->name('administrator.login');
    Route::post('login', 'LoginController@login');

    # 退出
    Route::get('logout', 'LoginController@logout')->name('administrator.logout');

    # 无权限提示
    Route::get('permission-denied', 'WelcomeController@permissionDenied')->name('administrator.permission-denied');

});

/*
 * -------------------------------------------------------------------------
 * 后台需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['domain' => config('administrator.domain'), 'prefix' => config('administrator.uri'), 'namespace' => 'Administrator', 'middleware' => ['laracms.auth'], ], function () {

    # 首页
    Route::get('/', 'WelcomeController@dashboard')->name('administrator.dashboard');

    # 站点设置相关路由
    Route::get('site/basic','SiteController@basic')->name('administrator.site.basic');
    Route::post('site/basic','SiteController@basicStore');

    Route::get('site/company','SiteController@company')->name('administrator.site.company');
    Route::post('site/company','SiteController@companyStore');
//    Route::get('site/contact','SiteController@contact')->name('administrator.site.contact');
//    Route::post('site/contact','SiteController@contactStore');

    #关于我们的图文
    Route::get('site/company/about/create','SiteController@aboutCreate')->name('administrator.company.about.create');
    Route::post('site/company/about/store','SiteController@aboutStore')->name('administrator.company.about.store');
    Route::get('site/company/about/edit/{about}','SiteController@aboutEdit')->name('administrator.company.about.edit');
    Route::patch('site/company/about/update/{about}','SiteController@aboutUpdate')->name('administrator.company.about.update');
    Route::delete('site/company/about/destroy/{about}','SiteController@aboutDestroy')->name('administrator.company.about.destroy');


    # 公司荣誉
    Route::get('site/company/honor','HonorController@index')->name('administrator.company.honor');
    Route::get('site/company/honor/create','HonorController@create')->name('administrator.company.honor.create');
    Route::post('site/company/honor/store','HonorController@store')->name('administrator.company.honor.store');
    Route::get('site/company/honor/edit/{honor}','HonorController@edit')->name('administrator.company.honor.edit');
    Route::patch('site/company/honor/update/{honor}','HonorController@update')->name('administrator.company.honor.update');
    Route::delete('site/company/honor/destroy/{honor}','HonorController@destroy')->name('administrator.company.honor.destroy');

    # 联系我们
    Route::resource('contacts', 'ContactController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
    Route::resource('joins', 'JoinController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
    Route::put('joins.order', 'JoinController@order')->name('joins.order');
    Route::resource('teams', 'TeamController', ['only' => ['index', 'show','create', 'store', 'update', 'edit', 'destroy']]);
//    Route::get('teams/{group}/manage', 'TeamController@manage')->name('teams.manage');
//    Route::get('teams/{group}/create', 'TeamController@create')->name('teams.create');

    # 简历管理
    Route::resource('resumes', 'ResumeController', ['only' => ['index', 'show', 'destroy']]);


    # 用户相关路由
    Route::resource('user', 'UserController', ['only' => ['password', 'avatar', 'update', 'edit', 'destroy']]);
    Route::get('user/{user}/password', 'UserController@showPasswordForm')->name('administrator.password.edit');
    Route::put('user/password/{user}', 'UserController@passwordRequestForm')->name('administrator.password.update');
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
    Route::get('users/{user}/password', 'UsersController@showPasswordForm')->name('administrator.users.password.edit');
    Route::put('users/password/{user}', 'UsersController@passwordRequestForm')->name('administrator.users.password.update');

    # 角色相关路由
    Route::resource('roles', 'RolesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 权限相关路由
    Route::put('permissions/order','PermissionsController@order')->name('permissions.order');
    Route::resource('permissions', 'PermissionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 友情链接相关路由
    Route::resource('links', 'LinksController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 幻灯片相关路由
    Route::resource('slides', 'SlidesController', ['only' => ['index', 'show', 'store', 'update', 'edit', 'destroy']]);
    Route::get('slides/{group}/manage', 'SlidesController@manage')->name('slides.manage');
    Route::get('slides/{group}/create', 'SlidesController@create')->name('slides.create');

    # 分类相关路由
    Route::get('categorys/{type}','CategorysController@index')->name('administrator.category.index');
    Route::post('categorys/{type}','CategorysController@store')->name('administrator.category.store');
    Route::get('categorys/create/{type}/{parent}','CategorysController@create')->name('administrator.category.create');
    Route::get('categorys/{category}/{type}','CategorysController@show')->name('administrator.category.show');
    Route::get('categorys/{category}/edit/{type}','CategorysController@edit')->name('administrator.category.edit');
    Route::put('categorys/{type}/order','CategorysController@order')->name('administrator.category.order');
    Route::put('categorys/{category}/{type}','CategorysController@update')->name('administrator.category.update');

    Route::delete('categorys/{category}/{type}','CategorysController@destroy')->name('administrator.category.destroy');

    # 导航相关路由
    Route::get('navigations/{category}','NavigationsController@index')->name('administrator.navigation.index');
    Route::post('navigations/{category}','NavigationsController@store')->name('administrator.navigation.store');
    Route::get('navigations/create/{category}/{parent}','NavigationsController@create')->name('administrator.navigation.create');
    Route::get('navigations/{navigation}/{category}','NavigationsController@show')->name('administrator.navigation.show');
    Route::get('navigations/{navigation}/edit/{category}','NavigationsController@edit')->name('administrator.navigation.edit');
    Route::put('navigations/{category}/order','NavigationsController@order')->name('administrator.navigation.order');
    Route::put('navigations/{navigation}/{category}','NavigationsController@update')->name('administrator.navigation.update');
    Route::delete('navigations/{navigation}/{category}','NavigationsController@destroy')->name('administrator.navigation.destroy');

    # 单页面相关路由
    Route::resource('pages', 'PagesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 文章相关路由
    Route::put('articles/order','ArticlesController@order')->name('articles.order');
    Route::put('articles/destroy/all','ArticlesController@destroyAll')->name('articles.destroy.all');
    Route::get('articles/multiple/files/{article}/{field}','ArticlesController@multipleFiles')->name('articles.multiple.files');
    Route::put('articles/multiple/files/{article}/{field}','ArticlesController@multipleFilesOrder')->name('articles.multiple.files.order');
    Route::delete('articles/multiple/files/{article}/{field}/{multipleFile}','ArticlesController@multipleFilesDestroy')->name('articles.multiple.files.destroy');
    Route::post('articles/multiple/files/{article}/{field}','ArticlesController@multipleFilesStore');
    Route::resource('articles', 'ArticlesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 区块相关路由
    Route::resource('blocks', 'BlocksController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 微信公众号相关路由
    Route::put('wechats/order','WechatsController@order')->name('wechats.order');
    Route::get('wechats/{wechat}/integrate','WechatsController@integrate')->name('wechats.integrate');
    Route::resource('wechats', 'WechatsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

    # 微信菜单相关路由
    Route::get('wechat/menus/{wechat}','WechatMenusController@index')->name('wechat.menus.index');
    Route::post('wechat/menus/{wechat}','WechatMenusController@store')->name('wechat.menus.store');
    Route::get('wechat/menus/create/{wechat}/{parent}','WechatMenusController@create')->name('wechat.menus.create');
    Route::get('wechat/menus/{wechat_menu}/{wechat}','WechatMenusController@show')->name('wechat.menus.show');
    Route::get('wechat/menus/{wechat_menu}/edit/{wechat}','WechatMenusController@edit')->name('wechat.menus.edit');
    Route::put('wechat/menus/{wechat}/order','WechatMenusController@order')->name('wechat.menus.order');
    Route::put('wechat/menus/{wechat_menu}/{wechat}','WechatMenusController@update')->name('wechat.menus.update');
    Route::delete('wechat/menus/{wechat_menu}/{wechat}','WechatMenusController@destroy')->name('wechat.menus.destroy');
    Route::post('wechat/menus/sync/{wechat}','WechatMenusController@synchronizeWechatServer')->name('wechat.menus.sync');

    # 微信自定义响应相关路由
    Route::get('wechat/response/{wechat}','WechatResponseController@index')->name('wechat.response.index');
    Route::post('wechat/response/{wechat}','WechatResponseController@store')->name('wechat.response.store');
    Route::get('wechat/response/create/{wechat}/{parent}','WechatResponseController@create')->name('wechat.response.create');
    Route::get('wechat/response/{wechat_response}/{wechat}','WechatResponseController@show')->name('wechat.response.show');
    Route::get('wechat/response/{wechat_response}/edit/{wechat}','WechatResponseController@edit')->name('wechat.response.edit');
    Route::put('wechat/response/{wechat}/order','WechatResponseController@order')->name('wechat.response.order');
    Route::put('wechat/response/{wechat_response}/{wechat}','WechatResponseController@update')->name('wechat.response.update');
    Route::delete('wechat/response/{wechat_response}/{wechat}','WechatResponseController@destroy')->name('wechat.response.destroy');
    Route::get('wechat/response/set/response/{wechat}/{group}','WechatResponseController@setResponse')->name('wechat.response.set.response.create');
    Route::post('wechat/response/set/response/{wechat}/{group}','WechatResponseController@setResponseStore')->name('wechat.response.set.response.store');

    # Laravel 日志
    Route::get('log/laravel', 'LogViewerController@laravel')->name('log.laravel');

    # 任务日志
    Route::get('log/jobs', 'LogViewerController@jobs')->name('log.jobs');

    # 队列日志
    Route::get('log/queue', 'LogViewerController@queue')->name('log.queue');

    # 用户行为日志
    Route::get('log/behavior', 'LogViewerController@behavior')->name('log.behavior');

    # 业务日志
    Route::get('log/business', 'LogViewerController@business')->name('log.business');

    # 媒体库管理
    Route::get('media/image', 'MediaController@image')->name('media.image');
    Route::get('media/upload/image', 'MediaController@uploadImage')->name('media.upload.image');

    # 自定义表单
    Route::get('form/{type}', 'FormController@index')->name('form.index');
    Route::get('form/{form}/{type}', 'FormController@show')->name('form.show');
    Route::delete('form/{form}/{type}', 'FormController@destroy')->name('form.destroy');
    # 咨询申请
    Route::resource('consultations','ConsultationController');

    # 服务品牌相关路由
    Route::resource('brands', 'BrandsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
    # 解决方案路由
    Route::put('solutions/order','SolutionsController@order')->name('solutions.order');
    Route::resource('solutions', 'SolutionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

});

