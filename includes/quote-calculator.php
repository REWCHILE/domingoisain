<?php
// includes/quote-calculator.php
?>
<section class="section-padding calculator-section" id="cotizador">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Estimador Rápido</span>
            <h2 class="section-title">Cotiza tu Servicio en <span class="gradient-text">3 Pasos Sencillos</span></h2>
            <p class="section-desc">
                Selecciona las características de tu propiedad y necesidad para calcular un estimado previo y recibir atención prioritaria por WhatsApp.
            </p>
        </div>

        <div class="calc-container">
            <!-- Formulario Interactivo -->
            <div class="calc-form-pane">
                <!-- Paso 1: Inmueble -->
                <div class="calc-step-group">
                    <h3 class="calc-step-title">
                        <span class="calc-step-num">1</span>
                        Tipo de Inmueble o Propiedad
                    </h3>
                    <div class="calc-options-grid">
                        <button type="button" class="calc-option-btn active" data-calc-property="Departamento">
                            <div class="calc-option-icon">🏢</div>
                            <div class="calc-option-text">Departamento</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-property="Casa 1 Piso">
                            <div class="calc-option-icon">🏡</div>
                            <div class="calc-option-text">Casa 1 Piso</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-property="Casa 2 Pisos">
                            <div class="calc-option-icon">🏘️</div>
                            <div class="calc-option-text">Casa 2 Pisos</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-property="Comercial / Empresa">
                            <div class="calc-option-icon">🏭</div>
                            <div class="calc-option-text">Comercio</div>
                        </button>
                    </div>
                </div>

                <!-- Paso 2: Tipo de Servicio -->
                <div class="calc-step-group">
                    <h3 class="calc-step-title">
                        <span class="calc-step-num">2</span>
                        ¿Qué necesitas solucionar?
                    </h3>
                    <div class="calc-options-grid">
                        <button type="button" class="calc-option-btn active" data-calc-problem="Fuga de Gas / Sellado sin Romper">
                            <div class="calc-option-icon">🔥</div>
                            <div class="calc-option-text">Fuga de Gas</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-problem="Levantamiento Sello Rojo SEC">
                            <div class="calc-option-icon">🚨</div>
                            <div class="calc-option-text">Sello Rojo SEC</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-problem="Detección de Fuga de Agua">
                            <div class="calc-option-icon">💧</div>
                            <div class="calc-option-text">Fuga de Agua</div>
                        </button>
                        <button type="button" class="calc-option-btn" data-calc-problem="Prueba Hermeticidad DS66">
                            <div class="calc-option-icon">📜</div>
                            <div class="calc-option-text">Certificado DS66</div>
                        </button>
                    </div>
                </div>

                <!-- Paso 3: Longitud o Datos Adicionales -->
                <div class="calc-step-group" style="margin-bottom: 0;">
                    <label for="calc-input-metros" class="calc-step-title" style="display: block; cursor: pointer;">
                        <span class="calc-step-num">3</span>
                        Tramo Estimado de Cañería (Aprox.)
                    </label>
                    <select id="calc-input-metros" class="calc-select" aria-label="Selecciona los metros estimados de cañería">
                        <option value="Tramo estándar (hasta 15 metros)">Tramo estándar (hasta 15 metros) - Típico depto / cocina-calefont</option>
                        <option value="Tramo mediano (15 a 30 metros)">Tramo mediano (15 a 30 metros) - Casas medianas o 2 artefactos</option>
                        <option value="Tramo extendido (más de 30 metros)">Tramo extendido (más de 30 metros) - Casas grandes / comercio</option>
                        <option value="No estoy seguro (requiero asesoría en terreno)">No estoy seguro (requiero que Domingo evalúe en terreno)</option>
                    </select>
                </div>
            </div>

            <!-- Resumen y Exportación WhatsApp -->
            <div class="calc-summary-card">
                <div>
                    <h3 class="calc-summary-title">Resumen de Cotización</h3>
                    <div class="calc-summary-rows">
                        <div class="calc-summary-row">
                            <span>Propiedad:</span>
                            <strong id="calc-summary-property">Departamento</strong>
                        </div>
                        <div class="calc-summary-row">
                            <span>Servicio:</span>
                            <strong id="calc-summary-problem" style="color: var(--sec-green);">Fuga de Gas</strong>
                        </div>
                        <div class="calc-summary-row">
                            <span>Metros aprox:</span>
                            <strong id="calc-summary-metros">Hasta 15 metros</strong>
                        </div>
                        <div class="calc-summary-row">
                            <span>Garantía:</span>
                            <strong style="color: var(--prodoral-amber);">3 Años por escrito</strong>
                        </div>
                        <div class="calc-summary-row">
                            <span>Técnico a cargo:</span>
                            <strong>Domingo Isaín (SEC 3)</strong>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2); border-radius: var(--radius-sm); padding: 12px; margin-bottom: 16px; font-size: 0.8rem; color: #a7f3d0;">
                        💡 Sin compromiso: Envíanos estos datos y Domingo te responderá en minutos con disponibilidad y presupuesto.
                    </div>
                    <a href="#" id="btn-whatsapp-quote-export" class="btn-whatsapp-quote" target="_blank" rel="noopener noreferrer">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.814 2.796.814 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.766c0 5.514-4.486 10-10 10-1.758 0-3.415-.456-4.864-1.258l-5.136 1.346 1.371-5.012c-.879-1.493-1.371-3.23-1.371-5.076 0-5.514 4.486-10 10-10s10 4.486 10 10z"/></svg>
                        <span>Solicitar Presupuesto Directo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
