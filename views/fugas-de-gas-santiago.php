<?php
// views/fugas-de-gas-santiago.php - Fugas de Gas en Santiago
?>

<!-- Hero Fugas de Gas Santiago -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Especialista #1 en la RM</span>
            <h1 class="hero-title">
                Fugas de <span class="gradient-text">Gas en Santiago</span> · Detección y Sellado Sin Romper
            </h1>
            <p class="hero-lead">
                ¿Sientes olor a gas o te suspendieron el suministro? En <strong>Domingo Isaín</strong> ubicamos la fuga con geófono ultrasónico y gas trazador molecular, sellando la tubería desde el interior con polímero alemán <strong>Prodoral R6-1</strong> sin picar pisos ni muros.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Listo en 30 min a 2 horas máx.</span>
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
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una fuga de gas en Santiago y necesito atención urgente.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar atención urgente de fuga de gas en Santiago">
                    <span>Solicitar Atención Urgente</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-especialista-fugas.webp" alt="Detección y sellado de fugas de gas en Santiago por Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Tecnología Alemana Prodoral R6-1</div>
                        <div class="badge-info-sub">Norma DIN EN 13090 · Certificación SEC</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Detección y Sellado -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento Certificado</span>
            <h2 class="section-title">Solución en 4 Etapas <span class="gradient-text">el Mismo Día</span></h2>
            <p class="section-desc">
                Un método limpio, seguro y normado que rehabilita tus tuberías de gas en tiempo récord:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Etapa 1</span>
                <h3 class="service-title">Prueba de Presión Inicial</h3>
                <p class="service-text">Medimos la caída de presión en milibares con manómetros digitales para determinar la magnitud del escape bajo norma DS66.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Etapa 2</span>
                <h3 class="service-title">Limpieza y Desengrase</h3>
                <p class="service-text">Purgamos la cañería con aire a presión para eliminar residuos de polvo, sarro o aceite acumulado en el interior de los tubos.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Etapa 3</span>
                <h3 class="service-title">Inyección Prodoral R6-1</h3>
                <p class="service-text">Inyectamos el polímero líquido alemán a presión que recorre todas las uniones, soldaduras y porosidades, sellando herméticamente por dentro.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Etapa 4</span>
                <h3 class="service-title">Certificación y Entrega</h3>
                <p class="service-text">Realizamos la prueba de hermeticidad final con resultado 0 fuga y emitimos el Certificado Oficial firmado por Instalador SEC Clase 3.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
