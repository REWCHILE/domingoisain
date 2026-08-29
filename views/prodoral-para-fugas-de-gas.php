<?php
// views/prodoral-para-fugas-de-gas.php - Sellado de Fugas con Polímero Alemán Prodoral R6-1
?>

<!-- Hero Prodoral para Fugas de Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Tecnología Alemana Homologada</span>
            <h1 class="hero-title">
                Polímero <span class="gradient-text">Prodoral R6-1</span> para Sellado de Fugas de Gas Sin Romper
            </h1>
            <p class="hero-lead">
                <strong>Prodoral R6-1</strong> es el sistema alemán líder en el mundo para la rehabilitación interior de tuberías de gas (cobre, acero y fierro). Sella microfugas y porosidades desde adentro, evitando romper cerámicas, pisos flotantes ni muros. Garantía escrita de 3 años.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Norma europea DIN EN 13090 y sello DVGW</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Polímero elástico permanente (no se cristaliza)</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Ahorro del 70% en albañilería y tiempo</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar un sellado de gas con Prodoral R6-1 sin romper.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Cotizar sellado Prodoral por WhatsApp">
                    <span>Cotizar Sellado Prodoral R6-1</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente a Domingo Isaín">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-prodoral.webp" alt="Inyección de polímero sellante Prodoral R6-1" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Prodoral R6-1 Original</div>
                        <div class="badge-info-sub">Certificación Oficial DVGW Alemania</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Características Técnicas de Prodoral R6-1 -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Ficha Técnica y Ventajas</span>
            <h2 class="section-title">¿Por Qué <span class="gradient-text">Prodoral R6-1</span> es Superior?</h2>
            <p class="section-desc">
                Conoce las propiedades mecánicas y de durabilidad que convierten a Prodoral en la solución definitiva:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">Propiedad Exclusiva</span>
                <h3 class="service-title">Elasticidad Permanente Antisismo</h3>
                <p class="service-text">
                    A diferencia de resinas convencionales que se endurecen y se quiebran con sismos o vibraciones de tráfico, Prodoral R6-1 conserva una consistencia elástica permanente tipo silicona industrial que absorbe movimientos estructurales sin fisurarse.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Tiempo Récord</span>
                <h3 class="service-title">Rehabilitación en Menos de 2 Horas</h3>
                <p class="service-text">
                    En departamentos pequeños el proceso toma solo 30 a 45 minutos, y en casas completas un máximo de 2 horas. El suministro de gas queda habilitado y certificado el mismo día de la intervención.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Respaldo Legal</span>
                <h3 class="service-title">Garantía por Escrito de 3 Años</h3>
                <p class="service-text">
                    Entregamos informe técnico y certificado oficial de hermeticidad firmado por Domingo Isaín como Instalador SEC Clase 3 (RUT 12.738.961-6), completamente válido ante Metrogas, Gasco, Lipigas y Abastible.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
