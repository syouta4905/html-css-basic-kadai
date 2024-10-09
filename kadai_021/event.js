// HTMLの要素を取得
const textElement = document.getElementById('text');
const buttonElement = document.getElementById('btn');
// ボタンのクリックイベントに関数を登録
buttonElement.addEventListener('click', function() {
 // 2秒後に文章を変更
 setTimeout(function() {
   textElement.textContent = 'クリックされました！';
 }, 2000);
});