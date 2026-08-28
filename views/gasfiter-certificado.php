<?php
// views/gasfiter-certificado.php - Acreditación Académica, Títulos de Ingeniería y Licencia SEC Oficial
?>

<!-- 1. HERO SECTION CON SLIDER DE CERTIFICADOS -->
<section class="hero-section">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-container">
        <div class="hero-content-pane">
            <span class="service-badge badge-green" style="margin-bottom: 16px;">Superintendencia de Electricidad y Combustibles · ChileValora · PUC</span>
            <h1 class="hero-title">
                Títulos de Ingeniería y <span class="gradient-text">Acreditación Oficial SEC Clase 3</span>
            </h1>
            <p class="hero-lead">
                Conoce el respaldo académico y legal de <strong>Domingo Isaín Plaza Caamaño (RUT 12.738.961-6)</strong>. Formación en la Pontificia Universidad Católica de Chile, especializaciones en ingeniería y certificación estatal para resolver cualquier complejidad en gas y sanitarios con total solvencia técnica y legal.
            </p>
            <div class="hero-guarantees">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Registro oficial verificable en sec.cl y chilevalora.cl</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Formación de élite en Construcción Civil PUC</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Firma facultada para Sello Verde y DS66</span>
                </div>
            </div>
            <div class="hero-cta-group">
                <a href="https://api.whatsapp.com/send?phone=56949877316&text=<?= urlencode('Hola Domingo, vi tus certificaciones y necesito solicitar una inspección técnica / regularización.') ?>" class="btn-primary" target="_blank">
                    <span>Contactar con Instalador Certificado</span>
                </a>
                <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                    <span>Validar RUT en Portal SEC</span>
                </a>
            </div>
        </div>

        <!-- Slider de Certificados -->
        <div class="hero-visual-pane">
            <div class="hero-visual-card" id="cert-slider-card">
                <div class="hero-slider-wrapper">
                    <div class="hero-slider-track" id="cert-slider-track">
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🎓 PUC · Patologías en Vivienda</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-patologias.jpg" alt="Diploma PUC Patologías en la Vivienda" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🎓 PUC · Supervisión de Obras</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-supervision-obras.jpg" alt="Diploma PUC Supervisión de Obras" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🛡️ Licencia Oficial SEC Clase 3</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp" alt="Licencia SEC Gasfíter Autorizado" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🏆 ChileValora · Gasfíter en Fugas</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.jpg" alt="Certificado ChileValora ECERLAB" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🧪 Euroinnova · Ingeniería Química</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.jpg" alt="Diploma Experto en Ingeniería Química Euroinnova" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                        <div class="hero-slide">
                            <span class="hero-slide-tag">🏛️ Claustro Gómez · Ing. Industrial</span>
                            <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.jpg" alt="Diploma Técnico Superior en Ingeniería Industrial" class="hero-slide-img" style="object-fit: contain; background: #ffffff; padding: 6px;">
                        </div>
                    </div>

                    <button type="button" class="hero-slider-btn hero-slider-prev" id="cert-slider-prev" aria-label="Certificado anterior">❮</button>
                    <button type="button" class="hero-slider-btn hero-slider-next" id="cert-slider-next" aria-label="Certificado siguiente">❯</button>

                    <div class="hero-slider-dots" id="cert-slider-dots">
                        <button type="button" class="hero-slider-dot active" data-slide="0" aria-label="Certificado 1"></button>
                        <button type="button" class="hero-slider-dot" data-slide="1" aria-label="Certificado 2"></button>
                        <button type="button" class="hero-slider-dot" data-slide="2" aria-label="Certificado 3"></button>
                        <button type="button" class="hero-slider-dot" data-slide="3" aria-label="Certificado 4"></button>
                        <button type="button" class="hero-slider-dot" data-slide="4" aria-label="Certificado 5"></button>
                        <button type="button" class="hero-slider-dot" data-slide="5" aria-label="Certificado 6"></button>
                    </div>
                </div>

                <div class="hero-floating-badge">
                    <div>
                        <div class="badge-info-title">Domingo Isaín Plaza Caamaño</div>
                        <div class="badge-info-sub">RUT: 12.738.961-6 · Instalador Autorizado SEC Clase 3</div>
                    </div>
                    <a href="https://www.sec.cl" target="_blank" rel="noopener noreferrer" class="btn-verify-qr" title="Verificar en portal oficial SEC">
                        <span>Verificar SEC</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. SECCIÓN DETALLADA: DESGLOSE EXCLUSIVO DE CADA CERTIFICADO Y TÍTULO -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="section-container">
        <div class="section-header">
            <span class="section-pill">Desglose de Competencias y Títulos</span>
            <h2 class="section-title">¿Qué Significa Cada Certificación y <span class="gradient-text">Por Qué Protege tu Hogar</span>?</h2>
            <p class="section-desc">
                Explicado paso a paso para que entiendas con total claridad el grado técnico de Domingo Isaín, la seguridad que recibes y por qué no arriesgas tu patrimonio ni la vida de tu familia.
            </p>
        </div>

        <div class="cert-detail-list">

            <!-- 1. PUC: Solución de Patologías en la Vivienda -->
            <article class="cert-detail-card">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-patologias.jpg"
                     data-cert-title="Pontificia Universidad Católica de Chile - Solución de Patologías en la Vivienda"
                     data-cert-desc="Diploma otorgado por la Escuela de Construcción Civil de la PUC a Domingo Isaian Plaza Caamaño por aprobación del curso especializado en diagnóstico y reparación de patologías constructivas y estructurales.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-patologias.jpg" alt="Diploma PUC Solución de Patologías en la Vivienda" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge badge-uc">🎓 Pontificia Universidad Católica de Chile</span>
                    <h3 class="cert-detail-title">Solución de Patologías en la Vivienda</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Escuela de Construcción Civil (DECON UC)</span>
                        <span class="cert-meta-item">📍 Santiago de Chile</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Cuando existe una filtración o fuga oculta, un maestro común suele romper pisos y muros a ciegas debilitando la estructura de tu casa. Este diploma de la <strong>Pontificia Universidad Católica de Chile</strong> certifica que Domingo Isaín comprende la ciencia de los materiales y las patologías de la construcción (humedad ascendente, corrosión, fisuras, daño en losas) para encontrar la causa raíz sin provocar destrozos innecesarios.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Capacidad para diagnosticar la interacción entre fluidos (gas y agua) y los elementos estructurales de hormigón, ladrillo o madera. No se limita a parchar un tubo: repara de forma integral para que el problema jamás vuelva a brotar.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Por qué no basta con picar y cambiar el pedazo de cañería?"</div>
                        <div class="cert-faq-answer">Porque si no se comprende la patología del suelo o muro (humedad por capilaridad, pares galvánicos entre metales), la tubería nueva se volverá a perforar en pocos meses. Domingo aplica ingeniería para una solución definitiva.</div>
                    </div>
                </div>
            </article>

            <!-- 2. PUC: Técnicas de Supervisión de Obras para Edificación -->
            <article class="cert-detail-card reverse-layout">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-supervision-obras.jpg"
                     data-cert-title="Pontificia Universidad Católica de Chile - Supervisión de Obras para Edificación"
                     data-cert-desc="Diploma otorgado por la Escuela de Construcción Civil de la Pontificia Universidad Católica de Chile a Domingo Isain Plaza Caamaño en técnicas de supervisión, control de calidad y seguridad en edificación.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-uc-supervision-obras.jpg" alt="Diploma PUC Supervisión de Obras" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge badge-uc">🎓 Pontificia Universidad Católica de Chile</span>
                    <h3 class="cert-detail-title">Técnicas de Supervisión de Obras para Edificación</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Escuela de Construcción Civil</span>
                        <span class="cert-meta-item">📍 Santiago de Chile</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Te garantiza que cada intervención técnica en tu hogar o edificio se ejecuta con el más alto estándar de supervisión, orden, limpieza y control de calidad. Cero desprolijidad, cero escombros mal gestionados y estricto cumplimiento de cronogramas.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Gestión integral de obras de gasfitería e instalaciones sanitarias en casas particulares, comunidades de departamentos y proyectos comerciales. Supervisión rigurosa de soldaduras, presiones de prueba y trazados normados.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Cómo me aseguro de que el trabajo se haga bien y no me dejen el trabajo a medias?"</div>
                        <div class="cert-faq-answer">La formación de supervisión en la PUC inculca metodologías de ingeniería: recepción conforme de materiales, protocolos de prueba antes de cerrar y entrega con informe técnico formal.</div>
                    </div>
                </div>
            </article>

            <!-- 3. Superintendencia de Electricidad y Combustibles (SEC) -->
            <article class="cert-detail-card">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp"
                     data-cert-title="Licencia de Instalador de Gas SEC Clase 3 (Superintendencia de Electricidad y Combustibles)"
                     data-cert-desc="Licencia oficial otorgada a Domingo Isaín Plaza Caamaño (RUT 12.738.961-6) por la SEC. Habilitado legalmente para ejecutar instalaciones, pruebas de hermeticidad, levantamiento de sellos rojos y firma de certificados oficiales.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificados-sec-gas.webp" alt="Licencia SEC Domingo Isaín" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ver Licencia y QR</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge badge-sec">🛡️ Acreditación Legal Obligatoria SEC</span>
                    <h3 class="cert-detail-title">Licencia de Instalador de Gas SEC Clase 3</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Superintendencia de Electricidad y Combustibles</span>
                        <span class="cert-meta-item">🆔 RUT: 12.738.961-6</span>
                    </div>

                    <div class="cert-section-block block-sec">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            En Chile, <strong>es ilegal y peligroso</strong> que una persona sin carnet SEC intervenga una cañería de gas. Contratar a un instalador con licencia SEC vigente te da validez jurídica total ante las compañías distribuidoras (Metrogas, Lipigas, Abastible, Gasco) y mantiene vigente la póliza de seguro de tu vivienda contra siniestros.
                        </p>
                    </div>

                    <div class="cert-section-block block-sec">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Facultad legal para emitir certificados de hermeticidad, corregir anomalías sancionadas con <strong>Sello Rojo o Amarillo</strong>, realizar modificaciones reglamentarias de ductos y ventilaciones, y firmar la regularización para la obtención del <strong>Sello Verde</strong> según el Decreto Supremo Nº 66.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Qué pasa si un gásfiter sin SEC me repara la fuga?"</div>
                        <div class="cert-faq-answer">La empresa certificadora rechazará la obra, no te darán el Sello Verde, la compañía mantendrá el medidor cortado y, ante cualquier accidente, la aseguradora no pagará los daños por negligencia.</div>
                    </div>
                </div>
            </article>

            <!-- 4. ChileValora / ECERLAB: Gasfíter Certificado en Fugas -->
            <article class="cert-detail-card reverse-layout">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.jpg"
                     data-cert-title="Certificado de Competencias Laborales ChileValora / ECERLAB SpA"
                     data-cert-desc="Certificado oficial de competencias laborales en el perfil de Gasfíter P-4100-7126-001-V01 otorgado a Domingo Isain Plaza Caamaño (RUN 12.738.961-6) demostrando competencia en las 5 unidades laborales evaluadas.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-chilevalora-ecerlab.jpg" alt="Certificado ChileValora ECERLAB" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Certificado</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🏆 Sistema Nacional de Certificación ChileValora</span>
                    <h3 class="cert-detail-title">Gasfíter Certificado en Fugas y Cañerías</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Organismo Evaluador ECERLAB SpA</span>
                        <span class="cert-meta-item">📜 Perfil Ocupacional P-4100-7126-001-V01</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            ChileValora es la entidad del Estado que certifica que un profesional fue evaluado en terreno por auditores independientes, demostrando pericia absoluta en: <strong>1)</strong> Planificar el trabajo, <strong>2)</strong> Cumplir normas de seguridad y medioambiente, <strong>3)</strong> Instalar cañerías, <strong>4)</strong> Interpretar planos y <strong>5) Reparar fugas y filtraciones complejas</strong>.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Peritaje exacto de redes embutidas y subterráneas, lectura de planos isométricos y ejecución de empalmes y reparaciones de estanqueidad garantizada con cero margen de error.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Cómo sé si el gásfiter realmente sabe reparar fugas difíciles?"</div>
                        <div class="cert-faq-answer">Domingo posee la mención específica 'Competente en Reparar Fugas y/o Filtraciones' otorgada bajo rigurosa auditoría laboral por ChileValora.</div>
                    </div>
                </div>
            </article>

            <!-- 5. Euroinnova: Experto en Ingeniería Química -->
            <article class="cert-detail-card">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.jpg"
                     data-cert-title="Diploma Euroinnova - Experto en Ingeniería Química"
                     data-cert-desc="Diploma oficial con calificación SOBRESALIENTE expedido a Domingo Isain Plaza Caamaño tras completar 260 horas de formación en ingeniería química aplicada.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-quimica.jpg" alt="Diploma Experto en Ingeniería Química Euroinnova" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🧪 Especialización Internacional de Postgrado</span>
                    <h3 class="cert-detail-title">Experto en Ingeniería Química</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Euroinnova Formación (España)</span>
                        <span class="cert-meta-item">⭐ Calificación: SOBRESALIENTE</span>
                        <span class="cert-meta-item">⏱️ 260 Horas Lectivas</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            El gas licuado (GLP) y el gas natural (GN) son sustancias químicas volátiles que, si se mezclan mal con el aire, generan <strong>Monóxido de Carbono (CO)</strong>: un gas invisible y mortal que no tiene olor. La ingeniería química permite a Domingo calibrar quemadores, tiro de gases y mezclas de sellantes con exactitud molecular para que tu aire interior sea 100% puro y seguro.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Comprensión físico-química de la corrosión galvánica del cobre, comportamiento de presiones de vapor, cálculo estequiométrico de combustión y aplicación de polímeros sellantes de última generación (como Prodoral R6-1) resistentes a hidrocarburos y aditivos odorizantes (mercaptanos).
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Por qué huele a gas o me arden los ojos cuando enciendo el calefont?"</div>
                        <div class="cert-faq-answer">Se debe a una combustión incompleta con emanación de monóxido y óxidos de nitrógeno. Gracias a su formación en ingeniería química, Domingo recalibra la relación aire-gas eliminando de inmediato la toxicidad.</div>
                    </div>
                </div>
            </article>

            <!-- 6. Claustro Gómez: Técnico Superior en Ingeniería Industrial -->
            <article class="cert-detail-card reverse-layout">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.jpg"
                     data-cert-title="Título Propio Técnico Superior en Ingeniería Industrial"
                     data-cert-desc="Diploma oficial con registro CG1009 otorgado a Domingo Isain Plaza Camaño por Claustro Gómez Universitas por haber completado satisfactoriamente los módulos de Ingeniería Industrial.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-ingenieria-industrial.jpg" alt="Diploma Claustro Gómez Ingeniería Industrial" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🏛️ Título de Educación Superior</span>
                    <h3 class="cert-detail-title">Técnico Superior en Ingeniería Industrial</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Claustro Gómez Universitas</span>
                        <span class="cert-meta-item">📋 Registro Oficial: CG1009</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Ahorro económico y máxima eficiencia. La ingeniería industrial aplica métodos científicos para resolver fallas en el menor tiempo posible, optimizando el uso de materiales y reduciendo el costo de la reparación hasta en un 70% comparado con soluciones improvisadas.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Cálculo de caudales y pérdidas de carga en matrices de gas y agua potable, dimensionamiento óptimo de tuberías para calefonts de alta potencia, calderas y circuitos de calefacción central.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Por qué cuando se abre la ducha de abajo se apaga el agua caliente arriba?"</div>
                        <div class="cert-faq-answer">Es un fallo de dimensionamiento hidráulico de la red. Domingo aplica cálculos de ingeniería de fluidos para equilibrar los diámetros y devolver presión simultánea a todos los baños.</div>
                    </div>
                </div>
            </article>

            <!-- 7. Claustro Gómez: Máster en Ecología y Estudios Ambientales -->
            <article class="cert-detail-card">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-master-ecologia-ambiental.jpg"
                     data-cert-title="Máster Propio en Ecología y Estudios Ambientales"
                     data-cert-desc="Diploma oficial con registro CG1010 otorgado a Domingo Isain Plaza Camaño por Claustro Gómez Universitas correspondiente al programa de Máster Propio en Ecología y Estudios Ambientales.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-master-ecologia-ambiental.jpg" alt="Diploma Máster en Ecología y Estudios Ambientales" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🌿 Postgrado en Sostenibilidad y Medio Ambiente</span>
                    <h3 class="cert-detail-title">Máster en Ecología y Estudios Ambientales</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Claustro Gómez Universitas</span>
                        <span class="cert-meta-item">📋 Registro Oficial: CG1010</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Protección total del ambiente que respiran tus hijos, adultos mayores y mascotas. Un escape diminuto de gas no solo es riesgo de explosión, sino que degrada la calidad del aire del hogar y produce fatiga, dolores de cabeza y alergias respiratorias crónicas.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Auditoría de estanqueidad y ventilación ambiental, mitigación de fugas fugitivas de metano y GLP, y gestión ambiental responsable de residuos y químicos técnicos.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Es normal que en invierno la cocina huela un poco a gas cuando está todo cerrado?"</div>
                        <div class="cert-faq-answer">¡Nunca es normal! Es un indicio de microfuga o falta de ventilación cruzada. Domingo analiza los flujos de aire del recinto garantizando renovación de oxígeno continua.</div>
                    </div>
                </div>
            </article>

            <!-- 8. SOCATEC: Prueba de Hermeticidad DS66 -->
            <article class="cert-detail-card reverse-layout">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-hermeticidad.webp"
                     data-cert-title="Certificado de Aprobación SOCATEC - Pruebas de Hermeticidad DS66"
                     data-cert-desc="Certificado emitido a Domingo Isain Plaza Caamaño acreditando la aprobación del curso especializado en Pruebas de Hermeticidad en Instalaciones Interiores de Gas bajo normativa SEC DS66.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-hermeticidad.webp" alt="Certificado Prueba Hermeticidad SOCATEC" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Certificado</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">📜 Protocolo Oficial de Prueba de Estanqueidad</span>
                    <h3 class="cert-detail-title">Pruebas de Hermeticidad Manométrica DS66</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ SOCATEC Capacitaciones Técnicas</span>
                        <span class="cert-meta-item">⚖️ Normativa Decreto Supremo Nº 66</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Es la prueba científica irrefutable. Se inyecta aire presurizado a la cañería desconectada y se mide con un manómetro digital de alta precisión. Si la aguja no se mueve durante el tiempo reglamentario, se certifica que la red tiene <strong>0% de fugas</strong>.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Emisión formal del Informe de Prueba de Hermeticidad exigido por Metrogas, Lipigas, Abastible y Gasco para reponer el medidor de gas retirado tras un Sello Rojo.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Cómo sé con total certeza que ya no hay fugas en mi casa?"</div>
                        <div class="cert-faq-answer">Domingo realiza el test de hermeticidad manométrica en tu presencia: verás en el reloj del manómetro que la presión queda fija y sellada, respaldado con el certificado firmado.</div>
                    </div>
                </div>
            </article>

            <!-- 9. Escuela Electromecánica: Especialista en Gasfitería y Sanitarios -->
            <article class="cert-detail-card">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/diploma-gasfiteria-sanitarios-electromechanics.jpg"
                     data-cert-title="Diploma Escuela Electromecánica - Gasfitería y Sanitarios"
                     data-cert-desc="Diploma de Educación Técnica otorgado a Don Domingo Isain Plaza Caamaño como Especialista Técnico con mención en Gasfitería y Sanitarios bajo normas NCH 2728 e ISO 9001.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/diploma-gasfiteria-sanitarios-electromechanics.jpg" alt="Diploma Gasfitería y Sanitarios Escuela Electromecánica" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Diploma</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🔧 Formación Técnica Normada NCH 2728 / ISO 9001</span>
                    <h3 class="cert-detail-title">Especialista Técnico en Gasfitería y Sanitarios</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Escuela Electromecánica</span>
                        <span class="cert-meta-item">🏅 Certificación Internacional ISO 9001</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Dominio del oficio de fontanería pura: soldaduras fuertes de plata de alta temperatura que no se quiebran con sismos, uniones roscadas selladas con polímeros y llaves de paso certificadas de corte instantáneo.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Instalación y reparación de redes de cobre tipo L y K, cañerías de fierro galvanizado, termofusión en PPR para agua caliente, fitting sanitario y desagües.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿Por qué las soldaduras baratas vuelven a gotear o perder gas?"</div>
                        <div class="cert-faq-answer">Porque muchos maestros usan estaño blando o no desoxidan el cobre. Domingo aplica soldadura fuerte con varilla de plata y fundente industrial, con una vida útil superior a 50 años.</div>
                    </div>
                </div>
            </article>

            <!-- 10. Prodoral R6-1 Alemania: Sellado sin Romper -->
            <article class="cert-detail-card reverse-layout">
                <div class="cert-detail-visual" 
                     data-cert-src="<?= BASE_URL ?>/assets/images/certificates/certificado-prodoral.webp"
                     data-cert-title="Certificado Prodoral R6-1 Alemania - Homologación DIN EN 13090"
                     data-cert-desc="Certificado oficial de aplicador homologado para el sistema de sellado polimérico interior no destructivo de cañerías de gas bajo normativa alemana DIN EN 13090 / DVGW.">
                    <img src="<?= BASE_URL ?>/assets/images/certificates/certificado-prodoral.webp" alt="Certificado Prodoral R6-1 Alemania" class="cert-detail-img">
                    <span class="cert-zoom-hint">🔍 Ampliar Certificado</span>
                </div>
                <div class="cert-detail-content">
                    <span class="cert-header-badge">🇩🇪 Tecnología Alemana Exclusiva sin Romper</span>
                    <h3 class="cert-detail-title">Aplicador Oficial Autorizado Prodoral R6-1</h3>
                    <div class="cert-institution-meta">
                        <span class="cert-meta-item">🏛️ Tifell / Prodoral Alemania</span>
                        <span class="cert-meta-item">📜 Homologación DIN EN 13090 / DVGW</span>
                        <span class="cert-meta-item">🛡️ 3 Años de Garantía Escrita</span>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">💡 ¿Qué significa este título para ti como cliente?</div>
                        <p class="cert-block-text">
                            Es la solución milagrosa para quienes no quieren que albañiles rompan sus cerámicas, porcelanatos o pisos flotantes. Se inyecta una resina líquida alemana por dentro de la cañería que polimeriza y sella todas las microfugas en 4 horas, sin picar un solo centímetro de pared.
                        </p>
                    </div>

                    <div class="cert-section-block">
                        <div class="cert-block-title">🛠️ Grado técnico y capacidad para resolver tu problema:</div>
                        <p class="cert-block-text">
                            Domingo Isaín es de los pocos instaladores en Chile capacitados y equipados con la maquinaria de inyección presurizada alemana Prodoral R6-1, entregando <strong>Garantía por Escrito de 3 Años</strong> y certificado para la compañía de gas.
                        </p>
                    </div>

                    <div class="cert-faq-highlight">
                        <div class="cert-faq-question">❓ Pregunta de cliente: "¿El polímero tapa el paso del gas hacia los artefactos?"</div>
                        <div class="cert-faq-answer">No. El polímero forma una película elástica ultrafina en las paredes internas y roscas del tubo. El exceso se extrae con esponjas calibradas a presión, dejando la cañería 100% limpia y estanca.</div>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- 3. COTIZADOR INTERACTIVO Y FAQS -->
<?php include __DIR__ . '/../includes/quote-calculator.php'; ?>
<?php include __DIR__ . '/../includes/faq-section.php'; ?>
