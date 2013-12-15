<h2>お問い合わせフォーム</h2>

<form name="contact_form" action="/cform/contact/" method="post">

	<table>
		<tr>
			<td><?php echo Fuel\Core\Session::get_flash('message');?></td>
		</tr>
	</table>

	<button name="send" onclick="submit()">入力フォームへ戻る</button>
</form>