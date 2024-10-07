// HTML要素を取得して定数に代入
const button = document.getElementById('btn');
const textElement = document.getElementById('text');

// ボタンがクリックされたときに実行される関数を定義
button.addEventListener('click', () => {
 textElement.textContent = 'ボタンがクリックされました！';
});