<?php
// views/home.php - Portada Principal de Domingo Isaín
?>

<!-- 1. HERO SECTION -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>

    <div class="hero-container">
        <!-- Columna de Texto y Propuesta de Valor -->
        <div class="hero-content-pane">
            <div class="hero-badge-tag">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Instalador de Gas Autorizado SEC Clase 3 · RUT: 12.738.961-6
            </div>

            <h1 class="hero-title">
                Reparamos Fugas de Gas <span class="gradient-text">Sin Romper Muros ni Pisos</span> con Tecnología Alemana
            </h1>

            <p class="hero-lead">
                Soy <strong>Domingo Isaín</strong>, gasfíter certificado por la SEC con más de 30 años de experiencia en Santiago. Sellamos microfugas interiores mediante polímero alemán <strong>Prodoral R6-1</strong>, realizamos pruebas de hermeticidad y normalizamos sellos rojos con <span class="highlight-amber">3 años de garantía por escrito</span>.
            </p>

            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Cero roturas de cerámicas o pisos</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Garantía de 3 años certificada</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Certificados oficiales DS66 para Metrogas</span>
                </div>
            </div>

            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, necesito cotizar una reparación de fuga de gas / atención técnica.') ?>" class="btn-primary" target="_blank" rel="noopener noreferrer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.814 2.796.814 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.766c0 5.514-4.486 10-10 10-1.758 0-3.415-.456-4.864-1.258l-5.136 1.346 1.371-5.012c-.879-1.493-1.371-3.23-1.371-5.076 0-5.514 4.486-10 10-10s10 4.486 10 10z"/></svg>
                    <span>Contactar por WhatsApp</span>
                </a>
                <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>Llamar: <?= PHONE_DISPLAY ?></span>
                </a>
            </div>
        </div>

        <!-- Columna de Imagen / Slider Interactivo de Domingo en Acción -->
        <div class="hero-visual-pane">
            <div class="hero-visual-card" id="hero-slider-card">
                <div class="hero-slider-wrapper">
                    <!-- Pistas de Slides -->
                    <div class="hero-slider-track" id="hero-slider-track">
                        <!-- Slide 1 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🚗 Atención Móvil 24/7 en Toda la RM</span>
                            <img src="<?= BASE_URL ?>/assets/images/hero-home-main.webp" alt="Domingo Isaín con Furgón de Emergencias SEC" class="hero-slide-img" width="800" height="600" fetchpriority="high">
                        </div>
                        <!-- Slide 2 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">📡 Detección Acústica con Geófono</span>
                            <img src="<?= BASE_URL ?>/assets/images/domingo-accion-geofono.webp" alt="Domingo Isaín detectando fugas subterráneas con geófono digital" class="hero-slide-img" width="800" height="600" loading="lazy" decoding="async">
                        </div>
                        <!-- Slide 3 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🔥 Mantención Certificada de Calefonts</span>
                            <img src="<?= BASE_URL ?>/assets/images/domingo-accion-calefont.webp" alt="Domingo Isaín reparando calefont y midiendo presión de gas" class="hero-slide-img" width="800" height="600" loading="lazy" decoding="async">
                        </div>
                        <!-- Slide 4 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">📋 Pruebas de Hermeticidad DS66</span>
                            <img src="<?= BASE_URL ?>/assets/images/domingo-trabajo.webp" alt="Domingo Isaín en terreno realizando pruebas de gas" class="hero-slide-img" width="800" height="600" loading="lazy" decoding="async">
                        </div>
                        <!-- Slide 5 -->
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🧪 Sellado sin Romper Prodoral R6-1</span>
                            <img src="<?= BASE_URL ?>/assets/images/hero-prodoral.webp" alt="Inyección de polímero alemán Prodoral R6-1" class="hero-slide-img" width="800" height="600" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <!-- Botones de Navegación -->
                    <button type="button" class="hero-slider-btn hero-slider-prev" id="hero-slider-prev" aria-label="Foto anterior">❮</button>
                    <button type="button" class="hero-slider-btn hero-slider-next" id="hero-slider-next" aria-label="Foto siguiente">❯</button>

                    <!-- Paginación Dots -->
                    <div class="hero-slider-dots" id="hero-slider-dots">
                        <button type="button" class="hero-slider-dot active" data-slide="0" aria-label="Ir a foto 1"></button>
                        <button type="button" class="hero-slider-dot" data-slide="1" aria-label="Ir a foto 2"></button>
                        <button type="button" class="hero-slider-dot" data-slide="2" aria-label="Ir a foto 3"></button>
                        <button type="button" class="hero-slider-dot" data-slide="3" aria-label="Ir a foto 4"></button>
                        <button type="button" class="hero-slider-dot" data-slide="4" aria-label="Ir a foto 5"></button>
                    </div>
                </div>

                <!-- Insignia Inferior Flotante -->
                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza C.</div>
                        <div class="badge-info-sub">Instalador SEC Clase 3 · Licencia Oficial (RUT 12.738.961-6)</div>
                    </div>
                    <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" class="btn-verify-qr" title="Verificar RUT 12.738.961-6 en la SEC" aria-label="Verificar registro de Domingo Isaín en portal SEC">
                        <img src="<?= BASE_URL ?>/assets/images/qr-sec.webp" alt="QR SEC" width="18" height="18" style="width: 18px; height: 18px; border-radius: 3px;">
                        <span>Verificar SEC</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. MÉTRICAS Y ESTADÍSTICAS DE CONFIANZA -->
