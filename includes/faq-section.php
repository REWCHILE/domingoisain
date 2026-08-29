<?php
// includes/faq-section.php
// 12+ Preguntas Frecuentes redactadas con enfoque Customer-First & Reassurance
global $FAQS;
?>
<section class="section-padding faq-section" id="faqs">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Resolvemos Todas Tus Dudas</span>
            <h2 class="section-title">Preguntas Frecuentes sobre <span class="gradient-text">Fugas de Gas y Normativa SEC</span></h2>
            <p class="section-desc">
                Entendemos que una fuga o un corte de gas genera incertidumbre y temor. Aquí respondemos con total transparencia y simpleza todo lo que necesitas saber antes de solicitar tu atención técnica.
            </p>
        </div>

        <!-- Filtros por Categoría -->
        <div class="faq-categories">
            <button type="button" class="faq-cat-btn active" data-category="all">Todas las Consultas</button>
            <button type="button" class="faq-cat-btn" data-category="Urgencias y Seguridad">🚨 Urgencias y Seguridad</button>
            <button type="button" class="faq-cat-btn" data-category="Sello Rojo y Normativa SEC">🛡️ Sello Rojo y SEC</button>
            <button type="button" class="faq-cat-btn" data-category="Tecnología No Invasiva">🧪 Sellado sin Romper</button>
            <button type="button" class="faq-cat-btn" data-category="Costos y Presupuestos">💰 Precios y Garantía</button>
        </div>

        <!-- Lista de Acordeones -->
        <div class="faq-accordion-list" role="region" aria-label="Acordeón de preguntas frecuentes">
            <?php foreach ($FAQS as $index => $faq): ?>
                <div class="faq-item" data-category="<?= htmlspecialchars($faq['category']) ?>">
                    <button type="button" class="faq-question-btn" id="faq-btn-<?= $index ?>" aria-expanded="false" aria-controls="faq-answer-<?= $index ?>">
                        <span><?= ($index + 1) ?>. <?= htmlspecialchars($faq['question']) ?></span>
                        <span class="faq-icon-chevron" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="faq-answer-pane" id="faq-answer-<?= $index ?>" role="region" aria-labelledby="faq-btn-<?= $index ?>">
                        <div class="faq-answer-content">
                            <p><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
                            <div style="margin-top: 14px; padding-top: 10px; border-top: 1px dashed rgba(255,255,255,0.06); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                                <span style="font-size: 0.78rem; color: var(--sec-green); font-weight: 600;">✓ Asesoría directa con Domingo Isaín (SEC Clase 3)</span>
                                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una duda sobre: ' . $faq['question']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.82rem; color: var(--tech-cyan); text-decoration: none; font-weight: 700;" aria-label="Consultar a Domingo por WhatsApp sobre: <?= htmlspecialchars($faq['question']) ?>">
                                    Consultar por WhatsApp →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Banner de Ayuda Directa -->
        <div style="margin-top: 50px; background: rgba(14, 23, 42, 0.6); border: 1px solid var(--border-glow); border-radius: var(--radius-lg); padding: 30px; text-align: center; max-width: 900px; margin-left: auto; margin-right: auto; backdrop-filter: blur(10px);">
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 8px; color: #ffffff;">¿Tienes una consulta específica o no sabes por dónde empezar?</h3>
            <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
                No te preocupes. Escríbenos directamente o envíanos una foto de tu medidor, calefont o aviso de sello rojo y te orientaremos paso a paso sin compromiso.
            </p>
            <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una consulta sobre mi instalación de gas.') ?>" class="btn-primary" target="_blank" style="padding: 12px 24px; font-size: 0.95rem;">
                    Escribir por WhatsApp
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary" style="padding: 12px 24px; font-size: 0.95rem;">
                    Llamar al <?= PHONE_DISPLAY ?>
                </a>
            </div>
        </div>
    </div>
</section>
