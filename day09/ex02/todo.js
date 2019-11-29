var	ft_list;
var	cookie;

window.onload = function ()
{
	document.getElementById("create").addEventListener("click", addTodo);
	ft_list = document.getElementById("ft_list");
	var get = unescape(getCookie("ToDo"));
	cookie = JSON.parse(get);
	cookie.forEach(function (e)
	{
		addEntry(e);	
	})
}

window.onunload = function ()
{
	saveCookie();
}

function saveCookie()
{
	var entries = ft_list.children;
	var tmp = [];
	for (var i = 0; i < entries.length; i++)
	{
		if (entries[i].tagName == 'DIV')	
		{
			tmp.unshift(entries[i].innerHTML);
		}
	}
	var toset = JSON.stringify(tmp);
	setCookie("ToDo", toset, 1);
}

function setCookie(cname,cvalue,exdays)
{
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires=" + d.toGMTString();
	var string = cname + "=" + escape(cvalue) + ";" + expires + ";path=/";
	document.cookie = string; 
}

function getCookie(cname)
{
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++)
   	{
		var c = ca[i];
		while (c.charAt(0) == ' ')
			c = c.substring(1);

		if (c.indexOf(name) == 0) 
			return c.substring(name.length, c.length);
	}
	return "";
}

function addTodo()
{
	var txt = prompt("Add ToDo item ?.");
	txt = txt.trim();
	if (txt)
	{
		addEntry(txt);
	}
}

function addEntry(txt)
{
	var div = document.createElement("div");
	div.className = "entry";
	div.innerHTML = escape_html(txt);
	div.addEventListener("click", deleteEntry);
	ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteEntry()
{
	if(confirm("Delete item?"))
	{
		this.parentElement.removeChild(this);
	}
}


function escape_html(str)
{
	return str.replace(/[<>]/g, function (tag){
		var replace_tags = {
			'<': '&lt;',
			'>': '&gt;'
		};
		return replace_tags[tag] || tag;
	});
}
