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
?>
<!DOCTYPE html>
<html lang="es">
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
    
    <!-- Open Graph / Redes Sociales / WhatsApp -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:site_name" content="Domingo Isaín | Gasfíter SEC">
    <meta property="og:image" content="<?= BASE_URL ?>/assets/images/hero-home-main.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Domingo Isaín Gasfiter Certificado SEC">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= BASE_URL ?>/assets/images/hero-home-main.webp">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/webp" href="<?= BASE_URL ?>/assets/images/logotipo-sec.webp">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/assets/images/domingo-isain.webp">
    
    <!-- Estilos CSS Modernos -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/main.css?v=3.0">
    
    <!-- Datos Estructurados JSON-LD (Schema.org) -->
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
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                <span class="emergency-pill">
                    <span class="pulse-dot"></span>
                    Atención de Urgencias 24/7
                </span>
                <span style="font-size: 0.85rem; color: #cbd5e1;">
                    ¿Fuga de gas o corte de suministro? Llegamos rápido a tu comuna
                </span>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
                <span class="sec-badge-header">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Licencia SEC Clase 3 (RUT 12.738.961-6)
                </span>
                <a href="tel:<?= PHONE_RAW ?>" style="color: #ffffff; text-decoration: none; font-weight: 800; display: inline-flex; align-items: center; gap: 6px; font-size: 0.88rem;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--tech-cyan)" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <?= PHONE_DISPLAY ?>
                </a>
            </div>
        </div>
    </div>

    <!-- Cabecera Principal (Header) -->
    <header class="header-main">
        <div class="header-container">
            <!-- Logotipo y Marca Oficial -->
            <a href="<?= BASE_URL ?>/" class="logo-brand" aria-label="Ir a la portada" style="display: flex; align-items: center; gap: 14px;">
                <img src="<?= BASE_URL ?>/assets/images/logo-domingo-isain.png" alt="Domingo Isaín - Técnico en Ingeniería" style="height: 52px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0, 180, 232, 0.4));">
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
                <a href="<?= BASE_URL ?>/fugas/" class="nav-link <?= (strpos($pageKey, 'fuga') !== false) ? 'active' : '' ?>">Fugas Sin Romper</a>
                <a href="<?= BASE_URL ?>/gasfiter/" class="nav-link <?= (strpos($pageKey, 'gasfiter') !== false && strpos($pageKey, 'sec') === false) ? 'active' : '' ?>">Servicios</a>
                <a href="<?= BASE_URL ?>/instalador-sec/" class="nav-link <?= (strpos($pageKey, 'sec') !== false) ? 'active' : '' ?>">Certificación SEC</a>
                <a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/" class="nav-link <?= (strpos($pageKey, 'ultrasonido') !== false) ? 'active' : '' ?>">Ultrasonido</a>
                <a href="<?= BASE_URL ?>/#faqs" class="nav-link">Preguntas (FAQ)</a>
                <a href="<?= BASE_URL ?>/#cotizador" class="nav-link">Cotizar</a>
            </nav>

            <!-- Acciones CTA -->
            <div class="header-actions">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito atención técnica urgente de gasfitería.') ?>" class="btn-header-call" target="_blank" rel="noopener noreferrer">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    <span>WhatsApp Urgencias</span>
                </a>

                <button type="button" class="mobile-menu-btn" id="mobile-menu-toggle" aria-label="Abrir Menú Móvil">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Menú Móvil Desplegable -->
    <div id="mobile-drawer" style="position: fixed; inset: 0; background: rgba(3, 6, 12, 0.95); backdrop-filter: blur(20px); z-index: 10000; display: none; flex-direction: column; padding: 24px; justify-content: space-between;">
        <div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; padding-bottom: 15px; border-bottom: 1px solid var(--border-subtle);">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img src="<?= BASE_URL ?>/assets/images/logo-domingo-isain.png" alt="Domingo Isaín" style="height: 44px; width: auto; object-fit: contain;">
                    <span style="font-weight: 800; font-size: 1.05rem; color: #fff;">DOMINGO ISAÍN</span>
                </div>
                <button type="button" id="mobile-drawer-close" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;">✕</button>
            </div>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <a href="<?= BASE_URL ?>/" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Inicio</a>
                <a href="<?= BASE_URL ?>/fugas/" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Fugas de Gas Sin Romper</a>
                <a href="<?= BASE_URL ?>/gasfiter/" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Servicios de Gasfitería</a>
                <a href="<?= BASE_URL ?>/instalador-sec/" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Certificaciones SEC & DS66</a>
                <a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Detección con Ultrasonido</a>
                <a href="<?= BASE_URL ?>/#faqs" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Preguntas Frecuentes</a>
                <a href="<?= BASE_URL ?>/#cotizador" style="color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700; padding: 8px 0;">Cotizador en Vivo</a>
            </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="tel:<?= PHONE_RAW ?>" class="btn-primary" style="width: 100%;">
                Llamar Urgencias: <?= PHONE_DISPLAY ?>
            </a>
            <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito atención de gasfitería.') ?>" class="btn-header-call" style="justify-content: center; width: 100%;" target="_blank">
                WhatsApp Directo
            </a>
        </div>
    </div>
    <script>
        const mdToggle = document.getElementById('mobile-menu-toggle');
        const mdDrawer = document.getElementById('mobile-drawer');
        const mdClose = document.getElementById('mobile-drawer-close');
        if(mdToggle && mdDrawer) mdToggle.onclick = () => mdDrawer.style.display = 'flex';
        if(mdClose && mdDrawer) mdClose.onclick = () => mdDrawer.style.display = 'none';
    </script>
