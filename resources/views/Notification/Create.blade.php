<form action="{{ route('StoreMessage') }}" method="post">

    <div>
        <label for="title">Enter Message Title </label>
        <input type="text" name="title" id="title" placeholder="title......"> <br>
        <label for="body"> Enter Message body</label>
        <input type="text" name="body" id="body" placeholder="body......"><br>
        <label for="to">to</label>
        <input type="text" name="to" id="to">
    </div>
    <div>
        {{ csrf_field() }}

        <input type="submit" value="send">
        <input type="reset" value="reset">
    </div>
</form>
