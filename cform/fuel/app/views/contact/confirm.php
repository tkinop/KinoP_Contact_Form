<h2>確認画面</h2>

<form id="form_confirm" action="/cform/contact/sendmail" method="post">

	<table>
		<tr>
			<td>タイトル</td>
			<td>
				<?php echo Fuel\Core\Form::label($subject, 'subject') ?>
			</td>
		</tr>
		<tr>
			<td>名前</td>
			<td>
				<?php echo Fuel\Core\Form::label($name, 'name') ?>
			</td>
		</tr>
		<tr>
			<td>メールアドレス</td>
			<td>
				<?php echo Fuel\Core\Form::label($address, 'address') ?>
			</td>
		</tr>
		<tr>
			<td>カテゴリ</td>
			<td>
				<?php echo Fuel\Core\Form::label($category, 'category') ?>
			</td>
		</tr>
		<tr>
			<td>内容</td>
			<td>
				<?php echo Fuel\Core\Form::label($body, 'body') ?>
			</td>
		</tr>
	</table>

	<button name="send" onclick="submit()">送信</button>
	<button name="send" onclick="document.getElementById('form_confirm').action='/cform/contact',submit()">編集</button>
</form>