<!-- Modal Lightbox para Certificados Oficiales -->
<div class="modal-backdrop" id="cert-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-cert-title" aria-describedby="modal-cert-desc">
    <div class="modal-dialog">
        <button type="button" class="modal-close-btn" id="modal-close-btn" aria-label="Cerrar ventana modal">✕</button>
        <div class="modal-body">
            <img src="" alt="Certificado Oficial" class="modal-image-preview" id="modal-cert-image">
            <h3 class="modal-title" id="modal-cert-title">Certificado Oficial</h3>
            <p class="modal-description" id="modal-cert-desc">Documento técnico emitido conforme a las directrices de la Superintendencia de Electricidad y Combustibles (SEC) y normativa DS66.</p>
            <div class="modal-actions">
                <a href="<?= SEC_PORTAL_URL ?>" target="_blank" rel="noopener noreferrer" class="btn-verify-qr" style="font-size: 0.95rem; padding: 8px 16px;">
                    <div class="qr-box" style="width: 42px; height: 42px;">
                        <img src="<?= BASE_URL ?>/assets/images/qr-sec.webp" alt="QR SEC" width="42" height="42" class="qr-img">
                    </div>
                    <div class="qr-btn-text">
                        <span class="qr-btn-label">Verificar en Portal SEC Oficial</span>
                        <span class="qr-btn-sub">Validar Licencia eRNII ↗</span>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, vi tus certificados en la web y necesito consultar por un servicio.') ?>" target="_blank" class="btn-primary" style="padding: 10px 20px; font-size: 0.95rem;">
                    Consultar a Domingo
                </a>
            </div>
        </div>
    </div>
</div>
