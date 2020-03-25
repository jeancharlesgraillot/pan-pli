<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'account_login' => [[], ['_controller' => 'App\\Controller\\AccountController::login'], [], [['text', '/login']], [], []],
    'account_logout' => [[], ['_controller' => 'App\\Controller\\AccountController::logout'], [], [['text', '/logout']], [], []],
    'account_register' => [[], ['_controller' => 'App\\Controller\\AccountController::register'], [], [['text', '/register']], [], []],
    'account_profile' => [[], ['_controller' => 'App\\Controller\\AccountController::profile'], [], [['text', '/account/profile']], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountController::updatePassword'], [], [['text', '/account/password-update']], [], []],
    'admin_account_login' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::login'], [], [['text', '/admin/login']], [], []],
    'admin_account_logout' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::logout'], [], [['text', '/admin/logout']], [], []],
    'admin_articles_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminBlogController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/articles']], [], []],
    'admin_articles_create' => [[], ['_controller' => 'App\\Controller\\AdminBlogController::create'], [], [['text', '/admin/articles/new']], [], []],
    'admin_articles_edit' => [['slug'], ['_controller' => 'App\\Controller\\AdminBlogController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/admin/articles']], [], []],
    'admin_articles_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminBlogController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/articles']], [], []],
    'admin_categories_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminCategoryController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/categories']], [], []],
    'admin_categories_create' => [[], ['_controller' => 'App\\Controller\\AdminCategoryController::create'], [], [['text', '/admin/categories/new']], [], []],
    'admin_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], []],
    'admin_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminCategoryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], []],
    'admin_comments_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/comments']], [], []],
    'admin_comments_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
    'admin_comments_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin']], [], []],
    'admin_products_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminProductController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/products']], [], []],
    'admin_products_create' => [[], ['_controller' => 'App\\Controller\\AdminProductController::create'], [], [['text', '/admin/products/new']], [], []],
    'admin_products_edit' => [['slug'], ['_controller' => 'App\\Controller\\AdminProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/admin/products']], [], []],
    'admin_products_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminProductController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/products']], [], []],
    'admin_roles_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminRoleController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/roles']], [], []],
    'admin_roles_create' => [[], ['_controller' => 'App\\Controller\\AdminRoleController::create'], [], [['text', '/admin/roles/new']], [], []],
    'admin_roles_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminRoleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/roles']], [], []],
    'admin_roles_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminRoleController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/roles']], [], []],
    'admin_users_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/users']], [], []],
    'admin_users_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::attribute'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], []],
    'admin_users_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], []],
    'blog_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\BlogController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/blog']], [], []],
    'articles_show' => [['slug'], ['_controller' => 'App\\Controller\\BlogController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/blog']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
    'legal_notice' => [[], ['_controller' => 'App\\Controller\\HomeController::legalNotice'], [], [['text', '/legal']], [], []],
    'products_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/products']], [], []],
    'products_show' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/products']], [], []],
    'project_index' => [[], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/project']], [], []],
    'spiruline_index' => [[], ['_controller' => 'App\\Controller\\SpirulineController::index'], [], [['text', '/spiruline']], [], []],
];
