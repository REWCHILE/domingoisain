<?php
// views/reparacion-de-calefont.php - Reparación y Mantención de Calefonts en Santiago
?>

<!-- Hero Reparación de Calefont -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Servicio Técnico Multimarca SEC</span>
            <h1 class="hero-title">
                Reparación de <span class="gradient-text">Calefont en Santiago</span> · Atención el Mismo Día
            </h1>
            <p class="hero-lead">
                Reparamos calefonts y calderas de tiro natural, forzado e ionizados. <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia, diagnostica la falla en terreno y reemplaza repuestos originales con garantía y certificación de seguridad.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Junkers, Splendid, Mademsa, Rheem, Trotter, Neckar</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Repuestos originales y calibración de gas</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía por escrito de cada reparación</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito reparar mi calefont.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Cotizar reparación de calefont por WhatsApp">
                    <span>Cotizar Reparación de Calefont</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-calefont.webp" alt="Técnico de calefonts Domingo Isaín revisando componentes electrónicos" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Especialista Autorizado SEC</div>
                        <div class="badge-info-sub">Calibración segura y prueba de combustión</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marcas y Servicios -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Cobertura Integral</span>
            <h2 class="section-title">Servicio Técnico Especializado en <span class="gradient-text">Todas las Marcas</span></h2>
            <p class="section-desc">
                Contamos con stock de repuestos y experiencia en los modelos más utilizados en Chile:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-cyan">Junkers / Bosch</span>
                <h3 class="service-title">Calefonts Ionizados y Tiro Forzado</h3>
                <p class="service-text">
                    Diagnóstico de códigos de error (EA, E9, F0), mantención de serpentín, cambio de electroválvulas y bujías de encendido.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Splendid / Mademsa</span>
                <h3 class="service-title">Modelos Tradicionales y Digitales</h3>
                <p class="service-text">
                    Regulación de presión de gas, reemplazo de membranas y microswitch, limpieza de quemadores y ajuste de tiro de evacuación.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Rheem / Trotter / Neckar</span>
                <h3 class="service-title">Calderas y Termos de Alta Capacidad</h3>
                <p class="service-text">
                    Mantención integral preventiva, descalcificación química no corrosiva y verificación de fugas de gas bajo norma DS66.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
