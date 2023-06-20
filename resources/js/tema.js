if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}
export default function toggleTheme() {
    const htmlClasses = document.documentElement.classList;
    if (localStorage.theme === 'dark') {
        htmlClasses.remove('dark');
        localStorage.removeItem('theme');
    } else {
        htmlClasses.add('dark');
        localStorage.theme = 'dark';
    }
    console.log('tema atual: '+localStorage.theme)
}
