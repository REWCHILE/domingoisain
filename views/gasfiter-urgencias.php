<?php
// views/gasfiter-urgencias.php - Gasfíter de Urgencias 24 Horas en Santiago
?>

<!-- Hero Gasfíter de Urgencias -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1" style="background: rgba(239, 68, 68, 0.15);"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="background: rgba(239, 68, 68, 0.2); border-color: rgba(239, 68, 68, 0.4); color: #fca5a5; margin-bottom: 16px;">
                🚨 Urgencias de Gas y Agua 24 Horas
            </span>
            <h1 class="hero-title">
                Gasfíter de <span class="gradient-text">Urgencias en Santiago</span> · Respuesta Inmediata 24/7
            </h1>
            <p class="hero-lead">
                ¿Olor a gas intenso, cañería rota, corte de medidor o inundación de agua? <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia, acude de inmediato para contener el riesgo y reparar la avería en el acto.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Respuesta prioritaria en toda la RM</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Equipamiento de contención y sellado en el día</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificados oficiales de hermeticidad DS66</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('URGENCIA: Tengo una emergencia de gas/agua y necesito atención inmediata.') ?>" class="btn-primary" style="background: linear-gradient(135deg, #ef4444, #dc2626); box-shadow: 0 10px 25px rgba(239,68,68,0.4);" target="_blank" rel="noopener noreferrer" aria-label="Solicitar gasfíter de urgencias por WhatsApp">
                    <span>🚨 Solicitar Urgencia Inmediata</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al teléfono de urgencias 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-especialista-fugas.webp" alt="Atención de emergencias de gas por Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Línea Directa de Urgencias</div>
                        <div class="badge-info-sub">Atención 24 Horas · Domingos y Festivos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Protocolo de Emergencias -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento Seguro</span>
            <h2 class="section-title">¿Cómo Proceder ante una <span class="gradient-text">Emergencia de Gas</span>?</h2>
            <p class="section-desc">
                Sigue estas instrucciones de seguridad mientras nuestro equipo técnico se desplaza a tu ubicación:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">1. Seguridad</span>
                <h3 class="service-title">Corta la Llave de Paso General</h3>
                <p class="service-text">
                    Cierra la válvula del medidor o cilindro inmediatamente. No enciendas fósforos, interruptores eléctricos ni timbres.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">2. Ventilación</span>
                <h3 class="service-title">Abre Puertas y Ventanas</h3>
                <p class="service-text">
                    Genera corriente de aire para evacuar la acumulación de gas combustible o monóxido de carbono al exterior.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">3. Intervención</span>
                <h3 class="service-title">Llama al Especialista SEC</h3>
                <p class="service-text">
                    Comunícate al <strong>9 4987 7316</strong>. Domingo Isaín acudirá con instrumental de detección para neutralizar la fuga de raíz.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
