<?php
// views/especialista-en-fugas-de-gas.php - Especialista en Fugas de Gas en Santiago
?>

<!-- Hero Específico de Especialista en Fugas de Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Especialista Autorizado SEC Clase 3</span>
            <h1 class="hero-title">
                Especialista en <span class="gradient-text">Fugas de Gas en Santiago</span> · Sellado Sin Romper
            </h1>
            <p class="hero-lead">
                Soy <strong>Domingo Isaín Plaza Caamaño</strong> (RUT 12.738.961-6), especialista en diagnóstico milimétrico y reparación definitiva de fugas de gas subterráneas y empotradas. Aplicamos tecnología alemana <strong>Prodoral R6-1</strong> para sellar cañerías desde el interior, evitando picar pisos, cerámicas ni muros.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>30+ años de experiencia técnica</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía de 3 años por escrito</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificados oficiales norma DS66</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito consultar con un especialista en fugas de gas.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Contactar al especialista Domingo Isaín por WhatsApp">
                    <span>Contactar al Especialista</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-especialista-fugas.webp" alt="Domingo Isaín Especialista en Fugas de Gas SEC" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza Caamaño</div>
                        <div class="badge-info-sub">Licencia SEC Clase 3 · RUT 12.738.961-6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Informativa: ¿Por Qué Acudir a un Especialista Certificado? -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Seguridad y Respaldo Legal</span>
            <h2 class="section-title">¿Por Qué Confiar en un <span class="gradient-text">Especialista Autorizado SEC</span>?</h2>
            <p class="section-desc">
                Una fuga de gas no admite improvisaciones. Conoce las garantías técnicas y legales que solo un especialista certificado te entrega:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Diagnóstico Certero</span>
                <h3 class="service-title">Instrumental Digital Calibrado</h3>
                <p class="service-text">
                    Utilizamos manómetros de alta precisión para medir caídas de presión en milibares, detectores acústicos de ultrasonido y gas trazador molecular, detectando la microfisura exacta sin adivinanzas.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Tecnología Sin Romper</span>
                <h3 class="service-title">Sellado Polimérico Alemán</h3>
                <p class="service-text">
                    Inyectamos polímero Prodoral R6-1 homologado (DIN EN 13090 / DVGW). Sella cañerías de cobre, fierro y acero desde adentro, ahorrando hasta un 70% en costos de albañilería y terminaciones.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Validez Oficial</span>
                <h3 class="service-title">Certificación DS66 y Sello Verde</h3>
                <p class="service-text">
                    Emitimos informes y certificados oficiales de hermeticidad válidos ante Metrogas, Lipigas, Abastible, Gasco y administraciones de edificios para rehabilitar el suministro cortado.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
