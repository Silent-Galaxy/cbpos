/**
 * SilentGalaxy - Interactive Theme & Live Filter System
 */

document.addEventListener('DOMContentLoaded', () => {
    initThemeManager();
    initLiveFilter();
});

// 1. Theme Manager (Dark / Light toggle with LocalStorage)
function initThemeManager() {
    const savedTheme = localStorage.getItem('sg_theme') || 'dark';
    document.documentElement.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);

    const toggleBtn = document.getElementById('themeToggleBtn');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('sg_theme', newTheme);
            updateThemeIcon(newTheme);
        });
    }
}

function updateThemeIcon(theme) {
    const icon = document.querySelector('#themeToggleBtn i');
    if (!icon) return;
    if (theme === 'dark') {
        icon.className = 'fas fa-moon';
        icon.style.color = '#a855f7';
    } else {
        icon.className = 'fas fa-sun';
        icon.style.color = '#f59e0b';
    }
}

// 2. Smooth Live Filtering (No reload, pure interactive animations)
function initLiveFilter() {
    const checkboxes = document.querySelectorAll('.brand-filter-check');
    const searchInput = document.getElementById('filterSearchInput');
    const productItems = document.querySelectorAll('.product-item-col');
    const resetBtn = document.getElementById('resetFiltersBtn');

    function applyFilter() {
        const checkedBrands = Array.from(checkboxes)
            .filter(c => c.checked && c.value !== 'all')
            .map(c => c.value.toLowerCase());

        const isAllSelected = document.getElementById('filter-all')?.checked;
        const searchText = searchInput ? searchInput.value.trim().toLowerCase() : '';

        productItems.forEach(item => {
            const itemBrand = (item.getAttribute('data-brand') || '').toLowerCase();
            const itemTitle = (item.querySelector('.product-title')?.innerText || '').toLowerCase();

            const matchesBrand = isAllSelected || checkedBrands.length === 0 || checkedBrands.includes(itemBrand);
            const matchesSearch = !searchText || itemTitle.includes(searchText);

            if (matchesBrand && matchesSearch) {
                item.style.display = 'block';
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    item.style.transition = 'all 0.3s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 50);
            } else {
                item.style.transition = 'all 0.25s ease';
                item.style.opacity = '0';
                item.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 250);
            }
        });
    }

    // Checkbox interactions
    checkboxes.forEach(cb => {
        cb.addEventListener('change', (e) => {
            const parent = cb.closest('.filter-item-checkbox');
            if (cb.checked) {
                parent?.classList.add('active');
            } else {
                parent?.classList.remove('active');
            }

            if (cb.id === 'filter-all' && cb.checked) {
                checkboxes.forEach(other => {
                    if (other.id !== 'filter-all') {
                        other.checked = false;
                        other.closest('.filter-item-checkbox')?.classList.remove('active');
                    }
                });
            } else if (cb.id !== 'filter-all' && cb.checked) {
                const allCb = document.getElementById('filter-all');
                if (allCb) {
                    allCb.checked = false;
                    allCb.closest('.filter-item-checkbox')?.classList.remove('active');
                }
            }

            applyFilter();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFilter);
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            checkboxes.forEach(cb => {
                cb.checked = (cb.id === 'filter-all');
                if (cb.id === 'filter-all') {
                    cb.closest('.filter-item-checkbox')?.classList.add('active');
                } else {
                    cb.closest('.filter-item-checkbox')?.classList.remove('active');
                }
            });
            if (searchInput) searchInput.value = '';
            applyFilter();
        });
    }
}