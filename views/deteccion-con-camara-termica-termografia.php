<?php
// views/deteccion-con-camara-termica-termografia.php - Inspección Termográfica Infrarroja
?>

<!-- Hero Detección con Cámara Térmica -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-cyan" style="margin-bottom: 16px;">Inspección Térmica Infrarroja</span>
            <h1 class="hero-title">
                Detección con <span class="gradient-text">Cámara Térmica y Termografía</span> en Santiago
            </h1>
            <p class="hero-lead">
                Inspeccionamos filtraciones de agua caliente, fugas en losas radiantes, humedad oculta en tabiques y pérdidas energéticas mediante cámaras termográficas de alta resolución. Visualizamos el mapa de calor de las cañerías empotradas sin romper ninguna superficie.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Mapa térmico infrarrojo de alta resolución</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Ideal para losa radiante y agua caliente</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Diagnóstico no invasivo sin perforar muros</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar una inspección con cámara térmica / termografía.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar inspección termográfica por WhatsApp">
                    <span>Solicitar Inspección Térmica</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-camara-termica.webp" alt="Inspección de fugas con cámara termográfica infrarroja" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Termografía Infrarroja Digital</div>
                        <div class="badge-info-sub">Identificación de gradientes térmicos ocultos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aplicaciones de la Cámara Térmica -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Diagnóstico Avanzado</span>
            <h2 class="section-title">Principales Usos de la <span class="gradient-text">Termografía en Gasfitería</span></h2>
            <p class="section-desc">
                La cámara térmica revela anomalías térmicas imposibles de ver a simple vista:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Aplicación #1</span>
                <h3 class="service-title">Calefacción por Losa Radiante</h3>
                <p class="service-text">
                    Mapeamos el circuito completo de serpentines bajo el piso para localizar el punto exacto de pérdida de agua caliente o baja de presión en la caldera.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Aplicación #2</span>
                <h3 class="service-title">Cañerías de Agua Caliente Ocultas</h3>
                <p class="service-text">
                    El agua caliente genera un cono térmico en el muro o losa que la cámara termográfica detecta con precisión, delimitando la rotura sin picar toda la pared.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Aplicación #3</span>
                <h3 class="service-title">Humedad y Filtraciones en Tabiques</h3>
                <p class="service-text">
                    La evaporación de agua provoca un enfriamiento superficial relativo que la cámara destaca en tonos fríos, identificando filtraciones antes de que aparezca moho.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
