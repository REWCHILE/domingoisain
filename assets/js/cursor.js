/**
 * Aura Sutil del Mouse (Zero Latency - Puntero Nativo Instantáneo)
 * Domingo Isaín - Técnico en Ingeniería
 */

(function() {
  'use strict';

  // Desactivar completamente en móviles, tablets y emulaciones (pantallas <= 1024px o táctiles)
  if (window.innerWidth <= 1024 || window.matchMedia('(pointer: coarse)').matches || 'ontouchstart' in window || (navigator.maxTouchPoints && navigator.maxTouchPoints > 0)) {
    const existingAura = document.querySelector('.custom-cursor-aura');
    if (existingAura) existingAura.remove();
    return;
  }

  // Crear elemento de aura si no existe
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

  // Estados de Click
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

  // Hover reactivo en enlaces y botones
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
})();
