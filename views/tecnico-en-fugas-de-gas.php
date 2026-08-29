<?php
// views/tecnico-en-fugas-de-gas.php - Técnico en Fugas de Gas en Santiago
?>

<!-- Hero Técnico en Fugas de Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Técnico Calificado SEC · Clase 3</span>
            <h1 class="hero-title">
                Técnico en <span class="gradient-text">Fugas de Gas en Santiago</span> · Atención Rápida 24/7
            </h1>
            <p class="hero-lead">
                ¿Necesitas la visita de un técnico profesional para revisar tu instalación de gas, calefont o cocina? <strong>Domingo Isaín</strong> cuenta con licencia SEC vigente (RUT 12.738.961-6) e instrumental calibrado para diagnosticar y solucionar cualquier anomalía de forma segura y garantizada.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención técnica directa sin intermediarios</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Diagnóstico con instrumental electrónico</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Solución en el día y certificado DS66</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito la visita de un técnico en gas para una revisión urgente.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar técnico en gas por WhatsApp">
                    <span>Solicitar Visita Técnica</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Técnico en fugas de gas Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Atención Móvil en Toda la RM</div>
                        <div class="badge-info-sub">Llegada rápida con equipamiento completo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Protocolo de Trabajo Técnico -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento de Alta Calidad</span>
            <h2 class="section-title">¿Qué Incluye Nuestra <span class="gradient-text">Visita Técnica Profesional</span>?</h2>
            <p class="section-desc">
                Cada intervención técnica sigue el riguroso protocolo de seguridad establecido por el Decreto Supremo Nº 66 de la SEC:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Paso 1: Medición</span>
                <h3 class="service-title">Prueba Manométrica Inicial</h3>
                <p class="service-text">
                    Conexión de columnas de prueba y manómetros digitales a la red para registrar caídas de presión en milibares durante 15 minutos continuos.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Paso 2: Localización</span>
                <h3 class="service-title">Inspección de Artefactos y Redes</h3>
                <p class="service-text">
                    Revisión de llaves de paso, uniones, flexibles certificados, ventilaciones reglamentarias y ductos de evacuación de gases de calefonts y calderas.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Paso 3: Reparación</span>
                <h3 class="service-title">Sellado o Cambio Normado</h3>
                <p class="service-text">
                    Corrección inmediata: sellado interior con polímero Prodoral R6-1 sin picar, o reemplazo de piezas defectuosas con materiales certificados.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
