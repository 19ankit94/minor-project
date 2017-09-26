function myf()
{ var x=document.forms['cform']['cname'].value;
  var y=document.forms['cform']['cemail'].value;
  var z=document.forms['cform']['msg'].value;
  if(x==""||x==null)
  {  alert("Please enter your name");
     return false;
  }
   else if(y==""||y==null)
  {  alert("Please enter your email");
     return false;
  }
  else if(z==""||z==null)
  {  alert("Please enter a message");
     return false;
  }
}