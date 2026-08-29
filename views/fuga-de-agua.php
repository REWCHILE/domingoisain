<?php
// views/fuga-de-agua.php - Detección y Reparación de Fugas de Agua No Visibles
?>

<!-- Hero Específico de Fuga de Agua -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-cyan" style="margin-bottom: 16px;">Inspección Acústica y No Destructiva</span>
            <h1 class="hero-title">
                Detección de <span class="gradient-text">Fugas de Agua Ocultas</span> con Geófono Digital
            </h1>
            <p class="hero-lead">
                ¿La cuenta del agua se disparó o tienes humedad sin causa aparente? Localizamos con precisión milimétrica filtraciones subterráneas y bajo radier en casas, departamentos y condominios en todo Santiago sin picar a ciegas.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Geófono digital de alta frecuencia</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Cero destrucción innecesaria de pisos</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención de urgencia en toda la RM</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una fuga o filtración de agua oculta y necesito detección.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar detección de fuga de agua por WhatsApp">
                    <span>Solicitar Detección de Fuga de Agua</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar a Domingo Isaín al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-fuga-agua.webp" alt="Detección de fuga de agua subterránea con geófono" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Geófono Digital y Sonda Acústica</div>
                        <div class="badge-info-sub">Precisión milimétrica bajo losa y radier</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Síntomas Comunes de una Fuga de Agua Oculta -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Señales de Alerta</span>
            <h2 class="section-title">¿Cómo Saber si Tienes una <span class="gradient-text">Fuga de Agua No Visible</span>?</h2>
            <p class="section-desc">
                Las filtraciones ocultas pueden deteriorar los cimientos de tu vivienda y causar cobros desmedidos en la boleta mensual de Aguas Andinas o SMAPA:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">Síntoma #1</span>
                <h3 class="service-title">Medidor Gira sin Consumo</h3>
                <p class="service-text">
                    Si cierras todas las llaves y artefactos de la casa y la estrella o aguja del medidor sigue girando, existe una fuga continua en la red de alimentación subterránea.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Síntoma #2</span>
                <h3 class="service-title">Humedad en Zócalos y Muros</h3>
                <p class="service-text">
                    Aparición de salitre, pintura descascarada, pisos flotantes levantados o manchas oscuras en la base de paredes y tabiques sin causa externa evidente.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Síntoma #3</span>
                <h3 class="service-title">Pérdida de Presión en Cañerías</h3>
                <p class="service-text">
                    Disminución notable de la fuerza de agua en duchas o lavamanos provocada por el escape constante de caudal en un tramo roto o desoldado.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
