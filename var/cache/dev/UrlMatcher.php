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
        '/article/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::home'], null, null, null, false, false, null]],
        '/article/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\ArticleController::homef'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, true, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, null, null, false, false, null]],
        '/coach' => [[['_route' => 'coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, false, false, null]],
        '/coach/new' => [[['_route' => 'coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire/index' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/new' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entrainement' => [[['_route' => 'entrainement_index', '_controller' => 'App\\Controller\\EntrainementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entrainement/new' => [[['_route' => 'entrainement_new', '_controller' => 'App\\Controller\\EntrainementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entrainement/e/search_entrainement' => [[['_route' => 'search_entrainement', '_controller' => 'App\\Controller\\EntrainementController::search_produit'], null, ['GET' => 0], null, false, false, null]],
        '/entrainement/e/statyoussef' => [[['_route' => 'statyoussef', '_controller' => 'App\\Controller\\EntrainementController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/new' => [[['_route' => 'equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur_index', '_controller' => 'App\\Controller\\JoueurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/pdfyasmine' => [[['_route' => 'pdfyasmine', '_controller' => 'App\\Controller\\JoueurController::pdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/new' => [[['_route' => 'joueur_new', '_controller' => 'App\\Controller\\JoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/j/search_joueur' => [[['_route' => 'search_joueure', '_controller' => 'App\\Controller\\JoueurController::search_produit'], null, ['GET' => 0], null, false, false, null]],
        '/rate' => [[['_route' => 'rate_index', '_controller' => 'App\\Controller\\RateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rate/new' => [[['_route' => 'rate_new', '_controller' => 'App\\Controller\\RateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rate/r/rate_stat' => [[['_route' => 'rate_stat', '_controller' => 'App\\Controller\\RateController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/r/search_rec' => [[['_route' => 'search_rec', '_controller' => 'App\\Controller\\ReclamationController::search_rec'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/r/reclamation_stat' => [[['_route' => 'reclamation_stat', '_controller' => 'App\\Controller\\ReclamationController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/pdf/reclam.pdf' => [[['_route' => 'pdf_index', '_controller' => 'App\\Controller\\ReclamationController::pdfReclamation'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/excel/export' => [[['_route' => 'export', '_controller' => 'App\\Controller\\ReclamationController::export'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template', '_controller' => 'App\\Controller\\TemplateController::indexAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/templatefront' => [[['_route' => 'templatefront', '_controller' => 'App\\Controller\\TemplateController::index2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\TemplateController::index3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/template/Match' => [[['_route' => 'template_match', '_controller' => 'App\\Controller\\TemplateController::match'], null, null, null, false, false, null]],
        '/template/Stade' => [[['_route' => 'template_stade', '_controller' => 'App\\Controller\\TemplateController::stade'], null, null, null, false, false, null]],
        '/template/AddMatch' => [[['_route' => 'addMatch', '_controller' => 'App\\Controller\\TemplateController::AddMatch'], null, null, null, false, false, null]],
        '/template/AddStade' => [[['_route' => 'addStade', '_controller' => 'App\\Controller\\TemplateController::AddStade'], null, null, null, false, false, null]],
        '/template/updateStade' => [[['_route' => 'updateStade', '_controller' => 'App\\Controller\\TemplateController::updateStade'], null, null, null, false, false, null]],
        '/template/updateMatch' => [[['_route' => 'updateMatch', '_controller' => 'App\\Controller\\TemplateController::updateMatch'], null, null, null, false, false, null]],
        '/templatefront1' => [[['_route' => 'templatefront1', '_controller' => 'App\\Controller\\TemplateController::home1'], null, null, null, false, false, null]],
        '/templatefrontcontactus' => [[['_route' => 'templatefrontcontactus', '_controller' => 'App\\Controller\\TemplateController::contactus'], null, null, null, false, false, null]],
        '/templatefrontprosoccermedia1' => [[['_route' => 'templatefrontprosoccermedia1', '_controller' => 'App\\Controller\\TemplateController::prosoccer1'], null, null, null, false, false, null]],
        '/templatefrontprosoccermedia2' => [[['_route' => 'templatefrontprosoccermedia2', '_controller' => 'App\\Controller\\TemplateController::prosoccer2'], null, null, null, false, false, null]],
        '/templatefrontequipe' => [[['_route' => 'templatefrontequipe', '_controller' => 'App\\Controller\\TemplateController::equipe'], null, null, null, false, false, null]],
        '/templatefrontcoachs' => [[['_route' => 'templatefrontcoach', '_controller' => 'App\\Controller\\TemplateController::coachs'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/templatefront2' => [[['_route' => 'templatefront2', '_controller' => 'App\\Controller\\TemplateController::team'], null, null, null, false, false, null]],
        '/templatefrontmatchresult' => [[['_route' => 'templatefrontmatchresult', '_controller' => 'App\\Controller\\TemplateController::matchresult'], null, null, null, false, false, null]],
        '/templatefrontmatchresultdetails' => [[['_route' => 'templatefrontmatchresultdetails', '_controller' => 'App\\Controller\\TemplateController::matchresultdetails'], null, null, null, false, false, null]],
        '/templatefrontarticles' => [[['_route' => 'templatefrontarticles', '_controller' => 'App\\Controller\\TemplateController::articles'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/article/(?'
                    .'|([^/]++)(?'
                        .'|(*:192)'
                        .'|/(?'
                            .'|edit(*:208)'
                            .'|deleteArticle(*:229)'
                        .')'
                    .')'
                    .'|article/front/([^/]++)(*:261)'
                .')'
                .'|/co(?'
                    .'|ach/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:299)'
                            .'|(*:307)'
                        .')'
                        .'|pdf(*:319)'
                    .')'
                    .'|mmentaire/([^/]++)(?'
                        .'|(*:349)'
                        .'|/edit(*:362)'
                        .'|(*:370)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ntrainement/([^/]++)(?'
                        .'|(*:408)'
                        .'|/edit(*:421)'
                        .'|(*:429)'
                    .')'
                    .'|quipe/([^/]++)(?'
                        .'|(*:455)'
                        .'|/edit(*:468)'
                        .'|(*:476)'
                    .')'
                .')'
                .'|/joueur/([^/]++)(?'
                    .'|(*:505)'
                    .'|/edit(*:518)'
                    .'|(*:526)'
                .')'
                .'|/r(?'
                    .'|ate/([^/]++)(?'
                        .'|(*:555)'
                        .'|/edit(*:568)'
                        .'|(*:576)'
                    .')'
                    .'|eclamation/([^/]++)(?'
                        .'|(*:607)'
                        .'|/edit(*:620)'
                        .'|(*:628)'
                    .')'
                .')'
                .'|/([^/]++)/templatefront(?'
                    .'|joueur(?'
                        .'|junior(*:679)'
                        .'|sunior(*:693)'
                    .')'
                    .'|detailsjoueur(*:715)'
                .')'
                .'|/qr\\-code/([^/]++)/([^/]++)(*:751)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        229 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        261 => [[['_route' => 'article_front', '_controller' => 'App\\Controller\\ArticleController::show2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['idCoach'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['idCoach'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => 'pdf0', '_controller' => 'App\\Controller\\CoachController::pdf'], [], null, null, false, false, null]],
        349 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        408 => [[['_route' => 'entrainement_show', '_controller' => 'App\\Controller\\EntrainementController::show'], ['idEntrainement'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'entrainement_edit', '_controller' => 'App\\Controller\\EntrainementController::edit'], ['idEntrainement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'entrainement_delete', '_controller' => 'App\\Controller\\EntrainementController::delete'], ['idEntrainement'], ['POST' => 0], null, false, true, null]],
        455 => [[['_route' => 'equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['idE'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['idE'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [[['_route' => 'equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['idE'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['idJoueur'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['idJoueur'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        526 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['idJoueur'], ['POST' => 0], null, false, true, null]],
        555 => [[['_route' => 'rate_show', '_controller' => 'App\\Controller\\RateController::show'], ['idrate'], ['GET' => 0], null, false, true, null]],
        568 => [[['_route' => 'rate_edit', '_controller' => 'App\\Controller\\RateController::edit'], ['idrate'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'rate_delete', '_controller' => 'App\\Controller\\RateController::delete'], ['idrate'], ['POST' => 0], null, false, true, null]],
        607 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idrec'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idrec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        628 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idrec'], ['POST' => 0], null, false, true, null]],
        679 => [[['_route' => 'templatefrontjoueurjunior', '_controller' => 'App\\Controller\\TemplateController::joueurjunior'], ['idEquipe'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        693 => [[['_route' => 'templatefrontjoueursunior', '_controller' => 'App\\Controller\\TemplateController::joueursunior'], ['idEquipe'], null, null, false, false, null]],
        715 => [[['_route' => 'templatefrontdetailsjoueur', '_controller' => 'App\\Controller\\TemplateController::detailjunior'], ['idJoueur'], null, null, false, false, null]],
        751 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
