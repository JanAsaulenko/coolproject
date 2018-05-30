let items = document.getElementsByClassName('__input');
console.log(items);
// let email = document.getElementById('email');
// if(email.className === '__input is-invalid'){
// email.value = "Неверные данные";
// email.style.color = 'red';
// }
// console.log(email);
for(let i=0;i<items.length;i++) {
    if (items[i].className ==='__input is-invalid'){
        console.log(items[i]);
        items[i].value='Неверные данные';
        items[i].style.color='red';
    }
}