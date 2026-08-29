<?php
// views/gasfiter-sec.php - Gasfíter SEC en Santiago
?>

<!-- Hero Gasfíter SEC -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Acreditación Oficial SEC Clase 3</span>
            <h1 class="hero-title">
                Gasfíter <span class="gradient-text">SEC en Santiago</span> · Domingo Isaín Plaza Caamaño
            </h1>
            <p class="hero-lead">
                No arriesgues la seguridad de tu hogar con personal no autorizado. <strong>Domingo Isaín Plaza Caamaño</strong> (RUT 12.738.961-6) cuenta con más de 30 años de experiencia técnica y certificación oficial de la Superintendencia de Electricidad y Combustibles (SEC) para regularizaciones, detección de fugas y proyectos DS66.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Licencia SEC Clase 3 verificable en sec.cl</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>+1.800 instalaciones certificadas</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía por escrito de 3 años</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar con un gasfíter autorizado SEC.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Contactar a gasfíter SEC por WhatsApp">
                    <span>Contactar Gasfíter SEC</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente a Domingo Isaín al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Domingo Isaín Gasfíter SEC Certificado" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza C.</div>
                        <div class="badge-info-sub">Instalador SEC Clase 3 (RUT 12.738.961-6)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principios Cialdini: Autoridad y Prueba Social -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Competencias Exclusivas</span>
            <h2 class="section-title">Servicios que Exigen un <span class="gradient-text">Gasfíter Autorizado SEC</span></h2>
            <p class="section-desc">
                Por exigencia de la normativa legal y las distribuidoras (Metrogas, Lipigas, Abastible, Gasco), estos trabajos solo pueden ser ejecutados por instaladores certificados:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Fugas y Sellado</span>
                <h3 class="service-title">Rehabilitación Sin Romper Muros</h3>
                <p class="service-text">
                    Detección electrónica milimétrica y sellado interior con polímero alemán Prodoral R6-1. Restablecimiento del suministro y certificación de hermeticidad el mismo día.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Sello Rojo / Verde</span>
                <h3 class="service-title">Levantamiento de Sellos SEC</h3>
                <p class="service-text">
                    Corrección técnica de anomalías en tuberías, llaves de corte y ventilaciones, con emisión de certificados válidos ante empresas certificadoras y distribuidoras.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Agua y Sanitaria</span>
                <h3 class="service-title">Redes de Agua y Filtraciones</h3>
                <p class="service-text">
                    Diagnóstico acústico con geófono digital de fugas de agua no visibles, cambio de matrices de cobre/PPR y regularización de redes domiciliarias.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
