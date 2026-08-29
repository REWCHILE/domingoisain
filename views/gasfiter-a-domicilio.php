<?php
// views/gasfiter-a-domicilio.php - Gasfíter a Domicilio en Santiago
?>

<!-- Hero Gasfíter a Domicilio -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Atención a Domicilio en Todo Chile Continental</span>
            <h1 class="hero-title">
                Gasfíter a <span class="gradient-text">Domicilio en Santiago</span> · Autorizado SEC 24/7
            </h1>
            <p class="hero-lead">
                ¿Problemas urgentes con el gas, calefont o filtraciones? <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia técnica, acude directamente a tu domicilio con instrumental digital calibrado y repuestos certificados para dar solución en la primera visita.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Llegada rápida a casas y departamentos</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención directa por el especialista titular</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía por escrito de 3 años</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito un gasfíter a domicilio para una revisión urgente.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar gasfíter a domicilio por WhatsApp">
                    <span>Pedir Gasfíter a Domicilio</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar al gasfíter a domicilio al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Domingo Isaín Gasfíter a Domicilio Autorizado SEC" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Atención Directa y Personalizada</div>
                        <div class="badge-info-sub">Sin intermediarios · Instalador SEC Clase 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principios de Confianza y Calidad Cialdini -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Confianza y Respaldo Oficial</span>
            <h2 class="section-title">¿Por Qué Confiar en <span class="gradient-text">Domingo Isaín a Domicilio</span>?</h2>
            <p class="section-desc">
                Más de 1.800 clientes particulares y comunidades de edificios avalan un servicio de máxima rigurosidad técnica:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Autoridad Técnica</span>
                <h3 class="service-title">Licencia SEC Clase 3 Oficial</h3>
                <p class="service-text">
                    Acreditación legal verificable en sec.cl (RUT 12.738.961-6). Cumplimiento estricto del Decreto Supremo Nº 66 para garantizar la seguridad de tu familia.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Sin Roturas</span>
                <h3 class="service-title">Tecnología Alemana Prodoral R6-1</h3>
                <p class="service-text">
                    Si tienes una fuga de gas, la sellamos desde el interior sin picar baldosas, cerámicas ni muros, ahorrándote tiempo y gastos de albañilería.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Cero Riesgo</span>
                <h3 class="service-title">Garantía por Escrito de 3 Años</h3>
                <p class="service-text">
                    Cada trabajo incluye prueba de hermeticidad manométrica con manómetros digitales certificados y entrega de informe técnico firmado.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
