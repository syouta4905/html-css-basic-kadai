// 配列データを宣言する
const shoplist =['ご飯', '味噌汁', 'ハンバーグ','卵','お茶'];

// li要素を作成する
for (let i = 0; i < shoplist.length; i++){
  const shop = document.createElement('li');
shop.textContent = shoplist[i];
// ul要素をli要素の中に代入する
document.querySelector('ul').appendChild(shop);
}

