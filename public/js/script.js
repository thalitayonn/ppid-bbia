// JavaScript for PPID BBIA Website

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.createElement('button');
    mobileMenuToggle.className = 'mobile-menu-toggle';
    mobileMenuToggle.innerHTML = '☰';
    mobileMenuToggle.style.display = 'none';
    
    const navMenu = document.querySelector('.nav-menu');
    const mainNav = document.querySelector('.main-nav');
    
    // Add mobile menu toggle button
    if (mainNav && navMenu) {
        mainNav.querySelector('.container').insertBefore(mobileMenuToggle, navMenu);
        
        // Toggle mobile menu
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('mobile-open');
            mobileMenuToggle.innerHTML = navMenu.classList.contains('mobile-open') ? '✕' : '☰';
        });
    }
    
    // Handle dropdown menus on mobile
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const dropdownMenu = this.nextElementSibling;
                const isOpen = dropdownMenu.style.display === 'block';
                
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.style.display = 'none';
                });
                
                // Toggle current dropdown
                dropdownMenu.style.display = isOpen ? 'none' : 'block';
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add scroll effect to header
    let lastScrollTop = 0;
    const header = document.querySelector('.header');
    const mainNav = document.querySelector('.main-nav');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            mainNav.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        } else {
            mainNav.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Form validation for information request (if form exists)
    const infoRequestForm = document.querySelector('#info-request-form');
    if (infoRequestForm) {
        infoRequestForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                    
                    // Remove error on input
                    field.addEventListener('input', function() {
                        this.classList.remove('error');
                    });
                }
            });
            
            if (isValid) {
                // Show success message
                showNotification('Permohonan informasi berhasil dikirim!', 'success');
                this.reset();
            } else {
                showNotification('Mohon lengkapi semua field yang wajib diisi.', 'error');
            }
        });
    }
    
    // Notification system
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;
        
        // Style the notification
        Object.assign(notification.style, {
            position: 'fixed',
            top: '20px',
            right: '20px',
            padding: '15px 20px',
            borderRadius: '5px',
            color: 'white',
            fontWeight: '500',
            zIndex: '9999',
            transform: 'translateX(100%)',
            transition: 'transform 0.3s ease'
        });
        
        // Set background color based on type
        switch(type) {
            case 'success':
                notification.style.backgroundColor = '#10b981';
                break;
            case 'error':
                notification.style.backgroundColor = '#ef4444';
                break;
            case 'warning':
                notification.style.backgroundColor = '#f59e0b';
                break;
            default:
                notification.style.backgroundColor = '#3b82f6';
        }
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 5 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 5000);
    }
    
    // Search functionality (if search element exists)
    const searchInput = document.querySelector('#search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const searchableElements = document.querySelectorAll('.searchable');
            
            searchableElements.forEach(element => {
                const text = element.textContent.toLowerCase();
                const parent = element.closest('.news-card, .link-card');
                
                if (text.includes(searchTerm)) {
                    parent.style.display = 'block';
                } else {
                    parent.style.display = 'none';
                }
            });
        });
    }
    
    // Lazy loading for images
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
        });
    }
    
    // Print functionality
    const printButtons = document.querySelectorAll('.print-btn');
    printButtons.forEach(button => {
        button.addEventListener('click', function() {
            window.print();
        });
    });
    
    // Responsive adjustments
    function handleResponsive() {
        const width = window.innerWidth;
        
        if (width <= 768) {
            // Mobile specific adjustments
            document.body.classList.add('mobile');
            
            if (mobileMenuToggle) {
                mobileMenuToggle.style.display = 'block';
            }
        } else {
            // Desktop specific adjustments
            document.body.classList.remove('mobile');
            
            if (mobileMenuToggle) {
                mobileMenuToggle.style.display = 'none';
            }
            
            // Reset mobile menu state
            if (navMenu) {
                navMenu.classList.remove('mobile-open');
            }
            
            // Reset dropdown menus
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = '';
            });
        }
    }
    
    // Initial responsive check
    handleResponsive();
    
    // Listen for resize events
    window.addEventListener('resize', handleResponsive);
    
    // Accessibility improvements
    const skipLinks = document.createElement('a');
    skipLinks.href = '#main-content';
    skipLinks.textContent = 'Skip to main content';
    skipLinks.className = 'skip-link';
    
    // Style skip link
    Object.assign(skipLinks.style, {
        position: 'absolute',
        top: '-40px',
        left: '6px',
        background: '#1a3a5f',
        color: 'white',
        padding: '8px',
        textDecoration: 'none',
        borderRadius: '4px',
        zIndex: '10000',
        transition: 'top 0.3s'
    });
    
    skipLinks.addEventListener('focus', function() {
        this.style.top = '6px';
    });
    
    skipLinks.addEventListener('blur', function() {
        this.style.top = '-40px';
    });
    
    document.body.insertBefore(skipLinks, document.body.firstChild);
    
    // Add main content id for skip link
    const mainContent = document.querySelector('.main-content');
    if (mainContent) {
        mainContent.id = 'main-content';
    }
    
    // Keyboard navigation for dropdown menus
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const dropdownMenu = this.nextElementSibling;
                const isOpen = dropdownMenu.style.display === 'block';
                
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.style.display = 'none';
                });
                
                // Toggle current dropdown
                dropdownMenu.style.display = isOpen ? 'none' : 'block';
                
                // Focus first menu item if opened
                if (!isOpen) {
                    const firstMenuItem = dropdownMenu.querySelector('a');
                    if (firstMenuItem) {
                        firstMenuItem.focus();
                    }
                }
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-item')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
        }
    });
    
    console.log('PPID BBIA Website initialized successfully');
});
