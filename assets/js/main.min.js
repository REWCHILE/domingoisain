/**
 * Lógica Principal de Interacción & Frontend Moderno
 * Domingo Isaín - Gasfíter Instalador Autorizado SEC
 */
(function() {
  'use strict';

  // 1. MENÚ MÓVIL OFF-CANVAS
  const mobileMenuBtn = document.getElementById('mobile-menu-toggle');
  const mobileDrawer = document.getElementById('mobile-drawer');
  const mobileCloseBtn = document.getElementById('mobile-drawer-close');
  const mobileOverlay = document.getElementById('mobile-drawer-overlay');
  const mobileDrawerLinks = document.querySelectorAll('.mobile-drawer-link');

  function openDrawer() {
    if (mobileDrawer) {
      mobileDrawer.classList.add('drawer-open');
      mobileDrawer.setAttribute('aria-hidden', 'false');
    }
    if (mobileOverlay) mobileOverlay.classList.add('drawer-open');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    if (mobileDrawer) {
      mobileDrawer.classList.remove('drawer-open');
      mobileDrawer.setAttribute('aria-hidden', 'true');
    }
    if (mobileOverlay) mobileOverlay.classList.remove('drawer-open');
    document.body.style.overflow = '';
  }

  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      openDrawer();
    });
  }

  if (mobileCloseBtn) {
    mobileCloseBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      closeDrawer();
    });
  }

  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', closeDrawer);
  }

  mobileDrawerLinks.forEach(link => {
    link.addEventListener('click', closeDrawer);
  });

  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeDrawer();
  });

  // Gesto táctil swipe hacia la izquierda para cerrar el drawer
  let drawerTouchStartX = 0;
  let drawerTouchEndX = 0;

  if (mobileDrawer) {
    mobileDrawer.addEventListener('touchstart', (e) => {
      drawerTouchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    mobileDrawer.addEventListener('touchend', (e) => {
      drawerTouchEndX = e.changedTouches[0].screenX;
      if (drawerTouchStartX - drawerTouchEndX > 50) {
        closeDrawer();
      }
    }, { passive: true });
  }

  // 2. FAQS ACCORDION Y FILTROS
  function initFaqs() {
    const faqItems = document.querySelectorAll('.faq-item');
    const catButtons = document.querySelectorAll('.faq-cat-btn');

    faqItems.forEach(item => {
      const btn = item.querySelector('.faq-question-btn');
      const pane = item.querySelector('.faq-answer-pane');

      if (btn && pane) {
        btn.addEventListener('click', () => {
          const isActive = item.classList.contains('active');

          faqItems.forEach(other => {
            if (other !== item) {
              other.classList.remove('active');
              const otherBtn = other.querySelector('.faq-question-btn');
              const otherPane = other.querySelector('.faq-answer-pane');
              if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
              if (otherPane) otherPane.style.maxHeight = null;
            }
          });

          if (!isActive) {
            item.classList.add('active');
            btn.setAttribute('aria-expanded', 'true');
            pane.style.maxHeight = pane.scrollHeight + 'px';
          } else {
            item.classList.remove('active');
            btn.setAttribute('aria-expanded', 'false');
            pane.style.maxHeight = null;
          }
        });
      }
    });

    catButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        catButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const selectedCat = this.getAttribute('data-category');

        faqItems.forEach(item => {
          const itemCat = item.getAttribute('data-category');
          item.style.display = (selectedCat === 'all' || itemCat === selectedCat) ? 'block' : 'none';
        });
      });
    });
  }

  // 3. COTIZADOR INTERACTIVO (Accessible & Agent-Ready)
  function initCalculator() {
    const calcPropertyOptions = document.querySelectorAll('[data-calc-property]');
    const calcProblemOptions = document.querySelectorAll('[data-calc-problem]');
    const summaryProperty = document.getElementById('calc-summary-property');
    const summaryProblem = document.getElementById('calc-summary-problem');
    const summaryMetros = document.getElementById('calc-summary-metros');
    const metrosInput = document.getElementById('calc-input-metros');
    const whatsappQuoteBtn = document.getElementById('btn-whatsapp-quote-export');

    let selectedProperty = 'Departamento';
    let selectedProblem = 'Fuga de Gas / Sellado sin Romper';
    let selectedMetros = 'Tramo estándar (hasta 15 metros)';

    function updateQuoteSummary() {
      if (summaryProperty) summaryProperty.textContent = selectedProperty;
      if (summaryProblem) summaryProblem.textContent = selectedProblem;
      if (summaryMetros) summaryMetros.textContent = selectedMetros;

      if (whatsappQuoteBtn) {
        const message = "Hola Domingo, cotice en tu sitio web:\n" +
          "- Inmueble: " + selectedProperty + "\n" +
          "- Necesidad: " + selectedProblem + "\n" +
          "- Tramo estimado: " + selectedMetros + "\n" +
          "Me podrias indicar disponibilidad y presupuesto estimado? Muchas gracias.";

        whatsappQuoteBtn.href = "https://api.whatsapp.com/send?phone=56949877316&text=" + encodeURIComponent(message);
      }
    }

    calcPropertyOptions.forEach(btn => {
      btn.addEventListener('click', function() {
        calcPropertyOptions.forEach(b => {
          b.classList.remove('active');
          b.setAttribute('aria-checked', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-checked', 'true');
        selectedProperty = this.getAttribute('data-calc-property');
        updateQuoteSummary();
      });
    });

    calcProblemOptions.forEach(btn => {
      btn.addEventListener('click', function() {
        calcProblemOptions.forEach(b => {
          b.classList.remove('active');
          b.setAttribute('aria-checked', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-checked', 'true');
        selectedProblem = this.getAttribute('data-calc-problem');
        updateQuoteSummary();
      });
    });

    if (metrosInput) {
      metrosInput.addEventListener('change', function() {
        selectedMetros = this.value;
        updateQuoteSummary();
      });
    }

    updateQuoteSummary();
  }

  // 4. MODAL LIGHTBOX, SCROLL TO TOP & STICKY HEADER
  function initModalsAndScroll() {
    const goToTopBtn = document.getElementById('btn-go-to-top');
    const headerMain = document.querySelector('.header-main');
    let scrollTicking = false;

    function handlePageScroll() {
      const scrollY = window.scrollY || window.pageYOffset;
      const windowHeight = window.innerHeight;
      const documentHeight = document.documentElement.scrollHeight;
      const isAtBottom = (scrollY + windowHeight) >= (documentHeight - 220);

      if (goToTopBtn) {
        if (isAtBottom) {
          goToTopBtn.classList.add('is-bottom-visible');
        } else {
          goToTopBtn.classList.remove('is-bottom-visible');
        }
      }

      if (headerMain) {
        if (scrollY > 15) {
          headerMain.classList.add('is-scrolled');
        } else {
          headerMain.classList.remove('is-scrolled');
        }
      }

      scrollTicking = false;
    }

    function onScrollThrottled() {
      if (!scrollTicking) {
        window.requestAnimationFrame(handlePageScroll);
        scrollTicking = true;
      }
    }

    window.addEventListener('scroll', onScrollThrottled, { passive: true });
    window.addEventListener('resize', onScrollThrottled, { passive: true });
    handlePageScroll();

    if (goToTopBtn) {
      goToTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }

    // Modal de Certificados
    const modalBackdrop = document.getElementById('cert-modal');
    const modalImage = document.getElementById('modal-cert-image');
    const modalTitle = document.getElementById('modal-cert-title');
    const modalDesc = document.getElementById('modal-cert-desc');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const certCards = document.querySelectorAll('.cert-card');

    function openCertModal(imageSrc, title, description) {
      if (!modalBackdrop) return;
      if (modalImage) modalImage.src = imageSrc;
      if (modalTitle) modalTitle.textContent = title;
      if (modalDesc) modalDesc.textContent = description;

      modalBackdrop.classList.add('modal-open');
      modalBackdrop.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeCertModal() {
      if (!modalBackdrop) return;
      modalBackdrop.classList.remove('modal-open');
      modalBackdrop.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    certCards.forEach(card => {
      card.addEventListener('click', function() {
        const src = this.getAttribute('data-cert-src');
        const title = this.getAttribute('data-cert-title');
        const desc = this.getAttribute('data-cert-desc');
        openCertModal(src, title, desc);
      });
    });

    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeCertModal);
    if (modalBackdrop) {
      modalBackdrop.addEventListener('click', function(e) {
        if (e.target === modalBackdrop) closeCertModal();
      });
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && modalBackdrop && modalBackdrop.classList.contains('modal-open')) {
        closeCertModal();
      }
    });
  }

  // 5. CARRUSELES / SLIDERS CON RESPUESTA TÁCTIL Y DE CLICK
  function initCarousels() {
    function initCarousel(prefix) {
      const sliderTrack = document.getElementById(`${prefix}-track`);
      const sliderCard = document.getElementById(`${prefix}-card`);
      const prevBtn = document.getElementById(`${prefix}-prev`);
      const nextBtn = document.getElementById(`${prefix}-next`);
      const dots = document.querySelectorAll(`#${prefix}-dots .hero-slider-dot`);
      const slides = sliderTrack ? sliderTrack.querySelectorAll('.hero-slide') : [];

      if (!sliderTrack || slides.length === 0) return;

      let currentSlide = 0;
      const totalSlides = slides.length;
      let autoSlideTimer = null;

      function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentSlide = index;

        sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;

        dots.forEach((dot, idx) => {
          if (idx === currentSlide) {
            dot.classList.add('active');
            dot.setAttribute('aria-current', 'true');
          } else {
            dot.classList.remove('active');
            dot.removeAttribute('aria-current');
          }
        });
      }

      function startAutoSlide() {
        stopAutoSlide();
        autoSlideTimer = setInterval(() => {
          goToSlide(currentSlide + 1);
        }, 5000);
      }

      function stopAutoSlide() {
        if (autoSlideTimer) {
          clearInterval(autoSlideTimer);
          autoSlideTimer = null;
        }
      }

      if (nextBtn) {
        const handleNext = (e) => {
          if (e) {
            e.preventDefault();
            e.stopPropagation();
          }
          goToSlide(currentSlide + 1);
          startAutoSlide();
        };
        nextBtn.addEventListener('click', handleNext);
        nextBtn.addEventListener('touchend', handleNext);
      }

      if (prevBtn) {
        const handlePrev = (e) => {
          if (e) {
            e.preventDefault();
            e.stopPropagation();
          }
          goToSlide(currentSlide - 1);
          startAutoSlide();
        };
        prevBtn.addEventListener('click', handlePrev);
        prevBtn.addEventListener('touchend', handlePrev);
      }

      dots.forEach((dot, idx) => {
        const handleDot = (e) => {
          if (e) {
            e.preventDefault();
            e.stopPropagation();
          }
          goToSlide(idx);
          startAutoSlide();
        };
        dot.addEventListener('click', handleDot);
        dot.addEventListener('touchend', handleDot);
      });

      if (sliderCard) {
        sliderCard.addEventListener('mouseenter', stopAutoSlide);
        sliderCard.addEventListener('mouseleave', startAutoSlide);
      }

      let touchStartX = 0;
      let touchEndX = 0;

      sliderTrack.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoSlide();
      }, { passive: true });

      sliderTrack.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 45) {
          goToSlide(currentSlide + 1);
        } else if (touchEndX - touchStartX > 45) {
          goToSlide(currentSlide - 1);
        }
        startAutoSlide();
      }, { passive: true });

      setTimeout(startAutoSlide, 2500);
    }

    initCarousel('hero-slider');
    initCarousel('cert-slider');
  }

  // 6. WEBMCP & AGENTIC BROWSING INTEGRATION (Lighthouse Agentic Browsing Standard)
  function initWebMCP() {
    const tools = {
      calculateGasfiterQuote: {
        name: 'calculateGasfiterQuote',
        description: 'Calcula un presupuesto estimado para servicios de gasfitería, detección de fugas sin romper o sello rojo SEC en Santiago.',
        parameters: {
          type: 'object',
          properties: {
            propertyType: {
              type: 'string',
              enum: ['Departamento', 'Casa 1 Piso', 'Casa 2 Pisos', 'Comercial / Empresa'],
              description: 'Tipo de inmueble o propiedad'
            },
            serviceType: {
              type: 'string',
              enum: ['Fuga de Gas / Sellado sin Romper', 'Levantamiento Sello Rojo SEC', 'Detección de Fuga de Agua', 'Prueba Hermeticidad DS66'],
              description: 'Tipo de problema o servicio requerido'
            },
            pipeLengthMeters: {
              type: 'string',
              description: 'Tramo aproximado de cañería en metros'
            }
          },
          required: ['propertyType', 'serviceType']
        },
        execute: async function(args) {
          const property = args.propertyType || 'Departamento';
          const service = args.serviceType || 'Fuga de Gas / Sellado sin Romper';
          const meters = args.pipeLengthMeters || 'Tramo estándar (hasta 15 metros)';

          const propBtn = document.querySelector(`[data-calc-property="${property}"]`);
          if (propBtn) propBtn.click();

          const servBtn = document.querySelector(`[data-calc-problem="${service}"]`);
          if (servBtn) servBtn.click();

          const metrosSelect = document.getElementById('calc-input-metros');
          if (metrosSelect) {
            metrosSelect.value = meters;
            metrosSelect.dispatchEvent(new Event('change'));
          }

          return {
            status: 'success',
            estimate: {
              property: property,
              service: service,
              meters: meters,
              technician: 'Domingo Isaín Plaza Caamaño (RUT 12.738.961-6)',
              license: 'Instalador de Gas Clase 3 SEC Oficial',
              warranty: '3 Años por escrito',
              technology: 'Sellado no invasivo Prodoral R6-1 alemán / Geófono digital',
              whatsappDirectLink: `https://api.whatsapp.com/send?phone=56949877316&text=${encodeURIComponent(`Hola Domingo, solicito presupuesto para ${service} en ${property} (${meters}).`)}`
            }
          };
        }
      },

      contactEmergencyService: {
        name: 'contactEmergencyService',
        description: 'Genera solicitud de atención técnica urgente 24/7 con Domingo Isaín por fuga de gas o corte de suministro.',
        parameters: {
          type: 'object',
          properties: {
            issueDescription: {
              type: 'string',
              description: 'Detalle de la emergencia (olor a gas, corte de medidor, sello rojo)'
            },
            commune: {
              type: 'string',
              description: 'Comuna o Región de Chile continental (ej. Santiago, Las Condes, Viña del Mar, Rancagua, Concepción)'
            }
          },
          required: ['issueDescription']
        },
        execute: async function(args) {
          const issue = args.issueDescription || 'Urgencia de gas';
          const commune = args.commune || 'Chile';
          return {
            status: 'emergency_ready',
            phonePrimary: '+56 9 4987 7316',
            phoneSecondary: '+56 9 3223 7072',
            availability: 'Todo Chile continental (excluye Isla de Pascua, Antártica e islas chilenas)',
            actionUrl: `https://api.whatsapp.com/send?phone=56949877316&text=${encodeURIComponent(`EMERGENCIA 24/7 en ${commune}: ${issue}`)}`
          };
        }
      },

      getSECVerificationInfo: {
        name: 'getSECVerificationInfo',
        description: 'Obtiene las credenciales técnicas y legales de Domingo Isaín ante la Superintendencia de Electricidad y Combustibles (SEC).',
        parameters: { type: 'object', properties: {} },
        execute: async function() {
          return {
            fullName: 'Domingo Isaín Plaza Caamaño',
            rut: '12.738.961-6',
            secLicense: 'Instalador de Gas Clase 3',
            secPortalVerificationUrl: 'https://wlhttp.sec.cl/rnii/public/licencia/qr?o=285eb263edf5cb049f3f4cc7fa0d2182',
            experienceYears: '30+',
            certifications: [
              'Superintendencia de Electricidad y Combustibles (Licencia Oficial SEC Clase 3)',
              'ChileValora - ECERLAB (Certificación Estatal de Competencias Laborales)',
              'Prodoral R6-1 DVGW / DIN EN 13090 (Certificación Alemana de Sellado de Gas)',
              'Pontificia Universidad Católica de Chile (PUC - Solución de Patologías en la Vivienda)',
              'Pontificia Universidad Católica de Chile (PUC - Supervisión de Obras para Edificación)',
              'Ingeniería Industrial (Gestión y Mantenimiento de Infraestructura Crítica)',
              'Ingeniería Química (Termodinámica de Gases, Fluidos y Corrosión)',
              'Euroinnova / Universidad Antonio de Nebrija (Máster en Ecología y Gestión Ambiental)',
              'Centro de Estudios Claustro Gómez (Instalaciones Sanitarias y Electromecánica)',
              'Ensayos Manométricos y Certificación Sello Verde DS66'
            ]
          };
        }
      }
    };

    // Exponer globalmente
    window.domingoIsainTools = tools;
    window.webmcp = window.webmcp || {};
    window.webmcp.tools = tools;

    // Registrar en navigator.modelContext (Chrome 150+ / WebMCP Origin Trial)
    if (typeof navigator !== 'undefined' && navigator.modelContext && typeof navigator.modelContext.registerTool === 'function') {
      try {
        Object.values(tools).forEach(tool => {
          navigator.modelContext.registerTool({
            name: tool.name,
            description: tool.description,
            inputSchema: tool.parameters,
            execute: tool.execute
          });
        });
      } catch (err) {
        console.debug('WebMCP registration notice:', err);
      }
    }
  }

  // Inicialización inmediata de todos los módulos
  initFaqs();
  initCalculator();
  initModalsAndScroll();
  initCarousels();
  initWebMCP();
})();
