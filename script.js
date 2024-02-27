// function passData(item_id) {
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "add-item.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             console.log(xhr.responseText); // Output: your_data_to_pass
//         }
//     };
//     xhr.send("item_id=" + encodeURIComponent(item_id));
// }