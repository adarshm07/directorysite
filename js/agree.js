function apply()
{
document.frm.register-submit.disabled=true;
if(document.frm.chk.checked==true)
{
document.frm.register-submit.disabled=false;
}
if(document.frm.chk.checked==false)
{
document.frm.register-submit.enabled=false;
}
}