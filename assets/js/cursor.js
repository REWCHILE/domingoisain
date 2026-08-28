/**
 * Aura Sutil del Mouse (Zero Latency - Puntero Nativo Instantáneo)
 * Domingo Isaín - Técnico en Ingeniería
 */

(function() {
  'use strict';

  // Desactivar en dispositivos táctiles
  if (window.matchMedia('(pointer: coarse)').matches || !('ontouchstart' in window === false)) {
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

  window.addEventListener('mousemove', function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  }, { passive: true });

  // Animación suave y ultra reactiva (factor 0.45 para respuesta instantánea)
  function renderAura() {
    auraX += (mouseX - auraX) * 0.45;
    auraY += (mouseY - auraY) * 0.45;

    aura.style.transform = `translate3d(${auraX}px, ${auraY}px, 0) translate(-50%, -50%) ${isHovered ? 'rotate(45deg)' : ''}`;

    requestAnimationFrame(renderAura);
  }
  requestAnimationFrame(renderAura);

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
