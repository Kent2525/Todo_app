function clickTotal1() {
  clickTest1();
  clickTest2();
}

function clickTest1() {
  var span = document.createElement("span");
  span.innerText = "#家族と会う"
  var testarea = document.getElementById("testarea");
  testarea.appendChild(span);
}

function clickTest2() {
  var test = document.createElement("input");
  test.setAttribute("name", "heading[]");
  test.setAttribute("type", "hidden");
  test.setAttribute("value", "家族と会う");
  var testarea = document.getElementById("testarea");
  testarea.appendChild(test);
}

function clickTotal2() {
  clickTest3();
  clickTest4();
}

function clickTest3() {
  var span = document.createElement("span");
  span.innerText = "#買い物に行く"
  var testarea = document.getElementById("testarea");
  testarea.appendChild(span);
}

function clickTest4() {
  var test = document.createElement("input");
  test.setAttribute("name", "heading[]");
  test.setAttribute("type", "hidden");
  test.setAttribute("value", "買い物に行く");
  var testarea = document.getElementById("testarea");
  testarea.appendChild(test);
}

function clickTotal3() {
  clickTest5();
  clickTest6();
}

function clickTest5() {
  var span = document.createElement("span");
  span.innerText = "#お土産を買う"
  var testarea = document.getElementById("testarea");
  testarea.appendChild(span);
}

function clickTest6() {
  var test = document.createElement("input");
  test.setAttribute("name", "heading[]");
  test.setAttribute("type", "hidden");
  test.setAttribute("value", "お土産を買う");
  var testarea = document.getElementById("testarea");
  testarea.appendChild(test);
}

function clickTotal4() {
  clickTest7();
  clickTest8();
}

function clickTest7() {
  var span = document.createElement("span");
  span.innerText = "#日本食を食べる"
  var testarea = document.getElementById("testarea");
  testarea.appendChild(span);
}

function clickTest8() {
  var test = document.createElement("input");
  test.setAttribute("name", "heading[]");
  test.setAttribute("type", "hidden");
  test.setAttribute("value", "日本食を食べる");
  var testarea = document.getElementById("testarea");
  testarea.appendChild(test);
}