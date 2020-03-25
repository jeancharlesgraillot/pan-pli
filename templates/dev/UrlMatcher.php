<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account/profile' => [[['_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'], null, null, null, false, false, null]],
        '/account/password-update' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/admin/articles/new' => [[['_route' => 'admin_articles_create', '_controller' => 'App\\Controller\\AdminBlogController::create'], null, null, null, false, false, null]],
        '/admin/categories/new' => [[['_route' => 'admin_categories_create', '_controller' => 'App\\Controller\\AdminCategoryController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/products/new' => [[['_route' => 'admin_products_create', '_controller' => 'App\\Controller\\AdminProductController::create'], null, null, null, false, false, null]],
        '/admin/roles/new' => [[['_route' => 'admin_roles_create', '_controller' => 'App\\Controller\\AdminRoleController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/legal' => [[['_route' => 'legal_notice', '_controller' => 'App\\Controller\\HomeController::legalNotice'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, null, null, false, false, null]],
        '/spiruline' => [[['_route' => 'spiruline_index', '_controller' => 'App\\Controller\\SpirulineController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|articles(?'
                        .'|(?:/(\\d+))?(*:201)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:226)'
                            .'|delete(*:240)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|ategories(?'
                            .'|(?:/(\\d+))?(*:277)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:302)'
                                .'|delete(*:316)'
                            .')'
                        .')'
                        .'|omments(?'
                            .'|(?:/(\\d+))?(*:347)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:372)'
                                .'|delete(*:386)'
                            .')'
                        .')'
                    .')'
                    .'|products(?'
                        .'|(?:/(\\d+))?(*:419)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:444)'
                            .'|delete(*:458)'
                        .')'
                    .')'
                    .'|roles(?'
                        .'|(?:/(\\d+))?(*:487)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:512)'
                            .'|delete(*:526)'
                        .')'
                    .')'
                    .'|users(?'
                        .'|(?:/(\\d+))?(*:555)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:580)'
                            .'|delete(*:594)'
                        .')'
                    .')'
                .')'
                .'|/blog(?'
                    .'|(?:/(\\d+))?(*:624)'
                    .'|/([^/]++)(*:641)'
                .')'
                .'|/products/([^/]++)(*:668)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'admin_articles_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminBlogController::index'], ['page'], null, null, false, true, null]],
        226 => [[['_route' => 'admin_articles_edit', '_controller' => 'App\\Controller\\AdminBlogController::edit'], ['slug'], null, null, false, false, null]],
        240 => [[['_route' => 'admin_articles_delete', '_controller' => 'App\\Controller\\AdminBlogController::delete'], ['id'], null, null, false, false, null]],
        277 => [[['_route' => 'admin_categories_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminCategoryController::index'], ['page'], null, null, false, true, null]],
        302 => [[['_route' => 'admin_categories_edit', '_controller' => 'App\\Controller\\AdminCategoryController::edit'], ['id'], null, null, false, false, null]],
        316 => [[['_route' => 'admin_categories_delete', '_controller' => 'App\\Controller\\AdminCategoryController::delete'], ['id'], null, null, false, false, null]],
        347 => [[['_route' => 'admin_comments_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
        372 => [[['_route' => 'admin_comments_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        386 => [[['_route' => 'admin_comments_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        419 => [[['_route' => 'admin_products_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminProductController::index'], ['page'], null, null, false, true, null]],
        444 => [[['_route' => 'admin_products_edit', '_controller' => 'App\\Controller\\AdminProductController::edit'], ['slug'], null, null, false, false, null]],
        458 => [[['_route' => 'admin_products_delete', '_controller' => 'App\\Controller\\AdminProductController::delete'], ['id'], null, null, false, false, null]],
        487 => [[['_route' => 'admin_roles_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminRoleController::index'], ['page'], null, null, false, true, null]],
        512 => [[['_route' => 'admin_roles_edit', '_controller' => 'App\\Controller\\AdminRoleController::edit'], ['id'], null, null, false, false, null]],
        526 => [[['_route' => 'admin_roles_delete', '_controller' => 'App\\Controller\\AdminRoleController::delete'], ['id'], null, null, false, false, null]],
        555 => [[['_route' => 'admin_users_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page'], null, null, false, true, null]],
        580 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminUserController::attribute'], ['id'], null, null, false, false, null]],
        594 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        624 => [[['_route' => 'blog_index', 'page' => 1, '_controller' => 'App\\Controller\\BlogController::index'], ['page'], null, null, false, true, null]],
        641 => [[['_route' => 'articles_show', '_controller' => 'App\\Controller\\BlogController::show'], ['slug'], null, null, false, true, null]],
        668 => [
            [['_route' => 'products_show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
