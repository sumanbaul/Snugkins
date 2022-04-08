let btnText = document.querySelector('#btnText');
let btnHtml = document.querySelector('#btnHtml');
let content = document.querySelector('#content');
let paragraph = document.querySelector('p');

btnText.addEventListener('click', () => {
    paragraph.innerText = 'Hello World';
});

btnHtml.addEventListener('click', () => {
    content.innerHTML = '<h1>Hello World</h1>';
});