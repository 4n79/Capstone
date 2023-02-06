function validation()
{
	var nam=document.comment.name.value;
	var nam1=document.getElementById('name_id');
	if(nam=="")
	{
		document.comment.name.focus();
		nam1.style.borderColor="#f00";
		return false;
	}
	var nam1=document.getElementById('name_id');
	nam1.style.borderColor="";
	
	var des=document.comment.designation.value;
	var des1=document.getElementById('designation_id');
	if(des=="")
	{
		document.comment.designation.focus();
		des1.style.borderColor="#f00";
		return false;
	}
	var des1=document.getElementById('designation_id');
	des.style.borderColor="";
	
	var mess=document.comment.message.value;
	var mess1=document.getElementById('message_id');
	if(mess=="")
	{
		document.comment.message.focus();
		mess1.style.borderColor="#f00";
		return false;
	}
}