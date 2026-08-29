<?php
// views/instalador-autorizado-sec.php - Instalador Autorizado SEC en Santiago
?>

<!-- Hero Instalador Autorizado SEC -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Registro Oficial SEC Clase 3</span>
            <h1 class="hero-title">
                Instalador <span class="gradient-text">Autorizado SEC en Santiago</span> · Domingo Isaín Plaza C.
            </h1>
            <p class="hero-lead">
                Acredita la seguridad de tu inmueble con un profesional certificado por el Estado chileno. <strong>Domingo Isaín</strong> (RUT 12.738.961-6) cuenta con más de 30 años de experiencia, ejecutando obras de gas bajo norma DS66, pruebas de hermeticidad, levantamiento de sellos y proyectos de certificación Sello Verde.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Licencia SEC oficial activa y verificable</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Firma autorizada para Metrogas y distribuidoras</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía por escrito de 3 años</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar con un instalador autorizado SEC.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Contactar a instalador autorizado SEC por WhatsApp">
                    <span>Contactar Instalador Autorizado</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Instalador Autorizado SEC Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza Caamaño</div>
                        <div class="badge-info-sub">Instalador de Gas Clase 3 · RUT 12.738.961-6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Garantías y Legalidad -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Marco Legal y Normativo</span>
            <h2 class="section-title">¿Por Qué Exigir la <span class="gradient-text">Licencia SEC Oficial</span>?</h2>
            <p class="section-desc">
                Contratar personal no autorizado anula las garantías de seguros de hogar y arriesga multas y cortes definitivos por parte de la SEC y distribuidoras:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Validez Legal</span>
                <h3 class="service-title">Certificados Oficiales DS66</h3>
                <p class="service-text">
                    Nuestros informes y certificados de hermeticidad cuentan con valor probatorio legal ante Metrogas, Lipigas, Abastible, Gasco y administraciones de condominios.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Tecnología Sin Romper</span>
                <h3 class="service-title">Sellado Polimérico Alemán</h3>
                <p class="service-text">
                    Único instalador SEC especializado en la inyección de Prodoral R6-1 en cañerías interiores, garantizando 0 roturas de cerámicas ni pisos.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Respaldo Total</span>
                <h3 class="service-title">Garantía Escrita de 3 Años</h3>
                <p class="service-text">
                    Compromiso de calidad por escrito en cada intervención técnica, respaldado por más de 30 años de prestigio intachable en Santiago.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
