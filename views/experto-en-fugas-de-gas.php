<?php
// views/experto-en-fugas-de-gas.php - Experto y Perito en Fugas de Gas en Santiago
?>

<!-- Hero Experto en Fugas de Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Máxima Experiencia en Chile</span>
            <h1 class="hero-title">
                Experto en <span class="gradient-text">Fugas de Gas en Santiago</span> · Peritaje y Sellado SEC
            </h1>
            <p class="hero-lead">
                Más de 30 años de especialización exclusiva en diagnóstico, peritaje y reparación de fugas de gas complejas. <strong>Domingo Isaín Plaza Caamaño</strong> (RUT 12.738.961-6) ofrece soluciones definitivas para comunidades de edificios, casas particulares y empresas con tecnología alemana no invasiva.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Peritaje técnico para condominios y aseguradoras</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Sellado garantizado por 3 años sin picar pisos</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Autorización SEC Clase 3 oficial vigente</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito la asesoría experta para un peritaje / solución de fuga de gas.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Consultar al experto Domingo Isaín por WhatsApp">
                    <span>Consultar al Experto</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-especialista-fugas.webp" alt="Experto en fugas de gas Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza Caamaño</div>
                        <div class="badge-info-sub">Perito Técnico en Redes de Gas · 30+ Años</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Por Qué Acudir al Experto -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Solución Definitiva a Casos Complejos</span>
            <h2 class="section-title">¿Cuándo Necesitas a un <span class="gradient-text">Experto en Fugas de Gas</span>?</h2>
            <p class="section-desc">
                Casos críticos donde otros profesionales no han podido dar solución o se requiere respaldo técnico de alto nivel:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">Caso #1</span>
                <h3 class="service-title">Fugas Fantasma o Intermitentes</h3>
                <p class="service-text">
                    Olores a gas ocasionales que aparecen en ciertas horas o al encender determinados artefactos y que mediciones básicas no logran aislar.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Caso #2</span>
                <h3 class="service-title">Sello Rojo en Edificios y Condominios</h3>
                <p class="service-text">
                    Comunidades de copropietarios con medidores sellados por la SEC o distribuidora que requieren peritaje formal, prueba hermética manométrica y normalización rápida.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Caso #3</span>
                <h3 class="service-title">Cañerías Bajo Cerámicas Caras o Mármol</h3>
                <p class="service-text">
                    Inmuebles donde picar el piso implica pérdidas millonarias en reposición de terminaciones. El sellado interior Prodoral R6-1 garantiza 0 roturas.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
