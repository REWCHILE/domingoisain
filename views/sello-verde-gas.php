<?php
// views/sello-verde-gas.php - Tramitación y Regularización de Sello Verde de Gas
?>

<!-- Hero Sello Verde Gas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Certificación Oficial SEC DS66</span>
            <h1 class="hero-title">
                Sello Verde de <span class="gradient-text">Gas en Santiago</span> · Regularización de Sellos Rojos
            </h1>
            <p class="hero-lead">
                ¿Tu edificio, casa o departamento obtuvo Sello Rojo o Amarillo en la inspección periódica de gas? <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia, normaliza tus instalaciones y tramita el Sello Verde definitivo.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Levantamiento de observaciones SEC y distribuidoras</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Pruebas de hermeticidad y adecuación de ventilaciones</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía de 3 años y asesoría en re-inspección</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito regularizar mi instalación para obtener el Sello Verde de gas.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar regularización para Sello Verde por WhatsApp">
                    <span>Tramitar Sello Verde de Gas</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Obtención y regularización de Sello Verde de gas por Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Certificación SEC Garantizada</div>
                        <div class="badge-info-sub">Aprobación técnica de instalaciones residenciales</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pasos para Obtener Sello Verde -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Ruta a la Aprobación</span>
            <h2 class="section-title">¿Cómo Convertir un <span class="gradient-text">Sello Rojo en Sello Verde</span>?</h2>
            <p class="section-desc">
                Proceso ágil y normado para recuperar la tranquilidad y el suministro legal:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Paso 1: Auditoría</span>
                <h3 class="service-title">Revisión del Informe de Rechazo</h3>
                <p class="service-text">
                    Analizamos las fallas tipificadas por la entidad certificadora (fugas en cañerías, falta de ventilación inferior/superior, o ductos no reglamentarios).
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Paso 2: Corrección</span>
                <h3 class="service-title">Subsanación Técnica y Sellado</h3>
                <p class="service-text">
                    Ejecutamos las reparaciones necesarias: sellado de cañerías con Prodoral R6-1 sin romper pisos, cambio de llaves de paso certificadas y adecuación de ductos.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Paso 3: Certificación</span>
                <h3 class="service-title">Re-Inspección y Sello Verde</h3>
                <p class="service-text">
                    Emitimos el certificado oficial de hermeticidad y coordinamos la re-inspección para la colocación del distintivo Sello Verde en tu instalación.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
