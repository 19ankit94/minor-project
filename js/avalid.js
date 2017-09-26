function myf()
{ var x=document.forms['login']['usr'].value;
  var y=document.forms['login']['pass'].value;
  if(x==""||x==null)
  {  alert("Please enter a username");
     return false;
  }
   else if(y==""||y==null)
  {  alert("Please enter a password");
     return false;
  }
}