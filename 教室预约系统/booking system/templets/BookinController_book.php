<?php
	if ($roomInfo != false) {
		
	}
?>
<div id="leftcolumn">
	<div id="bookinfo">
	<table>
		<tr>
			<td><lable for="date">日期</lable></td>
			<td>
			<input type="text" id="date" value="2017/5/12">
			</td>
		</tr>
		<tr>
			<td><lable for="period">时间段</lable></td>
			<td>
			<input type="text" id="period" value="9:00-10:00">
			</td>
		</tr>			
		<tr>
			<td>
				<lable for="type">类型</lable>
			</td>
			<td>
				<input type="text" id="type" value="小教室">
			</td>				
		</tr>
		<tr>
			<td>
				<lable for="roomname">会议室教室名</lable>
			</td>
			<td>
				<input type="text" id="roomname" value="202">
			</td>				
		</tr>
		<tr>
			<td>
				<lable for="declaration">说明</lable>
			</td>
			<td>
				<input type="text" id="declaration" value="容纳20人">
			</td>				
		</tr>
	</table>
	</div>	
</div>
<div id="rightcolumn">
	<div id="bookinfo1">
		<table>
			<tr>
				<td>
					<lable for="purpose">用途</lable>	
				</td>
				<td></td>
			</tr>
			<tr>
				<td height="180px" colspan="2">
					<textarea id="purpose" cols="30" rows="10">输入用途</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="预定">
				</td>
			</tr>
		</table>		
	</div>	
</div>

