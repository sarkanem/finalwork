<nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/finalwork/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chat</li>
    </ol>
</nav>

<div class="container-fluid">
    <h1>Le chat room</h1>

    <div id="chatWindow" class="pre-scrollable">
      
        <p><span class="user">Henri:<br></span>Thank you for the awesome work!</p>
    </div>

    <div id="chatSubmission">
        <form>
            <div class="form-group">
                <input type="text" id="chatName" name="chatname" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="chatMessage">Your comment:</label>
                <textarea class="form-control" id="chatMessage" rows="3"></textarea>
                <small id="notice" class="form-text text-muted">Meow, purr or shriek, but please mind your
                    language!</small>
            </div>
            <button type="button" id="button" class="btn btn-secondary">Meow</button>
        </form>
    </div>

</div>