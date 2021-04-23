<?php

use App\Controller\VehicleController;
use App\Controller\JobsController;
use App\Controller\DashboardController;
use App\Controller\AuthenticationController;
use App\Controller\UserController;

function creatRoute(string $controllerName, string $actionName): array
{
    return [
        'Controller' => $controllerName,
        'action' => $actionName,
    ];
}

return [
    '/' => creatRoute(DashboardController::class, 'dashboardAction'),
    '/dashboard' => creatRoute(DashboardController::class, 'dashboardAction'),

    '/veiculos/listar' => creatRoute(VehicleController::class, 'listAction'),
    '/veiculos/adicionar' => creatRoute(VehicleController::class, 'addAction'),
    '/veiculos/excluir' => creatRoute(VehicleController::class, 'removeAction'),
    '/veiculos/editar' => creatRoute(VehicleController::class, 'editAction'),

    '/vagas/listar' => creatRoute(JobsController::class, 'listAction'),
    '/vagas/detalhes' => creatRoute(JobsController::class, 'detailsAction'),
    '/vagas/editar' => creatRoute(JobsController::class, 'editAction'),
    '/vagas/adicionar' => creatRoute(JobsController::class, 'addAction'),
    '/vagas/excluir' => creatRoute(JobsController::class, 'removeAction'),

    '/usuario/adicionar'=> creatRoute(UserController::class, 'addAction'),
    '/usuario/listar'=> creatRoute(UserController::class, 'listAction'),
    '/usuario/editar'=> creatRoute(UserController::class, 'editAction'),
    '/usuario/excluir'=> creatRoute(UserController::class, 'removeAction'),
    '/meu-perfil'=> creatRoute(UserController::class, 'profileAction'),

    '/entrar' => creatRoute(AuthenticationController::class, 'enterAction'),
    '/sair' => creatRoute(AuthenticationController::class,'logoutAction'),
    '/registrar' => creatRoute(AuthenticationController::class, 'registerAction'),

];