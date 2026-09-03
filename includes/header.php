<?php
// includes/header.php
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/../config.php';
}

$pageKey = $currentPageKey ?? '/';
$pageData = $PAGES_CONFIG[$pageKey] ?? $PAGES_CONFIG['/'];

$pageTitle = $pageData['title'] ?? SITE_NAME;
$pageDesc = $pageData['description'] ?? 'Gasfíter Instalador Autorizado SEC Clase 3 en Santiago.';
$pageCanonical = $pageData['canonical'] ?? BASE_URL . $pageKey;
$pageOgImage = !empty($pageData['og_image']) ? $pageData['og_image'] : BASE_URL . '/assets/images/og-image.jpg';
$pageOgImageSecure = str_replace('http://', 'https://', $pageOgImage);
$pageOgImageAlt = !empty($pageData['og_image_alt']) ? $pageData['og_image_alt'] : ($pageTitle . ' - Gasfíter Instalador Autorizado SEC');
$pageOgType = !empty($pageData['og_type']) ? $pageData['og_type'] : 'website';
?>
<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- Metadatos SEO Principales -->
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="keywords" content="domingo isain, gasfiter sec, instalador de gas sec clase 3, sellafugas, fugas de gas santiago, prodoral r6-1, reparacion de fugas de gas sin romper, sello rojo gas sec, certificado ds66, geofono gas trazador">
    <meta name="author" content="Domingo Isaín Plaza Caamaño - Gasfíter SEC">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>">
    
    <!-- Open Graph / Meta / Facebook Debugger / WhatsApp / LinkedIn -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="<?= htmlspecialchars($pageOgType) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:site_name" content="Domingo Isaín | Gasfíter Instalador Autorizado SEC">
    <meta property="og:image" content="<?= htmlspecialchars($pageOgImage) ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($pageOgImageSecure) ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= htmlspecialchars($pageOgImageAlt) ?>">
    
    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($pageOgImage) ?>">
    <meta name="twitter:image:alt" content="<?= htmlspecialchars($pageOgImageAlt) ?>">

    <!-- Metadatos de Geolocalización y Motores de IA (GEO / Generative Engine Optimization) -->
    <meta name="geo.region" content="CL-RM">
    <meta name="geo.placename" content="Santiago, Región Metropolitana, Chile">
    <meta name="geo.position" content="-33.448890;-70.669265">
    <meta name="ICBM" content="-33.448890, -70.669265">
    <meta name="classification" content="Gasfitería Autorizada SEC, Detección y Sellado de Fugas de Gas">
    <link rel="alternate" type="text/plain" href="<?= BASE_URL ?>/llms.txt" title="Información técnica estructurada para motores de IA (LLMs)">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/webp" href="<?= BASE_URL ?>/assets/images/logotipo-sec.webp">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/assets/images/domingo-isain.webp">
    
    <!-- Preload de Fuentes Locales Críticas (Cero bloqueo, Cero Layout Shift CLS) -->
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/plus-jakarta-sans-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/space-grotesk-700.woff2" as="font" type="font/woff2" crossorigin>
    
    <!-- Preload de Imagen LCP Hero -->
    <link rel="preload" as="image" href="<?= BASE_URL ?>/assets/images/hero-home-main.webp" type="image/webp" fetchpriority="high">

    <!-- Estilos CSS Inlined Críticos (Cero Solicitudes Bloqueantes de Red, Ahorro 700ms) -->
    <style>
    <?= str_replace('<?= BASE_URL ?>', BASE_URL, file_get_contents(__DIR__ . '/../assets/css/main.min.css')) ?>
    </style>
    
    <!-- Datos Estructurados JSON-LD (Schema.org / GEO Knowledge Graph) -->
    <script type="application/ld+json">
    <?= getWebSiteJsonLd() ?>
    </script>

    <script type="application/ld+json">
    <?= getLocalBusinessJsonLd() ?>
    </script>

    <script type="application/ld+json">
    <?= getFaqJsonLd($FAQS) ?>
    </script>

    <script type="application/ld+json">
    <?= getBreadcrumbJsonLd($pageKey, $pageTitle) ?>
    </script>
