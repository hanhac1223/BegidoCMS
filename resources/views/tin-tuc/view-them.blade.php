<form action="postThem" method="post">
    {{ csrf_field() }}
    <input type="text" name="ten">
    <select name="sel">
        <option value="sel-1">savdsv</option>
        <option value="sel-2">savdsv</option>
    </select>
    <button type="submit">Them</button>
</form>