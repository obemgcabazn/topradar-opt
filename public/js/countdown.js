function CountdownTimer(elm,tl,mes){
 this.initialize.apply(this,arguments);
}
CountdownTimer.prototype={
 initialize:function(elm,tl,mes) {
  this.elem = document.getElementById(elm);
  this.tl = tl;
  this.mes = mes;
 },countDown:function(){
  var timer='';
  var today=new Date();
  var day=Math.floor((this.tl-today)/(24*60*60*1000));
  var hour=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*60*1000));
  var min=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*1000))%60;
  var sec=Math.floor(((this.tl-today)%(24*60*60*1000))/1000)%60%60;
  var me=this;

  if(hour < 10) {hour = "0" + hour}

  if( ( this.tl - today ) > 0 ){
   //timer += '<div class="number-wrapper"><div class="number day">'+day+'</div><div class="caption">Дней</div></div>';
   timer += '<div class="number-wrapper"><div class="number hour">'+hour+'</div><div class="caption">Часов</div></div>';
   timer += '<div class="number-wrapper"><div class="number min">'+this.addZero(min)+'</div><div class="caption">Минут</div></div>';
   timer += '<div class="number-wrapper"><div class="number sec">'+this.addZero(sec)+'</div><div class="caption">Секунд</div></div>';
   this.elem.innerHTML = timer;
   tid = setTimeout( function(){me.countDown();},10 );
  }else{
   this.elem.innerHTML = this.mes;
   return;
  }
 },addZero:function(num){ return ('0'+num).slice(-2); }
}

function CDT(){

 // Set countdown limit
 var tl = new Date('2018/03/01 00:00:00');

 // You can add time's up message here
 var timer = new CountdownTimer('CDT',tl,'<div class="number-wrapper"><div class="number end">Еще не поздно присоединиться! Оставьте контакты и вам позвонит менеджер.</div></div>');
 timer.countDown();
}

window.onload=function(){
 CDT();
}