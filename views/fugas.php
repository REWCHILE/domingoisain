<?php
// views/fugas.php - Landing especializada para /fugas/ y /fuga-de-gas/
?>

<!-- Hero Específico de Fugas -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-amber" style="margin-bottom: 16px;">Especialidad #1 en Santiago</span>
            <h1 class="hero-title">
                Reparación y Sellado de <span class="gradient-text">Fugas de Gas Sin Romper</span>
            </h1>
            <p class="hero-lead">
                ¿Sientes olor a gas o la distribuidora te suspendió el medidor? En <strong>Domingo Isaín</strong> detectamos la fuga con geófono ultrasónico y sellamos la cañería interior con polímero alemán <strong>Prodoral R6-1</strong>. Sin demoler muros ni levantar pisos.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Listo en 30 min a 2 horas máx.</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía de 3 años por escrito</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificado oficial DS66 para Metrogas</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una fuga de gas y necesito atención técnica urgente.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Solicitar atención técnica urgente de fugas de gas">
                    <span>Solicitar Atención Urgente</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" aria-label="Llamar a Domingo Isaín al +56 9 4987 7316">
                    <span>Llamar al <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <div class="hero-visual-pane">
            <div class="hero-visual-card">
                <div class="hero-image-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/hero-prodoral.webp" alt="Sellado de fuga de gas con Prodoral R6-1" class="hero-main-img" width="800" height="600" fetchpriority="high">
                </div>
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Tecnología Alemana Prodoral®</div>
                        <div class="badge-info-sub">DIN EN 13090 · Aprobación DVGW</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso Paso a Paso de Sellado -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Procedimiento Técnico en Tiempo Récord</span>
            <h2 class="section-title">¿Cómo Funciona el Sellado <span class="gradient-text">Sin Romper Muros</span>?</h2>
            <p class="section-desc">
                Un método limpio, seguro y normado que rehabilita tus tuberías de gas en 4 etapas ejecutadas por Domingo Isaín:
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--tech-cyan); margin-bottom: 10px;">01</div>
                <h3 class="service-title">Prueba de Presión Inicial</h3>
                <p class="service-text">Medimos la caída de presión en milibares con manómetros digitales para determinar la magnitud del escape según el protocolo DS66.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--tech-cyan); margin-bottom: 10px;">02</div>
                <h3 class="service-title">Limpieza y Desengrase</h3>
                <p class="service-text">Purgamos la cañería con aire a presión para eliminar residuos de polvo, sarro o aceite acumulado en el interior de los tubos.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--prodoral-amber); margin-bottom: 10px;">03</div>
                <h3 class="service-title">Inyección Prodoral R6-1</h3>
                <p class="service-text">Inyectamos el polímero líquido alemán a presión que recorre todas las uniones, soldaduras y porosidades, sellando herméticamente por dentro.</p>
            </div>

            <div class="service-card">
                <div style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--sec-green); margin-bottom: 10px;">04</div>
                <h3 class="service-title">Certificación y Entrega</h3>
                <p class="service-text">Realizamos la prueba de hermeticidad final con resultado 0 fuga y emitimos el Certificado Oficial de Hermeticidad firmado.</p>
            </div>
        </div>

        <!-- Ficha Técnica Exclusiva: Elasticidad Antivibraciones y Rapidez -->
        <div style="margin-top: 35px; background: rgba(6, 9, 15, 0.9); border: 1.5px solid var(--border-glow); border-radius: var(--radius-lg); padding: 28px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; align-items: center;">
                <div>
                    <span class="service-badge badge-amber" style="margin-bottom: 10px;">Propiedad Técnica Exclusiva</span>
                    <h3 style="font-family: var(--font-display); font-size: 1.4rem; color: #ffffff; margin-bottom: 12px;">
                        Polímero Elástico No Cristalizable: <span class="gradient-text">Resistencia Sísmica y Antivibraciones</span>
                    </h3>
                    <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                        A diferencia de resinas baratas que se secan de forma rígida y se quiebran con el primer temblor, <strong>Prodoral R6-1 no se seca ni se cristaliza</strong>: conserva una consistencia elástica permanente (similar a una silicona de alta densidad, verificado en terreno por más de 5 años).
                    </p>
                    <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
                        Esto le permite absorber vibraciones estructurales y sismos chilenos sin fisurarse jamás, cumpliendo la estricta normativa europea <strong>DIN EN 13090</strong>.
                    </p>
                </div>
                <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 20px;">
                    <h4 style="font-family: var(--font-display); font-size: 1.1rem; color: var(--brand-cyan); margin-bottom: 14px;">⏱️ Tiempos de Ejecución Récord</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #cbd5e1;">
                        <li style="display: flex; align-items: center; gap: 8px;">
                            <span style="color: var(--sec-green); font-size: 1.1rem;">⚡</span>
                            <span><strong>Departamentos / Tramos chicos:</strong> Solo 30 a 45 minutos.</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;">
                            <span style="color: var(--sec-green); font-size: 1.1rem;">🏠</span>
                            <span><strong>Casas estándar:</strong> Máximo 2 horas de trabajo total.</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;">
                            <span style="color: var(--sec-green); font-size: 1.1rem;">🛠️</span>
                            <span><strong>Dedicación exclusiva:</strong> Domingo Isaín y su equipo se dedican mayoritariamente a este procedimiento con maquinaria especializada.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cotizador y FAQs -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
