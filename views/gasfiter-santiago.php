<?php
// views/gasfiter-santiago.php - Gasfíter en Santiago y Toda la RM
?>

<!-- Hero Gasfíter Santiago -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Cobertura en Toda la Región Metropolitana</span>
            <h1 class="hero-title">
                Gasfíter en <span class="gradient-text">Santiago</span> · Certificado SEC Clase 3 (24/7)
            </h1>
            <p class="hero-lead">
                Servicio profesional de gasfitería integral y emergencias de gas en todo el Gran Santiago. <strong>Domingo Isaín Plaza Caamaño</strong> (RUT 12.738.961-6) ofrece más de 30 años de experiencia, tecnología de sellado alemán sin picar pisos y atención directa garantizada por 3 años.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Las Condes, Providencia, Santiago Centro, Ñuñoa</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Vitacura, La Reina, Maipú, La Florida, San Miguel</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Urgencias 24 Horas los 365 días del año</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito un gasfíter en Santiago para una urgencia/cotización.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Contactar a gasfíter en Santiago por WhatsApp">
                    <span>Solicitar Gasfíter en Santiago</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al gasfíter al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Domingo Isaín Gasfíter en Santiago Autorizado SEC" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Atención Móvil Express</div>
                        <div class="badge-info-sub">Llegada rápida a todas las comunas de Santiago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cobertura y Comunas -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Zonas de Atención Inmediata</span>
            <h2 class="section-title">Gasfitería Autorizada en <span class="gradient-text">Todas las Comunas de Santiago</span></h2>
            <p class="section-desc">
                Desplazamiento rápido con instrumental de alta tecnología y repuestos normados:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Sector Oriente</span>
                <h3 class="service-title">Las Condes, Vitacura, Providencia, Lo Barnechea</h3>
                <p class="service-text">
                    Atención prioritaria para departamentos, casas y comunidades de edificios en sellado de fugas sin picar, regularización de sellos rojos y mantención de calderas.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Sector Centro y Sur</span>
                <h3 class="service-title">Santiago Centro, Ñuñoa, San Miguel, La Florida</h3>
                <p class="service-text">
                    Diagnóstico manométrico de fugas de gas, cambio de matrices de cobre y agua potable, y mantención de calefonts con repuestos de fábrica.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Sector Poniente y Norte</span>
                <h3 class="service-title">Maipú, Pudahuel, Quilicura, Colina, Chicureo</h3>
                <p class="service-text">
                    Detección con gas trazador y geófono acústico de filtraciones subterráneas en parcelas y viviendas residenciales con garantía de 3 años.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
