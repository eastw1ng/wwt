<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td id="header_search_title" colspan="2">
			Klanten zoeken
		</td>
	</tr>
	<tr>
		<td height="5px" colspan="2" style="font-size:0px;">&nbsp;</td>
	</tr>
	<tr>
		<td class="header_search_one">
			Klant code:
		</td>
		<td class="header_search_two">
			<input id="s1" type="text" name="one" class="global_input" />
		</td>
	</tr>
	<tr>
		<td class="header_search_one">
			Voornaam:
		</td>
		<td class="header_search_two">
			<input id="s2" type="text" name="one" class="global_input" />
		</td>
	</tr>
	<tr>
		<td class="header_search_one">
			Achternaam:
		</td>
		<td class="header_search_two">
			<input id="s3" type="text" name="one" class="global_input" />
		</td>
	</tr>
	<tr>
		<td class="header_search_one">
			Adres:
		</td>
		<td class="header_search_two">
			<input id="s4"type="text" name="one" class="global_input" />
		</td>
	</tr>
	<tr>
		<td class="header_search_one">
		</td>
		<td class="header_search_two" style="text-align:right;" onclick="javascript:window.location = window.location+buildLink();">
			<button type="submit" style="line-height:16px;">Submit</button>
		</td>
	</tr>
</table>
<script type="text/javascript">
	function buildLink(){
		var result = "/?"
		var s1 = document.getElementById('s1').value;
		var s2 = document.getElementById('s2').value;
		var s3 = document.getElementById('s3').value;
		var s4 = document.getElementById('s4').value;
		
		if(s1 != ""){result += "s1="+s1;}
		if(s2 != ""){result += "&s2="+s2;}
		if(s3 != ""){result += "&s3="+s3;}
		if(s4 != ""){result += "&s4="+s4;}
	
		return result;
	}	
</script>