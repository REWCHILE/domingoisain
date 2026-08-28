<?php
// views/fugas.php - Landing especializada para /fugas/ y /fuga-de-gas/
?>

<!-- Hero Específico de Fugas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Especialidad #1 en Santiago</span>
            <h1 class="hero-title">
                Reparación y Sellado de <span class="gradient-text">Fugas de Gas Sin Romper</span>
            </h1>
            <p class="hero-lead">
                ¿Sientes olor a gas o la distribuidora te suspendió el medidor? En <strong>Domingo Isaín</strong> detectamos la fuga con geófono ultrasónico y sellamos la cañería interior con polímero alemán <strong>Prodoral R6-1</strong>. Sin demoler muros ni levantar pisos.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Reparación en 4 a 6 horas</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía de 3 años por escrito</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificado oficial DS66 para Metrogas</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una fuga de gas y necesito atención técnica urgente.') ?>" class="btn-primary" target="_blank">
                    <span>Solicitar Atención Urgente</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-prodoral.webp" alt="Sellado de fuga de gas con Prodoral R6-1" class="hero-main-img">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Tecnología Alemana Prodoral®</div>
                        <div class="badge-info-sub">DIN EN 13090 · Aprobación DVGW</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso Paso a Paso de Sellado -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento Técnico</span>
            <h2 class="section-title">¿Cómo Funciona el Sellado <span class="gradient-text">Sin Romper Muros</span>?</h2>
            <p class="section-desc">
                Un método limpio, seguro y normado que rehabilita tus tuberías de gas en 4 etapas ejecutadas por Domingo Isaín:
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--tech-cyan); margin-bottom: 10px;">01</div>
                <h3 class="service-title">Prueba de Presión Inicial</h3>
                <p class="service-text">Medimos la caída de presión en milibares con manómetros digitales para determinar la magnitud del escape según el protocolo DS66.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--tech-cyan); margin-bottom: 10px;">02</div>
                <h3 class="service-title">Limpieza y Desengrase</h3>
                <p class="service-text">Purgamos la cañería con aire a presión para eliminar residuos de polvo, sarro o aceite acumulado en el interior de los tubos.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--prodoral-amber); margin-bottom: 10px;">03</div>
                <h3 class="service-title">Inyección Prodoral R6-1</h3>
                <p class="service-text">Inyectamos el polímero líquido alemán que recorre todas las uniones, soldaduras y porosidades, polimerizando y sellando herméticamente.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--sec-green); margin-bottom: 10px;">04</div>
                <h3 class="service-title">Certificación y Entrega</h3>
                <p class="service-text">Realizamos la prueba de hermeticidad final con resultado 0 fuga y emitimos el Certificado Oficial de Hermeticidad firmado.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
