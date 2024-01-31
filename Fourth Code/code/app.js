let openshopping = document.querySelector('.shopping1');
let closeshopping = document.querySelector('.closeshopping');
let listcard = document.querySelector('.list');
let body = document.querySelector('body');
let total = document.querySelector('.shopping1');
let quantity = document.querySelector('.quantity1');

openshopping.addEventListener('click',()=>{
    body.classList.add('active');
})
let products =[
    {
        id:1,
        name:'PRODUCT NAME 1',
        image: '1.png',
        price:120000
    },
    {
        id:2,
        name:'PRODUCT NAME 2',
        image: '2.png',
        price:120000
    },
    {
        id:3,
        name:'PRODUCT NAME 3',
        image: '3.png',
        price:120000
    }
    {
        id:4,
        name:'PRODUCT NAME 4',
        image: '4.png',
        price:120000
    }
    {
        id:5,
        name:'PRODUCT NAME 5',
        image: '5.png',
        price:120000
    }
    {
        id:6,
        name:'PRODUCT NAME 6',
        image: '6.png',
        price:120000
    }
];

let listecards -[];
function initApp(){
      products.forEach((value, hey)=>{
      newDiv.innerHTML = list.appendChild(newDiv);

      })
}
initApp();