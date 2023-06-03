const accordions = document.querySelector('.block-accordion');

accordions.addEventListener('click', e => {
    const accordion = e.target.closest('article');
    accordion.classList.toggle('active');
    const p = accordion.querySelector('p');
    p.style.height = accordion.classList.contains('active') ? p.scrollHeight + 'px' : "";
    accordion.setAttribute('aria-expanded', accordion.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
});
