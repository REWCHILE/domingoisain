</main>

<footer class="footer-main">
    <div class="footer-grid">
        <!-- Columna 1: Marca y Respaldo Técnico SEC -->
        <div>
            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 15px;">
                <img src="<?= BASE_URL ?>/assets/images/logo-domingo-isain.webp" alt="Domingo Isaín - Técnico en Ingeniería" width="220" height="52" style="height: 48px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0, 180, 232, 0.4));">
                <div>
                    <span style="font-family: var(--font-display); font-size: 1.15rem; font-weight: 800; color: #ffffff; display: block; line-height: 1.1;">DOMINGO ISAÍN</span>
                    <span style="font-size: 0.74rem; color: var(--brand-cyan); font-weight: 700; text-transform: uppercase;">Técnico en Ingeniería · Gasfíter SEC</span>
                </div>
            </div>
            <p class="footer-brand-text">
                Profesional acreditado ante la Superintendencia de Electricidad y Combustibles (SEC) de Chile con más de 30 años de experiencia. Especialista en sellado de gas sin picar con polímero Prodoral R6-1 alemán y detección con geófono ultrasónico.
            </p>
            <div style="display: flex; gap: 10px; align-items: center; margin-top: 15px;">
                <img src="<?= BASE_URL ?>/assets/images/logotipo-sec.webp" alt="Superintendencia de Electricidad y Combustibles" width="110" height="32" style="height: 32px; width: auto; filter: brightness(1.2);">
                <span style="font-size: 0.8rem; color: #cbd5e1; font-weight: 600;">RUT: 12.738.961-6 · Vigente</span>
            </div>
        </div>

        <!-- Columna 2: Páginas de Especialidad (SEO Landing Links) -->
        <div>
            <h3 class="footer-heading">Servicios y Especialidades</h3>
            <ul class="footer-links-list">
                <li><a href="<?= BASE_URL ?>/fugas/">→ Reparación de Fugas sin Romper</a></li>
                <li><a href="<?= BASE_URL ?>/fuga-de-gas/">→ Urgencias por Fuga de Gas 24/7</a></li>
                <li><a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/">→ Detección con Geófono y Gas Trazador</a></li>
                <li><a href="<?= BASE_URL ?>/instalador-sec/">→ Levantamiento de Sello Rojo SEC</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-certificado/">→ Pruebas de Hermeticidad DS66</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter/">→ Instalaciones y Gasfitería General</a></li>
            </ul>
        </div>

        <!-- Columna 3: Cobertura Comunas RM -->
        <div>
            <h3 class="footer-heading">Cobertura en Santiago</h3>
            <ul class="footer-links-list">
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Las Condes & Vitacura</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Providencia & Ñuñoa</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Lo Barnechea & La Reina</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Santiago Centro & San Miguel</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Maipú, La Florida & Peñalolén</a></li>
                <li><a href="<?= BASE_URL ?>/gasfiter-autorizado/">📍 Chicureo, Colina & Toda la RM</a></li>
            </ul>
        </div>

        <!-- Columna 4: Contacto Directo & Urgencias -->
        <div>
            <h3 class="footer-heading">Atención y Contacto</h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 12px;">
                Línea directa para urgencias de gas, inspecciones y presupuestos inmediatos:
            </p>
            <div style="margin-bottom: 16px;">
                <a href="tel:<?= PHONE_RAW ?>" style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 8px;" aria-label="Llamar directamente a Domingo Isaín">
                    <span style="color: var(--sec-green);">📞</span> <?= PHONE_DISPLAY ?>
                </a>
            </div>
            <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, me comunico desde tu sitio web domingoisain.cl') ?>" target="_blank" rel="noopener noreferrer" class="btn-primary" style="padding: 10px 18px; font-size: 0.88rem; width: 100%; justify-content: center;" aria-label="Escribir a WhatsApp de Domingo Isaín">
                Escribir a WhatsApp
            </a>
            <div style="margin-top: 14px;">
                <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" style="font-size: 0.78rem; color: var(--tech-cyan); text-decoration: underline;">
                    Verificar registro oficial en portal SEC (sec.cl)
                </a>
            </div>
        </div>
    </div>

    <!-- Barra Inferior de Copyright -->
    <div class="footer-bottom">
        <div>
            © <?= date('Y') ?> <strong>Domingo Isaín Plaza Caamaño</strong>. Todos los derechos reservados. Gasfíter Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6).
        </div>
        <div style="display: flex; gap: 15px;">
            <a href="<?= BASE_URL ?>/instalador-sec/" style="color: var(--text-muted); text-decoration: none;">Normativa DS66</a>
            <a href="<?= BASE_URL ?>/fugas/" style="color: var(--text-muted); text-decoration: none;">Prodoral R6-1 DIN EN 13090</a>
            <a href="<?= BASE_URL ?>/#faqs" style="color: var(--text-muted); text-decoration: none;">Preguntas Frecuentes</a>
        </div>
    </div>
</footer>

<!-- Inclusión de Componentes Flotantes y Modales -->
<?php include __DIR__ . '/floating-buttons.php'; ?>
<?php include __DIR__ . '/modal-certificates.php'; ?>

<!-- Scripts JavaScript con Defer -->
<script defer src="<?= BASE_URL ?>/assets/js/cursor.js?v=3.9"></script>
<script defer src="<?= BASE_URL ?>/assets/js/main.js?v=3.9"></script>

</body>
</html>
