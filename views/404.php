<?php
// views/404.php - Página no encontrada amigable
?>
<section class="section-padding" style="text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="section-container" style="max-width: 700px;">
        <div style="font-family: var(--font-display); font-size: 6rem; font-weight: 900; color: var(--tech-cyan); line-height: 1; margin-bottom: 20px;">
            404
        </div>
        <h1 class="section-title">Página no encontrada</h1>
        <p class="section-desc" style="margin-bottom: 35px;">
            La página que buscas no existe o ha sido trasladada a una nueva sección dentro del portal oficial de Domingo Isaín.
        </p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="<?= BASE_URL ?>/" class="btn-primary">
                Volver a la Portada Principal
            </a>
            <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito consultar por un servicio.') ?>" class="btn-secondary" target="_blank">
                Contactar por WhatsApp
            </a>
        </div>
    </div>
</section>
