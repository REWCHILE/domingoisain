<?php
// views/instalador-sec.php - Regularización de Sello Rojo y Normativa DS66
?>

<section class="hero-section">
    <div class="hero-glow hero-glow-2"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="emergency-pill">
                <span class="pulse-dot"></span>
                Especialista en Levantamiento de Sello Rojo
            </span>
            <h1 class="hero-title">
                Regularización de <span class="gradient-text">Sellos Rojos y Amarillos SEC</span>
            </h1>
            <p class="hero-lead">
                ¿Tu edificio o vivienda fue calificada con Sello Rojo en la inspección periódica de gas? Realizamos el diagnóstico técnico, corrección de anomalías y tramitamos la obtención de tu <strong>Sello Verde</strong> conforme al Decreto Supremo Nº 66.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Solución de fugas y ventilaciones</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Informe técnico para certificadoras</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Pruebas de hermeticidad manométricas</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo Sello Rojo de gas y necesito regularizar mi instalación.') ?>" class="btn-primary" target="_blank">
                    <span>Regularizar Sello Rojo Ahora</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <!-- Columna Visual: Slider de Certificados y Diplomas Oficiales -->
        <div class="hero-visual-pane">
            <div class="hero-visual-card" id="cert-slider-card">
                <div class="hero-slider-wrapper">
                    <div class="hero-slider-track" id="cert-slider-track">
                        <!-- Slide 1: Hermeticidad SOCATEC -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">📜 SOCATEC · Hermeticidad DS66</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-hermeticidad.webp" alt="Certificado Prueba Hermeticidad SOCATEC" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>

                        <!-- Slide 2: ChileValora ECERLAB -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🏆 ChileValora · Gasfíter en Fugas</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.webp" alt="Certificado ChileValora ECERLAB Gasfíter en Fugas" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>

                        <!-- Slide 3: Euroinnova Ingeniería Química -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🎓 Euroinnova · Ingeniería Química</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.webp" alt="Diploma Experto en Ingeniería Química Euroinnova" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>

                        <!-- Slide 4: Claustro Gómez Ingeniería Industrial -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🏛️ Claustro Gómez · Ing. Industrial</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.webp" alt="Diploma Técnico Superior en Ingeniería Industrial" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>

                        <!-- Slide 5: Licencia SEC Clase 3 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🛡️ Licencia Oficial SEC Clase 3</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp" alt="Licencia SEC Gasfíter Autorizado" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>

                        <!-- Slide 6: QR Validación SEC -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">📱 Código QR de Validación SEC</span>
                            <img src="<?= BASE_URL ?>/assets/images/qr-sec-oficial.webp" alt="Código QR Validación SEC Domingo Isaín" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 14px;">
                        </div>
                    </div>

                    <!-- Botones de Navegación -->
                    <button type="button" class="hero-slider-btn hero-slider-prev" id="cert-slider-prev" aria-label="Certificado anterior">❮</button>
                    <button type="button" class="hero-slider-btn hero-slider-next" id="cert-slider-next" aria-label="Certificado siguiente">❯</button>

                    <!-- Paginación Dots -->
                    <div class="hero-slider-dots" id="cert-slider-dots" role="group" aria-label="Controles de certificados">
                        <button type="button" class="hero-slider-dot active" data-slide="0" aria-label="Certificado 1" aria-current="true"><span class="dot-inner"></span></button>
                        <button type="button" class="hero-slider-dot" data-slide="1" aria-label="Certificado 2"><span class="dot-inner"></span></button>
                        <button type="button" class="hero-slider-dot" data-slide="2" aria-label="Certificado 3"><span class="dot-inner"></span></button>
                        <button type="button" class="hero-slider-dot" data-slide="3" aria-label="Certificado 4"><span class="dot-inner"></span></button>
                        <button type="button" class="hero-slider-dot" data-slide="4" aria-label="Certificado 5"><span class="dot-inner"></span></button>
                        <button type="button" class="hero-slider-dot" data-slide="5" aria-label="Certificado 6"><span class="dot-inner"></span></button>
                    </div>
                </div>

                <!-- Insignia Inferior Flotante / Acreditación Oficial SEC -->
                <div class="hero-floating-badge sec-credential-card">
                    <a href="<?= SEC_PORTAL_URL ?>" target="_blank" rel="noopener noreferrer" class="sec-qr-anchor" title="Escanear con tu cámara o hacer clic para verificar en la SEC" aria-label="Código QR oficial de verificación SEC">
                        <div class="sec-qr-container">
                            <picture>
                                <source media="(max-width: 640px)" srcset="<?= BASE_URL ?>/assets/images/qr-sec-oficial-mobile.webp" type="image/webp" width="110" height="110">
                                <img src="<?= BASE_URL ?>/assets/images/qr-sec-oficial.webp" alt="Código QR Validación SEC Domingo Isaín" width="135" height="135" class="sec-qr-image" loading="lazy" decoding="async">
                            </picture>
                            <span class="sec-qr-hint">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                                Escanear QR
                            </span>
                        </div>
                    </a>
                    <div class="sec-badge-content">
                        <div class="sec-badge-header-row">
                            <span class="sec-status-pill">
                                <span class="sec-pulse-dot"></span>
                                Licencia Activa SEC
                            </span>
                            <span class="sec-clase-tag">Clase 3</span>
                        </div>
                        <div class="badge-info-title">Domingo Isaín Plaza Caamaño</div>
                        <div class="badge-info-sub">Instalador Autorizado de Gas · RUT: 12.738.961-6</div>
                        <a href="<?= SEC_PORTAL_URL ?>" target="_blank" rel="noopener noreferrer" class="btn-verify-sec-action" title="Abrir portal oficial de validación SEC">
                            <span>Verificar en Portal SEC</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Causas Comunes de Sello Rojo y Soluciones -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Diagnóstico y Corrección</span>
            <h2 class="section-title">¿Cuáles Son las <span class="gradient-text">Fallas Más Frecuentes</span> del Sello Rojo?</h2>
            <p class="section-desc">
                Resolvemos cada observación técnica señalada por la empresa inspectora:
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge badge-amber">Falla Crítica #1</span>
                <h3 class="service-title">Microfugas en Redes Interiores</h3>
                <p class="service-text">Caída de presión en manómetro. La solucionamos sin picar mediante sellado polimérico alemán Prodoral R6-1 garantizado.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-cyan">Falla Crítica #2</span>
                <h3 class="service-title">Ventilaciones Insuficientes o Tapadas</h3>
                <p class="service-text">Adecuamos e instalamos celosías superiores e inferiores reglamentarias para evitar acumulación de monóxido de carbono.</p>
            </div>

            <div class="service-card">
                <span class="service-badge badge-green">Falla Crítica #3</span>
                <h3 class="service-title">Ductos de Evacuación Defectuosos</h3>
                <p class="service-text">Reemplazo de tubos corrugados no autorizados por ductos lisos metálicos con tiro adecuado y sombrerete según norma SEC.</p>
            </div>
        </div>
    </div>
<!-- Respaldo de Ingeniería y Títulos Universitarios -->
<section class="section-padding" style="border-top: 1px solid var(--border-subtle); background: linear-gradient(135deg, rgba(0, 136, 204, 0.08), rgba(16, 185, 129, 0.08)); text-align: center;">
    <div class="section-container" style="max-width: 900px;">
        <span class="section-pill">Solvencia Técnica de Nivel Superior</span>
        <h2 class="section-title">Formación en la <span class="gradient-text">Pontificia Universidad Católica</span> y Postgrados en Ingeniería</h2>
        <p class="section-desc" style="margin-bottom: 28px;">
            Domingo Isaín cuenta con 10 títulos y acreditaciones oficiales (PUC, SEC, ChileValora, Euroinnova y Claustro Gómez) para garantizar que tu instalación de gas quede regularizada bajo norma legal y con 0% de riesgo.
        </p>
        <a href="<?= BASE_URL ?>/gasfiter-certificado/" class="btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
            <span>Ver los 10 Diplomas y Certificaciones en Detalle</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
    </div>
</section>

<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
