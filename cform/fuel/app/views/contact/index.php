<h2>お問い合わせフォーム</h2>

<form name="contact_form" action="#">
    
    <table>
        <tr>
            <td>タイトル</td>
            <td>
                <?php echo Fuel\Core\Form::input('title','',array()) ?>
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
                <?php echo Fuel\Core\Form::textarea('content','',array()) ?>
            </td>
        </tr>
    </table>
    
    <input type="submit" name="send" value="確認">
</form>