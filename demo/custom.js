function getName(){
alert(window.innerWidth);
alert(document.getElementById('firstName').value.length);

if(document.getElementById('firstName').value.length<=5){
return true;
}else{
alert('First name should be with in 5 char');
return false;
}
//alert('Thank you '+document.getElementById('firstName').value);
//alert('Thank you '+document.getElementsByName('name')[0].value);
//alert('Thank you '+document.getElementsByName('name')[1].value);
//window.location.href="http://google.com";

}