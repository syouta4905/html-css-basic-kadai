let num = 15; // ここに1以上の正の数を代入します
if (num % 3 === 0 && num % 5 === 0) {
 console.log("3の倍数であり、5の倍数です");
} else if (num % 3 === 0) {
 console.log("3の倍数です");
} else if (num % 5 === 0) {
 console.log("5の倍数です");
} else {
 console.log(num);
}