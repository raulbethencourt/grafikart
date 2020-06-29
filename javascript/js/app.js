let ps = document.querySelectorAll('p');

for (let i = 0; i < ps.length; i++) {
    (function (p) {
        window.setInterval(function () {
            p.classList.toggle('red');
        }, 1500);
    })(ps[i])    
}

let ul = document.querySelector('ul');
console.log(ul.children);

let li = ul.querySelector('li:nth-child(6)');
console.log(li);

console.log(li.nextElementSibling);

console.log(li.parentElement);

console.log(li.parentElement.children);

li.parentElement.removeChild(li);

document.body.appendChild(li);


var li2 = document.createElement('li');
li2.textContent = 'hola la penyita';
li.parentElement.appendChild(li2);

li.parentElement.replaceChild(li2, li);

let last = document.querySelector('ul').lastElementChild;
li.parentElement.insertBefore(last, li2);