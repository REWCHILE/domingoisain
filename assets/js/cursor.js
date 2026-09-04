/**
 * Aura Sutil del Mouse (Zero Latency - Puntero Nativo Instantáneo)
 * Domingo Isaín - Técnico en Ingeniería SEC
 * Optimizado para Lighthouse 100/100: Cero Reflow Forzado, Lazy Initialization
 */
(function() {
  'use strict';

  // Solo ejecutar si el dispositivo soporta hover y puntero fino (mouse de escritorio)
  // window.matchMedia NO causa reflow forzado ni consulta geometría de elementos
  if (typeof window === 'undefined' || !window.matchMedia) return;
  if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

  // Inicialización perezosa (Lazy Init): no toca el DOM hasta el primer movimiento de mouse
  function initCursor() {
    window.removeEventListener('mousemove', initCursor);

    let aura = document.querySelector('.custom-cursor-aura');
    if (!aura) {
      aura = document.createElement('div');
      aura.className = 'custom-cursor-aura';
      document.body.appendChild(aura);
    }

    let mouseX = -100;
    let mouseY = -100;
    let auraX = -100;
    let auraY = -100;
    let isHovered = false;
    let isEmergency = false;
    let isMoving = false;

    function renderAura() {
      const dx = mouseX - auraX;
      const dy = mouseY - auraY;
      auraX += dx * 0.45;
      auraY += dy * 0.45;

      aura.style.transform = `translate3d(${auraX}px, ${auraY}px, 0) translate(-50%, -50%) ${isHovered ? 'rotate(45deg)' : ''}`;

      if (Math.abs(dx) > 0.5 || Math.abs(dy) > 0.5) {
        requestAnimationFrame(renderAura);
      } else {
        isMoving = false;
      }
    }

    window.addEventListener('mousemove', function(e) {
      mouseX = e.clientX;
      mouseY = e.clientY;
      if (!isMoving) {
        isMoving = true;
        requestAnimationFrame(renderAura);
      }
    }, { passive: true });

    window.addEventListener('mousedown', function() {
      aura.classList.add('cursor-clicking');
    });

    window.addEventListener('mouseup', function() {
      aura.classList.remove('cursor-clicking');
    });

    document.addEventListener('mouseleave', function() {
      aura.classList.add('cursor-hidden');
    });

    document.addEventListener('mouseenter', function() {
      aura.classList.remove('cursor-hidden');
    });

    document.addEventListener('mouseover', function(e) {
      const target = e.target.closest('a, button, input, select, textarea, .cert-card, .faq-question-btn, .calc-option-btn, .service-card, [role="button"]');
      if (target) {
        isHovered = true;
        aura.classList.add('cursor-hover');

        if (target.classList.contains('emergency-pill') || target.closest('.top-emergency-bar') || target.classList.contains('btn-floating-whatsapp')) {
          isEmergency = true;
          aura.classList.add('cursor-emergency');
        }
      }
    });

    document.addEventListener('mouseout', function(e) {
      const target = e.target.closest('a, button, input, select, textarea, .cert-card, .faq-question-btn, .calc-option-btn, .service-card, [role="button"]');
      if (target) {
        isHovered = false;
        aura.classList.remove('cursor-hover');
        if (isEmergency) {
          isEmergency = false;
          aura.classList.remove('cursor-emergency');
        }
      }
    });
  }

  // Escuchar el primer movimiento de mouse de forma pasiva
  window.addEventListener('mousemove', initCursor, { once: true, passive: true });
})();
