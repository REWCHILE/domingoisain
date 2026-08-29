/**
 * Lógica Principal de Interacción & Frontend Moderno
 * Domingo Isaín - Gasfíter Instalador Autorizado SEC
 */
(function() {
  'use strict';

  // 1. INICIALIZACIÓN CRÍTICA INMEDIATA: MENÚ MÓVIL OFF-CANVAS
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

  // 2. INICIALIZACIÓN DIFERIDA (Cero bloqueo de hilo principal)
  function initDeferredFeatures() {
    // BOTÓN "GO TO TOP"
    const goToTopBtn = document.getElementById('btn-go-to-top');
    let scrollTicking = false;

    function checkBottomScroll() {
      if (!goToTopBtn) return;
      const scrollY = window.scrollY || window.pageYOffset;
      const windowHeight = window.innerHeight;
      const documentHeight = document.documentElement.scrollHeight;
      const isAtBottom = (scrollY + windowHeight) >= (documentHeight - 220);

      if (isAtBottom) {
        goToTopBtn.classList.add('is-bottom-visible');
      } else {
        goToTopBtn.classList.remove('is-bottom-visible');
      }
      scrollTicking = false;
    }

    function onScrollThrottled() {
      if (!scrollTicking) {
        window.requestAnimationFrame(checkBottomScroll);
        scrollTicking = true;
      }
    }

    window.addEventListener('scroll', onScrollThrottled, { passive: true });
    window.addEventListener('resize', onScrollThrottled, { passive: true });

    if (goToTopBtn) {
      goToTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }

    // ACORDEÓN Y FILTROS DE FAQS
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
              const otherPane = other.querySelector('.faq-answer-pane');
              if (otherPane) otherPane.style.maxHeight = null;
            }
          });

          if (!isActive) {
            item.classList.add('active');
            pane.style.maxHeight = pane.scrollHeight + 'px';
          } else {
            item.classList.remove('active');
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

    // VISOR MODAL LIGHTBOX PARA CERTIFICADOS
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
      document.body.style.overflow = 'hidden';
    }

    function closeCertModal() {
      if (!modalBackdrop) return;
      modalBackdrop.classList.remove('modal-open');
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

    // COTIZADOR INTERACTIVO
    const calcPropertyOptions = document.querySelectorAll('[data-calc-property]');
    const calcProblemOptions = document.querySelectorAll('[data-calc-problem]');
    const summaryProperty = document.getElementById('calc-summary-property');
    const summaryProblem = document.getElementById('calc-summary-problem');
    const summaryMetros = document.getElementById('calc-summary-metros');
    const metrosInput = document.getElementById('calc-input-metros');
    const whatsappQuoteBtn = document.getElementById('btn-whatsapp-quote-export');

    let selectedProperty = 'Departamento';
    let selectedProblem = 'Fuga de Gas / Sello Rojo';
    let selectedMetros = '15 a 25 metros';

    function updateQuoteSummary() {
      if (summaryProperty) summaryProperty.textContent = selectedProperty;
      if (summaryProblem) summaryProblem.textContent = selectedProblem;
      if (summaryMetros) summaryMetros.textContent = selectedMetros;

      if (whatsappQuoteBtn) {
        const message = `Hola Domingo, coticé en tu sitio web:
- Inmueble: ${selectedProperty}
- Necesidad: ${selectedProblem}
- Tramo estimado: ${selectedMetros}
¿Me podrías indicar disponibilidad y presupuesto estimado? Muchas gracias.`;

        whatsappQuoteBtn.href = `https://api.whatsapp.com/send?phone=56949877316&text=${encodeURIComponent(message)}`;
      }
    }

    calcPropertyOptions.forEach(btn => {
      btn.addEventListener('click', function() {
        calcPropertyOptions.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        selectedProperty = this.getAttribute('data-calc-property');
        updateQuoteSummary();
      });
    });

    calcProblemOptions.forEach(btn => {
      btn.addEventListener('click', function() {
        calcProblemOptions.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
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

    // CARRUSELES MODULARES
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
          } else {
            dot.classList.remove('active');
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
        nextBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          goToSlide(currentSlide + 1);
          startAutoSlide();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          goToSlide(currentSlide - 1);
          startAutoSlide();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', (e) => {
          e.stopPropagation();
          goToSlide(idx);
          startAutoSlide();
        });
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

  // Ejecución no bloqueante
  if ('requestIdleCallback' in window) {
    window.requestIdleCallback(initDeferredFeatures, { timeout: 1500 });
  } else {
    setTimeout(initDeferredFeatures, 50);
  }
})();
