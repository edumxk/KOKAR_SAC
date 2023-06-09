export default function alterarTema(){
    let btnk = document.getElementById('tkokar');
    let btnd = document.getElementById('tdark');
    let btnl = document.getElementById('tlight');

    btnk.addEventListener('click', function () {
        document.body.setAttribute('data-bs-theme', 'kokar');
        btnk.classList.add('active');
        btnd.classList.remove('active');
        btnl.classList.remove('active');
        tema = 'kokar';
    });
    btnd.addEventListener('click', function () {
        document.body.setAttribute('data-bs-theme', 'dark');
        btnd.classList.add('active');
        btnk.classList.remove('active');
        btnl.classList.remove('active');
        tema = 'dark';
    });
    btnl.addEventListener('click', function () {
        document.body.setAttribute('data-bs-theme', 'light');
        btnl.classList.add('active');
        btnk.classList.remove('active');
        btnd.classList.remove('active');
        tema = 'light';
    });
}
