<p>Create</p>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div class="">
        <input type="text" name="title" placeholder="Title">
    </div>
    <div class="">
        <textarea name="description" placeholder="description" ></textarea>
    </div>
    <div class="">
        <button type="submit">SUBMIT</button>
    </div>
</form>
