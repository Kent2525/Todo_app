@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
  <h3 class="mt-5 text-center">仮トップページ</h3>
  <div class="text-center my-3">
    <a class="btn btn-primary" href="/admin/task">管理画面</a>
  </div>
  <div class="text-center" style="margin : 0 auto">
    <img src="{{ asset('image/welcomeTop5.jpg') }}" style="width: 85%;" alt="welcome Top">
  </div>
  <div style="margin: 0 300px;">
    <h3 class="text-center" style="margin-bottom: 80px;">帰国時の予定を建てましょう</h3>
    <div class="text-center">
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;" onclick="clickBtn3()" type="button">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="clickBtn4()" type="button">#買い物に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#お土産を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#日本食を食べる</button>
    </div>
    <div class="flex-box my-3">
      <div class="cp_iptxt mr-1">
        <input type="text" id="inputTodoText" placeholder="Todoを入力しましょう">
        <i class="fas fa-list-ul" aria-hidden="true"></i>
      </div>
      <button onclick="addText();" class="btn btn-outline-primary mr-5">Todo追加</button>
      </div>
      <!-- <input type="text" id="text1" value="挿入する文字"> -->
    <form action="" method="post" name="form1">
      <div class="text-center mt-4">
        <!-- <textarea id="textarea1" type="text" name="text1" placeholder="デフォルトの計画をクリックするか、上記の入力フォームからTodoを作成してください。" style="width: 750px; height: 210px; border: 1px solid #dbdbdb; resize: none;"></textarea> -->
        <div id="testarea" class="w-100" name="text2" style="border: 1px solid #dbdbdb; height: 150px;"></div>
        <input id="testinput" type="hidden" name="text1" value=""></input>
      </div>
      <div class="text-center" style="margin-left: 610px;">
        <button class="btn btn-success">リストを出力する</button>
      </div>  
    </form>  
  </div>
  <div class="tagContainer" style="margin: 80px 270px;">
    <div class="meetContainer">
      <h4 style="margin-bottom: 20px;">人と会う</h4>
      <button id="family" class="btn btn_tag btn-primary btn-lg testbutton" style="border-radius: 20px; margin-right: 30px;" onclick="addElement()">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="click1()">#友達と会う</button>
      <button id="koibito" class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#恋人に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#親戚に会う</button>
    </div>
    <div class="shoppingContainer">
      <h4 style="margin: 20px 0;">買い物</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#服を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#化粧を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#文房具を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#メガネを買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スーツを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スマホを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#PCを買う</button>

    </div>
    <div class="mealContainer">
      <h4 style="margin: 20px 0;">食事</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#日本食を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#寿司を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#ラーメンを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#カレーを食べる</button>
    </div>
    <div class="procedureContainer">
      <h4 style="margin: 20px 0;">手続き関連</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#役所へ行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#運転免許の更新</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#住民票手続き</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#大使館へ行く</button>
    </div>
    <div id="testbutton" class="btn btn-danger mt-4" >テストボタン</div>
      <form action="" method="post" name="form2">
        <div id="testarea2" class="w-75" name="text2" style="border: 1px solid #dbdbdb; height: 100px;">
          <p></p>
          <input id="testinput" type="hidden" name="" value=""></input>
        </div>
      </form>
    </div>  
    <div id="parent">
    <button>要素を追加</button><br>
  </div>

<script>
// 参考：https://blog.ver001.com/javascript-textarea-selectionstartend/
function addText()
{
	document.getElementById('textarea1').value
		+= document.getElementById('inputTodoText').value;
}
function addText2()
{
	document.getElementById('textarea1').value
		+= document.getElementsByClassName('btn-lg').value;
}

// 参考:https://techacademy.jp/magazine/20732
function addElement() {
  // 要素を作成する
  var element = document.createElement("span");
  // var element = document.classList.add("test");
  element.innerText = "#家族と会う" 

  // 要素を追加する「親要素」を指定する。
  var testarea = document.getElementById("testarea");
  // 要素を追加する
  testarea.appendChild(element);
  // 次の要素を改行して追加するために br 要素を追加する
  testarea.appendChild(document.createElement(""));
} 

function click1(){
  addElement2();
  clickBtn2();
}

function addElement2() {
    var element = document.createElement("span");
    element.innerText = "#友達と会う" 
    var testarea = document.getElementById("testarea");
    testarea.appendChild(element);
  } 

function clickBtn2(){
	document.form1.text1.value = "#友達と会う";
}


// $(function(){
//   $(‘#koibito‘).on('click', function(){
//   $(‘#testinput‘).val(‘#家族と会う’);
//   });
// });

  // document.getElementById("btn-lg").onclick = function() {
  //   document.getElementById("textarea").innerHTML = "クリック変化";
  // };

// // 参考:https://itsakura.com/js-textbox
// function clickBtn4(){
// 	// 値を設定
// 	document.form1.text1.value = "#買い物に行く";
// }

// function clickBtn5(){
// 	document.form1.text1.value = ""; //クリア
// }


// $(function(){
//   $(‘#testbutton‘).click(function(){
//   $(‘#testarea p‘).prepend(‘<span>spansample</span>’);
//   });
// });

// $(function(){
//   $(‘#testbutton‘).on('click', function(){
//   $(‘#testarea p‘).prepend(‘<span>spansample</span>’);
//   });
// });

// $('#testbutton').click(function() {
//   $('#testarea p').prepend(‘<span>spansample</span>’);
// }

// $('#testbutton').on('click', function() {
//   $('#testarea p').prepend(‘<span>spansample</span>’);
// }



// 参考:https://qiita.com/KKKarin/items/ccb8ed361ab9acd1f9cf
//   var myfunc = document.getElementById("myfunc");
// myfunc.addEventListener("click", function() {
//   console.log("ほげほげ1");
// });

// myfunc.addEventListener("click", function() {
//   console.log("ほげほげ２");
// });

// 参考:https://develop.logical-studio.com/web/20191213-js-class-addeventlistener/
// var testjava = document.querySelectorAll(".testjava");
//   testjava.forEach(function(target) {
//   target.addEventListener('mouseenter', function() {
//      target.firstElementChild.style.display = 'block';
//   });
//   target.addEventListener('mouseleave', function() {
//      target.firstElementChild.style.display = 'none';
//   });
// });
</script>

@endsection
