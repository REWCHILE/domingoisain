<!-- Modal Lightbox para Certificados Oficiales -->
<div class="modal-backdrop" id="cert-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-cert-title" aria-describedby="modal-cert-desc">
    <div class="modal-dialog">
        <button type="button" class="modal-close-btn" id="modal-close-btn" aria-label="Cerrar ventana modal">✕</button>
        <div class="modal-body">
            <img src="" alt="Certificado Oficial" class="modal-image-preview" id="modal-cert-image">
            <h3 class="modal-title" id="modal-cert-title">Certificado Oficial</h3>
            <p class="modal-description" id="modal-cert-desc">Documento técnico emitido conforme a las directrices de la Superintendencia de Electricidad y Combustibles (SEC) y normativa DS66.</p>
            <div class="modal-actions">
                <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" class="btn-verify-qr" style="font-size: 0.95rem; padding: 10px 20px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    Verificar en Portal SEC Oficial
                </a>
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, vi tus certificados en la web y necesito consultar por un servicio.') ?>" target="_blank" class="btn-primary" style="padding: 10px 20px; font-size: 0.95rem;">
                    Consultar a Domingo
                </a>
            </div>
        </div>
    </div>
</div>