<section class="stats-bar">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon-box stat-icon-green">🏆</div>
            <div>
                <div class="stat-number">30+ Años</div>
                <div class="stat-label">Experiencia en Gas y Sanitarios</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon-box stat-icon-cyan">🧪</div>
            <div>
                <div class="stat-number">0 Roturas</div>
                <div class="stat-label">Tecnología Alemana Prodoral R6-1</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon-box stat-icon-amber">📜</div>
            <div>
                <div class="stat-number">3 Años</div>
                <div class="stat-label">Garantía Escrita y Certificado DS66</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon-box stat-icon-green">⚡</div>
            <div>
                <div class="stat-number">24/7</div>
                <div class="stat-label">Atención Urgencias en Toda la RM</div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SECCIÓN DE SERVICIOS ESPECIALIZADOS -->
<section class="section-padding" id="servicios">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Soluciones Profesionales</span>
            <h2 class="section-title">Servicios Integrales con <span class="gradient-text">Certificación SEC Oficial</span></h2>
            <p class="section-desc">
                Resolvemos desde fugas invisibles bajo tierra hasta la regularización legal de tus sellos de gas con la más alta tecnología no destructiva.
            </p>
        </div>

        <div class="services-grid">
            <!-- Servicio 1: Prodoral R6-1 -->
            <div class="service-card">
                <span class="service-badge badge-amber">Tecnología Alemana Exclusiva</span>
                <h3 class="service-title">Sellado de Fugas sin Romper</h3>
                <p class="service-text">
                    Inyección de polímero alemán Prodoral R6-1 a presión en redes de cobre o fierro. Sella porosidades y microfugas desde el interior en pocas horas sin picar cerámicas ni pisos.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> 100% no invasivo (sin polvo ni escombros)</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Homologación DIN EN 13090 / DVGW</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Garantía por escrito de 3 años</li>
                </ul>
                <a href="<?= BASE_URL ?>/fugas/" class="service-card-btn">
                    <span>Ver Detalles de Sellado</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>

            <!-- Servicio 2: Ultrasonido y Gas Trazador -->
            <div class="service-card">
                <span class="service-badge badge-cyan">Detección Electrónica</span>
                <h3 class="service-title">Detección con Geófono y Gas Trazador</h3>
                <p class="service-text">
                    Ubicación exacta del punto de fuga mediante mezcla molecular de Nitrógeno/Hidrógeno y geófonos acústicos de alta frecuencia. Cero adivinanzas.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Detección acústica subterránea y en muros</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Inocuo y seguro para el hogar</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Precisión milimétrica</li>
                </ul>
                <a href="<?= BASE_URL ?>/deteccion-con-ultrasonido/" class="service-card-btn">
                    <span>Ver Tecnología de Detección</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>

            <!-- Servicio 3: Levantamiento de Sello Rojo -->
            <div class="service-card">
                <span class="service-badge badge-green">Regularización Legal SEC</span>
                <h3 class="service-title">Levantamiento de Sello Rojo y Amarillo</h3>
                <p class="service-text">
                    Diagnóstico, corrección de fallas y emisión del informe técnico reglamentario para que la entidad certificadora apruebe tu Sello Verde conforme al DS66.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Validez para Metrogas, Lipigas, Abastible, Gasco</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Adecuación de ventilaciones y tiros de chimenea</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Firma autorizada por Instalador Clase 3</li>
                </ul>
                <a href="<?= BASE_URL ?>/instalador-sec/" class="service-card-btn">
                    <span>Regularizar Sello Rojo</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>

            <!-- Servicio 4: Pruebas de Hermeticidad DS66 -->
            <div class="service-card">
                <span class="service-badge badge-cyan">Instrumental Calibrado</span>
                <h3 class="service-title">Pruebas de Hermeticidad Manométrica</h3>
                <p class="service-text">
                    Test de presión con manómetros digitales certificados para verificar 0 fugas en matrices principales, arranques y redes interiores de gas.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Certificado oficial de hermeticidad</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Exigido para reconexión de medidores cortados</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Protocolo riguroso SEC</li>
                </ul>
                <a href="<?= BASE_URL ?>/gasfiter-certificado/" class="service-card-btn">
                    <span>Conocer Pruebas de Presión</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>

            <!-- Servicio 5: Mantención e Instalación de Calefonts -->
            <div class="service-card">
                <span class="service-badge badge-green">Agua Caliente y Climatización</span>
                <h3 class="service-title">Calefonts, Calderas y Termos</h3>
                <p class="service-text">
                    Mantención preventiva, reparación de encendido, cambio de sensores de tiro, regulación de quemadores e instalación certificada de todas las marcas.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Junkers, Splendid, Mademsa, Rheem, Trotter</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Tiro forzado e ionizados</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Ductos de evacuación normados SEC</li>
                </ul>
                <a href="<?= BASE_URL ?>/gasfiter/" class="service-card-btn">
                    <span>Ver Servicios de Calefont</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>

            <!-- Servicio 6: Gasfitería General e Instalaciones Sanitarias -->
            <div class="service-card">
                <span class="service-badge badge-amber">Gasfitería Autorizada</span>
                <h3 class="service-title">Redes Sanitarias y Agua Potable</h3>
                <p class="service-text">
                    Reparación de filtraciones ocultas de agua, cambio de llaves de paso, matrices de cobre/PPR, destape electromecánico y regularización sanitaria.
                </p>
                <ul class="service-features-list">
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Detección de fugas de agua no visibles</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Materiales certificados de alta duración</li>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Casas, departamentos y empresas</li>
                </ul>
                <a href="<?= BASE_URL ?>/gasfiter/" class="service-card-btn">
                    <span>Ver Gasfitería Integral</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 4. COMPARATIVA: MÉTODO TRADICIONAL (PICANDO) VS PRODORAL R6-1 -->