</head>
<body>

    <!-- Puntero Personalizado -->
    <?php include __DIR__ . '/custom-cursor.php'; ?>

    <!-- Barra Superior de Emergencias 24/7 -->
    <div class="top-emergency-bar">
        <div class="top-emergency-container">
            <div class="top-emergency-left">
                <span class="emergency-pill">
                    <span class="pulse-dot"></span>
                    Urgencias 24/7
                </span>
                <span class="top-emergency-text">
                    ¿Fuga de gas o corte de suministro? Llegamos rápido a tu comuna
                </span>
            </div>
            <div class="top-emergency-right">
                <a href="<?= SEC_PORTAL_URL ?>" target="_blank" rel="noopener noreferrer" class="sec-badge-header" title="Verificar Licencia SEC Oficial en portal eRNII">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    <span>Licencia SEC Clase 3</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="top-emergency-phone" title="Llamar a Domingo Isaín" aria-label="Llamar a Domingo Isaín al +56 9 4987 7316">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--brand-cyan)" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span><?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Cabecera Principal (Header) -->
    <header class="header-main">
        <div class="header-container">
            <!-- Logotipo y Marca Oficial -->
            <a href="<?= BASE_URL ?>/" class="logo-brand" aria-label="Ir a la portada de Domingo Isaín" style="display: flex; align-items: center; gap: 14px;">
                <img src="<?= BASE_URL ?>/assets/images/logo-domingo-isain.webp" alt="Domingo Isaín - Técnico en Ingeniería" width="220" height="52" style="height: 48px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0, 180, 232, 0.4));">
                <div class="logo-texts" style="display: flex; flex-direction: column;">
                    <span class="logo-title" style="font-size: 1.2rem; letter-spacing: -0.3px;">DOMINGO ISAÍN</span>
                    <span class="logo-subtitle" style="font-size: 0.72rem; color: var(--brand-cyan); letter-spacing: 0.5px; font-weight: 700;">
                        TÉCNICO EN INGENIERÍA · GASFÍTER SEC
                    </span>
                </div>
            </a>

            <!-- Navegación Principal Desktop -->
            <nav class="nav-desktop" aria-label="Navegación principal">
                <a href="<?= BASE_URL ?>/" class="nav-link <?= ($pageKey === '/') ? 'active' : '' ?>">Inicio</a>
                <a href="<?= BASE_URL ?>/fugas/" class="nav-link <?= (strpos($pageKey, 'fuga') !== false) ? 'active' : '' ?>">Fugas de Gas</a>
                <a href="<?= BASE_URL ?>/gasfiter-certificado/" class="nav-link <?= (strpos($pageKey, 'gasfiter-certificado') !== false || strpos($pageKey, 'autorizado') !== false) ? 'active' : '' ?>">Certificaciones</a>
                <a href="<?= BASE_URL ?>/instalador-sec/" class="nav-link <?= (strpos($pageKey, 'sec') !== false && strpos($pageKey, 'gasfiter-certificado') === false) ? 'active' : '' ?>">Sello Rojo SEC</a>
                <a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/" class="nav-link <?= (strpos($pageKey, 'ultrasonido') !== false) ? 'active' : '' ?>">Ultrasonido</a>
                <a href="<?= BASE_URL ?>/#faqs" class="nav-link">Preguntas FAQ</a>
                <a href="<?= BASE_URL ?>/#cotizador" class="nav-link">Cotizar</a>
            </nav>

            <!-- Acciones CTA -->
            <div class="header-actions">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito atención técnica urgente de gasfitería.') ?>" class="btn-header-call" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Urgencias Domingo Isaín">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    <span>WhatsApp Urgencias</span>
                </a>

                <button type="button" class="mobile-menu-btn" id="mobile-menu-toggle" aria-label="Abrir Menú de Navegación">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Overlay Oscuro de Fondo para Menú Móvil -->
    <div id="mobile-drawer-overlay" class="mobile-drawer-overlay"></div>

    <!-- Menú Móvil Desplegable (Deslizamiento de Izquierda a Derecha) -->
    <aside id="mobile-drawer" class="mobile-drawer-panel" aria-label="Menú Móvil de Navegación">
        <div>
            <!-- Encabezado del Menú -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid var(--border-subtle);">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <img src="<?= BASE_URL ?>/assets/images/logo-domingo-isain.webp" alt="Domingo Isaín" width="180" height="44" style="height: 44px; width: auto; object-fit: contain;">
                    <div>
                        <span style="font-weight: 800; font-size: 1rem; color: #fff; display: block; line-height: 1.1;">DOMINGO ISAÍN</span>
                        <span style="color: var(--brand-cyan); font-size: 0.68rem; font-weight: 700; text-transform: uppercase;">Técnico en Ingeniería · SEC</span>
                    </div>
                </div>
                <button type="button" id="mobile-drawer-close" aria-label="Cerrar Menú" style="background: rgba(255,255,255,0.08); border: 1px solid var(--border-subtle); color: #fff; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; cursor: pointer;">✕</button>
            </div>

            <!-- Lista de Enlaces -->
            <nav style="display: flex; flex-direction: column; gap: 6px;" aria-label="Navegación Móvil">
                <a href="<?= BASE_URL ?>/" class="mobile-drawer-link <?= ($pageKey === '/') ? 'active' : '' ?>">
                    <span>Inicio</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/fugas/" class="mobile-drawer-link <?= (strpos($pageKey, 'fuga') !== false) ? 'active' : '' ?>">
                    <span>Fugas de Gas Sin Romper</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/gasfiter-certificado/" class="mobile-drawer-link <?= (strpos($pageKey, 'gasfiter-certificado') !== false || strpos($pageKey, 'autorizado') !== false) ? 'active' : '' ?>">
                    <span>Certificaciones & Títulos</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/instalador-sec/" class="mobile-drawer-link <?= (strpos($pageKey, 'sec') !== false && strpos($pageKey, 'gasfiter-certificado') === false) ? 'active' : '' ?>">
                    <span>Levantamiento Sello Rojo SEC</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/" class="mobile-drawer-link <?= (strpos($pageKey, 'ultrasonido') !== false) ? 'active' : '' ?>">
                    <span>Geófono & Ultrasonido</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/#faqs" class="mobile-drawer-link">
                    <span>Preguntas Frecuentes</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= BASE_URL ?>/#cotizador" class="mobile-drawer-link" style="color: var(--brand-cyan);">
                    <span>Cotizador en Vivo</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </nav>
        </div>

        <!-- Botones de Acción al Fondo del Drawer -->
        <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 25px; padding-top: 15px; border-top: 1px solid var(--border-subtle);">
            <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una urgencia de gas / sanitarios y necesito atención técnica.') ?>" class="btn-primary" style="width: 100%; justify-content: center; background: linear-gradient(135deg, #10b981, #059669); gap: 8px; font-size: 0.95rem; padding: 13px;" target="_blank" rel="noopener noreferrer" aria-label="Enviar WhatsApp de Urgencias">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.814 2.796.814 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.766c0 5.514-4.486 10-10 10-1.758 0-3.415-.456-4.864-1.258l-5.136 1.346 1.371-5.012c-.879-1.493-1.371-3.23-1.371-5.076 0-5.514 4.486-10 10-10s10 4.486 10 10z"/></svg>
                <span>WhatsApp Urgencias</span>
            </a>
            <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" style="width: 100%; justify-content: center; gap: 8px; font-size: 0.95rem; padding: 13px;" aria-label="Llamar a Domingo Isaín al +56 9 4987 7316">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span>Llamar: <?= PHONE_DISPLAY ?></span>
            </a>
        </div>
    </aside>

    <!-- Punto de Referencia Principal para Accesibilidad (Main Landmark) -->
    <main id="main-content">
