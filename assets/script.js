document.addEventListener('DOMContentLoaded', () => {
  const storageKey = 'portfolio-visited-pages';

  const normalizeHref = (href) => {
    try {
      const url = new URL(href, window.location.href);
      return url.pathname + url.search;
    } catch (error) {
      return null;
    }
  };

  const readVisitedPages = () => {
    try {
      const raw = window.localStorage.getItem(storageKey);
      return new Set(Array.isArray(JSON.parse(raw)) ? JSON.parse(raw) : []);
    } catch (error) {
      return new Set();
    }
  };

  const writeVisitedPages = (visitedPages) => {
    try {
      window.localStorage.setItem(storageKey, JSON.stringify([...visitedPages]));
    } catch (error) {}
  };

  const visitedPages = readVisitedPages();
  const currentPageKey = normalizeHref(window.location.pathname + window.location.search);
  if (currentPageKey) {
    visitedPages.add(currentPageKey);
    writeVisitedPages(visitedPages);
  }

  const markVisitedState = (anchor) => {
    const href = anchor.getAttribute('href');
    if (!href || href.startsWith('http') || href.startsWith('mailto') || href.startsWith('tel')) {
      return;
    }

    const targetKey = normalizeHref(href);
    if (!targetKey) {
      return;
    }

    const cardIcon = anchor.querySelector('.card-icon');
    if (!cardIcon) {
      return;
    }

    const isViewed = visitedPages.has(targetKey);
    cardIcon.classList.remove('is-viewed', 'is-unviewed');
    cardIcon.classList.add(isViewed ? 'is-viewed' : 'is-unviewed');
    cardIcon.style.backgroundColor = isViewed ? '#eeedfe' : '#e6f1fb';
    cardIcon.style.color = isViewed ? '#3c3489' : '#185fa5';

    anchor.addEventListener('click', () => {
      visitedPages.add(targetKey);
      writeVisitedPages(visitedPages);
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('main > div, main a[href], main .rounded-2xl').forEach((el, i) => {
    el.classList.add('animate');
    el.style.transitionDelay = (i * 0.08) + 's';
    setTimeout(() => observer.observe(el), 100);
});

  document.querySelectorAll('main a[href*="project.php?slug="], main a[href*="page.php?slug="]').forEach(markVisitedState);

  document.querySelectorAll('a[href*="page.php?slug="]').forEach(async card => {
    const href = card.getAttribute('href');
    try {
      const res = await fetch(href);
      const html = await res.text();
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');
      const count = doc.querySelectorAll('a[href*="project.php?slug="]').length;
      if (count > 0) {
        const badge = document.createElement('p');
        badge.textContent = count + ' projet' + (count > 1 ? 's' : '');
        badge.style.cssText = 'font-size:12px;color:#888;font-style:italic;margin:4px 0 10px;';
        card.querySelector('h3').after(badge);
      }
    } catch(e) {}
});

});