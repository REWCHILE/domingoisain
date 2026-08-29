<?php
// views/gasfiter-calefont.php - Gasfíter de Calefonts y Calderas en Santiago
?>

<!-- Hero Gasfíter Calefont -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Especialista en Calefonts y Calderas</span>
            <h1 class="hero-title">
                Gasfíter de <span class="gradient-text">Calefont en Santiago</span> · Instalación y Reparación SEC
            </h1>
            <p class="hero-lead">
                ¿Tu calefont no enciende, se apaga a los minutos, gotea o emite olor a gas? <strong>Domingo Isaín Plaza Caamaño</strong>, Instalador Autorizado SEC Clase 3 con 30+ años de experiencia, realiza diagnóstico técnico en terreno, cambio de repuestos originales y calibración segura multimarca.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Junkers, Splendid, Mademsa, Rheem, Trotter</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Repuestos normados y ajuste de combustión</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Atención de urgencia el mismo día</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito revisar o reparar mi calefont.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Cotizar reparación de calefont por WhatsApp">
                    <span>Solicitar Técnico de Calefont</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar directamente al 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-calefont.webp" alt="Mantención y reparación de calefont por gasfíter SEC Domingo Isaín" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Servicio Técnico Multimarca</div>
                        <div class="badge-info-sub">Giro forzado, tiro natural e ionizados</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fallas Más Frecuentes en Calefonts -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Diagnóstico Técnico Rápido</span>
            <h2 class="section-title">Fallas Comunes que <span class="gradient-text">Solucionamos en el Día</span></h2>
            <p class="section-desc">
                No permitas que una mala combustión o fuga de monóxido ponga en riesgo tu hogar:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">Falla #1</span>
                <h3 class="service-title">No Enciende o Chispea sin Prender</h3>
                <p class="service-text">
                    Revisión de servoválvula, microswitch, sensores de flujo, electrodos de encendido y módulo electrónico para restablecer la llama al instante.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Falla #2</span>
                <h3 class="service-title">Se Apaga Durante la Ducha</h3>
                <p class="service-text">
                    Ajuste o reemplazo del sensor de sobrecalentamiento y sensor de tiro de gases (evacuación), impidiendo cortes intempestivos de agua caliente.
                </p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Falla #3</span>
                <h3 class="service-title">Goteo de Agua o Pérdida de Presión</h3>
                <p class="service-text">
                    Cambio de membrana, empaquetaduras de silicona de alta temperatura y desincrustación de serpentín de cobre para recuperar el caudal óptimo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
