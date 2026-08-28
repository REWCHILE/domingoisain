<?php
// views/gasfiter.php - Servicios Generales de Gasfitería Autorizada
?>

<section class="hero-section">
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Gasfitería Profesional SEC</span>
            <h1 class="hero-title">
                Servicios Integrales de <span class="gradient-text">Gasfitería Autorizada en Santiago</span>
            </h1>
            <p class="hero-lead">
                Más de 30 años ofreciendo soluciones definitivas en instalaciones de gas, agua potable, alcantarillado, mantención de calefonts y calderas con el respaldo de la licencia oficial SEC Clase 3.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Materiales de primera calidad</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Trabajos normados y garantizados</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención de urgencias en toda la RM</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, requiero un servicio de gasfitería para mi hogar/empresa.') ?>" class="btn-primary" target="_blank">
                    <span>Cotizar Gasfitería por WhatsApp</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-gasfiter.webp" alt="Servicios de gasfitería autorizada SEC" class="hero-main-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Catálogo de Servicios de Gasfitería -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Gas Licuado y Natural</span>
                <h3 class="service-title">Instalación y Modificación de Redes de Gas</h3>
                <p class="service-text">Tendido de cañerías en cobre tipo L y K, soldadura en plata al 45%, cambio de llaves de paso y arranques de cocina o calefont bajo norma DS66.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Calefonts y Climatización</span>
                <h3 class="service-title">Mantención de Calefonts y Calderas</h3>
                <p class="service-text">Limpieza de quemadores, regulación de presión, cambio de diafragmas, sensores de temperatura y tiros de chimeneas de todas las marcas.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Agua Potable</span>
                <h3 class="service-title">Reparación de Filtraciones y Matrices</h3>
                <p class="service-text">Detección de filtraciones subterráneas de agua, reparación de matrices en cobre, PPR y PEX, cambio de griferías y válvulas de corte general.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
