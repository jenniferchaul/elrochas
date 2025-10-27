document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const menu = document.getElementById('menu');
  const header = document.querySelector('header');
  let scrollY = 0;

  if (burger && menu) {
    const toggle = () => {
      const isOpen = menu.classList.toggle('open');
      burger.classList.toggle('opened', isOpen);
      document.body.classList.toggle('noscroll', isOpen);
      burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

      if (isOpen) {
        scrollY = window.scrollY || 0;
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollY}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';

        if (header) {
          header.style.position = 'fixed';
          header.style.top = '0';
          header.style.left = '0';
          header.style.right = '0';
          header.style.zIndex = '3000';
          if (!header.style.background) header.style.background = '#fff';
        }
      } else {
        document.body.classList.remove('noscroll');
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';

        if (header) {
          header.style.position = '';
          header.style.top = '';
          header.style.left = '';
          header.style.right = '';
          header.style.zIndex = '';
        }

        window.scrollTo(0, scrollY || 0);
      }
    };

    burger.addEventListener('click', toggle);
    burger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggle();
      }
    });

    menu.querySelectorAll('.menu-item:not(.has-submenu) a').forEach(a => {
      a.addEventListener('click', () => {
        if (menu.classList.contains('open')) toggle();
      });
    });
  }

  const submenuToggles = document.querySelectorAll('.has-submenu .submenu-toggle');

  submenuToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      if (window.innerWidth >= 980) return;

      e.preventDefault();
      const parentItem = toggle.closest('.has-submenu');
      const isActive = parentItem.classList.contains('active');

      document.querySelectorAll('.has-submenu.active').forEach(item => {
        if (item !== parentItem) {
          item.classList.remove('active');
        }
      });

      parentItem.classList.toggle('active', !isActive);
    });
  });

  document.querySelectorAll('.has-submenu .submenu a').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 980 && menu && menu.classList.contains('open')) {
        const toggle = () => {
          menu.classList.remove('open');
          burger.classList.remove('opened');
          document.body.classList.remove('noscroll');
          document.body.style.position = '';
          document.body.style.top = '';
          document.body.style.left = '';
          document.body.style.right = '';
          document.body.style.width = '';

          if (header) {
            header.style.position = '';
            header.style.top = '';
            header.style.left = '';
            header.style.right = '';
            header.style.zIndex = '';
          }
          window.scrollTo(0, scrollY || 0);
        };
        toggle();
      }
    });
  });

  if (header) {
    const onScroll = () => {
      if (window.scrollY > 50) header.classList.add('header--scrolled');
      else header.classList.remove('header--scrolled');
    };
    window.addEventListener('scroll', onScroll);
    onScroll();
  }

  const currentUrl = window.location.href;
  const navLinks = document.querySelectorAll('.menu-item .item-link');

  navLinks.forEach(link => {
    const linkUrl = link.getAttribute('href');

    if (currentUrl === linkUrl ||
      currentUrl === linkUrl + '/' ||
      currentUrl + '/' === linkUrl) {
      link.classList.add('active');
    }

    if (currentUrl.endsWith('/') && linkUrl.endsWith('/') &&
      currentUrl === linkUrl) {
      link.classList.add('active');
    }
  });

  const btn = document.getElementById('backToTop');
  if (btn) {
    const SHOW_AT = 200;

    const onScroll = () => {
      if (document.body.classList.contains('noscroll')) {
        btn.classList.remove('visible');
        return;
      }
      if (window.scrollY > SHOW_AT) btn.classList.add('visible');
      else btn.classList.remove('visible');
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    btn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});