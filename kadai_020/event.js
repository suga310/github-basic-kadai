//btnというidを持つHTML要素を取得し定数に代入
const btn=document.getElementById('btn');

//textというidを持つHTML要素を取得し定数に代入
const text=document.getElementById('text');

btn.addEventListener('click',()=>{
    text.textContent='ボタンをクリックしました';
    console.log('text');
})
