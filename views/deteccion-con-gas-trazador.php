<?php
// views/deteccion-con-gas-trazador.php - Detección Molecular con Gas Trazador (N2/H2)
?>

<!-- Hero Detección con Gas Trazador -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-cyan" style="margin-bottom: 16px;">Tecnología Molecular No Invasiva</span>
            <h1 class="hero-title">
                Detección con <span class="gradient-text">Gas Trazador (N2/H2)</span> · Precisión Milimétrica
            </h1>
            <p class="hero-lead">
                Ubicamos las microfugas de gas y agua más difíciles e invisibles mediante gas trazador de hidrógeno (formador al 5% en nitrógeno). La molécula más diminuta de la naturaleza escapa por cualquier fisura microscópica y es localizada en la superficie con sensores de alta sensibilidad.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Mezcla 100% inerte, no tóxica y no inflamable</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Detecta fugas bajo radier, muros y jardines</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Localización exacta sin romper pisos</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar una detección con gas trazador.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar detección con gas trazador por WhatsApp">
                    <span>Solicitar Detección con Gas Trazador</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-gas-trazador.webp" alt="Inspección de fugas con cilindro de gas trazador N2 H2" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Gas Trazador Molecular N2/H2</div>
                        <div class="badge-info-sub">Norma DIN EN ISO 20484 · Máxima precisión</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cómo Funciona el Gas Trazador -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Principio Científico de Detección</span>
            <h2 class="section-title">¿Por Qué el <span class="gradient-text">Gas Trazador</span> es el Método #1?</h2>
            <p class="section-desc">
                Explicación técnica del proceso de detección molecular que realiza Domingo Isaín en Santiago:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Paso 1: Presurización</span>
                <h3 class="service-title">Inyección del Gas Formador</h3>
                <p class="service-text">
                    Vaciamos el tramo de cañería e inyectamos la mezcla trazadora (95% Nitrógeno / 5% Hidrógeno) a presión controlada de trabajo.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Paso 2: Difusión</span>
                <h3 class="service-title">Escape Molecular por la Microfisura</h3>
                <p class="service-text">
                    Al ser el hidrógeno el elemento más liviano y pequeño del universo, atraviesa el concreto, losas, baldosas y tierra verticalmente en minutos.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Paso 3: Captación</span>
                <h3 class="service-title">Lectura Digital con Sensor Sniffer</h3>
                <p class="service-text">
                    Recorremos la superficie con una sonda molecular ultrasensible que emite una señal sonora y visual graduada en PPM (partes por millón), marcando el punto exacto.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
