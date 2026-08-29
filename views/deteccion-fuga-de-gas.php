<?php
// views/deteccion-fuga-de-gas.php - Detección Profesional de Fugas de Gas
?>

<!-- Hero Detección de Fuga de Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Diagnóstico Electrónico de Fugas</span>
            <h1 class="hero-title">
                Detección de <span class="gradient-text">Fugas de Gas en Santiago</span> · Sin Romper Muros
            </h1>
            <p class="hero-lead">
                ¿Sospechas de una fuga de gas en tu casa o departamento? Localizamos escapes subterráneos y empotrados con <strong>gas trazador (N2/H2)</strong> y <strong>sensores ultrasónicos</strong>. Determinamos el punto exacto con precisión milimétrica sin picar a ciegas.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Detección no invasiva con sensores de hidrógeno</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Medición manométrica de milibares</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención de emergencias 24/7 en toda la RM</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar un servicio de detección de fuga de gas.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar detección de fuga de gas por WhatsApp">
                    <span>Solicitar Detección Inmediata</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente a Domingo Isaín">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-especialista-fugas.webp" alt="Detección de fuga de gas con instrumental de precisión" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Detección Molecular y Acústica</div>
                        <div class="badge-info-sub">0% Daño en cerámicas y losas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Métodos de Detección de Fugas de Gas -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Tecnología de Punta</span>
            <h2 class="section-title">¿Cómo Detectamos una <span class="gradient-text">Fuga Oculta de Gas</span>?</h2>
            <p class="section-desc">
                Combinamos 3 metodologías científicas para encontrar desde microfugas por porosidad hasta fisuras importantes:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Método 1</span>
                <h3 class="service-title">Prueba de Hermeticidad Manométrica</h3>
                <p class="service-text">
                    Aislamos el tramo y presurizamos con nitrógeno para medir la estabilidad de la aguja y confirmar la existencia y severidad del escape bajo norma DS66.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Método 2</span>
                <h3 class="service-title">Gas Trazador Inerte (N2 / H2)</h3>
                <p class="service-text">
                    Inyectamos gas formador con moléculas ultra pequeñas de hidrógeno que atraviesan los radieres y pisos flotantes para ser captadas por sensores de superficie.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Método 3</span>
                <h3 class="service-title">Ultrasonido y Geófono Acústico</h3>
                <p class="service-text">
                    Escuchamos el sonido de la turbulencia del gas escapando en cañerías empotradas con auriculares aislantes y filtros digitales de frecuencia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