<section class="section-padding" style="background: var(--bg-surface); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Innovación vs Tradición</span>
            <h2 class="section-title">¿Por Qué Picar Muros cuando Puedes <span class="gradient-text">Sellar desde el Interior</span>?</h2>
            <p class="section-desc">
                Compara el impacto de contratar albañiles tradicionales frente a la tecnología certificada de sellado que aplica Domingo Isaín.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <!-- Método Antiguo -->
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: var(--radius-lg); padding: 32px;">
                <div style="color: var(--emergency-red); font-weight: 800; font-size: 1.2rem; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                    <span>❌</span> Método Tradicional (Picando)
                </div>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 14px; color: var(--text-secondary); font-size: 0.95rem;">
                    <li>⛔ Rompe cerámicas, porcelanatos y pisos flotantes.</li>
                    <li>⛔ Obras de 1 a 2 semanas con polvo y escombros molestos.</li>
                    <li>⛔ Altos costos adicionales en albañilería y pintura.</li>
                    <li>⛔ Sin garantía certera sobre el resto de la cañería vieja.</li>
                </ul>
            </div>

            <!-- Método Domingo Isaín -->
            <div style="background: rgba(16, 185, 129, 0.08); border: 2px solid var(--sec-green); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-glow-green);">
                <div style="color: var(--sec-green); font-weight: 800; font-size: 1.2rem; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                    <span>✓</span> Método Domingo Isaín (Prodoral R6-1)
                </div>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 14px; color: #ffffff; font-size: 0.95rem; font-weight: 600;">
                    <li>✨ <strong>0% Daño:</strong> Muros, pisos y cerámicas quedan intactos.</li>
                    <li>✨ <strong>En 4 a 6 horas:</strong> Trabajo limpio terminado en el mismo día.</li>
                    <li>✨ <strong>Ahorro de hasta un 70%</strong> en gastos de reconstrucción.</li>
                    <li>✨ <strong>Garantía por escrito de 3 años</strong> + Certificado DS66.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 5. GALERÍA DE TRABAJOS EN TERRENO Y FOTOGRAFÍAS REALES -->
