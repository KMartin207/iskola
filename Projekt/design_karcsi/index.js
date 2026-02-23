// index.js

document.addEventListener('DOMContentLoaded', function () {
    const lightThemeSelector = document.querySelector('.light-theme');
    const darkerThemeSelector = document.querySelector('.darker-theme');
    const body = document.body;

    lightThemeSelector.addEventListener('click', function () {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
    });

    darkerThemeSelector.addEventListener('click', function () {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
    });
});
