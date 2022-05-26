<!DOCTYPE html>
<html lang='ja'>
	<head>
		<meta charset='UTF-8'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>
        
	</head>
	<body>
    <form>
        <table>
            <tbody>
                <tr>
                    <th>郵便番号</th>
                    <td>
                        <input id="input" class="zipcode" type="text" name="zipcode" value="" placeholder="例)8120012">
                        <button id="search" type="button">住所検索</button>
                        <p id="error"></p>
                    </td>
                </tr>

                <tr>
                    <th>都道府県</th>
                    <td><input id="address1" type="text" name="address1" value=""></td>
                </tr>

                <tr>
                    <th>市区町村</th>
                    <td><input id="address2" type="text" name="address2" value=""></td>
                </tr>

                <tr>
                    <th>町域</th>
                    <td><input id="address3" type="text" name="address3" value=""></td>
                </tr>
            </tbody>
        </table>
    </form>
        <script>
            let search = document.getElementById('search');
            search.addEventListener('click', ()=>{
                
                let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
                let error = document.getElementById('error');
                let input = document.getElementById('input');
                let address1 = document.getElementById('address1');
                let address2 = document.getElementById('address2');
                let address3 = document.getElementById('address3');
                let param = input.value.replace("-",""); //入力された郵便番号から「-」を削除
                let url = api + param;
                
                fetchJsonp(url, {
                    timeout: 10000, //タイムアウト時間
                })
                .then((response)=>{
                    error.textContent = ''; //HTML側のエラーメッセージ初期化
                    return response.json();  
                })
                .then((data)=>{
                    if(data.status === 400){ //エラー時
                        error.textContent = data.message;
                    }else if(data.results === null){
                        error.textContent = '郵便番号から住所が見つかりませんでした。';
                    } else {
                        address1.value = data.results[0].address1;
                        address2.value = data.results[0].address2;
                        address3.value = data.results[0].address3;
                    }
                })
                .catch((ex)=>{ //例外処理
                    console.log(ex);
                });
            }, false);
        </script>
	</body>

</html>