<section class="section-padding">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Transparencia y Experiencia Real</span>
            <h2 class="section-title">Domingo Isaín <span class="gradient-text">en Terreno</span></h2>
            <p class="section-desc">
                Fotografías reales de intervenciones técnicas, aplicación de tecnología alemana y diagnóstico de redes en Santiago.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-subtle); aspect-ratio: 4/3;">
                <img src="<?= BASE_URL ?>/assets/images/domingo-trabajo.webp" alt="Domingo Isaín en terreno realizando pruebas de hermeticidad" width="400" height="300" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-subtle); aspect-ratio: 4/3;">
                <img src="<?= BASE_URL ?>/assets/images/hero-prodoral.webp" alt="Inyección de polímero alemán Prodoral R6-1 en tubería de gas" width="400" height="300" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-subtle); aspect-ratio: 4/3;">
                <img src="<?= BASE_URL ?>/assets/images/hero-calefont.webp" alt="Mantención y reparación de calefont ionizado SEC" width="400" height="300" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-subtle); aspect-ratio: 4/3;">
                <img src="<?= BASE_URL ?>/assets/images/hero-destapes.webp" alt="Equipos de diagnóstico y geófono ultrasónico digital" width="400" height="300" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- 6. SECCIÓN DE CERTIFICADOS Y DIPLOMAS OFICIALES (CON MODAL LIGHTBOX) -->
