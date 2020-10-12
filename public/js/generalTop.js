function clickTextTotal() {
  clickOutputText1();
  clickHiddenText1();
  // clickFocus();
}

function clickOutputText1() {
  var inputTodoText = document.createElement("span");
  var inputValue = document.getElementById("inputTodoText").value;
  const textPlus = '#' + inputValue;
  inputTodoText.innerText = textPlus;
  var outputText = document.getElementById("testarea");
  outputText.appendChild(inputTodoText);
  document.getElementById("inputTodoText").focus();
  // document.getElementById("inputTodoText").value();
  // inputTodoText = '';
  // console.log("test1");
  // console.log("test2");
  // inputValue.focus();
  // textPlus.value ='';
  // console.log("test3");
}

function clickHiddenText1() {
  var test = document.createElement("input");
  var inputTodoText = document.getElementById("inputTodoText").value;
  test.setAttribute("name", "heading[]");
  test.setAttribute("type", "hidden");
  test.setAttribute("value", inputTodoText);
  var testarea = document.getElementById("testarea");
  testarea.appendChild(test);
}

// function clickFocus() {
//   document.getElementById("inputTodoText").focus();
//   console.log("test2");
// }

function clickClear() {
  const testarea = document.getElementById("testarea");
  testarea.innerHTML ='';
}


// function clickClear () {
//   cosole.log("test1");
//   var clear = document.getElementById("testarea");
//   cosole.log("test1", clear);
//   clear.innerText ="";
//   cosole.log("test1");
// }



// 参考：https://blog.ver001.com/javascript-textarea-selectionstartend/
// function addText()
// {
// 	document.getElementById('textarea1').value
// 		+= document.getElementById('inputTodoText').value;
// }
// function addText2()
// {
// 	document.getElementById('textarea1').value
// 		+= document.getElementsByClassName('btn-lg').value;
// }

// function tagClick1() {
//   addElement1();
//   clickBtn1();
// }

// function addElement1() {
//   var element = document.createElement("span");
//   element.innerText = "#家族と会う" 
//   var testarea = document.getElementById("testarea");
//   testarea.appendChild(element);
// } 

// function clickBtn1() {
//   document.form1.heading.value = "#家族と会う";
// }

// function tagClick2() {
//   addElement2();
//   clickBtn2();
// }

// function addElement2() {
//   var element = document.createElement("span");
//   element.innerText = "#買い物に行く" 
//   var testarea = document.getElementById("testarea");
//   testarea.appendChild(element);
// } 

// function clickBtn2() {
//   document.form1.heading.value = "#買い物に行く";
// }

// 参考:https://techacademy.jp/magazine/20732
// function addElement1() {
  // 要素を作成する
  // var element = document.createElement("span");
  // var element = document.classList.add("test");
  // element.innerText = "#家族と会う" 

  // 要素を追加する「親要素」を指定する。
  // var testarea = document.getElementById("testarea");
  // 要素を追加する
  // testarea.appendChild(element);
  // 次の要素を改行して追加するために br 要素を追加する
  // testarea.appendChild(document.createElement(""));  
// } 

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