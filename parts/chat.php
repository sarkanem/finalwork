<nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/finalwork/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chat</li>
    </ol>
</nav>

<div class="container-fluid">
    <h1>Le chat room</h1>
    
    <div id="chatWindow" class="pre-scrollable">
      
        <p><span class="user">Henri:<br></span>Thank you for your work!</p>
    </div>
    
    <div class="chatsubmission"></div>

    <div>
        <form>
            <div class="form-group">
                <input type="text" id="chatName" name="chatname" placeholder="chat name" required>
            </div>
            <div class="form-group">
                <label for="chatMessage">Your message:</label>
                <textarea class="form-control" id="chatMessage" name="chatMessage" rows="3" required></textarea>
                <small id="notice" class="form-text text-muted">Meow, purr or shriek, but please mind your
                    language!</small>
            </div>
            <button type="submit" id="button" class="btn btn-secondary">Meow</button>
        </form>
    </div>
</div>