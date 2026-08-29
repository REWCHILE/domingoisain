<?php
/**
 * Controlador Principal y Router Modular en PHP
 * Domingo Isaín | Gasfíter Instalador Autorizado SEC Clase 3
 */

require_once __DIR__ . '/config.php';

// Obtener la URI solicitada
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = dirname($scriptName);

// Eliminar query string
$path = parse_url($requestUri, PHP_URL_PATH);

// Normalizar quitando la carpeta base si está en subdirectorio
if ($scriptDir !== '/' && $scriptDir !== '\\' && strpos($path, $scriptDir) === 0) {
    $path = substr($path, strlen($scriptDir));
}

// Asegurar formato con slashes
$path = '/' . trim($path, '/') . '/';
if ($path === '///' || $path === '//') {
    $path = '/';
}

// Mapeo de rutas amigables e indexadas a vistas
$routeViewMap = [
    '/' => 'home',
    '/fugas/' => 'fugas',
    '/fuga-de-gas/' => 'fugas',
    '/fugas-de-gas-santiago/' => 'fugas-de-gas-santiago',
    '/especialista-en-fugas-de-gas/' => 'especialista-en-fugas-de-gas',
    '/fuga-de-agua/' => 'fuga-de-agua',
    '/tecnico-en-fugas-de-gas/' => 'tecnico-en-fugas-de-gas',
    '/deteccion-fuga-de-gas/' => 'deteccion-fuga-de-gas',
    '/instalador-de-gas-sec/' => 'instalador-de-gas-sec',
    '/instalador-autorizado-sec/' => 'instalador-autorizado-sec',
    '/deteccion-con-gas-trazador/' => 'deteccion-con-gas-trazador',
    '/prodoral-para-fugas-de-gas/' => 'prodoral-para-fugas-de-gas',
    '/prodoral-para-fugas-de-gas' => 'prodoral-para-fugas-de-gas',
    '/deteccion-con-camara-termica-termografia/' => 'deteccion-con-camara-termica-termografia',
    '/experto-en-fugas-de-gas/' => 'experto-en-fugas-de-gas',
    '/gasfiter/' => 'gasfiter',
    '/gasfiter-certificado/' => 'gasfiter-certificado',
    '/gasfiter-autorizado/' => 'gasfiter-certificado',
    '/gasfiter-autorizado-sec/' => 'gasfiter-certificado',
    '/gasfiter-sec/' => 'gasfiter-sec',
    '/gasfiter-sec-santiago/' => 'gasfiter-sec',
    '/gasfiter-a-domicilio/' => 'gasfiter-a-domicilio',
    '/gasfiter-santiago/' => 'gasfiter-santiago',
    '/gasfiter-urgencias/' => 'gasfiter-urgencias',
    '/gasfiter-calefont/' => 'gasfiter-calefont',
    '/reparacion-de-calefont/' => 'reparacion-de-calefont',
    '/instalador-sec/' => 'instalador-sec',
    '/gasfiter-certificado-sec/' => 'instalador-sec',
    '/deteccion-con-ultrasonido/' => 'ultrasonido',
    '/ultrasonido/' => 'ultrasonido',
    '/prodoral/' => 'prodoral-para-fugas-de-gas',
    '/sello-rojo-sec/' => 'instalador-sec',
    '/sello-rojo/' => 'instalador-sec',
    '/sello-verde-gas/' => 'sello-verde-gas',
    '/prueba-de-hermeticidad/' => 'prueba-de-hermeticidad',
    '/certificados/' => 'home',
];

$viewName = $routeViewMap[$path] ?? null;

// Si la ruta no coincide exactamente, verificar sin trailing slash
if (!$viewName) {
    $altPath = '/' . trim($path, '/');
    $viewName = $routeViewMap[$altPath] ?? null;
}

// Si sigue sin encontrarse, verificar si existe la vista correspondiente
if (!$viewName) {
    $slug = trim($path, '/');
    if (file_exists(__DIR__ . '/views/' . $slug . '.php')) {
        $viewName = $slug;
    } else {
        $viewName = '404';
        http_response_code(404);
    }
}

// Asignar clave actual para header y metadatos SEO
$currentPageKey = isset($PAGES_CONFIG[$path]) ? $path : (isset($PAGES_CONFIG['/' . trim($path, '/') . '/']) ? '/' . trim($path, '/') . '/' : '/');

// Renderizado de la plantilla
require __DIR__ . '/includes/header.php';

$viewFile = __DIR__ . '/views/' . $viewName . '.php';
if (file_exists($viewFile)) {
    require $viewFile;
} else {
    require __DIR__ . '/views/404.php';
}

require __DIR__ . '/includes/footer.php';
