<!-- Contenedor de Botones Flotantes -->
<div class="floating-actions-container">
    <!-- Botón Go To Top Inteligente (Se activa únicamente al llegar al fondo de la web) -->
    <button type="button" class="btn-go-to-top" id="btn-go-to-top" aria-label="Volver arriba">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="18 15 12 9 6 15"/></svg>
    </button>

    <!-- Botón WhatsApp de Emergencias 24/7 -->
    <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito atención técnica urgente de gasfitería.') ?>" 
       class="btn-floating-whatsapp" 
       target="_blank" 
       rel="noopener noreferrer" 
       aria-label="Contactar por WhatsApp">
        <div class="whatsapp-radar-ring"></div>
        <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.814 2.796.814 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.766c0 5.514-4.486 10-10 10-1.758 0-3.415-.456-4.864-1.258l-5.136 1.346 1.371-5.012c-.879-1.493-1.371-3.23-1.371-5.076 0-5.514 4.486-10 10-10s10 4.486 10 10z"/>
        </svg>
    </a>
</div>
