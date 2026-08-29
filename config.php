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
        'title' => 'Domingo Isaín | Gasfíter Instalador Autorizado SEC Clase 3 · Fugas de Gas Sin Romper',
        'description' => 'Servicio oficial de Domingo Isaín Plaza Caamaño (RUT 12.738.961-6). Detección y sellado de fugas de gas sin picar muros ni pisos con Prodoral R6-1 alemán. Garantía 3 años. Emergencias 24/7 al +56 9 4987 7316.',
        'canonical' => BASE_URL . '/',
        'h1' => 'Gasfíter Instalador Autorizado SEC Clase 3 en Santiago',
        'subtitle' => 'Especialista en Detección y Sellado de Fugas de Gas Sin Romper con Tecnología Alemana Prodoral R6-1',
        'view' => 'home'
    ],
    '/fugas/' => [
        'title' => 'Detección y Reparación de Fugas de Gas Sin Romper | Domingo Isaín Gasfíter SEC',
        'description' => 'Especialistas en detección milimétrica y sellado de fugas de gas interiores sin picar muros ni pisos. Prueba de hermeticidad y certificado DS66. Garantía 3 años.',
        'canonical' => BASE_URL . '/fugas/',
        'h1' => 'Detección y Sellado de Fugas de Gas Sin Romper Muros ni Pisos',
        'subtitle' => 'Solución definitiva para fugas subterráneas y empotradas con polímero alemán Prodoral R6-1 y Geófono Digital',
        'view' => 'fugas'
    ],
    '/fuga-de-gas/' => [
        'title' => '¿Fuga de Gas en Casa o Edificio? Atención de Urgencia 24/7 | Domingo Isaín',
        'description' => '¿Tienes olor a gas o te cortaron el suministro? Atención inmediata 24/7 en toda la Región Metropolitana por Instalador Autorizado SEC Clase 3.',
        'canonical' => BASE_URL . '/fuga-de-gas/',
        'h1' => 'Urgencias por Fuga de Gas: Diagnóstico y Sellado Rápido',
        'subtitle' => 'Restablecemos tu suministro de gas con máxima seguridad y certificación legal ante distribuidoras',
        'view' => 'fugas'
    ],
    '/gasfiter/' => [
        'title' => 'Servicios Profesionales de Gasfitería en Santiago | Domingo Isaín Gasfitería SEC',
        'description' => 'Gasfitería integral autorizada SEC: instalación de redes de gas y agua, mantención de calefonts, cambio de cañerías y solución de emergencias sanitarias.',
        'canonical' => BASE_URL . '/gasfiter/',
        'h1' => 'Servicios Integrales de Gasfitería Autorizada en Santiago',
        'subtitle' => 'Más de 30 años de experiencia al servicio de hogares, empresas y condominios en toda la Región Metropolitana',
        'view' => 'gasfiter'
    ],
    '/gasfiter-certificado/' => [
        'title' => 'Gasfíter Certificado SEC Clase 3 | Domingo Isaín Plaza Caamaño',
        'description' => 'Contrata a un profesional certificado por la Superintendencia de Electricidad y Combustibles (SEC). RUT 12.738.961-6. Seguridad, garantía y cumplimiento DS66.',
        'canonical' => BASE_URL . '/gasfiter-certificado/',
        'h1' => 'Gasfíter Certificado por la SEC: Tu Seguridad en Manos Expertas',
        'subtitle' => 'Credencial y autorización vigente para obras de gas, agua potable y regularización de instalaciones',
        'view' => 'gasfiter-certificado'
    ],
    '/gasfiter-autorizado/' => [
        'title' => 'Gasfíter Autorizado SEC en Región Metropolitana | Domingo Isaín',
        'description' => 'Instalador autorizado con cobertura en Las Condes, Providencia, Vitacura, Santiago Centro, Ñuñoa y todas las comunas de la RM. Llame al +56 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-autorizado/',
        'h1' => 'Instalador y Gasfíter Autorizado en Toda la Región Metropolitana',
        'subtitle' => 'Atención rápida en tu comuna con equipamiento móvil de detección y prueba de hermeticidad',
        'view' => 'gasfiter-certificado'
    ],
    '/instalador-sec/' => [
        'title' => 'Instalador SEC Clase 3 Oficial | Regularización de Sellos y Trámites DS66',
        'description' => 'Tramitación y solución para Sellos Rojos y Amarillos de gas. Pruebas de hermeticidad con certificado para Metrogas, Lipigas, Abastible y Gasco.',
        'canonical' => BASE_URL . '/instalador-sec/',
        'h1' => 'Instalador SEC Clase 3: Regularización y Sellos Verdes',
        'subtitle' => 'Levantamiento técnico de sellos rojos, normalización de tuberías y emisión de certificados reglamentarios',
        'view' => 'instalador-sec'
    ],
    '/gasfiter-certificado-sec/' => [
        'title' => 'Gasfíter Certificado SEC Santiago | Domingo Isaín RUT 12.738.961-6',
        'description' => 'Comprueba la vigencia de nuestra licencia SEC oficial. Reparación garantizada de fugas de gas, mantención de calefonts y pruebas manométricas.',
        'canonical' => BASE_URL . '/gasfiter-certificado-sec/',
        'h1' => 'Gasfíter Certificado SEC: Respaldo Oficial y Garantía por Escrito',
        'subtitle' => 'No arriesgues la seguridad de tu hogar con personal no autorizado. Calidad avalada por la normativa chilena',
        'view' => 'instalador-sec'
    ],
    '/deteccion-con-ultrasonido/' => [
        'title' => 'Detección de Fugas con Ultrasonido y Gas Trazador | Domingo Isaín',
        'description' => 'Geófonos sónicos digitales y tecnología de gas trazador (N2/H2) para ubicar fugas de agua y gas ocultas sin picar pisos ni destruir cerámicas.',
        'canonical' => BASE_URL . '/deteccion-con-ultrasonido/',
        'h1' => 'Detección Electrónica con Ultrasonido, Geófono y Gas Trazador',
        'subtitle' => 'Localización acústica y molecular de fugas subterráneas con precisión milimétrica sin daños estructurales',
        'view' => 'ultrasonido'
    ],
    '/gasfiter-autorizado-sec/' => [
        'title' => 'Gasfíter Autorizado SEC 24 Horas | Domingo Isaín Plaza Caamaño',
        'description' => 'Servicio de urgencias 24/7 para fugas de gas, corte de suministro y normalización de artefactos en Santiago. Teléfono directo +56 9 4987 7316.',
        'canonical' => BASE_URL . '/gasfiter-autorizado-sec/',
        'h1' => 'Servicio de Gasfitería Autorizada SEC Disponible 24/7',
        'subtitle' => 'Respuesta inmediata ante emergencias de gas en departamentos, casas y comunidades de edificios',
        'view' => 'gasfiter-certificado'
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
 * Función Helper para generar el JSON-LD de LocalBusiness / Plumber
 */
function getLocalBusinessJsonLd() {
    $data = [
        '@context' => 'https://schema.org',
        '@type' => ['LocalBusiness', 'Plumber', 'ProfessionalService'],
        '@id' => BASE_URL . '/#localbusiness',
        'name' => 'Domingo Isaín - Gasfíter Instalador Autorizado SEC Clase 3',
        'alternateName' => 'SellafuGas® Domingo Isaín',
        'description' => 'Especialista en detección y sellado de fugas de gas no destructivas con Prodoral R6-1 alemán, geófono ultrasonido, regularización de sellos rojos SEC y gasfitería general.',
        'url' => BASE_URL,
        'telephone' => PHONE_RAW,
        'email' => EMAIL_CONTACT,
        'priceRange' => '$$',
        'image' => [
            BASE_URL . '/assets/images/domingo-isain.webp',
            BASE_URL . '/assets/images/hero-home-main.webp',
            BASE_URL . '/assets/images/certificates/certificado-prodoral.webp'
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Santiago',
            'addressRegion' => 'Región Metropolitana',
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
        'hasCredential' => [
            '@type' => 'EducationalOccupationalCredential',
            'credentialCategory' => 'Licencia de Instalador de Gas Clase 3',
            'recognizedBy' => [
                '@type' => 'GovernmentOrganization',
                'name' => 'Superintendencia de Electricidad y Combustibles (SEC)',
                'url' => 'https://www.sec.cl'
            ]
        ],
        'founder' => [
            '@type' => 'Person',
            'name' => AUTHOR_NAME,
            'jobTitle' => 'Gasfíter e Instalador de Gas Autorizado SEC Clase 3',
            'identifier' => AUTHOR_RUT,
            'image' => BASE_URL . '/assets/images/domingo-isain.webp'
        ],
        'areaServed' => [
            'Santiago', 'Las Condes', 'Vitacura', 'Providencia', 'Ñuñoa', 'La Reina',
            'Lo Barnechea', 'Santiago Centro', 'San Miguel', 'La Florida', 'Maipú',
            'Peñalolén', 'Macul', 'Pudahuel', 'Quilicura', 'San Bernardo', 'Puente Alto',
            'Colina', 'Chicureo', 'Región Metropolitana'
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
