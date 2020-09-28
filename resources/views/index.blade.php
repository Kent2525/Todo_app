<form action="/aaa" method="POST">
  <div class="taginput"></div>
  <input type="hidden" name="tags" id="tags" value="">
  <div class="candidate">
    <span>PHP</span><span>Laravel</span><span>JavaScript</span>
  </div>
  <input type="submit" value="送信する">
</form>

<style>
.taginput {
  width: 100%;
  height: 2rem;
  border: 1px solid black;
}
.candidate {
  width: 100%;
  height: 2rem;
  border: 1px solid black;
  background-color: gray;
  color: white;
}
.candidate span::before{
  content: '#';
}
</style>

<script>
const spans = document.querySelectorAll('.candidate span');
const taginput = document.querySelector('.taginput');
const hiddeninput = document.getElementById('tags');

spans.forEach(span => {
  span.addEventListener('click', (event) => {
    taginput.appendChild(event.target.cloneNode(true));
    hiddeninput.value += '#' + event.target.textContent;
    taginput.childNodes.forEach(span => {
      span.addEventListener('click', (event) => {
        taginput.removeChild(event.target);
        hiddeninput.value = hiddeninput.value.replace('#' + event.target.textContent, '');　
      });
    });
  });
})
</script>
