// 日付オブジェクトを作成
const today = new Date();
// 年、月、日を取得
const year = today.getFullYear();
const month = today.getMonth() + 1; // 月は0から始まるため、1を加える
const day = today.getDate();
// 日付を "YYYY年M月D日" の形式で整形
const formattedDate = `${year}年${month}月${day}日`;
// 日付を表示
console.log(formattedDate);