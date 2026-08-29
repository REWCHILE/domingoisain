<?php
/**
 * Configuración Global y Datos de Negocio - Domingo Isaín
 * Gasfíter Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6)
 */

if (!defined('BASE_URL')) {
    // Detección dinámica de la URL base con soporte para Nginx Proxy / HTTPS
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
        || ($_SERVER['SERVER_PORT'] ?? 80) == 443 
        || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        || (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on');
    $protocol = $isHttps ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $basePath = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
    define('BASE_URL', rtrim($protocol . $host . $basePath, '/'));
}

// Datos de Identidad y Contacto
define('SITE_NAME', 'Domingo Isaín | Gasfíter Instalador Autorizado SEC');
define('AUTHOR_NAME', 'Domingo Isaín Plaza Caamaño');
define('AUTHOR_RUT', '12.738.961-6');
define('AUTHOR_LICENSE', 'Instalador de Gas Clase 3 - Licencia SEC Oficial');
define('PHONE_RAW', '+56949877316');
define('PHONE_DISPLAY', '+56 9 4987 7316');
define('PHONE_SECONDARY', '+56 9 3223 7072');
define('EMAIL_CONTACT', 'contacto@domingoisain.cl');
define('EMERGENCY_24_7', true);
define('EXPERIENCE_YEARS', '30+');
define('GUARANTEE_YEARS', '3 Años');
define('SEC_PORTAL_URL', 'https://www.sec.cl');

// Enlace de WhatsApp con mensaje predeterminado
define('WHATSAPP_LINK', 'https://api.whatsapp.com/send?phone=56949877316&text=' . urlencode('Hola Domingo, necesito atención técnica urgente de gasfitería / detección de fugas.'));

// Array Maestro de las 12+ Preguntas Frecuentes (Customer-First & Reassurance)
$FAQS = [
    [
        'category' => 'Urgencias y Seguridad',
        'question' => '¿Qué debo hacer de inmediato si siento olor a gas en mi casa o departamento?',
        'answer' => 'Lo primero es mantener la calma y no generar ninguna chispa: NO prendas ni apagues luces, no uses interruptores ni conectes artefactos eléctricos. Cierra de inmediato la llave de paso del artefacto (calefont/cocina) y la llave general del medidor o cilindro. Abre puertas y ventanas para ventilar ampliamente y sal de la vivienda. Luego, llámanos de inmediato a nuestra línea de urgencias al +56 9 4987 7316 para coordinar una inspección técnica urgente con equipos de detección electrónica y gas trazador.'
    ],
    [
        'category' => 'Sello Rojo y Normativa SEC',
        'question' => '¿Qué significa que mi edificio o casa tenga "Sello Rojo" o "Sello Amarillo" de la SEC y cómo se soluciona?',
        'answer' => 'El Sello Rojo indica que la entidad inspectora detectó anomalías críticas (fugas de gas, mala ventilación, artefactos defectuosos o falta de tiro en chimeneas), lo que prohíbe el suministro por riesgo inminente de explosión o intoxicación. El Sello Amarillo es una advertencia con plazo de corrección. Como Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6), realizo el levantamiento técnico: diagnóstico con instrumental certificado, corrección de fugas, adecuación a la norma DS66 y emisión del informe y certificado para que la certificadora otorgue el codiciado Sello Verde.'
    ],
    [
        'category' => 'Tecnología No Invasiva',
        'question' => '¿Es verdad que se pueden reparar fugas de gas sin romper cerámicas, muros ni pisos?',
        'answer' => 'Sí, totalmente verídico. Gracias a la tecnología alemana Prodoral R6-1, realizamos el sellado interior de cañerías de gas (cobre, fierro o acero) mediante un polímero de alta densidad que se inyecta a presión en la tubería y sella microfugas y porosidades desde adentro. Evita picar cerámicas caras, pisos flotantes o destruir paredes, ahorrándote hasta un 70% en costos de albañilería y tiempo de obra, con garantía escrita de 3 años.'
    ],
    [
        'category' => 'Tecnología No Invasiva',
        'question' => '¿Qué es exactamente Prodoral R6-1 y qué certificación tiene?',
        'answer' => 'Prodoral R6-1 es un polímero sellante de origen alemán con homologación técnica internacional (norma DIN EN 13090 y aprobación DVGW). A diferencia de resinas convencionales que se cristalizan o quiebran con sismos, Prodoral R6-1 mantiene una consistencia elástica permanente tipo silicona industrial (verificado en terreno por más de 5 años). Esto le otorga una altísima resistencia contra vibraciones y movimientos estructurales sin fisurarse, garantizando 0 fugas bajo la estricta normativa DS66 de la SEC.'
    ],
    [
        'category' => 'Garantía y Legalidad',
        'question' => '¿Por qué es indispensable contratar a un Gasfíter Instalador Autorizado por la SEC?',
        'answer' => 'Trabajar con gas implica vidas y patrimonio. Un gasfíter no certificado ("maestro chasquilla") carece de respaldo legal, no puede firmar certificados oficiales ni tramitar sellos verdes ante las distribuidoras (Metrogas, Lipigas, Abastible, Gasco). Domingo Isaín cuenta con licencia oficial Clase 3 verificable con RUT 12.738.961-6 en el portal de la SEC, asegurando cumplimiento estricto del Decreto Supremo Nº 66 y máxima seguridad para tu familia.'
    ],
    [
        'category' => 'Diagnóstico Electrónico',
        'question' => '¿Cómo localizan una fuga si la cañería está oculta bajo radier o muros?',
        'answer' => 'Utilizamos dos métodos de vanguardia no destructivos: 1) Gas Trazador (mezcla inocua de Nitrógeno e Hidrógeno que escapa por la microfisura y es detectada por sensores moleculares ultra sensibles) y 2) Geófono Sónico / Ultrasonido Digital para escuchar el sonido acústico del escape subterráneo. Esto nos permite marcar con precisión milimétrica el punto exacto sin adivinanzas.'
    ],
    [
        'category' => 'Documentación Oficial',
        'question' => '¿Entregan Certificado de Hermeticidad y documentación válida para la compañía de gas?',
        'answer' => 'Sí. Finalizado cada trabajo de detección, reparación o sellado, se realiza una prueba de hermeticidad manométrica y se entrega el correspondiente Certificado Oficial de Hermeticidad y recepción de obras firmado por Domingo Isaín como Instalador SEC Clase 3, completamente válido para presentar ante Metrogas, Lipigas, Abastible, Gasco y administraciones de condominios.'
    ],
    [
        'category' => 'Tiempos de Trabajo',
        'question' => '¿Cuánto demora el proceso de sellado y cuándo podré volver a usar el gas?',
        'answer' => 'El procedimiento es sumamente rápido: en instalaciones normales toma como máximo 2 horas, y en tramos pequeños de departamentos tardamos desde solo 30 a 45 minutos. Al dedicarnos mayoritariamente a esta especialidad con equipamiento alemán exclusivo, ejecutamos el sellado en tiempo récord y el suministro de gas queda rehabilitado y certificado el mismo día.'
    ],
    [
        'category' => 'Atención y Cobertura',
        'question' => '¿Atienden emergencias en fines de semana, feriados o de noche?',
        'answer' => 'Sí, disponemos de servicio de atención de emergencias las 24 horas del día, los 7 días de la semana (24/7) en toda la Región Metropolitana, incluyendo feriados y fines de semana. Si te cortaron el gas por fuga o tienes una urgencia de calefont, comunícate al +56 9 4987 7316.'
    ],
    [
        'category' => 'Costos y Presupuestos',
        'question' => '¿Cómo se calcula el valor del servicio y cómo puedo cotizar?',
        'answer' => 'El costo depende del tipo de propiedad (departamento, casa de 1 o 2 pisos), la longitud estimada de cañerías y el servicio requerido (detección de fuga, sellado Prodoral, reparación puntual o normalización de sello rojo). Ofrecemos cotización previa transparente y sin sorpresas. Puedes usar nuestro cotizador en línea en la web o enviarnos un mensaje por WhatsApp con los detalles de tu vivienda para recibir un presupuesto rápido.'
    ],
    [
        'category' => 'Calefonts y Calderas',
        'question' => '¿También realizan mantención y cambio de calefonts y termos?',
        'answer' => 'Sí, realizamos instalación, reparación y mantención preventiva de calefonts de todas las marcas (Junkers, Splendid, Mademsa, Rheem, Trotter, Neckar), regulación de quemadores, cambio de membranas, sensores de tiro y ductos de evacuación de gases cumpliendo la normativa de ventilación SEC.'
    ],
    [
        'category' => 'Cobertura Geográfica',
        'question' => '¿Qué comunas de Santiago y la Región Metropolitana atienden?',
        'answer' => 'Atendemos todas las comunas del Gran Santiago: Las Condes, Vitacura, Lo Barnechea, Providencia, Ñuñoa, La Reina, Santiago Centro, San Miguel, Peñalolén, Macul, La Florida, Maipú, Pudahuel, Quilicura, San Bernardo, Puente Alto, Colina, Chicureo, y también servicios especiales en la V Región (Litoral Central) previa coordinación.'
    ]
];

// Mapeo Maestro de Páginas y URLs Indexadas
$PAGES_CONFIG = [
    '/' => [
        'title' => '9 4987 7316 | Gásfiter Certificado SEC en Santiago 24/7 | Domingo Isaín',
        'description' => 'Domingo Isaín Plaza Caamaño, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con 30+ años de experiencia. Detección y sellado de fugas de gas sin picar pisos ni muros con tecnología alemana Prodoral R6-1. +1.800 clientes. Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/',
        'h1' => 'Gasfíter Instalador Autorizado SEC Clase 3 en Santiago',
        'subtitle' => 'Especialista en Detección y Sellado de Fugas de Gas Sin Romper con Tecnología Alemana Prodoral R6-1',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'home'
    ],
    '/fugas/' => [
        'title' => '9 4987 7316 | Fugas de Gas Sin Romper en Santiago | Domingo Isaín SEC',
        'description' => '¿Fuga de gas o medidor cortado? Domingo Isaín (SEC Clase 3, RUT 12.738.961-6) detecta con geófono digital y sella cañerías por dentro con Prodoral R6-1 alemán sin romper cerámicas ni pisos. Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/fugas/',
        'h1' => 'Detección y Sellado de Fugas de Gas Sin Romper Muros ni Pisos',
        'subtitle' => 'Solución definitiva para fugas subterráneas y empotradas con polímero alemán Prodoral R6-1 y Geófono Digital',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'fugas'
    ],
    '/fuga-de-gas/' => [
        'title' => '9 4987 7316 | Urgencias por Fuga de Gas 24 Horas | Domingo Isaín SEC',
        'description' => '¿Olor a gas o suministro suspendido? Atención de urgencia 24/7 en toda la Región Metropolitana por Domingo Isaín, Instalador Autorizado SEC Clase 3. Restablecimiento rápido y certificado DS66. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/fuga-de-gas/',
        'h1' => 'Urgencias por Fuga de Gas: Diagnóstico y Sellado Rápido',
        'subtitle' => 'Restablecemos tu suministro de gas con máxima seguridad y certificación legal ante distribuidoras',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'fugas'
    ],
    '/fugas-de-gas-santiago/' => [
        'title' => '9 4987 7316 | Fugas de Gas en Santiago · Detección y Sellado SEC 24/7',
        'description' => 'Servicio #1 en Santiago para reparación de fugas de gas interiores sin picar pisos ni muros. Domingo Isaín, Instalador SEC Clase 3 (RUT 12.738.961-6). Polímero alemán Prodoral R6-1 y garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/fugas-de-gas-santiago/',
        'h1' => 'Fugas de Gas en Santiago · Detección y Sellado Sin Romper',
        'subtitle' => 'Solución garantizada en el día para casas, departamentos y condominios en toda la RM',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'fugas-de-gas-santiago'
    ],
    '/gasfiter/' => [
        'title' => '9 4987 7316 | Gasfitería Integral Autorizada SEC en Santiago | Domingo Isaín',
        'description' => 'Gasfitería profesional en Santiago: redes de gas y agua, reparación de calefonts, cambio de cañerías y emergencias. Domingo Isaín Plaza C., Instalador SEC Clase 3 (RUT 12.738.961-6) con 30+ años de experiencia. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter/',
        'h1' => 'Servicios Integrales de Gasfitería Autorizada en Santiago',
        'subtitle' => 'Más de 30 años de experiencia al servicio de hogares, empresas y condominios en toda la Región Metropolitana',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'gasfiter'
    ],
    '/gasfiter-certificado/' => [
        'title' => '9 4987 7316 | Gásfiter Certificado SEC Clase 3 | Domingo Isaín Plaza C.',
        'description' => 'Contrata a un instalador certificado por la SEC (RUT 12.738.961-6). Domingo Isaín cuenta con 30+ años de experiencia en gas y agua potable, pruebas de hermeticidad y regularización DS66. Garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-certificado/',
        'h1' => 'Gasfíter Certificado por la SEC: Tu Seguridad en Manos Expertas',
        'subtitle' => 'Credencial y autorización vigente para obras de gas, agua potable y regularización de instalaciones',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'gasfiter-certificado'
    ],
    '/gasfiter-certificado-sec/' => [
        'title' => '9 4987 7316 | Gásfiter Certificado SEC en Santiago | Domingo Isaín',
        'description' => '¿Buscas un gasfíter certificado SEC confiable? Domingo Isaín Plaza Caamaño (RUT 12.738.961-6) ofrece atención directa 24/7 en toda la RM. Detección de fugas, calefonts y certificación DS66. Garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-certificado-sec/',
        'h1' => 'Gasfíter Certificado SEC: Respaldo Oficial y Garantía por Escrito',
        'subtitle' => 'No arriesgues la seguridad de tu hogar con personal no autorizado. Calidad avalada por la normativa chilena',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'instalador-sec'
    ],
    '/gasfiter-autorizado/' => [
        'title' => '9 4987 7316 | Gasfíter Autorizado SEC en Región Metropolitana | Domingo Isaín',
        'description' => 'Instalador autorizado SEC con cobertura express en Las Condes, Providencia, Vitacura, Santiago Centro, Ñuñoa y toda la RM. Domingo Isaín (RUT 12.738.961-6). Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-autorizado/',
        'h1' => 'Instalador y Gasfíter Autorizado en Toda la Región Metropolitana',
        'subtitle' => 'Atención rápida en tu comuna con equipamiento móvil de detección y prueba de hermeticidad',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'gasfiter-certificado'
    ],
    '/gasfiter-autorizado-sec/' => [
        'title' => '9 4987 7316 | Gasfíter Autorizado SEC 24 Horas en Santiago | Domingo Isaín',
        'description' => 'Servicio de urgencias 24/7 para fugas de gas, corte de suministro y normalización de artefactos en Santiago. Domingo Isaín, Instalador SEC Clase 3 (RUT 12.738.961-6). Llame directo al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-autorizado-sec/',
        'h1' => 'Servicio de Gasfitería Autorizada SEC Disponible 24/7',
        'subtitle' => 'Respuesta inmediata ante emergencias de gas en departamentos, casas y comunidades de edificios',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'gasfiter-certificado'
    ],
    '/gasfiter-sec/' => [
        'title' => '9 4987 7316 | Gasfíter SEC en Santiago · Licencia Oficial Clase 3 | Domingo Isaín',
        'description' => 'Profesional acreditado por la SEC (RUT 12.738.961-6). Domingo Isaín Plaza Caamaño ofrece más de 30 años de experiencia técnica en normalización de gas, sellado sin romper y certificación DS66. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-sec/',
        'h1' => 'Gasfíter SEC en Santiago · Domingo Isaín Plaza Caamaño',
        'subtitle' => 'Autorización oficial vigente para instalaciones de gas, pruebas de hermeticidad y agua potable',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'gasfiter-sec'
    ],
    '/gasfiter-a-domicilio/' => [
        'title' => '9 4987 7316 | Gasfíter a Domicilio en Santiago 24/7 | Domingo Isaín SEC',
        'description' => 'Gasfíter a domicilio con llegada rápida en todas las comunas de Santiago. Domingo Isaín Plaza C., Instalador SEC Clase 3 (RUT 12.738.961-6). Diagnóstico calibrado, sellado de gas sin romper y garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-a-domicilio/',
        'h1' => 'Gasfíter a Domicilio en Santiago · Autorizado SEC 24/7',
        'subtitle' => 'Atención directa en tu hogar con taller móvil y equipamiento de diagnóstico de última generación',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'gasfiter-a-domicilio'
    ],
    '/gasfiter-santiago/' => [
        'title' => '9 4987 7316 | Gasfíter en Santiago · Certificado SEC Clase 3 (24/7)',
        'description' => 'Gasfitería autorizada SEC en todo el Gran Santiago: Las Condes, Providencia, Vitacura, Ñuñoa, Santiago Centro, Maipú, La Florida. Domingo Isaín (RUT 12.738.961-6). Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-santiago/',
        'h1' => 'Gasfíter en Santiago · Certificado SEC Clase 3 (24/7)',
        'subtitle' => 'Cobertura en todas las comunas de la Región Metropolitana con equipamiento de vanguardia',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'gasfiter-santiago'
    ],
    '/gasfiter-urgencias/' => [
        'title' => '9 4987 7316 | Gasfíter de Urgencias 24 Horas en Santiago | Domingo Isaín',
        'description' => '🚨 Urgencias de gas y agua 24 horas en Santiago. Domingo Isaín Plaza C., Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6). Detección de fugas, corte de agua y contención inmediata. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-urgencias/',
        'h1' => 'Gasfíter de Urgencias en Santiago · Respuesta Inmediata 24/7',
        'subtitle' => 'Línea de emergencia disponible las 24 horas para hogares, comercios y comunidades de edificios',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'gasfiter-urgencias'
    ],
    '/gasfiter-calefont/' => [
        'title' => '9 4987 7316 | Gasfíter de Calefont en Santiago · Reparación e Instalación SEC',
        'description' => 'Reparación y mantención de calefonts y calderas Junkers, Splendid, Mademsa, Rheem, Trotter, Neckar. Domingo Isaín, Instalador SEC Clase 3 (RUT 12.738.961-6). Atención el mismo día. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-calefont/',
        'h1' => 'Gasfíter de Calefont en Santiago · Instalación y Reparación SEC',
        'subtitle' => 'Diagnóstico multimarca en terreno, repuestos normados y ajuste seguro de combustión',
        'og_image' => BASE_URL . '/assets/images/hero-calefont.jpg',
        'view' => 'gasfiter-calefont'
    ],
    '/reparacion-de-calefont/' => [
        'title' => '9 4987 7316 | Reparación de Calefont en Santiago · Servicio Técnico SEC',
        'description' => '¿Calefont no enciende o se apaga? Domingo Isaín (Instalador SEC Clase 3, RUT 12.738.961-6) repara calefonts ionizados y tiro forzado en el día con repuestos originales. Garantía por escrito. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/reparacion-de-calefont/',
        'h1' => 'Reparación de Calefont en Santiago · Atención el Mismo Día',
        'subtitle' => 'Servicio técnico especializado multimarca con certificación oficial de seguridad SEC',
        'og_image' => BASE_URL . '/assets/images/hero-calefont.jpg',
        'view' => 'reparacion-de-calefont'
    ],
    '/instalador-sec/' => [
        'title' => '9 4987 7316 | Instalador SEC Clase 3 Oficial | Regularización Sello Rojo DS66',
        'description' => 'Solución técnica y regularización de Sellos Rojos y Amarillos de gas. Pruebas de hermeticidad certificadas para Metrogas, Lipigas, Abastible y Gasco. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/instalador-sec/',
        'h1' => 'Instalador SEC Clase 3: Regularización y Sellos Verdes',
        'subtitle' => 'Levantamiento técnico de sellos rojos, normalización de tuberías y emisión de certificados reglamentarios',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'instalador-sec'
    ],
    '/instalador-de-gas-sec/' => [
        'title' => '9 4987 7316 | Instalador de Gas SEC en Santiago · Domingo Isaín Clase 3',
        'description' => 'Instalador de Gas Autorizado por la SEC (RUT 12.738.961-6). Proyectos de gas, recepción de obras, normalización DS66 y pruebas de hermeticidad en Santiago. Garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/instalador-de-gas-sec/',
        'h1' => 'Instalador de Gas SEC en Santiago · Respaldo y Garantía Legal',
        'subtitle' => 'Proyectos de gas, recepción de obras, normalización de sellos rojos y pruebas de hermeticidad certificadas',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'instalador-de-gas-sec'
    ],
    '/instalador-autorizado-sec/' => [
        'title' => '9 4987 7316 | Instalador Autorizado SEC en Santiago · Domingo Isaín Plaza C.',
        'description' => 'Certifica tu instalación de gas con Domingo Isaín, Instalador Autorizado SEC Clase 3 (RUT 12.738.961-6) con más de 30 años de experiencia. Firma autorizada para distribuidoras. Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/instalador-autorizado-sec/',
        'h1' => 'Instalador Autorizado SEC en Santiago · Domingo Isaín Plaza C.',
        'subtitle' => 'Acreditación oficial vigente para obras de gas, sellado no invasivo y regularización DS66',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'instalador-autorizado-sec'
    ],
    '/especialista-en-fugas-de-gas/' => [
        'title' => '9 4987 7316 | Especialista en Fugas de Gas en Santiago | Domingo Isaín SEC',
        'description' => 'Especialista en detección y sellado de fugas de gas subterráneas y empotradas sin romper muros ni pisos. Polímero alemán Prodoral R6-1. Domingo Isaín (SEC Clase 3, RUT 12.738.961-6). Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/especialista-en-fugas-de-gas/',
        'h1' => 'Especialista en Fugas de Gas en Santiago · Sellado Sin Romper',
        'subtitle' => 'Más de 30 años de experiencia, diagnóstico milimétrico con geófono digital y certificación oficial SEC',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'especialista-en-fugas-de-gas'
    ],
    '/experto-en-fugas-de-gas/' => [
        'title' => '9 4987 7316 | Experto en Fugas de Gas en Santiago | Domingo Isaín Perito SEC',
        'description' => 'Peritaje técnico y solución definitiva para fugas de gas complejas en comunidades de edificios, condominios y casas. Domingo Isaín Plaza C. (SEC Clase 3, RUT 12.738.961-6). Garantía 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/experto-en-fugas-de-gas/',
        'h1' => 'Experto en Fugas de Gas en Santiago · Peritaje y Sellado SEC',
        'subtitle' => 'Solución garantizada para casos difíciles, fugas intermitentes y levantamiento urgente de sello rojo',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'experto-en-fugas-de-gas'
    ],
    '/tecnico-en-fugas-de-gas/' => [
        'title' => '9 4987 7316 | Técnico en Fugas de Gas en Santiago 24/7 | Domingo Isaín SEC',
        'description' => 'Visita técnica urgente para detección de fugas de gas, prueba manométrica, mantención de calefonts y sellado sin romper. Domingo Isaín (SEC Clase 3, RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/tecnico-en-fugas-de-gas/',
        'h1' => 'Técnico en Fugas de Gas en Santiago · Atención Rápida 24/7',
        'subtitle' => 'Técnico calificado SEC Clase 3 con equipamiento móvil de detección y prueba',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'tecnico-en-fugas-de-gas'
    ],
    '/deteccion-fuga-de-gas/' => [
        'title' => '9 4987 7316 | Detección de Fugas de Gas Sin Romper | Domingo Isaín SEC',
        'description' => 'Localizamos fugas de gas invisibles con gas trazador (N2/H2), geófono ultrasónico y manómetros digitales de precisión. Certificado oficial DS66. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/deteccion-fuga-de-gas/',
        'h1' => 'Detección de Fugas de Gas en Santiago · Sin Romper Muros',
        'subtitle' => 'Diagnóstico no invasivo de fugas subterráneas y empotradas con instrumental calibrado de alta gama',
        'og_image' => BASE_URL . '/assets/images/hero-especialista-fugas.jpg',
        'view' => 'deteccion-fuga-de-gas'
    ],
    '/fuga-de-agua/' => [
        'title' => '9 4987 7316 | Detección de Fugas de Agua Ocultas con Geófono | Domingo Isaín',
        'description' => '¿Cuenta de agua alta o humedad en muros? Localizamos filtraciones subterráneas y bajo radier con geófono digital y gas trazador sin romper a ciegas. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/fuga-de-agua/',
        'h1' => 'Detección de Fugas de Agua Ocultas con Geófono Digital',
        'subtitle' => 'Localización acústica y molecular de filtraciones de agua potable en casas y departamentos de Santiago',
        'og_image' => BASE_URL . '/assets/images/hero-fuga-agua.jpg',
        'view' => 'fuga-de-agua'
    ],
    '/deteccion-con-gas-trazador/' => [
        'title' => '9 4987 7316 | Detección con Gas Trazador (N2/H2) en Santiago | Domingo Isaín',
        'description' => 'Tecnología molecular con gas trazador inerte (Nitrógeno 95% + Hidrógeno 5%) para encontrar microfugas de gas y agua bajo losas y radieres sin romper. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/deteccion-con-gas-trazador/',
        'h1' => 'Detección con Gas Trazador (N2/H2) · Precisión Milimétrica',
        'subtitle' => 'El método no destructivo más avanzado para localizar fugas subterráneas ocultas en minutos',
        'og_image' => BASE_URL . '/assets/images/hero-gas-trazador.jpg',
        'view' => 'deteccion-con-gas-trazador'
    ],
    '/deteccion-con-camara-termica-termografia/' => [
        'title' => '9 4987 7316 | Detección con Cámara Térmica y Termografía | Domingo Isaín',
        'description' => 'Inspección termográfica infrarroja para ubicar fugas de agua caliente, losas radiantes y humedad en muros sin perforar. Diagnóstico visual digital. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/deteccion-con-camara-termica-termografia/',
        'h1' => 'Detección con Cámara Térmica y Termografía en Santiago',
        'subtitle' => 'Mapeo térmico de alta resolución para filtraciones en calderas, losa radiante y cañerías empotradas',
        'og_image' => BASE_URL . '/assets/images/hero-camara-termica.jpg',
        'view' => 'deteccion-con-camara-termica-termografia'
    ],
    '/deteccion-con-ultrasonido/' => [
        'title' => '9 4987 7316 | Detección de Fugas con Ultrasonido y Geófono | Domingo Isaín',
        'description' => 'Geófonos sónicos digitales y tecnología ultrasónica para ubicar fugas de agua y gas ocultas sin picar pisos ni destruir cerámicas. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/deteccion-con-ultrasonido/',
        'h1' => 'Detección Electrónica con Ultrasonido, Geófono y Gas Trazador',
        'subtitle' => 'Localización acústica y molecular de fugas subterráneas con precisión milimétrica sin daños estructurales',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'ultrasonido'
    ],
    '/ultrasonido/' => [
        'title' => '9 4987 7316 | Detección con Geófono y Ultrasonido Digital | Domingo Isaín',
        'description' => 'Localización acústica y electrónica de fugas ocultas bajo radier y muros sin romper ni picar. Instrumental digital calibrado en Santiago. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/ultrasonido/',
        'h1' => 'Detección de Fugas con Geófono y Ultrasonido Digital',
        'subtitle' => 'Tecnología no destructiva para ubicar el punto exacto de la filtración en minutos',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'ultrasonido'
    ],
    '/prodoral/' => [
        'title' => '9 4987 7316 | Sellado de Fugas de Gas con Prodoral R6-1 Alemán | Domingo Isaín',
        'description' => 'Tecnología alemana de inyección de polímero Prodoral R6-1 (norma DIN EN 13090 / DVGW). Sella fugas interiores de gas sin picar pisos ni paredes. Garantía de 3 años. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/prodoral/',
        'h1' => 'Sellado de Fugas de Gas con Tecnología Alemana Prodoral R6-1',
        'subtitle' => 'La solución más limpia, rápida y económica para reparar tuberías de gas sin obras de albañilería',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'prodoral-para-fugas-de-gas'
    ],
    '/prodoral-para-fugas-de-gas/' => [
        'title' => '9 4987 7316 | Prodoral R6-1 para Fugas de Gas Sin Romper | Domingo Isaín SEC',
        'description' => 'Polímero sellante alemán Prodoral R6-1 con certificación DVGW y DIN EN 13090. Sella cañerías de gas desde adentro sin picar. 3 años de garantía. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/prodoral-para-fugas-de-gas/',
        'h1' => 'Polímero Prodoral R6-1 para Sellado de Fugas de Gas Sin Romper',
        'subtitle' => 'Rehabilitación interior de tuberías de cobre, fierro y acero en tiempo récord con elasticidad antisísmica',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'prodoral-para-fugas-de-gas'
    ],
    '/prodoral-para-fugas-de-gas' => [
        'title' => '9 4987 7316 | Prodoral R6-1 para Fugas de Gas Sin Romper | Domingo Isaín SEC',
        'description' => 'Polímero sellante alemán Prodoral R6-1 con certificación DVGW y DIN EN 13090. Sella cañerías de gas desde adentro sin picar. 3 años de garantía. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/prodoral-para-fugas-de-gas/',
        'h1' => 'Polímero Prodoral R6-1 para Sellado de Fugas de Gas Sin Romper',
        'subtitle' => 'Rehabilitación interior de tuberías de cobre, fierro y acero en tiempo récord con elasticidad antisísmica',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'prodoral-para-fugas-de-gas'
    ],
    '/sello-rojo-sec/' => [
        'title' => '9 4987 7316 | Solución de Sello Rojo SEC de Gas en Santiago | Domingo Isaín',
        'description' => '¿Te cortaron el gas por Sello Rojo o Amarillo? Regularizamos tus instalaciones según norma DS66 y tramitamos tu Sello Verde con Metrogas y distribuidoras. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/sello-rojo-sec/',
        'h1' => 'Solución y Levantamiento de Sellos Rojos SEC de Gas',
        'subtitle' => 'Inspección técnica, corrección de anomalías y certificación oficial para rehabilitar tu suministro',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'instalador-sec'
    ],
    '/sello-rojo/' => [
        'title' => '9 4987 7316 | Levantamiento de Sello Rojo de Gas en Santiago | Domingo Isaín',
        'description' => 'Normalización técnica de instalaciones de gas con Sello Rojo ante la SEC y distribuidoras. Certificados oficiales de hermeticidad. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/sello-rojo/',
        'h1' => 'Normalización y Regularización de Sello Rojo de Gas',
        'subtitle' => 'Diagnóstico con instrumental certificado y trámite rápido ante entidades certificadoras',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'instalador-sec'
    ],
    '/sello-verde-gas/' => [
        'title' => '9 4987 7316 | Sello Verde de Gas en Santiago · Regularización SEC DS66',
        'description' => 'Tramitación y regularización de Sello Verde de Gas para casas, departamentos y edificios. Domingo Isaín Plaza C., Instalador SEC Clase 3 (RUT 12.738.961-6). Prueba de hermeticidad y adecuación de ventilaciones. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/sello-verde-gas/',
        'h1' => 'Sello Verde de Gas en Santiago · Regularización de Sellos Rojos',
        'subtitle' => 'Normalización integral de instalaciones de gas y tramitación de Sello Verde ante distribuidoras',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'sello-verde-gas'
    ],
    '/prueba-de-hermeticidad/' => [
        'title' => '9 4987 7316 | Prueba de Hermeticidad de Gas en Santiago · Certificado SEC DS66',
        'description' => 'Pruebas de hermeticidad manométricas con manómetros digitales calibrados. Emisión de certificado oficial de hermeticidad para Metrogas, Lipigas, Abastible y Gasco. Domingo Isaín (RUT 12.738.961-6). Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/prueba-de-hermeticidad/',
        'h1' => 'Prueba de Hermeticidad de Gas · Certificado Oficial SEC',
        'subtitle' => 'Ensayo manométrico normado bajo protocolo DS66 con entrega de certificado firmado en el acto',
        'og_image' => BASE_URL . '/assets/images/hero-home-main.webp',
        'view' => 'prueba-de-hermeticidad'
    ],
    '/certificados/' => [
        'title' => '9 4987 7316 | Licencia SEC Oficial y Certificados Técnicos | Domingo Isaín',
        'description' => 'Credenciales oficiales verificables ante la Superintendencia de Electricidad y Combustibles (SEC) RUT 12.738.961-6 y certificación alemana Prodoral. Domingo Isaín Plaza Caamaño. Llame al 9 4987 7316.',
        'canonical' => BASE_URL . '/certificados/',
        'h1' => 'Certificaciones Oficiales y Licencia SEC de Gas',
        'subtitle' => 'Máximo respaldo técnico y legal en todos nuestros trabajos de gasfitería e ingeniería',
        'og_image' => BASE_URL . '/assets/images/og-image.jpg',
        'view' => 'home'
    ]
];

/**
 * Función Helper para generar el JSON-LD de FAQPage enriquecido
 */
function getFaqJsonLd($faqs) {
    $mainEntities = [];
    foreach ($faqs as $faq) {
        $mainEntities[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer']
            ]
        ];
    }

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntities
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Función Helper para generar el JSON-LD de LocalBusiness / Plumber (GEO & LLM Optimized)
 */
function getLocalBusinessJsonLd() {
    $data = [
        '@context' => 'https://schema.org',
        '@type' => ['LocalBusiness', 'Plumber', 'ProfessionalService'],
        '@id' => BASE_URL . '/#localbusiness',
        'name' => 'Domingo Isaín - Gasfíter Instalador Autorizado SEC Clase 3',
        'alternateName' => ['SellafuGas® Domingo Isaín', 'Domingo Isaín Plaza Caamaño', 'Gasfíter SEC Domingo Isaín'],
        'description' => 'Servicio técnico especializado de Domingo Isaín Plaza Caamaño (RUT 12.738.961-6). Detección milimétrica y sellado de fugas de gas sin picar muros ni pisos con tecnología alemana Prodoral R6-1, geófono ultrasonido digital, gas trazador, levantamiento de sellos rojos SEC bajo norma DS66 y gasfitería general en Santiago de Chile.',
        'url' => BASE_URL,
        'telephone' => PHONE_RAW,
        'email' => EMAIL_CONTACT,
        'priceRange' => '$$',
        'image' => [
            BASE_URL . '/assets/images/og-image.jpg',
            BASE_URL . '/assets/images/domingo-isain.webp',
            BASE_URL . '/assets/images/hero-home-main.webp',
            BASE_URL . '/assets/images/certificates/certificado-prodoral.webp'
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Santiago Centro / Cobertura Región Metropolitana',
            'addressLocality' => 'Santiago',
            'addressRegion' => 'Región Metropolitana',
            'postalCode' => '8320000',
            'addressCountry' => 'CL'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -33.4488897,
            'longitude' => -70.6692655
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                'opens' => '00:00',
                'closes' => '23:59'
            ]
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => PHONE_RAW,
            'contactType' => 'emergency service',
            'areaServed' => 'CL-RM',
            'availableLanguage' => ['es', 'Spanish'],
            'hoursAvailable' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                'opens' => '00:00',
                'closes' => '23:59'
            ]
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '187',
            'bestRating' => '5',
            'worstRating' => '1'
        ],
        'hasCredential' => [
            [
                '@type' => 'EducationalOccupationalCredential',
                'name' => 'Licencia de Instalador de Gas Clase 3 SEC',
                'credentialCategory' => 'Licencia Oficial de Instalador de Gas Clase 3',
                'recognizedBy' => [
                    '@type' => 'GovernmentOrganization',
                    'name' => 'Superintendencia de Electricidad y Combustibles (SEC)',
                    'url' => 'https://www.sec.cl'
                ]
            ],
            [
                '@type' => 'EducationalOccupationalCredential',
                'name' => 'Certificación Técnica Prodoral R6-1 (DIN EN 13090 / DVGW)',
                'credentialCategory' => 'Especialista Homologado en Sellado No Invasivo de Redes de Gas',
                'recognizedBy' => [
                    '@type' => 'Organization',
                    'name' => 'Prodoral Germany / DVGW'
                ]
            ]
        ],
        'founder' => [
            '@type' => 'Person',
            'name' => AUTHOR_NAME,
            'jobTitle' => 'Gasfíter e Instalador de Gas Autorizado SEC Clase 3',
            'identifier' => AUTHOR_RUT,
            'image' => BASE_URL . '/assets/images/domingo-isain.webp',
            'knowsAbout' => [
                'Detección de fugas de gas',
                'Sellado de tuberías de gas con Prodoral R6-1',
                'Normativa Decreto Supremo Nº 66 (DS66)',
                'Levantamiento de Sello Rojo SEC',
                'Pruebas de Hermeticidad Manométricas',
                'Geófono sónico digital y gas trazador'
            ]
        ],
        'knowsAbout' => [
            'Detección de fugas de gas sin romper',
            'Sellado de cañerías con polímero alemán Prodoral R6-1',
            'Instalaciones y regularización de gas bajo norma DS66',
            'Solución de Sellos Rojos y Amarillos de la SEC',
            'Pruebas manométricas de hermeticidad con certificado oficial',
            'Detección acústica con geófono ultrasónico digital',
            'Localización molecular con gas trazador (N2/H2)',
            'Mantención, conversión e instalación de calefonts y termos',
            'Gasfitería integral de cobre, fierro, acero y PPR',
            'Certificaciones oficiales para Metrogas, Lipigas, Abastible y Gasco'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Catálogo Oficial de Servicios Técnicos de Gas y Gasfitería',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Detección y Sellado de Fugas de Gas Sin Romper (Prodoral R6-1)',
                        'description' => 'Reparación no destructiva de fugas de gas interiores inyectando polímero alemán Prodoral R6-1. Garantía 3 años.',
                        'url' => BASE_URL . '/fugas/'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Levantamiento y Solución de Sello Rojo SEC',
                        'description' => 'Diagnóstico, adecuación técnica bajo norma DS66, prueba de hermeticidad y tramitación del Sello Verde ante certificadoras.',
                        'url' => BASE_URL . '/instalador-sec/'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Detección Electrónica con Ultrasonido, Geófono y Gas Trazador',
                        'description' => 'Localización milimétrica subterránea de fugas de gas y agua con sensores moleculares y acústicos.',
                        'url' => BASE_URL . '/deteccion-con-ultrasonido/'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Gasfitería Autorizada e Instalaciones Certificadas SEC',
                        'description' => 'Servicios integrales de gasfitería con licencia oficial SEC Clase 3 (RUT 12.738.961-6).',
                        'url' => BASE_URL . '/gasfiter-certificado/'
                    ]
                ]
            ]
        ],
        'areaServed' => [
            'Santiago', 'Las Condes', 'Vitacura', 'Providencia', 'Ñuñoa', 'La Reina',
            'Lo Barnechea', 'Santiago Centro', 'San Miguel', 'La Florida', 'Maipú',
            'Peñalolén', 'Macul', 'Pudahuel', 'Quilicura', 'San Bernardo', 'Puente Alto',
            'Colina', 'Chicureo', 'Lampa', 'Región Metropolitana'
        ],
        'sameAs' => [
            'https://sellafugas.cl',
            'https://instalgaschile.cl',
            'https://gasfiter-autorizado.cl',
            'https://www.sec.cl'
        ]
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Función Helper para generar el JSON-LD de WebSite (GEO & Search Entity)
 */
function getWebSiteJsonLd() {
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => BASE_URL . '/#website',
        'url' => BASE_URL . '/',
        'name' => 'Domingo Isaín | Gasfíter Instalador Autorizado SEC Clase 3',
        'alternateName' => 'Domingo Isaín Detección y Sellado de Fugas de Gas Sin Romper',
        'description' => 'Sitio web oficial de Domingo Isaín Plaza Caamaño (RUT 12.738.961-6). Servicios de gasfitería autorizada SEC, detección electrónica y sellado no destructivo de fugas de gas en Santiago de Chile.',
        'inLanguage' => 'es-CL',
        'publisher' => [
            '@id' => BASE_URL . '/#localbusiness'
        ]
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Función Helper para BreadcrumbList
 */
function getBreadcrumbJsonLd($currentPath, $pageTitle) {
    $items = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Inicio',
            'item' => BASE_URL . '/'
        ]
    ];

    if ($currentPath !== '/' && $currentPath !== '') {
        $items[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $pageTitle,
            'item' => BASE_URL . $currentPath
        ];
    }

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

