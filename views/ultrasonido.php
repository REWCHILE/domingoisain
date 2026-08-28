<?php
// views/ultrasonido.php - Detección con Ultrasonido, Geófono y Gas Trazador
?>

<section class="hero-section" style="padding-top: 40px; padding-bottom: 50px;">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-cyan" style="margin-bottom: 16px;">Diagnóstico No Invasivo de Vanguardia</span>
            <h1 class="hero-title">
                Detección de Fugas con <span class="gradient-text">Geófono y Gas Trazador</span>
            </h1>
            <p class="hero-lead">
                Ubicamos fugas subterráneas de agua y gas ocultas bajo radieres, muros, jardines o cerámicas sin picar a ciegas. Combinamos análisis acústico digital de frecuencia y detección molecular de gas trazador.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Localización con precisión milimétrica</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Evita romper pisos y áreas verdes</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Gases inocuos y seguros para el hogar</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar una detección de fuga con geófono / gas trazador.') ?>" class="btn-primary" target="_blank">
                    <span>Solicitar Detección Electrónica</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-destapes.webp" alt="Geófono sónico digital y gas trazador" class="hero-main-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dos Tecnologías de Detección -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Instrumental Especializado</span>
            <h2 class="section-title">Nuestra Tecnología de <span class="gradient-text">Inspección Acústica y Molecular</span></h2>
            <p class="section-desc">
                Conoce las dos herramientas tecnológicas clave que utiliza Domingo Isaín para hallar escapes invisibles:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Tecnología #1</span>
                <h3 class="service-title">Gas Trazador Molecular (N2 / H2)</h3>
                <p class="service-text">
                    Inyectamos una mezcla de 95% Nitrógeno y 5% Hidrógeno (gas formador inerte, no tóxico y no inflamable). La molécula de Hidrógeno es la más pequeña del universo y escapa por la más mínima microfisura, siendo detectada por una sonda sensorial de alta sensibilidad en la superficie.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Tecnología #2</span>
                <h3 class="service-title">Geófono Sónico de Alta Frecuencia</h3>
                <p class="service-text">
                    Amplificador acústico digital con filtros de sonido que aísla los ruidos ambientales y amplifica el sonido característico del flujo de agua o gas escapando a presión bajo tierra o losas de hormigón.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
