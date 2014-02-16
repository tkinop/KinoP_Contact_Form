<h2>お問い合わせフォーム</h2>

<form name="contact_form" action="/cform/contact/confirm" method="post">

	<table>
		<tr>
			<td>タイトル</td>
			<td>
				<?php echo Fuel\Core\Form::input('subject','',array()) ?>
			</td>
		</tr>
		<tr>
			<td>名前</td>
			<td>
				<?php echo Fuel\Core\Form::input('name','',array()) ?>
			</td>
		</tr>
		<tr>
			<td>メールアドレス</td>
			<td>
				<?php echo Fuel\Core\Form::input('address','',array()) ?>
			</td>
		</tr>
		<tr>
			<td>カテゴリ</td>
			<td>
				<?php echo Fuel\Core\Form::select('category','',$category) ?>
			</td>
		</tr>
		<tr>
			<td>内容</td>
			<td>
				<?php echo Fuel\Core\Form::textarea('body','',array()) ?>
			</td>
		</tr>
	</table>

	<button name="send" onclick="submit()">送信</button>
</form>