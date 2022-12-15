document.addEventListener('DOMContentLoaded',()=>{
    const navOpenBtn = document.getElementById('open__nav');
    const navCloseBtn = document.getElementById('close__nav');

    const nav = document.getElementById('nav');

    navOpenBtn.addEventListener('click',()=>{
        nav.classList.add('open__nav');
        navOpenBtn.style.display = 'none';
    })

    navCloseBtn.addEventListener('click',()=>{
        nav.classList.remove('open__nav');
        navOpenBtn.style.display = null;
    })
})