<!-- 다크모드 -->
<input id="밤_낮" type="button" value="밤" onclick="
if(document.querySelector('#밤_낮').value === '밤'){
  document.querySelector('body').style.backgroundColor = 'black';
  document.querySelector('body').style.color = 'white';
  document.querySelector('#밤_낮').value = '낮';
} else {
  document.querySelector('body').style.backgroundColor = 'white';
  document.querySelector('body').style.color = 'black';
  document.querySelector('#밤_낮').value = '밤';
}
">