<section class="section-padding certificates-section" id="certificados">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Acreditación Académica y Legal</span>
            <h2 class="section-title">Títulos Universitarios, Certificaciones y <span class="gradient-text">Respaldo Técnico</span></h2>
            <p class="section-desc">
                La máxima solvencia técnica del mercado: Formación en la Pontificia Universidad Católica de Chile, especialización internacional en ingeniería y certificación legal SEC y ChileValora.
            </p>
        </div>

        <div class="certs-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
            <!-- 1. PUC: Solución de Patologías en la Vivienda -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-patologias.webp"
                 data-cert-title="Pontificia Universidad Católica de Chile - Escuela de Construcción Civil"
                 data-cert-desc="Diploma oficial otorgado a Domingo Isaian Plaza Caamaño por la Pontificia Universidad Católica de Chile (DECON UC) tras cursar y aprobar 'Solución de Patologías en la Vivienda'.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-patologias.webp" alt="Diploma PUC Solución de Patologías en la Vivienda" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Pontificia Universidad Católica</h3>
                <p class="cert-info-desc">Curso: Solución de Patologías en la Vivienda (Escuela de Construcción Civil).</p>
            </div>

            <!-- 2. PUC: Supervisión de Obras -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-supervision-obras.webp"
                 data-cert-title="Pontificia Universidad Católica de Chile - Supervisión de Obras"
                 data-cert-desc="Diploma otorgado a Domingo Isain Plaza Caamaño por la Escuela de Construcción Civil de la Pontificia Universidad Católica de Chile en 'Técnicas de Supervisión de Obras para Edificación'.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-supervision-obras.webp" alt="Diploma PUC Supervisión de Obras" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Pontificia Universidad Católica</h3>
                <p class="cert-info-desc">Curso: Técnicas de Supervisión de Obras para Edificación.</p>
            </div>

            <!-- 3. ChileValora ECERLAB Gasfíter en Fugas -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.webp"
                 data-cert-title="ChileValora / ECERLAB SpA - Gasfíter Certificado en Fugas"
                 data-cert-desc="Certificado oficial de competencias laborales otorgado a Domingo Isain Plaza Caamaño (RUN 12.738.961-6) acreditado en instalación de cañerías, interpretación de planos y reparación de fugas/filtraciones.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.webp" alt="Certificado ChileValora ECERLAB" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">ChileValora · Gasfíter en Fugas</h3>
                <p class="cert-info-desc">Acreditación laboral oficial en detección y reparación de fugas (RUN 12.738.961-6).</p>
            </div>

            <!-- 4. Escuela Electromecánica: Especialista en Gasfitería y Sanitarios -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-gasfiteria-sanitarios-electromechanics.webp"
                 data-cert-title="Escuela Electromecánica (NCH 2728 / ISO 9001)"
                 data-cert-desc="Diploma de Educación Técnica otorgado a Don Domingo Isain Plaza Caamaño como Especialista Técnico con mención en Gasfitería y Sanitarios.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-gasfiteria-sanitarios-electromechanics.webp" alt="Diploma Especialista Técnico Gasfitería y Sanitarios" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Gasfitería y Sanitarios</h3>
                <p class="cert-info-desc">Especialista Técnico con Certificación Nacional NCH 2728 e Internacional ISO 9001.</p>
            </div>

            <!-- 5. Euroinnova: Experto en Ingeniería Química -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.webp"
                 data-cert-title="Euroinnova Formación - Experto en Ingeniería Química"
                 data-cert-desc="Título propio acreditado otorgado a Domingo Isain Plaza Caamaño con calificación SOBRESALIENTE en el programa de formación de Ingeniería Química.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.webp" alt="Diploma Euroinnova Ingeniería Química" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Euroinnova · Ing. Química</h3>
                <p class="cert-info-desc">Experto en Ingeniería Química con calificación Sobresaliente.</p>
            </div>

            <!-- 6. Claustro Gómez: Técnico Superior en Ingeniería Industrial -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.webp"
                 data-cert-title="Claustro Gómez Universitas - Ingeniería Industrial"
                 data-cert-desc="Diploma con registro oficial CG1009 otorgado a Domingo Isain Plaza Camaño (12.738.961-6) como Técnico Superior Propio en Ingeniería Industrial.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.webp" alt="Diploma Claustro Gómez Ingeniería Industrial" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Claustro Gómez · Ing. Industrial</h3>
                <p class="cert-info-desc">Técnico Superior Propio en Ingeniería Industrial (Registro CG1009).</p>
            </div>

            <!-- 7. Claustro Gómez: Máster Propio en Ecología y Estudios Ambientales -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-master-ecologia-ambiental.webp"
                 data-cert-title="Claustro Gómez Universitas - Máster en Ecología y Estudios Ambientales"
                 data-cert-desc="Diploma con registro oficial CG1010 otorgado a Domingo Isain Plaza Camaño (12.738.961-6) correspondiente al Máster Propio en Ecología y Estudios Ambientales.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-master-ecologia-ambiental.webp" alt="Diploma Máster en Ecología y Estudios Ambientales" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Máster Estudios Ambientales</h3>
                <p class="cert-info-desc">Máster Propio en Ecología y Estudios Ambientales (Registro CG1010).</p>
            </div>

            <!-- 8. SOCATEC: Prueba de Hermeticidad DS66 -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-hermeticidad.webp"
                 data-cert-title="SOCATEC - Prueba de Hermeticidad en Instalaciones Interiores de Gas"
                 data-cert-desc="Certificado técnico emitido por SOCATEC a Domingo Isain Plaza Caamaño (RUT 12.738.961-6) por aprobación de curso técnico de pruebas manométricas bajo DS66.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-hermeticidad.webp" alt="Prueba de Hermeticidad SOCATEC" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">SOCATEC · Hermeticidad DS66</h3>
                <p class="cert-info-desc">Pruebas manométricas oficiales exigidas por distribuidoras de gas.</p>
            </div>

            <!-- 9. Prodoral R6-1 Alemania -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-prodoral.webp"
                 data-cert-title="Prodoral R6-1 (Alemania) - Homologación DIN EN 13090"
                 data-cert-desc="Homologación técnica internacional para el sellado no destructivo de cañerías de gas desde el interior con 3 años de garantía.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-prodoral.webp" alt="Certificado Prodoral R6-1" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Prodoral R6-1 Alemania</h3>
                <p class="cert-info-desc">Aplicador oficial autorizado para sellado sin picar muros.</p>
            </div>

            <!-- 10. Licencia SEC Clase 3 y Código QR -->
            <div class="cert-card" 
                 data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp"
                 data-cert-title="Superintendencia de Electricidad y Combustibles (SEC) - Licencia Clase 3"
                 data-cert-desc="Acreditación legal de la SEC para Domingo Isaín Plaza Caamaño (RUT 12.738.961-6), facultado para regularizar sellos rojos, tramitar sellos verdes y certificar instalaciones de gas.">
                <div class="cert-img-box">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp" alt="Licencia SEC Gasfíter Autorizado" class="cert-thumbnail" width="300" height="220" loading="lazy" decoding="async" style="object-fit: contain; background: #ffffff; padding: 8px;">
                    <div class="cert-overlay-icon">
                        <div class="cert-zoom-btn">🔍</div>
                    </div>
                </div>
                <h3 class="cert-info-title">Licencia SEC Clase 3</h3>
                <p class="cert-info-desc">Acreditación legal oficial ante la Superintendencia (RUT 12.738.961-6).</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. COTIZADOR INTERACTIVO EN VIVO -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>

