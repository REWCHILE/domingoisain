<?php
// views/prueba-de-hermeticidad.php - Prueba de Hermeticidad Manométrica de Gas
?>

<!-- Hero Prueba de Hermeticidad -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Normativa SEC Decreto Supremo Nº 66</span>
            <h1 class="hero-title">
                Prueba de <span class="gradient-text">Hermeticidad de Gas</span> · Certificado Oficial SEC
            </h1>
            <p class="hero-lead">
                ¿Metrogas, Lipigas, Abastible o Gasco te exigen certificado de hermeticidad para dar el alta del suministro? <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia, realiza el ensayo manométrico y emite el documento oficial de entrega.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Manómetros digitales calibrados</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificado firmado con validez legal inmediata</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Casas, departamentos y comunidades</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar una prueba de hermeticidad de gas con certificado.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar prueba de hermeticidad por WhatsApp">
                    <span>Solicitar Prueba de Hermeticidad</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Prueba de hermeticidad manométrica de gas por Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Ensayo Manométrico Normado</div>
                        <div class="badge-info-sub">Medición en milibares según protocolo SEC</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Protocolo de la Prueba Manométrica -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento Normativo</span>
            <h2 class="section-title">¿Cómo se Realiza la <span class="gradient-text">Prueba de Hermeticidad</span>?</h2>
            <p class="section-desc">
                El ensayo técnico verifica que no exista escape de gas en ningún punto de la red:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">1. Aislamiento</span>
                <h3 class="service-title">Desconexión y Sellado de Artefactos</h3>
                <p class="service-text">
                    Se cierran llaves de paso de artefactos (calefont, cocina, caldera) y se conecta la columna manométrica al punto de inyección de prueba.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">2. Presurización</span>
                <h3 class="service-title">Inyección a Presión Controlada</h3>
                <p class="service-text">
                    Se presuriza la red con gas inerte o aire a la presión de ensayo reglamentaria (50 a 100 mbar sobre la presión de régimen) durante 15 minutos continuos.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">3. Emisión</span>
                <h3 class="service-title">Certificado Oficial de Hermeticidad</h3>
                <p class="service-text">
                    Si la aguja se mantiene estable sin caída de presión, se emite y firma el certificado formal con el timbre y registro SEC Clase 3 de Domingo Isaín.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
