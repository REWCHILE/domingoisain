<?php
// views/instalador-de-gas-sec.php - Instalador de Gas Autorizado SEC en Santiago
?>

<!-- Hero Instalador de Gas SEC -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Licencia Oficial SEC Clase 3</span>
            <h1 class="hero-title">
                Instalador de <span class="gradient-text">Gas SEC en Santiago</span> · Respaldo y Garantía Legal
            </h1>
            <p class="hero-lead">
                <strong>Domingo Isaín Plaza Caamaño</strong> (RUT 12.738.961-6) es Instalador de Gas Autorizado por la Superintendencia de Electricidad y Combustibles (SEC). Realizamos regularización de sellos rojos, proyectos de gas bajo norma DS66, pruebas de hermeticidad y tramitación de Sello Verde.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Licencia SEC verificable en sec.cl</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Levantamiento de sellos rojos y amarillos</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificados oficiales para distribuidoras</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar con un instalador de gas autorizado SEC.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Contactar al instalador SEC Domingo Isaín por WhatsApp">
                    <span>Contactar a Instalador SEC</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Instalador de gas autorizado SEC Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Registro Oficial SEC Vigente</div>
                        <div class="badge-info-sub">Instalador de Gas Clase 3 · RUT 12.738.961-6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servicios Oficiales de Instalador de Gas SEC -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Competencias Oficiales</span>
            <h2 class="section-title">Servicios Autorizados por la <span class="gradient-text">Normativa SEC DS66</span></h2>
            <p class="section-desc">
                Cumplimiento estricto del marco legal chileno para edificaciones residenciales, comerciales y condominios:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Servicio #1</span>
                <h3 class="service-title">Levantamiento de Sello Rojo</h3>
                <p class="service-text">
                    Diagnóstico, corrección de anomalías en cañerías, artefactos y ventilaciones, y emisión de documentación para obtener el Sello Verde de la SEC.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Servicio #2</span>
                <h3 class="service-title">Pruebas de Hermeticidad Manométricas</h3>
                <p class="service-text">
                    Ejecución de ensayos de presión con instrumental calibrado y emisión del Certificado Oficial de Hermeticidad válido ante Metrogas, Lipigas, Abastible y Gasco.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Servicio #3</span>
                <h3 class="service-title">Instalación y Conversión de Artefactos</h3>
                <p class="service-text">
                    Conexión normada de calefonts, calderas, cocinas y termos con llaves de paso certificadas, flexibles de acero inoxidable y ductos de evacuación de gases.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
