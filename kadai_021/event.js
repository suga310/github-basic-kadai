//btnというidを持つHTML要素を取得し定数に代入
const btn=document.getElementById('btn');

//textというidを持つHTML要素を取得し定数に代入
const text=document.getElementById('text');

//２秒後に非同期処理
//クリックしたらテキストが変わるようにする
btn.addEventListener('click',()=>{
    setTimeout(() => {
    text.textContent='ボタンをクリックしました';
    },2000);
});


