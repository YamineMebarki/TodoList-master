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
        '/' => [[['_route' => '_accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/parametres' => [[['_route' => '_parameters', '_controller' => 'App\\Controller\\ParameterController::index'], null, ['GET' => 0], null, false, false, null]],
        '/projets' => [[['_route' => '_projects', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, false, false, null]],
        '/enonce' => [[['_route' => '_statement', '_controller' => 'App\\Controller\\StatementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tâches' => [[['_route' => '_taches', '_controller' => 'App\\Controller\\TachesController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/projet/(?'
                    .'|(\\d+)/edition(*:193)'
                    .'|(\\d+)/suppression(*:218)'
                    .'|([^/]++)/suppression(*:246)'
                .')'
                .'|/taches/(?'
                    .'|(\\d+)/edition(*:279)'
                    .'|([^/]++)/suppression(*:307)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => '_project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['idProject'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, false, null]],
        218 => [[['_route' => '_project_remove', '_controller' => 'App\\Controller\\ProjectController::remove'], ['idProject'], ['DELETE' => 0], null, false, false, null]],
        246 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\ProjectController::removeProjectStains'], ['id'], null, null, false, false, null]],
        279 => [[['_route' => '_stains_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['idStains'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, false, null]],
        307 => [
            [['_route' => '_taches_remove', '_controller' => 'App\\Controller\\TachesController::remove'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
