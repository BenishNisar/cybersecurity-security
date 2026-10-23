const menuButton = document.querySelector('[data-toggle-sidebar]');
const sidebar = document.querySelector('#admin-sidebar');
const backdrop = document.querySelector('[data-close-sidebar]');
function closeSidebar() {
    document.body.classList.remove('sidebar-open');
    menuButton?.setAttribute('aria-expanded', 'false');
    if (backdrop) backdrop.hidden = true;
}
menuButton?.addEventListener('click', () => {
    const open = document.body.classList.toggle('sidebar-open');
    menuButton.setAttribute('aria-expanded', String(open));
    backdrop.hidden = !open;
    if (open) sidebar.querySelector('a')?.focus();
});
backdrop?.addEventListener('click', closeSidebar);
document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && document.body.classList.contains('sidebar-open')) {
        closeSidebar();
        menuButton?.focus();
    }
    if (event.key === 'Tab' && document.body.classList.contains('sidebar-open')) {
        const links = sidebar.querySelectorAll('a, button');
        const first = links[0];
        const last = links[links.length - 1];
        if (event.shiftKey && document.activeElement === first) { event.preventDefault(); last.focus(); }
        else if (!event.shiftKey && document.activeElement === last) { event.preventDefault(); first.focus(); }
    }
});
window.matchMedia('(min-width: 1025px)').addEventListener('change', event => { if (event.matches) closeSidebar(); });
document.querySelectorAll('[data-password-toggle]').forEach(button => {
    button.addEventListener('click', () => {
        const input = document.getElementById(button.dataset.passwordToggle);
        const show = input.type === 'password';
        input.type = show ? 'text' : 'password';
        button.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    });
});
const dialog = document.querySelector('#confirm-dialog');
let pendingForm;
document.querySelectorAll('form[data-confirm]').forEach(form => {
    form.addEventListener('submit', event => {
        if (!dialog) return;
        event.preventDefault();
        pendingForm = form;
        document.querySelector('#confirm-message').textContent = form.dataset.confirm;
        dialog.showModal();
        dialog.querySelector('[data-cancel-delete]').focus();
    });
});
document.querySelector('[data-cancel-delete]')?.addEventListener('click', () => dialog.close());
document.querySelector('[data-approve-delete]')?.addEventListener('click', () => {
    if (pendingForm) { HTMLFormElement.prototype.submit.call(pendingForm); }
});
const source = document.querySelector('[data-slug-source]');
const target = document.querySelector('[data-slug-target]');
let slugTouched = Boolean(target?.value);
target?.addEventListener('input', () => { slugTouched = true; });
source?.addEventListener('input', () => {
    if (!slugTouched) target.value = source.value.toLowerCase().normalize('NFKD').replace(/[\u0300-\u036f]/g, '').replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
});
