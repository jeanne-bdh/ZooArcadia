<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/animal' => [[['_route' => 'admin_animal_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/animal/new' => [[['_route' => 'admin_animal_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/animal/batch-delete' => [[['_route' => 'admin_animal_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/animal/autocomplete' => [[['_route' => 'admin_animal_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/animal/render-filters' => [[['_route' => 'admin_animal_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/consultation' => [[['_route' => 'admin_consultation_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/consultation/new' => [[['_route' => 'admin_consultation_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/consultation/batch-delete' => [[['_route' => 'admin_consultation_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/consultation/autocomplete' => [[['_route' => 'admin_consultation_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/consultation/render-filters' => [[['_route' => 'admin_consultation_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/habitat' => [[['_route' => 'admin_habitat_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/habitat/new' => [[['_route' => 'admin_habitat_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/habitat/batch-delete' => [[['_route' => 'admin_habitat_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/habitat/autocomplete' => [[['_route' => 'admin_habitat_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/habitat/render-filters' => [[['_route' => 'admin_habitat_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/opening-hours' => [[['_route' => 'admin_opening_hours_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/opening-hours/new' => [[['_route' => 'admin_opening_hours_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/opening-hours/batch-delete' => [[['_route' => 'admin_opening_hours_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/opening-hours/autocomplete' => [[['_route' => 'admin_opening_hours_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/opening-hours/render-filters' => [[['_route' => 'admin_opening_hours_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service' => [[['_route' => 'admin_service_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service/new' => [[['_route' => 'admin_service_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/service/batch-delete' => [[['_route' => 'admin_service_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/service/autocomplete' => [[['_route' => 'admin_service_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service/render-filters' => [[['_route' => 'admin_service_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/veterinaryReportConsult' => [[['_route' => 'app_veterinary_report_consult', '_controller' => 'App\\Controller\\Admin\\VeterinaryReportConsultController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/animalFood' => [[['_route' => 'app_animal_food', '_controller' => 'App\\Controller\\Employee\\AnimalFoodController::index'], null, null, null, false, false, null]],
        '/employee' => [[['_route' => 'app_employee', '_controller' => 'App\\Controller\\Employee\\EmployeeController::index'], null, null, null, false, false, null]],
        '/reviewValidation' => [[['_route' => 'app_review_validation', '_controller' => 'App\\Controller\\Employee\\ReviewValidationController::index'], null, null, null, false, false, null]],
        '/habitat' => [[['_route' => 'app_habitat', '_controller' => 'App\\Controller\\HabitatController::index'], null, null, null, false, false, null]],
        '/openingHours' => [[['_route' => 'app_opening_hours', '_controller' => 'App\\Controller\\OpeningHoursController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'app_review', '_controller' => 'App\\Controller\\ReviewController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/foodConsult' => [[['_route' => 'app_food_consult', '_controller' => 'App\\Controller\\Veterinary\\FoodConsultController::index'], null, null, null, false, false, null]],
        '/veterinary' => [[['_route' => 'app_veterinary', '_controller' => 'App\\Controller\\Veterinary\\VeterinaryController::index'], null, null, null, false, false, null]],
        '/veterinaryReport' => [[['_route' => 'app_veterinary_report', '_controller' => 'App\\Controller\\Veterinary\\VeterinaryReportController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|animal/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:46)'
                                .'|delete(*:59)'
                            .')'
                            .'|(*:67)'
                        .')'
                        .'|consultation/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:107)'
                                .'|delete(*:121)'
                            .')'
                            .'|(*:130)'
                        .')'
                        .'|habitat/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:166)'
                                .'|delete(*:180)'
                            .')'
                            .'|(*:189)'
                        .')'
                        .'|opening\\-hours/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:232)'
                                .'|delete(*:246)'
                            .')'
                            .'|(*:255)'
                        .')'
                        .'|service/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:291)'
                                .'|delete(*:305)'
                            .')'
                            .'|(*:314)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:347)'
                                .'|delete(*:361)'
                            .')'
                            .'|(*:370)'
                        .')'
                    .')'
                    .'|nimal(?'
                        .'|/([^/]++)(*:397)'
                        .'|sByBreed/([^/]++)(*:422)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:463)'
                    .'|wdt/([^/]++)(*:483)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:525)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:562)'
                                .'|router(*:576)'
                                .'|exception(?'
                                    .'|(*:596)'
                                    .'|\\.css(*:609)'
                                .')'
                            .')'
                            .'|(*:619)'
                        .')'
                    .')'
                .')'
                .'|/habitatDetails/([^/]++)(*:654)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'admin_animal_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        59 => [[['_route' => 'admin_animal_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        67 => [[['_route' => 'admin_animal_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        107 => [[['_route' => 'admin_consultation_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        121 => [[['_route' => 'admin_consultation_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        130 => [[['_route' => 'admin_consultation_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ConsultationCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ConsultationCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'admin_habitat_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        180 => [[['_route' => 'admin_habitat_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        189 => [[['_route' => 'admin_habitat_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\HabitatCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\HabitatCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'admin_opening_hours_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        246 => [[['_route' => 'admin_opening_hours_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        255 => [[['_route' => 'admin_opening_hours_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\OpeningHoursCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OpeningHoursCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        291 => [[['_route' => 'admin_service_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        305 => [[['_route' => 'admin_service_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        314 => [[['_route' => 'admin_service_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ServiceCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServiceCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        347 => [[['_route' => 'admin_user_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        361 => [[['_route' => 'admin_user_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        370 => [[['_route' => 'admin_user_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'app_animal', '_controller' => 'App\\Controller\\AnimalController::index'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'animals_by_breed', '_controller' => 'App\\Controller\\Employee\\AnimalFoodController::animalsByBreed'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        483 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        525 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        562 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        576 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        596 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        609 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        619 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        654 => [
            [['_route' => 'app_habitat_details', '_controller' => 'App\\Controller\\HabitatController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
