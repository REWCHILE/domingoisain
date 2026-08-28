<?php
// views/gasfiter-certificado.php - Acreditación SEC y Cobertura
?>

<section class="hero-section" style="padding-top: 40px; padding-bottom: 50px;">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Superintendencia de Electricidad y Combustibles</span>
            <h1 class="hero-title">
                Gasfíter Instalador <span class="gradient-text">Certificado y Autorizado SEC Clase 3</span>
            </h1>
            <p class="hero-lead">
                No pongas en riesgo a tu familia con gasfíteres no calificados. Domingo Isaín Plaza Caamaño (RUT 12.738.961-6) cuenta con licencia oficial SEC vigente para certificar obras, normalizar sellos y realizar reparaciones seguras.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Registro oficial verificable en sec.cl</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Firma autorizada para certificados DS66</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Cobertura en todo el Gran Santiago</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito un gasfiter certificado SEC para una inspección.') ?>" class="btn-primary" target="_blank">
                    <span>Solicitar Instalador Certificado</span>
                </a>
                <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                    <span>Validar RUT en la SEC</span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp" alt="Licencia SEC Domingo Isaín" class="hero-main-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios de Contratar un Instalador Autorizado -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Seguridad y Respaldo Legal</span>
            <h2 class="section-title">¿Por Qué Exigir la <span class="gradient-text">Licencia SEC</span>?</h2>
            <p class="section-desc">
                La normativa chilena es estricta: solo los instaladores autorizados por la SEC pueden intervenir redes de gas y emitir certificados válidos.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-green">Protección Familiar</span>
                <h3 class="service-title">Cero Riesgos de Explosión o Asfixia</h3>
                <p class="service-text">Los trabajos ejecutados por un profesional certificado garantizan que las presiones, ventilaciones y sellos cumplan rigurosamente con los estándares de vida y seguridad.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Validez Legal</span>
                <h3 class="service-title">Recepción de Obras y Sello Verde</h3>
                <p class="service-text">Las empresas distribuidoras (Metrogas, Lipigas, Abastible, Gasco) solo reponen el suministro si el informe y la prueba manométrica están firmados por un instalador SEC vigente.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-amber">Seguros de Hogar</span>
                <h3 class="service-title">Cobertura de Pólizas de Seguro</h3>
                <p class="service-text">En caso de siniestro, las compañías de seguros exigen acreditar que las instalaciones de gas fueron intervenidas por instaladores autorizados.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