<!-- 8. SECCIÓN DE PREGUNTAS FRECUENTES (FAQS - 10+ DETAILED) -->
<?php include __DIR__ . '/../includes/faq-section.php'; ?>

<!-- 9. BANNER FINAL DE ATENCIÓN DE EMERGENCIAS -->
<section class="section-padding" style="background: linear-gradient(135deg, rgba(0, 136, 204, 0.15), rgba(16, 185, 129, 0.15)); border-top: 1px solid var(--border-glow); text-align: center;">
    <div class="section-container" style="max-width: 900px;">
        <span class="emergency-pill" style="margin-bottom: 20px;">
            <span class="pulse-dot"></span>
            Disponibilidad Inmediata 24 Horas
        </span>
        <h2 class="section-title" style="margin-bottom: 16px;">
            ¿Problemas con el Gas o Sello Rojo en tu Hogar?
        </h2>
        <p class="section-desc" style="margin-bottom: 30px;">
            No arriesgues la seguridad de tu familia ni destruyas tu casa picando cerámicas. Domingo Isaín te atiende con rapidez, seriedad y certificación SEC legal.
        </p>
        <div class="hero-cta-group" style="justify-content: center;">
            <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, tengo una urgencia con mi red de gas / sello rojo y necesito atención rápida.') ?>" class="btn-primary" target="_blank">
                <span>Enviar WhatsApp de Urgencia</span>
            </a>
            <a href="tel:<?= PHONE_RAW ?>" class="btn-secondary">
                <span>Llamar Directo al <?= PHONE_DISPLAY ?></span>
            </a>
        </div>
    </div>
</section>
