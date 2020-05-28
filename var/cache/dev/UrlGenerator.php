<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'list_tag_index' => [[], ['_controller' => 'App\\Controller\\ListTagController::index'], [], [['text', '/list-tag/']], [], []],
    'list_tag_show' => [['id'], ['_controller' => 'App\\Controller\\ListTagController::show'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id'], ['text', '/list-tag']], [], []],
    'to_do_index' => [[], ['_controller' => 'App\\Controller\\ToDoListController::index'], [], [['text', '/to-do/']], [], []],
    'to_do_show' => [['id'], ['_controller' => 'App\\Controller\\ToDoListController::show'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id'], ['text', '/to-do']], [], []],
    'to_do_edit' => [['id'], ['_controller' => 'App\\Controller\\ToDoListController::edit'], ['id' => '[1-9]\\d*'], [['variable', '-', '[1-9]\\d*', 'id'], ['text', '/to-do/edit']], [], []],
    'list_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\ToDoListController::delete'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id'], ['text', '/to-do/list-comment-delete']], [], []],
];
