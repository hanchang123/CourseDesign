// JavaScript Document
<script language="javascript">
function check (form) {
if  (form.name.value==""){
	     alert("请输入管理员名称");
				 } 
	if  (form.pwd.value==""){
		alert("请输入密码")；
		form.pwd.focus();
		return false;
	}
}
</script>		