/**
 * Maestro Crown College - Main Frontend JS
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Drawer Navigation
    const mobileToggle = document.getElementById('mobileNavToggle');
    const mobileDrawer = document.getElementById('mobileNavDrawer');
    const drawerBackdrop = document.getElementById('drawerBackdrop');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');

    function openDrawer() {
        if (mobileDrawer && drawerBackdrop) {
            mobileDrawer.classList.add('open');
            drawerBackdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeDrawer() {
        if (mobileDrawer && drawerBackdrop) {
            mobileDrawer.classList.remove('open');
            drawerBackdrop.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
    if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeDrawer);
    if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);

    // Mobile submenu toggle
    const mobileSubmenuToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    mobileSubmenuToggles.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const parent = btn.closest('.mobile-nav-item');
            if (parent) {
                parent.classList.toggle('expanded');
            }
        });
    });

    // Gallery Lightbox Modal
    const galleryCards = document.querySelectorAll('.gallery-card');
    const lightboxModal = document.getElementById('galleryLightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxClose = document.getElementById('lightboxClose');

    if (galleryCards.length && lightboxModal) {
        galleryCards.forEach(card => {
            card.addEventListener('click', () => {
                const img = card.querySelector('img');
                const title = card.getAttribute('data-title') || (img ? img.alt : '');
                if (img && lightboxImg) {
                    lightboxImg.src = img.src;
                    if (lightboxTitle) lightboxTitle.textContent = title;
                    lightboxModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        if (lightboxClose) {
            lightboxClose.addEventListener('click', () => {
                lightboxModal.style.display = 'none';
                document.body.style.overflow = '';
            });
        }

        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal) {
                lightboxModal.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    }

    // Gallery Category Filter
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    if (filterBtns.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const category = btn.getAttribute('data-filter');

                galleryCards.forEach(card => {
                    const cardCat = card.getAttribute('data-category');
                    if (category === 'all' || cardCat === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // Admission Modal Trigger
    const admissionTriggers = document.querySelectorAll('.trigger-admission-modal');
    const admissionModal = document.getElementById('admissionModal');
    const admissionClose = document.getElementById('admissionModalClose');

    if (admissionModal) {
        admissionTriggers.forEach(btn => {
            btn.addEventListener('click', (e) => {
                // If it's a regular link on /admission page, let it scroll or link
                if (window.location.pathname.includes('/admission')) {
                    const formAnchor = document.getElementById('admissionFormSection');
                    if (formAnchor) {
                        formAnchor.scrollIntoView({ behavior: 'smooth' });
                        return;
                    }
                }
                e.preventDefault();
                admissionModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        });

        if (admissionClose) {
            admissionClose.addEventListener('click', () => {
                admissionModal.style.display = 'none';
                document.body.style.overflow = '';
            });
        }

        admissionModal.addEventListener('click', (e) => {
            if (e.target === admissionModal) {
                admissionModal.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    }

    // Auto-dismiss Flash Alerts after 6s
    const alerts = document.querySelectorAll('.alert-auto-dismiss');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';
            setTimeout(() => alert.remove(), 500);
        }, 6000);
    });
});
